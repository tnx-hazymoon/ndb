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
<script language=JavaScript src="<?php echo $jscrPath[$jscrType]; ?>"></script>
<form name=form1 action="<?php echo $scriptPath; ?>" method=POST>
<input type=hidden name=CMD value=edit>
<input type=hidden name=NO value=<?php echo sprintf( "%d",$CONT_CID ); ?>>
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
<table border=1 cellspacing=1 width=<?php printf( "%d",$inputTableWidth ); ?>>
<tr>
	<th colspan=3>£Á£Â£Ï£Õ£Ô¡¡£Ã£Á£Ó£Ô</th>
	<th><a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?CMD=view&CID=<?php echo sprintf( "%d",$CONT_CID ); ?>">¥­¥ã¥¹¥È¾ÜºÙ²èÌÌ¤ËÌá¤ë</a></th>
</tr>
<tr>
	<th>HANDLE</th>
	<td colspan=3><input type=text size=50 name=handle value="<?php echo htmlspecialchars( $rec['name'] ); ?>"></td>
</tr>
<tr>
	<th>JOB&POST</th>
	<td colspan=3><input type=text size=50 name=job value="<?php echo htmlspecialchars( $rec['post'] ); ?>"></td>
</tr>
	<TR>
		<TH>CATEGORY</TH>
		<TD colSpan=3>
			<SELECT size=1 name=category>
			<?php
			for( $p = 0;$p < $cateList['num'];$p++ ) {
				if( $cateList[$p]['sidx'] != 0 ) continue;
				echo "<OPTION value=\"" . $cateList[$p]['id'] . "\"";
				if( $rec['category'] == $cateList[$p]['id'] ) echo " selected";
				echo ">" . htmlspecialchars( $cateList[$p]['name'] ) . "</OPTION>\n";
			}
			?>
			</SELECT>
		</TD>
	</TR>
<tr>
	<th>PLAYER</th>
	<td colspan=3><input type=text size=30 name=player value="<?php echo htmlspecialchars( $rec['player'] ); ?>"></td>
</tr>
<tr>
	<th>STYLEZ</th>
	<td>
		<select name=style1 size=1 onChange="calc()">
			<option<?php if( $rec['style1'] < -99 )    echo " selected"; ?>>¡Ý</option>
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
		¡ý<input type=radio name=persona value=1<?php if( $rec['persona'] == 1 ) echo " checked"; ?>>
		¡ü<input type=radio name=key value=1<?php if( $rec['keyst'] == 1 ) echo " checked"; ?>>
	</td>
	<td>
		<select name=style2 size=1 onChange="calc()">
			<option<?php if( $rec['style2'] < -99 )    echo " selected"; ?>>¡Ý</option>
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
		¡ý<input type=radio name=persona value=2<?php if( $rec['persona'] == 2 ) echo " checked"; ?>>
		¡ü<input type=radio name=key value=2<?php if( $rec['keyst'] == 2 ) echo " checked"; ?>>
	</td>
	<td>
		<select name=style3 size=1 onChange="calc()">
			<option<?php if( $rec['style3'] < -99 )    echo " selected"; ?>>¡Ý</option>
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
		¡ý<input type=radio name=persona value=3<?php if( $rec['persona'] == 3 ) echo " checked"; ?>>
		¡ü<input type=radio name=key value=3<?php if( $rec['keyst'] == 3 ) echo " checked"; ?>>
	</td>
</tr>
<tr>
	<th>POWERZ</th>
	<td colspan=3>
		Reason<input type=text size=2 name=reason value=<?php echo sprintf( "%d",$rec['reason_ab'] ); ?>>/<input type=text size=2 name=reason_c value=<?php echo sprintf( "%d",$rec['reason_ct'] ); ?>>¡¡
		Passion<input type=text size=2 name=passion value=<?php echo sprintf( "%d",$rec['passion_ab'] ); ?>>/<input type=text size=2 name=passion_c value=<?php echo sprintf( "%d",$rec['passion_ct'] ); ?>>¡¡
		Life<input type=text size=2 name=life value=<?php echo sprintf( "%d",$rec['life_ab'] ); ?>>/<input type=text size=2 name=life_c value=<?php echo sprintf( "%d",$rec['life_ct'] ); ?>>¡¡
		Mundane<input type=text size=2 name=mundane value=<?php echo sprintf( "%d",$rec['mundane_ab'] ); ?>>/<input type=text size=2 name=mundane_c value=<?php echo sprintf( "%d",$rec['mundane_ct'] ); ?>><br>
		¡¡¡¡¡¡¡¡CombatSpeed<input type=text size=4 name=combatspeed value=<?php echo sprintf( "%d",$rec['combatspeed'] ); ?>>
		<INPUT onclick=recalc_combatspeed() type=button value=ReCalc>
		¡¡¡¡ActionRank<input type=text size=4 name=actionrank value=<?php echo sprintf( "%d",$rec['actionrank'] ); ?>>
	</td>
