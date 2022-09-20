<!-- <?php
session_start();
set_include_path(dirname(__FILE__) . '/../');

$route = explode("?", $_SERVER["REQUEST_URI"])[0];
$method = strtolower($_SERVER["REQUEST_METHOD"]);

require_once 'libraries/auth.php';
require_once 'libraries/cleaners.php';
require_once 'controllers/updateManagement.php';

    switch($route) {
        case "/":
            viewEventsController();
        break;

        default:
            echo "404";
} -->