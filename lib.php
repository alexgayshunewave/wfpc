<?php
function arguments($argv) {
    $_ARG = array();
    foreach ($argv as $arg)
    {
        if (preg_match('#^-{1,2}([a-zA-Z0-9]*)=?(.*)$#', $arg, $matches))
        {
            $key = $matches[1];
            switch ($matches[2])
            {
                case '':
                case 'true':
                    $arg = true;
                    break;
                case 'false':
                    $arg = false;
                    break;
                default:
                    $arg = $matches[2];
            }
            $_ARG[$key] = $arg;
        }
        else
        {
            $_ARG['input'][] = $arg;
        }
    }
    return $_ARG;
}