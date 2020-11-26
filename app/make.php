<?php

if(empty($value)){
    if(defined('FOO') &&  FOO === 'aaa'){
        header('Location: ' . BAR);
    } else {
        header('Location: ' . $location);
    }
    exit;
}
