<?php
// 共通関数群
?>
<?php
/*%FNC--------------------------------
 Function	フォームから文字列を取得する
 Process	
 Result		
 Memo		
 ------------------------------------*/
function getf_text(
	$key,
	$def = ""
)
{
	if( get_magic_quotes_gpc() == 0 ) {
		return (isset( $_REQUEST[$key] ) == TRUE ? $_REQUEST[$key] : $def);
	}
	else {
		return (isset( $_REQUEST[$key] ) == TRUE ? stripslashes( $_REQUEST[$key] ) : $def);
	}
}

/*%FNC--------------------------------
 Function	フォームから数値を取得する
 Process	
 Result		
 Memo		
 ------------------------------------*/
function getf_num(
	$key,
	$def = 0
)
{
	if( isset( $_REQUEST[$key] ) ) {
		if( get_magic_quotes_gpc() == 0 ) {
			if( ctype_digit( $_REQUEST[$key] ) == TRUE ) {
				$n = (int) $_REQUEST[$key];
				return $n;
			}
			else return $def;
		}
		else {
			if( ctype_digit( stripslashes( $_REQUEST[$key] ) ) == TRUE ) {
				$n = (int) stripslashes( $_REQUEST[$key] );
				return $n;
			}
			else return $def;
		}
	}
	else return $def;
}

/*%FNC--------------------------------
 Function	フォームから複数行文字列を取得する
 Process	
 Result		
 Memo		
 ------------------------------------*/
function getf_txtbox(
	$key
)
{
	if( get_magic_quotes_gpc() == 0 ) {
		$form = ((isset( $_REQUEST[$key] ) == TRUE) ? $_REQUEST[$key] : "");
	}
	else {
		$form = ((isset( $_REQUEST[$key] ) == TRUE) ? stripslashes( $_REQUEST[$key] ) : "");
	}
	if( $form != "" ) {

		$txt = split( "\r\n",$form );
		$lines = count( $txt );
		if( $txt[$lines - 1] == "" ) $lines--;

		if( $lines <= 0 ) {
			$res[0] = "";
		}
		else {
			for( $p = 0;$p < $lines;$p++ ) $res[$p] = $txt[$p];
		}
		return $res;
	}
	else {
		return FALSE;
	}
}

/*%FNC--------------------------------
 Function	フォームからアップロードされたファイル情報を取得する
 Process	
 Result		
 Memo		
 ------------------------------------*/
function getf_file(
	$key
)
{
	if( isset( $_FILES[$key]['name'] ) == TRUE ) {

//		echo "$FILES exists<br>";

		if( $_FILES[$key]['error'] == UPLOAD_ERR_OK ) {
//			echo "UPLOAD_ERR_OK<br>";

			return array( 'real' => $_FILES[$key]['name'],'tmpfile' => $_FILES[$key]['tmp_name'],'result' => $_FILES[$key]['error'] );
		}
		else {
//			switch( $_FILES[$key]['error'] ) {
//			case UPLOAD_ERR_OK:        echo "[OK]<br>"; break;
//			case UPLOAD_ERR_INI_SIZE:  echo "[INI_SIZE]<br>"; break;
//			case UPLOAD_ERR_FORM_SIZE: echo "[FORM_SIZE]<br>"; break;
//			case UPLOAD_ERR_PARTIAL:   echo "[PARTIAL]<br>"; break;
//			case UPLOAD_ERR_NO_FILE:   echo "[NO_FILE]<br>"; break;
//			}

			return FALSE;
		}
	}
	else {
//		echo "$FILES nothing<br>";

		return FALSE;
	}
}

// 日付のチェック
function strdate_check( $str )
{
	$year = substr( $str,0,4 );
	$mon  = substr( $str,5,2 );
	$day  = substr( $str,8,2 );

	if( 1970 <= $year && $year <= 2069 ) {
		if( 1 <= $mon && $mon <= 12 ) {
			if( 1 <= $day && $day <= day_of_month( $year,$mon ) ) return TRUE; else return FALSE;
		}
		else return FALSE;
	}
	else return FALSE;
}

// 時刻のチェック
function strtime_check( $str )
{
	$hour = substr( $str,0,2 );
	$min  = substr( $str,3,2 );

	if( 0 <= $hour && $hour <= 23 ) {
		if( 0 <= $min && $min <= 59 ) return TRUE; else return FALSE;
	}
	else return FALSE;
}

// 月毎の日数を返す
function day_of_month( $year,$mon )
{
	switch( $mon ) {
	case  1: return 31;
	case  2: return 28 + ((($year % 4) == 0)?((($year % 100) == 0)?((($year % 400) == 0)?1:0):1):0);
	case  3: return 31;
	case  4: return 30;
	case  5: return 31;
	case  6: return 30;
	case  7: return 31;
	case  8: return 31;
	case  9: return 30;
	case 10: return 31;
	case 11: return 30;
	case 12: return 31;
	default: return 31;
	}
}

// 「次の日」を返す
// 書式は YYYYMMDD
function next_date( $str )
{
	$year = (int)substr( $str,0,4 );
	$mon  = (int)substr( $str,4,2 );
	$day  = (int)substr( $str,6,2 );

	$day++;
	if( $day > day_of_month( $year,$mon ) ) {
		$mon++;
		$day = 1;
		if( $mon > 12 ) {
			$year++;
			$mon = 1;
		}
	}

	return sprintf( "%04d%02d%02d",$year,$mon,$day );
}

// 「次の日」を返す
// 書式は YYYY/MM/DD
function next_date2( $str )
{
	$year = (int)substr( $str,0,4 );
	$mon  = (int)substr( $str,5,2 );
	$day  = (int)substr( $str,8,2 );

	$day++;
	if( $day > day_of_month( $year,$mon ) ) {
		$mon++;
		$day = 1;
		if( $mon > 12 ) {
			$year++;
			$mon = 1;
		}
	}

	return sprintf( "%04d/%02d/%02d",$year,$mon,$day );
}
?>
