<?php


class test2
{
    function is_power($number,$base)
    {
        $n = log($number, $base);

        return $n == round($n) ? true : false ;
    }

    function format_number($str)
    {
        return preg_replace('#[^(0-9,.)]#', '', $str);
    }

    function sum_digits($int)
    {
        return array_sum(str_split($int));
    }
}

$test2 = new test2();

//echo $test2->is_power(16,2);
//echo $test2->format_number("$4,000.15A");
//echo $test2->sum_digits(9123);