<?php

function getPrice($priceInDecimals)
{
    $prix = floatval($priceInDecimals) / 100;

    return number_format($prix, 2, ',', ' ') . ' €';
}
