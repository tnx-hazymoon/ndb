<?php
/*
	���Ѵؿ���
*/

$dbID = (-1);

/*%FNC--------------------------------
 Function	
 Process	
 Result		
 Memo		
 ------------------------------------*/
function dbgLog( $str )
{
	$CFG['log']['dir'] = ".";
	$CFG['log']['debug']['file'] = "debug.txt";
	$CFG['log']['debug']['max'] = 0;

	$now = date( "H:i:s" );
	$today = date( "Y-m-d" );

	$info = $CFG['log']['debug'];

	$log = $CFG['log']['dir'] . "/" . $info['file'];
	if( file_exists( $CFG['log']['dir'] ) == FALSE ) {
		$log = $CFG['root']['data'] . "/" . $info['file'];
	}

	if( file_exists( $log ) == TRUE && $info['max'] > 0 ) {
		$fst = stat( $log );
		if( $fst['size'] > $info['max'] ) {
			// �ե�����̾�����ա��������Ϳ������Τ��ѹ����롣
			$stamp = date( "Ymd-His" );
			rename( $log,$log . "." . $stamp );
		}
	}

	if( file_exists( $log ) == TRUE ) {
		$dstamp = FALSE;
		$fmod = date( "Y-m-d",filemtime( $log ) );
		if( $fmod != $today ) $dstamp = TRUE;
	}
	else {
		$dstamp = TRUE;
	}

	$fp = fopen( $log,"a" );
	if( $fp != FALSE ) {
		if( $dstamp == TRUE ) {
			fwrite( $fp,"Date: " . $today . "\n" );
		}
		if( is_array( $str ) == TRUE ) {
			$p = 1;
			foreach( $str as $line ) {
				$line = ereg_replace( "[\n\r]","/",$line );
				fwrite( $fp,$now . sprintf( "-%02d  ",$p ) . $line . "\n" );
				$p++;
			}
		}
		else {
			$line = ereg_replace( "[\n\r]","/",$str );
			fwrite( $fp,$now . sprintf( "-%02d  ",0 ) . $line . "\n" );
		}
		fclose( $fp );
	}
}


/*%FNC--------------------------------
 Function	DB��³
 Process	
 Result		
 Memo		
 ------------------------------------*/
function db_open()
{
	global	$dbID;
	global	$ndbDB;

	// �ǡ����١����ؤ���³
	if( $dbID = sqlite_open( $ndbDB['file'] ) ) {
//		create_table();
		return TRUE;
	}
	else {
		// connect����
		return FALSE;
	}
}

/*%FNC--------------------------------
 Function	DB����
 Process	
 Result		
 Memo		
 ------------------------------------*/
function db_close()
{
	global	$dbID;

	sqlite_close( $dbID );
	return TRUE;
}

/*%FNC--------------------------------
 Function	HTML���������׽�����URL����С����󥫡���������
 Process	
 Result		�Խ���̡�string����
 Memo		
 ------------------------------------*/
