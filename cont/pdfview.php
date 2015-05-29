<?php
include( $fpdfDir . "japanese.php" );

$pdfLayout = array(
	/* PDF�쥤������
		x,y		���֡��ѻ溸�夫���mmñ�̡�
		w,h		�ΰ襵�����ʲ����ġ�mmñ�̡�
		sz		�ե���ȥ������ʥݥ���ȿ���
		ln		��������mmñ�̡�
		style	B:��Ĵ��I:������å�
		align	L:���󤻡�R:���󤻡�C:���󥿥�󥰡�T:��󤻡�B:��󤻡�M:����
	*/
	'handle'   => array( 'x' =>  10.5, 'y' =>  10.5, 'w' => 131.0, 'h' =>  10.0, 'sz' => 13.0, 'ln' => 4.3, 'style' => "B", 'align' => "CM" ),
	'post'     => array( 'x' =>  10.5, 'y' =>  22.5, 'w' =>  81.0, 'h' =>   9.0, 'sz' =>  9.0, 'ln' => 3.3, 'style' => "",  'align' => "CM" ),
	'player'   => array( 'x' =>  93.5, 'y' =>  23.5, 'w' =>  48.0, 'h' =>   8.0, 'sz' => 10.0, 'ln' => 3.3, 'style' => "B", 'align' => "CM" ),
	'style'    => array( 'x' =>  10.5, 'y' =>  33.5, 'w' => 104.0, 'h' =>   9.0, 'sz' => 12.0, 'ln' => 3.5, 'style' => "B", 'align' => "CM" ),
	'ability'  => array( 'x' =>  10.5, 'y' =>  46.5, 'w' => 104.0, 'h' =>   7.0, 'sz' => 12.0, 'ln' => 3.5, 'style' => "B", 'align' => "CM" ),
	'cspeed'   => array( 'x' => 120.5, 'y' =>  35.5, 'w' =>  21.0, 'h' =>   7.0, 'sz' => 12.0, 'ln' => 3.5, 'style' => "",  'align' => "CM" ),
	'actrank'  => array( 'x' => 120.5, 'y' =>  46.5, 'w' =>  21.0, 'h' =>   7.0, 'sz' => 12.0, 'ln' => 3.5, 'style' => "",  'align' => "CM" ),
	'n_skill'  => array( 'x' =>  10.5, 'y' =>  55.5, 'w' =>  64.0, 'h' => 144.0, 'sz' =>  8.0, 'ln' => 3.1, 'style' => "",  'align' => "LT" ),
	's_skill'  => array( 'x' =>  76.5, 'y' =>  95.5, 'w' =>  65.0, 'h' => 104.0, 'sz' =>  8.0, 'ln' => 3.1, 'style' => "",  'align' => "LT" ),
	'equip'    => array( 'x' => 143.5, 'y' =>  14.5, 'w' =>  65.0, 'h' => 179.0, 'sz' =>  8.0, 'ln' => 3.1, 'style' => "",  'align' => "LT" ),
	'lifepass' => array( 'x' =>  76.5, 'y' =>  59.5, 'w' =>  65.0, 'h' =>  34.0, 'sz' =>  8.0, 'ln' => 3.1, 'style' => "",  'align' => "LT" ),
	'body'     => array( 'x' => 210.5, 'y' =>  10.5, 'w' =>  76.0, 'h' =>  23.0, 'sz' =>  9.0, 'ln' => 3.5, 'style' => "",  'align' => "LT" ),
	'profile'  => array( 'x' => 210.5, 'y' =>  39.5, 'w' =>  76.0, 'h' => 154.0, 'sz' =>  8.0, 'ln' => 3.1, 'style' => "",  'align' => "LT" ),

	'n_skill2' => array( 'x' =>  10.5, 'y' =>  10.5, 'w' =>  64.0, 'h' => 189.0, 'sz' =>  8.0, 'ln' => 3.1, 'style' => "",  'align' => "LT" ),
	's_skill2' => array( 'x' =>  76.5, 'y' =>  10.5, 'w' =>  65.0, 'h' => 189.0, 'sz' =>  8.0, 'ln' => 3.1, 'style' => "",  'align' => "LT" ),
	'equip2'   => array( 'x' => 143.5, 'y' =>  10.5, 'w' =>  65.0, 'h' => 182.0, 'sz' =>  8.0, 'ln' => 3.1, 'style' => "",  'align' => "LT" ),
	'profile2' => array( 'x' => 210.5, 'y' =>  10.5, 'w' =>  76.0, 'h' => 182.0, 'sz' =>  8.0, 'ln' => 3.1, 'style' => "",  'align' => "LT" ),

//	'' => array( 'x' =>   0.0, 'y' =>   0.0, 'w' =>   0.0, 'h' =>   0.0, 'sz' => 10.0, 'ln' => 3.5 ),
);

