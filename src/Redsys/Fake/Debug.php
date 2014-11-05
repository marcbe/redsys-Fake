<?php
namespace Redsys\Fake;

class Debug
{
    static public function d($info, $title = '', $shift = 1)
    {
        $backtrace = debug_backtrace();

        while ($shift > 0) {
            $last = array_shift($backtrace);
            $shift--;
        }

        $row = str_replace(__DIR__, '', $last['file']);

        if ($title) {
            $row .= ' - '.$title;
        }

        echo '<code><strong>['.$last['line'].'] '.$row.'</strong></code>';
        echo '<pre>'; var_dump($info); echo '</pre>';
    }

    static public function dd($info, $title = '')
    {
        die(self::d($info, $title, 2));
    }
}