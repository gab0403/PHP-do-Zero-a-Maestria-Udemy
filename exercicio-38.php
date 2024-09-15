<?php

function retornArrayEmFormaDeString() {
    $arr = ["cachorro", "gato", "galinha"];
    $func = implode(', ', $arr);
    return "Esses animais são fofinhos $func.";

}

echo retornArrayEmFormaDeString();