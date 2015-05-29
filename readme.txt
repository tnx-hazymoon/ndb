トーキョーＮ◎ＶＡ　キャラクタデータベース

----------------------------------------
▼はじめに

本システムは、トーキョーＮ◎ＶＡ THE AXLERATION で使用するキャラクタを管理するためのウェブアプリケーションです。


----------------------------------------
▼システム構成

[ndb]
	ndb.php
	ndb_install.php
	ndb_style.css
	btd_form.js
	nd.png
	index.html
	category.html
	readme.txt

[ndb/inc]
	.htaccess
	define.php
	libs.php
	funcs.php
	exec.php
	html_header.php
	html_fotter.php
	page_header.php
	page_footer.php

[ndb/cont]
	abstract.php
	delete.php
	duplicate.php
	edit.php
	error.php
	list.php
	pdfview.php
	profile.php
	regist.php
	xmlprof.php


----------------------------------------
▼前提

本システムはPHPスクリプトで構成されています。
PHP5以上を実行することのできるウェブサーバを御用意ください。

DBエンジンはSQLiteを使用しておりますので、DBサーバは必要ありません。

お使いのPHPで、
	マルチバイト文字列関数
	SQLite関数（SQLite3クラスとは異なります。）
が使用できることを確認してください。

PDF作成のため、FPDFライブラリにjapaneseパッチを適用した版を使用しています。
FPDF公式ページからFPDF本体とjapaneseパッチを入手し、適当なフォルダにインストールしてください。

	※FPDF公式サイト
	http://www.fpdf.org/

----------------------------------------
▼インストール

その１）ndb/inc/define.phpの修正
	3行目: SQLiteで使用するDBファイルを収容するフォルダ名を記述する。（末尾に'/'は付けないこと）
	4行目: SQLiteで使用するDBファイル名を記述する。
	8行目: 管理者用パスワードを変更する。
	24行目: 親サイトのURLを記述する。
	31行目: FDPFをインストールしたフォルダ名を記述する。（末尾に'/'は付けないこと）

その２）category.htmlの修正
	211行目: 親サイトのURLを記述する。

その３）DBテーブル作成
	ブラウザで http://(ndb一式をインストールしたパス)/ndb/ndb_install.php を呼び出してください。
	ndb/inc/define.php に設定した管理者用パスワードを入力し、[実行]ボタンをクリックします。
	「DBファイルを作成しました。」と表示されたら完了です。

	※作成後は、いたずら防止のため ndb_install.php を削除しておくことをお勧めします。


----------------------------------------
▼動作確認

ブラウザで http://(ndb一式をインストールしたパス)/ndb/ndb.php を呼び出してください。


----------------------------------------
▼著作権

本システムの著作権は「よっち」が保持しておりますが、改造や再配布を妨げるものではありません。
ただし、再配布の際、本ドキュメントは改変せず、そのまま同梱してください。
改造等で本ドキュメントの内容に変更の必要が生じた場合も、変更を反映したドキュメントを別に用意してください。


本システムの画面デザインは、「ガニメデつちのこ」氏の開発された「Ｎ◎ＶＡキャラデータベースＣＧＩ」をベースに開発いたしました。

ガニメデごすぺらーず
http://www.aurora.dti.ne.jp/~motacila/gospel/index.html


「トーキョーＮ◎ＶＡ THE AXLERATION」は有限会社ファーイースト・アミューズメント・リサーチ及び有限会社ゲーム・フィールドの著作物です。

F.E.A.R.公式サイト
http://www.fear.co.jp/

トーキョーＮ◎ＶＡ THE ALERATION 公式サイト
http://www.fear.co.jp/novax/index.htm



----------------------------------------
▼謝辞

活動の場を提供していただいている《難攻不落》っ!!!の揚紅龍氏をはじめとするプレイヤー諸氏に深く感謝いたします。

《難攻不落》っ!!!
http://www.huraku.com/



----------------------------------------
2013年9月11日 よっち

よっち's Ｎ◎ＶＡページ
http://navyleague.jp/nova/

