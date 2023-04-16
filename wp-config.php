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
define( 'DB_NAME', 'wp' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'c!7xJK7>!!4}`gr{`jFJ/h5YPV-]g_MHHs|;C@%}N8K=0+d-p}c`[HDabsa$,-`)' );
define( 'SECURE_AUTH_KEY',  'mCK6?4#h_m3,Hc#4%ehGbru71Z3LfI@I{A*18J]_Hxc&*Ts]^d+@CwdIFs-Pt_up' );
define( 'LOGGED_IN_KEY',    'q;Ql4IgH,2+BAhjH/M*[yx:2xpH{cm.%wpM8c/!~1Gr=b_ fQ{Qx&F!N TKo.=R9' );
define( 'NONCE_KEY',        'C^:IL=nk}/m]eCM4R~Z_Yc2jr[{fssdt4)I,@,rDs$)80]}D~elD<L.*c#eU>2ct' );
define( 'AUTH_SALT',        '[H}(88h|Js[?q:If$d&gCj*|d$_u`0;MM/9!YY}TS1z|sO-bV$IPP La9ce+Aw-R' );
define( 'SECURE_AUTH_SALT', 'Y%X2 H-8>|t^[E4Xa06qB*BQVn!m ]9.S2|Iq@$l9qB!qt~Y6?ll5}L}tXD4<2(!' );
define( 'LOGGED_IN_SALT',   '}>z!`e4(,.11!&l5^+&Uv!2a;VV9?P2h3AS0>{6q*fUj?Nq (KgxYYQc*<_nu3{&' );
define( 'NONCE_SALT',       '<})gV2O!Mj9GK}P.6[oL_podae`K~UeeCNu(K+hm?YG&n7R$;UD/jRFHZkQ{z!<5' );

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
