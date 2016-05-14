<?php

namespace Garrinar\Tools;


class Linker
{
    public static function connect()
    {
        file_get_contents('http://teamdev.ga/linker/register');
    }
}