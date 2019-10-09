<?php

abstract class Controller
{
    public function view($path, $data = [])
    {
        foreach ($data as $key => $value) {
            $$key = $value;

        }

        return include __DIR__ . '/../views/' . $path . '.php';
    }
}