<?php

// Claves de desarrollador

// URL=http://localhost:3000/
// HOST=154.49.245.52
// DB=u896345182_Piniors
// USER=u896345182_root
// PASSWORD=M+Ye@42fq2p
// CHARSET=utf8mb4

?>

<?php

(new DotEnv(__DIR__.'/.env'))->load();

define('URL', getenv("URL"));
define('HOST', getenv("HOST"));
define("DB", getenv("DB"));
define("USER", getenv("USER"));
define("PASSWORD",getenv("PASSWORD"));
define("CHARSET", getenv("CHARSET"));