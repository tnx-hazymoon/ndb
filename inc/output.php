<?php
switch( $content ) {
case 'LIST':
	// キャラクタ一覧
	require( "./inc/html_header.php" );
	require( "./inc/page_header.php" );
	require( "./cont/list.php" );
	require( "./inc/page_footer.php" );
	require( "./inc/html_footer.php" );
	break;
case 'ABSTRACT':
	// キャラクタ一覧
	require( "./inc/html_header.php" );
	require( "./inc/page_header.php" );
	require( "./cont/abstract.php" );
	require( "./inc/page_footer.php" );
	require( "./inc/html_footer.php" );
	break;
case 'PROFILE':
	// キャラクタデータ閲覧
	require( "./inc/html_header.php" );
	require( "./inc/page_header.php" );
	require( "./cont/profile.php" );
	require( "./inc/page_footer.php" );
	require( "./inc/html_footer.php" );
	break;

case 'REGIST':
	// キャラクタデータ登録
	require( "./inc/html_header.php" );
	require( "./inc/page_header.php" );
	require( "./cont/regist.php" );
	require( "./inc/page_footer.php" );
	require( "./inc/html_footer.php" );
	break;

case 'EDIT':
	// キャラクタデータ編集
	require( "./inc/html_header.php" );
	require( "./inc/page_header.php" );
	require( "./cont/edit.php" );
	require( "./inc/page_footer.php" );
	require( "./inc/html_footer.php" );
	break;

case 'DUPLICATE':
	// キャラクタデータ複製編集
	require( "./inc/html_header.php" );
	require( "./inc/page_header.php" );
	require( "./cont/duplicate.php" );
	require( "./inc/page_footer.php" );
	require( "./inc/html_footer.php" );
	break;

case 'DELETE':
	// キャラクタ削除確認
	require( "./inc/html_header.php" );
	require( "./inc/page_header.php" );
	require( "./cont/delete.php" );
	require( "./inc/page_footer.php" );
	require( "./inc/html_footer.php" );
	break;

case 'PDFVIEW':
	// PDF出力
	require( "./cont/pdfview.php" );
	break;

case 'XMLPROF':
	// XMLエクスポート
	require( "./cont/xmlprof.php" );
	break;

case 'ERROR':
	// エラー
	require( "./inc/html_header.php" );
	require( "./inc/page_header.php" );
	require( "./cont/error.php" );
	require( "./inc/page_footer.php" );
	require( "./inc/html_footer.php" );
	break;

default:
	$CONT_ERR = "";
	$CONT_MSG = "";
	require( "./inc/html_header.php" );
	require( "./inc/page_header.php" );
	require( "./cont/error.php" );
	require( "./inc/page_footer.php" );
	require( "./inc/html_footer.php" );
	break;
}
?>
