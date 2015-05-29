				// ÍýÀ­  ´¶¾ð  À¸Ì¿  ³°³¦
powno = new Array( 0, 0, 0, 0, 0, 0, 0, 0 );
pow00 = new Array( 0, 3, 3, 5, 2, 4, 2, 4 );	// ¥«¥Ö¥­
pow01 = new Array( 3, 5, 2, 5, 1, 3, 1, 3 );	// ¥Ð¥µ¥é
pow02 = new Array( 3, 5, 1, 3, 1, 3, 2, 5 );	// ¥¿¥¿¥é
pow03 = new Array( 1, 4, 3, 5, 1, 2, 2, 5 );	// ¥ß¥¹¥È¥ì¥¹
pow04 = new Array( 2, 4, 1, 4, 3, 5, 1, 3 );	// ¥«¥Ö¥È
pow05 = new Array( 1, 3, 3, 5, 0, 3, 3, 5 );	// ¥«¥ê¥¹¥Þ
pow06 = new Array( 1, 3, 3, 5, 2, 5, 1, 3 );	// ¥Þ¥Í¥­¥ó
pow07 = new Array( 2, 5, 1, 3, 2, 4, 2, 4 );	// ¥«¥¼
pow08 = new Array( 2, 5, 2, 5, 1, 3, 2, 3 );	// ¥Õ¥§¥¤¥È
pow09 = new Array( 1, 3, 2, 5, 1, 3, 3, 5 );	// ¥¯¥í¥Þ¥¯
pow10 = new Array( 2, 5, 1, 3, 1, 3, 3, 5 );	// ¥¨¥°¥¼¥¯
pow11 = new Array( 2, 4, 0, 4, 3, 5, 2, 3 );	// ¥«¥¿¥Ê
pow12 = new Array( 3, 5, 0, 4, 3, 5, 1, 2 );	// ¥¯¥°¥Ä
pow13 = new Array( 3, 4, 0, 5, 2, 4, 2, 3 );	// ¥«¥²
pow14 = new Array( 2, 5, 2, 5, 3, 5, 0, 1 );	// ¥Á¥ã¥¯¥é
pow15 = new Array( 2, 4, 2, 4, 2, 4, 1, 4 );	// ¥ì¥Ã¥¬¡¼
pow16 = new Array( 2, 4, 0, 4, 2, 3, 3, 5 );	// ¥«¥Ö¥È¥ï¥ê
pow17 = new Array( 2, 5, 2, 5, 0, 1, 3, 5 );	// ¥Ï¥¤¥é¥ó¥À¡¼
pow18 = new Array( 3, 5, 3, 5, 0, 2, 1, 4 );	// ¥Þ¥ä¥«¥·
pow19 = new Array( 2, 5, 3, 5, 1, 3, 1, 3 );	// ¥È¡¼¥­¡¼
pow20 = new Array( 3, 5, 1, 3, 2, 5, 1, 3 );	// ¥¤¥Ì
pow21 = new Array( 3, 5, 2, 5, 0, 1, 2, 5 );	// ¥Ë¥å¡¼¥í
pow22 = new Array( 1, 3, 3, 5, 3, 5, 0, 3 );	// ¥Ò¥ë¥³
pow23 = new Array( 3, 5, 2, 4, 2, 4, 0, 3 );	// ¥¯¥í¥¬¥Í
pow24 = new Array( 3, 5, 0, 3, 1, 3, 3, 5 );	// ¥¢¥é¥·
pow25 = new Array( 2, 4, 3, 5, 2, 4, 0, 3 );	// ¥«¥²¥à¥·¥ã
pow26 = new Array( 0, 5, 1, 5, 3, 2, 3, 4 );	// ¥¢¥ä¥«¥·

