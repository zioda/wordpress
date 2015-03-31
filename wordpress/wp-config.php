<?php
/**
 * Podstawowa konfiguracja WordPressa.
 *
 * Ten plik zawiera konfiguracje: ustawień MySQL-a, prefiksu tabel
 * w bazie danych, tajnych kluczy i ABSPATH. Więcej informacji
 * znajduje się na stronie
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Kodeksu. Ustawienia MySQL-a możesz zdobyć
 * od administratora Twojego serwera.
 *
 * Ten plik jest używany przez skrypt automatycznie tworzący plik
 * wp-config.php podczas instalacji. Nie musisz korzystać z tego
 * skryptu, możesz po prostu skopiować ten plik, nazwać go
 * "wp-config.php" i wprowadzić do niego odpowiednie wartości.
 *
 * @package WordPress
 */

// ** Ustawienia MySQL-a - możesz uzyskać je od administratora Twojego serwera ** //
/** Nazwa bazy danych, której używać ma WordPress */
define('DB_NAME', 'wordpress');

/** Nazwa użytkownika bazy danych MySQL */
define('DB_USER', 'root');

/** Hasło użytkownika bazy danych MySQL */
define('DB_PASSWORD', '');

/** Nazwa hosta serwera MySQL */
define('DB_HOST', 'localhost');

/** Kodowanie bazy danych używane do stworzenia tabel w bazie danych. */
define('DB_CHARSET', 'utf8');

/** Typ porównań w bazie danych. Nie zmieniaj tego ustawienia, jeśli masz jakieś wątpliwości. */
define('DB_COLLATE', '');

/**#@+
 * Unikatowe klucze uwierzytelniania i sole.
 *
 * Zmień każdy klucz tak, aby był inną, unikatową frazą!
 * Możesz wygenerować klucze przy pomocy {@link https://api.wordpress.org/secret-key/1.1/salt/ serwisu generującego tajne klucze witryny WordPress.org}
 * Klucze te mogą zostać zmienione w dowolnej chwili, aby uczynić nieważnymi wszelkie istniejące ciasteczka. Uczynienie tego zmusi wszystkich użytkowników do ponownego zalogowania się.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'qB+#,QI*nOJ#Y1}E+Z-.%%yR!8E1+[xs#<8f:]flEE ,PQA$^i>FV-{S_6W|3M!d');
define('SECURE_AUTH_KEY',  '8/i:}N-FDpWTX0Pc+-0tPo#k4JHLak}o1 wQMH8,n.goKb.N>4_a-naEd6<Rd&mf');
define('LOGGED_IN_KEY',    'Jvn8+bqZ2I9*(L;kAc)Xalue4u/pdYaQ`!H/8<!VZq?j6[OBHt!;O#mF+6$a,egi');
define('NONCE_KEY',        'i3gB|k>k)9SVAZ7I[>@t8boIVjV)S3dNvigi`<V;zE_ AdTOkk@,,CDuh]RI-$OV');
define('AUTH_SALT',        '>=;(:/:]Xgw!05c*&HZ-!VGrt,)o|lePt=]5>}IktHG;l_:Qt=qL{s--nuH$Ed6L');
define('SECURE_AUTH_SALT', 'xK]IllC:B){12.oqnn^7d8lt~AM5M>!sqEyU3,c C1rG]!U[dY,J[MS^nR#^-^V,');
define('LOGGED_IN_SALT',   '.H^9ZX#23+Pe|_kqkznSGCT{Y%r6X1R|oBUF!l1vvlciCq.ru5OH},wFbQ@.QEmX');
define('NONCE_SALT',       '&IolohKp;/iOj8> P=l QrQ@--X|Wx^!6c2faWww1ix2j|QLmTg<|*-HP2WUF92*');

/**#@-*/

/**
 * Prefiks tabel WordPressa w bazie danych.
 *
 * Możesz posiadać kilka instalacji WordPressa w jednej bazie danych,
 * jeżeli nadasz każdej z nich unikalny prefiks.
 * Tylko cyfry, litery i znaki podkreślenia, proszę!
 */
$table_prefix  = 'wp_';
define('WPLANG', 'pl_PL');
/**
 * Dla programistów: tryb debugowania WordPressa.
 *
 * Zmień wartość tej stałej na true, aby włączyć wyświetlanie ostrzeżeń
 * podczas modyfikowania kodu WordPressa.
 * Wielce zalecane jest, aby twórcy wtyczek oraz motywów używali
 * WP_DEBUG w miejscach pracy nad nimi.
 */
define('WP_DEBUG', false);

/* To wszystko, zakończ edycję w tym miejscu! Miłego blogowania! */

/** Absolutna ścieżka do katalogu WordPressa. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Ustawia zmienne WordPressa i dołączane pliki. */
require_once(ABSPATH . 'wp-settings.php');
