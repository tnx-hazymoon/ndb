				// 理性  感情  生命  外界
powno = new Array( 0, 0, 0, 0, 0, 0, 0, 0 );
pow00 = new Array( 0, 3, 3, 5, 2, 4, 2, 4 );	// カブキ
pow01 = new Array( 3, 5, 2, 5, 1, 3, 1, 3 );	// バサラ
pow02 = new Array( 3, 5, 1, 3, 1, 3, 2, 5 );	// タタラ
pow03 = new Array( 1, 4, 3, 5, 1, 2, 2, 5 );	// ミストレス
pow04 = new Array( 2, 4, 1, 4, 3, 5, 1, 3 );	// カブト
pow05 = new Array( 1, 3, 3, 5, 0, 3, 3, 5 );	// カリスマ
pow06 = new Array( 1, 3, 3, 5, 2, 5, 1, 3 );	// マネキン
pow07 = new Array( 2, 5, 1, 3, 2, 4, 2, 4 );	// カゼ
pow08 = new Array( 2, 5, 2, 5, 1, 3, 2, 3 );	// フェイト
pow09 = new Array( 1, 3, 2, 5, 1, 3, 3, 5 );	// クロマク
pow10 = new Array( 2, 5, 1, 3, 1, 3, 3, 5 );	// エグゼク
pow11 = new Array( 2, 4, 0, 4, 3, 5, 2, 3 );	// カタナ
pow12 = new Array( 3, 5, 0, 4, 3, 5, 1, 2 );	// クグツ
pow13 = new Array( 3, 4, 0, 5, 2, 4, 2, 3 );	// カゲ
pow14 = new Array( 2, 5, 2, 5, 3, 5, 0, 1 );	// チャクラ
pow15 = new Array( 2, 4, 2, 4, 2, 4, 1, 4 );	// レッガー
pow16 = new Array( 2, 4, 0, 4, 2, 3, 3, 5 );	// カブトワリ
pow17 = new Array( 2, 5, 2, 5, 0, 1, 3, 5 );	// ハイランダー
pow18 = new Array( 3, 5, 3, 5, 0, 2, 1, 4 );	// マヤカシ
pow19 = new Array( 2, 5, 3, 5, 1, 3, 1, 3 );	// トーキー
pow20 = new Array( 3, 5, 1, 3, 2, 5, 1, 3 );	// イヌ
pow21 = new Array( 3, 5, 2, 5, 0, 1, 2, 5 );	// ニューロ
pow22 = new Array( 1, 3, 3, 5, 3, 5, 0, 3 );	// ヒルコ
pow23 = new Array( 3, 5, 2, 4, 2, 4, 0, 3 );	// クロガネ
pow24 = new Array( 3, 5, 0, 3, 1, 3, 3, 5 );	// アラシ
pow25 = new Array( 2, 4, 3, 5, 2, 4, 0, 3 );	// カゲムシャ
pow26 = new Array( 0, 5, 1, 5, 3, 2, 3, 4 );	// アヤカシ

