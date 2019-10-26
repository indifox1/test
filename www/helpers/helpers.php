<?php

function dd($x)
{
    echo '<pre>';
    var_dump($x);
    die();
}

function redirect($path)
{
    return header('location: ' . $path);
}