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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'VvZBV40=[jFZtbSqVG;ptGR_xxN@5LEUW.+c-pT3`{zeGrsb`949|2xU-,NuFveQ' );
define( 'SECURE_AUTH_KEY',  'AzD$#mD(s}Dc`LY,>r9PU VCj2Z.8=$HAA`UT0NP&vozSrijv*K|.DwSk`}9ESK)' );
define( 'LOGGED_IN_KEY',    'b4QHg{u4T)nUI2,ZRMP}aR%xD|`ftO`NW$G#t:$iHF~X>G )k D|L~>/^v2XmM!V' );
define( 'NONCE_KEY',        'Byep`@DB49X0H.QhgEQsB^_2cG_K^W NxwR4wIqzp(,@||@9agI&.:yqE;8_SF2r' );
define( 'AUTH_SALT',        'ZykPGcbB)O(c_G+@ELJO-pBvZbqyG*([9C-Mct+@#vw87fkw7V?t!<r.ChQPY[7,' );
define( 'SECURE_AUTH_SALT', '9`=>y8edt[+dVduJgq:lRt~oW!$suW:2:/|yD14Pup$}.nza7r,X`aJy-o vLnBm' );
define( 'LOGGED_IN_SALT',   'q5:cD%iZ nssMP@WRhkM?23[*xA7^p:4p~_vb,^?H&2vBlvmtop+]9D2;)(ZDzBC' );
define( 'NONCE_SALT',       '?z]_[ff. 8)-RwrSFOn|9gut8{6jezc=y^+;mP$G/HuKt]5+&TDj;NDK5?M)TliA' );

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
