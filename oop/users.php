<?php

function __autoload($class){
    include $class.'.class.php';
}

class User extends UserAbstract {
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
       echo $this->drawLine();
       echo "<p>Name :{$this->name}";
       echo "<p>Login :{$this->login}";
       echo "<p>Paswword :{$this->password}";

}
    function drawLine(){
       echo "<hr>";
    }
};

$user1 = new User("Konstantin","wusnoop", "qwerty" );
$user2 = new User("Misha","Anduin","asdfgh"  );
$user3 = new User("Sylvana", "Death", "For the Horde");

$user = new SuperUser("Kevin", "Smith", "WTF", "Admin");

$user1->showinfo();
$user2->showinfo();
$user3->showinfo();
$user->showinfo();
echo "<hr>";
print_r($user->getInfo());

