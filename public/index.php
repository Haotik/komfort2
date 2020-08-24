<?php

require_once '../config/config.php';

$flat = new Flat();

if (checkFlag('flag',"Войти")) {
    $content = $twig -> render('autorisation.twig');
} else
if (checkFlag('flag','Регистрация')) {
    $content = $twig -> render('registration.twig');
} else {
    $content = $twig -> render('index.twig');
}

echo $twig->render('base.twig', [
    'title' => 'Главная',
    'house' => 'Ленина 59',
    'flat' => '1',
    'content' => $content,
    'error' => $error,
    'greating' => $greating,
    'login' => $flag,
    'commentText' => 'Здесь будет комментарий'
]);
?>