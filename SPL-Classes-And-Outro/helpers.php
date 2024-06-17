<?php
    
if (!function_exists('collect')) {
    function collect(array $items)
    {
        return new Collection($items);
    }
}