s_skno = "¡á¥¹¥¿¥¤¥ë¶õÍó¡á";
s_sk00 = "¢§¥«¥Ö¥­\r¥³¥ß¥Ã¥¯¥Ò¡¼¥í¡¼\r¥·¥ã¥¦¥È\r¥·¥ã¥Ã¥Õ¥ë\rÄ©È¯\rÁáÊÑ¤ï¤ê\r¥Þ¥¨¥¹¥È¥í\r¥ß¥ê¥ª¥ó¥Ò¥Ã¥È\r¥é¥Ã¥­¡¼¥¹¥È¥é¥¤¥¯\r¢÷¥«¡¼¥¹\r¢÷É÷¤Î±½\r¢÷¥»¥«¥ó¥É¥Ç¥£¡¼¥ë\r¢÷Ç®¶¸\r¢÷¥Ï¡¼¥É¥é¥Ã¥¯\r¢÷BGM¥Á¥§¥ó¥¸\r¢¨¥¢¡¼¥È¥Ð¥È¥ë\r¢¨ÂçµÕÅ¾\r¢¨¥á¥Ã¥»¡¼¥¸\r\r±¿µ¤ÊÑ´¹\r¥«¡¼¥¹­¶\r¥¹¡¼¥Ñ¡¼¥¯¡¼¥ë\rÇ®¶¸­¶\r¥Ð¥ó¥É¥ï¥´¥ó\r¢÷¥ª¥ó¥¹¥Æ¡¼¥¸\r¢÷¥Õ¥§¥¤¥¿¥ë¥é¥Ã¥¯\r¢¨¥í¥Ã¥¯¥ó¥í¡¼¥ë\r\r¥¹¥Æ¡¼¥¸¥é¥¤¥È\rÄ©È¯­¶\r¥È¥Ã¥×¥¹¥¿¡¼\r¥Õ¥¡¥Ã¥·¥ç¥ó¥ê¡¼¥À¡¼\r¥×¥ê¥º¥à¥¹¥¿¡¼\r¢÷ÈÖ¶¸¤ï¤»\r¢÷¥ß¥é¥¯¥ë¥Ò¥Ã¥È\r¢¨Å·ÃÏ³«ïó\r\r±¿µ¤ÊÑ´¹­¶\r¥°¥í¡¼¥ê¡¼¥Ñ¥¹\r¾¡ÉéÉþ\rÂàÇÑ¤ÎÌ²¤ê\rÄ©È¯­·\r¢÷¥Õ¡¼¥ë\r¢÷¥á¥¤¥¯¥µ¥à¥Î¥¤¥º\r¢¨ÀÄÅ·¤ÎðÈðÎ\r";
s_sk01 = "¢§¥Ð¥µ¥é\r°ú¤­´ó¤»\r¶¯²½\r±Ô¿Ï\rÄÌ²á\r¾ãÊÉ\r¼£Ìþ\rÊÑ¿È\rÀÍÎÏ\r¢÷ÎÏ³Ø\r¢÷³ÈÂç\r¢÷ÊÑ²½\r¢÷Å¾°Ü\r¢÷²ÃÂ®\r¢÷±ß´Ä\r¢¨¼öÇË\r¢¨ÃæÏÂ\r¢¨ÁÉÀ¸\r¸µÎÏÉÕÍ¿\r¢÷¸µÎÏ:¸÷³Ø(Àµ)\r¢÷¸µÎÏ:¸÷³Ø(Éé)\r¢÷¸µÎÏ:ÅÅ¼§(Àµ)\r¢÷¸µÎÏ:ÅÅ¼§(Éé)\r¢÷¸µÎÏ:²Ð±ê(Àµ)\r¢÷¸µÎÏ:²Ð±ê(Éé)\r¢÷¸µÎÏ:¼ÀÉ÷(Àµ)\r¢÷¸µÎÏ:¼ÀÉ÷(Éé)\r¢÷¸µÎÏ:¿å±À(Àµ)\r¢÷¸µÎÏ:¿å±À(Éé)\r¢÷¸µÎÏ:ÂçÃÏ(Àµ)\r¢÷¸µÎÏ:ÂçÃÏ(Éé)\r¢÷¸µÎÏ:½ÅÎÏ\r¢÷¸µÎÏ:´ïÊª\r¢÷¸µÎÏ:À¸Êª\r¢÷¸µÎÏ:µõÌµ\r\r¶¯²½¸µÎÏ\r¹â°Ì¸µÎÏ\r¾ãÊÉ­¶\r¹´Â«\r´°Á´·ìÅý\r¢÷ÍýÎÏÉðÁõ\r¢÷³ÎÎ¨Áàºî\r¢¨Â¿½ÅÈ¯Æ°\r\r¶ñ¸½¼Ô\rÁýÉý¼Ô\r¸µÎÏÉðÁõ\rÊ´ºÕ\r¿³È½\r¢÷¸µÎÏ:»þ´Ö\r¢÷Ç°Æ°ÎÏ\r¢¨Ê¬²ò¾Ãµî\r\rÂçËâË¡»È¤¤\r¸µÁÇËâÃÆ\rÉä½Ñ\r¼öÊªºîÀ®\rÉ÷¿å\r¢÷½¤¸³¼Ô\r¢÷ÇË²õËâ½Ñ\r¢¨Êø²õ\r\r¸µÎÏ­¶:¸÷³Ø(Àµ)\r¸µÎÏ­¶:¸÷³Ø(Éé)\r¸µÎÏ­¶:ÅÅ¼§(Àµ)\r¸µÎÏ­¶:ÅÅ¼§(Éé)\r¸µÎÏ­¶:²Ð±ê(Àµ)\r¸µÎÏ­¶:²Ð±ê(Éé)\r¸µÎÏ­¶:¼ÀÉ÷(Àµ)\r¸µÎÏ­¶:¼ÀÉ÷(Éé)\r¸µÎÏ­¶:¿å±À(Àµ)\r¸µÎÏ­¶:¿å±À(Éé)\r¸µÎÏ­¶:ÂçÃÏ(Àµ)\r¸µÎÏ­¶:ÂçÃÏ(Éé)\r¸µÎÏ­¶:½ÅÎÏ\r¸µÎÏ­¶:´ïÊª\r¸µÎÏ­¶:À¸Êª\r¸µÎÏ­¶:µõÌµ\r¸µÎÏ­¶:»þ´Ö\r";
s_sk02 = "¢§¥¿¥¿¥é\r²þÂ¤\rµæ¶Ë´ÕÄê\r¥¹¡¼¥Ñ¡¼¥É¥¯¥¿¡¼\rÄ¶¥¹¥Ô¡¼¥Éºî¶È\rÆÃµö³ÍÆÀ\r¥Ñ¡¼¥½¥Ê¥ë¥Ð¥ê¥¢\rÈ¯¿®´ï\r¥ì¥×¥ê¥«\r¢÷²ÃÂ®ÁõÃÖ\r¢÷¥¢¥É¥Ð¥¤¥¹\r¢÷¶µ¼ø\r¢÷¼åÅÀ´ÇÇË\r¢÷ÇúÇË¹©ºî\r¢÷¥Þ¥­¥·¥Þ¥é¥¤¥º\r¢¨¥¿¥¤¥à¥Þ¥¸¥Ã¥¯\r¢¨¥Ö¥ì¡¼¥¯¥À¥¦¥ó\r¢¨¥Þ¥Ë¥Ô¥å¥ì¡¼¥·¥ç¥ó\r\r¥¢¥É¥Ð¥¤¥¹­¶\r²þÂ¤­¶\r²þÂ¤Éð´ï\r¥·¥ç¥Ã¥¯¥¢¥¿¥Ã¥¯\rÇúÇË¹©ºî­¶\r¢÷¶ÛµÞ¼ê½Ñ\r¢÷¥Ñ¡¼¥½¥Ê¥ë¥Ð¥ê¥¢­¶\r¢¨Ä¶¥Æ¥¯\r\r¥ª¡¼¥Ð¡¼¥Û¡¼¥ë\r¥«¥¹¥¿¥Þ¥¤¥º\r½ÐÎÏ¸þ¾å\r¥¹¡¼¥Ñ¡¼¥É¥¯¥¿¡¼­¶\r¥Ï¥¤¥Ü¥ë¥Æ¡¼¥¸\r¢÷¥Æ¥¯¥Î¥Þ¥ó¥µ¡¼\r¢÷Ëâ²þÂ¤\r¢¨¥á¥¤¥¸¥ó\r\r¥¢¥¸¥ã¥¹¥È\r¥ª¡¼¥Ð¡¼¥Û¡¼¥ë­¶\r´ñÀ×¤ÎÈ¯ÌÀ\r¥Þ¥­¥·¥Þ¥é¥¤¥º­¶\r¥á¥«¥Ë¥Ã¥¯\r¢÷ÀìÂ°µ»»Õ\r¢÷¥Ä¡¼¥ë¥¢¥·¥¹¥È\r¢¨¥¤¥ß¥Æ¥¤¥·¥ç¥ó\r";
s_sk03 = "¢§¥ß¥¹¥È¥ì¥¹\r±þ±ç\r¤ª¤·¤ª¤­\r´Î¤Ã¶Ì\r¶¦´¶\r¥³¥ó¥¿¥¯¥È\rÈù¾Ð¤Î¥Ù¡¼¥ë\r½÷¿À¤ÎÅô\r½÷¿À¤ÎÊúÍÊ\r¢÷µÈ¾ÍÅ·\r¢÷¸ÝÉñ\r¢÷¼«¸Êµ¾À·\r¢÷À¼±ç\r¢÷½â¤Î²µ½÷\r¢÷ÊìÀ­ËÜÇ½\r¢¨»Îµ¤¹âÍÈ\r¢¨¾¡Íø¤Î½÷¿À\r¢¨½÷¿À¤Î¸æ¼ê\r\rÇä¤ê¾å¤²\r²µ½÷¤Î¸ý¤Å¤±\rÀ¼±ç­¶\r½÷¿À¤Î»ü°¦\r°Â¤é¤®¤Î¾ì\r¢÷¥¸¥ã¥ó¥Ì¥À¥ë¥¯\r¢÷ÉÔÌÇ¤ÎÅô\r¢¨²µ½÷¤Î½ËÊ¡\r\r°¦¤ÎÊúÍÊ\r¥¨¡¼¥ë\r¿´¤Î¿Ä\rÎå¤Þ¤·¤Î²Î­¶\rÆü¤À¤Þ¤ê¤Î²Î\r¢÷Àï½÷¿À\r¢÷Îå¤Þ¤·¤Î²Î\r¢¨²«¶â¤ÎÀº¿À\r\rÀï½÷¿À­¶\r²µ½÷¤Î³åºÓ\rÀéµÒËüÍè\r½â¤Î²µ½÷­¶\r¥Ñ¥ï¡¼¥Ü¥¤¥¹­¶\r¢÷´õË¾¤Î²Ì¼Â\r¢÷¥Ñ¥ï¡¼¥Ü¥¤¥¹\r¢¨ÑëÆá¤Î»þ\r";
s_sk04 = "¢§¥«¥Ö¥È\r°ì¿´Æ±ÂÎ\r¶â¹ä\rÅ´ÊÉ\r¿Î²¦Î©¤Á\rÈ¬ÌÌÏ»ç¾\rÈ¿¼ÍËÉ¸æ\rÉÔÆ°\rÌµÅ¨ËÉ¸æ\r¢÷·â¤ÁÊÖ¤·\r¢÷¥«¥Ð¡¼¥ê¥ó¥°\r¢÷¼«Æ°ËÉ¸æ\r¢÷Àï½Ñ\r¢÷ÅÅ¸÷ÀÐ²Ð\r¢÷È¬½Å³À\r¢¨»â»Ò¿´\r¢¨¥É¥ì¥Ã¥É¥Î¡¼¥È\r¢¨¥Õ¥©¡¼¥ß¥À¥Ö¥ë\r\r¼é¸î¼Ô\rºÇ¸å¤ÎºÖ\r¸«¤¨¤¶¤ë½â\rÌµÅ¨ËÉ¸æ­¶\rÍ¦Ì¾\r¢÷¶â¹ä­¶\r¢÷½âÂÇ¤Á\r¢¨¹¶ËÉ°ìÂÎ\r\rÉÔ¶þ¤Ê¤ë¼Ô\r°µÎÏÉõº¿\rµ³»Î¤ÎÈ÷¤¨\r¥·¥§¥¤¥¯¥ª¥Õ\r¾ïºßÀï¾ì\r¢÷ºÇ¸å¤ÎºÖ­¶\r¢÷ÉÔÇË¤Î½â\r¢¨¥Õ¥é¥Ã¥·¥å¥¬¡¼¥É\r\r´í¸±´¶ÃÎ\r·øÏ´¤Ê¤ë½â\rÅ´ÊÉ­¶\r¥Ï¡¼¥É¥í¥Ã¥¯\rÈ¬½Å³À­¶\r¢÷¥Ö¥ì¥¤¥¯¥Ò¥Ã¥È\r¢÷¥Ý¥¹¥È¥Þ¥ó\r¢¨¥É¥ß¥Ê¥ó¥¹\r";
s_sk05 = "¢§¥«¥ê¥¹¥Þ\r±éÀâ\r´ó¿Ê\r¥µ¥Ö¥ê¥ß¥Ê¥ë\r¼ÀÉ÷¿×Íë\r¿ØÆ¬»Ø´ø\rÀ»Àï\rÌ¾À¼\rÍ¶Æ³¿ÒÌä\r¢÷ÀðÆ°\r¢÷¶¸¿®¼Ô\r¢÷¥²¥·¥å¥¿¥ë¥ÈÊø²õ\r¢÷¥µ¥¤¥³¥í¥¸¡¼\r¢÷¼¸Ó£·ãÎå\r¢÷½¸ÃÄºÅÌ²\r¢¨°Ò¸·\r¢¨ÀöÇ¾\r¢¨ÌÈºáÉä\r\rÀðÆ°­¶\rÀ»Àï­¶\r»þ¤Î¿Í\rÁþ¤·¤ß¤ÎÅª\r¿¨¤ì¤¨¤¶¤ë¼Ô\r¢÷¿Æ±ÒÂâ\r¢÷Ì¾¾­\r¢¨°ÒÉ÷Æ²¡¹\r\r¥¨¥ó¥«¥ì¥Ã¥¸\rµá¿´ÎÏ\rÀº¿À´ÕÄê\rÅ°Äì¹³ÊÛ\r¥Í¥´¥·¥¨¡¼¥È\r¢÷ÃÆ´Ý¤ÎÏÀ·â\r¢÷ÉÔÌÇ¤ÎÇ®¾ð\r¢¨¥À¥Ö¥ë¥Ð¥¤¥ó¥É\r\r²òÂÎ²°\rËÌÉ÷¤ÈÂÀÍÛ\r´ú°õ\rÉÔÌÇ¤ÎÇ®¾ð­¶\rÍÉ¤µ¿¶¤ê\r¢÷°µÇ÷¤Î¿ÒÌä\r¢÷¥Í¥¤¥­¥Ã¥É¥í¡¼¥É\r¢¨¿®Ç°ÇíÃ¥\r";
s_sk06 = "¢§¥Þ¥Í¥­¥ó\r°¦¤Î¸ò´¿\r°­Ëâ¤ÎÌ©¹ð\r°ì´ü°ì²ñ\rÂç·ù¤¤\rÆÇÀå\rÍ§Ã£¤ÎÎØ\r°ìÌÜ¹û¤ì\rÍ¶ÏÇ\r¢÷°­Ëâ¤Î¤µ¤µ¤ä¤­\r¢÷¥¢¥É¥ì¥Ê¥é¥¤¥º\r¢÷¤ª´ê¤¤\r¢÷ÇËÌÇ¤Î¤µ¤µ¤ä¤­\r¢÷¿Í»È¤¤\r¢÷Ëâ½÷¤Î¼ö¤¤\r¢¨¸ýÅú¤¨\r¢¨¥Æ¥£¥¢¥É¥í¥Ã¥×\r¢¨Ëâ½÷¤Î¶«¤Ó\r\rÀéºÜ°ì¶ø\r¥Ñ¥È¥í¥ó\r¤Ø¤é¤º¸ý\rËâ½÷¤Î»ØÀè\r¥Þ¥¹¥³¥Ã¥È\r¢÷Ëâ½÷¤Î°ì»É¤·\r¢÷¥é¥Ö¥ê¡¼¥³¡¼¥ë\r¢¨¥Ï¡¼¥È¥¹¥Æ¥£¡¼¥ë\r\r¥¢¥Ç¥£¥¯¥·¥ç¥ó\r±¿Ì¿¤Î¶Ê¤¬¤ê³Ñ\r²Ö³¡\r¥­¥ã¥Ã¥È¥·¡¼¥Õ\r¥¹¥Æ¡¼¥¸¥¬¡¼¥ë\r¢÷¥Ï¡¼¥È¥×¥ì¥¸¥ã¡¼\r¢÷¥Ý¥¤¥º¥ó¥¹¥Þ¥¤¥ë\r¢¨¥¢¥¯¥È¥ê¥¹\r\r°¦¤ÎÀô\r¥ª¡¼¥×¥ó¥É¥¢\r¥·¡¼¥¯¥ì¥Ã¥È¥¿¥¤¥à\r¥¹¥Þ¥¤¥ë¡õ¥¯¥é¥¤\r¥É¥ê¡¼¥à¥¿¥¤¥à\r¢÷¾Ð´é¤Ç¥«¥Ð¡¼\r¢÷¥Õ¥¡¥à¥Õ¥¡¥¿¥ë\r¢¨¥ª¡¼¥ë¥æ¡¼¥Ë¡¼¥É\r";
s_sk07 = "¢§¥«¥¼\r¶Ê·ÝÈô¹Ô¡¿Áö¹Ô\r¥¯¥¤¥Ã¥¯¥¤¥ä¡¼\rÂ¨ÀÊ½¤Íý\r¥Ð¡¼¥ó¥Ê¥¦¥È\r¥Ü¥ó¥É¥«¡¼\r¥é¥¤¥É¥ª¥ó\r¥é¥¤¥É¥Õ¥¡¥¤¥È\r¥í¥±¥Ã¥È¥¹¥¿¡¼¥È\r¢÷¥¨¥­¥µ¥¤¥È¥Ð¥È¥ë\r¢÷¥«¥Ð¡¼¡õ¥à¡¼¥Ö\r¢÷¥¹¡¼¥Ñ¡¼¥Á¥ã¡¼¥¸¥ã¡¼\r¢÷¥À¥¤¥ì¥¯¥È¥í¡¼¥ë\r¢÷¥Á¥ã¡¼¥¸\r¢÷¥é¥¤¥È¥¹¥Ô¡¼¥É\r¢¨¥«¥ß¥«¥¼\r¢¨¥¹¡¼¥Ñ¡¼¥½¥Ë¥Ã¥¯\r¢¨¥Þ¥ë¥Á¥¢¥¯¥·¥ç¥ó\r\r±É¸÷¤ÎÆ»\r¥¿¡¼¥ó¥ª¡¼¥Ð¡¼\r¥À¥¤¥ì¥¯¥È¥í¡¼¥ë­¶\r¥Ô¥Ã¥¯¥¢¥Ã¥×\r¥Ð¡¼¥ó¥Ê¥¦¥È­¶\r¢÷¥Ê¥¤¥È¥Û¡¼¥¹\r¢÷¥Õ¥§¥¤¥ó¥È¥¿¡¼¥ó\r¢¨¥·¥å¡¼¥Æ¥£¥ó¥°¥¹¥¿¡¼\r\r¼À¶î¼Ô\r¥¢¥¯¥í¥Ð¥Ã¥È\r¥ª¡¼¥Ð¡¼¥Æ¥¤¥¯\r¥¹¥ê¥Ã¥×¥¹¥È¥ê¡¼¥à\r¥¹¥í¡¼¥À¥¹¥È\r¢÷¥¨¥¢¥È¥ê¥Ã¥¯\r¢÷¥í¥±¥Ã¥È¥¹¥¿¡¼¥È­¶\r¢¨¥¢¥È¥â¥¹¥Õ¥£¡¼¥ë\r\r¾¡Íø¤ÎÉ÷\r¼ÀÉ÷¤ÎÇ¡¤¯\r¥Þ¥ë¥Á¥É¥é¥¤¥Ð¡¼\r¥é¥¤¥É¥Õ¥¡¥¤¥È­¶\r¥í¥±¥Ã¥È¥¹¥¿¡¼¥È­·\r¢÷¥µ¥¤¥ì¥ó¥È¥é¥ó\r¢÷¥Ç¥Ã¥É¥Á¥§¥¤¥µ¡¼\r¢¨¥´¡¼¥¹¥È¥é¥¤¥À¡¼\r";
s_sk08 = "¢§¥Õ¥§¥¤¥È\rÎ¢ÆÉ¤ß\r¥ª¥·¥í¥°¥é¥Õ\r·ÙÊó\r¸î¿È½Ñ\r»ö¾ðÄÌ\r¥·¥ã¡¼¥×¥¢¥¤\r¥·¥ã¡¼¥í¥Ã¥¯¥Û¡¼¥à¥º\r¥«¥á¥éµ­²±\r¢÷¿®Ç°¤Î½â\r¢÷¥µ¥¤¥³¥·¥ç¥Ã¥¯\r¢÷¥¹¥¿¥¤¥ë´¶ÃÎ\r¢÷¥Á¥§¥Ã¥¯¥á¥¤¥È\r¢÷¥Ï¡¼¥É¥Ü¥¤¥ë¥É\r¢÷¥í¥ó¥°¥Ï¥ó¥É\r¢¨³¥¿§¤ÎÇ¾ºÙË¦\r¢¨¥ß¥¹¥ê¡¼¥É\r¢¨¥â¥Î¥í¡¼¥°\r\rÃµÄå¤Î´ª\r¥Á¥§¥Ã¥¯¥á¥¤¥È­¶\r¥È¥ê¥Ã¥¯\r¥×¥í¥Õ¥¡¥¤¥ê¥ó¥°\r¥ï¥¤¥º¥¯¥é¥Ã¥¯\r¢÷Î¢ÉÕ¤±Ä´ºº\r¢÷¥Á¥§¥¤¥¹¥à¡¼¥Ö\r¢¨¥é¥¹¥È¥¢¥¯¥·¥ç¥ó\r\rÍ¦µ¤¤¢¤ë¼Ô\rµÞ½ê³°¤·\r¥¿¥Õ¥Í¥¹\rÃµÄå³Ð¸ç\r¥Û¡¼¥à¥¹¥È¥ê¡¼¥È\r¢÷¥¤¥ì¥®¥å¥é¡¼¥º\r¢÷³Ð¸ç¤ÎÅô\r¢¨¥¸¥ã¥¤¥¢¥ó¥È¥­¥ë\r\r³Ð¸ç¤ÎÅô­¶\rµÕ¶­¤ÎÅô\r¸¸ÏÇ¤ÎÁ®¤­\r¾ïÅå¶ç\r¥Ü¥®¡¼\r¢÷¥ª¡¼¥ë¥É¥¿¥¤¥×\r¢÷¿®Ç°¤Î·õ\r¢¨¾Ã¤¨¤Ê¤¤Åô\r";
s_sk09 = "¢§¥¯¥í¥Þ¥¯\r±£¤ì²È\r±Æ¤ÎËÅÎ¬\rµ¼»÷¹çË¡\r¿´µ¡°ìÅ¾\rº¬²ó¤·\rÇÉ¸¯Ä´ºº\r¿ÈÂå¤ï¤ê\r¥ß¥¹¥¿¡¼¥Ó¥Ã¥°\r¢÷¹õ¤¤±¢ËÅ\r¢÷Äë²¦¤Î¥ª¡¼¥é\r¢÷±Æ¤Î»ÙÇÛ¼Ô\r¢÷Å·ºÒ\r¢÷¥Ó¥Ã¥°¥ª¡¼¥À¡¼\r¢÷¥Ö¥é¥Ã¥¯¥Þ¡¼¥±¥Ã¥È\r¢¨Äß¤·¾å¤²\r¢¨Äë²¦¤ÎÎÏ\r¢¨Äë²¦¤ÎÄí\r\r±Æ¤ÎËÅÎ¬­¶\r¥ß¥¹¥¿¡¼¥Ó¥Ã¥°­¶\r¿ÎµÁ¤Ê¤­Àï¤¤\rÄë²¦¤Î°ÕÃÏ\rÄë²¦¤Îµ¤³µ\r¢÷»Ò»ô¤¤\r¢÷»ÙÇÛ¼Ô¤Î·ý\r¢¨Äë²¦¤Î»þ´Ö\r\r¹õ¤¤Óñ¤­\r¹õ¤­»ØÎá\r¹õËë¤Î²ç\rÄë²¦¤ÎÌÔÆÇ\rÈÔ²ó¤Î¥Á¥ã¥ó¥¹\r\rÂåÍý¿Í\r°ì¹ñ°ì¾ë\r¸¢ËÅ½Ñ¿ô\r»üÁ±»ö¶È\r¥ì¥Ã¥É¥«¡¼¥Ú¥Ã¥È\r¢÷°­ÆÁ¤Î¶â²ß\r¢÷ÌÔÆÇ¤Î¶â²ß\r¢¨½è·º¥ê¥¹¥È\r\rÎ¢Ä¢Êí\r¤ªÂç¿Ô\r¹õ¤¤Óñ¤­­¶\rÄ´Ää¼Ô\r°Ç¤«¤é¤ÎÀ¼\r¢÷¤¦¤´¤á¤¯±Æ\r¢÷°Å°Ç¤Î±²\r¢¨¿¿¤Î±¦ÏÓ\r\rÀäÂÐ¤ÎÃéÀ¿[Ê¢¿´ÀìÍÑ]\rÊ¢¿´¤Î½â[Ê¢¿´ÀìÍÑ]\r";
s_sk10 = "¢§¥¨¥°¥¼¥¯\r±¿Ì¿¤ÎÎØ\rµ¡Ì©¾ðÊó\r¥³¥ì¥¯¥Æ¥£¥Ö\r»º¶È¥¹¥Ñ¥¤\r¾ðÊóÁàºî\r¥Û¥Ã¥È¥é¥¤¥ó\r¥é¥¤¥È¥¹¥¿¥Ã¥Õ\r¥ì¥¤¥ª¥Õ\r¢÷´ë¶È¤Î°ì·â\r¢÷»Ù±çÍ×ÀÁ\r¢÷»îºîÉÊ\r¢÷¥Ç¥¹¥Þ¡¼¥Á\r¢÷¥Þ¥Í¡¼¥Ñ¥ï¡¼\r¢÷Í½»»³ÍÆÀ\r¢¨¥¢¥¿¥Ã¥Á¥á¥ó¥È\r¢¨¥Ñ¥ï¡¼¥²¡¼¥à\r¢¨¥×¥ì¥³¡¼¥·¥ç¥ó\r\r±¿Ì¿¤ÎÎØ­¶\rÀï½ÑÍ½Êó\r¥Ç¥¹¥Þ¡¼¥Á­¶\r¥Ö¥é¥Ã¥¯¥³¡¼¥Ý­¶\r¥Û¥Ã¥È¥é¥¤¥ó­¶\r¢÷Ä¾Â°Éô½ð\r¢÷¥Ö¥é¥Ã¥¯¥³¡¼¥Ý\r¢¨¥é¥¹¥È¥ª¡¼¥À¡¼\r\rÀìÌçÉô½ð\r¥°¥ë¡¼¥×¥µ¥Ý¡¼¥È\rºÆ¾¤½¸\rÁ÷·Þ¼Ö\rÄÉ²ÃÍ½»»\r¢÷¥°¥ë¡¼¥×¥µ¥Ý¡¼¥È­¶\r¢÷Èó¹çË¡¥»¥¯¥·¥ç¥ó\r¢¨¥×¥ì¥¸¥Ç¥ó¥È\r\r»îºîÉÊ­¶\r»ñËÜÅê²¼\r¾ðÊó²òÀÏÈÉ\r¥¹¥Ô¡¼¥É¥·¥å¡¼¥¿¡¼\r¥×¥ì¥¼¥ó¥Æ¡¼¥·¥ç¥ó\r¢÷´ë¶È¤ÎÌÖ\r¢÷¥Ó¥Ã¥°¥×¥í¥¸¥§¥¯¥È\r¢¨¥»¥«¥ó¥É¥×¥é¥ó\r";
s_sk11 = "¢§¥«¥¿¥Ê\rµï¹ç¤¤\rµ´¤ÎÄÞ\r¥«¥Þ¥¤¥¿¥Á\r¥Ï¥ä¥Ö¥µ\r¸«ÀÚ¤ê\rÌµÉ÷·õ\rÌµÌÀ·õ\r¥ê¥Õ¥ì¥¯¥·¥ç¥ó\r¢÷½¤Íå\r¢÷ÆóÅáÎ®\r¢÷»ÂºÛ·õ\r¢÷ÀûÉ÷·â\r¢÷Ê´ºÕ·õ\r¢÷ÊöÂÇ¤Á\r¢¨±Æ»¦·õ\r¢¨ÆÍ¤­ÊÖ¤·\r¢¨ÆóÅ·°ìÎ®\r\rµï¹ç¤¤­¶\r¹ë·æ\r¹äÎÏ\r¥Ç¥¹¥Ú¥é¡¼¥É\rÆóÅáÎ®­¶\r¢÷°­íå\r¢÷¥Ï¥ä¥Ö¥µ­¶\r¢¨·ìÀï\r\r·õµ´\r°í¤ÎÂÀÅá\rÍîÍÕÀÚ¤ê\r·õ°µ\rÇ¼Åá½Ñ\r¢÷µ´¿À·õ\r¢÷½Ö¤­¤Î·õ\r¢¨²îÏµ·õ\r\r°¦Åá\r»°ÅáÎ®\r»à¤Î´ã¸÷\rÇËºÕ·õ\r¥Ï¥ä¥Ö¥µ­·\r¢÷ÀÚ¤êÊ§¤¤\r¢÷ÆùÇö\r¢¨¼ÀÉ÷·õ\r";
s_sk12 = "¢§¥¯¥°¥Ä\rÎ¢Í½»»\r´ë¶È¾ðÊó\r·ÐÎòÀö¾ô\r»Å¹þÉð´ï\r¼Â¸³ÂÎ\r¼ÒÈÎ¹ØÆþ\rÃéÀ¿\r¥Þ¥ë¥Á¥ï¡¼¥¯\r¢÷±Ä¶È\r¢÷¶¯²½¼ê½Ñ\r¢÷»ÎÆ»\r¢÷À½ÉÊÃÎ¼±\r¢÷ÍÕ±£\r¢÷¥Ð¥ó¥¶¥¤\r¢¨¸¥¿È\r¢¨¥×¥ì¥Ã¥·¥ã¡¼\r¢¨¥ê¥¶¥ì¥¯¥·¥ç¥ó\r\r±Ä¶È­¶\r¼Â¸³ÂÎ­¶\rÀ½ÉÊÃÎ¼±­¶\r¥Ñ¥Ú¥Ã¥È\r¥á¥¬¥³¡¼¥Ý\r¢÷Æù¾ä\r¢÷¥á¥¤¥Ç¥¤\r¢¨À®¶ð\r\rÃéµÁ¼Ô\r²á¾êÎåµ¯\r»ÙµëÉÊ\r¥»¥­¥å¥ê¥Æ¥£¥Ö¥ì¥¤¥¯\r¥ê¥Ú¥¢¥Ü¥Ç¥£\r¢÷¥Ð¥ë¥¯¥Õ¥£¥¹¥È\r¢÷¾åµéÆÃ¸¢\r¢¨¶ÈÊª\r\r´ØÏ¢´ë¶È\r¸£À©¼Í·â\r¹âÀ­Ç½Éð´ï\rÃéµÁ¤Îº²\rÆÃ¼ì¸¢¸Â\r¢÷¥»¥ë¥Õ¥µ¥¯¥ê¥Õ¥¡¥¤¥¹\r¢÷ÌÇ»äÊô¸ø\r¢¨¥Ò¥å¡¼¥Þ¥ó¥®¥¢\r";
s_sk13 = "¢§¥«¥²\r°Å´ï\r±Æ²½\r²â»Â¤ê\r¸ÕÄ³\r±îÈô\rÈô¿Ï\r¥Ù¥¤¥ë¥¢¥¦¥È\rÌµÌÌÌÜ\r¢÷¶õÀæ\r¢÷´°Á´´ñ½±\r¢÷»àÅÀ·â¤Á\r¢÷ÃÏÁö¤ê\r¢÷ÆÇ½Ñ\r¢÷¥Õ¥§¥¤¥¯\r¢¨ÍÛ±ê\r¢¨Ê¬¿È\r¢¨Íð¤ì·â¤Á\r\rÄ¦Áü\rÆÇÂÇ¤Á\rÈô¿Ï­¶\rÊÑ°ÛÈ´Åá\rÌô»ÕÁö¤ê\r¢÷±ÆÇû¤ê\r¢÷±ÆË¥¤¤\r¢¨±Æ¼ê\r\r²ü¤á¤Îº¿\r»¦¤·¤ÎÈþµ»\rÇ¦½Ñ\rÉ¬»¦Àäµ»\rÌô»ÕÁö¤ê­¶\r¢÷Ì¸±£¤ì\r¢÷»à¤ÎÄ¹¤­¼ê\r¢¨Û°·î\r\r°Å´ï­¶\r±Æ¸ì¤ê\rÄáÍã¤ÎÉñ\rÌ¸±£¤ì­¶\rÅðÉÊ\r¢÷¥¹¥±¥ë¥È¥ó¥­¡¼\r¢÷ÌÜâÁ¤Þ¤·\r¢¨¿å¶À\r";
s_sk14 = "¢§¥Á¥ã¥¯¥é\r·Ú¸ù\r½ÌÃÏ\r¼êÅá\r¿´´ã\rÅ´¿È\r±óÅö\r¿Ï¾è¤ê\rÎýµ¤\r¢÷´¥º¥°ìÚ³\r¢÷¸ùÉ×\r¢÷¼þÅ·¸ù\r¢÷Å´·ý\r¢÷Å°¤·\r¢÷¥Ü¥Ç¥£¥¦¥©¡¼¥ë\r¢¨ÅÀ·ê\r¢¨È¬·µ\r¢¨Å»µ¤\r\r·ýË¡\r¹Åµ¤¸ù\r¿ÌµÓ\rÉÔ¶þ¤ÎÆ®»Ö\rÉðÌ¾\r¢÷¸ÆµÛ\r¢÷Íðµ¤\r¢¨¹çµ¤\r\r·èÆ®¼Ô\rµ¤±êËü¾æ\rÊø¤·µ»\r·ýË¡­¶\r¼êÅá­¶\rÀ¸Ì¿¤ÎÀô\rÅ´¿È­¶\r¹Ý¤Î¿´\r¹Ý¤ÎÆùÂÎ\rÇúÂ®\rÎýµ¤­¶\r¢÷²ç¤ÎÌç\r¢÷»ØÃÆ\r¢÷¿´µ»°ìÂÎ\r¢÷¿Ì»³¾×\r¢÷ÍëÅÅ\r¢¨Àä°ìÌç\r\r¥µ¥¤¥Ð¡¼¥¢¥Ç¥×¥È\rÅ´¤Î¶ÚÆù\r¥Ñ¥ë¥¯¡¼¥ë\r¸Å¤¤½ýÀ×\rÎõ²Ð¤ÎÇ¡¤¯\r¢÷´ä¤Î·ý\r¢÷µ¤±ê·ý\r¢¨²«Î¶\r";
s_sk15 = "¢§¥ì¥Ã¥¬¡¼\r°Ò°µ\r¥¤¥«¥µ¥Þ\rÎ¢¥ë¡¼¥È\r±£¤·Éð´ï\r¿ÎµÁ\rÅ´Ë¤¶Ì\r¼êºÊ»È¤¤\rÇ¤¶¢Æ»\r¢÷ÄÉ¤¤ÂÇ¤Á\r¢÷ÄÉ¤¤¹þ¤ß\r¢÷ÂØ¤¨¶Ì\r¢÷µÞ½ê¹¶·â\r¢÷¶§¿Ï\r¢÷¥Ö¥é¥Õ\r¢¨¥¬¥óÉÕ¤±\r¢¨¸ýÉõ¤¸\r¢¨¼Î¤Æ¿È\r\r¥¤¥«¥µ¥Þ­¶\r¥«¥â¥Í¥®\rµõ¸À\r¥À¡¼¥Æ¥£¥Õ¥¡¥¤¥È\r¥Ö¥é¥Ã¥¯¥á¥¤¥ë\r¢÷ÇÉ¸¯°ÍÍê\r¢÷ÂÞÃ¡¤­\r¢¨¥¨¥ó¥³\r\rÉü½²¼Ô\r°­¤Î²ÖÆ»\r¥Õ¥¡¥¤¥Ö¥«¡¼¥É\r°Ç»Ô\rÍÑ¿´ËÀ\r¢÷¥·¥Î¥®\r¢÷ÅÙ¶»»î¤·\r¢¨°­Ëâ¤Î·ÀÌó\r\r°­¸ý»¨¸À\r¥µ¥¤¥É¥Ó¥¸¥Í¥¹\r¤Ö¤Ã¤³È´¤­\r¤Ö¤Ã¤³È´¤­­¶\r¤ß¤«¤¸¤á\r¢÷¥«¥¦¥ó¥¿¡¼\r¢÷¥Ï¥¤¥¨¥Ê\r¢¨±åÇ°ÊÖ¤·\r";
s_sk16 = "¢§¥«¥Ö¥È¥ï¥ê\r¥¨¥¤¥ß¥ó¥°\r¥¯¥¤¥Ã¥¯¥É¥í¡¼\r¥¬¥ó¥Õ¡¼\r¥·¥ã¡¼¥×¥·¥å¡¼¥¿¡¼\r´Ó¤­¤ÎÌð\rÄ·ÃÆ\rÇØÌÌ·â¤Á\r¥Õ¥¡¥Ë¥ó¥°\r¢÷¥¤¥ó¥¿¡¼¥»¥×¥È\r¢÷À©°µ¼Í·â\r¢÷¹õ±©¤ÎÌð\r¢÷²Ö¿áÀã\r¢÷¥Ñ¥ê¥ó¥°¥·¥ç¥Ã¥È\r¢÷É¬»¦¤ÎÌð\r¢¨Áµ½Æ\r¢¨¥Ô¥ó¥Ý¥¤¥ó¥È\r¢¨Î®À±±«\r\rÊÒ¼ê¼Í·â\r¥¬¥ó¥Õ¡¼­¶\r¹õ±©¤ÎÌð­¶\r¥¯¥¤¥Ã¥¯¥É¥í¡¼­¶\r¥Ò¥Ã¥È¥Þ¥ó\r¢÷¥Ð¥Ã¥¯¥¢¥Ã¥×¥·¥ç¥Ã¥È\r¢÷ÁÀ·â»ÑÀª\r¢¨¼«Æ°È¿·â\r\r¥­¥ë¥¾¡¼¥ó\r¥»¥­¥å¥¢¥·¥ç¥Ã¥È\r¥¾¡¼¥ó¥Õ¥¡¥¤¥¢\r¥Ë¥å¡¼¥í¥ê¥ó¥¯\r¥Õ¥é¥Ã¥·¥å¥ê¥í¡¼¥É\r¢÷Íë¤ÎÌð\r¢÷¥Ö¥ë¥º¥¢¥¤\r¢¨Ã×Ì¿¤ÎËâÃÆ\r\r¥¬¥ó¥Õ¡¼¥Ö¥ì¥¤¥É\r¥­¥ë¥¾¡¼¥ó­¶\r¥¹¥ê¥ó¥°¡õ¥¹¥Æ¥Ã¥×\r¥¿¥°¥í¥Ã¥¯\r¥Î¡¼¥È¥ê¥¢¥¹\r¢÷¥¢¥µ¥ë¥È¥à¡¼¥Ö\r¢÷¥·¥ç¥Ã¥¯¥·¥å¡¼¥È\r¢¨¥À¥Ö¥ë¥·¥ç¥Ã¥È\r";
s_sk17 = "¢§¥Ï¥¤¥é¥ó¥À¡¼\r¥¢¥Æ¥ó¥·¥ç¥ó\r¥¤¥Î¥»¥ó¥È\r±£¤ì¥Ð¥Ç¥£\r±Æ¤Î¼é¤ê¼ê\r¸å¸÷\r¥Ç¥¸¥ã¥ô¥å\rÅ·¤Î²¸Ãþ\r¥Û¥í¥°¥é¥à\r¢÷Â­Ä¹¤ª¤¸¤µ¤ó\r¢÷»¦Ù¤¤ÎÅ·»È\r¢÷¼é¸îÅ·»È\r¢÷¿ÈÂÎµ­²±\r¢÷Å·¤ÎÄ´Î§\r¢÷Æ³¤­¤Î±©\r¢¨µßºÑ¤ÎÅ·»È\r¢¨Å·¾å¿Í\r¢¨Éõ°õµ­²±\r\rµ°Æ»¥»¥ó¥¹\rµßºÑ¤ÎÅ·»È­¶\r¼é¸îÅ·»È­¶\rÅ·¤Î°ÒÉ÷\rÅ·»È¤Î±©º¬\r¢÷±Æ¤Î¼é¤ê¼ê­¶\r¢÷Ææ¤Î¥×¥ì¥¼¥ó¥È\r¢¨¥ä¥³¥Ö¤Î³¬ÃÊ\r\r±£¤µ¤ì¤¿»¦°Õ\rµ°Æ»Ê¼´ï\r¥¹¥ê¡¼¥Ô¥ó¥°¥´¡¼¥¹¥È\rÅ·»È¤Î¥ô¥§¡¼¥ë\r¥Þ¥¤¥ó¥É¥í¥Ã¥¯\r¢÷Å·¤ÎÄ»äÆ\r¢÷¥È¥é¥ó¥¹\r¢¨±ø¤ì¤Ê¤­¼Ô\r\r¶õ¤í¤Ê¤ëÃæ¿´­¶\rµ°Æ»ÃÎ¼±\r¥¹¥¦¥£¥Õ¥È¥ê¥ê¡¼¥¹\rÆ©ÌÀ¤Ê°­°Õ\r¥È¥é¥ó¥¹­¶\r¢÷¶õ¤í¤Ê¤ëÃæ¿´\r¢÷µ°Æ»Ê¼´ï­¶\r¢¨Å·¤ÎÅÜ¤ê\r";
s_sk18 = "¢§¥Þ¥ä¥«¥·\r±£¿´\r¿ÀÂ÷\rÎîÌþ\rÎîºº\r¶²ÉÝ\rÄ´ÏÂ\rÅÁ¿´\r·ë±ï\r¢÷¸¸³Ð\r¢÷Éõ°õ\r¢÷¾ÃÄÀ\r¢÷¼öÇû\r¢÷Àº¿ÀÇËºÕ\r¢÷Àº¿ÀÈß¸î\r¢¨Øá°Í\r¢¨µ·¼°Ëâ½Ñ\r¢¨¾Ãµî\r\r±£¿´­¶\rÆ°ÍÉ\rÀêÀ±½Ñ\rÀº¿ÀÇúÇË\rÌÂµÜ\r¢÷Ê¬¿´\r¢÷ÅÁÌ¿\r¢¨Â¿½Å¿´\r\r½Þ¶µ¼Ô\rÀ±Êâ\rÀÅ²»\r¼öëÇ\r²áµî»ë\r¢÷»×°Ô·õ\r¢÷Ì¤ÍèÍ½ÃÎ\r¢¨¹âÂ®ºÅÌ²\r\r¿´Ìæ\r¿´ÍýÌÂºÌ\rÄ´ÏÂ­¶\rÌ¤ÍèÍ½ÃÎ­¶\r¿çËâ\r¢÷Ç®¾ð\r¢÷¹âÂ®´¶±þ\r¢¨µ­²±±£¤·\r\rÊ¬¿´¸ÇÄê[¥¨¥Ë¥°¥ÞÀìÍÑ]\rÎî³»[¥¨¥Ë¥°¥ÞÀìÍÑ]\rÎî½â[¥¨¥Ë¥°¥ÞÀìÍÑ]\rÎîÃÆ[¥¨¥Ë¥°¥ÞÀìÍÑ]\rÎî¿Ï[¥¨¥Ë¥°¥ÞÀìÍÑ]\r¢÷ÎîÊÉ[¥¨¥Ë¥°¥ÞÀìÍÑ]\r¢÷Îî·â[¥¨¥Ë¥°¥ÞÀìÍÑ]\r¢¨¹çµ»[¥¨¥Ë¥°¥ÞÀìÍÑ]\r";
s_sk19 = "¢§¥È¡¼¥­¡¼\r¥¤¥ó¥¿¥Ó¥å¡¼\r·èÄêÅª½Ö´Ö\rÀè¸«¤ÎÌÀ\rÆ¿Ì¾ÊóÆ»\r¥Ë¥å¡¼¥¹¥½¡¼¥¹\r¥Ð¥Ã¥¯¥¹¥Æ¡¼¥¸¥Ñ¥¹\rÁá¸ý\r¥Õ¥©¥È¥¸¥§¥Ë¥Ã¥¯\r¢÷ÊÉ¤Ë¼ª¤¢¤ê\r¢÷¶ÛµÞÆÃÈÖ\r¢÷¥·¥ã¥Ã¥¿¡¼¥Á¥ã¥ó¥¹\r¢÷¥¹¥¯¡¼¥×\r¢÷¥Ñ¥Ñ¥é¥Ã¥Á\r¢÷¥Õ¥é¥Ã¥·¥å¥Õ¥é¥Ã¥·¥å\r¢¨¥·¥ç¥¦¥¢¥Ã¥×\r¢¨À¸´Ô\r¢¨¥À¥¤¥à¥Î¥ô¥§¥ë\r\r¥«¥á¥é¥®¥ã¥ó¥°\r¶ÛµÞÆÃÈÖ­¶\r¥·¥ã¥Ã¥¿¡¼¥Á¥ã¥ó¥¹­¶\rÆÍ·â¼èºà\rÌ¾²òÀâ\r¢÷¤¹¤êÈ´¤±\r¢÷ÊóÆ»µ¬À©\r¢¨¼èºà¤Îµ´\r\rµ­Ï¿¼Ô\r¥¢¥É¥Ð¥¿¥¤¥º\r³¤Â±ÊüÁ÷\r¥´¥ê²¡¤·\rÊÐ¸þÊóÆ»\r¢÷¥­¥å¡¼¥µ¥¤¥ó\r¢÷¥ï¥¤¥É¥¹¥Æ¡¼¥¸\r¢¨¥¹¥Ý¥Ã¥È¥é¥¤¥È\r\r¥®¥ç¡¼¥«¥¤¥¹¥é¥ó¥°\r¥¿¥¤¥à¥é¥¤¥ó\rÆÍ·â¥Á¥ã¥ì¥ó¥¸\rÌ¾²òÀâ­¶\rÌ¾Êª¥ê¥Ý¡¼¥¿¡¼\r¢÷¥Ò¡¼¥í¡¼¥¿¥¤¥à\r¢÷¥Õ¥ì¡¼¥à¥¢¥¦¥È\r¢¨¥Ç¥£¥ì¥¯¥¿¡¼\r";
s_sk20 = "¢§¥¤¥Ì\r¶ÛµÞ²óÈò\r·ÈÂÓµö²Ä\r»äÉþ·Ù´±\r»ØÌ¾¼êÇÛ\rÂ¨±þÂÖÀª\rÄÃ°µ\r¥Ð¥Ã¥Â\rÊáÇû½Ñ\r¢÷¹´Â«½Ñ\r¢÷½¸ÃÄÂàÈò\r¢÷¾ðÊó²°\r¢÷Äù¤á¾å¤²\r¢÷ÆÍÆþÂÖÀª\r¢÷¥Õ¥ê¡¼¥º\r¢¨¶¯¹ÔÆÍÇË\r¢¨¥­¡¼¥×¥ª¥Õ\r¢¨ºÇ¸å¤Î¿³È½\r\r¶¯½±Êñ°Ï\r¶¯À©¼¹¹Ô\r¥µ¥¤¥ì¥ó\rÀ¸Â¸ÓÌ³Ð\rÎÄ¸¤¤Î²ç\r¢÷Áý±ç\r¢÷¥Ï¥ó¥¿¡¼\r¢¨ÉÔ»à¤ÎÎÄ¸¤\r\rËÉ±Ò¼Ô\r°¦ÍÑ¤ÎÉð´ï\rÂçÎ©¤Á²ó¤ê\rÀ©°µ¤Î°ì·â\r¥Ï¥ó¥¿¡¼­¶\r¢÷¥Ç¥¸¥¿¥ë¥±¥¤¥¸\r¢÷¥Þ¥¤¥Æ¥£¥É¥Ã¥°\r¢¨¥×¥í¥Æ¥¯¥¿¡¼\r\r±ø¿¦·Ù´±\r¶¨ÎÏÍ×ÀÁ\r¶ÛµÞ²óÈò­¶\r¹ßÉú´«¹ð\rÀµµÁ¤ÎÈÖ¿Í\r¢÷Ë¡¤ÎÈÖ¿Í\r¢÷ÎÄ¸¤¤ÎÜ¸\r¢¨¥À¥¤¥Ï¡¼¥É\r";
s_sk21 = "¢§¥Ë¥å¡¼¥í\r¥ô¥£¥¸¥ç¥Ê¥ê¡¼\rNG¥ï¡¼¥É\r¼«Æ°ËÉÊÉ\r¥¹¥È¥ê¡¼¥à¥Þ¥Ã¥×\rSPAM\r01¥Õ¥£¡¼¥ê¥ó¥°\r¥É¥ß¥Í¡¼¥È\rËÉÊÉ¹½ÃÛ\r¢÷¥µ¥Ý¡¼¥È\r¢÷¥¿¡¼¥Ü¥Ö¡¼¥¹¥È\r¢÷¥Ä¥§¥Î¥ó¤ÎµÕÍý\r¢÷Ãî»È¤¤\r¢÷¥Ý¥ë¥¿¡¼¥¬¥¤¥¹¥È\r¢÷¥Þ¥ë¥Á¥¿¥Ã¥×\r¢¨¥·¥ß¥å¥é¥¯¥é¥à\r¢¨¥±¥¤¥ª¥¹AD\r¢¨¥Ö¡¼¥Ó¡¼¥È¥é¥Ã¥×\r\r¥¦¥§¥Ý¥ó¥Õ¥©¥í¡¼\r¸ýºÂ²þãâ\r¥µ¥¤¥Ð¡¼¥¯¥é¥Ã¥¯\r¥¿¥Ã¥×¥Þ¥¹¥¿¥ê¡¼\r¥Þ¥¹¥¿¡¼¥Ï¥Ã¥«¡¼\r¢÷¥¹¥Ñ¥¤¥À¡¼¥·¥ë¥¯\r¢÷¥Ñ¥ï¡¼¥µ¡¼¥¸\r¢¨¶ÛµÞËÉÊÉ\r\rºÕº²¼Ô\r¥¯¥ì¥ó¥¸¥ó¥°\r¥Ç¥£¥¹¥³¥Í¥¯¥È\r¥È¥ê¥¬¡¼¥í¥Ã¥¯\r¥Ð¡¼¥Á¥ã¥ë¥·¥å¡¼¥¿¡¼\r¢÷¥«¥Ã¥È¡õ¥é¥¤¥ó\r¢÷¥Ö¥é¥Ã¥¯¥¢¥¤¥¹\r¢¨¥µ¥ë¥Ù¡¼¥¸\r\r¥·¥¹¥Æ¥à¥ê¥«¥Ð¥ê¡¼\r¥·¥ç¥Ã¥¯¥Ö¥ì¥¤¥ó\rÅÅ»ÒÌÂºÌ\r¥È¥ê¥¬¡¼¥í¥Ã¥¯­¶\r¥æ¥Ë¥Ð¡¼¥µ¥ë¥É¥í¡¼¥ó\r¢÷¥°¥é¥Ó¥Æ¥£\r¢÷¥¹¥È¥ê¡¼¥à¥¨¥Õ¥§¥¯¥È\r¢¨¥¦¥£¥¶¡¼¥É\r";
s_sk22 = "¢§¥Ò¥ë¥³\rÎÚ¤Î²¦\r³Ë»ÀÆÇ\r²ç¤Î²¦\r½Ö´ÖÅ¬±þ\r½Ã¤Î´¶³Ð\r¹Å²½\r¿¨¼ê\rÀ¸Â¸ËÜÇ½\rÀ¸Â¸ËÜÇ½­¶\rÀ¸ÂÎ¥¢¥ó¥Æ¥Ê\rÆ©ÌÀ²½\r¥Ò¥å¡¼¥Þ¥Ê¥¤¥º\r¥á¥È¥í¥À¥¤¥Ð¡¼\rÍ»¹ç\r¢÷²øÎÏ\r¢÷¥«¥á¥ì¥ª¥ó\r¢÷µðÂÎ\r¢÷ºÆÀ¸\r¢÷Éå¿©ºÙ¶Ý\r¢÷ÒöÓ¬\r¢÷¼é¤ê¤Î¶¯»À\r¢÷Íð¿¶\r¢¨½Ã¤Îµ¤\r¢¨¼§µ¤Íò\r¢¨¾×·âµÛ¼ý\r¢¨ÎÎ°è\r\r³°Èé¤Î½â\rÄ¶¹Å¼Á¥Ü¥Ç¥£\rÆÇÊªÅ¬±þ\r¥Ë¥å¡¼¥í¥À¥¤¥Ð¡¼\r·²Ä¹¤ÎÍº¶«¤Ó\r¢÷Åà¤Æ¤Ä¤¯´ã¸÷\r¢÷´ÓÄÌ·â\r¢¨¼é¸îËÜÇ½\r\rÍî¤È¤·Êª\r¹¶·âËÜÇ½\r¥¸¥ª¥á¥È¥ê¥Ã¥¯¥Ç¥¶¥¤¥ó\r¤·¤Ã¤ÝÀÚ¤ê\rÍëÌÄÇÈ\r¢÷´Ä¶­Å¬±þÂÎ\r¢÷¥Æ¥¤¥ë¥Ð¥Ã¥·¥å\r¢¨¥¤¥ó¥Ó¥¸¥Ö¥ë\r";
s_sk23 = "¢§¥¯¥í¥¬¥Í\r¥Õ¥©¥ë¥à:¥¦¥§¥Ý¥ó\r¥Õ¥©¥ë¥à:¥¢¡¼¥Þ¡¼\r¥Õ¥©¥ë¥à:¥ô¥£¡¼¥¯¥ë\r¥Õ¥©¥ë¥à:¥¬¥¸¥§¥Ã¥È\r¥Õ¥©¥ë¥à:¥¹¥È¥é¥¯¥Á¥ã\r¥Õ¥©¥ë¥à:¥Ò¥å¡¼¥Þ¥ó\r¥Õ¥©¥ë¥à:¥¢¥Ë¥Þ¥ë\r¥Õ¥©¥ë¥à:¥¢¥¤¥³¥ó\r¥Õ¥©¥ë¥à:¥Õ¥¡¥Ã¥·¥ç¥ó\r¥Õ¥©¥ë¥à:¥µ¥¤¥Ð¡¼¥¦¥§¥¢\r¥Õ¥©¥ë¥à:¥ª¥Ö¥¸¥§¥¯¥È\r¿Í¾ä\r¥×¥é¥¹¥ï¥ó\r¥µ¥ó¥Ç¡¼¥Ù¥¹¥È\r¹Ý¤ÎÊÉ\r¥°¥Ã¥É¥Ç¥¶¥¤¥ó\r¥®¥¬¥»¥­¥å¥ê¥Æ¥£\rÄ¶²øÎÏ\r¥¦¥£¥°¥ï¥°\rÁûÎî\r¶¨Ä´³«»Ï\r¥¢¥¿¥Ã¥¯¥¢¡¼¥à\r¥¢¥Ã¥×¥°¥ì¡¼¥É\r¥¢¥Ê¥ê¥·¥¹\r£Í£Í£É\rµ°Æ»Ê¬ÀÏ\rµ¡Ç½µ¶Áõ\r·ÀÌó\r¿´´ï°ìÂÎ\rÀ¶¾ô¤Ê¤ë´ï\rØáÁÓ¿À\r¥É¥ß¥Í¥¤¥¿¡¼\r¥Þ¥Ë¥Ô¥å¥ì¡¼¥¿\r¥á¥ó¥Æ¥Ê¥ó¥¹\r¥æ¥Ë¥¾¥ó­¶\r¥é¥¤¥à¥é¥¤¥È\r¥Ð¥¤¥¿¥ë¥¢¥Ã¥Ñ¡¼\r¥Þ¥¤¥ó¥É¥¢¥Ã¥×\r¢÷¥ª¡¼¥ô¥¡¡¼¥í¡¼¥É\r¢÷µ»¤Î¿¿¿ñ\r¢÷¥È¥é¥¤¡õ¥¨¥é¡¼\r¢÷¥Õ¥¡¥ó¥È¥à¥È¥ê¥Ã¥¯\r¢÷Î¥¤ì¶È\r¢÷Èß¸î¤Î·õ\r¢÷Ëâµ»\r¢÷¥æ¥Ë¥¾¥ó\r¢¨¥Õ¥©¥ë¥à¥¹¥¤¥Ã¥Á\r¢¨¥Õ¥©¥ë¥à¥Ñ¡¼¥¸\r¢¨Â¸ºß¾ÚÌÀ\r¢¨¥í¥Ã¥¯¥ª¥ó\r\r¤¤¤Ë¤·¤¨¤Î°ïÉÊ\rÉâ¤­À¤¤ÎÃÎ·Ã\r¥ª¡¼¥¯¥·¥ç¥ó¥¦¥©¡¼¥«¡¼\r²Ð´ï´ÉÀ©\r¥¹¥Ô¡¼¥É¥¨¥ó¥Ï¥ó¥¹\r¥»¥ó¥¹¥¨¥ó¥Ï¥ó¥¹\rÅÅ»ÒÙøÍð\r¥Þ¥Ë¥­¥å¥ì¡¼¥¿­¶\r¢÷¥¸¥§¥Î¥µ¥¤¥É¥â¡¼¥É\r¢÷¥¿¡¼¥²¥Ã¥È¥í¥Ã¥¯¥·¥¹¥Æ¥à\r¢¨¥¹¡¼¥µ¥¤¥É¥¢¥¿¥Ã¥¯\r\r¿´µ»°ìÂÎ­¶\rÄÌ¿®µ¡Ç½\rÆ±Ä´¤¹¤ë´ï\r¿Í·Á»È¤¤\r¥á¥ó¥Æ¥Ê¥ó¥¹­¶\r¢÷·Þ·â¥·¥¹¥Æ¥à\r¢÷¹âÂ®±é»»½èÍý\r¢¨¥ê¥Ö¡¼¥È\r";
s_sk24 = "¢§¥¢¥é¥·\r¥ª¡¼¥ô¥¡¡¼¥ì¥Ö\r¶áÀÜ¼Í·â\r¥¯¥¤¥Ã¥¯¥ê¥Ú¥¢\r¥¹¥¯¥é¥ó¥Ö¥ë\rÀºÌ©Çú·â\r¥Á¥§¥Ã¥¯£¶\rÅ¨¾ðÄå»¡\r¥É¥Ã¥°¥Õ¥¡¥¤¥È\r¥É¥Ã¥°¥Õ¥¡¥¤¥È­¶\r¥Ñ¥ï¡¼¥Õ¥¡¥¤¥È\r¥Ñ¥ï¡¼¥Õ¥¡¥¤¥È­¶\r¥Ø¥Ã¥É¥ª¥Õ\r¥Þ¥·¥ó¥¤¥ó¥Õ¥¡¥¤¥È\r¥â¥ó¥¹¥¿¡¼¥Þ¥·¥ó\r¢÷¶ÛµÞ²óÈò¥Ü¥à\r¢÷¥¸¥ã¥Ã¥¯¥Ê¥¤¥Õ\r¢÷¥¹¥¿¥ó¥Ô¡¼¥É\r¢÷Á´ÃÆ½¸Ãæ\r¢÷¥Õ¥©¡¼¥ë¥ó¥¨¥ó¥¸¥§¥ë\r¢÷¥Ö¥í¥Ã¥¯\r¢÷¥Ø¥ô¥£¥Õ¥¡¥¤¥È\r¢÷¥é¥Ô¥Ã¥É¥·¥å¡¼¥¿¡¼\r¢¨¥·¥ã¥Ã¥È¥À¥¦¥ó\r¢¨¥·¥ó¥¯¥í¥¢¥¿¥Ã¥¯\r¢¨¥Ï¥¤¥ê¥ó¥±¡¼¥¸\r¢¨¥Õ¥ë¥Õ¥¡¥¤¥¢\r\rÀïÁè²°\r¥¢¥¤¥¢¥ó¥¸¥ã¥Ã¥¯\r¥­¥ã¥Ã¥Á¥¶¥¦¥£¥ó¥É\r¥¯¥í¡¼¥º¥Ö¥ì¥¤¥ó\r¥Þ¡¼¥­¥ó¥°\r¢÷¥É¡¼¥ó¥È¥ì¥¹\r¢÷¥Ï¥ó¥¿¡¼¥º¥¯¥ª¥ê\r¢¨¥Þ¥·¥ó¥³¥ó¥È¥í¡¼¥ë\r\r¥¹¥Ô¡¼¥É¥Õ¥¡¥¤¥È\rÀï¾ì¤Îµ¡»Î\rÄ¶Ä¹µ÷Î¥»Ù±ç\r¥Ð¡¼¥¹¥È¥¸¥ã¥ó¥×\rË°ÏÂ¹¶·â\r¢÷µÞ¹ß²¼ºîÀï\r¢÷¥Ç¥Ã¥É¥ê¡¼¥Ô¥¢¡¼¥¹\r¢¨Àï¿À¤ÎºÓÇÛ\r";
s_sk25 = "¢§¥«¥²¥à¥·¥ã\rÇö±Æ\r±£¤·ÏÓ\r±ÆÆ§¤ß\r±Æ¼é¤ê\rµ¼»÷¿Í³Ê\r¹õ»Ò\r¿Í³Ê¾ãÊÉ\r¿Í³Ê¾ãÊÉ­¶\rÃéÀá¤ÎÊ¼\r¥Ç¥³¥¤\r¥É¥Ã¥Ú¥ë¥²¥ó¥¬¡¼\r¤È¤ó¤ÜÊÖ¤ê\r¥Ð¥Ã¥¯¥¢¥Ã¥×­¶\r¥ê¥¯¥¨¥¹¥È\r¢÷¼Ì¤·µ»\r¢÷·Å´ã\r¢÷Æó¿Í±©¿¥\r¢÷Ç½ÌÌ\r¢÷¥Ð¥Ã¥¯¥¢¥Ã¥×\r¢÷½¦¤¤Ê¹¤­\r¢÷¿ÈÂå¤ï¤ê¤ÎÍÓ\r¢÷¥ß¥ß¥¯¥ê¡¼\r¢¨¥¹¥Ê¥Ã¥Á\r¢¨Æâ½õ¤Î¸ù\r¢¨¥Ñ¥ó¥È¥Þ¥¤¥à\r¢¨Éõ¤¸¼ê\r\rÀøÉú¼Ô\rID¶¯Ã¥\r¼ó¤Ä¤ê»Å³Ý¤±\r¥¹¥­¥ë¥·¡¼¥Õ­¶\r¥ì¥Ã¥°¥¢¥ì¥¹¥È\r¢÷¥¹¥­¥ë¥·¡¼¥Õ\r¢÷ÀøÉú\r¢¨¥Õ¥§¥¤¥ë¥»¡¼¥Õ\r\r°¤Òß¤Î¸ÆµÛ\r±Æ¤Ê¤ëÏÓ\rÄê¤Þ¤é¤Ì±Æ\r¥¹¥Ê¥Ã¥Á­¶\rÀøÉú­¶\r¢÷´°Á´´ÇÇË\r¢÷ÌµÌ¾¤ÎÄ¹¼Ô\r¢¨¥Û¥í¥¦\r";
s_sk26 = "¢§¥¢¥ä¥«¥·\r²â¤ÎÂÎ\râÇÂ°\rÅà¤¨¤ë»ØÀè\r¿Í²½\rÅÔ»ÔÅÁÀâ\rÆàÍîÂÄ¤Á­¶\rÉåÇÔ¤Î»ØÀè­¶\r¸Å¤­Í§¿Í\rËºµÑ\rËâ¿Í¤Î²ç\rÌ´Ëâ\r°Ç¤Î³°Åå\rÌë¤Î½»¿Í\r¥ê¡¼¥Ç¥£¥ó¥°\r¢÷°ÚÉÝ\r¢÷µÛÀº\r¢÷¼Ù´ã\r¢÷áïµ¤¤ÎÊÉ\r¢÷ÆàÍîÂÄ¤Á\r¢÷ÉåÇÔ¤Î»ØÀè\r¢÷°Ç¤Î½Þ¶µ\r¢÷Ìë¤ÎÇÈÆ°\r¢¨°Û·Á²½\r¢¨¸¸ÁÛ·ë³¦\r¢¨»ÏÁÄ\r¢¨ÍÅËâ¤ÎÄí\r\r¢÷·ìÌ®:½Ã¤Î°ìÂ²\r¢÷·ìÌ®:Î¶¤Î°ìÂ²\r¢÷·ìÌ®:ÍÅÀº¤Î°ìÂ²\r¢÷·ìÌ®:µ´¤Î°ìÂ²\r¢÷·ìÌ®:¿Í·Á¤Î°ìÂ²\r¢÷·ìÌ®:Ìë¤Î°ìÂ²\r¢÷·ìÌ®:°­Ëâ¤Î°ìÂ²\r¢÷·ìÌ®:µð¿Í¤Î°ìÂ²\r¢÷·ìÌ®:²½À¸¤Î°ìÂ²\r¢÷·ìÌ®:»à¼Ô¤Î°ìÂ²\r¢÷·ìÌ®:Å·»È¤Î°ìÂ²\r¢÷·ìÌ®:ÅÁÀâ¤Î°ìÂ²\r¢÷·ìÌ®:¿ÀÂ²\r\r°­Ëâ¤Î¥Î¡¼¥È\rÍ¶¤¤¤ÎÈâ\r±ÊÀ¤¼Ô\r¾å°Ì¼ï\r¸ò»¨¼ï\r¢÷¼í¤ê¤ÎÄí\r¢÷·ìÌÁ¤Î¼ç\r¢¨²«ºª¤Î·¯\r\r¹õ¤ÎÈÖ¿Í\rµÛÀº­¶\rËâ¿Í¤ÎÄÞ\r°ÇÌë¤Î¼í¤ê\rÍÅËâ¤Î¼í¿Í\r¢÷´¶À÷¤¹¤ë°­Ì´\r¢÷ÉåÇÔ¤Î²¦\r¢¨Ëâ²¦\r\r·ìÌ®­¶:½Ã¤Î°ìÂ²\r·ìÌ®­¶:Î¶¤Î°ìÂ²\r·ìÌ®­¶:ÍÅÀº¤Î°ìÂ²\r·ìÌ®­¶:µ´¤Î°ìÂ²\r·ìÌ®­¶:¿Í·Á¤Î°ìÂ²\r·ìÌ®­¶:Ìë¤Î°ìÂ²\r·ìÌ®­¶:°­Ëâ¤Î°ìÂ²\r·ìÌ®­¶:µð¿Í¤Î°ìÂ²\r·ìÌ®­¶:²½À¸¤Î°ìÂ²\r·ìÌ®­¶:»à¼Ô¤Î°ìÂ²\r·ìÌ®­¶:Å·»È¤Î°ìÂ²\r·ìÌ®­¶:ÅÁÀâ¤Î°ìÂ²\r·ìÌ®­¶:¿ÀÂ²\r·ìÌ®:³¤Ëâ\r·ìÌ®­¶:³¤Ëâ\r½ã·ìÅý\r";

