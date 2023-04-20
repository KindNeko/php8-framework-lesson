<?php

function debug($data, $exit = false)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
    if ($exit) {
        exit;
    }
}

function h($str)
{
    return htmlspecialchars($str);
}