$pdfLabel = array(
	/* PDF��٥�ɽ��
		x,y		���֡��ѻ溸�夫���mmñ�̡�
		sz		�ե���ȥ������ʥݥ���ȿ���
		style	B:��Ĵ��I:������å�
		txt		ɽ���ƥ�����
	*/
	array( 'x' =>  93.5, 'y' =>  24.5, 'sz' =>  7.0, 'style' => "IB", 'txt' => "Player" ),
	array( 'x' =>  27.5, 'y' =>  47.0, 'sz' =>  7.0, 'style' => "B",  'txt' => "����" ),
	array( 'x' =>  49.5, 'y' =>  47.0, 'sz' =>  7.0, 'style' => "B",  'txt' => "����" ),
	array( 'x' =>  71.0, 'y' =>  47.0, 'sz' =>  7.0, 'style' => "B",  'txt' => "��̿" ),
	array( 'x' =>  91.5, 'y' =>  47.0, 'sz' =>  7.0, 'style' => "B",  'txt' => "����" ),
	array( 'x' => 116.5, 'y' =>  35.5, 'sz' =>  7.0, 'style' => "IB", 'txt' => "CombatSpeed" ),
	array( 'x' => 116.5, 'y' =>  46.5, 'sz' =>  7.0, 'style' => "IB", 'txt' => "ActionRank" ),
	array( 'x' =>  76.5, 'y' =>  58.0, 'sz' =>  9.0, 'style' => "IB", 'txt' => "Lifepass" ),
	array( 'x' => 143.5, 'y' =>  13.0, 'sz' =>  9.0, 'style' => "IB", 'txt' => "Equipment" ),
	array( 'x' => 210.5, 'y' =>  38.0, 'sz' =>  9.0, 'style' => "IB", 'txt' => "Profile" ),
	array( 'x' => 150.0, 'y' =>  197.0, 'sz' => 7.0, 'style' => "IB", 'txt' => "�֥ȡ����硼�Ρ��֣� THE AXLERATION�פ�" ),
	array( 'x' => 165.0, 'y' =>  199.5, 'sz' => 7.0, 'style' => "IB", 'txt' => "ͭ�²�ҥե����������ȡ����ߥ塼�����ȡ��ꥵ�����ڤ�ͭ�²�ҥ����ࡦ�ե�����ɤ�����ʪ�Ǥ���" ),
//	array( 'x' =>   0.0, 'y' =>   0.0, 'sz' => 10.0, 'style' => "IB", 'txt' => "" ),
);

