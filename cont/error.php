<center>
《難攻不落》っ!! 認証用アカウント管理システム<br>
<br>
<hr width="100%">
<br>
if( $CONT_ERR != "" ) {
	echo "<center>\n";
	echo "<font color=\"red\">\n";
	echo nl2br( htmlspecialchars( $CONT_ERR ) );
	echo "</font>\n";
	echo "</center><br>\n";
}
<?php
if( $CONT_MSG != "" ) {
	echo "<center>\n";
	echo "<b>" . nl2br( htmlspecialchars( $CONT_MSG ) ) . "</b><br>\n";
	echo "<hr width=\"100%\">\n";
	echo "</center><br>\n";
}
?>
<br>
<form method=POST action="<?php echo $scriptPath; ?>">
	<input type="submit" value="戻る">
</form>
</center>
