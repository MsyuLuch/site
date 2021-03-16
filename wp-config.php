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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         'kjAyzdYY=Tk%qt$7`Bdqj1&X2i{OGADl*%#LEr`pq(m(|== WHS]B%6$06ma,Q,6' );
define( 'SECURE_AUTH_KEY',  'fu:3)L_4ct#(WO4)Y=;qV&d(H7BgtG86bYxF=?@1{bJ}8o|qCz*}b2H:Xu0Ad;8V' );
define( 'LOGGED_IN_KEY',    'T#r%tD?Z:k-U_~$8[k;R?pKz% <a<o49-BeC.y[oa+J-(@+__%~9bp8 4k]{/opz' );
define( 'NONCE_KEY',        'k)017<(hArIz=$6|k>MNK6BU*U$ I(pR;[V~BmoE:wkib$d*54IK!_2z%`C@}eID' );
define( 'AUTH_SALT',        'T*(0<dwUo52K;=ivb@42AXZX}De%8I UxQl10{X-h3V[Q,+,%X[8{!DXa`E3R:wj' );
define( 'SECURE_AUTH_SALT', '<T9JXQZFEPvyKLIzcwlPuf=!rG*jK,Up]^uXHP&Mv6nD%ypM; K[t_z]Y&R;kbFS' );
define( 'LOGGED_IN_SALT',   'CNk!?U+WK|rW~VozOkA]>NL623XKlHHxr8+p&~hgtB<iB@rYA>m*$WxpAy?8$d7G' );
define( 'NONCE_SALT',       'B}|v5`nRak}I5rG.jzKlk=,N8H}>QDvdB,%[doAw0)lPa5sgT{!,|E0pg$C>R{7*' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
