<TABLE width=<?php printf( "%d",$displayTableWidth ); ?> border=1>
	<TBODY>
	<TR>
		<Th width="45">
			<A href="<?php echo $scriptPath; ?>?CMD=f_reg<?php
			if( $CONT_FIND['player'] != "" ) echo "&S_PLAYER=" . urlencode( $CONT_FIND['player'] );
			if( $CONT_FIND['keyword'] != "" ) echo "&S_KEYWORD=" . urlencode( $CONT_FIND['keyword'] );
			if( $CONT_FIND['style'] != "" ) echo "&S_STYLE=" . urlencode( $CONT_FIND['style'] );
			if( $CONT_FIND['category'] != "" ) echo "&S_CATEGORY=" . urlencode( $CONT_FIND['category'] ); else echo "&S_CATEGORY=" . urlencode( $defaultSearchCategory );
			?>">����<br>��Ͽ</A>
		</th>
		<Th width="45">
			<A href="<?php echo $scriptPath; ?>?CMD=list<?php
			if( $CONT_FIND['category'] != "" ) echo "&S_CATEGORY=" . urlencode( $CONT_FIND['category'] ); else echo "&S_CATEGORY=" . urlencode( $defaultSearchCategory );
			?>">����<br>ɽ��</A>
		</th>
		<Th width="45">
			<A href="<?php echo $scriptPath; ?>?CMD=abstract<?php
			if( $CONT_FIND['category'] != "" ) echo "&S_CATEGORY=" . urlencode( $CONT_FIND['category'] ); else echo "&S_CATEGORY=" . urlencode( $defaultSearchCategory );
			?>">����<br>ɽ��</A>
		</th>
		<FORM action="<?php echo $scriptPath; ?>" method=post>
		<td width="<?php printf( "%d",$displayTableWidth - (45+45+45+60) ); ?>" align="left">
			<table border=0 cellspacing=0 cellpadding=0>
				<tr>
					<td><b>���������</b><INPUT type="text" name=S_KEYWORD size=20<?php if( $CONT_FIND['keyword'] != "" ) echo " value=\"" . htmlspecialchars( $CONT_FIND['keyword'] ) . "\""; ?>></td>
					<td><b>���У�</b><INPUT type="text" name=S_PLAYER size=16<?php if( $CONT_FIND['player'] != "" ) echo " value=\"" . htmlspecialchars( $CONT_FIND['player'] ) . "\""; ?>></td>
					<td>
						<b>����������</b>
						<SELECT name=S_STYLE>
							<OPTION<?php if( $CONT_FIND['style'] == "" ) echo " selected"; ?>></OPTION>
							<?php
								foreach( $styleList as $strec ) {
									echo "<OPTION";
									if( $CONT_FIND['style'] == $strec['name'] ) echo " selected";
									echo ">";
									echo htmlspecialchars( $strec['name'] );
									echo "</OPTION>\n";
								}
							?>
						</SELECT>
					</td>
				</tr>
				<tr>
					<td colspan=6>
						<b>�����ƥ��꡼</b>
						<SELECT size=1 name=S_CATEGORY>
						<?php
						for( $p = 0,$f = 0;$p < $cateList['num'];$p++ ) {
							echo "<OPTION value=\"" . $cateList[$p]['id'] . "\"";
							if( $CONT_FIND['category'] == $cateList[$p]['id'] ) { echo " selected"; $f = 1; }
							echo ">" . htmlspecialchars( $cateList[$p]['name'] ) . "</OPTION>\n";
						}
						?>
						</SELECT>
						��<input type="radio" name="CMD" value="list" checked>����
						��<input type="radio" name="CMD" value="abstract">����
						����<input type="submit" value="����饯������">
					</td>
				</tr>
			</table>
		</td>
		</form>
		<Th width="60"><A href="<?php echo $HomePage; ?>">�ƥ�����<br>�����</a></th>
	</tr>
	</TBODY>
</table>

<br>
