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
define('DB_NAME', 'blog');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '!as;<1:z@.l(n<#rjXnFx_<+dQsJ3&FnianI*(Cm<?xus}KVD+i3=i{887L]Lde+');
define('SECURE_AUTH_KEY',  'zi~iVZDZutsobW_xJP2@|0a^Sv&0L7o>5e):31wlc)Q+vlVh<q@wXj<:{J#)Cmr=');
define('LOGGED_IN_KEY',    ']PCgv8rZjrUps;0L6cwy82LIp< 7TgQ?65:Q+BERk+f|[Mj$Q{gq}Wq;`(!dIefW');
define('NONCE_KEY',        '=p(6S(Y#3b.T!NjlCxo8~=I<@M^6j)._:9^56vc%n`,QO3U4|;/3OrY3#|#tMSJE');
define('AUTH_SALT',        ':2:8CecCW[0-OzfCo>e?i[;3TR|8/q/A/qt=qwQi-:A~] =zFn=~pC>kI=Y#$,R}');
define('SECURE_AUTH_SALT', '(_3^]&Y.p@m0TxC+(vI-` I92qfPG`$.Fu/f$XS>Fze/[kx#pUlCSghyAVS8f#}s');
define('LOGGED_IN_SALT',   'gX6:Tic :]Axf)oN:Mv-x4L$<G 9;rIBL5`n`C6;A}I62-!+ *FbA0%0nqcpdvua');
define('NONCE_SALT',       '*$(La)R7oy;QlM:g$;k!LpbTLC)juC:_4q/tW~lami1A2/V|tH<BdDChlT[w[l<L');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
