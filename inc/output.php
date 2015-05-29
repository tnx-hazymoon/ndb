<?php
switch( $content ) {
case 'LIST':
	// ����饯������
	require( "./inc/html_header.php" );
	require( "./inc/page_header.php" );
	require( "./cont/list.php" );
	require( "./inc/page_footer.php" );
	require( "./inc/html_footer.php" );
	break;
case 'ABSTRACT':
	// ����饯������
	require( "./inc/html_header.php" );
	require( "./inc/page_header.php" );
	require( "./cont/abstract.php" );
	require( "./inc/page_footer.php" );
	require( "./inc/html_footer.php" );
	break;
case 'PROFILE':
	// ����饯���ǡ�������
	require( "./inc/html_header.php" );
	require( "./inc/page_header.php" );
	require( "./cont/profile.php" );
	require( "./inc/page_footer.php" );
	require( "./inc/html_footer.php" );
	break;

case 'REGIST':
	// ����饯���ǡ�����Ͽ
	require( "./inc/html_header.php" );
	require( "./inc/page_header.php" );
	require( "./cont/regist.php" );
	require( "./inc/page_footer.php" );
	require( "./inc/html_footer.php" );
	break;

case 'EDIT':
	// ����饯���ǡ����Խ�
	require( "./inc/html_header.php" );
	require( "./inc/page_header.php" );
	require( "./cont/edit.php" );
	require( "./inc/page_footer.php" );
	require( "./inc/html_footer.php" );
	break;

case 'DUPLICATE':
	// ����饯���ǡ���ʣ���Խ�
	require( "./inc/html_header.php" );
	require( "./inc/page_header.php" );
	require( "./cont/duplicate.php" );
	require( "./inc/page_footer.php" );
	require( "./inc/html_footer.php" );
	break;

case 'DELETE':
	// ����饯�������ǧ
	require( "./inc/html_header.php" );
	require( "./inc/page_header.php" );
	require( "./cont/delete.php" );
	require( "./inc/page_footer.php" );
	require( "./inc/html_footer.php" );
	break;

case 'PDFVIEW':
	// PDF����
	require( "./cont/pdfview.php" );
	break;

case 'XMLPROF':
	// XML�������ݡ���
	require( "./cont/xmlprof.php" );
	break;

case 'ERROR':
	// ���顼
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
