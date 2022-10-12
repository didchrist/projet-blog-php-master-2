<?php
$filename='../data/data.json';
$json = file_get_contents($filename);
$articles = json_decode($json, true) ?? [];
$article_index = $_POST['article-index'];
unset($articles[$article_index]);
file_put_contents($filename, json_encode($articles));
header('Location: ../index.php');
