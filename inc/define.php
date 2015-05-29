<?php
// データベース情報
$ndbDB['dir']  = "※DBファイルを収容するフォルダ名（末尾に'/'は付けない）";
$ndbDB['file'] = $ndbDB['dir'] . "/" . "※DBファイル名";
$ndbDB['tbl']  = "nova_ax_table";

// 認証用パスワード
$root_pass = "rootpassword";	// 管理者用パスワード

// 編集用JavaScript
$jscrPath['TNX'] = "./btd_form.js";
$jscrType = "TNX";

$nobodyPict = "nd.png";

$debugLogFile = "ndb.log";

#$scriptPath = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['SCRIPT_NAME'];
$scriptPath = $_SERVER['SCRIPT_NAME'];
$displayTableWidth = 860;
$inputTableWidth = 860;
$listMaxPerPage = 100;
$abstractMaxPerPage = 10;
$HomePage = "※親サイトのURL";
$defaultSearchCategory = "cast";

// DB接続ID
$dbm = 0;

// FPDFライブラリ
$fpdfDir = "※FPDFライブラリのインストールフォルダ（末尾に'/'は付けない）";


// スタイル
$c = 0;
$styleList[$c++] = array( 'no' =>   0, 'name' => "カブキ",       'alf' => "kabuki"     , 'knj' => "歌舞伎", 'pow' => array( 0,3, 3,5, 2,4, 2,4 ) );
$styleList[$c++] = array( 'no' =>   1, 'name' => "バサラ",       'alf' => "vasara"     , 'knj' => "婆娑羅", 'pow' => array( 3,5, 2,5, 1,3, 1,3 ) );
$styleList[$c++] = array( 'no' =>   2, 'name' => "タタラ",       'alf' => "tatara"     , 'knj' => "踏鞍"  , 'pow' => array( 3,5, 1,3, 1,3, 2,5 ) );
$styleList[$c++] = array( 'no' =>   3, 'name' => "ミストレス",   'alf' => "mistress"   , 'knj' => "舞貴人", 'pow' => array( 1,4, 3,5, 1,2, 2,5 ) );
$styleList[$c++] = array( 'no' =>   4, 'name' => "カブト",       'alf' => "kabuto"     , 'knj' => "兜"    , 'pow' => array( 2,4, 1,4, 3,5, 1,3 ) );
$styleList[$c++] = array( 'no' =>   5, 'name' => "カリスマ",     'alf' => "karisma"    , 'knj' => "狩魔"  , 'pow' => array( 1,3, 3,5, 0,3, 3,5 ) );
$styleList[$c++] = array( 'no' =>   6, 'name' => "マネキン",     'alf' => "manikin"    , 'knj' => "真似衿", 'pow' => array( 1,3, 3,5, 2,5, 1,3 ) );
$styleList[$c++] = array( 'no' =>   7, 'name' => "カゼ",         'alf' => "kaze"       , 'knj' => "風"    , 'pow' => array( 2,5, 1,3, 2,4, 2,4 ) );
$styleList[$c++] = array( 'no' =>   8, 'name' => "フェイト",     'alf' => "fate"       , 'knj' => "平威徒", 'pow' => array( 2,5, 2,5, 1,3, 2,3 ) );
$styleList[$c++] = array( 'no' =>   9, 'name' => "クロマク",     'alf' => "kuro-maku"  , 'knj' => "黒幕"  , 'pow' => array( 1,3, 2,5, 1,3, 3,5 ) );
$styleList[$c++] = array( 'no' =>  10, 'name' => "エグゼク",     'alf' => "exek."      , 'knj' => "益世狗", 'pow' => array( 2,5, 1,3, 1,3, 3,5 ) );
$styleList[$c++] = array( 'no' =>  11, 'name' => "カタナ",       'alf' => "katana"     , 'knj' => "刀"    , 'pow' => array( 2,4, 0,4, 3,5, 2,3 ) );
$styleList[$c++] = array( 'no' =>  12, 'name' => "クグツ",       'alf' => "kugutsu"    , 'knj' => "傀儡"  , 'pow' => array( 3,5, 0,4, 3,5, 1,2 ) );
$styleList[$c++] = array( 'no' =>  13, 'name' => "カゲ",         'alf' => "kage"       , 'knj' => "影"    , 'pow' => array( 3,4, 0,5, 2,4, 2,3 ) );
$styleList[$c++] = array( 'no' =>  14, 'name' => "チャクラ",     'alf' => "chakra"     , 'knj' => "車鞍"  , 'pow' => array( 2,5, 2,5, 3,5, 0,1 ) );
$styleList[$c++] = array( 'no' =>  15, 'name' => "レッガー",     'alf' => "legger"     , 'knj' => "裂牙"  , 'pow' => array( 2,4, 2,4, 2,4, 1,4 ) );
$styleList[$c++] = array( 'no' =>  16, 'name' => "カブトワリ",   'alf' => "kabuto-wari", 'knj' => "兜割"  , 'pow' => array( 2,4, 0,4, 2,3, 3,5 ) );
$styleList[$c++] = array( 'no' =>  17, 'name' => "ハイランダー", 'alf' => "hilander"   , 'knj' => "拝乱駄", 'pow' => array( 2,5, 2,5, 0,1, 3,5 ) );
$styleList[$c++] = array( 'no' =>  18, 'name' => "マヤカシ",     'alf' => "mayakashi"  , 'knj' => "摩耶蠍", 'pow' => array( 3,5, 3,5, 0,2, 1,4 ) );
$styleList[$c++] = array( 'no' =>  19, 'name' => "トーキー",     'alf' => "talkie"     , 'knj' => "投喜居", 'pow' => array( 2,5, 3,5, 1,3, 1,3 ) );
$styleList[$c++] = array( 'no' =>  20, 'name' => "イヌ",         'alf' => "inu"        , 'knj' => "犬"    , 'pow' => array( 3,5, 1,3, 2,5, 1,3 ) );
$styleList[$c++] = array( 'no' =>  21, 'name' => "ニューロ",     'alf' => "neuro"      , 'knj' => "新生路", 'pow' => array( 3,5, 2,5, 0,1, 2,5 ) );

