<?php
namespace Home;
class User {
    public $name = 'Имя';
    public $password = 'Пороль';
    public $email = 'Емейл';
    public $city = 'Город';

    function __construct($name,$password,$email,$city)
    {
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        $this->city = $city;
    }
    function GetInfo(){
        $information = "{$this->name}" . "{$this->password }" . "{$this->city }" . "{$this->email}";

        return $information;
    }
    }

    class Moderator extends User{
        public $info;
        public $rights;

        function __construct($name,$password,$email,$city,$info,$rights)
        {
            parent:: __construct($name,$password,$email,$city);
            $this->info = $info;
            $this->rights = $rights;
        }
        function GetInfo(){
            $information = parent::GetInfo();
            $information .= "{$this->info}"."{$this->rights}";

            return $information;
        }
    }

$admin = new User("Vlad","123","gmail.com","Odessa");
$moder12 = new Moderator("Lol","123","lol@gmail.com","Odessa","Moder", "Pro");
echo $admin->GetInfo();
echo $moder12->GetInfo();


/*$admin->name = 'Vlad ';
    echo $admin->name;

$user1 = new User;
$user1 -> name = "top";
echo $user1->name;*/

?>
