<?php

namespace Src\Controllers;

class MainController
{
    public function main()
    {
        echo 'Main page';
    }

    public function sayHello($name)
    {
        echo 'Hello ' . $name;
    }
}