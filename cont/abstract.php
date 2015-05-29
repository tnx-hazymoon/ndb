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
	$page_max = (int)(($chr_num + ($abstractMaxPerPage - 1)) / $abstractMaxPerPage);

?>
<center>
<TABLE border=0>
<tr>
	<td>
	<?php
	if( $CONT_PAGE > 1 ) {
		echo "<a href=\"" . $_SERVER['SCRIPT_NAME'] . sprintf( "?CMD=abstract&PAGE=%d",$CONT_PAGE - 1 );
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
		echo "<a href=\"" . $_SERVER['SCRIPT_NAME'] . sprintf( "?CMD=abstract&PAGE=%d",$CONT_PAGE + 1 );
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
<TABLE width=<?php printf( "%d",$displayTableWidth ); ?> border=1 cellspacing=1 style="page-break-inside: avoid;">
	<TBODY>
	<TR>
	<TD valign="top" width=<?php printf( "%d",(int)($displayTableWidth * 0.55) ); ?>>
		<SPAN class=post><?php echo htmlspecialchars( $rec['post'] ); ?>
			<SPAN><BR>
				<SPAN class=name>
					<A href="<?php echo $_SERVER['SCRIPT_NAME'] . "?CMD=view&NO=" . sprintf( "%d",$rec['cid'] );
					if( $CONT_FIND['player'] != "" ) echo "&S_PLAYER=" . urlencode( $CONT_FIND['player'] );
					if( $CONT_FIND['keyword'] != "" ) echo "&S_KEYWORD=" . urlencode( $CONT_FIND['keyword'] );
					if( $CONT_FIND['style'] != "" ) echo "&S_STYLE=" . urlencode( $CONT_FIND['style'] );
					if( $CONT_FIND['category'] != "" ) echo "&S_CATEGORY=" . urlencode( $CONT_FIND['category'] );
					?>"><?php echo htmlspecialchars( $rec['name'] ); ?></A>
				</SPAN>
			</SPAN>
		</SPAN><br>
		<hr width="100%">
		<div align="left" style="FONT-SIZE: 9pt; LINE-HEIGHT: 10pt;">
			ID: <?php echo htmlspecialchars( $rec['citizen'] ); ?>　
			Aj: <?php echo htmlspecialchars( $rec['age'] ); ?>　
			Jender: <?php echo htmlspecialchars( $rec['jender'] ); ?>　
			Heit: <?php echo htmlspecialchars( $rec['height'] ); ?>cm　
			Weit: <?php echo htmlspecialchars( $rec['weight'] ); ?>kg<BR>
			Eyez: <?php echo htmlspecialchars( $rec['eyes'] ); ?>　
			Hair: <?php echo htmlspecialchars( $rec['hair'] ); ?>　
			Skin: <?php echo htmlspecialchars( $rec['skin'] ); ?>　
			BirthDay: <?php echo htmlspecialchars( $rec['birthday'] ); ?>
		</div>
	</TD>
	<TD valign="top" width=<?php printf( "%d",(int)($displayTableWidth - ($displayTableWidth * 0.55)) ); ?> style="FONT-SIZE: 9pt; LINE-HEIGHT: 12pt;">
		<SPAN class=name>
			<A href="<?php echo $_SERVER['SCRIPT_NAME'] . "?CMD=abstract&S_PLAYER=" . urlencode( $rec['player'] ); 
			if( $CONT_FIND['keyword'] != "" ) echo "&S_KEYWORD=" . urlencode( $CONT_FIND['keyword'] );
			if( $CONT_FIND['style'] != "" ) echo "&S_STYLE=" . urlencode( $CONT_FIND['style'] );
			if( $CONT_FIND['category'] != "" ) echo "&S_CATEGORY=" . urlencode( $CONT_FIND['category'] );
			?>"><?php echo htmlspecialchars( $rec['player'] ); ?></A>
		</SPAN>　（Exp：<?php echo htmlspecialchars( $rec['exp'] ); ?>
		　Update：<?php echo substr( $rec['updtime'],0,10 ); ?>)
		<BR>
		<SPAN class=novastyle>
		<?php echo htmlspecialchars( style2format( (int)$rec['style1'],(int)$rec['style2'],(int)$rec['style3'],(int)$rec['persona'],(int)$rec['keyst'] ) ); ?>
		</span>
		<br>
		<SPAN class=ability>
		理性：<?php echo sprintf( "%d/%d",$rec['reason_ab'],$rec['reason_ct'] ); ?>　
		感情：<?php echo sprintf( "%d/%d",$rec['passion_ab'],$rec['passion_ct'] ); ?>　
		生命：<?php echo sprintf( "%d/%d",$rec['life_ab'],$rec['life_ct'] ); ?>　
		外界：<?php echo sprintf( "%d/%d",$rec['mundane_ab'],$rec['mundane_ct'] ); ?></SPAN><br>
		（CombatSpeed：<?php echo sprintf( "%d", $rec['combatspeed'] ); ?>，ActionRank：<?php echo sprintf( "%d", $rec['actionrank'] ); ?>）<br>
		Category: <?php
		for( $w = 0;($p < $cateList['num'])&&($cateList[$w]['id'] != $rec['category']);$w++ );
		if( $w < $cateList['num'] ) echo htmlspecialchars( $cateList[$w]['name'] ); else echo "unknown";
		?><br>
	</TD>
	</TR>
	<TR>
	<TD valign="top" colspan=2>
		<table border=0 width="100%" cellspacing=0 cellpadding=1>
		<tr valign="top">
		<?php
			$ns = socieskill_split( $rec['pub_skill'] );
		?>
		<td width="20%" style="FONT-SIZE: 7pt; LINE-HEIGHT: 8pt;">
			<?php echo nl2br( htmlspecialchars( $ns['normal'] ) ); ?>
		</td>
		<td width="25%" style="FONT-SIZE: 7pt; LINE-HEIGHT: 8pt;">
			<?php echo nl2br( htmlspecialchars( $ns['socie'] ) ); ?>
		</td>
		<td width="20%" style="FONT-SIZE: 7pt; LINE-HEIGHT: 8pt;">
			<?php echo nl2br( htmlspecialchars( $rec['spc_skill'] ) ); ?>
		</td>
		<td width="35%" style="FONT-SIZE: 7pt; LINE-HEIGHT: 8pt;">
			<?php echo nl2br( htmlspecialchars( $rec['items'] ) ); ?>
		</td>
		</tr>
		</table>
	</TD>
	</TR>
	</TBODY>
</TABLE>
<br>
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
		echo "<a href=\"" . $_SERVER['SCRIPT_NAME'] . sprintf( "?CMD=abstract&PAGE=%d",$CONT_PAGE - 1 );
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
		echo "<a href=\"" . $_SERVER['SCRIPT_NAME'] . sprintf( "?CMD=abstract&PAGE=%d",$CONT_PAGE + 1 );
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
<?php
// 一般技能から、コネ技能と社会技能を分離する。
function	socieskill_split( $skill )
{
	$w = split( "\n",$skill );
	$normal = "";
	$socie  = "";
	$f = 0;
	foreach( $w as $wl ) {
		if( strpos( $wl,"コネ" ) != FALSE ) $f = 1;
		else if( strpos( $wl,"社会" ) != FALSE ) $f = 1;

		if( $f == 0 ) $normal .= $wl . "\n"; else $socie .= $wl . "\n";
	}

	return array( 'normal' => $normal,'socie' => $socie );
}
?>
