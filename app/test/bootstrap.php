<?php
session_start();
require '../vendor/autoload.php';
require '../config.php';

// テスト用データベースの設定
$db_settings = [
  'driver' => 'mysql',
  'host' => 'localhost',
  'database' => 'test_tinitter',
  'username' => 'root',
  'password' => 'password',
  'charset'  => 'utf8',
  'collation' => 'utf8_unicode_ci',
];

// データベース初期化用SQLを指定する
define("TEST_SCHEMA_SQL", __DIR__ . "/../data/schema.sql");

\Base\DB::registerIlluminate($db_settings);
