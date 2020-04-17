<?php
namespace App\wcs;

class Hello
{
    public $hello;

    public function talk()
    {
        $this->hello = "hello";
        return "Hello 🌍 !";
    }
}
