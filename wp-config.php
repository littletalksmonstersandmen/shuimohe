<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define( 'DB_NAME', 'shuimohe_com' );

/** MySQL数据库用户名 */
define( 'DB_USER', 'shuimohe_com' );

/** MySQL数据库密码 */
define( 'DB_PASSWORD', '872EJz8hEsELSami' );

/** MySQL主机 */
define( 'DB_HOST', 'localhost' );

/** 创建数据表时默认的文字编码 */
define( 'DB_CHARSET', 'utf8mb4' );

/** 数据库整理类型。如不确定请勿更改 */
define( 'DB_COLLATE', '' );

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_UMF1tT:[_yf<}aX{~#qgsjr?895KfS<X>dVC/LU4`mNjar)s$N>Dkf!X,{ n6`D' );
define( 'SECURE_AUTH_KEY',  ';kDL.,gzC[U_ql3BTKA7x?,H@Fy<cf(,_bYr8i&C$p3}MY_B0|XRx(FKlJU6m+Va' );
define( 'LOGGED_IN_KEY',    'l}<VFg<I=?zm12z9l|-x_yj Rj_{|F3wSeV3S<)Bs>H9Et#){zwY$`>Br`@ R(_Z' );
define( 'NONCE_KEY',        'h18%Sa)RXh|[4j,a NQ3j.j!n0krl*Hkg`[*.-qt#lgz]s>P0{cRW3qNrQ><]x|j' );
define( 'AUTH_SALT',        '#L9uiZQZ^|euuf1uZO_F!OlS/R)o_|#d3n8f&}C4{YRhj,[cDxR@^I}o7v<`;oP1' );
define( 'SECURE_AUTH_SALT', 'we/Si>%](9_&p7pEO<ZnHDXUvI.eGIgjJsA`B]T<huiaih eZI)1^Z0#*eSKP@GC' );
define( 'LOGGED_IN_SALT',   'hsWB6zd,+65l>d08V42j,=%pJt!a9ZiuN~J`?V2X9KG;w7)V+$/WR<Rvo1=<`#Rx' );
define( 'NONCE_SALT',       'o-%ssxkgS!j<~?lLE|Q]:HU2u.IFaod|[Zu}cC/5aBy3p)uusCZ6P2mw7nm0l`JA' );

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** 设置WordPress变量和包含文件。 */
require_once( ABSPATH . 'wp-settings.php' );