s_skno = "＝スタイル空欄＝";
s_sk00 = "▼カブキ\rコミックヒーロー\rシャウト\rシャッフル\r挑発\r早変わり\rマエストロ\rミリオンヒット\rラッキーストライク\r†カース\r†風の噂\r†セカンドディール\r†熱狂\r†ハードラック\r†BGMチェンジ\r※アートバトル\r※大逆転\r※メッセージ\r\r運気変換\rカースⅡ\rスーパークール\r熱狂Ⅱ\rバンドワゴン\r†オンステージ\r†フェイタルラック\r※ロックンロール\r\rステージライト\r挑発Ⅱ\rトップスター\rファッションリーダー\rプリズムスター\r†番狂わせ\r†ミラクルヒット\r※天地開闢\r\r運気変換Ⅱ\rグローリーパス\r勝負服\r退廃の眠り\r挑発Ⅲ\r†フール\r†メイクサムノイズ\r※青天の霹靂\r";
s_sk01 = "▼バサラ\r引き寄せ\r強化\r鋭刃\r通過\r障壁\r治癒\r変身\r斥力\r†力学\r†拡大\r†変化\r†転移\r†加速\r†円環\r※呪破\r※中和\r※蘇生\r元力付与\r†元力:光学(正)\r†元力:光学(負)\r†元力:電磁(正)\r†元力:電磁(負)\r†元力:火炎(正)\r†元力:火炎(負)\r†元力:疾風(正)\r†元力:疾風(負)\r†元力:水雲(正)\r†元力:水雲(負)\r†元力:大地(正)\r†元力:大地(負)\r†元力:重力\r†元力:器物\r†元力:生物\r†元力:虚無\r\r強化元力\r高位元力\r障壁Ⅱ\r拘束\r完全血統\r†理力武装\r†確率操作\r※多重発動\r\r具現者\r増幅者\r元力武装\r粉砕\r審判\r†元力:時間\r†念動力\r※分解消去\r\r大魔法使い\r元素魔弾\r符術\r呪物作成\r風水\r†修験者\r†破壊魔術\r※崩壊\r\r元力Ⅱ:光学(正)\r元力Ⅱ:光学(負)\r元力Ⅱ:電磁(正)\r元力Ⅱ:電磁(負)\r元力Ⅱ:火炎(正)\r元力Ⅱ:火炎(負)\r元力Ⅱ:疾風(正)\r元力Ⅱ:疾風(負)\r元力Ⅱ:水雲(正)\r元力Ⅱ:水雲(負)\r元力Ⅱ:大地(正)\r元力Ⅱ:大地(負)\r元力Ⅱ:重力\r元力Ⅱ:器物\r元力Ⅱ:生物\r元力Ⅱ:虚無\r元力Ⅱ:時間\r";
s_sk02 = "▼タタラ\r改造\r究極鑑定\rスーパードクター\r超スピード作業\r特許獲得\rパーソナルバリア\r発信器\rレプリカ\r†加速装置\r†アドバイス\r†教授\r†弱点看破\r†爆破工作\r†マキシマライズ\r※タイムマジック\r※ブレークダウン\r※マニピュレーション\r\rアドバイスⅡ\r改造Ⅱ\r改造武器\rショックアタック\r爆破工作Ⅱ\r†緊急手術\r†パーソナルバリアⅡ\r※超テク\r\rオーバーホール\rカスタマイズ\r出力向上\rスーパードクターⅡ\rハイボルテージ\r†テクノマンサー\r†魔改造\r※メイジン\r\rアジャスト\rオーバーホールⅡ\r奇跡の発明\rマキシマライズⅡ\rメカニック\r†専属技師\r†ツールアシスト\r※イミテイション\r";
s_sk03 = "▼ミストレス\r応援\rおしおき\r肝っ玉\r共感\rコンタクト\r微笑のベール\r女神の灯\r女神の抱擁\r†吉祥天\r†鼓舞\r†自己犠牲\r†声援\r†盾の乙女\r†母性本能\r※士気高揚\r※勝利の女神\r※女神の御手\r\r売り上げ\r乙女の口づけ\r声援Ⅱ\r女神の慈愛\r安らぎの場\r†ジャンヌダルク\r†不滅の灯\r※乙女の祝福\r\r愛の抱擁\rエール\r心の芯\r励ましの歌Ⅱ\r日だまりの歌\r†戦女神\r†励ましの歌\r※黄金の精神\r\r戦女神Ⅱ\r乙女の喝采\r千客万来\r盾の乙女Ⅱ\rパワーボイスⅡ\r†希望の果実\r†パワーボイス\r※刹那の時\r";
s_sk04 = "▼カブト\r一心同体\r金剛\r鉄壁\r仁王立ち\r八面六臂\r反射防御\r不動\r無敵防御\r†撃ち返し\r†カバーリング\r†自動防御\r†戦術\r†電光石火\r†八重垣\r※獅子心\r※ドレッドノート\r※フォーミダブル\r\r守護者\r最後の砦\r見えざる盾\r無敵防御Ⅱ\r勇名\r†金剛Ⅱ\r†盾打ち\r※攻防一体\r\r不屈なる者\r圧力封鎖\r騎士の備え\rシェイクオフ\r常在戦場\r†最後の砦Ⅱ\r†不破の盾\r※フラッシュガード\r\r危険感知\r堅牢なる盾\r鉄壁Ⅱ\rハードロック\r八重垣Ⅱ\r†ブレイクヒット\r†ポストマン\r※ドミナンス\r";
s_sk05 = "▼カリスマ\r演説\r寄進\rサブリミナル\r疾風迅雷\r陣頭指揮\r聖戦\r名声\r誘導尋問\r†扇動\r†狂信者\r†ゲシュタルト崩壊\r†サイコロジー\r†叱咤激励\r†集団催眠\r※威厳\r※洗脳\r※免罪符\r\r扇動Ⅱ\r聖戦Ⅱ\r時の人\r憎しみの的\r触れえざる者\r†親衛隊\r†名将\r※威風堂々\r\rエンカレッジ\r求心力\r精神鑑定\r徹底抗弁\rネゴシエート\r†弾丸の論撃\r†不滅の熱情\r※ダブルバインド\r\r解体屋\r北風と太陽\r旗印\r不滅の熱情Ⅱ\r揺さ振り\r†圧迫の尋問\r†ネイキッドロード\r※信念剥奪\r";
s_sk06 = "▼マネキン\r愛の交歓\r悪魔の密告\r一期一会\r大嫌い\r毒舌\r友達の輪\r一目惚れ\r誘惑\r†悪魔のささやき\r†アドレナライズ\r†お願い\r†破滅のささやき\r†人使い\r†魔女の呪い\r※口答え\r※ティアドロップ\r※魔女の叫び\r\r千載一遇\rパトロン\rへらず口\r魔女の指先\rマスコット\r†魔女の一刺し\r†ラブリーコール\r※ハートスティール\r\rアディクション\r運命の曲がり角\r花魁\rキャットシーフ\rステージガール\r†ハートプレジャー\r†ポイズンスマイル\r※アクトリス\r\r愛の泉\rオープンドア\rシークレットタイム\rスマイル＆クライ\rドリームタイム\r†笑顔でカバー\r†ファムファタル\r※オールユーニード\r";
s_sk07 = "▼カゼ\r曲芸飛行／走行\rクイックイヤー\r即席修理\rバーンナウト\rボンドカー\rライドオン\rライドファイト\rロケットスタート\r†エキサイトバトル\r†カバー＆ムーブ\r†スーパーチャージャー\r†ダイレクトロール\r†チャージ\r†ライトスピード\r※カミカゼ\r※スーパーソニック\r※マルチアクション\r\r栄光の道\rターンオーバー\rダイレクトロールⅡ\rピックアップ\rバーンナウトⅡ\r†ナイトホース\r†フェイントターン\r※シューティングスター\r\r疾駆者\rアクロバット\rオーバーテイク\rスリップストリーム\rスローダスト\r†エアトリック\r†ロケットスタートⅡ\r※アトモスフィール\r\r勝利の風\r疾風の如く\rマルチドライバー\rライドファイトⅡ\rロケットスタートⅢ\r†サイレントラン\r†デッドチェイサー\r※ゴーストライダー\r";
s_sk08 = "▼フェイト\r裏読み\rオシログラフ\r警報\r護身術\r事情通\rシャープアイ\rシャーロックホームズ\rカメラ記憶\r†信念の盾\r†サイコショック\r†スタイル感知\r†チェックメイト\r†ハードボイルド\r†ロングハンド\r※灰色の脳細胞\r※ミスリード\r※モノローグ\r\r探偵の勘\rチェックメイトⅡ\rトリック\rプロファイリング\rワイズクラック\r†裏付け調査\r†チェイスムーブ\r※ラストアクション\r\r勇気ある者\r急所外し\rタフネス\r探偵覚悟\rホームストリート\r†イレギュラーズ\r†覚悟の灯\r※ジャイアントキル\r\r覚悟の灯Ⅱ\r逆境の灯\r幻惑の閃き\r常套句\rボギー\r†オールドタイプ\r†信念の剣\r※消えない灯\r";
s_sk09 = "▼クロマク\r隠れ家\r影の謀略\r擬似合法\r心機一転\r根回し\r派遣調査\r身代わり\rミスタービッグ\r†黒い陰謀\r†帝王のオーラ\r†影の支配者\r†天災\r†ビッグオーダー\r†ブラックマーケット\r※吊し上げ\r※帝王の力\r※帝王の庭\r\r影の謀略Ⅱ\rミスタービッグⅡ\r仁義なき戦い\r帝王の意地\r帝王の気概\r†子飼い\r†支配者の拳\r※帝王の時間\r\r黒い囁き\r黒き指令\r黒幕の牙\r帝王の猛毒\r挽回のチャンス\r\r代理人\r一国一城\r権謀術数\r慈善事業\rレッドカーペット\r†悪徳の金貨\r†猛毒の金貨\r※処刑リスト\r\r裏帳簿\rお大尽\r黒い囁きⅡ\r調停者\r闇からの声\r†うごめく影\r†暗闇の渦\r※真の右腕\r\r絶対の忠誠[腹心専用]\r腹心の盾[腹心専用]\r";
s_sk10 = "▼エグゼク\r運命の輪\r機密情報\rコレクティブ\r産業スパイ\r情報操作\rホットライン\rライトスタッフ\rレイオフ\r†企業の一撃\r†支援要請\r†試作品\r†デスマーチ\r†マネーパワー\r†予算獲得\r※アタッチメント\r※パワーゲーム\r※プレコーション\r\r運命の輪Ⅱ\r戦術予報\rデスマーチⅡ\rブラックコーポⅡ\rホットラインⅡ\r†直属部署\r†ブラックコーポ\r※ラストオーダー\r\r専門部署\rグループサポート\r再召集\r送迎車\r追加予算\r†グループサポートⅡ\r†非合法セクション\r※プレジデント\r\r試作品Ⅱ\r資本投下\r情報解析班\rスピードシューター\rプレゼンテーション\r†企業の網\r†ビッグプロジェクト\r※セカンドプラン\r";
s_sk11 = "▼カタナ\r居合い\r鬼の爪\rカマイタチ\rハヤブサ\r見切り\r無風剣\r無明剣\rリフレクション\r†修羅\r†二刀流\r†斬裁剣\r†旋風撃\r†粉砕剣\r†峰打ち\r※影殺剣\r※突き返し\r※二天一流\r\r居合いⅡ\r豪傑\r剛力\rデスペラード\r二刀流Ⅱ\r†悪辣\r†ハヤブサⅡ\r※血戦\r\r剣鬼\r壱の太刀\r落葉切り\r剣圧\r納刀術\r†鬼神剣\r†瞬きの剣\r※餓狼剣\r\r愛刀\r三刀流\r死の眼光\r破砕剣\rハヤブサⅢ\r†切り払い\r†肉薄\r※疾風剣\r";
s_sk12 = "▼クグツ\r裏予算\r企業情報\r経歴洗浄\r仕込武器\r実験体\r社販購入\r忠誠\rマルチワーク\r†営業\r†強化手術\r†士道\r†製品知識\r†葉隠\r†バンザイ\r※献身\r※プレッシャー\r※リザレクション\r\r営業Ⅱ\r実験体Ⅱ\r製品知識Ⅱ\rパペット\rメガコーポ\r†肉鞘\r†メイデイ\r※成駒\r\r忠義者\r過剰励起\r支給品\rセキュリティブレイク\rリペアボディ\r†バルクフィスト\r†上級特権\r※業物\r\r関連企業\r牽制射撃\r高性能武器\r忠義の魂\r特殊権限\r†セルフサクリファイス\r†滅私奉公\r※ヒューマンギア\r";
s_sk13 = "▼カゲ\r暗器\r影化\r霞斬り\r胡蝶\r猿飛\r飛刃\rベイルアウト\r無面目\r†空蝉\r†完全奇襲\r†死点撃ち\r†地走り\r†毒術\r†フェイク\r※陽炎\r※分身\r※乱れ撃ち\r\r彫像\r毒打ち\r飛刃Ⅱ\r変異抜刀\r薬師走り\r†影縛り\r†影縫い\r※影手\r\r戒めの鎖\r殺しの美技\r忍術\r必殺絶技\r薬師走りⅡ\r†霧隠れ\r†死の長き手\r※朧月\r\r暗器Ⅱ\r影語り\r鶴翼の舞\r霧隠れⅡ\r盗品\r†スケルトンキー\r†目眩まし\r※水鏡\r";
s_sk14 = "▼チャクラ\r軽功\r縮地\r手刀\r心眼\r鉄身\r遠当\r刃乗り\r練気\r†乾坤一擲\r†功夫\r†周天功\r†鉄拳\r†徹し\r†ボディウォール\r※点穴\r※八卦\r※纏気\r\r拳法\r硬気功\r震脚\r不屈の闘志\r武名\r†呼吸\r†乱気\r※合気\r\r決闘者\r気炎万丈\r崩し技\r拳法Ⅱ\r手刀Ⅱ\r生命の泉\r鉄身Ⅱ\r鋼の心\r鋼の肉体\r爆速\r練気Ⅱ\r†牙の門\r†指弾\r†心技一体\r†震山衝\r†雷電\r※絶一門\r\rサイバーアデプト\r鉄の筋肉\rパルクール\r古い傷跡\r烈火の如く\r†岩の拳\r†気炎拳\r※黄龍\r";
s_sk15 = "▼レッガー\r威圧\rイカサマ\r裏ルート\r隠し武器\r仁義\r鉄砲玉\r手妻使い\r任侠道\r†追い打ち\r†追い込み\r†替え玉\r†急所攻撃\r†凶刃\r†ブラフ\r※ガン付け\r※口封じ\r※捨て身\r\rイカサマⅡ\rカモネギ\r虚言\rダーティファイト\rブラックメイル\r†派遣依頼\r†袋叩き\r※エンコ\r\r復讐者\r悪の花道\rファイブカード\r闇市\r用心棒\r†シノギ\r†度胸試し\r※悪魔の契約\r\r悪口雑言\rサイドビジネス\rぶっこ抜き\rぶっこ抜きⅡ\rみかじめ\r†カウンター\r†ハイエナ\r※怨念返し\r";
s_sk16 = "▼カブトワリ\rエイミング\rクイックドロー\rガンフー\rシャープシューター\r貫きの矢\r跳弾\r背面撃ち\rファニング\r†インターセプト\r†制圧射撃\r†黒羽の矢\r†花吹雪\r†パリングショット\r†必殺の矢\r※禅銃\r※ピンポイント\r※流星雨\r\r片手射撃\rガンフーⅡ\r黒羽の矢Ⅱ\rクイックドローⅡ\rヒットマン\r†バックアップショット\r†狙撃姿勢\r※自動反撃\r\rキルゾーン\rセキュアショット\rゾーンファイア\rニューロリンク\rフラッシュリロード\r†雷の矢\r†ブルズアイ\r※致命の魔弾\r\rガンフーブレイド\rキルゾーンⅡ\rスリング＆ステップ\rタグロック\rノートリアス\r†アサルトムーブ\r†ショックシュート\r※ダブルショット\r";
s_sk17 = "▼ハイランダー\rアテンション\rイノセント\r隠れバディ\r影の守り手\r後光\rデジャヴュ\r天の恩寵\rホログラム\r†足長おじさん\r†殺戮の天使\r†守護天使\r†身体記憶\r†天の調律\r†導きの羽\r※救済の天使\r※天上人\r※封印記憶\r\r軌道センス\r救済の天使Ⅱ\r守護天使Ⅱ\r天の威風\r天使の羽根\r†影の守り手Ⅱ\r†謎のプレゼント\r※ヤコブの階段\r\r隠された殺意\r軌道兵器\rスリーピングゴースト\r天使のヴェール\rマインドロック\r†天の鳥籠\r†トランス\r※汚れなき者\r\r空ろなる中心Ⅱ\r軌道知識\rスウィフトリリース\r透明な悪意\rトランスⅡ\r†空ろなる中心\r†軌道兵器Ⅱ\r※天の怒り\r";
s_sk18 = "▼マヤカシ\r隠心\r神託\r霊癒\r霊査\r恐怖\r調和\r伝心\r結縁\r†幻覚\r†封印\r†消沈\r†呪縛\r†精神破砕\r†精神庇護\r※憑依\r※儀式魔術\r※消去\r\r隠心Ⅱ\r動揺\r占星術\r精神爆破\r迷宮\r†分心\r†伝命\r※多重心\r\r殉教者\r星歩\r静音\r呪詛\r過去視\r†思惟剣\r†未来予知\r※高速催眠\r\r心紋\r心理迷彩\r調和Ⅱ\r未来予知Ⅱ\r睡魔\r†熱情\r†高速感応\r※記憶隠し\r\r分心固定[エニグマ専用]\r霊鎧[エニグマ専用]\r霊盾[エニグマ専用]\r霊弾[エニグマ専用]\r霊刃[エニグマ専用]\r†霊壁[エニグマ専用]\r†霊撃[エニグマ専用]\r※合技[エニグマ専用]\r";
s_sk19 = "▼トーキー\rインタビュー\r決定的瞬間\r先見の明\r匿名報道\rニュースソース\rバックステージパス\r早口\rフォトジェニック\r†壁に耳あり\r†緊急特番\r†シャッターチャンス\r†スクープ\r†パパラッチ\r†フラッシュフラッシュ\r※ショウアップ\r※生還\r※ダイムノヴェル\r\rカメラギャング\r緊急特番Ⅱ\rシャッターチャンスⅡ\r突撃取材\r名解説\r†すり抜け\r†報道規制\r※取材の鬼\r\r記録者\rアドバタイズ\r海賊放送\rゴリ押し\r偏向報道\r†キューサイン\r†ワイドステージ\r※スポットライト\r\rギョーカイスラング\rタイムライン\r突撃チャレンジ\r名解説Ⅱ\r名物リポーター\r†ヒーロータイム\r†フレームアウト\r※ディレクター\r";
s_sk20 = "▼イヌ\r緊急回避\r携帯許可\r私服警官\r指名手配\r即応態勢\r鎮圧\rバッヂ\r捕縛術\r†拘束術\r†集団退避\r†情報屋\r†締め上げ\r†突入態勢\r†フリーズ\r※強行突破\r※キープオフ\r※最後の審判\r\r強襲包囲\r強制執行\rサイレン\r生存嗅覚\r猟犬の牙\r†増援\r†ハンター\r※不死の猟犬\r\r防衛者\r愛用の武器\r大立ち回り\r制圧の一撃\rハンターⅡ\r†デジタルケイジ\r†マイティドッグ\r※プロテクター\r\r汚職警官\r協力要請\r緊急回避Ⅱ\r降伏勧告\r正義の番人\r†法の番人\r†猟犬の楔\r※ダイハード\r";
s_sk21 = "▼ニューロ\rヴィジョナリー\rNGワード\r自動防壁\rストリームマップ\rSPAM\r01フィーリング\rドミネート\r防壁構築\r†サポート\r†ターボブースト\r†ツェノンの逆理\r†虫使い\r†ポルターガイスト\r†マルチタップ\r※シミュラクラム\r※ケイオスAD\r※ブービートラップ\r\rウェポンフォロー\r口座改竄\rサイバークラック\rタップマスタリー\rマスターハッカー\r†スパイダーシルク\r†パワーサージ\r※緊急防壁\r\r砕魂者\rクレンジング\rディスコネクト\rトリガーロック\rバーチャルシューター\r†カット＆ライン\r†ブラックアイス\r※サルベージ\r\rシステムリカバリー\rショックブレイン\r電子迷彩\rトリガーロックⅡ\rユニバーサルドローン\r†グラビティ\r†ストリームエフェクト\r※ウィザード\r";
s_sk22 = "▼ヒルコ\r鱗の王\r核酸毒\r牙の王\r瞬間適応\r獣の感覚\r硬化\r触手\r生存本能\r生存本能Ⅱ\r生体アンテナ\r透明化\rヒューマナイズ\rメトロダイバー\r融合\r†怪力\r†カメレオン\r†巨体\r†再生\r†腐食細菌\r†咆哮\r†守りの強酸\r†乱振\r※獣の気\r※磁気嵐\r※衝撃吸収\r※領域\r\r外皮の盾\r超硬質ボディ\r毒物適応\rニューロダイバー\r群長の雄叫び\r†凍てつく眼光\r†貫通撃\r※守護本能\r\r落とし物\r攻撃本能\rジオメトリックデザイン\rしっぽ切り\r雷鳴波\r†環境適応体\r†テイルバッシュ\r※インビジブル\r";
s_sk23 = "▼クロガネ\rフォルム:ウェポン\rフォルム:アーマー\rフォルム:ヴィークル\rフォルム:ガジェット\rフォルム:ストラクチャ\rフォルム:ヒューマン\rフォルム:アニマル\rフォルム:アイコン\rフォルム:ファッション\rフォルム:サイバーウェア\rフォルム:オブジェクト\r人鞘\rプラスワン\rサンデーベスト\r鋼の壁\rグッドデザイン\rギガセキュリティ\r超怪力\rウィグワグ\r騒霊\r協調開始\rアタックアーム\rアップグレード\rアナリシス\rＭＭＩ\r軌道分析\r機能偽装\r契約\r心器一体\r清浄なる器\r憑喪神\rドミネイター\rマニピュレータ\rメンテナンス\rユニゾンⅡ\rライムライト\rバイタルアッパー\rマインドアップ\r†オーヴァーロード\r†技の真髄\r†トライ＆エラー\r†ファントムトリック\r†離れ業\r†庇護の剣\r†魔技\r†ユニゾン\r※フォルムスイッチ\r※フォルムパージ\r※存在証明\r※ロックオン\r\rいにしえの逸品\r浮き世の知恵\rオークションウォーカー\r火器管制\rスピードエンハンス\rセンスエンハンス\r電子攪乱\rマニキュレータⅡ\r†ジェノサイドモード\r†ターゲットロックシステム\r※スーサイドアタック\r\r心技一体Ⅱ\r通信機能\r同調する器\r人形使い\rメンテナンスⅡ\r†迎撃システム\r†高速演算処理\r※リブート\r";
s_sk24 = "▼アラシ\rオーヴァーレブ\r近接射撃\rクイックリペア\rスクランブル\r精密爆撃\rチェック６\r敵情偵察\rドッグファイト\rドッグファイトⅡ\rパワーファイト\rパワーファイトⅡ\rヘッドオフ\rマシンインファイト\rモンスターマシン\r†緊急回避ボム\r†ジャックナイフ\r†スタンピード\r†全弾集中\r†フォールンエンジェル\r†ブロック\r†ヘヴィファイト\r†ラピッドシューター\r※シャットダウン\r※シンクロアタック\r※ハイリンケージ\r※フルファイア\r\r戦争屋\rアイアンジャック\rキャッチザウィンド\rクローズブレイン\rマーキング\r†ドーントレス\r†ハンターズクオリ\r※マシンコントロール\r\rスピードファイト\r戦場の機士\r超長距離支援\rバーストジャンプ\r飽和攻撃\r†急降下作戦\r†デッドリーピアース\r※戦神の采配\r";
s_sk25 = "▼カゲムシャ\r薄影\r隠し腕\r影踏み\r影守り\r擬似人格\r黒子\r人格障壁\r人格障壁Ⅱ\r忠節の兵\rデコイ\rドッペルゲンガー\rとんぼ返り\rバックアップⅡ\rリクエスト\r†写し技\r†慧眼\r†二人羽織\r†能面\r†バックアップ\r†拾い聞き\r†身代わりの羊\r†ミミクリー\r※スナッチ\r※内助の功\r※パントマイム\r※封じ手\r\r潜伏者\rID強奪\r首つり仕掛け\rスキルシーフⅡ\rレッグアレスト\r†スキルシーフ\r†潜伏\r※フェイルセーフ\r\r阿吽の呼吸\r影なる腕\r定まらぬ影\rスナッチⅡ\r潜伏Ⅱ\r†完全看破\r†無名の長者\r※ホロウ\r";
s_sk26 = "▼アヤカシ\r霞の体\r眷属\r凍える指先\r人化\r都市伝説\r奈落堕ちⅡ\r腐敗の指先Ⅱ\r古き友人\r忘却\r魔人の牙\r夢魔\r闇の外套\r夜の住人\rリーディング\r†畏怖\r†吸精\r†邪眼\r†瘴気の壁\r†奈落堕ち\r†腐敗の指先\r†闇の殉教\r†夜の波動\r※異形化\r※幻想結界\r※始祖\r※妖魔の庭\r\r†血脈:獣の一族\r†血脈:龍の一族\r†血脈:妖精の一族\r†血脈:鬼の一族\r†血脈:人形の一族\r†血脈:夜の一族\r†血脈:悪魔の一族\r†血脈:巨人の一族\r†血脈:化生の一族\r†血脈:死者の一族\r†血脈:天使の一族\r†血脈:伝説の一族\r†血脈:神族\r\r悪魔のノート\r誘いの扉\r永世者\r上位種\r交雑種\r†狩りの庭\r†血盟の主\r※黄昏の君\r\r黒の番人\r吸精Ⅱ\r魔人の爪\r闇夜の狩り\r妖魔の狩人\r†感染する悪夢\r†腐敗の王\r※魔王\r\r血脈Ⅱ:獣の一族\r血脈Ⅱ:龍の一族\r血脈Ⅱ:妖精の一族\r血脈Ⅱ:鬼の一族\r血脈Ⅱ:人形の一族\r血脈Ⅱ:夜の一族\r血脈Ⅱ:悪魔の一族\r血脈Ⅱ:巨人の一族\r血脈Ⅱ:化生の一族\r血脈Ⅱ:死者の一族\r血脈Ⅱ:天使の一族\r血脈Ⅱ:伝説の一族\r血脈Ⅱ:神族\r血脈:海魔\r血脈Ⅱ:海魔\r純血統\r";

