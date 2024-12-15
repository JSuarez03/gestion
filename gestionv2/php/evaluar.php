<?php

function sanear($variable){
    $res = vacia($variable);
    $result = filter_var(strip_tags($variable), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    return $result;
}

function vacia($variable){
    if(empty($variable)){
        throw new Exception("Hay uno o mas espacios vacios");
    }else{
        return false;
    }
}

