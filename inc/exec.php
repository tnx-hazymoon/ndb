<?php
if( db_open() == TRUE ) {

	// �ڡ����ֹ�
	$REQ_PAGE = getf_num( "PAGE", 1 );

	// ����饯���ֹ�
	$REQ_CID = getf_num( "NO", -1 );

	// ������������������
	$REQ_FIND['style'] = getf_text( "S_STYLE", "" );

	// �����������ץ쥤�䡼̾
	$REQ_FIND['player'] = getf_text( "S_PLAYER", "" );
	if( strlen( $REQ_FIND['player'] ) > 80 ) {
		$REQ_FIND['player'] = substr( $REQ_FIND['player'],0,80 );
	}

	// ������������ͳ�������
	$REQ_FIND['keyword'] = getf_text( "S_KEYWORD", "" );
	if( strlen( $REQ_FIND['keyword'] ) > 100 ) {
		$REQ_FIND['keyword'] = substr( $REQ_FIND['keyword'],0,100 );
	}

	// ��������������饯��ʬ��
	$REQ_FIND['category'] = getf_text( "S_CATEGORY", $defaultSearchCategory );
	if( $REQ_FIND['category'] != "all" ) {
		$f = 0;
		for( $p = 0;$p < $cateList['num'];$p++ ) {
			if( $REQ_FIND['category'] == $cateList[$p]['id'] ) break;
		}
		if( $p >= $cateList['num'] ) $REQ_FIND['category'] = $defaultSearchCategory;
	}

	$CMD = getf_text( "CMD", "list" );

	switch( $CMD ) {
	case 'list':	// ��������
		$CONT_FIND = $REQ_FIND;
		$CONT_PAGE = $REQ_PAGE;
		$content = "LIST";
		break;

	case 'abstract':// ��������
		$CONT_FIND = $REQ_FIND;
		$CONT_PAGE = $REQ_PAGE;
		$content = "ABSTRACT";
		break;

	case 'view':	// ��������
		$CONT_FIND = $REQ_FIND;

		if( $REQ_CID >= 0 ) {

			$CONT_CID = $REQ_CID;
			$content = "PROFILE";
		}
		else {
			$CONT_ERR = "�оݥ���饯�������ꤵ��Ƥ��ޤ���";
			$CONT_FIND = $REQ_FIND;
			$CONT_PAGE = 1;
			$content = "LIST";
		}
		break;

	case 'pdfview':	// �����Ѳ���
		if( $REQ_CID >= 0 ) {

			$CONT_FIND = $REQ_FIND;
			$CONT_CID = $REQ_CID;
/*			$CONT_PAPER = getf_text( "prn_size", "" );
			switch( $CONT_PAPER ) {
			case 'a4':
			case 'a4max':
			case 'b5':
			case 'b5max':
				break;
			default:
				break;
			}*/
			$content = "PDFVIEW";
		}
		else {
			$CONT_ERR = "�оݥ���饯�������ꤵ��Ƥ��ޤ���";
			$CONT_FIND = $REQ_FIND;
			$CONT_PAGE = 1;
			$content = "LIST";
		}
		break;

	case 'xmlprof':	// XML�������ݡ���
		if( $REQ_CID >= 0 ) {

			$CONT_CID = $REQ_CID;
			$CONT_ERR = "̤������ǽ�Ǥ���";
			$content = "PROFILE";
/*
			$CONT_FIND = $REQ_FIND;
			$CONT_CID = $REQ_CID;
			$content = "PDFVIEW";
*/
		}
		else {
			$CONT_ERR = "�оݥ���饯�������ꤵ��Ƥ��ޤ���";
			$CONT_FIND = $REQ_FIND;
			$CONT_PAGE = 1;
			$content = "LIST";
		}
		break;

	case 'f_reg':	// ������Ͽ����
		$content = "REGIST";
		break;

	case 'f_ed':	// �Խ�����
		if( $REQ_CID >= 0 ) {

			$CONT_CID = $REQ_CID;
			$CONT_PASS = getf_text( "pass", "" );
			if( char_passchk( $CONT_CID, $CONT_PASS ) == TRUE ) {
				$content = "EDIT";
			}
			else {
				$CONT_ERR = "�Խ����̤ذܹԽ���ޤ���\n( �ѥ���ɤ����פ��ޤ��� )";
				$content = "PROFILE";
			}
		}
		else {
			$CONT_ERR = "�оݥ���饯�������ꤵ��Ƥ��ޤ���";
			$CONT_FIND = $REQ_FIND;
			$CONT_PAGE = 1;
			$content = "LIST";
		}
		break;

	case 'f_del':	// �����ǧ����
		if( $REQ_CID >= 0 ) {

			$CONT_CID = $REQ_CID;
			$CONT_PASS = getf_text( "pass", "" );
			if( char_passchk( $CONT_CID, $CONT_PASS ) == TRUE ) {
				$content = "DELETE";
			}
			else {
				$CONT_ERR = "���ʤ��Ϥ��Υ���饯���������뤳�ȤϽ���ޤ���\n( �ѥ���ɤ����פ��ޤ��� )";
				$content = "PROFILE";
			}
		}
		else {
			$CONT_ERR = "�оݥ���饯�������ꤵ��Ƥ��ޤ���";
			$CONT_FIND = $REQ_FIND;
			$CONT_PAGE = 1;
			$content = "LIST";
		}
		break;

	case 'f_dup':	// ʣ�����ƿ�����������
		if( $REQ_CID >= 0 ) {

			$CONT_CID = $REQ_CID;
			$content = "DUPLICATE";
		}
		else {
			$CONT_ERR = "�оݥ���饯�������ꤵ��Ƥ��ޤ���";
			$CONT_FIND = $REQ_FIND;
			$CONT_PAGE = 1;
			$content = "LIST";
		}
		break;

	case 'regist':	// �ǡ�����Ͽ����������
		if( isset( $_REQUEST['pass'] ) == TRUE ) $CONT_PASS = stripslashes( substr( $_REQUEST['pass'],0,30 ) ); else $CONT_PASS = "";
		$regist = get_registform();
		if( $CONT_PASS != "" ) {
			if( $regist['name'] != NULL ) {
				char_regist( $CONT_PASS,$regist );
				if( $regist['category'] != "" && $regist['category'] != $defaultSearchCategory ) {
					$CONT_FIND['category'] = $regist['category'];
				}
				$CONT_PAGE = 1;
				$content = "LIST";
			}
			else {
				$CONT_ERR = "����饯������Ͽ�˼��Ԥ��ޤ�����\n( HANDLE��ɬ�����Ϥ��Ƥ������� )";
				$content = "REGIST";
			}
		}
		else {
			$CONT_ERR = "����饯������Ͽ�˼��Ԥ��ޤ�����\n( �ѥ���ɤ�ɬ�����Ϥ��Ƥ������� )";
			$content = "REGIST";
		}
		break;

	case 'edit':	// �ǡ�����������������
		if( $REQ_CID >= 0 ) {
		
			$CONT_CID = $REQ_CID;

			if( isset( $_REQUEST['pass'] ) == TRUE ) $CONT_PASS = stripslashes( substr( $_REQUEST['pass'],0,30 ) ); else $CONT_PASS = "";
			if( char_passchk( $CONT_CID,$CONT_PASS ) == TRUE ) {
				$regist = get_registform();
				char_update( $CONT_CID,"",$regist );
				if( ($CONT_DATA = char_read( $CONT_CID )) != FALSE ) {
					$content = "PROFILE";
				}
				else {
					$CONT_ERR = "�������륭��饯����¸�ߤ��ޤ���";
					$CONT_FIND = $REQ_FIND;
					$CONT_PAGE = 1;
					$content = "LIST";
				}
				if( $regist['category'] != "" && $regist['category'] != $defaultSearchCategory ) {
					$CONT_FIND['category'] = $regist['category'];
				}
			}
			else {
				if( ($CONT_DATA = char_read( $CONT_CID )) != FALSE ) {
					$CONT_ERR = "����饯���ι����˼��Ԥ��ޤ�����\n( �ѥ���ɤ����פ��ޤ��� )";
					$content = "PROFILE";
				}
				else {
					$CONT_ERR = "�������륭��饯����¸�ߤ��ޤ���";
					$CONT_FIND = $REQ_FIND;
					$CONT_PAGE = 1;
					$content = "LIST";
				}
			}
		}
		else {
			$CONT_ERR = "����饯���ι����˼��Ԥ��ޤ�����\n( �оݥ���饯�������ꤵ��Ƥ��ޤ��� )";
			$CONT_FIND = $REQ_FIND;
			$CONT_PAGE = 1;
			$content = "LIST";
		}
		break;

	case 'delete':	// �������������
		if( $REQ_CID >= 0 ) {

			$CONT_CID = $REQ_CID;

			if( isset( $_REQUEST['pass'] ) == TRUE ) $CONT_PASS = stripslashes( substr( $_REQUEST['pass'],0,30 ) ); else $CONT_PASS = "";
			if( char_passchk( $CONT_CID,$CONT_PASS ) == TRUE ) {

				char_delete( $CONT_CID );

				$CONT_ERR = "����饯���������ޤ�����";
				$CONT_FIND = $REQ_FIND;
				$CONT_PAGE = 1;
				$content = "LIST";
			}
			else {
				$CONT_ERR = "����饯���κ���˼��Ԥ��ޤ�����\n( �ѥ���ɤ����פ��ޤ��� )";
				$content = "PROFILE";
			}
		}
		else {
			$CONT_ERR = "����饯���κ���˼��Ԥ��ޤ�����\n( �оݥ���饯�������ꤵ��Ƥ��ޤ��� )";
			$CONT_FIND = $REQ_FIND;
			$CONT_PAGE = 1;
			$content = "LIST";
		}
		break;

	case 'chpass':	// �ѥ�����ѹ�����������
		if( $REQ_CID >= 0 ) {

			$CONT_CID = $REQ_CID;

			if( isset( $_REQUEST['oldpass'] ) == TRUE ) $CONT_PASS = stripslashes( substr( $_REQUEST['oldpass'],0,30 ) ); else $CONT_PASS = "";
			if( isset( $_REQUEST['newpass'] ) == TRUE ) $CONT_NPASS = stripslashes( substr( $_REQUEST['newpass'],0,30 ) ); else $CONT_NPASS = "";
			if( char_passchk( $CONT_CID,$CONT_PASS ) == TRUE ) {

				char_chpass( $CONT_CID,$CONT_PASS,$CONT_NPASS );

				$CONT_ERR = "�ѥ���ɤ��ѹ����ޤ�����";
				$content = "PROFILE";
			}
			else {
				if( ($CONT_DATA = char_read( $CONT_CID )) != FALSE ) {
					$CONT_ERR = "�ѥ���ɤ��ѹ��˼��Ԥ��ޤ�����\n( ��ѥ���ɤ����פ��ޤ��� )";
					$content = "PROFILE";
				}
				else {
					$CONT_ERR = "�������륭��饯����¸�ߤ��ޤ���";
					$CONT_FIND = $REQ_FIND;
					$CONT_PAGE = 1;
					$content = "LIST";
				}
			}
		}
		else {
			$CONT_ERR = "�ѥ���ɤ��ѹ��˼��Ԥ��ޤ�����\n( �оݥ���饯�������ꤵ��Ƥ��ޤ��� )";
			$CONT_FIND = $REQ_FIND;
			$CONT_PAGE = 1;
			$content = "LIST";
		}
		break;


	default:	// ̵���ʥ��ޥ��
		if( $REQ_CID >= 0 ) {
			$CONT_CID  = $REQ_CID;
			$CONT_FIND = $REQ_FIND;
			$content = "PROFILE";
		}
		else {
			$CONT_PAGE = $REQ_PAGE;
			$CONT_FIND = $REQ_FIND;
			$content = "LIST";
		}
		break	;
	}

	$before = "";
	while( $content != $before ) {

		$before = $content;

		switch( $content ) {
		case 'LIST':
			// ����饯������

			$wh = form2find( $CONT_FIND );

			// �쥳���ɿ��μ���
			$sql = "select * from " . $ndbDB['tbl'] . " " . $wh;
			$sql .= ";";

			$res = sqlite_query( $dbID, $sql );
			$chr_num = sqlite_num_rows( $res );

			$page_max = (int)(($chr_num + ($listMaxPerPage - 1)) / $listMaxPerPage);

			$CONT_CHARNUM = $chr_num;
			$CONT_DATA = NULL;

			if( $chr_num > 0 ) {

				$sql = "select * from " . $ndbDB['tbl'] . " " . $wh;
				$sql .= " order by updtime desc";
				if( $CONT_PAGE > 1 ) $sql .= sprintf( " limit %d,%d",($CONT_PAGE - 1) * $listMaxPerPage,$listMaxPerPage );
				else                 $sql .= sprintf( " limit %d",$listMaxPerPage );
				$sql .= ";";

				$res = sqlite_query( $dbID, $sql );
				$list_num = sqlite_num_rows( $res );

				for( $p = 0;$p < $list_num;$p++ ) {
					$rec = sqlite_fetch_array( $res );
				//	$rec = char_copy( $dbrec );

					$CONT_DATA[] = $rec;
				}
			}

			break;

		case 'ABSTRACT':
			// ����饯������

			$wh = form2find( $CONT_FIND );

			// �쥳���ɿ��μ���
			$sql = "select * from " . $ndbDB['tbl'] . " " . $wh;
			$sql .= ";";

			$res = sqlite_query( $dbID, $sql );
			$chr_num = sqlite_num_rows( $res );

			$page_max = (int)(($chr_num + ($abstractMaxPerPage - 1)) / $abstractMaxPerPage);

			$CONT_CHARNUM = $chr_num;
			$CONT_DATA = NULL;

			if( $chr_num > 0 ) {

				$sql = "select * from " . $ndbDB['tbl'] . " " . $wh;
				$sql .= " order by updtime desc";
				if( $CONT_PAGE > 1 ) $sql .= sprintf( " limit %d,%d",($CONT_PAGE - 1) * $abstractMaxPerPage,$abstractMaxPerPage );
				else                 $sql .= sprintf( " limit %d",$listMaxPerPage );
				$sql .= ";";

				$res = sqlite_query( $dbID, $sql );
				$list_num = sqlite_num_rows( $res );

				for( $p = 0;$p < $list_num;$p++ ) {
					$rec = sqlite_fetch_array( $res );
				//	$rec = char_copy( $dbrec );

					$CONT_DATA[] = $rec;
				}
			}

			break;

		case 'PROFILE':
			// ����饯���ǡ�������
			if( ($CONT_DATA = char_read( $CONT_CID )) != FALSE ) $content = "PROFILE";
			else {
				$CONT_ERR = "�������륭��饯����¸�ߤ��ޤ���";
				$CONT_PAGE = 1;
				$content = "LIST";
			}
			break;

		case 'REGIST':
			// ����饯���ǡ�����Ͽ
			break;

		case 'EDIT':
			// ����饯���ǡ����Խ�
			if( ($CONT_DATA = char_read( $CONT_CID )) == FALSE ) {
				$CONT_ERR = "�������륭��饯����¸�ߤ��ޤ���";
				$CONT_PAGE = 1;
				$content = "LIST";
			}
			break;

		case 'DUPLICATE':
			// ����饯���ǡ���ʣ����Ͽ
			if( ($CONT_DATA = char_read( $CONT_CID )) == FALSE ) {
				$CONT_ERR = "�������륭��饯����¸�ߤ��ޤ���";
				$CONT_PAGE = 1;
				$content = "LIST";
			}
			break;

		case 'DELETE':
			// ����饯�������ǧ
			if( ($CONT_DATA = char_read( $CONT_CID )) == FALSE ) {
				$CONT_ERR = "�������륭��饯����¸�ߤ��ޤ���";
				$CONT_PAGE = 1;
				$content = "LIST";
			}
			break;

		case 'PDFVIEW':
			// ����饯��������
			if( ($CONT_DATA = char_read( $CONT_CID )) == FALSE ) {
				$CONT_ERR = "�������륭��饯����¸�ߤ��ޤ���";
				$CONT_PAGE = 1;
				$content = "LIST";
			}
			break;

		case 'XMLPROF':
			// XML�������ݡ���
			if( ($CONT_DATA = char_read( $CONT_CID )) == FALSE ) {
				$CONT_ERR = "�������륭��饯����¸�ߤ��ޤ���";
				$CONT_PAGE = 1;
				$content = "LIST";
			}
			break;

		case 'ERROR':
			break;
		}
	}



	db_close();
}
else {
	// DB��³���褺
	$CONT_ERR = "�ǡ����١����ؤ���³�˼��Ԥ��ޤ�����";
	$CONT_MSG = "";
	$content = "ERROR";
}
?>
