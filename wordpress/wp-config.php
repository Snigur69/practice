<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp_db' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '*bSXQ&}^}P(DIy,^<S1(=cmjU& JnL.U<S1NWFo_uX#Qx Fs@&H1fb97yqT<Xm%;' );
define( 'SECURE_AUTH_KEY',  'U g0e0# zm._{yy`bg[Pylsw<}r:N9@zqMH?qdp!gME[cG*XPV0E^bFs,kdVzde}' );
define( 'LOGGED_IN_KEY',    'ZyD!RV?iI)>7k9L6altlW$tmTx=k6|4H8vI;2Q.>:_4n>dEC{t^lYt)>SSdNxV|~' );
define( 'NONCE_KEY',        'X`f_.na5WX_wN+li&Lz)my 4VpT&3Rfd|6f_p]y45FL_gntAJz4K,?jqyS61C+Z0' );
define( 'AUTH_SALT',        't$k4Yk#=h5J3BSyrw#6Mz8R0(=wPxjY.~G4A~}q7}]b%8t:Y=OI**/AoXO2>&AtL' );
define( 'SECURE_AUTH_SALT', 'Pui?|#Hv+3ybk#p)r I[NF:e9^X5=v@E40__%Hu<7`<MX8Qv:46dS~K4SXgC-yH-' );
define( 'LOGGED_IN_SALT',   'RrA.)cFVBL)ph<[><Z7YAN~V:Y6C+WT~tTX8Rb0j@a>ITnQ*;ZOAkBWJ-t/H}nX5' );
define( 'NONCE_SALT',       'iaZd6kA$MI86Qqo#7fe39:UyCi;uN ;@Rvev#A}=2dK#.IB.DU^KZiFDl$z=)?nh' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
