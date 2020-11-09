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
define( 'DB_NAME', 'alfaleads' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '(<d>9Q|#N}~Q1A3LkY5xaje!Su,:6sCmHqJa9wz8S,aQ$Y=GwL0qn+U9//82T9s}' );
define( 'SECURE_AUTH_KEY',  'SPh3_Y]6CPCy[:o|=Z^62qMVtwr<Mnj4C34F(V,A5P%<bmA~m-Kc@0Kcyce`4-((' );
define( 'LOGGED_IN_KEY',    'V-c86jdy]9S~K4q(xUA,=5gmdHCa:pYy5(z)dm#h0kn -hG;[@&^G!rncmrP-N)(' );
define( 'NONCE_KEY',        '6;ug:5A-hszk0hg)0~/Ak!,|(tH&j7B$U#RjWm&P=%:CwE-S?&S8R]2|K[Cqt,rx' );
define( 'AUTH_SALT',        ';p7% lp1VRx&*KT&xd_+Y{_-ag2kDrF[,Hq>@ 8(b`lP)k{b(~n30]SFiAA]mVU^' );
define( 'SECURE_AUTH_SALT', 'C5R%cE>Zf:&Lf/BX;Usoiw3C-(W8{nPdEEbe~#K]?2fVS2C^jf~^o446!EA3Hij5' );
define( 'LOGGED_IN_SALT',   '?=P_[BnU0M^?+(&#9`)-G=[pqX!Gqm1nv5GD7^mIoxNPNULe9co%*SdX`EOOtrWX' );
define( 'NONCE_SALT',       '?z}qQ_K0+:*[~}8&o]M]L~Yx^~gx/MR3Jp`Cd1P1_J]!ah,-[M_u30hN[WYK]t<C' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'als_';

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