mun_no = "¢¦Ìµ¾ò·ï¼èÆÀ\r¡©\r\r";
mun_def = "¢¦Ìµ¾ò·ï¼èÆÀ\rIANUS(¹Ø:0/0¡¢±£:10/0¡¢ÅÅÀ©:À©¸æÃÍ)\r";
mun_0_2  = "¥Þ¥ó¥·¥ç¥ó(Yellow¡¢¹Ø:4/1¡¢ÅÐ:10¡¢¥»¡§10)";
mun_3_4  = "Å¹ÊÞ¡¿»öÌ³½ê(Yellow¡¢¹Ø:5/1¡¢ÅÐ:8¡¢¥»:12)";
mun_5_6  = "¥Þ¥ó¥·¥ç¥ó(Green¡¢¹Ø:7/2¡¢ÅÐ:10¡¢¥»¡§13)";
mun_7_8  = "Å¹ÊÞ¡¿»öÌ³½ê(Green¡¢¹Ø:8/2¡¢ÅÐ:8¡¢¥»:15)";
mun_9_10 = "¥Þ¥ó¥·¥ç¥ó(White¡¢¹Ø:16/4¡¢ÅÐ:10¡¢¥»¡§15)";

n_sk_list = "¢§°ìÈÌµ»Ç½\r£±¡ü¡Ý¡Ý¡Ý °åÎÅ\n£±¡ü¡Ý¡Ý¡Ý ¼Í·â¡ú\n£±¡ü¡Ý¡Ý¡Ý ÃÎ³Ð\n£±¡ü¡Ý¡Ý¡Ý ÅÅÇ¾\n£°¡Ý¡Ý¡Ý¡Ý À½ºî:\n£±¡Ý¡ü¡Ý¡Ý ¿´Íý¡ú\n£±¡Ý¡ü¡Ý¡Ý ¼«²æ¡ú\n£±¡Ý¡ü¡Ý¡Ý ¸ò¾Ä\n£°¡Ý¡Ý¡Ý¡Ý ·Ý½Ñ:\n£±¡Ý¡Ý¡ü¡Ý ±¿Æ°\n£±¡Ý¡Ý¡ü¡Ý ²óÈò¡ú\n£°¡Ý¡Ý¡Ý¡Ý Áà½Ä:¡ú\n£±¡Ý¡Ý¡ü¡Ý ÇòÊ¼¡ú\n£±¡Ý¡Ý¡Ý¡ü °µÎÏ¡ú\n£±¡Ý¡Ý¡Ý¡ü ¿®ÍÑ¡ú\n£±¡Ý¡Ý¡Ý¡ü ±£Ì©\n\n¢§¼Ò²ñ\n£±¡Ý¡Ý¡Ý¡Ý ¼Ò²ñ:£Î¡ý£Ö£Á\n£±¡Ý¡Ý¡Ý¡Ý ¼Ò²ñ:ÁªÂò\n£±¡Ý¡Ý¡Ý¡Ý ¼Ò²ñ:ÁªÂò\n\n¢§¥³¥Í\n£±¡Ý¡Ý¡Ý¡Ý ¥³¥Í:ÁªÂò\n";



