<?php
$rec = $CONT_DATA;
?>
<?php
if( $CONT_ERR != "" ) {
	echo "<center>\n";
	echo "<font color=\"red\">\n";
	echo nl2br( htmlspecialchars( $CONT_ERR ) );
	echo "</font>\n";
	echo "</center><br>\n";
}
if( $CONT_MSG != "" ) {
	echo "<center>\n";
	echo nl2br( htmlspecialchars( $CONT_MSG ) );
	echo "</center><br>\n";
}
?>
<table border=1>
	<tr>
		<th>登録ナンバー</th>
		<td><?php echo sprintf( "%d",$CONT_CID ); ?></td>
	</tr>
	<tr>
		<th>プレイヤー</th>
		<td><?php echo htmlspecialchars( $rec['player'] ); ?></td>
	</tr>
	<tr>
		<th>ハンドル</th>
		<td><?php echo htmlspecialchars( $rec['name'] ); ?></td>
	</tr>
	<tr>
		<th>スタイル</th>
		<td><?php echo htmlspecialchars( style2format( $rec['style1'],$rec['style2'],$rec['style3'],$rec['persona'],$rec['keyst'] ) ); ?></td>
		</tr>
	<tr>
		<th>設定</th>
		<td><?php echo nl2br( htmlspecialchars( $rec['profile'] ) ); ?></td>
	</tr>
</table>
<br>
<br>
<b>
このキャラクターのデータを削除します。<br>
復旧はできませんがよろしいですか？</b>
</p>
<FORM action="<?php echo $scriptPath; ?>" method=post>
<INPUT type=hidden name=CMD value=delete>
<INPUT type=hidden name=NO value=<?php echo sprintf( "%d",$CONT_CID ); ?>>
パスワード:<input type=password name=pass size=15>
<input type=submit value=削除>
</form>
