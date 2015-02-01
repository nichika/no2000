<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'nick_mydb');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'nick');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'aapTIyWMCh61');

/** MySQL のホスト名 */
define('DB_HOST', 'mysql416.db.sakura.ne.jp');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+FY1-DkqTT9p-#CpXoeuU3O9EdPY64&9$}| ;K4NT_${NK^60N0twX:q{c^1CA5>');
define('SECURE_AUTH_KEY',  'u**XQU!)6`@Nel2y{)w?@x8MmX:+y^m[Z-_~%5<surezflS/cDW^,WUrLaxA3<&C');
define('LOGGED_IN_KEY',    'Rw!|4{0HKW.kxU:l<{o.|1d=JNT}@HKRzs]>dO*)&_H#zxbqh$>4Qq](N#f=b?YT');
define('NONCE_KEY',        '*U9*t1pP)#Q>FB6VK{D%obM|R~+^~K@+R.>3bZM`M5,}d#]Vd}bU9+TN3_r,X0vx');
define('AUTH_SALT',        '<-Q3|4|MH`adbux^+MKT,p63J@|w+=XzoJ`}h2t`8 k[n}6RVw>JJ(5gctaKg;IO');
define('SECURE_AUTH_SALT', 'rxec{HX=O4S~+:|wm}uWoJ>Dd/6CdZ6<j=?aMmK=M]B$E=b_b:;R52xS5w1-A8U)');
define('LOGGED_IN_SALT',   'Lw_d!TaRf7$Fb5NXu4-#]@we~U{?G?.M(3o=e+=Q9|IZW@sgKey.WpH)Aw`cZNv%');
define('NONCE_SALT',       'mRWP65cfN*Rr=9i+1eh |iYK=p8aU59^>,xDx,l%R;zIi4YzY!VH`{%;KT0RHhgx');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wpn_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