function line_output(
	$line	// ����ʸ�����string����
)
{
	global	$color_refer;

	$out = "";
	$mode = 0;
	$kc = "";
	$url = "";
	$url2 = "";
	$color = 0;

	$l = strlen( $line );

	for( $p = 0;$p < $l;$p++ ) {
		$c = substr( $line,$p,1 );
		$n = ord( $c );
		if( $mode == 0 ) {
			if( $kc == "" ) {
				if( $n >= 0x80 ) $kc = $c;
				else {
					switch( $c ) {
					case "<": $out = $out . "&lt;"; break;
					case ">":
						if( $p == 0 ) {
							$out = $out . "<font color=\"" . $color_refer . "\">&gt;<i>";
							$color = 1;
						}
						else {
							$out = $out . "&gt;";
						}
						break;
					case "&": $out = $out . "&amp;"; break;
					case "\"": $out = $out . "&quot;"; break;
					case " ": $out = $out . "&nbsp;"; break;
					case "\t": $out = $out . "&nbsp;&nbsp;"; break;
					default:
						if( substr( $line,$p,5 ) == "http:" ) {
							$url = $c;
							$url2 = $c;
							$mode = 1;
						}
						else {
							$out = $out . $c;
						}
					}
				}
			}
			else {
				$out = $out . $kc . $c;
				$kc = "";
			}
		}
		else if( $mode == 1 ) {
			if( $n > 0x80) {
				$out = $out . "<a href=\"" . $url . "\"><b>" . $url2 . "</b></a>";
				$kc = $c;
				$mode = 0;
			}
			if( $c == " " || $c == "\t" ) {
				$out = $out . "<a href=\"" . $url . "\"><b>" . $url2 . "</b></a>";
				switch( $c ) {
				case " ": $out = $out . "&nbsp;"; break;
				case "\t": $out = $out . "&nbsp;&nbsp;"; break;
				}
				$mode = 0;
			}
			else {
				$url = $url . $c;
				switch( $c ) {
				case "<": $url2 = $url2 . "&lt;"; break;
				case ">": $url2 = $url2 . "&gt;"; break;
				case "&": $url2 = $url2 . "&amp;"; break;
				case "\"": $url2 = $url2 . "&quot;"; break;
				case " ": $url2 = $url2 . "&nbsp;"; break;
				default:
					$url2 = $url2 . $c;
				}
			}
		}
	}

	if( $mode != 0 ) {
		if( $mode == 1 ) {
			$out = $out . "<a href=\"" . $url . "\"><b>" . $url2 . "</b></a>";
		}
	}

	if( $color > 0 ) {
		$out = $out . "</i></font>";
	}

	return $out;
}

/*%FNC--------------------------------
 Function	
 Process	
 Result		
 Memo		���ڤ�ʤ��ο���������դȤ��Ƹ��ڤ����񼰤��������֤���
			YYYYMMDD �� YYYY-MM-DD
			YYYYMM   �� YYYY-MM
			YYYY     �� YYYY
 ------------------------------------*/
function str2date(
	$str
)
{
	if( ctype_digit( $str ) ) {
		if( strlen( $str ) >= 4 ) {
			$y = (int)substr( $str,1,4 );
			if( strlen( $str ) >= 6 ) {
				$m = (int)substr( $str,5,2 );
				if( strlen( $str ) >= 8 ) {
					$d = (int)substr( $str,7,2 );
					if( checkdate( $m,$d,$y ) == TRUE ) return sprintf( "%04d-%02d-%02d",$y,$m,$d );
					else return "";
				}
				else {
					if( checkdate( $m,1,$y ) == TRUE ) return sprintf( "%04d-%02d",$y,$m );
					else return "";
				}
			}
			else {
				if( checkdate( 1,1,$y ) == TRUE ) return sprintf( "%04d",$y );
				else return "";
			}
		}
		else return "";
	}
	else return "";
}

/*%FNC--------------------------------
 Function	
 Process	
 Result		
 Memo		�����ե�����Υǡ������顢�������ꥳ����ʸ���������
 ------------------------------------*/
function form2find(
	$form	// �����ե�����ǡ���
)
{
	$wh = "where ( ";
	$f = 1;
	if( $form['style'] != "" ) {
		$wh .= "( style1=" . style2num( $form['style'] ) . " or style2=" . style2num( $form['style'] ) . " or style3=" . style2num( $form['style'] ) . " )";
		$f = 0;
	}
	if( $form['player'] != "" ) {
		if( $f == 0 ) $wh .= " and ";
		$wh .= "( player like '%" . sqlite_escape_string( $form['player'] ) . "%' )";
		$f = 0;
	}
	if( $form['keyword'] != "" ) {
		if( $f == 0 ) $wh .= " and ";
		$wh .= "( (profile like '%" . sqlite_escape_string( $form['keyword'] ) . "%') or (comment like '%" . sqlite_escape_string( $form['keyword'] ) . "%') or (name like '%" . sqlite_escape_string( $form['keyword'] ) . "%') or (post like '%" . sqlite_escape_string( $form['keyword'] ) . "%') )";
		$f = 0;
	}
	if( $form['category'] != "" && $form['category'] != "all" ) {
		if( $f == 0 ) $wh .= " and ";
		$wh .= "( category like '" . sqlite_escape_string( $form['category'] ) . "%' )";
		$f = 0;
	}

	if( $f != 0 ) return ""; else return $wh . " )";
}

