<?php 

  $dbhost = 'localhost';
  $dbname = "greenhouses";
  $username = "root";
  $password = "root";


  $db = new PDO("mysql:host=$dbhost; dbname=$dbname",$username,$password);

//????????? ???? ??????
  function get_singles(){
    global $db;
    $singles = $db->query("SELECT * FROM greenhous");
    return $singles;
  }

  function get_image(){
    global $db;
      $image = $db->query("SELECT * FROM seeds");
      foreach ($image as $single) {
        # code...
        return $single;
      }
  }
   
  // ????????? ?????? ?? ?? ???????
    function get_single_id($id){
      global $db;
      $singles = $db->query("SELECT * FROM greenhous WHERE ID = $id");
      foreach ($singles as $single) {
        # code...
        return $single;
      }

   }



   // function get_user(){
   //  global $db;
   //  $users = $db->query("SELECT * FROM users");
   //  return $users;
   // }

   // function get_user_id($id){
   //   global $db;
   //    $users = $db->query("SELECT * FROM user WHERE ID = $id");
   //    foreach ($users as $user) {
   //      # code...
   //      return $user;
   //    }
   // }

   function user_id($login, $password){
    global $db;
    $user = $db->query("SELECT * FROM users WHERE Name = '$login' AND password = '$password'");
    foreach ($user as $users) {
        # code...
        return $users;
      }
   }

   function get_grenhouses_id($idUser){
    global $db;
    $greenhouses = $db->query("SELECT * FROM greenhous WHERE id_owner = '$idUser'");
    return $greenhouses;

   }

   function delete_grenhouses($id){
    global $db;
    $delete = $db->query("DELETE FROM `greenhous` WHERE `greenhous`.`ID` = $id");
    return $delete;
   }

   //????????? ???? ?????
     function get_seeds(){
    global $db;
    $singles = $db->query("SELECT * FROM seeds");
    return $singles;
  }

  function get_sectors(){
    global $db;
    $singles = $db->query("SELECT * FROM sectors");
    return $singles;
  }

// //????????? ?????? ?? ??? id
//   function get_genres($id){
//     global $db;
//     $genres = $db->query("SELECT * FROM genres WHERE ID = $id");
//     foreach ($genres as $genry) {
//       # code...
//       return $genry;
//     }
//   }

//   //????????? ??????? ?? ??? id
//   function get_authors($id){
//     global $db;
//     $authors = $db->query("SELECT * FROM authors WHERE ID = $id");
//     foreach ($authors as $author) {
//       # code...
//       return $author;
//     }
//   }

//   function views_update($id){
//     global $db;
//     $db->query("UPDATE single SET View = View + 1 WHERE ID = $id");

//   }

  //?????????? ?????? ?????? ??? ??????
function update_beds_seeds($name,$id){
    global $db;
      $stmt = $db->prepare("UPDATE sectors SET SeedName = :name WHERE ID = $id");
      $stmt->bindParam(':name', $name);
      $stmt->execute();
    }

//?????????? ??????
  function add_greenhouse($name, $id){
    global $db;
      $stmt = $db->prepare("INSERT INTO greenhous (Name, id_owner) VALUES(:name, :id)"); //???????? ??????, ????? ??????? ???? ?????????? ? ????????????
      $stmt->bindParam(':name', $name);
      $stmt->bindParam(':id', $id);
      $stmt->execute();
    }


    //?????????? ?????????????  
    function add_users($name,$email,$roles,$password){
      global $db;
      $stmt = $db->prepare("INSERT INTO users (Name, email,roles, password) VALUES(:name, :email, :roles, :password)");
      $stmt->bindParam(':name', $name);
      $stmt->bindParam(':email', $email);
      $stmt->bindParam(':roles', $roles);
      $stmt->bindParam(':password', $password);
      $stmt->execute();

    }

    //logout


  // function account_entr(){
  //   global $db;
  // $account = $db->query("SELECT * FROM accounts");
  //   return $account;
  // }
 session_start();
  
