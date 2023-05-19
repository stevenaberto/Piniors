<?php

// Claves de desarrollador

// define("URL", "http://localhost:3000/");



//Claves de produccion

// define("URL", "https://piniors.com/");

// define('HOST', '154.49.245.52');
// define("DB", "u896345182_Piniors");
// define("USER", "u896345182_root");
// define("PASSWORD", "M+Ye@42fq2p");
// define("CHARSET", "utf8mb4");

?>

<?php

(new DotEnv(__DIR__.'/.env'))->load();

define('URL', getenv("URL"));
define('HOST', getenv("HOST"));
define("DB", getenv("DB"));
define("USER", getenv("USER"));
define("PASSWORD",getenv("PASSWORD"));
define("CHARSET", getenv("CHARSET"));