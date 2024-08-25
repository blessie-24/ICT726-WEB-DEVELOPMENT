<?php

namespace util;

final class Webie {
    public static bool $IS_WEB = false;
    public const HTML_NEW_LINE = "<br>";
    public const PHP_NEW_LINE = \PHP_EOL;
    public static function getNewLine() {
        return ( (Webie::$IS_WEB)
            ? Webie::HTML_NEW_LINE : Webie::PHP_NEW_LINE 
        ); 
    } 
}