/*%FNC--------------------------------
 Function	
 Process	
 Result		
 Memo		
 ------------------------------------*/
function strchk_userid(
	$uid	// ���������̾
)
{
	if( $uid == "" ) return FALSE;

	$l = strlen( $uid );

	for( $p = 0;$p < $l;$p++ ) {
		$c = substr( $uid,$p,1 );
		$n = ord( $c );
		if( $n >= 0x80 ) return FALSE;
		if( (ord( '0' ) > $n || $n > ord( '9' ))
		 && (ord( 'A' ) > $n || $n > ord( 'Z' ))
		 && (ord( 'a' ) > $n || $n > ord( 'z' ))
		 && $c != '.' && $c != '-' && $c != '_' ) return FALSE;
	}
	return TRUE;
}

/*%FNC--------------------------------
 Function	
 Process	
 Result		
 Memo		
 ------------------------------------*/
function strchk_passwd(
	$pass	// �ѥ����
)
{
	if( $pass == "" ) return FALSE;

	$l = strlen( $pass );

	for( $p = 0;$p < $l;$p++ ) {
		$c = substr( $pass,$p,1 );
		$n = ord( $c );
		if( $n >= 0x80 ) return FALSE;
		if( (ord( '!' ) > $n || $n > ord( '!' ))
		 && (ord( '#' ) > $n || $n > ord( '&' ))
		 && (ord( '(' ) > $n || $n > ord( '/' ))
		 && (ord( '0' ) > $n || $n > ord( '9' ))
		 && (ord( ':' ) > $n || $n > ord( '@' ))
		 && (ord( 'A' ) > $n || $n > ord( 'Z' ))
		 && (ord( '[' ) > $n || $n > ord( '[' ))
		 && (ord( ']' ) > $n || $n > ord( '_' ))
		 && (ord( 'a' ) > $n || $n > ord( 'z' ))
		 && (ord( '{' ) > $n || $n > ord( '~' )) ) return FALSE;
	}
	return TRUE;
}

/*%FNC--------------------------------
 Function	
 Process	
 Result		
 Memo		����å��ֹ椫�饹������̾���֤�
 ------------------------------------*/
function num2style(
	$code,
	$mode
)
{
	global $styleList;

	$st = array( "��", "-", "��" );

	foreach( $styleList as $rec ) {
		if( $code == $rec['no'] ) {
			$st = array( $rec['name'], $rec['alf'], $rec['knj'] );
		}
	}

	switch( $mode ) {
	case 0:  return $st[0];
	case 1:  return $st[1];
	case 2:  return $st[2];
	default: return $st[0];
	}
}

/*%FNC--------------------------------
 Function	
 Process	
 Result		
 Memo		��������̾���饿��å��ֹ���֤�
 ------------------------------------*/
function style2num(
	$name
)
{
	global $styleList;

	$low = strtolower( $name );

	foreach( $styleList as $rec ) {
		if( $name == $rec['name']
		 || $low == $rec['alf']
		  || $name == $rec['knj'] ) return $rec['no'];
	}

	return -99;
}

/*%FNC--------------------------------
 Function	
 Process	
 Result		
 Memo		���������ֹ棳�Ĥ��顢��������ɽ�����������롣
 ------------------------------------*/
