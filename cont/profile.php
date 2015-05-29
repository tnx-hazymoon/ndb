<?php
$rec = $CONT_DATA;
?>
<?php
if( isset( $CONT_ERR ) == TRUE ) {
	if( $CONT_ERR != "" ) {
		echo "<center>\n";
		echo "<font color=\"red\">\n";
		echo nl2br( htmlspecialchars( $CONT_ERR ) );
		echo "</font>\n";
		echo "</center><br>\n";
	}
}
if( isset( $CONT_MSG ) == TRUE ) {
	if( $CONT_MSG != "" ) {
		echo "<center>\n";
		echo nl2br( htmlspecialchars( $CONT_MSG ) );
		echo "</center><br>\n";
	}
}
?>
<FORM action="<?php echo $scriptPath; ?>" method=post>
<INPUT type=hidden name=CMD value=f_ed>
<INPUT type=hidden name=CID value=<?php echo sprintf( "%d",$CONT_CID ); ?>>

<TABLE width=<?php printf( "%d",$displayTableWidth ); ?> border=2>
	<TBODY>
	<TR>
		<TH align=left width=0%>
			<TABLE width="100%" border=0>
				<TBODY>
				<TR><TH align=left><SPAN class=post><?php echo htmlspecialchars( $rec['post'] ); ?></SPAN></TH></TR>
				<TR><TH align=left><SPAN class=name><?php echo htmlspecialchars( $rec['name'] ); ?></SPAN></TH></TR>
				</TBODY>
			</TABLE>
		</TH>
		<TH width="65%">
			<TABLE width="100%" border=0>
				<TBODY>
				<TR>
					<TH width="25%"><SPAN class=name><A href="<?php echo $scriptPath . "?CMD=list&amp;S_PLAYER=" . urlencode( $rec['player'] ); ?>"><?php echo htmlspecialchars( $rec['player'] ); ?></A></SPAN></TH>
					<TH width="60%" colSpan=4><SPAN class=novastyle><?php echo htmlspecialchars( style2format( $rec['style1'],$rec['style2'],$rec['style3'],$rec['persona'],$rec['keyst'] ) ); ?></SPAN></TH>
				</TR>
				<TR>
					<TH><SPAN class=post>（経験点：<?php echo htmlspecialchars( $rec['exp'] ); ?>）</span></TH>
					<TH width="15%"><SPAN class=ability><?php echo sprintf( "%d/%d",$rec['reason_ab'],$rec['reason_ct'] ); ?></SPAN></TH>
					<TH width="15%"><SPAN class=ability><?php echo sprintf( "%d/%d",$rec['passion_ab'],$rec['passion_ct'] ); ?></SPAN></TH>
					<TH width="15%"><SPAN class=ability><?php echo sprintf( "%d/%d",$rec['life_ab'],$rec['life_ct'] ); ?></SPAN></TH>
					<TH width="15%"><SPAN class=ability><?php echo sprintf( "%d/%d",$rec['mundane_ab'],$rec['mundane_ct'] ); ?></SPAN></TH>
				</TR>
				<TR>
					<TH colspan=2>（CombatSpeed：<?php echo sprintf( "%d", $rec['combatspeed'] ); ?>）</TH>
					<TH colspan=3>（ActionRank：<?php echo sprintf( "%d", $rec['actionrank'] ); ?>）</TH>
				</TR>
				</TBODY>
			</TABLE>
		</TH>
	</TR>
	<TR>
		<TD align=center valign=middle bgColor=#c0c0c0><?php
		if( $rec['photo'] != "" ) echo "<IMG src=\"" . $rec['photo'] . "\">";
		else                      echo "<IMG src=\"" . $nobodyPict . "\">";
		?></TD>
		<TD bgColor=#c0c0c0 valign=top>
			Category: <?php
			for( $p = 0;($p < $cateList['num'])&&($cateList[$p]['id'] != $rec['category']);$p++ );
			if( $p < $cateList['num'] ) echo htmlspecialchars( $cateList[$p]['name'] ); else echo "unknown";
			?><br>
			ID: <?php echo htmlspecialchars( $rec['citizen'] ); ?>　
			Aj: <?php echo htmlspecialchars( $rec['age'] ); ?>　
			Jender: <?php echo htmlspecialchars( $rec['jender'] ); ?>　
			Heit: <?php echo htmlspecialchars( $rec['height'] ); ?>cm　
			Weit: <?php echo htmlspecialchars( $rec['weight'] ); ?>kg<BR>
			Eyez: <?php echo htmlspecialchars( $rec['eyes'] ); ?>　
			Hair: <?php echo htmlspecialchars( $rec['hair'] ); ?>　
			Skin: <?php echo htmlspecialchars( $rec['skin'] ); ?>　
			BirthDay: <?php echo htmlspecialchars( $rec['birthday'] ); ?>
			<P><?php
			$lines = split( "\n", $rec['lifepass'] );
			if( $lines != NULL ) {
				if( count( $lines ) > 0 ) {
					echo "<i><b>Lifepass</b></i><br>\n";
					foreach( $lines as $line ) echo line_output( $line ) . "<br>\n";
					echo "<hr width=\"100%\" size=1>";
				}
			}
			$lines = split( "\n", $rec['profile'] );
			echo "<i><b>Profile</b></i><br>\n";
			foreach( $lines as $line ) echo line_output( $line ) . "<br>\n";
			echo "<hr width=\"100%\" size=1>";
			echo "<i><b>Evolution</b></i><br>";
			echo nl2br( htmlspecialchars( $rec['comment'] ) );
			?></P>
		</TD>
	</TR>
	<TR>
		<TD bgColor=#d5d5d5 colSpan=2>
			<TABLE width="100%" border=0>
				<TBODY>
				<TR>
					<TD vAlign=top width="25%">
						<SPAN class=data><?php echo nl2br( htmlspecialchars( $rec['pub_skill'] ) ); ?></SPAN>
					</TD>
					<TD vAlign=top width="40%">
						<SPAN class=data><?php echo nl2br( htmlspecialchars( $rec['spc_skill'] ) ); ?></SPAN>
					</TD>
					<TD vAlign=top width="35%">
						<SPAN class=data><?php echo nl2br( htmlspecialchars( $rec['items'] ) ); ?></SPAN>
					</TD>
				</TR>
				</TBODY>
			</TABLE>
		</TD>
	</TR>
	<FORM method="POST" action="<?php echo $scriptPath; ?>">
	<TR>
		<INPUT type=hidden name=CMD value=f_ed>
		<INPUT type=hidden name=NO value=<?php echo sprintf( "%d",$CONT_CID ); ?>>
		<INPUT type=hidden name=S_PLAYER   value="<?php echo htmlspecialchars( $CONT_FIND['player'] ); ?>">
		<INPUT type=hidden name=S_KEYWORD  value="<?php echo htmlspecialchars( $CONT_FIND['keyword'] ); ?>">
		<INPUT type=hidden name=S_STYLE    value="<?php echo htmlspecialchars( $CONT_FIND['style'] ); ?>">
		<INPUT type=hidden name=S_CATEGORY value="<?php echo htmlspecialchars( $CONT_FIND['category'] ); ?>">
		<TH align=middle colSpan=2>
			パスワード:<INPUT type=password size=15 name=pass>
			<INPUT type=submit value=編集／訂正>
		</TH>
	</TR>
	</FORM>
	<TR valign=middle>
		<td align=center colspan=2>
			<table border=0 cellspacing=0 cellpadding=0 width="100%">
			<tr valign="middle" align="center">
			<FORM action=<?php echo $scriptPath; ?> method=post>
			<td width="33%">
			<INPUT type=hidden name=CMD value=f_dup>
			<INPUT type=hidden name=NO value=<?php echo sprintf( "%d",$CONT_CID ); ?>> 
			<INPUT type=hidden name=S_PLAYER   value="<?php echo htmlspecialchars( $CONT_FIND['player'] ); ?>">
			<INPUT type=hidden name=S_KEYWORD  value="<?php echo htmlspecialchars( $CONT_FIND['keyword'] ); ?>">
			<INPUT type=hidden name=S_STYLE    value="<?php echo htmlspecialchars( $CONT_FIND['style'] ); ?>">
			<INPUT type=hidden name=S_CATEGORY value="<?php echo htmlspecialchars( $CONT_FIND['category'] ); ?>">
			<INPUT type=submit value=このデータで新規作成>
			</td>
			</form>
			<FORM action=<?php echo $scriptPath; ?> method=post>
			<td width="33%">
			<INPUT type=hidden name=CMD value=xmlprof>
			<INPUT type=hidden name=NO value=<?php echo sprintf( "%d",$CONT_CID ); ?>> 
			<INPUT type=hidden name=S_PLAYER   value="<?php echo htmlspecialchars( $CONT_FIND['player'] ); ?>">
			<INPUT type=hidden name=S_KEYWORD  value="<?php echo htmlspecialchars( $CONT_FIND['keyword'] ); ?>">
			<INPUT type=hidden name=S_STYLE    value="<?php echo htmlspecialchars( $CONT_FIND['style'] ); ?>">
			<INPUT type=hidden name=S_CATEGORY value="<?php echo htmlspecialchars( $CONT_FIND['category'] ); ?>">
			<INPUT type=submit value=XMLデータをエクスポート>
			</td>
			</form>
			<FORM action=<?php echo $scriptPath; ?> method=post>
			<td width="33%">
			<INPUT type=hidden name=CMD value=pdfview>
			<INPUT type=hidden name=NO value=<?php echo sprintf( "%d",$CONT_CID ); ?>>
			<INPUT type=hidden name=S_PLAYER   value="<?php echo htmlspecialchars( $CONT_FIND['player'] ); ?>">
			<INPUT type=hidden name=S_KEYWORD  value="<?php echo htmlspecialchars( $CONT_FIND['keyword'] ); ?>">
			<INPUT type=hidden name=S_STYLE    value="<?php echo htmlspecialchars( $CONT_FIND['style'] ); ?>">
			<INPUT type=hidden name=S_CATEGORY value="<?php echo htmlspecialchars( $CONT_FIND['category'] ); ?>">
			<INPUT type=submit value=印刷用画面>
			</td>
			</FORM>
			</tr>
			</table>
		</td>
	</TR>
	<TR>
		<FORM action=<?php echo $scriptPath; ?> method=post>
		<INPUT type=hidden name=CMD value=f_del>
		<INPUT type=hidden name=NO value=<?php echo sprintf( "%d",$CONT_CID ); ?>> 
		<INPUT type=hidden name=S_PLAYER   value="<?php echo htmlspecialchars( $CONT_FIND['player'] ); ?>">
		<INPUT type=hidden name=S_KEYWORD  value="<?php echo htmlspecialchars( $CONT_FIND['keyword'] ); ?>">
		<INPUT type=hidden name=S_STYLE    value="<?php echo htmlspecialchars( $CONT_FIND['style'] ); ?>">
		<INPUT type=hidden name=S_CATEGORY value="<?php echo htmlspecialchars( $CONT_FIND['category'] ); ?>">
		<TD align=center>
			パスワード:<INPUT type=password size=15 name=pass>
			<INPUT type=submit value=削除> </TD>
		</td>
		</FORM>
		<FORM action=<?php echo $scriptPath; ?> method=post>
		<INPUT type=hidden name=CMD value=chpass>
		<INPUT type=hidden name=NO value=<?php echo sprintf( "%d",$CONT_CID ); ?>> 
		<INPUT type=hidden name=S_PLAYER   value="<?php echo htmlspecialchars( $CONT_FIND['player'] ); ?>">
		<INPUT type=hidden name=S_KEYWORD  value="<?php echo htmlspecialchars( $CONT_FIND['keyword'] ); ?>">
		<INPUT type=hidden name=S_STYLE    value="<?php echo htmlspecialchars( $CONT_FIND['style'] ); ?>">
		<INPUT type=hidden name=S_CATEGORY value="<?php echo htmlspecialchars( $CONT_FIND['category'] ); ?>">
		<TD align=center>
			（現在の）パスワード:<INPUT type=password size=15 name=oldpass>
			新パスワード:<INPUT type=password size=15 name=newpass>
			<INPUT type=submit value=パスワード変更> </TD>
		</td>
		</FORM>
	</TR>
	</TBODY>
</TABLE>
