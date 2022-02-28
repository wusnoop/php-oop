<?php
class User{
    public $name;
    public $login;
    public $password;

   function showinfo(){

       echo "<p>Name :{$this->name}";
       echo "<p>Login :{$this->login}";
       echo "<p>Paswword :{$this->password}";
       echo $this->drawLine();
}
    function drawLine(){
       echo "<hr>";
    }
};
$user1 = new User();
$user2 = new User();
$user3 = new User();

$user1->name = "Konstantin";
$user1->login = "wusnoop";
$user1->password = "qwerty";

$user2->name = "Misha";
$user2->login = "Anduin";
$user2->password = "asdfgh";

$user3->name = "Sylvana";
$user3->login = "Death";
$user3->password = "For the Horde";

$user1->showinfo();
$user2->showinfo();
$user3->showinfo();