function style2format(
	$style1,
	$style2,
	$style3,
	$persona,
	$key
)
{
	$out = "";

	$out .= num2style( $style1,0 );
	if( $style1 != $style2 ) {
		if( $persona == 1 ) $out .= "��";
		if( $key == 1 ) $out .= "��";
		$out .= " , ";
	}
	else $out .= "=";

	$out .= num2style( $style2,0 );
	if( $style1 == $style2 ) {
		if( $style2 != $style3 ) {
			if( $persona == 1 || $persona == 2 ) $out .= "��";
			if( $key == 1 || $key == 2 ) $out .= "��";
			$out .= " , ";
		}
		else $out .= "=";
	}
	else {
		if( $style2 != $style3 ) {
			if( $persona == 2 ) $out .= "��";
			if( $key == 2 ) $out .= "��";
			$out .= " , ";
		}
		else $out .= "=";
	}

	$out .= num2style( $style3,0 );
	if( $style1 == $style2 && $style2 == $style3 ) {
		$out .= "����";
	}
	else {
		if( $style2 == $style3 ) {
			if( $persona == 2 || $persona == 3 ) $out .= "��";
			if( $key == 2 || $key == 3 ) $out .= "��";
		}
		else {
			if( $persona == 3 ) $out .= "��";
			if( $key == 3 ) $out .= "��";
		}
	}

	return $out;
}

/*%FNC--------------------------------
 Function	
 Process	
 Result		
 Memo		
 ------------------------------------*/
function get_registform()
{
	global $cateList,$formSize;
	
	$data['name']      = getf_text( 'handle', "" );
	$data['post']      = getf_text( 'job', "" );
	$data['player']    = getf_text( 'player', "" );
	$data['lifepass']  = getf_text( 'lifepass', "" );
	$data['citizen']   = getf_text( 'id', "" );
	$data['age']       = getf_text( 'aj', "" );
	$data['jender']    = getf_text( 'jender', "" );
	$data['height']    = getf_text( 'heit', "" );
	$data['weight']    = getf_text( 'weit', "" );
	$data['eyes']      = getf_text( 'eyez', "" );
	$data['hair']      = getf_text( 'hair', "" );
	$data['skin']      = getf_text( 'skin', "" );
	$data['birthday']  = getf_text( 'birthday', "" );
	$data['photo']     = getf_text( 'photo', "" );
	$data['profile']   = getf_text( 'story', "" );
	$data['comment']   = getf_text( 'evolution', "" );
	$data['exp']       = getf_text( 'exp', "" );
	$data['pub_skill'] = getf_text( 'normalskill', "" );
	$data['spc_skill'] = getf_text( 'superskill', "" );
	$data['items']     = getf_text( 'outfit', "" );

	$data['category'] = getf_text( 'category', "" );
	if( $data['category'] != "" ) {
//		if( get_magic_quotes_gpc() == TRUE ) $data['category'] = stripslashes( $data['category'] );
		for( $p = 0;($p < $cateList['num'])&&($cateList[$p]['id'] != $data['category']);$p++ );
		if( $p >= $cateList['num'] ) $data['category'] = "-";
	}

	$data['reason_ab']   = getf_num( 'reason', 0);
	$data['reason_ct']   = getf_num( 'reason_c', 0);
	$data['passion_ab']  = getf_num( 'passion', 0);
	$data['passion_ct']  = getf_num( 'passion_c', 0);
	$data['life_ab']     = getf_num( 'life', 0);
	$data['life_ct']     = getf_num( 'life_c', 0);
	$data['mundane_ab']  = getf_num( 'mundane', 0);
	$data['mundane_ct']  = getf_num( 'mundane_c', 0);

	$data['combatspeed'] = getf_num( 'combatspeed', 0);
	$data['actionrank']  = getf_num( 'actionrank', 0);

	$data['style1'] = style2num( getf_text( 'style1', "" ) );
	$data['style2'] = style2num( getf_text( 'style2', "" ) );
	$data['style3'] = style2num( getf_text( 'style3', "" ) );

	$data['persona'] = getf_num( 'persona', (-1) );
	if( 1 > $data['persona'] || $data['persona'] > 3 ) $data['persona'] = (-1);

	$data['keyst'] = getf_num( 'key', (-1) );
	if( 1 > $data['keyst'] || $data['keyst'] > 3 ) $data['keyst'] = (-1);

	return $data;
/*
�ե����फ������ϥǡ���

handle		�ϥ�ɥ롢����饯��̾
job			�ݥ���
player		�ץ쥤�䡼̾
style1		��������ʥ�������̾��
style2		   ��
style3		   ��
persona		�ڥ륽�ʡʣ�������
key			�����ʣ�������
reason		����ǽ���͡ʿ�����
reason_c	���������͡ʿ�����
passion		����ǽ���͡ʿ�����
passion_c	���������͡ʿ�����
life		��̿ǽ���͡ʿ�����
life_c		��̿�����͡ʿ�����
mundane		����ǽ���͡ʿ�����
mundane_c	���������͡ʿ�����
combatspeed	CombatSpeed�ʿ�����
actionrank	ActionRank�ʿ�����
lifepass	�饤�եѥ���ʸ�����
photo		���᡼���ǡ���URL
id			��̱ID
aj			ǯ���ʸ�����
jender		����
heit		��Ĺ��ʸ�����
weit		�νš�ʸ�����
eyez		Ʒ��
hair		ȱ��
skin		ȩ��
birthday	��������ʸ�����
story		�ץ�ե�����
evolution	�и�����ʬ����������
exp			�и��͡�ʸ�����
normalskill	���̵�ǽ�ʲ��Ԥ�ޤ�ʸ�����
superskill	�ü쵻ǽ�ʲ��Ԥ�ޤ�ʸ�����
outfit		����������ʲ��Ԥ�ޤ�ʸ�����
*/

/*
DB��Ͽ�ѥǡ���

player
name
category
cat_tags
post
style1
style2
style3
persona
keyst
reason_ab
reason_ct
passion_ab
passion_ct
life_ab
life_ct
mundane_ab
mundane_ct
combatspeed
actionrank
lifepass
citizen
age
jender
height
weight
eyes
hair
skin
birthday
photo
exp
pub_skill
spc_skill
items
profile
comment
*/

}

