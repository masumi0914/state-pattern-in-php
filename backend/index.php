<?php

require_once 'vendor/autoload.php';

use App\Context\Matter;

$matter = new Matter('H2O');

echo sprintf('物質：%s　状態：%s<br><br>', $matter->getName(), $matter->getState());

// 状態を変更する
$matter->changeState();

echo sprintf('物質：%s　状態：%s<br><br>', $matter->getName(), $matter->getState());

// 状態を変更する
$matter->changeState();

echo sprintf('物質：%s　状態：%s<br><br>', $matter->getName(), $matter->getState());