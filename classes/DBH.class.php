<?php
  /**
   * Class for handling database connection details
   */
  class DBH
  {
    private $dbServer = "localhost";
    private $dbUser = "root";
    private $dbPassword = "";
    private $dbName = "solitoncentral";

    public function GetConnection(){
      $connection = $connection = new mysqli($this->dbServer,$this->dbUser,$this->dbPassword,$this->dbName);
      return $connection;
    }
  }



 ?>
