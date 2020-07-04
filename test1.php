<?php


class test1
{
    static  function last_word($sentence)
    {
        if (empty($sentence)) {
            return 0;
        }

          // the first way
//        $pieces = explode(' ', $sentence);
//        $last_word = array_pop($pieces);

          // the second way
//        preg_match('#[^ ]*$#', $sentence, $results);
//        $last_word = $results[0];

        // the third way, my favorite
        $last_word_start = strrpos($sentence, ' ') + 1;
        $last_word = substr($sentence, $last_word_start);

        return $last_word;
    }

    static function sql_date_format($dateStr)
    {
       return date("Y-m-d H:i:s", $dateStr);
    }

    static function extract_string($str)
    {
        preg_match("#\[(.*?)\]#", $str, $results);
        return $results[1] ?? '';
    }
}

//echo test1::last_word('returns the length of the
//last word of a given sentence, or 0 for empty string');

//echo test1::extract_string('The quick
//[brown fox].');