mujoken = "¢§Ìµ¾ò·ï¼èÆÀµ»Ç½\r£±¡ü¡Ý¡Ý¡Ý ÃÎ³Ð\r£±¡Ý¡ü¡Ý¡Ý ¸ò¾Ä\r£±¡Ý¡Ý¡ü¡Ý ¼«²æ\r£±¡Ý¡Ý¡Ý¡ü ¼Ò²ñ:£Î¡ý£Ö£Á\r£±¡Ý¡Ý¡ü¡Ý ¼Ò²ñ:½Ð¿ÈÃÏ\r";

function check_style(){
	switch(document.form1.style1.selectedIndex){
	case 0	: Pow_a=powno; S_sk_a=s_skno; break;
	case 1	: Pow_a=pow00; S_sk_a=s_sk00; break;
	case 2	: Pow_a=pow01; S_sk_a=s_sk01; break;
	case 3	: Pow_a=pow02; S_sk_a=s_sk02; break;
	case 4	: Pow_a=pow03; S_sk_a=s_sk03; break;
	case 5	: Pow_a=pow04; S_sk_a=s_sk04; break;
	case 6	: Pow_a=pow05; S_sk_a=s_sk05; break;
	case 7	: Pow_a=pow06; S_sk_a=s_sk06; break;
	case 8	: Pow_a=pow07; S_sk_a=s_sk07; break;
	case 9	: Pow_a=pow08; S_sk_a=s_sk08; break;
	case 10	: Pow_a=pow09; S_sk_a=s_sk09; break;
	case 11	: Pow_a=pow10; S_sk_a=s_sk10; break;
	case 12	: Pow_a=pow11; S_sk_a=s_sk11; break;
	case 13	: Pow_a=pow12; S_sk_a=s_sk12; break;
	case 14	: Pow_a=pow13; S_sk_a=s_sk13; break;
	case 15	: Pow_a=pow14; S_sk_a=s_sk14; break;
	case 16	: Pow_a=pow15; S_sk_a=s_sk15; break;
	case 17	: Pow_a=pow16; S_sk_a=s_sk16; break;
	case 18	: Pow_a=pow17; S_sk_a=s_sk17; break;
	case 19	: Pow_a=pow18; S_sk_a=s_sk18; break;
	case 20	: Pow_a=pow19; S_sk_a=s_sk19; break;
	case 21	: Pow_a=pow20; S_sk_a=s_sk20; break;
	case 22	: Pow_a=pow21; S_sk_a=s_sk21; break;
	case 23	: Pow_a=pow22; S_sk_a=s_sk22; break;
	case 24	: Pow_a=pow23; S_sk_a=s_sk23; break;
	case 25	: Pow_a=pow24; S_sk_a=s_sk24; break;
	case 26	: Pow_a=pow25; S_sk_a=s_sk25; break;
	case 27	: Pow_a=pow26; S_sk_a=s_sk26; break;
	default	: Pow_a=powno; S_sk_a=s_skno; break;
	}

	switch(document.form1.style2.selectedIndex){
	case 0	: Pow_b=powno; S_sk_b=s_skno; break;
	case 1	: Pow_b=pow00; S_sk_b=s_sk00; break;
	case 2	: Pow_b=pow01; S_sk_b=s_sk01; break;
	case 3	: Pow_b=pow02; S_sk_b=s_sk02; break;
	case 4	: Pow_b=pow03; S_sk_b=s_sk03; break;
	case 5	: Pow_b=pow04; S_sk_b=s_sk04; break;
	case 6	: Pow_b=pow05; S_sk_b=s_sk05; break;
	case 7	: Pow_b=pow06; S_sk_b=s_sk06; break;
	case 8	: Pow_b=pow07; S_sk_b=s_sk07; break;
	case 9	: Pow_b=pow08; S_sk_b=s_sk08; break;
	case 10	: Pow_b=pow09; S_sk_b=s_sk09; break;
	case 11	: Pow_b=pow10; S_sk_b=s_sk10; break;
	case 12	: Pow_b=pow11; S_sk_b=s_sk11; break;
	case 13	: Pow_b=pow12; S_sk_b=s_sk12; break;
	case 14	: Pow_b=pow13; S_sk_b=s_sk13; break;
	case 15	: Pow_b=pow14; S_sk_b=s_sk14; break;
	case 16	: Pow_b=pow15; S_sk_b=s_sk15; break;
	case 17	: Pow_b=pow16; S_sk_b=s_sk16; break;
	case 18	: Pow_b=pow17; S_sk_b=s_sk17; break;
	case 19	: Pow_b=pow18; S_sk_b=s_sk18; break;
	case 20	: Pow_b=pow19; S_sk_b=s_sk19; break;
	case 21	: Pow_b=pow20; S_sk_b=s_sk20; break;
	case 22	: Pow_b=pow21; S_sk_b=s_sk21; break;
	case 23	: Pow_b=pow22; S_sk_b=s_sk22; break;
	case 24	: Pow_b=pow23; S_sk_b=s_sk23; break;
	case 25	: Pow_b=pow24; S_sk_b=s_sk24; break;
	case 26	: Pow_b=pow25; S_sk_b=s_sk25; break;
	case 27	: Pow_b=pow26; S_sk_b=s_sk26; break;
	default	: Pow_b=powno; S_sk_b=s_skno; break;
	}

	switch(document.form1.style3.selectedIndex){
	case 0	: Pow_c=powno; S_sk_c=s_skno; break;
	case 1	: Pow_c=pow00; S_sk_c=s_sk00; break;
	case 2	: Pow_c=pow01; S_sk_c=s_sk01; break;
	case 3	: Pow_c=pow02; S_sk_c=s_sk02; break;
	case 4	: Pow_c=pow03; S_sk_c=s_sk03; break;
	case 5	: Pow_c=pow04; S_sk_c=s_sk04; break;
	case 6	: Pow_c=pow05; S_sk_c=s_sk05; break;
	case 7	: Pow_c=pow06; S_sk_c=s_sk06; break;
	case 8	: Pow_c=pow07; S_sk_c=s_sk07; break;
	case 9	: Pow_c=pow08; S_sk_c=s_sk08; break;
	case 10	: Pow_c=pow09; S_sk_c=s_sk09; break;
	case 11	: Pow_c=pow10; S_sk_c=s_sk10; break;
	case 12	: Pow_c=pow11; S_sk_c=s_sk11; break;
	case 13	: Pow_c=pow12; S_sk_c=s_sk12; break;
	case 14	: Pow_c=pow13; S_sk_c=s_sk13; break;
	case 15	: Pow_c=pow14; S_sk_c=s_sk14; break;
	case 16	: Pow_c=pow15; S_sk_c=s_sk15; break;
	case 17	: Pow_c=pow16; S_sk_c=s_sk16; break;
	case 18	: Pow_c=pow17; S_sk_c=s_sk17; break;
	case 19	: Pow_c=pow18; S_sk_c=s_sk18; break;
	case 20	: Pow_c=pow19; S_sk_c=s_sk19; break;
	case 21	: Pow_c=pow20; S_sk_c=s_sk20; break;
	case 22	: Pow_c=pow21; S_sk_c=s_sk21; break;
	case 23	: Pow_c=pow22; S_sk_c=s_sk22; break;
	case 24	: Pow_c=pow23; S_sk_c=s_sk23; break;
	case 25	: Pow_c=pow24; S_sk_c=s_sk24; break;
	case 26	: Pow_c=pow25; S_sk_c=s_sk25; break;
	case 27	: Pow_c=pow26; S_sk_c=s_sk26; break;
	}
}

