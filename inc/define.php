<?php
// �ǡ����١�������
$ndbDB['dir']  = "��DB�ե��������Ƥ���ե����̾��������'/'���դ��ʤ���";
$ndbDB['file'] = $ndbDB['dir'] . "/" . "��DB�ե�����̾";
$ndbDB['tbl']  = "nova_ax_table";

// ǧ���ѥѥ����
$root_pass = "rootpassword";	// �������ѥѥ����

// �Խ���JavaScript
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
$HomePage = "���ƥ����Ȥ�URL";
$defaultSearchCategory = "cast";

// DB��³ID
$dbm = 0;

// FPDF�饤�֥��
$fpdfDir = "��FPDF�饤�֥��Υ��󥹥ȡ���ե������������'/'���դ��ʤ���";


// ��������
$c = 0;
$styleList[$c++] = array( 'no' =>   0, 'name' => "���֥�",       'alf' => "kabuki"     , 'knj' => "�����", 'pow' => array( 0,3, 3,5, 2,4, 2,4 ) );
$styleList[$c++] = array( 'no' =>   1, 'name' => "�Х���",       'alf' => "vasara"     , 'knj' => "��հ��", 'pow' => array( 3,5, 2,5, 1,3, 1,3 ) );
$styleList[$c++] = array( 'no' =>   2, 'name' => "������",       'alf' => "tatara"     , 'knj' => "Ƨ��"  , 'pow' => array( 3,5, 1,3, 1,3, 2,5 ) );
$styleList[$c++] = array( 'no' =>   3, 'name' => "�ߥ��ȥ쥹",   'alf' => "mistress"   , 'knj' => "�񵮿�", 'pow' => array( 1,4, 3,5, 1,2, 2,5 ) );
$styleList[$c++] = array( 'no' =>   4, 'name' => "���֥�",       'alf' => "kabuto"     , 'knj' => "��"    , 'pow' => array( 2,4, 1,4, 3,5, 1,3 ) );
$styleList[$c++] = array( 'no' =>   5, 'name' => "���ꥹ��",     'alf' => "karisma"    , 'knj' => "����"  , 'pow' => array( 1,3, 3,5, 0,3, 3,5 ) );
$styleList[$c++] = array( 'no' =>   6, 'name' => "�ޥͥ���",     'alf' => "manikin"    , 'knj' => "������", 'pow' => array( 1,3, 3,5, 2,5, 1,3 ) );
$styleList[$c++] = array( 'no' =>   7, 'name' => "����",         'alf' => "kaze"       , 'knj' => "��"    , 'pow' => array( 2,5, 1,3, 2,4, 2,4 ) );
$styleList[$c++] = array( 'no' =>   8, 'name' => "�ե�����",     'alf' => "fate"       , 'knj' => "ʿ����", 'pow' => array( 2,5, 2,5, 1,3, 2,3 ) );
$styleList[$c++] = array( 'no' =>   9, 'name' => "����ޥ�",     'alf' => "kuro-maku"  , 'knj' => "����"  , 'pow' => array( 1,3, 2,5, 1,3, 3,5 ) );
$styleList[$c++] = array( 'no' =>  10, 'name' => "��������",     'alf' => "exek."      , 'knj' => "������", 'pow' => array( 2,5, 1,3, 1,3, 3,5 ) );
$styleList[$c++] = array( 'no' =>  11, 'name' => "������",       'alf' => "katana"     , 'knj' => "��"    , 'pow' => array( 2,4, 0,4, 3,5, 2,3 ) );
$styleList[$c++] = array( 'no' =>  12, 'name' => "������",       'alf' => "kugutsu"    , 'knj' => "��Ѵ"  , 'pow' => array( 3,5, 0,4, 3,5, 1,2 ) );
$styleList[$c++] = array( 'no' =>  13, 'name' => "����",         'alf' => "kage"       , 'knj' => "��"    , 'pow' => array( 3,4, 0,5, 2,4, 2,3 ) );
$styleList[$c++] = array( 'no' =>  14, 'name' => "���㥯��",     'alf' => "chakra"     , 'knj' => "�ְ�"  , 'pow' => array( 2,5, 2,5, 3,5, 0,1 ) );
$styleList[$c++] = array( 'no' =>  15, 'name' => "��å���",     'alf' => "legger"     , 'knj' => "����"  , 'pow' => array( 2,4, 2,4, 2,4, 1,4 ) );
$styleList[$c++] = array( 'no' =>  16, 'name' => "���֥ȥ��",   'alf' => "kabuto-wari", 'knj' => "����"  , 'pow' => array( 2,4, 0,4, 2,3, 3,5 ) );
$styleList[$c++] = array( 'no' =>  17, 'name' => "�ϥ�������", 'alf' => "hilander"   , 'knj' => "������", 'pow' => array( 2,5, 2,5, 0,1, 3,5 ) );
$styleList[$c++] = array( 'no' =>  18, 'name' => "�ޥ䥫��",     'alf' => "mayakashi"  , 'knj' => "�����", 'pow' => array( 3,5, 3,5, 0,2, 1,4 ) );
$styleList[$c++] = array( 'no' =>  19, 'name' => "�ȡ�����",     'alf' => "talkie"     , 'knj' => "����", 'pow' => array( 2,5, 3,5, 1,3, 1,3 ) );
$styleList[$c++] = array( 'no' =>  20, 'name' => "����",         'alf' => "inu"        , 'knj' => "��"    , 'pow' => array( 3,5, 1,3, 2,5, 1,3 ) );
$styleList[$c++] = array( 'no' =>  21, 'name' => "�˥塼��",     'alf' => "neuro"      , 'knj' => "����ϩ", 'pow' => array( 3,5, 2,5, 0,1, 2,5 ) );