$styleList[$c++] = array( 'no' =>  -1, 'name' => "ヒルコ",       'alf' => "hiruko"     , 'knj' => "水蛭子", 'pow' => array( 1,3, 3,5, 3,5, 0,3 ) );
$styleList[$c++] = array( 'no' =>  -2, 'name' => "クロガネ",     'alf' => "kurogane"   , 'knj' => "黒金",   'pow' => array( 3,5, 2,4, 2,4, 0,3 ) );
$styleList[$c++] = array( 'no' =>  -7, 'name' => "アラシ",       'alf' => "arashi"     , 'knj' => "嵐    ", 'pow' => array( 3,5, 0,3, 1,3, 3,5 ) );
$styleList[$c++] = array( 'no' =>  -9, 'name' => "カゲムシャ",   'alf' => "kage-musya" , 'knj' => "影武者", 'pow' => array( 2,4, 3,5, 2,4, 0,3 ) );
$styleList[$c++] = array( 'no' => -18, 'name' => "アヤカシ",     'alf' => "ayakashi"   , 'knj' => "妖"    , 'pow' => array( 0,5, 1,5, 3,2, 3,4 ) );

// ライフパス 番号コード
$lifePassCard = NULL;
$lifePassCard[ 0] = "Joker";
$lifePassCard[ 1] = "２";
$lifePassCard[ 2] = "３";
$lifePassCard[ 3] = "４";
$lifePassCard[ 4] = "５";
$lifePassCard[ 5] = "６";
$lifePassCard[ 6] = "７";
$lifePassCard[ 7] = "８";
$lifePassCard[ 8] = "９";
$lifePassCard[ 9] = "10";
$lifePassCard[10] = "Ｊ";
$lifePassCard[11] = "Ｑ";
$lifePassCard[12] = "Ｋ";
$lifePassCard[13] = "Ａ";
$lifePassCard[-1] = "−";

