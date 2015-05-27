<?php
if (PHP_SAPI != "cli") {
    exit;
}

if (!isset($argc)) {
    echo "Could not process command line arguments.\n";
    exit(1);
}

if ($argc < 4) {
    echo "Invalid number of arguments passed.\n";
    exit(1);
}
require_once(__DIR__ . '/prepend.php');

$_ENV['JAP_HOME'] = $argv[1];
$_ENV['PROJECT_HOME'] = $argv[2];
$_ENV['SRC_PROGRAM'] = $argv[3];
$_ENV['ORIG_CMD'] = $argv[4];

set_include_path(get_include_path() . PATH_SEPARATOR . $_ENV['JAP_HOME'] . PATH_SEPARATOR . $_ENV['PROJECT_HOME']);

$argv = array_slice($argv, 4);
$argc = count($argv);

require_once($_ENV['SRC_PROGRAM']);

$className = pathinfo($_ENV['SRC_PROGRAM'], PATHINFO_FILENAME);


//print_r($argv);

if (!method_exists($className, 'main')) {
    echo "Could not find main() method in the class.\n";
    exit(1);
}

$className::main($argv, $argc);


