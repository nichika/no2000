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
define('DB_PASSWORD', '27kMHpTqlCUD');

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
define('AUTH_KEY',         '=p6|`#8?K{~l;2tEk&dL/_W,!JBx+=R/r4jG_sbcDVBpWf2-BAMl:AkwpQ0;<Y#.');
define('SECURE_AUTH_KEY',  '1-m153 1^m11&lVrbfcV5YzF[n]6X}Y*W0fvO0Rj_4+TcU}{Ytoz.+X.:tU:YS7?');
define('LOGGED_IN_KEY',    'hu_uV.xw!|8}]UGX3kG5lhq>Xax4TCd=2uvg-^h`sZom<GS#5vB&Uky+c!~ |E0i');
define('NONCE_KEY',        '++p+qs25;z1NA({$](fM5uSDF@tJT[3b{<Ou5PF9[x@*jPpTpjET;+9*3B4CE]O,');
define('AUTH_SALT',        '!~VtGA4ucnODuq!Z8Y*VmJ2n450i[&V5hQ>J{,M7ketX!d)iJH=7.$WfO eTMN$x');
define('SECURE_AUTH_SALT', '/@!n+}[I)!+nwh*L1q x!-~$2ii~N,F^vXp)v8-`VYC1yF{j.:X-xP0+cG|]e~4Q');
define('LOGGED_IN_SALT',   'WDzD#Opki13eG*CWEs,#u)D~1RU]Q7FE4[j&Lk36quV8S+|+;T9axIr*&_%dK4ZB');
define('NONCE_SALT',       '&FCtSO.HD=p9wy21,mOE@Z3>l.h0:W(KW>px#9RV+z2x!{|.3TNnH8OP}qTWS|M.');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

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
