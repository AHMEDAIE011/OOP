<?php

$inithial_memory = memory_get_peak_usage(true);// مساحة الميموري قبل استدعاء الفايل 

foreach (file('lipsum.txt') as $line); // تم استدعاء الفايل


// مساحة الميموري بعد استدعاء الفايل 
var_dump((memory_get_peak_usage(true) - $inithial_memory) / 1000000 );  