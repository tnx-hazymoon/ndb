<?php
/*
	�Ρ��֣������ǡ����١���
	N��VA Character-Database system
	���󥹥ȡ���
*/

include( "./inc/define.php" );
include( "./inc/libs.php" );
include( "./inc/funcs.php" );
?>
<HTML>

<HEAD>
	<TITLE>�Ρ��֣������ǡ����١��� ���󥹥ȡ���</TITLE>
	<META content=noindex name=robots>
	<META http-equiv=Content-Type content="text/html; charset=EUC-JP">
	<STYLE type=text/css>
	A:link { FONT-WEIGHT: bold; FONT-SIZE: 10pt; COLOR: #0000ff; FONT-FAMILY: '�ͣ� �Х����å�' }
	A:visited { FONT-WEIGHT: bold; FONT-SIZE: 10pt; COLOR: #0000cc; FONT-FAMILY: '�ͣ� �Х����å�' }
	.post { FONT-SIZE: 9pt; COLOR: #000000; FONT-FAMILY: '�ͣ� �Х����å�' }
	.date { FONT-SIZE: 9pt; COLOR: #999999; FONT-FAMILY: '�ͣ� �Х����å�' }
	.name { FONT-WEIGHT: bold; FONT-SIZE: 10pt; COLOR: #000000; FONT-FAMILY: '�ͣ� �Х����å�' }
	.data { FONT-SIZE: 9pt; COLOR: #000000; FONT-FAMILY: '�ͣ� �Х����å�' }
	</STYLE>

	<META content="N��VA Character-Database system" name=GENERATOR>
</HEAD>

<BODY text=#000000 vLink=#00006a aLink=#30c030 link=#0000aa bgColor=#ffffff>
<DIV align=center>
�Ρ��֣������ǡ����١��� ���󥹥ȡ���<br><br>
<?php
$CMD = getf_text( "INSTALL_EXEC", "" );
if( $CMD == "GO" ) {
	$pass = getf_text( "MGR_PASS", "" );
	if( $pass == $root_pass ) {

		if( file_exists( $ndbDB['dir'] ) == TRUE ) {

			if( file_exists( $ndbDB['file'] ) == TRUE ) {
				unlink( $ndbDB['file'] );
				echo "DB�ե����� " . htmlspecialchars( $$ndbDB['file'] ) . " �������ޤ�����<br><br>\n";
			}

			db_open();
			create_table();
			db_close();

			echo "DB�ե������������ޤ�����<br><br>\n";
		}
		else {
			echo "<font color=\"red\"><b>";
			echo "DB�ե��������Ƥ���ե�������ߤ�ޤ���<br><br>\n";
			echo "�ơ��֥��������ߤ��ޤ�����<br>\n";
			echo "</b></font>";
			echo "<br>\n";
		}
	}
	else {
?>
<font color="red"><b>
�������ѥѥ���ɤ��ۤʤäƤ��ޤ���<br>
�ơ��֥��������ߤ��ޤ�����<br>
</b></font>
<?php
	}
}
else {
?>
<font color="red"><b>
���ƤΥǡ������ö�Ѵ������ơ��֥��ƺ������ޤ���<br>
inc/define.php�˵��Ҥ��줿�ǡ����١�������������Ϣ�������ٳ�ǧ���Ƥ���������<br>
�������ͤ����ꤵ��Ƥ��ʤ����ˤϡ���������ܥ��󥹥ȡ����Ƽ¹Ԥ��Ƥ���������<br>
</b></font>
<br>

<form method=POST action="<?php echo $_SERVER['SCRIPT_NAME']; ?>">
<input type=hidden name="INSTALL_EXEC" value="GO">
�������ѥѥ����
<input type=password name="MGR_PASS" size=20>
<input type=submit value="�¹�">
</form>
<?php
}
?>
</DIV>
<hr width="100%">
<TABLE width=700 border=0>
	<TBODY>
	<TR>
	<TD style="FONT-SIZE: 10pt; COLOR: #c0c0c0; FONT-FAMILY: '�ͣ� �Х����å�'; BACKGROUND-COLOR: #ffffff" align=right>
		PHP+MySQL ported by <A href="http://navyleague.ddo.jp/nova/">��ä�</A><BR>
		OriginalDesigned by <A href="http://www.aurora.dti.ne.jp/~motacila/gospel/">���˥�ǤĤ��Τ�</A><BR>
		�֥ȡ����硼�Ρ��֣� The Detonation�ס֥����ޡ������ե�����ɻ�פ�<BR>
		<A href="http://www.fear.co.jp/">ͭ�²�ҥե����������ȡ����ߥ塼�����ȡ��ꥵ�����ڤ�ͭ�²�ҥ����ࡦ�ե������</A>������ʪ�Ǥ���
	</TD>
	</TR>
	</TBODY>
</TABLE>
</P>
</DIV>
</BODY>

</HTML>
