<?php

class DB
{
    public function createOrUpdate()
    {
        return true;
    }
}

class User extends DB
{

}

class Profile extends DB
{

}

class Account
{
    public function newAccount()
    {
        $user = new User();
        $user->createOrUpdate();

        $profile = new Profile();
        $profile->createOrUpdate();
    }
}