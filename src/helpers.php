<?php

if (!function_exists('convert_case'))
{
    function convert_case(string $string, string $conversion): string
    {
        return call_user_func(lower_snake_case($conversion), $string);
    }
}

if (!function_exists('strip_special_chars'))
{
    function strip_special_chars(string $string): string
    {
        return str_replace(['_', '-'], ' ', $string);
    }
}

if (!function_exists('upper_case'))
{
    function upper_case(string $string): string
    {
        return ucwords(strtolower(strip_special_chars($string)));
    }
}

if (!function_exists('lower_case'))
{
    function lower_case(string $string): string
    {
        return strtolower(strip_special_chars($string));
    }
}

if (!function_exists('tight_case'))
{
    function tight_case(string $string): string
    {
        return str_replace(' ', '', lower_case($string));
    }
}

if (!function_exists('lower_snake_case'))
{
    function lower_snake_case(string $string): string
    {
        return str_replace(' ', '_', lower_case($string));
    }
}

if (!function_exists('upper_snake_case'))
{
    function upper_snake_case(string $string): string
    {
        return str_replace(' ', '_', upper_case($string));
    }
}

if (!function_exists('lower_camel_case'))
{
    function lower_camel_case(string $string): string
    {
        return lcfirst(str_replace(' ', '', upper_case($string)));
    }
}

if (!function_exists('upper_camel_case'))
{
    function upper_camel_case(string $string): string
    {
        return str_replace(' ', '', upper_case($string));
    }
}

if (!function_exists('lower_hyphen_case'))
{
    function lower_hyphen_case(string $string): string
    {
        return str_replace(' ', '-', lower_case($string));
    }
}

if (!function_exists('upper_hyphen_case'))
{
    function upper_hyphen_case(string $string): string
    {
        return str_replace(' ', '-', upper_case($string));
    }
}
