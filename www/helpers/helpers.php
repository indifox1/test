<?php

function dd($x)
{
    echo '<pre>';
    var_dump($x);
    die();
}
function redirect($path){
    header('location: '.$path);

}