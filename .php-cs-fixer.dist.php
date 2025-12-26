<?php
// .php-cs-fixer.dist.php
// リンター・フォーマッターの設定ファイル

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->exclude('vendor'); // vendorディレクトリは無視

$config = new PhpCsFixer\Config();
return $config->setRules([
        '@PSR12' => true, // 現代のPHP標準ルール(PSR-12)を適用
        'array_syntax' => ['syntax' => 'short'], // array() ではなく [] を使う
    ])
    ->setFinder($finder);