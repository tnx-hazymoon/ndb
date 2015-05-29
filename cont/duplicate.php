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
<SCRIPT language=JavaScript src="<?php echo $jscrPath[$jscrType]; ?>"></SCRIPT>

<FORM name=form1 action="<?php echo $scriptPath; ?>" method=post>
<INPUT type=hidden name=CMD value=regist>
<?php
if( $CONT_FIND['category'] != "" ) {
	if( $CONT_FIND['category'] != $defaultSearchCategory ) {
		echo "<input type=hidden name=S_CATEGORY value=" . $CONT_DATA['category'] . ">\n";
	}
	else {
		echo "<input type=hidden name=S_CATEGORY value=" . $CONT_FIND['category'] . ">\n";
	}
}
else {
	echo "<input type=hidden name=S_CATEGORY value=" . $defaultSearchCategory . ">\n";
}
?>
<TABLE cellSpacing=1 width=<?php printf( "%d",$inputTableWidth ); ?> border=1>
	<TBODY>
	<TR><TH colSpan=4>�薜瞿洷掁唌﹝瓊薜茛�</TH></TR>
	<TR>
		<TH>HANDLE</TH>
		<TD colSpan=3><INPUT size=50 name=handle></TD>
	</TR>
	<TR>
		<TH>JOB&amp;POST</TH>
		<TD colSpan=3><INPUT size=50 name=job value="<?php echo htmlspecialchars( $rec['post'] ); ?>"></TD>
	</TR>
	<TR>
		<TH>CATEGORY</TH>
		<TD colSpan=3>
			<SELECT size=1 name=category>
			<?php
			for( $p = 0,$f = 0;$p < $cateList['num'];$p++ ) {
				if( $cateList[$p]['sidx'] != 0 ) continue;
				echo "<OPTION value=\"" . $cateList[$p]['id'] . "\"";
				if( $CONT_FIND['category'] == $cateList[$p]['id'] ) { echo " selected"; $f = 1; }
				echo ">" . htmlspecialchars( $cateList[$p]['name'] ) . "</OPTION>\n";
			}
			?>
			</SELECT>
		</TD>
	</TR>
	<TR>
		<TH>PLAYER</TH>
		<TD colSpan=3><INPUT size=30 name=player></TD>
	</TR>
	<TR>
		<TH>STYLEZ</TH>
		<td>
			<select name=style1 size=1 onChange="calc()">
				<option<?php if( $rec['style1'] < -99 )    echo " selected"; ?>>≡</option>
				<?php
					foreach( $styleList as $strec ) {
						echo "<option";
						if( $rec['style1'] == $strec['no'] ) echo " selected";
						echo ">";
						echo htmlspecialchars( $strec['name'] );
						echo "</option>\n";
					}
				?>
			</select>
			∣<input type=radio name=persona value=1<?php if( $rec['persona'] == 1 ) echo " checked"; ?>>
			∥<input type=radio name=key value=1<?php if( $rec['keyst'] == 1 ) echo " checked"; ?>>
		</td>
		<td>
			<select name=style2 size=1 onChange="calc()">
				<option<?php if( $rec['style2'] < -99 )    echo " selected"; ?>>≡</option>
				<?php
					foreach( $styleList as $strec ) {
						echo "<option";
						if( $rec['style2'] == $strec['no'] ) echo " selected";
						echo ">";
						echo htmlspecialchars( $strec['name'] );
						echo "</option>\n";
					}
				?>
			</select>
			∣<input type=radio name=persona value=2<?php if( $rec['persona'] == 2 ) echo " checked"; ?>>
			∥<input type=radio name=key value=2<?php if( $rec['keyst'] == 2 ) echo " checked"; ?>>
		</td>
		<td>
			<select name=style3 size=1 onChange="calc()">
				<option<?php if( $rec['style3'] < -99 )    echo " selected"; ?>>≡</option>
				<?php
					foreach( $styleList as $strec ) {
						echo "<option";
						if( $rec['style3'] == $strec['no'] ) echo " selected";
						echo ">";
						echo htmlspecialchars( $strec['name'] );
						echo "</option>\n";
					}
				?>
			</select>
			∣<input type=radio name=persona value=3<?php if( $rec['persona'] == 3 ) echo " checked"; ?>>
			∥<input type=radio name=key value=3<?php if( $rec['keyst'] == 3 ) echo " checked"; ?>>
		</td>
	</TR>
	<TR>
		<TH>POWERZ</TH>
		<TD colSpan=3>
			Reason<input type=text size=2 name=reason value=<?php echo sprintf( "%d",$rec['reason_ab'] ); ?>>/<input type=text size=2 name=reason_c value=<?php echo sprintf( "%d",$rec['reason_ct'] ); ?>>﹛
			Passion<input type=text size=2 name=passion value=<?php echo sprintf( "%d",$rec['passion_ab'] ); ?>>/<input type=text size=2 name=passion_c value=<?php echo sprintf( "%d",$rec['passion_ct'] ); ?>>﹛
			Life<input type=text size=2 name=life value=<?php echo sprintf( "%d",$rec['life_ab'] ); ?>>/<input type=text size=2 name=life_c value=<?php echo sprintf( "%d",$rec['life_ct'] ); ?>>﹛
			Mundane<input type=text size=2 name=mundane value=<?php echo sprintf( "%d",$rec['mundane_ab'] ); ?>>/<input type=text size=2 name=mundane_c value=<?php echo sprintf( "%d",$rec['mundane_ct'] ); ?>><br>
			﹛﹛﹛﹛CombatSpeed<input type=text size=4 name=combatspeed value=<?php echo sprintf( "%d",$rec['combatspeed'] ); ?>>
			<INPUT onclick=recalc_combatspeed() type=button value=ReCalc>
			﹛﹛ActionRank<input type=text size=4 name=actionrank value=<?php echo sprintf( "%d",$rec['actionrank'] ); ?>>
		</TD>
	</TR>
	<TR>
		<TH>PROFILE</TH>
		<TD colSpan=4>
			PHOTO(url):<input type=text name=photo size=80 value="<?php echo htmlspecialchars( $rec['photo'] ); ?>"><br>
			ID:
			<select name=id size=1>
				<?php
				switch( $rec['citizen'] ) {
				case "-" : $citizen = "-"; break;
				case "X" : $citizen = "X"; break;
				case "C-": $citizen = "C-"; break;
				case "B-": $citizen = "B-"; break;
				case "C" : $citizen = "C"; break;
				case "B" : $citizen = "B"; break;
				case "C+": $citizen = "C+"; break;
				case "B+": $citizen = "B+"; break;
				case "A" : $citizen = "A"; break;
				case "A+": $citizen = "A+"; break;
				case "S" : $citizen = "S"; break;
				default:   $citizen = "-"; break;
				}
				?>
				<option<?php if( $citizen == "-"  ) echo " selected"; ?>>-</option>
				<option<?php if( $citizen == "X"  ) echo " selected"; ?>>X</option>
				<option<?php if( $citizen == "C-" ) echo " selected"; ?>>C-</option>
				<option<?php if( $citizen == "B-" ) echo " selected"; ?>>B-</option>
				<option<?php if( $citizen == "C"  ) echo " selected"; ?>>C</option>
				<option<?php if( $citizen == "B"  ) echo " selected"; ?>>B</option>
				<option<?php if( $citizen == "C+" ) echo " selected"; ?>>C+</option>
				<option<?php if( $citizen == "B+" ) echo " selected"; ?>>B+</option>
				<option<?php if( $citizen == "A"  ) echo " selected"; ?>>A</option>
				<option<?php if( $citizen == "A+" ) echo " selected"; ?>>A+</option>
				<option<?php if( $citizen == "S"  ) echo " selected"; ?>>S</option>
			</select>
			Aj:<input size=2 type=text name=aj value="<?php echo htmlspecialchars( $rec['age'] ); ?>">
			Jender:
			<select name=jender size=1>
				<?php
				switch( $rec['jender'] ) {
				case "≡" : $jender = "≡"; break;
				case "⊿" : $jender = "⊿"; break;
				case "㏒" : $jender = "㏒"; break;
				case "〝" : $jender = "〝"; break;
				default :   $jender = "≡"; break;
				}
				?>
				<option<?php if( $jender == "≡" ) echo " selected"; ?>>≡</option>
				<option<?php if( $jender == "⊿" ) echo " selected"; ?>>⊿</option>
				<option<?php if( $jender == "㏒" ) echo " selected"; ?>>㏒</option>
				<option<?php if( $jender == "〝" ) echo " selected"; ?>>〝</option>
			</select>
			Heit:<input size=3 type=text name=heit value="<?php echo htmlspecialchars( $rec['height'] ); ?>">cm
			Weit:<input size=3 type=text name=weit value="<?php echo htmlspecialchars( $rec['weight'] ); ?>">kg
			Eyez:<input size=3 type=text name=eyez value="<?php echo htmlspecialchars( $rec['eyes'] ); ?>">
			Hair:<input size=3 type=text name=hair value="<?php echo htmlspecialchars( $rec['hair'] ); ?>">
			Skin:<input size=3 type=text name=skin value="<?php echo htmlspecialchars( $rec['skin'] ); ?>">
			Birthday:<input size=4 type=text name=birthday value="<?php echo htmlspecialchars( $rec['birthday'] ); ?>">
			<textarea name=story rows=15 cols=80><?php echo htmlspecialchars( $rec['profile'] ); ?></textarea>
			<textarea name=evolution rows=15 cols=40><?php echo htmlspecialchars( $rec['comment'] ); ?></textarea>
		</TD>
	</TR>
	<TR>
		<TH>EXP</TH>
		<TD colSpan=3>
			EXP:<input type=text size=3 name=exp value="<?php echo htmlspecialchars( $rec['exp'] ); ?>">
		</TD>
	</TR>
	<TR>
		<TH>LIFEPASS</TH>
		<TD colSpan=3>
			<textarea name=lifepass rows=5 cols=80><?php echo htmlspecialchars( $rec['lifepass'] ); ?></textarea>
		</TD>
	</TR>
	<TR>
		<TH>DATA<BR>ㄠ∥≡≡≡<BR>ㄠ≡∥≡≡<BR>ㄠ≡≡∥≡<BR>ㄠ≡≡≡∥<BR>ㄡ∥∥≡≡<BR>ㄡ∥≡∥≡<BR>ㄡ∥≡≡∥<BR>ㄡ≡∥∥≡<BR>ㄡ≡∥≡∥<BR>ㄡ≡≡∥∥<BR>ㄢ∥∥∥≡<BR>ㄢ∥∥≡∥<BR>ㄢ∥≡∥∥<BR>ㄢ≡∥∥∥<BR>ㄣ∥∥∥∥</TH>
		<TD>NomalSkillz﹛
			<INPUT onclick=n_skill_listup() type=button value=ListUp><BR>
			<textarea rows=50 cols=30 name=normalskill><?php echo htmlspecialchars( $rec['pub_skill'] ); ?></textarea>
		</TD>
		<TD>StyleSkillz﹛
			<INPUT onclick=s_skill_listup() type=button value=ListUp><BR>
			<textarea rows=50 cols=45 name=superskill><?php echo htmlspecialchars( $rec['spc_skill'] ); ?></textarea>
		</TD>
		<TD>Outfitz﹛
			<INPUT onclick=add_defequip() type=button value=DefaultEquip><BR>
			<textarea rows=50 cols=40 name=outfit><?php echo htmlspecialchars( $rec['items'] ); ?></textarea>
		</TD>
	</TR>
	<TR>
		<TH colSpan=5>
			由旦伐□玉:
			<INPUT type=password size=10 name=pass>
			<INPUT type=submit value=瓚狤><br>
			<font color="red">◢由旦伐□玉反优內ェ恘仄化仁分今中﹝</font>
		</TH>
	</TR>
	</TBODY>
</TABLE>
</FORM>