/*%FNC--------------------------------
 Function	
 Process	
 Result		
 Memo		
 ------------------------------------*/
function char_copy(
	$rec	// �ǡ����١����쥳����
)
{
	if( isset( $rec['cid'] ) == TRUE ) $data['cid'] = $rec['cid'];
	$data['player']      = $rec['player'];
	$data['name']        = $rec['name'];
	$data['category']    = $rec['category'];
	$data['cat_tags']    = $rec['cat_tags'];
	$data['post']        = $rec['post'];
	$data['style1']      = (int)$rec['style1'];
	$data['style2']      = (int)$rec['style2'];
	$data['style3']      = (int)$rec['style3'];
	$data['persona']     = (int)$rec['persona'];
	$data['keyst']       = (int)$rec['keyst'];
	$data['reason_ab']   = (int)$rec['reason_ab'];
	$data['reason_ct']   = (int)$rec['reason_ct'];
	$data['passion_ab']  = (int)$rec['passion_ab'];
	$data['passion_ct']  = (int)$rec['passion_ct'];
	$data['life_ab']     = (int)$rec['life_ab'];
	$data['life_ct']     = (int)$rec['life_ct'];
	$data['mundane_ab']  = (int)$rec['mundane_ab'];
	$data['mundane_ct']  = (int)$rec['mundane_ct'];
	$data['combatspeed'] = (int)$rec['combatspeed'];
	$data['actionrank']  = (int)$rec['actionrank'];
	$data['lifepass']    = $rec['lifepass'];
	$data['citizen']     = $rec['citizen'];
	$data['age']         = $rec['age'];
	$data['jender']      = $rec['jender'];
	$data['height']      = $rec['height'];
	$data['weight']      = $rec['weight'];
	$data['eyes']        = $rec['eyes'];
	$data['hair']        = $rec['hair'];
	$data['skin']        = $rec['skin'];
	$data['birthday']    = $rec['birthday'];
	$data['photo']       = $rec['photo'];
	$data['exp']         = $rec['exp'];
	$data['pub_skill']   = $rec['pub_skill'];
	$data['spc_skill']   = $rec['spc_skill'];
	$data['items']       = $rec['items'];
	$data['profile']     = $rec['profile'];
	$data['comment']     = $rec['comment'];

	return $data;
}

