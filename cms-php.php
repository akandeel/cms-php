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
    return <<<ADMIN_FORM

    <form action="{$_SERVE['PHP_SELF']}" method="post"

      <label for="title">Title:</label>
      <input name="title" id="title" type="text" maxlength="150" />

      <label for="bodytext">Body Text:</label>
      <textarea name="bodytext" id="bodytext"></textarea>

      <input type="submit" value="create This entry" />

    </form>

  ADMIN_FORM;

  }

  public function write() {

  }

  public function connect() {
//connecting to the database
    myql_connect($this->host,$this->username,$this->password) or die("could not connect. " . mysql_error());
    mysql_select_db($this->table) or die("could not select database. ". mysql_error());
//makes sure we save data in correct place.
    return $this->builDB();
//then runs buildDB function.
  }

  private funtion builDB() {
//create DB
//THIS FUNCTION RUNS EVERYTIME PAGE IS LOADED
    $query = <<<MySQL_QUERY
      CREATE TABLE IF NOT EXISTS (
        title VARCHAR(150),
        bodytext TEXT,
        created VARCHAR(100)
      )
      MYSQL_QUERY;

      return mysql_query($query);
  }

}

 ?>
