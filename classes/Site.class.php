<?php

  include("DBH.class.php");

  /**
   * Class for handeling site objects
   */
  class Site extends DBH
  {
    public function GetActiveSites(){
      $connection = $this->GetConnection();
      $statement = $connection->prepare("SELECT * FROM site WHERE SiteActive = (?);");
      $bool = True;
      $statement->bind_param("i",$bool);
      $statement->execute();
      $result = $statement->get_result();
      return $result;
      $statement->close();
      $connection->close();
      $result->close();
    }
    public function GetSiteInformation($SiteID){
      $connection = $this->GetConnection();
      $statement = $connection->prepare("SELECT * FROM site WHERE SiteID = (?);");
      $statement->bind_param("i",$SiteID);
      $statement->execute();
      $result = $statement->get_result();
      return $result;
      $statement->close();
      $connection->close();
      $result->close();
    }
  }

?>