/*%FNC--------------------------------
 Function	
 Process	
 Result		
 Memo		
 ------------------------------------*/
function char_read(
	$cid	// ����饯���ֹ�
)
{
	global $dbID;
	global $ndbDB;

	$que = "select * from " . $ndbDB['tbl'];
	$que = $que . " where";
	$que = $que . " cid=" . sprintf( "%d",$cid ) . ";";
	$result = sqlite_query( $dbID, $que );

	if( sqlite_num_rows( $result ) > 0 ) {
		if( $rec = sqlite_fetch_array( $result ) ) {
//			if( stripslashes( $record['cid'] ) == $cid ) {

				$data = char_copy( $rec );

				return $data;
//			}
		}
	}

	return FALSE;
}

/*%FNC--------------------------------
 Function	
 Process	
 Result		
 Memo		
 ------------------------------------*/
function char_regist(
	$pass,	// �ѥ����
	$data	// �ե�����ǡ���
)
{
	global $dbID;
	global $ndbDB;

	$now = date( "Y-m-d H:i:s",time() );

	$sql = "insert into " . $ndbDB['tbl'] . " values ( NULL,";
	$sql .= " '" . sqlite_escape_string( $data['player'] ) . "'";			// �ץ쥤�䡼
	$sql .= " ,'" . sqlite_escape_string( $pass ) . "'";					// �ѥ����
	$sql .= " ,'" . $now . "'";									// ��Ͽ��
	$sql .= " ,'" . $now . "'";									// �ǽ�������
	$sql .= " ,'" . sqlite_escape_string( $data['name'] ) . "'";			// ̾���ʥϥ�ɥ�ޤ��
	$sql .= " ,'" . sqlite_escape_string( $data['category'] ) . "'";		// ���ƥ���ID
	$sql .= " ,''";												// ���ƥ��꥿��
	$sql .= " ,'" . sqlite_escape_string( $data['post'] ) . "'";			// ����/��°
	$sql .= " ," . sprintf( "%d",$data['style1'] );				// �������룱
	$sql .= " ," . sprintf( "%d",$data['style2'] );				// �������룲
	$sql .= " ," . sprintf( "%d",$data['style3'] );				// �������룳
	$sql .= " ," . sprintf( "%d",$data['persona'] );			// �ڥ륽��
	$sql .= " ," . sprintf( "%d",$data['keyst'] );				// ����
	$sql .= " ," . sprintf( "%d",$data['reason_ab'] );			// ����ǽ����
	$sql .= " ," . sprintf( "%d",$data['reason_ct'] );			// ����������
	$sql .= " ," . sprintf( "%d",$data['passion_ab'] );			// ����ǽ����
	$sql .= " ," . sprintf( "%d",$data['passion_ct'] );			// ����������
	$sql .= " ," . sprintf( "%d",$data['life_ab'] );			// ��̿ǽ����
	$sql .= " ," . sprintf( "%d",$data['life_ct'] );			// ��̿������
	$sql .= " ," . sprintf( "%d",$data['mundane_ab'] );			// ����ǽ����
	$sql .= " ," . sprintf( "%d",$data['mundane_ct'] );			// ����������
	$sql .= " ," . sprintf( "%d",$data['combatspeed'] );		// CombatSpeed
	$sql .= " ," . sprintf( "%d",$data['actionrank'] );			// ActionRank
	$sql .= " ,'" . sqlite_escape_string( $data['lifepass'] ) . "'";		// �饤�եѥ�
	$sql .= " ,'" . sqlite_escape_string( $data['citizen'] ) . "'";		// ��̱ID
	$sql .= " ,'" . sqlite_escape_string( $data['age'] ) . "'";			// ǯ��
	$sql .= " ,'" . sqlite_escape_string( $data['jender'] ) . "'";		// ����
	$sql .= " ,'" . sqlite_escape_string( $data['height'] ) . "'";		// ��Ĺ
	$sql .= " ,'" . sqlite_escape_string( $data['weight'] ) . "'";		// �ν�
	$sql .= " ,'" . sqlite_escape_string( $data['eyes'] ) . "'";			// Ʒ�ο�
	$sql .= " ,'" . sqlite_escape_string( $data['hair'] ) . "'";			// ȱ�ο�
	$sql .= " ,'" . sqlite_escape_string( $data['skin'] ) . "'";			// ȩ�ο�
	$sql .= " ,'" . sqlite_escape_string( $data['birthday'] ) . "'";		// ������
	$sql .= " ,'" . sqlite_escape_string( $data['photo'] ) . "'";			// 
	$sql .= " ,'" . sqlite_escape_string( $data['exp'] ) . "'";			// ����и���
	$sql .= " ,'" . sqlite_escape_string( $data['pub_skill'] ) . "'";		// ���̵�ǽ
	$sql .= " ,'" . sqlite_escape_string( $data['spc_skill'] ) . "'";		// �ü쵻ǽ
	$sql .= " ,'" . sqlite_escape_string( $data['items'] ) . "'";			// ����
	$sql .= " ,'" . sqlite_escape_string( $data['profile'] ) . "'";		// ά��
	$sql .= " ,'" . sqlite_escape_string( $data['comment'] ) . "'";		// ������
	$sql .= " );";

//	dbgLog( $sql );

	if( $res = sqlite_query( $dbID, $sql ) == TRUE ) {
//		dbgLog( "char_regist: Ok" );
	}
	else {
//		dbgLog( "char_regist: NG" );
	}
}

