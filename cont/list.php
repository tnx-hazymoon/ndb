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
<?php

if( $CONT_DATA != NULL ) {

	$chr_num = $CONT_CHARNUM;
	$page_max = (int)(($chr_num + ($listMaxPerPage - 1)) / $listMaxPerPage);

?>
<center>
<TABLE border=0>
<tr>
	<td>
	<?php
	if( $CONT_PAGE > 1 ) {
		echo "<a href=\"" . $scriptPath . sprintf( "?CMD=list&PAGE=%d",$CONT_PAGE - 1 );
		if( $CONT_FIND['player'] != "" ) echo "&S_PLAYER=" . urlencode( $CONT_FIND['player'] );
		if( $CONT_FIND['keyword'] != "" ) echo "&S_KEYWORD=" . urlencode( $CONT_FIND['keyword'] );
		if( $CONT_FIND['style'] != "" ) echo "&S_STYLE=" . urlencode( $CONT_FIND['style'] );
		if( $CONT_FIND['category'] != "" ) echo "&S_CATEGORY=" . urlencode( $CONT_FIND['category'] );
		echo "\">";
	}
	?>
	<b>[前ページ]</b>　<b>≪</b>　
	<?php if( $CONT_PAGE > 1 ) echo "</a>"; ?>
	</td>
	<td align="center">
	Page.<?php echo $CONT_PAGE . " / " . sprintf( "%d",$page_max ); ?><br>
	( <?php printf( "%dchars",$chr_num ); ?> )
	</td>
	<td>
	<?php
	if( $CONT_PAGE < $page_max ) {
		echo "<a href=\"" . $scriptPath . sprintf( "?CMD=list&PAGE=%d",$CONT_PAGE + 1 );
		if( $CONT_FIND['player'] != "" ) echo "&S_PLAYER=" . urlencode( $CONT_FIND['player'] );
		if( $CONT_FIND['keyword'] != "" ) echo "&S_KEYWORD=" . urlencode( $CONT_FIND['keyword'] );
		if( $CONT_FIND['style'] != "" ) echo "&S_STYLE=" . urlencode( $CONT_FIND['style'] );
		if( $CONT_FIND['category'] != "" ) echo "&S_CATEGORY=" . urlencode( $CONT_FIND['category'] );
		echo "\">";
	}
	?>
	<b>≫</b>　<b>[次ページ]</b>
	<?php if( $CONT_PAGE < $page_max ) echo "</a>"; ?>
	</td>
</tr>
</table>
</center>
<br>
<?php
	$list_num = count( $CONT_DATA );

	for( $p = 0;$p < $list_num;$p++ ) {
		$rec = $CONT_DATA[$p];
?>
<TABLE width=<?php printf( "%d",$displayTableWidth ); ?> border=1 cellspacing=1>
	<TBODY>
	<TR>
	<TD width=<?php printf( "%d",(int)($displayTableWidth * 0.45) ); ?>>
		<SPAN class=post><?php echo htmlspecialchars( $rec['post'] ); ?>
			<SPAN><BR>
				<SPAN class=name>
					<A href="<?php echo $scriptPath . "?CMD=view&NO=" . sprintf( "%d",$rec['cid'] );
					if( $CONT_FIND['player'] != "" ) echo "&S_PLAYER=" . urlencode( $CONT_FIND['player'] );
					if( $CONT_FIND['keyword'] != "" ) echo "&S_KEYWORD=" . urlencode( $CONT_FIND['keyword'] );
					if( $CONT_FIND['style'] != "" ) echo "&S_STYLE=" . urlencode( $CONT_FIND['style'] );
					if( $CONT_FIND['category'] != "" ) echo "&S_CATEGORY=" . urlencode( $CONT_FIND['category'] );
					?>"><?php echo htmlspecialchars( $rec['name'] ); ?></A>
				</SPAN>
			</SPAN>
		</SPAN><br>
	</TD>
	<TD width=<?php printf( "%d",(int)($displayTableWidth - ($displayTableWidth * 0.45 + 80)) ); ?>>
		<SPAN class=name>
			<A href="<?php echo $scriptPath . "?CMD=list&S_PLAYER=" . urlencode( $rec['player'] ); 
			if( $CONT_FIND['keyword'] != "" ) echo "&S_KEYWORD=" . urlencode( $CONT_FIND['keyword'] );
			if( $CONT_FIND['style'] != "" ) echo "&S_STYLE=" . urlencode( $CONT_FIND['style'] );
			if( $CONT_FIND['category'] != "" ) echo "&S_CATEGORY=" . urlencode( $CONT_FIND['category'] );
			?>"><?php echo htmlspecialchars( $rec['player'] ); ?></A>
		</SPAN>　（経験点：<?php echo htmlspecialchars( $rec['exp'] ); ?>）<BR>
		<?php echo htmlspecialchars( style2format( (int)$rec['style1'],(int)$rec['style2'],(int)$rec['style3'],(int)$rec['persona'],(int)$rec['keyst'] ) ); ?>
		<font size="-1">( <?php
		for( $pc = 0;($pc < $cateList['num'])&&($cateList[$pc]['id'] != $rec['category']);$pc++ );
		if( $pc < $cateList['num'] ) echo htmlspecialchars( $cateList[$pc]['name'] ); else echo "unknown";
		?> )</font>
	</TD>
	<TD width=80>
		<SPAN class=date>Latest Update<BR>
			<DIV class=date align=right><?php echo substr( $rec['updtime'],0,10 ); ?></DIV>
		</SPAN>
	</TD>
	</TR>
	</TBODY>
</TABLE>
<?php
	}
?>
<br>
<center>
<TABLE border=0>
<tr>
	<td>
	<?php
	if( $CONT_PAGE > 1 ) {
		echo "<a href=\"" . $scriptPath . sprintf( "?CMD=list&PAGE=%d",$CONT_PAGE - 1 );
		if( $CONT_FIND['player'] != "" ) echo "&S_PLAYER=" . urlencode( $CONT_FIND['player'] );
		if( $CONT_FIND['keyword'] != "" ) echo "&S_KEYWORD=" . urlencode( $CONT_FIND['keyword'] );
		if( $CONT_FIND['style'] != "" ) echo "&S_STYLE=" . urlencode( $CONT_FIND['style'] );
		if( $CONT_FIND['category'] != "" ) echo "&S_CATEGORY=" . urlencode( $CONT_FIND['category'] );
		echo "\">";
	}
	?>
	<b>[前ページ]</b>　<b>≪</b>　
	<?php if( $CONT_PAGE > 1 ) echo "</a>"; ?>
	</td>
	<td align="center">
	Page.<?php echo $CONT_PAGE . " / " . sprintf( "%d",$page_max ); ?><br>
	( <?php printf( "%dchars",$chr_num ); ?> )
	</td>
	<td>
	<?php
	if( $CONT_PAGE < $page_max ) {
		echo "<a href=\"" . $scriptPath . sprintf( "?CMD=list&PAGE=%d",$CONT_PAGE + 1 );
		if( $CONT_FIND['player'] != "" ) echo "&S_PLAYER=" . urlencode( $CONT_FIND['player'] );
		if( $CONT_FIND['keyword'] != "" ) echo "&S_KEYWORD=" . urlencode( $CONT_FIND['keyword'] );
		if( $CONT_FIND['style'] != "" ) echo "&S_STYLE=" . urlencode( $CONT_FIND['style'] );
		if( $CONT_FIND['category'] != "" ) echo "&S_CATEGORY=" . urlencode( $CONT_FIND['category'] );
		echo "\">";
	}
	?>
	<b>≫</b>　<b>[次ページ]</b>
	<?php if( $CONT_PAGE < $page_max ) echo "</a>"; ?>
	</td>
</tr>
</table>
</center>

<?php
}
else {
	echo "<center>";
	echo htmlspecialchars( "キャラクタが登録されていません。\n" );
	echo "</center>\n";
}
?>
