<?php
//create class that will create database
//connect to a database
//display a form
//save the form
//display the saved data from the database

class cms21iL {
  var $host;
  var $username;
  var $password;
  var $table;

  public function display_public() {

  }

  public function display_admin() {

  }

  public function write() {

  }

  public function connect() {
  }

  private funtion builDB() {
    $query = <<<MySQL_QUERY
      CREATE TABLE IF NON EXIST (
        title VARCHAR(150),
        bodytext TEXT,
        created VARCHAR(100)
      )
      MYSQL_QUERY;

      return mysql_query($query);
  }

}

 ?>
