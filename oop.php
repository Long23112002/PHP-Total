<?php
echo "OOP";

/**
 *
 */
class User
 {
     private $name;
     private $email;
     private $age;
     private $password;


    public function __construct($name, $email, $age, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
        $this->password = $password;
    }


    public function getName()
    {
        return $this->name;
    }


    public function setName($name): void
    {
        $this->name = $name;
    }


    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email): void
    {
        $this->email = $email;
    }


    public function getAge()
    {
        return $this->age;
    }


    public function setAge($age): void
    {
        $this->age = $age;
    }


    public function getPassword()
    {
        return $this->password;
    }


    public function setPassword($password): void
    {
        $this->password = $password;
    }

    public function getUserData()
    {
        return(object)[
            "name" => $this->name,
            "email" => $this->email,
            "age" => $this->age,
            "password" => $this->password
        ];
    }



 }

 class Employee extends User
 {
     private  $title;

     public function __construct($name, $email, $age, $password , $title)
     {
         parent::__construct($name, $email, $age, $password);
         $this ->title = $title;
     }

        public function getTitle()
        {
            return $this->title;
        }

 }

 $user1 = new User("long" , " long11" , 18 , "123");
// print_r($user1);

foreach ($user1->getUserData() as $key => $value) {
    echo "$key: $value <br>";
}

