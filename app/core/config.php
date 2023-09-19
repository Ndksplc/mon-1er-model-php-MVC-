<?php
  if($_SERVER['SERVER_NAME']=='localhost') {
    define('ROOT', 'http://localhost//project-mvc-framework copie/public');
    /** DATABASE CONFIG**/
    define('DBNAME','my_db');
    define('DBHOST','localhost');
    define('DBUSER','root');
    define('DBPASSWORD','');
    define('DBDRIVER','');

}
else {
    define('ROOT', 'https://wwww.yourwebsite.com');
    define('DBNAME','my_db');
    define('DBHOST','localhost');
    define('DBUSER','root');
    define('DBPASSWORD','');
    define('DBDRIVER','');

  }
  define('APP_NAME', "My First Php Website");
  /** true means show errors */
  define('DEBUG',true);