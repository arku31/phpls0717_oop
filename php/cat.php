<?php

namespace App;

require_once "animal.php";
require_once "trait.php";


class Cat extends Animal implements Liking
{
//    use Export;

    public function sayHi($what = null)
    {
        parent::sayHi($what);
        echo "meow";
    }

    public function exp($data)
    {

    }

    public function moveFile()
    {
        $file = $_FILES['file'];
        if (!empty($file)) {
            print_r($file);
            move_uploaded_file($file['tmp_name'], "../images/" . $file['name']);
        }

    }

    public function like($what)
    {
        $a = rand(0, 1);
        if ($a) {
            echo "Мур";
        }
    }
}

//PSR-4
// \App\Models\User
// PRJECT/app/models/user.php
