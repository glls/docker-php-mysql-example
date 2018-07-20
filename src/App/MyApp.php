<?php
namespace App;

class MyApp
{
    public function hello()
    {
        echo '<h1>Hello World of PHP '.(5+2).'</h1>';
        // $this->showInfo();
    }

    private function showInfo()
    {
        phpinfo();
    }
}