$styleList[$c++] = array( 'no' =>  -1, 'name' => "�ҥ륳",       'alf' => "hiruko"     , 'knj' => "���Ȼ�", 'pow' => array( 1,3, 3,5, 3,5, 0,3 ) );
$styleList[$c++] = array( 'no' =>  -2, 'name' => "������",     'alf' => "kurogane"   , 'knj' => "����",   'pow' => array( 3,5, 2,4, 2,4, 0,3 ) );
$styleList[$c++] = array( 'no' =>  -7, 'name' => "���饷",       'alf' => "arashi"     , 'knj' => "��    ", 'pow' => array( 3,5, 0,3, 1,3, 3,5 ) );
$styleList[$c++] = array( 'no' =>  -9, 'name' => "�����ॷ��",   'alf' => "kage-musya" , 'knj' => "�����", 'pow' => array( 2,4, 3,5, 2,4, 0,3 ) );
$styleList[$c++] = array( 'no' => -18, 'name' => "���䥫��",     'alf' => "ayakashi"   , 'knj' => "��"    , 'pow' => array( 0,5, 1,5, 3,2, 3,4 ) );

// �饤�եѥ� �ֹ楳����
$lifePassCard = NULL;
$lifePassCard[ 0] = "Joker";
$lifePassCard[ 1] = "��";
$lifePassCard[ 2] = "��";
$lifePassCard[ 3] = "��";
$lifePassCard[ 4] = "��";
$lifePassCard[ 5] = "��";
$lifePassCard[ 6] = "��";
$lifePassCard[ 7] = "��";
$lifePassCard[ 8] = "��";
$lifePassCard[ 9] = "10";
$lifePassCard[10] = "��";
$lifePassCard[11] = "��";
$lifePassCard[12] = "��";
$lifePassCard[13] = "��";
$lifePassCard[-1] = "��";

$lifePassPlace = NULL;
$lifePassPlace = array( 'id' => "NOVA", 'name' => "�Ρ��֣�" );

// �饤�եѥ��м�ɽ[N��VA]
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

// �饤�եѥ��и�ɽ[N��VA]
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

// �饤�եѥ����ɽ[N��VA]
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


