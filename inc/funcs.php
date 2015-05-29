<?php
/*
	汎用関数群
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
			// ファイル名を、日付・時刻を付与したものに変更する。
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
 Function	DB接続
 Process	
 Result		
 Memo		
 ------------------------------------*/
function db_open()
{
	global	$dbID;
	global	$ndbDB;

	// データベースへの接続
	if( $dbID = new SQLite3( $ndbDB['file'] ) ) {
//		create_table();
		return TRUE;
	}
	else {
		// connect失敗
		return FALSE;
	}
}

/*%FNC--------------------------------
 Function	DB解放
 Process	
 Result		
 Memo		
 ------------------------------------*/
function db_close()
{
	global	$dbID;

	$dbID->close();
	return TRUE;
}

/*%FNC--------------------------------
 Function	HTMLエスケープ処理とURLの抽出・アンカータグ設置
 Process	
 Result		編集結果（string型）
 Memo		
 ------------------------------------*/
function line_output(
	$line	// 出力文字列（string型）
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
 Memo		区切りなしの数字列を日付として検証し、書式を整えて返す。
			YYYYMMDD → YYYY-MM-DD
			YYYYMM   → YYYY-MM
			YYYY     → YYYY
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
 Memo		検索フォームのデータから、検索指定コード文を作成する
 ------------------------------------*/
function form2find(
	$form	// 検索フォームデータ
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
		$wh .= "( player like '%" . SQLite3::escapeString( $form['player'] ) . "%' )";
		$f = 0;
	}
	if( $form['keyword'] != "" ) {
		if( $f == 0 ) $wh .= " and ";
		$wh .= "( (profile like '%" . SQLite3::escapeString( $form['keyword'] ) . "%') or (comment like '%" . SQLite3::escapeString( $form['keyword'] ) . "%') or (name like '%" . SQLite3::escapeString( $form['keyword'] ) . "%') or (post like '%" . SQLite3::escapeString( $form['keyword'] ) . "%') )";
		$f = 0;
	}
	if( $form['category'] != "" && $form['category'] != "all" ) {
		if( $f == 0 ) $wh .= " and ";
		$wh .= "( category like '" . SQLite3::escapeString( $form['category'] ) . "%' )";
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
	$uid	// アカウント名
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
	$pass	// パスワード
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
 Memo		タロット番号からスタイル名を返す
 ------------------------------------*/
function num2style(
	$code,
	$mode
)
{
	global $styleList;

	$st = array( "−", "-", "−" );

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
 Memo		スタイル名からタロット番号を返す
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
 Memo		スタイル番号３つから、スタイル表記を生成する。
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
		if( $persona == 1 ) $out .= "◎";
		if( $key == 1 ) $out .= "●";
		$out .= " , ";
	}
	else $out .= "=";

	$out .= num2style( $style2,0 );
	if( $style1 == $style2 ) {
		if( $style2 != $style3 ) {
			if( $persona == 1 || $persona == 2 ) $out .= "◎";
			if( $key == 1 || $key == 2 ) $out .= "●";
			$out .= " , ";
		}
		else $out .= "=";
	}
	else {
		if( $style2 != $style3 ) {
			if( $persona == 2 ) $out .= "◎";
			if( $key == 2 ) $out .= "●";
			$out .= " , ";
		}
		else $out .= "=";
	}

	$out .= num2style( $style3,0 );
	if( $style1 == $style2 && $style2 == $style3 ) {
		$out .= "◎●";
	}
	else {
		if( $style2 == $style3 ) {
			if( $persona == 2 || $persona == 3 ) $out .= "◎";
			if( $key == 2 || $key == 3 ) $out .= "●";
		}
		else {
			if( $persona == 3 ) $out .= "◎";
			if( $key == 3 ) $out .= "●";
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
フォームからの入力データ

handle		ハンドル、キャラクタ名
job			ポスト
player		プレイヤー名
style1		スタイル（スタイル名）
style2		   〃
style3		   〃
persona		ペルソナ（１〜３）
key			キー（１〜３）
reason		理性能力値（数字）
reason_c	理性制御値（数字）
passion		感情能力値（数字）
passion_c	感情制御値（数字）
life		生命能力値（数字）
life_c		生命制御値（数字）
mundane		外界能力値（数字）
mundane_c	外界制御値（数字）
combatspeed	CombatSpeed（数字）
actionrank	ActionRank（数字）
lifepass	ライフパス（文字列）
photo		イメージデータURL
id			市民ID
aj			年齢（文字列）
jender		性別
heit		身長（文字列）
weit		体重（文字列）
eyez		瞳色
hair		髪色
skin		肌色
birthday	誕生日（文字列）
story		プロファイル
evolution	経験値配分等、コメント
exp			経験値（文字列）
normalskill	一般技能（改行を含む文字列）
superskill	特殊技能（改行を含む文字列）
outfit		住居、装備等（改行を含む文字列）
*/

/*
DB登録用データ

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
	$rec	// データベースレコード
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
	$cid	// キャラクタ番号
)
{
	global $dbID;
	global $ndbDB;

	$que = "select * from " . $ndbDB['tbl'];
	$que = $que . " where";
	$que = $que . " cid=" . sprintf( "%d",$cid ) . ";";
	$result = $dbID->query( $que );

	if( num_rows( $result ) > 0 ) {
		if( $rec = $result->fetchArray() ) {
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
	$pass,	// パスワード
	$data	// フォームデータ
)
{
	global $dbID;
	global $ndbDB;

	$now = date( "Y-m-d H:i:s",time() );

	$sql = "insert into " . $ndbDB['tbl'] . " values ( NULL,";
	$sql .= " '" . SQLite3::escapeString( $data['player'] ) . "'";			// プレイヤー
	$sql .= " ,'" . SQLite3::escapeString( $pass ) . "'";					// パスワード
	$sql .= " ,'" . $now . "'";									// 登録日
	$sql .= " ,'" . $now . "'";									// 最終更新日
	$sql .= " ,'" . SQLite3::escapeString( $data['name'] ) . "'";			// 名前（ハンドル含む）
	$sql .= " ,'" . SQLite3::escapeString( $data['category'] ) . "'";		// カテゴリID
	$sql .= " ,''";												// カテゴリタグ
	$sql .= " ,'" . SQLite3::escapeString( $data['post'] ) . "'";			// 職業/所属
	$sql .= " ," . sprintf( "%d",$data['style1'] );				// スタイル１
	$sql .= " ," . sprintf( "%d",$data['style2'] );				// スタイル２
	$sql .= " ," . sprintf( "%d",$data['style3'] );				// スタイル３
	$sql .= " ," . sprintf( "%d",$data['persona'] );			// ペルソナ
	$sql .= " ," . sprintf( "%d",$data['keyst'] );				// キー
	$sql .= " ," . sprintf( "%d",$data['reason_ab'] );			// 理性能力値
	$sql .= " ," . sprintf( "%d",$data['reason_ct'] );			// 理性制御値
	$sql .= " ," . sprintf( "%d",$data['passion_ab'] );			// 感情能力値
	$sql .= " ," . sprintf( "%d",$data['passion_ct'] );			// 感情制御値
	$sql .= " ," . sprintf( "%d",$data['life_ab'] );			// 生命能力値
	$sql .= " ," . sprintf( "%d",$data['life_ct'] );			// 生命制御値
	$sql .= " ," . sprintf( "%d",$data['mundane_ab'] );			// 外界能力値
	$sql .= " ," . sprintf( "%d",$data['mundane_ct'] );			// 外界制御値
	$sql .= " ," . sprintf( "%d",$data['combatspeed'] );		// CombatSpeed
	$sql .= " ," . sprintf( "%d",$data['actionrank'] );			// ActionRank
	$sql .= " ,'" . SQLite3::escapeString( $data['lifepass'] ) . "'";		// ライフパス
	$sql .= " ,'" . SQLite3::escapeString( $data['citizen'] ) . "'";		// 市民ID
	$sql .= " ,'" . SQLite3::escapeString( $data['age'] ) . "'";			// 年齢
	$sql .= " ,'" . SQLite3::escapeString( $data['jender'] ) . "'";		// 性別
	$sql .= " ,'" . SQLite3::escapeString( $data['height'] ) . "'";		// 身長
	$sql .= " ,'" . SQLite3::escapeString( $data['weight'] ) . "'";		// 体重
	$sql .= " ,'" . SQLite3::escapeString( $data['eyes'] ) . "'";			// 瞳の色
	$sql .= " ,'" . SQLite3::escapeString( $data['hair'] ) . "'";			// 髪の色
	$sql .= " ,'" . SQLite3::escapeString( $data['skin'] ) . "'";			// 肌の色
	$sql .= " ,'" . SQLite3::escapeString( $data['birthday'] ) . "'";		// 誕生日
	$sql .= " ,'" . SQLite3::escapeString( $data['photo'] ) . "'";			// 
	$sql .= " ,'" . SQLite3::escapeString( $data['exp'] ) . "'";			// 消費経験点
	$sql .= " ,'" . SQLite3::escapeString( $data['pub_skill'] ) . "'";		// 一般技能
	$sql .= " ,'" . SQLite3::escapeString( $data['spc_skill'] ) . "'";		// 特殊技能
	$sql .= " ,'" . SQLite3::escapeString( $data['items'] ) . "'";			// 装備
	$sql .= " ,'" . SQLite3::escapeString( $data['profile'] ) . "'";		// 略歴
	$sql .= " ,'" . SQLite3::escapeString( $data['comment'] ) . "'";		// コメント
	$sql .= " );";

//	dbgLog( $sql );

	if( $res = $dbID->query( $sql ) == TRUE ) {
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
	$cid,	// キャラ番号
	$pass,	// パスワード
	$data	// フォームデータ
)
{
	global $dbID;
	global $ndbDB;

	$now = date( "Y-m-d H:i:s",time() );

	$sql = "update " . $ndbDB['tbl'] . " set";
	$sql .= " player='" .       SQLite3::escapeString( $data['player'] ) . "'";
	$sql .= ",updtime='" . $now . "'";
	$sql .= ",name='" .      SQLite3::escapeString( $data['name'] ) . "'";
	$sql .= ",category='" .  SQLite3::escapeString( $data['category'] ) . "'";
	$sql .= ",post='" .      SQLite3::escapeString( $data['post'] ) . "'";
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
	$sql .= ",lifepass='" .  SQLite3::escapeString( $data['lifepass'] ) . "'";
	$sql .= ",citizen='" .   SQLite3::escapeString( $data['citizen'] ) . "'";
	$sql .= ",age='" .       SQLite3::escapeString( $data['age'] ) . "'";
	$sql .= ",jender='" .    SQLite3::escapeString( $data['jender'] ) . "'";
	$sql .= ",height='" .    SQLite3::escapeString( $data['height'] ) . "'";
	$sql .= ",weight='" .    SQLite3::escapeString( $data['weight'] ) . "'";
	$sql .= ",eyes='" .      SQLite3::escapeString( $data['eyes'] ) . "'";
	$sql .= ",hair='" .      SQLite3::escapeString( $data['hair'] ) . "'";
	$sql .= ",skin='" .      SQLite3::escapeString( $data['skin'] ) . "'";
	$sql .= ",birthday='" .  SQLite3::escapeString( $data['birthday'] ) . "'";
	$sql .= ",photo='" .     SQLite3::escapeString( $data['photo'] ) . "'";
	$sql .= ",exp='" .       SQLite3::escapeString( $data['exp'] ) . "'";
	$sql .= ",pub_skill='" . SQLite3::escapeString( $data['pub_skill'] ) . "'";
	$sql .= ",spc_skill='" . SQLite3::escapeString( $data['spc_skill'] ) . "'";
	$sql .= ",items='" .     SQLite3::escapeString( $data['items'] ) . "'";
	$sql .= ",profile='" .   SQLite3::escapeString( $data['profile'] ) . "'";
	$sql .= ",comment='" .   SQLite3::escapeString( $data['comment'] ) . "'";
	$sql .= " where cid=" .   sprintf( "%d",$cid ) . ";";

//	dbgLog( $sql );

	if( $res = $dbID->query( $sql ) == TRUE ) {
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
	$cid,	// キャラ番号
	$old,	// 旧パスワード
	$pass	// 新パスワード
)
{
	global $dbID;
	global $ndbDB;

	$now = date( "Y-m-d H:i:s",time() );

	$sql = "update " . $ndbDB['tbl'] . " set";
	$sql .= " passwd='" . SQLite3::escapeString( $pass ) . "'";
	$sql .= " where cid=" . sprintf( "%d",$cid ) . ";";

	$res = $dbID->query( $sql );
}

/*%FNC--------------------------------
 Function	
 Process	
 Result		
 Memo		
 ------------------------------------*/
function char_passchk(
	$cid,	// キャラ番号
	$pass	// パスワード
)
{
	global $dbID;
	global $ndbDB;

	$que = "select * from " . $ndbDB['tbl'];
	$que = $que . " where";
	$que = $que . " cid=" . sprintf( "%d",$cid ) . ";";
	$result = $dbID->query( $que );

	if( num_rows( $result ) > 0 ) {
		if( $record = $result->fetchArray() ) {
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
	$cid	// キャラ番号
)
{
	global $dbID;
	global $ndbDB;

	$que = "delete from " . $ndbDB['tbl'];
	$que = $que . " where";
	$que = $que . " cid=" . sprintf( "%d",$cid ) . ";";
	$result = $dbID->query( $que );

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

	$result = $dbID->query( $sql );

	return TRUE;
}

/*%FNC--------------------------------
 Function	
 Process	
 Result		
 Memo		
 ------------------------------------*/
function num_rows(
	$result
)
{
	$num = 0;
	while ( $result->fetchArray() ) {
		$num++;
	}
	$result->reset();

	return $num;
}

?>
