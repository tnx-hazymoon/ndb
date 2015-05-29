<?php

// 文字コードの変換
function e2u( $txt )
{
	return mb_convert_encoding( $txt, "UTF-8" );
}


$rec = $CONT_DATA;

mb_internal_encoding( "EUC-JP" );




?>
