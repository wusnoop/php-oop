<?php
class User{
    public $name;
    public $login;
    public $password;

    function __construct($name, $login, $password){
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
    }
    function __destruct(){
        echo  "<p>Пользователь {$this->login}  удалён";
    }
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
$user1 = new User("Konstantin","wusnoop", "qwerty" );
$user2 = new User("Misha","Anduin","asdfgh"  );
$user3 = new User("Sylvana", "Death", "For the Horde");



$user1->showinfo();
$user2->showinfo();
$user3->showinfo();