$pdfFrame = array(
	array( 'type' => "rect", 'x' =>  10.0, 'y' =>  10.0, 'w' => 132.0, 'h' =>  11.0 ),		// �ϥ�ɥ�
	array( 'type' => "rect", 'x' =>  10.0, 'y' =>  22.0, 'w' =>  82.0, 'h' =>  10.0 ),		// �ݥ���
	array( 'type' => "rect", 'x' =>  93.0, 'y' =>  22.0, 'w' =>  49.0, 'h' =>  10.0 ),		// �ץ쥤�䡼
	array( 'type' => "rect", 'x' =>  10.0, 'y' =>  33.0, 'w' => 105.0, 'h' =>  10.0 ),		// ��������
	array( 'type' => "rect", 'x' =>  10.0, 'y' =>  44.0, 'w' => 105.0, 'h' =>  10.0 ),		// ǽ����/������
	array( 'type' => "rect", 'x' => 116.0, 'y' =>  33.0, 'w' =>  26.0, 'h' =>  10.0 ),		// CS
	array( 'type' => "rect", 'x' => 116.0, 'y' =>  44.0, 'w' =>  26.0, 'h' =>  10.0 ),		// AR
	array( 'type' => "rect", 'x' =>  76.0, 'y' =>  55.0, 'w' =>  66.0, 'h' =>  39.0 ),		// �饤�եѥ�
	array( 'type' => "rect", 'x' =>  10.0, 'y' =>  55.0, 'w' =>  65.0, 'h' => 145.0 ),		// ���̵�ǽ
	array( 'type' => "rect", 'x' =>  76.0, 'y' =>  95.0, 'w' =>  66.0, 'h' => 105.0 ),		// �������뵻ǽ
	array( 'type' => "rect", 'x' => 143.0, 'y' =>  10.0, 'w' =>  66.0, 'h' => 184.0 ),		// ����
	array( 'type' => "rect", 'x' => 210.0, 'y' =>  10.0, 'w' =>  77.0, 'h' =>  24.0 ),		// ������ħ
	array( 'type' => "rect", 'x' => 210.0, 'y' =>  35.0, 'w' =>  77.0, 'h' => 159.0 ),		// �ץ�ե�����/��Ĺ��Ͽ
//	array( 'type' => "rect", 'x' =>   0.0, 'y' =>   0.0, 'w' =>   0.0, 'h' =>   0.0 ),
//	array( 'type' => "line", 'x' =>   0.0, 'y' =>   0.0, 'dx' =>   0.0, 'dy' =>   0.0 ),
);

$pdfLabel2 = array(
	array( 'x' => 150.0, 'y' =>  197.0, 'sz' => 7.0, 'style' => "IB", 'txt' => "�֥ȡ����硼�Ρ��֣� THE AXLERATION�פ�" ),
	array( 'x' => 165.0, 'y' =>  199.5, 'sz' => 7.0, 'style' => "IB", 'txt' => "ͭ�²�ҥե����������ȡ����ߥ塼�����ȡ��ꥵ�����ڤ�ͭ�²�ҥ����ࡦ�ե�����ɤ�����ʪ�Ǥ���" ),
//	array( 'x' =>   0.0, 'y' =>   0.0, 'sz' => 10.0, 'style' => "IB", 'txt' => "" ),
);

$pdfFrame2 = array(
	array( 'type' => "rect", 'x' =>  10.0, 'y' =>  10.0, 'w' =>  65.0, 'h' => 190.0 ),		// ���̵�ǽ�ʣ��ڡ����ܡ�
	array( 'type' => "rect", 'x' =>  76.0, 'y' =>  10.0, 'w' =>  66.0, 'h' => 190.0 ),		// �������뵻ǽ�ʣ��ڡ����ܡ�
	array( 'type' => "rect", 'x' => 143.0, 'y' =>  10.0, 'w' =>  66.0, 'h' => 184.0 ),		// �����ʣ��ڡ����ܡ�
	array( 'type' => "rect", 'x' => 210.0, 'y' =>  10.0, 'w' =>  77.0, 'h' => 184.0 ),		// �ץ�ե�����/��Ĺ��Ͽ�ʣ��ڡ����ܡ�
//	array( 'type' => "rect", 'x' =>   0.0, 'y' =>   0.0, 'w' =>   0.0, 'h' =>   0.0 ),
//	array( 'type' => "line", 'x' =>   0.0, 'y' =>   0.0, 'dx' =>   0.0, 'dy' =>   0.0 ),
);

// ʸ�������ɤ��Ѵ�
function e2s( $txt )
{
	return mb_convert_encoding( $txt, "SJIS" );
}


function textsplit( $form )
{
	$txt = NULL;
	$s = 0;
	$l = strlen( $form );
	while( $s < $l ) {
		$p = strpos( $form, "\r\n", $s );
		if( $p !== FALSE ) {
			$txt[] = substr( $form, $s, $p - $s );
			$s += ($p - $s + 2);
		}
		else {
			$txt[] = substr( $form, $s, $l - $s );
			$s += $l;
		}
	}

	return $txt;
}


