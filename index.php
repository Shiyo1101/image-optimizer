<?php
// 画像ディレクトリのパス
$imageDir = __DIR__ . '/images/';

// 1. パラメータ取得
$filename = $_GET['file'] ?? null;
$width    = isset($_GET['w']) ? (int)$_GET['w'] : 200;
$height   = isset($_GET['h']) ? (int)$_GET['h'] : 200;

// ファイル指定がない、または存在しない場合のエラー処理
if (!$filename || !file_exists($imageDir . $filename)) {
    http_response_code(404);
    echo "Image not found.";
    exit;
}

// 2. 画像リソース作成 (JPEG想定)
// 実際には拡張子を見て imagecreatefrompng などと分岐させます
$filepath = $imageDir . $filename;
$source = imagecreatefromjpeg($filepath);
$orgWidth = imagesx($source);
$orgHeight = imagesy($source);

// 3. リサイズ処理
$thumb = imagecreatetruecolor($width, $height);
imagecopyresampled(
    $thumb, $source,
    0, 0, 0, 0,
    $width, $height,
    $orgWidth, $orgHeight
);

// 4. ブラウザへ出力
header('Content-Type: image/jpeg');
imagejpeg($thumb, null, 80); // 品質80

// 5. メモリ解放
imagedestroy($thumb);
imagedestroy($source);