/*%FNC--------------------------------
 Function	
 Process	
 Result		
 Memo		
 ------------------------------------*/
function char_update(
	$cid,	// ������ֹ�
	$pass,	// �ѥ����
	$data	// �ե�����ǡ���
)
{
	global $dbID;
	global $ndbDB;

	$now = date( "Y-m-d H:i:s",time() );

	$sql = "update " . $ndbDB['tbl'] . " set";
	$sql .= " player='" .       sqlite_escape_string( $data['player'] ) . "'";
	$sql .= ",updtime='" . $now . "'";
	$sql .= ",name='" .      sqlite_escape_string( $data['name'] ) . "'";
	$sql .= ",category='" .  sqlite_escape_string( $data['category'] ) . "'";
	$sql .= ",post='" .      sqlite_escape_string( $data['post'] ) . "'";
	$sql .= ",style1=" .      sprintf( "%d",$data['style1'] );
	$sql .= ",style2=" .      sprintf( "%d",$data['style2'] );
	$sql .= ",style3=" .      sprintf( "%d",$data['style3'] );
	$sql .= ",persona=" .     sprintf( "%d",$data['persona'] );
	$sql .= ",keyst=" .       sprintf( "%d",$data['keyst'] );
	$sql .= ",reason_ab=" .   sprintf( "%d",$data['reason_ab'] );
	$sql .= ",reason_ct=" .   sprintf( "%d",$data['reason_ct'] );
	$sql .= ",passion_ab=" .  sprintf( "%d",$data['passion_ab'] );
	$sql .= ",passion_ct=" .  sprintf( "%d",$data['passion_ct'] );
	$sql .= ",life_ab=" .     sprintf( "%d",$data['life_ab'] );
	$sql .= ",life_ct=" .     sprintf( "%d",$data['life_ct'] );
	$sql .= ",mundane_ab=" .  sprintf( "%d",$data['mundane_ab'] );
	$sql .= ",mundane_ct=" .  sprintf( "%d",$data['mundane_ct'] );
	$sql .= ",combatspeed=" . sprintf( "%d",$data['combatspeed'] );
	$sql .= ",actionrank=" .  sprintf( "%d",$data['actionrank'] );
	$sql .= ",lifepass='" .  sqlite_escape_string( $data['lifepass'] ) . "'";
	$sql .= ",citizen='" .   sqlite_escape_string( $data['citizen'] ) . "'";
	$sql .= ",age='" .       sqlite_escape_string( $data['age'] ) . "'";
	$sql .= ",jender='" .    sqlite_escape_string( $data['jender'] ) . "'";
	$sql .= ",height='" .    sqlite_escape_string( $data['height'] ) . "'";
	$sql .= ",weight='" .    sqlite_escape_string( $data['weight'] ) . "'";
	$sql .= ",eyes='" .      sqlite_escape_string( $data['eyes'] ) . "'";
	$sql .= ",hair='" .      sqlite_escape_string( $data['hair'] ) . "'";
	$sql .= ",skin='" .      sqlite_escape_string( $data['skin'] ) . "'";
	$sql .= ",birthday='" .  sqlite_escape_string( $data['birthday'] ) . "'";
	$sql .= ",photo='" .     sqlite_escape_string( $data['photo'] ) . "'";
	$sql .= ",exp='" .       sqlite_escape_string( $data['exp'] ) . "'";
	$sql .= ",pub_skill='" . sqlite_escape_string( $data['pub_skill'] ) . "'";
	$sql .= ",spc_skill='" . sqlite_escape_string( $data['spc_skill'] ) . "'";
	$sql .= ",items='" .     sqlite_escape_string( $data['items'] ) . "'";
	$sql .= ",profile='" .   sqlite_escape_string( $data['profile'] ) . "'";
	$sql .= ",comment='" .   sqlite_escape_string( $data['comment'] ) . "'";
	$sql .= " where cid=" .   sprintf( "%d",$cid ) . ";";

//	dbgLog( $sql );

	if( $res = sqlite_query( $dbID, $sql ) == TRUE ) {
//		dbgLog( "char_update: Ok" );
	}
	else {
//		dbgLog( "char_update: NG" );
	}
}