// �����˹�碌�ƥƥ����Ȥ���Խ�
/*
	ʸ����򡢻��ꤵ�줿�������ޤ��֤��褦�˺��������롣
	����˼��Ƥ���ʸ���󷲤η����֤���

	�ƤӽФ����ˡ����Ѥ���ե���Ȥ������ԤäƤ������ȡ�
*/
function textReLine( $pdf, $data, $width )
{
	if( is_array( $data ) == FALSE ) {
		$txt = $data;
		$data = textsplit( $txt );
	}

	$res = NULL;
	if( count( $data ) > 0 ) {
		foreach( $data as $line ) {

			if( $pdf->GetStringWidth( e2s( $line ) ) <= $width ) {
				$res[] = $line;
			}
			else {
				while( $line != "" ) {
					$len = mb_strlen( $line );
					for( $l = $len; $l > 0; $l-- ) {
						$c = mb_substr( $line, 0, $l );
						if( $pdf->GetStringWidth( e2s( $c ) ) <= $width ) {
							$res[] = $c;
							$line = mb_substr( $line, $l );
							break;
						}
					}
				}
			}
		}
	}

	return $res;
}


// �쥤�����Ȥ˱�ä��ƥ����Ȥ�����
function textWrite( $pdf, $id, $data )
{
	global $pdfLayout;

	if( isset( $pdfLayout[$id] ) ) {

		$layout = $pdfLayout[$id];

		$pdf->SetFont( "SJIS", $layout['style'], $layout['sz'] );

		$txts = textReline( $pdf, $data, $layout['w'] );
		if( $txts != NULL ) {

			if( strpos( $layout['align'], "T" ) !== FALSE ) {
				$top_y = 0.0;
			}
			else if( strpos( $layout['align'], "B" ) !== FALSE ) {
				$top_y = $layout['h'] - count( $txts ) * $layout['ln'];
				if( $top_y < 0.0 ) $top_y = 0.0;
			}
			else if( strpos( $layout['align'], "M" ) !== FALSE ) {
				$top_y = ($layout['h'] - count( $txts ) * $layout['ln']) / 2;
				if( $top_y < 0.0 ) $top_y = 0.0;
			}
			else {
				$top_y = 0.0;
			}

			if( strpos( $layout['align'], "L" ) !== FALSE ) {
				$tLay = "L";
			}
			else if( strpos( $layout['align'], "R" ) !== FALSE ) {
				$tLay = "R";
			}
			else if( strpos( $layout['align'], "C" ) !== FALSE ) {
				$tLay = "C";
			}
			else {
				$tLay = "L";
			}

			$cnt = 0;
			foreach( $txts as $line ) {
				switch( $tLay ) {
				case "L": $pos_x = 0.0; break;
				case "R": $pos_x = $layout['w'] - $pdf->GetStringWidth( e2s( $line ) ); break;
				case "C": $pos_x = ($layout['w'] - $pdf->GetStringWidth( e2s( $line ) )) / 2; break;
				}

				$pos_y = $cnt * $layout['ln'];

				if( ($pos_y + $layout['ln']) < $layout['h'] ) {
					$pdf->Text( $layout['x'] + $pos_x, $layout['y'] + $top_y + $pos_y + $layout['ln'], e2s( $line ) );
				}

				$cnt++;
			}
		}
	}
}


mb_internal_encoding( "EUC-JP" );

$pdf = new PDF_Japanese( "L", "mm", "A4" );
$pdf->AddSJISFont();

$pdf->Open();
$pdf->SetTitle( "NOVA CharacterDataBase" );
$pdf->SetSubject( "NOVA CharacterDataBase" );
$pdf->SetCreator( "NDB" );
$pdf->SetAutoPageBreak( false );
$pdf->AddPage();

$rec = $CONT_DATA;

// �ϥ�ɥ�
textWrite( $pdf, "handle", $rec['name'] );