$lifePassPlace = NULL;
$lifePassPlace = array( 'id' => "NOVA", 'name' => "Ｎ◎ＶＡ" );

// ライフパス出自表[N◎VA]
$lifePass = NULL;
$lifePass[] = array( 'type' => "birth", 'place' => "NOVA", 'no' =>  0, 'name' => "", 'skill' => "", );
$lifePass[] = array( 'type' => "birth", 'place' => "NOVA", 'no' =>  1, 'name' => "", 'skill' => "", );
$lifePass[] = array( 'type' => "birth", 'place' => "NOVA", 'no' =>  2, 'name' => "", 'skill' => "", );
$lifePass[] = array( 'type' => "birth", 'place' => "NOVA", 'no' =>  3, 'name' => "", 'skill' => "", );
$lifePass[] = array( 'type' => "birth", 'place' => "NOVA", 'no' =>  4, 'name' => "", 'skill' => "", );
$lifePass[] = array( 'type' => "birth", 'place' => "NOVA", 'no' =>  5, 'name' => "", 'skill' => "", );
$lifePass[] = array( 'type' => "birth", 'place' => "NOVA", 'no' =>  6, 'name' => "", 'skill' => "", );
$lifePass[] = array( 'type' => "birth", 'place' => "NOVA", 'no' =>  7, 'name' => "", 'skill' => "", );
$lifePass[] = array( 'type' => "birth", 'place' => "NOVA", 'no' =>  8, 'name' => "", 'skill' => "", );
$lifePass[] = array( 'type' => "birth", 'place' => "NOVA", 'no' =>  9, 'name' => "", 'skill' => "", );
$lifePass[] = array( 'type' => "birth", 'place' => "NOVA", 'no' => 10, 'name' => "", 'skill' => "", );
$lifePass[] = array( 'type' => "birth", 'place' => "NOVA", 'no' => 11, 'name' => "", 'skill' => "", );
$lifePass[] = array( 'type' => "birth", 'place' => "NOVA", 'no' => 12, 'name' => "", 'skill' => "", );
$lifePass[] = array( 'type' => "birth", 'place' => "NOVA", 'no' => 13, 'name' => "", 'skill' => "", );
$lifePass[] = array( 'type' => "birth", 'place' => "NOVA", 'no' => -1, 'name' => "", 'skill' => "", );

// ライフパス経験表[N◎VA]
$lifePass[] = array( 'type' => "exp", 'place' => "NOVA", 'no' =>  0, 'name' => "", 'skill' => "", );
$lifePass[] = array( 'type' => "exp", 'place' => "NOVA", 'no' =>  1, 'name' => "", 'skill' => "", );
$lifePass[] = array( 'type' => "exp", 'place' => "NOVA", 'no' =>  2, 'name' => "", 'skill' => "", );
$lifePass[] = array( 'type' => "exp", 'place' => "NOVA", 'no' =>  3, 'name' => "", 'skill' => "", );
$lifePass[] = array( 'type' => "exp", 'place' => "NOVA", 'no' =>  4, 'name' => "", 'skill' => "", );
$lifePass[] = array( 'type' => "exp", 'place' => "NOVA", 'no' =>  5, 'name' => "", 'skill' => "", );
$lifePass[] = array( 'type' => "exp", 'place' => "NOVA", 'no' =>  6, 'name' => "", 'skill' => "", );
$lifePass[] = array( 'type' => "exp", 'place' => "NOVA", 'no' =>  7, 'name' => "", 'skill' => "", );
$lifePass[] = array( 'type' => "exp", 'place' => "NOVA", 'no' =>  8, 'name' => "", 'skill' => "", );
$lifePass[] = array( 'type' => "exp", 'place' => "NOVA", 'no' =>  9, 'name' => "", 'skill' => "", );
$lifePass[] = array( 'type' => "exp", 'place' => "NOVA", 'no' => 10, 'name' => "", 'skill' => "", );
$lifePass[] = array( 'type' => "exp", 'place' => "NOVA", 'no' => 11, 'name' => "", 'skill' => "", );
$lifePass[] = array( 'type' => "exp", 'place' => "NOVA", 'no' => 12, 'name' => "", 'skill' => "", );
$lifePass[] = array( 'type' => "exp", 'place' => "NOVA", 'no' => 13, 'name' => "", 'skill' => "", );
$lifePass[] = array( 'type' => "exp", 'place' => "NOVA", 'no' => -1, 'name' => "", 'skill' => "", );

