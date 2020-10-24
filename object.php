<?php

// make a class for User
class User
{

//make variables for User class
  public $name;
  public $lastname;
  public $username;
  public $age;
  public $email;
  protected $password;
  public $discount = 0;

//make a function to set the discount value
    public function setDiscount($age) {

        if($age >= 45) {
            $this->discount = 15;
        } elseif ($age < 30) {
            $this->discount = 30;
        } elseif ($age > 65) {
            $this->discount = 40;
        }
    }
//make a function to get the discount
    public function getDiscount() {
            return $this->discount;
    }
//make a function to set the password
    public function setPassword($password) {

            $this->password;
    }
//make a function to get the password
    public function getPassword() {

            return $this->password;
        }
//make a function construct to take other specific data about the user
    function __construct($username, $password) {
      $this->username = $username;
      $this->password = $password;
    }
}
// make an ereditary class for employee
class Employee extends User {
  public $level;
  public $residency;

        public function setLevel() {
          if ($age > 45) {
              $this->level = 3;
          } elseif ($age < 30) {
              $this->level = 1;
          } return $level;

        }
}

//Users

//make instance and attributes for user1
$Domenico = new User("Dom92", "Conte876");
$Domenico->name = "Domenico";
$Domenico->lastname = "Capalbo";
$Domenico->age = 28;
$Domenico->email = "capalbodomenico@gmail.com";
//invoke functions
$Domenico->setDiscount($Domenico->age);
$Domenico->setPassword("Conte876");

//make instance and attributes for user2
$Roberto = new User("Robocop", "Speranza876");
$Roberto->name = "Roberto";
$Roberto->lastname = "Bianconi";
$Roberto->age = 65;
$Roberto->email = "roberto.bianconi@gmail.com";
//invoke functions
$Roberto->setDiscount($Roberto ->age);
$Roberto->setPassword("Speranza876");

//make instance and attributes for user3
$Tiziano = new User("titty85", "Gualtieri876");
$Tiziano->name = "Tiziano";
$Tiziano->lastname = "Scott";
$Tiziano->age = 35;
$Tiziano->email = "tiziano.amadeus.scott@gmail.com";
//invoke functions
$Tiziano->setDiscount($Tiziano ->age);
$Tiziano->setPassword("Gualtieri876");
//make an array for users
$users = [$Domenico, $Roberto, $Tiziano];

// var_dump($users);
//Employeers

$Frank = new Employee("Frank", "FrankSinatra1975");
$Frank->name = "Frank";
$Frank->lastname = "Pizzolatti";
$Frank->age = 45;
$Frank->email = "Frankistain.junior@gmail.com";
$Frank->residency ="Via del corso 44";
//invoke functions
$Frank->setDiscount($Frank ->age);
$Frank->setPassword("FrankSinatra1975");
$Frank->setlevel();

$Lorenzo = new Employee("Lollo", "Lorenzino1995");
$Lorenzo->name = "Lorenzo";
$Lorenzo->lastname = "Napoloni";
$Lorenzo->age = 25;
$Lorenzo->email = "Lorenzo.napoloni@gmail.com";
$Lorenzo->residency ="Via Gianfranco Rosi 144";
//invoke functions
$Lorenzo->setDiscount($Lorenzo ->age);
$Lorenzo->setPassword("Lorenzino1995");
$Lorenzo->setlevel();

$employeers = [$Frank, $Lorenzo];
//
// var_dump($employeers);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <title>object-oriented-programming-2</title>
  </head>
  <!-- start body -->
  <body>
   <div>
     <table>
      <thead>
       <tr>
        <th>Name</th>
        <th>Lastname</th>
        <th>username</th>
        <th>age</th>
        <th>email</th>
        <th>Password</th>
        <th>Discount</th>
       </tr>
      </thead>
     <tbody>
      <!-- //make a foreach cicle to get inside the users array -->
     <?php foreach($users as $user): ?>
      <tr>
       <td><?php echo $user->name ?></td>
       <td><?php echo $user->lastname ?></td>
       <td><?php echo $user->username ?></td>
       <td><?php echo $user->age ?></td>
       <td><?php echo $user->email ?></td>
       <td><?php echo $user->getPassword() ?></td>
       <td><?php echo $user->getDiscount() ?></td>
      </tr>
     <?php endforeach ?>
     <!-- end foreach -->
     </tbody>
    </table>
   </div>
   <div>
     <table>
      <thead>
       <tr>
        <th>Name</th>
        <th>Lastname</th>
        <th>username</th>
        <th>age</th>
        <th>email</th>
        <th>Password</th>
        <th>Discount</th>
        <th>Level</th>
        <th>residency</th>
       </tr>
      </thead>
    <tbody>
      <!-- //make a foreach cicle to get inside the users array -->
     <?php foreach($employeers as $employeer): ?>
      <tr>
       <td><?php echo $employeer->name ?></td>
       <td><?php echo $employeer->lastname ?></td>
       <td><?php echo $employeer->username ?></td>
       <td><?php echo $employeer->age ?></td>
       <td><?php echo $employeer->email ?></td>
       <td><?php echo $employeer->getPassword() ?></td>
       <td><?php echo $employeer->getDiscount() ?></td>
       <td><?php echo $employeer->level ?></td>
       <td><?php echo $employeer->residency ?></td>
       <td></td>
       <td></td>
      </tr>
     <?php endforeach ?>
     <!-- end foreach -->
     </tbody>
    </table>
   </div>
  </body>
  <!-- end body -->
</html>
