<?php
// ライブラリ読み込み
require '../vendor/autoload.php';
// 設定ファイルの読み込み
require '../config.php';

// Slimの初期化
$app = new \Slim\Slim([
  'templates.path' => TEMPLATES_DIR_PATH,
  'view' => new \Slim\Views\Twig()
]);

// 投稿アクション
//$app->post('/post/commit', '\Tinitter\Controller\Post:commit');
// Slimにルートを登録
\Tinitter\Route::registration($app);

// データベース接続のセットアップ
\Base\DB::registerIlluminate($db_settings);


// 実行
$app->run();
