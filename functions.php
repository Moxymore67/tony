<?php
/**
 * FUNCTIONS
 */

/**
 * Dynamic generation of my age, taking into account my birthday
 */
function cvMyAge($date) { // Y-m-d format
    $now = explode("-", date('d-m-Y'));
    $dob = explode("-", $date);
    $dif = $now[2] - $dob[2];
    if ($dob[1] > $now[1]) { // birthday month has not hit this year
        $dif -= 1;
    }
    elseif ($dob[1] == $now[1]) { // birthday month is this month, check day
        if ($dob[2] > $now[2]) {
            $dif -= 1;
        }
        elseif ($dob[2] == $now[2]) { // Happy Birthday!
            $dif;
        };
    };
    return $dif;
}

/**
 * Multiple spaces and new lines replaced with a single space
 */
function cvOneSpaceOnlyForString($string) {
    $str = preg_replace('/\s+/', ' ', trim($string));
    return $str;
}