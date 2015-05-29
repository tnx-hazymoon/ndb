<?php
if( db_open() == TRUE ) {

	// ページ番号
	$REQ_PAGE = getf_num( "PAGE", 1 );

	// キャラクタ番号
	$REQ_CID = getf_num( "NO", -1 );

	// 検索キー・スタイル
	$REQ_FIND['style'] = getf_text( "S_STYLE", "" );

	// 検索キー・プレイヤー名
	$REQ_FIND['player'] = getf_text( "S_PLAYER", "" );
	if( strlen( $REQ_FIND['player'] ) > 80 ) {
		$REQ_FIND['player'] = substr( $REQ_FIND['player'],0,80 );
	}

	// 検索キー・自由キーワード
	$REQ_FIND['keyword'] = getf_text( "S_KEYWORD", "" );
	if( strlen( $REQ_FIND['keyword'] ) > 100 ) {
		$REQ_FIND['keyword'] = substr( $REQ_FIND['keyword'],0,100 );
	}

	// 検索キー・キャラクタ分類
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
	case 'list':	// 一覧画面
		$CONT_FIND = $REQ_FIND;
		$CONT_PAGE = $REQ_PAGE;
		$content = "LIST";
		break;

	case 'abstract':// 概覧画面
		$CONT_FIND = $REQ_FIND;
		$CONT_PAGE = $REQ_PAGE;
		$content = "ABSTRACT";
		break;

	case 'view':	// 閲覧画面
		$CONT_FIND = $REQ_FIND;

		if( $REQ_CID >= 0 ) {

			$CONT_CID = $REQ_CID;
			$content = "PROFILE";
		}
		else {
			$CONT_ERR = "対象キャラクタが指定されていません。";
			$CONT_FIND = $REQ_FIND;
			$CONT_PAGE = 1;
			$content = "LIST";
		}
		break;

	case 'pdfview':	// 印刷用画面
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
			$CONT_ERR = "対象キャラクタが指定されていません。";
			$CONT_FIND = $REQ_FIND;
			$CONT_PAGE = 1;
			$content = "LIST";
		}
		break;

	case 'xmlprof':	// XMLエクスポート
		if( $REQ_CID >= 0 ) {

			$CONT_CID = $REQ_CID;
			$CONT_ERR = "未実装機能です。";
			$content = "PROFILE";
/*
			$CONT_FIND = $REQ_FIND;
			$CONT_CID = $REQ_CID;
			$content = "PDFVIEW";
*/
		}
		else {
			$CONT_ERR = "対象キャラクタが指定されていません。";
			$CONT_FIND = $REQ_FIND;
			$CONT_PAGE = 1;
			$content = "LIST";
		}
		break;

	case 'f_reg':	// 新規登録画面
		$content = "REGIST";
		break;

	case 'f_ed':	// 編集画面
		if( $REQ_CID >= 0 ) {

			$CONT_CID = $REQ_CID;
			$CONT_PASS = getf_text( "pass", "" );
			if( char_passchk( $CONT_CID, $CONT_PASS ) == TRUE ) {
				$content = "EDIT";
			}
			else {
				$CONT_ERR = "編集画面へ移行出来ません。\n( パスワードが一致しません )";
				$content = "PROFILE";
			}
		}
		else {
			$CONT_ERR = "対象キャラクタが指定されていません。";
			$CONT_FIND = $REQ_FIND;
			$CONT_PAGE = 1;
			$content = "LIST";
		}
		break;

	case 'f_del':	// 削除確認画面
		if( $REQ_CID >= 0 ) {

			$CONT_CID = $REQ_CID;
			$CONT_PASS = getf_text( "pass", "" );
			if( char_passchk( $CONT_CID, $CONT_PASS ) == TRUE ) {
				$content = "DELETE";
			}
			else {
				$CONT_ERR = "あなたはこのキャラクタを削除することは出来ません。\n( パスワードが一致しません )";
				$content = "PROFILE";
			}
		}
		else {
			$CONT_ERR = "対象キャラクタが指定されていません。";
			$CONT_FIND = $REQ_FIND;
			$CONT_PAGE = 1;
			$content = "LIST";
		}
		break;

	case 'f_dup':	// 複製して新規作成画面
		if( $REQ_CID >= 0 ) {

			$CONT_CID = $REQ_CID;
			$content = "DUPLICATE";
		}
		else {
			$CONT_ERR = "対象キャラクタが指定されていません。";
			$CONT_FIND = $REQ_FIND;
			$CONT_PAGE = 1;
			$content = "LIST";
		}
		break;

	case 'regist':	// データ登録→一覧画面
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
				$CONT_ERR = "キャラクタの登録に失敗しました。\n( HANDLEは必ず入力してください )";
				$content = "REGIST";
			}
		}
		else {
			$CONT_ERR = "キャラクタの登録に失敗しました。\n( パスワードは必ず入力してください )";
			$content = "REGIST";
		}
		break;

	case 'edit':	// データ更新→一覧画面
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
					$CONT_ERR = "該当するキャラクタは存在しません。";
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
					$CONT_ERR = "キャラクタの更新に失敗しました。\n( パスワードが一致しません )";
					$content = "PROFILE";
				}
				else {
					$CONT_ERR = "該当するキャラクタは存在しません。";
					$CONT_FIND = $REQ_FIND;
					$CONT_PAGE = 1;
					$content = "LIST";
				}
			}
		}
		else {
			$CONT_ERR = "キャラクタの更新に失敗しました。\n( 対象キャラクタが指定されていません )";
			$CONT_FIND = $REQ_FIND;
			$CONT_PAGE = 1;
			$content = "LIST";
		}
		break;

	case 'delete':	// 削除→一覧画面
		if( $REQ_CID >= 0 ) {

			$CONT_CID = $REQ_CID;

			if( isset( $_REQUEST['pass'] ) == TRUE ) $CONT_PASS = stripslashes( substr( $_REQUEST['pass'],0,30 ) ); else $CONT_PASS = "";
			if( char_passchk( $CONT_CID,$CONT_PASS ) == TRUE ) {

				char_delete( $CONT_CID );

				$CONT_ERR = "キャラクタを削除しました。";
				$CONT_FIND = $REQ_FIND;
				$CONT_PAGE = 1;
				$content = "LIST";
			}
			else {
				$CONT_ERR = "キャラクタの削除に失敗しました。\n( パスワードが一致しません )";
				$content = "PROFILE";
			}
		}
		else {
			$CONT_ERR = "キャラクタの削除に失敗しました。\n( 対象キャラクタが指定されていません )";
			$CONT_FIND = $REQ_FIND;
			$CONT_PAGE = 1;
			$content = "LIST";
		}
		break;

	case 'chpass':	// パスワード変更→閲覧画面
		if( $REQ_CID >= 0 ) {

			$CONT_CID = $REQ_CID;

			if( isset( $_REQUEST['oldpass'] ) == TRUE ) $CONT_PASS = stripslashes( substr( $_REQUEST['oldpass'],0,30 ) ); else $CONT_PASS = "";
			if( isset( $_REQUEST['newpass'] ) == TRUE ) $CONT_NPASS = stripslashes( substr( $_REQUEST['newpass'],0,30 ) ); else $CONT_NPASS = "";
			if( char_passchk( $CONT_CID,$CONT_PASS ) == TRUE ) {

				char_chpass( $CONT_CID,$CONT_PASS,$CONT_NPASS );

				$CONT_ERR = "パスワードを変更しました。";
				$content = "PROFILE";
			}
			else {
				if( ($CONT_DATA = char_read( $CONT_CID )) != FALSE ) {
					$CONT_ERR = "パスワードの変更に失敗しました。\n( 旧パスワードが一致しません )";
					$content = "PROFILE";
				}
				else {
					$CONT_ERR = "該当するキャラクタは存在しません。";
					$CONT_FIND = $REQ_FIND;
					$CONT_PAGE = 1;
					$content = "LIST";
				}
			}
		}
		else {
			$CONT_ERR = "パスワードの変更に失敗しました。\n( 対象キャラクタが指定されていません )";
			$CONT_FIND = $REQ_FIND;
			$CONT_PAGE = 1;
			$content = "LIST";
		}
		break;


	default:	// 無効なコマンド
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
			// キャラクタ一覧

			$wh = form2find( $CONT_FIND );

			// レコード数の取得
			$sql = "select * from " . $ndbDB['tbl'] . " " . $wh;
			$sql .= ";";

			$res = $dbID->query( $sql );
			$chr_num = num_rows( $res );

			$page_max = (int)(($chr_num + ($listMaxPerPage - 1)) / $listMaxPerPage);

			$CONT_CHARNUM = $chr_num;
			$CONT_DATA = NULL;

			if( $chr_num > 0 ) {

				$sql = "select * from " . $ndbDB['tbl'] . " " . $wh;
				$sql .= " order by updtime desc";
				if( $CONT_PAGE > 1 ) $sql .= sprintf( " limit %d,%d",($CONT_PAGE - 1) * $listMaxPerPage,$listMaxPerPage );
				else                 $sql .= sprintf( " limit %d",$listMaxPerPage );
				$sql .= ";";

				$res = $dbID->query( $sql );
				$list_num = num_rows( $res );

				for( $p = 0;$p < $list_num;$p++ ) {
					$rec = $res->fetchArray();
				//	$rec = char_copy( $dbrec );

					$CONT_DATA[] = $rec;
				}
			}

			break;

		case 'ABSTRACT':
			// キャラクタ一覧

			$wh = form2find( $CONT_FIND );

			// レコード数の取得
			$sql = "select * from " . $ndbDB['tbl'] . " " . $wh;
			$sql .= ";";

			$res = $dbID->query( $sql );
			$chr_num = num_rows( $res );

			$page_max = (int)(($chr_num + ($abstractMaxPerPage - 1)) / $abstractMaxPerPage);

			$CONT_CHARNUM = $chr_num;
			$CONT_DATA = NULL;

			if( $chr_num > 0 ) {

				$sql = "select * from " . $ndbDB['tbl'] . " " . $wh;
				$sql .= " order by updtime desc";
				if( $CONT_PAGE > 1 ) $sql .= sprintf( " limit %d,%d",($CONT_PAGE - 1) * $abstractMaxPerPage,$abstractMaxPerPage );
				else                 $sql .= sprintf( " limit %d",$listMaxPerPage );
				$sql .= ";";

				$res = $dbID->query( $sql );
				$list_num = num_rows( $res );

				for( $p = 0;$p < $list_num;$p++ ) {
					$rec = $res->fetchArray();
				//	$rec = char_copy( $dbrec );

					$CONT_DATA[] = $rec;
				}
			}

			break;

		case 'PROFILE':
			// キャラクタデータ閲覧
			if( ($CONT_DATA = char_read( $CONT_CID )) != FALSE ) $content = "PROFILE";
			else {
				$CONT_ERR = "該当するキャラクタは存在しません。";
				$CONT_PAGE = 1;
				$content = "LIST";
			}
			break;

		case 'REGIST':
			// キャラクタデータ登録
			break;

		case 'EDIT':
			// キャラクタデータ編集
			if( ($CONT_DATA = char_read( $CONT_CID )) == FALSE ) {
				$CONT_ERR = "該当するキャラクタは存在しません。";
				$CONT_PAGE = 1;
				$content = "LIST";
			}
			break;

		case 'DUPLICATE':
			// キャラクタデータ複製登録
			if( ($CONT_DATA = char_read( $CONT_CID )) == FALSE ) {
				$CONT_ERR = "該当するキャラクタは存在しません。";
				$CONT_PAGE = 1;
				$content = "LIST";
			}
			break;

		case 'DELETE':
			// キャラクタ削除確認
			if( ($CONT_DATA = char_read( $CONT_CID )) == FALSE ) {
				$CONT_ERR = "該当するキャラクタは存在しません。";
				$CONT_PAGE = 1;
				$content = "LIST";
			}
			break;

		case 'PDFVIEW':
			// キャラクタ印刷用
			if( ($CONT_DATA = char_read( $CONT_CID )) == FALSE ) {
				$CONT_ERR = "該当するキャラクタは存在しません。";
				$CONT_PAGE = 1;
				$content = "LIST";
			}
			break;

		case 'XMLPROF':
			// XMLエクスポート
			if( ($CONT_DATA = char_read( $CONT_CID )) == FALSE ) {
				$CONT_ERR = "該当するキャラクタは存在しません。";
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
	// DB接続出来ず
	$CONT_ERR = "データベースへの接続に失敗しました。";
	$CONT_MSG = "";
	$content = "ERROR";
}
?>
