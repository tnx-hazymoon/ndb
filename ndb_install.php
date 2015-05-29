<?php
/*
	Ｎ◎ＶＡキャラデータベース
	N◎VA Character-Database system
	インストーラ
*/

include( "./inc/define.php" );
include( "./inc/libs.php" );
include( "./inc/funcs.php" );
?>
<HTML>

<HEAD>
	<TITLE>Ｎ◎ＶＡキャラデータベース インストーラ</TITLE>
	<META content=noindex name=robots>
	<META http-equiv=Content-Type content="text/html; charset=EUC-JP">
	<STYLE type=text/css>
	A:link { FONT-WEIGHT: bold; FONT-SIZE: 10pt; COLOR: #0000ff; FONT-FAMILY: 'ＭＳ Ｐゴシック' }
	A:visited { FONT-WEIGHT: bold; FONT-SIZE: 10pt; COLOR: #0000cc; FONT-FAMILY: 'ＭＳ Ｐゴシック' }
	.post { FONT-SIZE: 9pt; COLOR: #000000; FONT-FAMILY: 'ＭＳ Ｐゴシック' }
	.date { FONT-SIZE: 9pt; COLOR: #999999; FONT-FAMILY: 'ＭＳ Ｐゴシック' }
	.name { FONT-WEIGHT: bold; FONT-SIZE: 10pt; COLOR: #000000; FONT-FAMILY: 'ＭＳ Ｐゴシック' }
	.data { FONT-SIZE: 9pt; COLOR: #000000; FONT-FAMILY: 'ＭＳ Ｐゴシック' }
	</STYLE>

	<META content="N◎VA Character-Database system" name=GENERATOR>
</HEAD>

<BODY text=#000000 vLink=#00006a aLink=#30c030 link=#0000aa bgColor=#ffffff>
<DIV align=center>
Ｎ◎ＶＡキャラデータベース インストーラ<br><br>
<?php
$CMD = getf_text( "INSTALL_EXEC", "" );
if( $CMD == "GO" ) {
	$pass = getf_text( "MGR_PASS", "" );
	if( $pass == $root_pass ) {

		if( file_exists( $ndbDB['dir'] ) == TRUE ) {

			if( file_exists( $ndbDB['file'] ) == TRUE ) {
				unlink( $ndbDB['file'] );
				echo "DBファイル " . htmlspecialchars( $$ndbDB['file'] ) . " を削除しました。<br><br>\n";
			}

			db_open();
			create_table();
			db_close();

			echo "DBファイルを作成しました。<br><br>\n";
		}
		else {
			echo "<font color=\"red\"><b>";
			echo "DBファイルを収容するフォルダが在りません。<br><br>\n";
			echo "テーブル作成を中止しました。<br>\n";
			echo "</b></font>";
			echo "<br>\n";
		}
	}
	else {
?>
<font color="red"><b>
管理者用パスワードが異なっています。<br>
テーブル作成を中止しました。<br>
</b></font>
<?php
	}
}
else {
?>
<font color="red"><b>
全てのデータを一旦廃棄し、テーブルを再作成します。<br>
inc/define.phpに記述されたデータベースアクセス関連情報を再度確認してください。<br>
正しい値に設定されていない場合には、修正後に本インストーラを再実行してください。<br>
</b></font>
<br>

<form method=POST action="<?php echo $_SERVER['SCRIPT_NAME']; ?>">
<input type=hidden name="INSTALL_EXEC" value="GO">
管理者用パスワード
<input type=password name="MGR_PASS" size=20>
<input type=submit value="実行">
</form>
<?php
}
?>
</DIV>
<hr width="100%">
<TABLE width=700 border=0>
	<TBODY>
	<TR>
	<TD style="FONT-SIZE: 10pt; COLOR: #c0c0c0; FONT-FAMILY: 'ＭＳ Ｐゴシック'; BACKGROUND-COLOR: #ffffff" align=right>
		PHP+MySQL ported by <A href="http://navyleague.ddo.jp/nova/">よっち</A><BR>
		OriginalDesigned by <A href="http://www.aurora.dti.ne.jp/~motacila/gospel/">ガニメデつちのこ</A><BR>
		「トーキョーＮ◎ＶＡ The Detonation」「ゲーマーズ・フィールド誌」は<BR>
		<A href="http://www.fear.co.jp/">有限会社ファーイースト・アミューズメント・リサーチ及び有限会社ゲーム・フィールド</A>の著作物です。
	</TD>
	</TR>
	</TBODY>
</TABLE>
</P>
</DIV>
</BODY>

</HTML>