// ライフパス邂逅表[N◎VA]
$lifePass[] = array( 'type' => "enc", 'place' => "NOVA", 'no' =>  0, 'name' => "", 'skill' => "", );
$lifePass[] = array( 'type' => "enc", 'place' => "NOVA", 'no' =>  1, 'name' => "", 'skill' => "", );
$lifePass[] = array( 'type' => "enc", 'place' => "NOVA", 'no' =>  2, 'name' => "", 'skill' => "", );
$lifePass[] = array( 'type' => "enc", 'place' => "NOVA", 'no' =>  3, 'name' => "", 'skill' => "", );
$lifePass[] = array( 'type' => "enc", 'place' => "NOVA", 'no' =>  4, 'name' => "", 'skill' => "", );
$lifePass[] = array( 'type' => "enc", 'place' => "NOVA", 'no' =>  5, 'name' => "", 'skill' => "", );
$lifePass[] = array( 'type' => "enc", 'place' => "NOVA", 'no' =>  6, 'name' => "", 'skill' => "", );
$lifePass[] = array( 'type' => "enc", 'place' => "NOVA", 'no' =>  7, 'name' => "", 'skill' => "", );
$lifePass[] = array( 'type' => "enc", 'place' => "NOVA", 'no' =>  8, 'name' => "", 'skill' => "", );
$lifePass[] = array( 'type' => "enc", 'place' => "NOVA", 'no' =>  9, 'name' => "", 'skill' => "", );
$lifePass[] = array( 'type' => "enc", 'place' => "NOVA", 'no' => 10, 'name' => "", 'skill' => "", );
$lifePass[] = array( 'type' => "enc", 'place' => "NOVA", 'no' => 11, 'name' => "", 'skill' => "", );
$lifePass[] = array( 'type' => "enc", 'place' => "NOVA", 'no' => 12, 'name' => "", 'skill' => "", );
$lifePass[] = array( 'type' => "enc", 'place' => "NOVA", 'no' => 13, 'name' => "", 'skill' => "", );
$lifePass[] = array( 'type' => "enc", 'place' => "NOVA", 'no' => -1, 'name' => "", 'skill' => "", );


