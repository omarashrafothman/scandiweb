<?php
header("Access-Control-Allow-Origin: *");


header("Access-Control-Allow-Methods: GET, POST, OPTIONS");


header("Access-Control-Allow-Headers: Content-Type, Authorization");


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Example response
    echo json_encode(["message" => "Hello from PHP!"]);
}





// namespace App\Models;

include("./vendor/autoload.php");

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;
//runhosting
// $capsule->addConnection([
//     'driver' => 'mysql',
//     'host' => 'fdb27.runhosting.com',
//     'database' => '4543164_scandi',
//     'username' => '4543164_scandi',
//     'password' => 'YFB?5i^M5VM2PE]n',
//     'charset' => 'latin1',
//     'collation' => 'latin1_swedish_ci',
//     'prefix' => '',
// ]);



//local
$capsule->addConnection([
    'driver' => 'mysql',
    'host' => 'localhost',
    'database' => 'scandiweb_db',
    'username' => 'root',
    'password' => 'root*',
    'charset' => 'utf8',
    'collation' => 'utf8_general_ci',

]);

// infinityfree
// $capsule->addConnection([
//     'driver' => 'mysql',
//     'host' => 'sql102.infinityfree.com',
//     'database' => 'if0_37568504_scandiweb',
//     'username' => 'if0_37568504',
//     'password' => 'zyNziuCAoD6G',
//     'charset' => 'utf8mb3',
//     'collation' => 'utf8mb3_general_ci',
//     'prefix' => '',
// ]);



$capsule->setAsGlobal();

$capsule->bootEloquent();

require("src/GraphQL/boot.php");

