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
if( $CONT_FIND['category'] != "" ) echo "<INPUT type=hidden name=S_CATEGORY value=" . $CONT_FIND['category'] . ">\n";
else                               echo "<input type=hidden name=S_CATEGORY value=" . $defaultSearchCategory . ">\n";
?>
<TABLE cellSpacing=1 width=<?php printf( "%d",$inputTableWidth ); ?> border=1>
	<TBODY>
	<TR><TH colSpan=4>ＡＢＯＵＴ　ＣＡＳＴ</TH></TR>
	<TR>
		<TH>HANDLE</TH>
		<TD colSpan=3><INPUT size=50 name=handle></TD>
	</TR>
	<TR>
		<TH>JOB&amp;POST</TH>
		<TD colSpan=3><INPUT size=50 name=job></TD>
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
		<TD>
			<SELECT onchange="calc()" size=1 name=style1>
			<OPTION selected>−</OPTION>
			<?php
				foreach( $styleList as $strec ) {
					echo "<option>";
					echo htmlspecialchars( $strec['name'] );
					echo "</option>\n";
				}
			?>
			</SELECT>
			◎<INPUT type=radio value=1 name=persona>
			●<INPUT type=radio value=1 name=key>
		</TD>
		<TD>
			<SELECT onchange="calc()" size=1 name=style2>
			<OPTION selected>−</OPTION>
			<?php
				foreach( $styleList as $strec ) {
					echo "<option>";
					echo htmlspecialchars( $strec['name'] );
					echo "</option>\n";
				}
			?>
			</SELECT>
			◎<INPUT type=radio value=2 name=persona>
			●<INPUT type=radio value=2 name=key>
		</TD>
		<TD>
			<SELECT onchange="calc()" size=1 name=style3>
			<OPTION selected>−</OPTION>
			<?php
				foreach( $styleList as $strec ) {
					echo "<option>";
					echo htmlspecialchars( $strec['name'] );
					echo "</option>\n";
				}
			?>
			</SELECT>
			◎<INPUT type=radio value=3 name=persona>
			●<INPUT type=radio value=3 name=key>
		</TD>
	</TR>
	<TR>
		<TH>POWERZ</TH>
		<TD colSpan=3>
			Reason<INPUT size=2 name=reason>/<INPUT size=2 name=reason_c>　
			Passion<INPUT size=2 name=passion>/<INPUT size=2 name=passion_c>　
			Life<INPUT size=2 name=life>/<INPUT size=2 name=life_c>　
			Mundane<INPUT size=2 name=mundane>/<INPUT size=2 name=mundane_c><br>
			　　　　CombatSpeed<input type=text size=4 name=combatspeed>
			<INPUT onclick=recalc_combatspeed() type=button value=ReCalc>
			　　ActionRank<input type=text size=4 name=actionrank>
		</TD>
	</TR>
	<TR>
		<TH>PROFILE</TH>
		<TD colSpan=4>
			PHOTO(url):<INPUT size=80 name=photo><BR>
			ID:<SELECT size=1 name=id><OPTION selected>-</OPTION><OPTION>X</OPTION><OPTION>C-</OPTION><OPTION>C</OPTION><OPTION>B-</OPTION><OPTION>B</OPTION><OPTION>C+</OPTION><OPTION>B+</OPTION><OPTION>A</OPTION><OPTION>A+</OPTION></SELECT>
			Aj:<INPUT size=2 name=aj>
			Jender:<SELECT size=1 name=jender><OPTION selected>−</OPTION><OPTION>♂</OPTION><OPTION>♀</OPTION><OPTION>？</OPTION></SELECT>
			Heit:<INPUT size=3 name=heit>cm
			Weit:<INPUT size=3 name=weit>kg
			Eyez:<INPUT size=3 name=eyez>
			Hair:<INPUT size=3 name=hair>
			Skin:<INPUT size=3 name=skin> 
			Birthday:<INPUT size=4 name=birthday>
			<TEXTAREA name=story rows=15 cols=80></TEXTAREA><TEXTAREA name=evolution rows=15 cols=40>▼能力値上昇
▼技能修得
▼常備化</TEXTAREA>
		</TD>
	</TR>
	<TR>
		<TH>EXP</TH>
		<TD colSpan=3>
			EXP:<INPUT size=3 value=0 name=exp>
		</TD>
	</TR>
	<TR>
		<TH>LIFEPASS</TH>
		<TD colSpan=3>
			<textarea name=lifepass rows=5 cols=80>出自（）：
経験（）：
邂逅（）：
</textarea>
		</TD>
	</TR>
	<TR>
		<TH>DATA<BR>１●−−−<BR>１−●−−<BR>１−−●−<BR>１−−−●<BR>２●●−−<BR>２●−●−<BR>２●−−●<BR>２−●●−<BR>２−●−●<BR>２−−●●<BR>３●●●−<BR>３●●−●<BR>３●−●●<BR>３−●●●<BR>４●●●●</TH>
		<TD>NomalSkillz　
			<INPUT onclick=n_skill_listup() type=button value=ListUp><BR>
			<TEXTAREA name=normalskill rows=50 cols=30>▼一般技能
１●−−− 医療
１●−−− 射撃★
１●−−− 知覚
１●−−− 電脳
０−−−− 製作:
１−●−− 心理★
１−●−− 自我★
１−●−− 交渉
０−−−− 芸術:
１−−●− 運動
１−−●− 回避★
０−−−− 操縦:★
１−−●− 白兵★
１−−−● 圧力★
１−−−● 信用★
１−−−● 隠密

▼社会
１−−−− 社会:Ｎ◎ＶＡ
１−−−− 社会:選択
１−−−− 社会:選択

▼コネ
１−−−− コネ:選択
</TEXTAREA>
		</TD>
		<TD>StyleSkillz　
			<INPUT onclick=s_skill_listup() type=button value=ListUp><BR>
			<TEXTAREA name=superskill rows=50 cols=45></TEXTAREA>
		</TD>
		<TD>Outfitz　
			<INPUT onclick=add_defequip() type=button value=DefaultEquip><BR>
			<TEXTAREA name=outfit rows=50 cols=40>▽武器

▽防具

▽サイバーウェア

▽トロン

▽ヴィークル

▽住居

▽その他

</TEXTAREA>
		</TD>
	</TR>
	<TR>
		<TH colSpan=5>
			パスワード:
			<INPUT type=password size=10 name=pass>
			<INPUT type=submit value=登録><br>
			<font color="red">※パスワードは必ず入力してください。</font>
		</TH>
	</TR>
	</TBODY>
</TABLE>
</FORM>
