<?php

include("./inc/define.php");
include("./inc/funcs.php");

Class SQLite3Tests extends PHPUnit_Framework_TestCase
{

	public static function setUpBeforeClass()
	{
		global $ndbDB;

		$ndbDB['dir']  = "tests/db";
		$ndbDB['file'] = $ndbDB['dir'] . "/" . "tests.sqlite";
		$ndbDB['tbl']  = "nova_ax_table";

		if( file_exists( $ndbDB['dir'] ) == FALSE ) {
			mkdir( $ndbDB['dir'], 0777, TRUE);
		}
		
		db_open();
		create_table();
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

	/**
	 * @test
	 */
	public function testInsert() {
		$data['player'] = 'プレイヤー';
		$data['name'] = '運び屋';
		$data['category'] = 'sample/official';
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
		char_regist('pass', $data);

		global $dbID;
		$result = $dbID->querySingle('select count(*) from nova_ax_table'); 
		db_close();
		
		$this->assertEquals(1, $result);
	}

	/**
	 * @test
	 * @depends testInsert
	 */
	public function testUpdate() {
		$data['player'] = 'プレイヤー_変更';
		$data['name'] = '運び屋_変更';
		$data['category'] = 'sample/official_変更';
		$data['post'] = 'フリーランス_変更';
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
		$data['lifepass'] = 'ライフパス_変更';
		$data['citizen'] = 'C-_変更';
		$data['age'] = '99_変更';
		$data['jender'] = '♂_変更';
		$data['height'] = '190_変更';
		$data['weight'] = '100_変更';
		$data['eyes'] = 'Black_変更';
		$data['hair'] = 'Black_変更';
		$data['skin'] = 'Yellow_変更';
		$data['birthday'] = '1/1_変更';
		$data['photo'] = 'http://example.com/_変更';
		$data['exp'] = '0_変更';
		$data['pub_skill'] = '一般技能_変更';
		$data['spc_skill'] = 'スタイル特技_変更';
		$data['items'] = 'アウトフィット_変更';
		$data['profile'] = '略歴_変更';
		$data['comment'] = 'コメント_変更';

		db_open();
		global $dbID;
		$before = $dbID->query('select * from nova_ax_table where cid=1');
		// var_dump($before->fetchArray());
		char_update(1, 'pass', $data);

		$result = $dbID->query('select * from nova_ax_table where cid=1');
		// var_dump($result->fetchArray());
		db_close();
	}

	/**
	 * @test
	 * @depends testUpdate
	 */
	public function testNumRows() {
		db_open();
		global $dbID;
		$result = $dbID->query('select * from nova_ax_table');
		$num = num_rows($result);
		db_close();
		$this->assertEquals(1, $num);
	}

	/**
	 * @test
	 * @depends testNumRows
	 */
	public function testCharRead() {
		db_open();
		$result = char_read(1);
		db_close();
		// TODO assert
	}

	/**
	 * @test
	 * @depends testCharRead
	 */
	public function testChangePasswd() {
		db_open();
		global $dbID;
		char_chpass(1, 'pass', 'pass2');
		$result = $dbID->query('select * from nova_ax_table where cid=1');
		$row = $result->fetchArray();
		$this->assertEquals('pass2', $row['passwd']);
		db_close();
	}

	/**
	 * @test
	 * @depends testChangePasswd
	 */
	public function testPasswdCheckCorrect() {
		db_open();
		global $dbID;
		$result = char_passchk(1, 'pass2');
		db_close();
		$this->assertEquals(TRUE, $result);
	}

	/**
	 * @test
	 * @depends testPasswdCheckCorrect
	 */
	public function testPasswdCheckWrong() {
		db_open();
		global $dbID;
		$result = char_passchk(1, 'wrong');
		db_close();
		$this->assertEquals(FALSE, $result);
	}

	/**
	 * @test
	 * @depends testPasswdCheckWrong
	 */
	public function testPasswdCheckNotFound() {
		db_open();
		global $dbID;
		$result = char_passchk(2, 'pass2');
		db_close();
		$this->assertEquals(FALSE, $result);
	}

	/**
	 * @test
	 * @depends testPasswdCheckNotFound
	 */
	public function testDelete() {
		db_open();
		global $dbID;
		char_delete(1);
		$result = $dbID->querySingle('select count(*) from nova_ax_table');
		db_close();
		$this->assertEquals(0, $result);
	}
}
?>
