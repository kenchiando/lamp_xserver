<?php

// ディレクトリへのパスを取得
$path = dirname( __FILE__);
// ディレクトリ(のみ)を取得
$dirs = scandir($path);
echo '<pre>';
var_dump($dirs);
echo '</pre>';