</tr>
<tr>
	<th>PROFILE</th>
		<td colspan=4>
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
				case "¡Ý" : $jender = "¡Ý"; break;
				case "¡é" : $jender = "¡é"; break;
				case "¡ê" : $jender = "¡ê"; break;
				case "¡©" : $jender = "¡©"; break;
				default :   $jender = "¡Ý"; break;
				}
				?>
				<option<?php if( $jender == "¡Ý" ) echo " selected"; ?>>¡Ý</option>
				<option<?php if( $jender == "¡é" ) echo " selected"; ?>>¡é</option>
				<option<?php if( $jender == "¡ê" ) echo " selected"; ?>>¡ê</option>
				<option<?php if( $jender == "¡©" ) echo " selected"; ?>>¡©</option>
			</select>
			Heit:<input size=3 type=text name=heit value="<?php echo htmlspecialchars( $rec['height'] ); ?>">cm
			Weit:<input size=3 type=text name=weit value="<?php echo htmlspecialchars( $rec['weight'] ); ?>">kg
			Eyez:<input size=3 type=text name=eyez value="<?php echo htmlspecialchars( $rec['eyes'] ); ?>">
			Hair:<input size=3 type=text name=hair value="<?php echo htmlspecialchars( $rec['hair'] ); ?>">
			Skin:<input size=3 type=text name=skin value="<?php echo htmlspecialchars( $rec['skin'] ); ?>">
			Birthday:<input size=4 type=text name=birthday value="<?php echo htmlspecialchars( $rec['birthday'] ); ?>">
			<textarea name=story rows=15 cols=80><?php echo htmlspecialchars( $rec['profile'] ); ?></textarea>
			<textarea name=evolution rows=15 cols=40><?php echo htmlspecialchars( $rec['comment'] ); ?></textarea>
		</td>
	</tr>
	<tr>
		<th>EXP</th>
		<td colspan=3>
			EXP:<input type=text size=3 name=exp value="<?php echo htmlspecialchars( $rec['exp'] ); ?>">
		</td>
	</tr>
	<tr>
		<th>LIFEPASS</th>
		<td colSpan=3>
			<textarea name=lifepass rows=5 cols=80><?php echo htmlspecialchars( $rec['lifepass'] ); ?></textarea>
		</td>
	</tr>
	<tr>
		<th>DATA<br>£±¡ü¡Ý¡Ý¡Ý<br>£±¡Ý¡ü¡Ý¡Ý<br>£±¡Ý¡Ý¡ü¡Ý<br>£±¡Ý¡Ý¡Ý¡ü<br>£²¡ü¡ü¡Ý¡Ý<br>£²¡ü¡Ý¡ü¡Ý<br>£²¡ü¡Ý¡Ý¡ü<br>£²¡Ý¡ü¡ü¡Ý<br>£²¡Ý¡ü¡Ý¡ü<br>£²¡Ý¡Ý¡ü¡ü<br>£³¡ü¡ü¡ü¡Ý<br>£³¡ü¡ü¡Ý¡ü<br>£³¡ü¡Ý¡ü¡ü<br>£³¡Ý¡ü¡ü¡ü<br>£´¡ü¡ü¡ü¡ü</th>
		<td>NomalSkillz¡¡
			<input type=button value=ListUp onClick=n_skill_listup()><br>
			<textarea rows=50 cols=30 name=normalskill><?php echo htmlspecialchars( $rec['pub_skill'] ); ?></textarea>
		</td>
		<td>StyleSkillz¡¡
			<input type=button value=ListUp onClick=s_skill_listup()><br>
			<textarea rows=50 cols=45 name=superskill><?php echo htmlspecialchars( $rec['spc_skill'] ); ?></textarea>
		</td>
		<td>Outfitz¡¡
			<INPUT onclick=add_defequip() type=button value=DefaultEquip><BR>
			<textarea rows=50 cols=40 name=outfit><?php echo htmlspecialchars( $rec['items'] ); ?></textarea>
		</td>
	</tr>
	<tr>
		<th colspan=5>
			<input type=hidden name=pass value="<?php echo htmlspecialchars( $CONT_PASS ); ?>">
			<input type=submit value=ÊÔ½¸´°Î»¡¿¹¹¿·><br>
		</th>
	</tr>
</table>
</form>
