<?php

require_once '../config/config.php';

$kvart = new Flat();

if (checkFlag('flag',"Войти")) {
    $content = $twig -> render('autorisation.twig');
} else
if (checkFlag('flag','Регистрация')) {
    $content = $twig -> render('registration.twig');
} else {
    $content = $twig -> render('index.twig',[
        'counters' => $twig -> render('mainCounters.twig',$kvart->showCounters()),
        'owners' => $twig->render('mainOwner.twig',$kvart->showOwners())
    ]);
}

echo $twig->render('base.twig', [
    'title' => 'Главная',
    'house' => $kvart->house,
    'flat' => $kvart->flat,
    'content' => $content,
    'error' => $error,
    'greating' => $greating,
    'login' => $flag,
    'commentText' => 'Здесь будет комментарий',
]);
?>