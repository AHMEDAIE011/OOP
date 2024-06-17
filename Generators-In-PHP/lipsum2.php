<?php

function read_file_lines()
{
    foreach (file('lipsum.txt') as $line)
    {
        yield $line;
    }
}

var_dump(read_file_lines());    

$inithial_memory = memory_get_peak_usage(true);// مساحة الميموري قبل استدعاء الفايل 

// مساحة الميموري بعد استدعاء الفايل 
var_dump((memory_get_peak_usage(true) - $inithial_memory) / 1000000 );  