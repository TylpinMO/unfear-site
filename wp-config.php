<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'unfear' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'unfear_admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '63?IPePVcig' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'oMG/90ByMVEjN$i3vs-(U-|lBF3;XQO(7}5g@varjx(By]|y9 3S^7}Cnq&pfQX)' );
define( 'SECURE_AUTH_KEY',  'rqI2Q@WI|Gf_^1Xz/Fawk-cPf:lCa4l?(_xoN+pd:$VdhH3V{#l5P%K>oI1@ZFu[' );
define( 'LOGGED_IN_KEY',    '7V8V04RgE|pg0=XFTV&e9DpE2{&Oy=93d6+%=1d*1:d:tWXAvqcJw-v]L.=2S~|;' );
define( 'NONCE_KEY',        '%i34rOO~c9EsJu(@#W@X5k*GiT2IJq*CkwXCl1[hQ0#9(VLms$!`x>LVyQAzY50Y' );
define( 'AUTH_SALT',        '/gZo-w:)|nM[|t8IzF8yftUhR8N@-;*SOra$RHgrAxMw;7TTM(zXA6HOFAPP?Ork' );
define( 'SECURE_AUTH_SALT', '?P!Ey}K0GBJp>XJhE7&TS=1I^v!;QzJwq>q@PPr[It(BoK!)x)cE-tF;O`%&1>n~' );
define( 'LOGGED_IN_SALT',   'w}WKOCFS86xiRKuUQSIg?aQ~0YJwJai) =$*D1yGZ%1wJ2sYms;Ws=z0~*p.CEHC' );
define( 'NONCE_SALT',       'HQe&5{tL!2O/!$uG3}qC!ZOheowK3<6$%AJXn7AbLIPUFL4UYgnwGm^PVK@sqIB4' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
