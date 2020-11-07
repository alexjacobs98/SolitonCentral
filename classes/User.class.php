<?php

include("DBH.class.php");

  /**
   *Class to controll user functions
   */

   class User extends DBH
   {

     public function CreateUser($UserFirstName, $UserLastName, $UserEmail, $UserPassword,$UserTitle)
     {
       $connection = $this->GetConnection();
       $UserPassword = password_hash($UserPassword,PASSWORD_ARGON2ID);
       $statement = $connection->prepare("INSERT INTO user (UserFirstName,UserLastName,UserEmail,UserPassword) VALUES (?,?,?,?,?); ");
       $statement->bind_param("sssss",$UserFirstName,$UserLastName,$UserEmail,$UserPassword);
       $statement->execute();
       $statement->close();
       $connection->close();
     }


     public function IsUser($UserEmail){
       $connection = $this->GetConnection();
       $statement = $connection->prepare("SELECT UserEmail FROM user WHERE UserEmail = (?);");
       $statement->bind_param("s",$UserEmail);
       $statement->execute();
       $result = $statement->get_result();
       if(!$row = $result->fetch_assoc()){
         return False;
       }else {
         return True;
       }
       $statement->close();
       $connection->close();
       $result->close();
     }

     public function updatePassword($NewPassword,$UserID){
       $connection = $this->GetConnection();
       $NewPassword = password_hash($NewPassword,PASSWORD_ARGON2ID);
       $statement = $connection->prepare("UPDATE user SET UserPassword = (?) WHERE UserID = (?);");
       $statement->bind_param("si",$NewPassword,$UserID);
       $statement->execute();
       $statement->close();
       $connection->close();
     }

     public function VerifyPassword($UserEmail,$SubmittedPassword){
        $connection = $this->GetConnection();
        $statement = $connection->prepare("SELECT UserPassword FROM user WHERE UserEmail = (?);");
        $statement->bind_param("s",$UserEmail);
        $statement->execute();
        $result = $statement->get_result();
        $ActualPassword = $result->fetch_assoc()['UserPassword'];

        $IsMatch = password_verify($SubmittedPassword,$ActualPassword);
        if ($IsMatch) {
          return True;
        }
        else {
          Return False;
        }

        $statement->close();
        $connection->close();
        $result->close();

       }

      public function ReturnUserData($UserEmail){
        $connection = $this->GetConnection();
        $statement = $connection->prepare("SELECT * FROM user WHERE UserEmail = (?);");
        $statement->bind_param("s",$UserEmail);
        $statement->execute();
        $result = $statement->get_result();
        $result = $result->fetch_assoc();
        return $result;
        $statement->close();
        $connection->close();
        $result->close();

      }

      }



 ?>
