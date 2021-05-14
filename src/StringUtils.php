<?php
function capitalize($text)
{
    $nameText = strtoupper($text[0]);
    $names = substr($text, 1);
    $return "{$nameText}{$names}";
}
print_r(capitalize('hello'));