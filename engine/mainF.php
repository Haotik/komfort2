<?php

function test($a = "Задайте аргументы для теста")
{
    $params = func_get_args();
    echo "<span class = \"test\">";
    echo "<pre>";
    foreach ($params as $testItem) {
        var_dump($testItem);
    }
    echo "</pre>";
	echo "</span>";
}

function autoloader() 
{
    $classes = scandir(ENGINE_DIR);

    foreach ($classes as $value) {
        
        if (strpos($value, 'CLS') !== false) {
            require_once ENGINE_DIR . $value;
        }
    }
}

function setError($text) {
    global $error;
    $error .= $text . "/";
}

function setGreating($text) {
    global $greating;
    $greating = $text;
}

function checkFlag ($flagName, $value, $method = 'post') {
    if ($method == 'post') {
        if (isset($_POST[$flagName]) AND $_POST[$flagName] == $value) return true;
        else return false;
    } else {
        if (isset($_GET[$flagName]) AND $_GET[$flagName] == $value) return true;
    }
}

function myDump($a = "Задайте аргументы для теста"){?>
    <span class="abstract">
<? $params = func_get_args();
     foreach ($params as $a){
        if (is_array($a) or is_object($a)){
            foreach($a as $key => $value){?>
                <details>
                    <summary><?=$key?></summary>
                    <pre>
                    <?var_dump($value)?>
                    </pre>
                </details>
                <?php
            }
          } else var_dump($a);
    }
    echo "</span>";
}?>