// キャラクタ分類一覧
$c = 0;
$cateList[$c++] = array( 'sidx' => 1 , 'id' => "cast"                             , 'name' => "全キャスト" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/freelance/fighter/assassin"  , 'name' => "戦闘系/殺し屋" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/freelance/fighter/hunter"    , 'name' => "戦闘系/賞金稼ぎ" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/freelance/fighter/street"    , 'name' => "戦闘系/荒事屋" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/freelance/fighter/bodyguard" , 'name' => "戦闘系/ボディガード" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/freelance/fighter/etc"       , 'name' => "戦闘系/その他" );
$cateList[$c++] = array( 'sidx' => 1 , 'id' => "cast/freelance/fighter"           , 'name' => "戦闘系全般" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/freelance/intelli/detective" , 'name' => "情報系/探偵" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/freelance/intelli/neuro"     , 'name' => "情報系/ニューロ" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/freelance/intelli/fixer"     , 'name' => "情報系/フィクサー" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/freelance/intelli/etc"       , 'name' => "情報系/その他" );
$cateList[$c++] = array( 'sidx' => 1 , 'id' => "cast/freelance/intelli"           , 'name' => "情報系全般" );
$cateList[$c++] = array( 'sidx' => 1 , 'id' => "cast/freelance"                   , 'name' => "フリーランス全般" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/company/chihaya"             , 'name' => "企業/千早" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/company/megacorp"            , 'name' => "企業/メガコーポ" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/company/etc"                 , 'name' => "企業/その他" );
$cateList[$c++] = array( 'sidx' => 1 , 'id' => "cast/company"                     , 'name' => "企業全般" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/police/blakkhounds"          , 'name' => "警察/ブラックハウンド" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/police/corporate"            , 'name' => "警察/企業警察" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/police/etc"                  , 'name' => "警察/その他" );
$cateList[$c++] = array( 'sidx' => 1 , 'id' => "cast/police"                      , 'name' => "警察関係全般" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/legger/kawato"               , 'name' => "犯罪組織/河渡連合" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/legger/sangoukai"            , 'name' => "犯罪組織/三合会" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/legger/carlyle"              , 'name' => "犯罪組織/カーライル" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/legger/etc"                  , 'name' => "犯罪組織/その他" );
$cateList[$c++] = array( 'sidx' => 1 , 'id' => "cast/legger"                      , 'name' => "犯罪組織全般" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/media/press"                 , 'name' => "メディア/報道関係" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/media/entertainment"         , 'name' => "メディア/芸能界" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/media/etc"                   , 'name' => "メディア/その他" );
$cateList[$c++] = array( 'sidx' => 1 , 'id' => "cast/media"                       , 'name' => "メディア全般" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/astral/exorcist"             , 'name' => "アストラル/退魔師・術師" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/astral/sanctuary"            , 'name' => "アストラル/真教・聖母殿" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/astral/ayakashi"             , 'name' => "アストラル/アヤカシ" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/astral/etc"                  , 'name' => "アストラル/その他" );
$cateList[$c++] = array( 'sidx' => 1 , 'id' => "cast/astral"                      , 'name' => "アストラル全般" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/school"                      , 'name' => "学生・学校関係者" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/tatara"                      , 'name' => "技術者・医者等" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/etc"                         , 'name' => "その他" );
$cateList[$c++] = array( 'sidx' => 1 , 'id' => "guest"                            , 'name' => "全ゲスト（ネタバレ注意）" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "guest/fighter"                    , 'name' => "Guest/戦闘系" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "guest/intelli"                    , 'name' => "Guest/情報系" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "guest/company"                    , 'name' => "Guest/企業系" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "guest/fixer"                      , 'name' => "Guest/フィクサー" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "guest/legger"                     , 'name' => "Guest/犯罪組織系" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "guest/police"                     , 'name' => "Guest/警察関係" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "guest/militaly"                   , 'name' => "Guest/軍全般" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "guest/religion/sanctuary"         , 'name' => "Guest/真教/聖母領" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "guest/religion/catharsis"         , 'name' => "Guest/真教/浄化派" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "guest/religion/etc"               , 'name' => "Guest/真教/その他" );
$cateList[$c++] = array( 'sidx' => 1 , 'id' => "guest/religion"                   , 'name' => "Guest/真教全般" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "guest/japanese"                   , 'name' => "Guest/日本人" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "guest/media"                      , 'name' => "Guest/メディア関係者" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "guest/astral/exorcist"            , 'name' => "Guest/アストラル/退魔師" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "guest/astral/ayakashi"            , 'name' => "Guest/アストラル/アヤカシ" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "guest/astral/etc"                 , 'name' => "Guest/アストラル/その他" );
$cateList[$c++] = array( 'sidx' => 1 , 'id' => "guest/astral"                     , 'name' => "Guest/アストラル全般" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "guest/school"                     , 'name' => "Guest/学生・学校関係者" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "guest/etc"                        , 'name' => "Guest/その他" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "guest/target"                     , 'name' => "Guest/賞金首" );

$cateList[$c++] = array( 'sidx' => 1 , 'id' => "all"                              , 'name' => "全キャラクタ" );

$cateList[$c++] = array( 'sidx' => 1 , 'id' => "sample"                           , 'name' => "サンプルキャラクタ" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "sample/official"                  , 'name' => "サンプル/F.E.A.R.公式" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "sample/npcdata"                   , 'name' => "サンプル/NPCデータ" );
/* $cateList[$c++] = array( 'sidx' =>  , 'id' => , 'name' => "" ); */
$cateList['num'] = $c;


// 入力フォーム制限長
$formSize['player'] = 80;
$formSize['category'] = 40;
$formSize['name'] = 80;
$formSize['post'] = 80;
$formSize['citizen'] = 20;
$formSize['age'] = 20;
$formSize['jender'] = 20;
$formSize['height'] = 20;
$formSize['weight'] = 20;
$formSize['eyes'] = 40;
$formSize['hair'] = 40;
$formSize['skin'] = 40;
$formSize['birthday'] = 40;
$formSize['photo'] = 255;
$formSize['exp'] = 40;
$formSize['pub_skill'] = 8192;
$formSize['spc_skill'] = 8192;
$formSize['items'] = 8192;
$formSize['profile'] = 8192;
$formSize['comment'] = 8192;


// テーブル定義
$tblScheme = array(
	array( 'pri' => TRUE,  'type' => "INTEGER", 'name' => "cid"),			// ID番号
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "player"),		// プレイヤー
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "passwd"),		// パスワード
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "regist"),		// 登録日
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "updtime"),		// 最終更新日
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "name"),			// 名前（ハンドル含む）
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "category"),		// カテゴリID
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "cat_tags"),		// カテゴリタグ
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "post"),			// 職業/所属
	array( 'pri' => FALSE, 'type' => "INTEGER", 'name' => "style1"),		// スタイル１
	array( 'pri' => FALSE, 'type' => "INTEGER", 'name' => "style2"),		// スタイル２
	array( 'pri' => FALSE, 'type' => "INTEGER", 'name' => "style3"),		// スタイル３
	array( 'pri' => FALSE, 'type' => "INTEGER", 'name' => "persona"),		// ペルソナ
	array( 'pri' => FALSE, 'type' => "INTEGER", 'name' => "keyst"),			// キー
	array( 'pri' => FALSE, 'type' => "INTEGER", 'name' => "reason_ab"),		// 理性能力値
	array( 'pri' => FALSE, 'type' => "INTEGER", 'name' => "reason_ct"),		// 理性制御値
	array( 'pri' => FALSE, 'type' => "INTEGER", 'name' => "passion_ab"),	// 感情能力値
	array( 'pri' => FALSE, 'type' => "INTEGER", 'name' => "passion_ct"),	// 感情制御値
	array( 'pri' => FALSE, 'type' => "INTEGER", 'name' => "life_ab"),		// 生命能力値
	array( 'pri' => FALSE, 'type' => "INTEGER", 'name' => "life_ct"),		// 生命制御値
	array( 'pri' => FALSE, 'type' => "INTEGER", 'name' => "mundane_ab"),	// 外界能力値
	array( 'pri' => FALSE, 'type' => "INTEGER", 'name' => "mundane_ct"),	// 外界制御値
	array( 'pri' => FALSE, 'type' => "INTEGER", 'name' => "combatspeed"),	// CombatSpeed
	array( 'pri' => FALSE, 'type' => "INTEGER", 'name' => "actionrank"),	// ActionRank
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "lifepass"),		// ライフパス
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "citizen"),		// 市民ID
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "age"),			// 年齢
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "jender"),		// 性別
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "height"),		// 身長
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "weight"),		// 体重
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "eyes"),			// 瞳の色
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "hair"),			// 髪の色
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "skin"),			// 肌の色
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "birthday"),		// 誕生日
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "photo"),			// 
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "exp"),			// 消費経験点
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "pub_skill"),		// 一般技能
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "spc_skill"),		// 特殊技能
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "items"),			// 装備
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "profile"),		// 略歴
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "comment")		// コメント
);

?>
