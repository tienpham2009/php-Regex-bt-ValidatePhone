<?php

function checkPhone($phone)
{
    $pattern = "/^[0-9]{2}-[0][0-9]{9}$/";

    if (preg_match($pattern, $phone)){
        echo $phone." hop le";
    }else{
        echo $phone." khong hop le";
    }
}

$phone = "84-0968186725";
checkPhone($phone);