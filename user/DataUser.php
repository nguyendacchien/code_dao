<?php


class DataUser
{
    public static $path = "user.json";
    public static function loadUser()
    {
        $userJson = file_get_contents(self::$path);
        $user =json_decode($userJson);
        return self::convertUser($user);
    }

    public static function saveUser($user)
    {
        $userJson = json_encode($user);
        file_put_contents(self::$path, $userJson);
    }

    public static function convertUser($user)
    {
        $userss = [];
        foreach ($user as $item){
            $users = new User($item->name ,$item->pass);
            array_push($userss, $users);
        }
        return $userss;
    }

    public static function addUsers($users)
    {
        $userss = self::loadUser();
        array_push($userss, $users);
        self::saveUser($userss);
    }

    public static function checkLog($users)
    {
        $userss = self::loadUser();
        foreach ($userss as $item){
            if ($users->name==$item->name && $users->pass==$item->pass){
                return true;
            }
        }
        return false;
    }

    public static function login($name, $pass)
    {
        $users = new User($name, $pass);
        if (self::checkLog($users)){
            session_start();
            $_SESSION['name']=$name;
            $_SESSION['pass']=$pass;
            header("location: ../index.php");
        } else {
            echo "Invalid userName";
        }
    }

    public static function checkSignup()
    {
        if (!strlen()){

        }

    }

}