mun_no = "▽無条件取得\r？\r\r";
mun_def = "▽無条件取得\rIANUS(購:0/0、隠:10/0、電制:制御値)\r";
mun_0_2  = "マンション(Yellow、購:4/1、登:10、セ：10)";
mun_3_4  = "店舗／事務所(Yellow、購:5/1、登:8、セ:12)";
mun_5_6  = "マンション(Green、購:7/2、登:10、セ：13)";
mun_7_8  = "店舗／事務所(Green、購:8/2、登:8、セ:15)";
mun_9_10 = "マンション(White、購:16/4、登:10、セ：15)";

n_sk_list = "▼一般技能\r１●−−− 医療\n１●−−− 射撃★\n１●−−− 知覚\n１●−−− 電脳\n０−−−− 製作:\n１−●−− 心理★\n１−●−− 自我★\n１−●−− 交渉\n０−−−− 芸術:\n１−−●− 運動\n１−−●− 回避★\n０−−−− 操縦:★\n１−−●− 白兵★\n１−−−● 圧力★\n１−−−● 信用★\n１−−−● 隠密\n\n▼社会\n１−−−− 社会:Ｎ◎ＶＡ\n１−−−− 社会:選択\n１−−−− 社会:選択\n\n▼コネ\n１−−−− コネ:選択\n";



mujoken = "▼無条件取得技能\r１●−−− 知覚\r１−●−− 交渉\r１−−●− 自我\r１−−−● 社会:Ｎ◎ＶＡ\r１−−●− 社会:出身地\r";

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

