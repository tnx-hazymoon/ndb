<?php
include("./inc/define.php");
include("./inc/libs.php");
include("./inc/funcs.php");


Class CMDListTest extends PHPUnit_Framework_TestCase {

	public static function setUpBeforeClass()
	{
		global $ndbDB;

		$ndbDB['dir']  = "tests/db";
		$ndbDB['file'] = $ndbDB['dir'] . "/" . "tests.sqlite";
		$ndbDB['tbl']  = "nova_ax_table";

		$data['player'] = 'プレイヤー';
		$data['name'] = '運び屋';
		$data['category'] = 'cast/sample';
		$data['post'] = 'フリーランス';
		$data['style1'] = '7';
		$data['style2'] = '3';
		$data['style3'] = '21';
		$data['persona'] = '1';
		$data['keyst'] = '1';
		$data['reason_ab'] = '7';
		$data['reason_ct'] = '14';
		$data['passion_ab'] = '6';
		$data['passion_ct'] = '13';
		$data['life_ab'] = '3';
		$data['life_ct'] = '7';
		$data['mundane_ab'] = '6';
		$data['mundane_ct'] = '14';
		$data['combatspeed'] = '8';
		$data['actionrank'] = '1';
		$data['lifepass'] = 'ライフパス';
		$data['citizen'] = 'C-';
		$data['age'] = '99';
		$data['jender'] = '♂';
		$data['height'] = '190';
		$data['weight'] = '100';
		$data['eyes'] = 'Black';
		$data['hair'] = 'Black';
		$data['skin'] = 'Yellow';
		$data['birthday'] = '1/1';
		$data['photo'] = 'http://example.com/';
		$data['exp'] = '0';
		$data['pub_skill'] = '一般技能';
		$data['spc_skill'] = 'スタイル特技';
		$data['items'] = 'アウトフィット';
		$data['profile'] = '略歴';
		$data['comment'] = 'コメント';
		
		db_open();
		create_table();
		char_regist('pass', $data);
		db_close();	
	}

	public static function tearDownAfterClass()
	{
		global $ndbDB;
		if( file_exists( $ndbDB['dir'] ) == TRUE 
				&& file_exists( $ndbDB['file'] ) == TRUE ) {
			unlink( $ndbDB['file'] );
		}
	}

	public function testList() {
		global $ndbDB;
		global $dbID;
		global $defaultSearchCategory;
		global $cateList;
		global $listMaxPerPage;
		include("./inc/exec.php");
		$this->assertEquals(1, $CONT_CHARNUM);
		$this->assertEquals(1, count($CONT_DATA));
	}

}
?>