// ���ȡ���°
textWrite( $pdf, "post", $rec['post'] );

// �ץ쥤�䡼̾
textWrite( $pdf, "player", $rec['player'] );

// ��������
textWrite( $pdf, "style", style2format( $rec['style1'],$rec['style2'],$rec['style3'],$rec['persona'],$rec['keyst'] ) );

// ǽ����/������
$out = "";
$out .= sprintf( "%2d / %2d",$rec['reason_ab'],$rec['reason_ct'] ) . "����";
$out .= sprintf( "%2d / %2d",$rec['passion_ab'],$rec['passion_ct'] ) . "����";
$out .= sprintf( "%2d / %2d",$rec['life_ab'],$rec['life_ct'] ) . "����";
$out .= sprintf( "%2d / %2d",$rec['mundane_ab'],$rec['mundane_ct'] );
textWrite( $pdf, "ability", $out );

// ����Хåȥ��ԡ���
$out = sprintf( "%d", $rec['combatspeed'] );
textWrite( $pdf, "cspeed", $out );

// �����������
$out = sprintf( "%d", $rec['actionrank'] );
textWrite( $pdf, "actrank", $out );

// ���̵�ǽ
$out = textsplit( $rec['pub_skill'] );
if( $out != NULL ) {
	if( count( $out ) > 0 ) {
		$layout = $pdfLayout['n_skill'];

		$pdf->SetFont( "SJIS", $layout['style'], $layout['sz'] );

		$txts = textReLine( $pdf, $out, $layout['w'] );
		if( $txts != NULL ) {
			if( count( $txts ) * $layout['ln'] > $layout['h'] ) {
				$after_nskill = NULL;
				for( $p = (int)($layout['h'] / $layout['ln']); $p < count( $txts ); $p++ ) $after_nskill[] = $txts[$p];
			}
		}

		textWrite( $pdf, "n_skill", $txts );
	}
}

// �������뵻ǽ
$out = textsplit( $rec['spc_skill'] );
if( $out != NULL ) {
	if( count( $out ) > 0 ) {
		$layout = $pdfLayout['s_skill'];

		$pdf->SetFont( "SJIS", $layout['style'], $layout['sz'] );

		$txts = textReLine( $pdf, $out, $layout['w'] );
		if( $txts != NULL ) {
			if( count( $txts ) * $layout['ln'] > $layout['h'] ) {
				$after_sskill = NULL;
				for( $p = (int)($layout['h'] / $layout['ln']); $p < count( $txts ); $p++ ) $after_sskill[] = $txts[$p];
			}
		}

		textWrite( $pdf, "s_skill", $txts );
	}
}

// ����
$out = textsplit( $rec['items'] );
if( $out != NULL ) {
	if( count( $out ) > 0 ) {
		$layout = $pdfLayout['equip'];

		$pdf->SetFont( "SJIS", $layout['style'], $layout['sz'] );

		$txts = textReLine( $pdf, $out, $layout['w'] );
		if( $txts != NULL ) {
			if( count( $txts ) * $layout['ln'] > $layout['h'] ) {
				$after_equip = NULL;
				for( $p = (int)($layout['h'] / $layout['ln']); $p < count( $txts ); $p++ ) $after_equip[] = $txts[$p];
			}
		}

		textWrite( $pdf, "equip", $txts );
	}
}

// �饤�եѥ�
$out = textsplit( $rec['lifepass'] );
textWrite( $pdf, "lifepass", $out );

// ������ħ
$out = NULL;
$out[] = "ID: " . $rec['citizen'] . "��Aj: " . $rec['age'] . "��Jender: " . $rec['jender'];
$out[] = "Heit: " . $rec['height'] . "cm��Weit: " . $rec['weight'];
$out[] = "Eyez: " . $rec['eyes'] . "��Hair: " . $rec['hair'] . "��Skin: " . $rec['skin'];
$out[] = "BirthDay: " . $rec['birthday'];
textWrite( $pdf, "body", $out );