function calc()
{
	check_style();
	with(document.form1){
		document.form1.reason.value    = Pow_a[0] + Pow_b[0] + Pow_c[0];
		document.form1.reason_c.value  = Pow_a[1] + Pow_b[1] + Pow_c[1];
		document.form1.passion.value   = Pow_a[2] + Pow_b[2] + Pow_c[2];
		document.form1.passion_c.value = Pow_a[3] + Pow_b[3] + Pow_c[3];
		document.form1.life.value      = Pow_a[4] + Pow_b[4] + Pow_c[4];
		document.form1.life_c.value    = Pow_a[5] + Pow_b[5] + Pow_c[5];
		document.form1.mundane.value   = Pow_a[6] + Pow_b[6] + Pow_c[6];
		document.form1.mundane_c.value = Pow_a[7] + Pow_b[7] + Pow_c[7];
	}
}

function recalc_combatspeed()
{
	if( document.form1.reason.value != ""
	 && document.form1.passion.value != ""
	 && document.form1.life.value != "" ) {
		
		var cs;
		cs = parseInt( document.form1.reason.value ) +
			 parseInt( document.form1.passion.value ) +
			 parseInt( document.form1.life.value );
		cs = cs / 2;

		document.form1.combatspeed.value = ~~cs;
	}
}