// ����饯��ʬ�����
$c = 0;
$cateList[$c++] = array( 'sidx' => 1 , 'id' => "cast"                             , 'name' => "�����㥹��" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/freelance/fighter/assassin"  , 'name' => "��Ʈ��/������" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/freelance/fighter/hunter"    , 'name' => "��Ʈ��/�޶�Ԥ�" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/freelance/fighter/street"    , 'name' => "��Ʈ��/�ӻ���" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/freelance/fighter/bodyguard" , 'name' => "��Ʈ��/�ܥǥ�������" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/freelance/fighter/etc"       , 'name' => "��Ʈ��/����¾" );
$cateList[$c++] = array( 'sidx' => 1 , 'id' => "cast/freelance/fighter"           , 'name' => "��Ʈ������" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/freelance/intelli/detective" , 'name' => "�����/õ��" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/freelance/intelli/neuro"     , 'name' => "�����/�˥塼��" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/freelance/intelli/fixer"     , 'name' => "�����/�ե�������" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/freelance/intelli/etc"       , 'name' => "�����/����¾" );
$cateList[$c++] = array( 'sidx' => 1 , 'id' => "cast/freelance/intelli"           , 'name' => "���������" );
$cateList[$c++] = array( 'sidx' => 1 , 'id' => "cast/freelance"                   , 'name' => "�ե꡼�������" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/company/chihaya"             , 'name' => "���/����" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/company/megacorp"            , 'name' => "���/�ᥬ������" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/company/etc"                 , 'name' => "���/����¾" );
$cateList[$c++] = array( 'sidx' => 1 , 'id' => "cast/company"                     , 'name' => "�������" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/police/blakkhounds"          , 'name' => "�ٻ�/�֥�å��ϥ����" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/police/corporate"            , 'name' => "�ٻ�/��ȷٻ�" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/police/etc"                  , 'name' => "�ٻ�/����¾" );
$cateList[$c++] = array( 'sidx' => 1 , 'id' => "cast/police"                      , 'name' => "�ٻ��ط�����" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/legger/kawato"               , 'name' => "�Ⱥ��ȿ�/����Ϣ��" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/legger/sangoukai"            , 'name' => "�Ⱥ��ȿ�/�����" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/legger/carlyle"              , 'name' => "�Ⱥ��ȿ�/�����饤��" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/legger/etc"                  , 'name' => "�Ⱥ��ȿ�/����¾" );
$cateList[$c++] = array( 'sidx' => 1 , 'id' => "cast/legger"                      , 'name' => "�Ⱥ��ȿ�����" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/media/press"                 , 'name' => "��ǥ���/��ƻ�ط�" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/media/entertainment"         , 'name' => "��ǥ���/��ǽ��" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/media/etc"                   , 'name' => "��ǥ���/����¾" );
$cateList[$c++] = array( 'sidx' => 1 , 'id' => "cast/media"                       , 'name' => "��ǥ�������" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/astral/exorcist"             , 'name' => "�����ȥ��/����ա��ѻ�" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/astral/sanctuary"            , 'name' => "�����ȥ��/������������" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/astral/ayakashi"             , 'name' => "�����ȥ��/���䥫��" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/astral/etc"                  , 'name' => "�����ȥ��/����¾" );
$cateList[$c++] = array( 'sidx' => 1 , 'id' => "cast/astral"                      , 'name' => "�����ȥ������" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/school"                      , 'name' => "�������ع��ط���" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/tatara"                      , 'name' => "���Ѽԡ������" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "cast/etc"                         , 'name' => "����¾" );
$cateList[$c++] = array( 'sidx' => 1 , 'id' => "guest"                            , 'name' => "�������ȡʥͥ��Х���ա�" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "guest/fighter"                    , 'name' => "Guest/��Ʈ��" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "guest/intelli"                    , 'name' => "Guest/�����" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "guest/company"                    , 'name' => "Guest/��ȷ�" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "guest/fixer"                      , 'name' => "Guest/�ե�������" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "guest/legger"                     , 'name' => "Guest/�Ⱥ��ȿ���" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "guest/police"                     , 'name' => "Guest/�ٻ��ط�" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "guest/militaly"                   , 'name' => "Guest/������" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "guest/religion/sanctuary"         , 'name' => "Guest/����/������" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "guest/religion/catharsis"         , 'name' => "Guest/����/������" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "guest/religion/etc"               , 'name' => "Guest/����/����¾" );
$cateList[$c++] = array( 'sidx' => 1 , 'id' => "guest/religion"                   , 'name' => "Guest/��������" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "guest/japanese"                   , 'name' => "Guest/���ܿ�" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "guest/media"                      , 'name' => "Guest/��ǥ����ط���" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "guest/astral/exorcist"            , 'name' => "Guest/�����ȥ��/�����" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "guest/astral/ayakashi"            , 'name' => "Guest/�����ȥ��/���䥫��" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "guest/astral/etc"                 , 'name' => "Guest/�����ȥ��/����¾" );
$cateList[$c++] = array( 'sidx' => 1 , 'id' => "guest/astral"                     , 'name' => "Guest/�����ȥ������" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "guest/school"                     , 'name' => "Guest/�������ع��ط���" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "guest/etc"                        , 'name' => "Guest/����¾" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "guest/target"                     , 'name' => "Guest/�޶��" );

$cateList[$c++] = array( 'sidx' => 1 , 'id' => "all"                              , 'name' => "������饯��" );

$cateList[$c++] = array( 'sidx' => 1 , 'id' => "sample"                           , 'name' => "����ץ륭��饯��" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "sample/official"                  , 'name' => "����ץ�/F.E.A.R.����" );
$cateList[$c++] = array( 'sidx' => 0 , 'id' => "sample/npcdata"                   , 'name' => "����ץ�/NPC�ǡ���" );
/* $cateList[$c++] = array( 'sidx' =>  , 'id' => , 'name' => "" ); */
$cateList['num'] = $c;


// ���ϥե���������Ĺ
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


// �ơ��֥����
$tblScheme = array(
	array( 'pri' => TRUE,  'type' => "INTEGER", 'name' => "cid"),			// ID�ֹ�
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "player"),		// �ץ쥤�䡼
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "passwd"),		// �ѥ����
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "regist"),		// ��Ͽ��
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "updtime"),		// �ǽ�������
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "name"),			// ̾���ʥϥ�ɥ�ޤ��
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "category"),		// ���ƥ���ID
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "cat_tags"),		// ���ƥ��꥿��
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "post"),			// ����/��°
	array( 'pri' => FALSE, 'type' => "INTEGER", 'name' => "style1"),		// �������룱
	array( 'pri' => FALSE, 'type' => "INTEGER", 'name' => "style2"),		// �������룲
	array( 'pri' => FALSE, 'type' => "INTEGER", 'name' => "style3"),		// �������룳
	array( 'pri' => FALSE, 'type' => "INTEGER", 'name' => "persona"),		// �ڥ륽��
	array( 'pri' => FALSE, 'type' => "INTEGER", 'name' => "keyst"),			// ����
	array( 'pri' => FALSE, 'type' => "INTEGER", 'name' => "reason_ab"),		// ����ǽ����
	array( 'pri' => FALSE, 'type' => "INTEGER", 'name' => "reason_ct"),		// ����������
	array( 'pri' => FALSE, 'type' => "INTEGER", 'name' => "passion_ab"),	// ����ǽ����
	array( 'pri' => FALSE, 'type' => "INTEGER", 'name' => "passion_ct"),	// ����������
	array( 'pri' => FALSE, 'type' => "INTEGER", 'name' => "life_ab"),		// ��̿ǽ����
	array( 'pri' => FALSE, 'type' => "INTEGER", 'name' => "life_ct"),		// ��̿������
	array( 'pri' => FALSE, 'type' => "INTEGER", 'name' => "mundane_ab"),	// ����ǽ����
	array( 'pri' => FALSE, 'type' => "INTEGER", 'name' => "mundane_ct"),	// ����������
	array( 'pri' => FALSE, 'type' => "INTEGER", 'name' => "combatspeed"),	// CombatSpeed
	array( 'pri' => FALSE, 'type' => "INTEGER", 'name' => "actionrank"),	// ActionRank
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "lifepass"),		// �饤�եѥ�
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "citizen"),		// ��̱ID
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "age"),			// ǯ��
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "jender"),		// ����
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "height"),		// ��Ĺ
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "weight"),		// �ν�
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "eyes"),			// Ʒ�ο�
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "hair"),			// ȱ�ο�
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "skin"),			// ȩ�ο�
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "birthday"),		// ������
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "photo"),			// 
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "exp"),			// ����и���
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "pub_skill"),		// ���̵�ǽ
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "spc_skill"),		// �ü쵻ǽ
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "items"),			// ����
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "profile"),		// ά��
	array( 'pri' => FALSE, 'type' => "TEXT",    'name' => "comment")		// ������
);

?>