// �ץ�ե����롢��Ĺ��Ͽ���и���
$out = textsplit( $rec['profile'] );
$out[] = "";
$out[] = "����и����� " . sprintf( "%d", $rec['exp'] );
$out[] = "";
$out[] = "Evolution";
$lines = split( "\n", $rec['comment'] );
foreach( $lines as $line ) $out[] = $line;
if( $out != NULL ) {
	if( count( $out ) > 0 ) {
		$layout = $pdfLayout['profile'];

		$pdf->SetFont( "SJIS", $layout['style'], $layout['sz'] );

		$txts = textReLine( $pdf, $out, $layout['w'] );
		if( count( $txts ) * $layout['ln'] > $layout['h'] ) {
			$after_profile = NULL;
			for( $p = (int)($layout['h'] / $layout['ln']); $p < count( $txts ); $p++ ) $after_profile[] = $txts[$p];
		}

		textWrite( $pdf, "profile", $txts );
	}
}


// ��٥�ɽ��
foreach( $pdfLabel as $elm ) {

	$pdf->SetFont( "SJIS", $elm['style'], $elm['sz'] );
	$pdf->Text( $elm['x'], $elm['y'], e2s( $elm['txt'] ) );
}

// ����
$pdf->SetLineWidth( 0.1 );
foreach( $pdfFrame as $elm ) {
	switch( $elm['type'] ) {
	case "rect":
		$pdf->Rect( $elm['x'], $elm['y'], $elm['w'], $elm['h'] );
		break;

	case "line":
		$pdf->Line( $elm['x'], $elm['y'], $elm['x'] + $elm['dx'], $elm['y'] + $elm['dy'] );
		break;
	}
}


// ���ڡ����ܰʹ�
while( $after_nskill != NULL
	|| $after_sskill != NULL
	|| $after_equip != NULL
	|| $after_profile != NULL ) {

	$pdf->AddPage();

	if( $after_nskill != NULL ) {

		textWrite( $pdf, "n_skill2", $after_nskill );

		$layout = $pdfLayout['n_skill2'];
		$tmp = $after_nskill;
		$after_nskill = NULL;
		for( $p = (int)($layout['h'] / $layout['ln']); $p < count( $txts ); $p++ ) $after_nskill[] = $tmp[$p];
	}

	if( $after_sskill != NULL ) {

		textWrite( $pdf, "s_skill2", $after_sskill );

		$layout = $pdfLayout['s_skill2'];
		$tmp = $after_sskill;
		$after_sskill = NULL;
		for( $p = (int)($layout['h'] / $layout['ln']); $p < count( $txts ); $p++ ) $after_sskill[] = $tmp[$p];
	}

	if( $after_equip != NULL ) {

		textWrite( $pdf, "equip2", $after_equip );

		$layout = $pdfLayout['equip2'];
		$tmp = $after_equip;
		$after_equip = NULL;
		for( $p = (int)($layout['h'] / $layout['ln']); $p < count( $txts ); $p++ ) $after_equip[] = $tmp[$p];
	}

	if( $after_profile != NULL ) {

		textWrite( $pdf, "profile2", $after_profile );

		$layout = $pdfLayout['profile2'];
		$tmp = $after_profile;
		$after_profile = NULL;
		for( $p = (int)($layout['h'] / $layout['ln']); $p < count( $txts ); $p++ ) $after_profile[] = $tmp[$p];
	}


	// ��٥�ɽ��
	foreach( $pdfLabel2 as $elm ) {

		$pdf->SetFont( "SJIS", $elm['style'], $elm['sz'] );
		$pdf->Text( $elm['x'], $elm['y'], e2s( $elm['txt'] ) );
	}


	// ����
	$pdf->SetLineWidth( 0.1 );
	foreach( $pdfFrame2 as $elm ) {
		switch( $elm['type'] ) {
		case "rect":
			$pdf->Rect( $elm['x'], $elm['y'], $elm['w'], $elm['h'] );
			break;

		case "line":
			$pdf->Line( $elm['x'], $elm['y'], $elm['x'] + $elm['dx'], $elm['y'] + $elm['dy'] );
			break;
		}
	}
}


$pdf->Output();
?>
