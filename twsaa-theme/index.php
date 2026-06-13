<?php
// index.php - معاينة محلية بسيطة للقالب (لا يلزم للنشر على توسع)
require_once __DIR__ . '/vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/views');
$twig = new \Twig\Environment($loader);

$products = json_decode(file_get_contents(__DIR__.'/data/products.json'), true);

echo $twig->render('index.twig', ['products' => $products, 'currency' => 'SAR']);
