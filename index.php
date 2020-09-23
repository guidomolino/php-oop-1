<?php
//GOAL: nell'ottica di quanto visto a lezione, generare una classe User definendo alcune variabili d'istanza che rappresentino alcune informazioni rilevanti nella registrazione di un utente in un qualsiasi sito a vostra scelta. Generare inoltre costruttore e metodo toString nelle modalita' viste in classe. Generare inoltre alcune istanze della classe e stamparne il valore attraverso la toString

class User{
  public $username;
  public $password;
  public $email;
  public $gender;
  public $dateOfBirth;
  public $location;

  public function __construct($username,$password,$email){
    $this -> username  = $username;
    $this -> password  = $password;
    $this -> email  = $email;
  }

  public function __toString(){

    $str = "User: <br> username: " . $this -> username . "<br>"
                    . "password: " . $this -> password . "<br>"
                    . "email: " . $this -> email . "<br>";

    if ($this -> gender){
      $str .= "gender: " . $this -> gender . "<br>";
    }
    if ($this -> dateOfBirth){
      $str .= "date of birth: " . $this -> dateOfBirth . "<br>";
    }
    if ($this -> location){
      $str .= "location: " . $this -> location . "<br>";
    }

    return $str;
  }
}

$user1 = new User("dust24", "Dustholder13", "dusty@gmail.com");
$user2 = new User("Mich", "michardson187", "michy12@orange.fr");
$user3 = new User("lara", "123456", "laravel@mail.com");
$user4 = new User("simonMars", "marsetra926", "simars@mail.com");

$user2 -> location = "Paris";
$user3 -> gender = "female";
$user3 -> dateOfBirth = "1992-12-12";
$user4 -> gender = "male";
$user4 -> location = "Dublin";

echo $user1;
echo "<br>";
echo $user2;
echo "<br>";
echo $user3;
echo "<br>";
echo $user4;

 ?>
