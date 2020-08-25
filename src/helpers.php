<?php

namespace NoGePhone;

function get_rand_str(int $length) {
    $chars  = array_merge(range('a', 'z'), range('A', 'Z'), ['!', '@', '#', '$', '%', '&', '*']);
    $length = $length > 0 ? $length : 16;
    $max    = count($chars) - 1;
    $str    = "";

    while ($length--) {
        $str .= $chars[mt_rand(0, $max)];
    }

    return $str;
}