/*%FNC--------------------------------
 Function	
 Process	
 Result		
 Memo		
 ------------------------------------*/
function char_chpass(
	$cid,	// ������ֹ�
	$old,	// ��ѥ����
	$pass	// ���ѥ����
)
{
	global $dbID;
	global $ndbDB;

	$now = date( "Y-m-d H:i:s",time() );

	$sql = "update " . $ndbDB['tbl'] . " set";
	$sql .= " passwd='" . sqlite_escape_string( $pass ) . "'";
	$sql .= " where cid=" . sprintf( "%d",$cid ) . ";";

	$res = sqlite_query( $dbID, $sql );
}

/*%FNC--------------------------------
 Function	
 Process	
 Result		
 Memo		
 ------------------------------------*/
function char_passchk(
	$cid,	// ������ֹ�
	$pass	// �ѥ����
)
{
	global $dbID;
	global $ndbDB;

	$que = "select * from " . $ndbDB['tbl'];
	$que = $que . " where";
	$que = $que . " cid=" . sprintf( "%d",$cid ) . ";";
	$result = sqlite_query( $dbID, $que );

	if( sqlite_num_rows( $result ) > 0 ) {
		if( $record = sqlite_fetch_array( $result ) ) {
			if( $record['cid'] == $cid
			 && $record['passwd'] == $pass ) return TRUE;
		}
	}

	return FALSE;
}

/*%FNC--------------------------------
 Function	
 Process	
 Result		
 Memo		
 ------------------------------------*/
function char_delete(
	$cid	// ������ֹ�
)
{
	global $dbID;
	global $ndbDB;

	$que = "delete from " . $ndbDB['tbl'];
	$que = $que . " where";
	$que = $que . " cid=" . sprintf( "%d",$cid ) . ";";
	$result = sqlite_query( $dbID, $que );

	return TRUE;
	
}

/*%FNC--------------------------------
 Function	
 Process	
 Result		
 Memo		
 ------------------------------------*/
function create_table()
{
	global $dbID;
	global $ndbDB, $tblScheme;

	$sql = "create table " . $ndbDB['tbl'] . " ( ";
	$fst = TRUE;
	foreach( $tblScheme as $rec ) {
		if( $fst == TRUE ) {
			$fst = FALSE;
		}
		else {
			$sql .= ", ";
		}
		$sql .= $rec['name'] . " " . $rec['type'];
		if( $rec['pri'] == TRUE ) $sql .= " primary key";
	}
	$sql .= " );";

	$result = sqlite_query( $dbID, $sql );

	return TRUE;
}

?>