function n_skill_listup(){
	check_style();
	document.form1.normalskill.value = n_sk_list;
}

function s_skill_listup(){
	check_style();
	document.form1.superskill.value = S_sk_a + "\r\r" + S_sk_b + "\r\r" + S_sk_c;
};

function check_mundane(){

	if( document.form1.mundane.value == "" ) {
		Eq_mujoken = mun_no;
	}
	else {
		switch( document.form1.mundane.value ) {
		case "0": 
		case "1": 
		case "2": 
			Eq_mujoken = mun_def + mun_0_2;
			break;
		case "3": 
		case "4": 
			Eq_mujoken = mun_def + mun_3_4;
			break;
		case "5": 
		case "6": 
			Eq_mujoken = mun_def + mun_5_6;
			break;
		case "7": 
		case "8": 
			Eq_mujoken = mun_def + mun_7_8;
			break;
		case "9": 
		case "10": 
		case "11": 
		case "12": 
		case "13": 
		case "14": 
		case "15": 
		case "16": 
		case "17": 
		case "18": 
		case "19": 
		case "20": 
			Eq_mujoken = mun_def + mun_9_10;
			break;
		default:
			Eq_mujoken = mun_no;
			break;
		}
	}

}

function equip_makeup(){
	check_style();
	check_mundane();
	document.form1.outfit.value = Eq_mujoken + Eq_m_a + "\r\r" + Eq_m_b + "\r\r" + Eq_m_c;
}

function equip_buildup(){
	check_style();
	check_mundane();
	document.form1.outfit.value = Eq_mujoken + Eq_b_a + "\r\r" + Eq_b_b + "\r\r" + Eq_b_c;
}

function add_defequip(){
	check_style();
	check_mundane();
	document.form1.outfit.value = document.form1.outfit.value + Eq_mujoken;
}

