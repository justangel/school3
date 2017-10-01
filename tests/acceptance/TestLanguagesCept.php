<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Проверка языков');
$I->amOnPage('http://localhost:81/');
$I->see('Видео школа');

$I->amOnPage('http://localhost:81/en/');
$I->dontSee('Добро пожаловать!');
$I->see('Welcome!');
$I->see('Русский', 'a');

$I->amOnPage('http://localhost:81/ru/');
$I->dontSee('Welcome!');
$I->see('Добро пожаловать!');
$I->see('English', 'a');
