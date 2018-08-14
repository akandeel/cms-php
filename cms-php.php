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
    $q = SELECT * FROM testDB ORDER BY created DESC LIMIT 3"
    $r = mysql_query($q);

    if (#r !== false && mysql_num_rows($r) > 0 ) {
      while ($a = mysql_fetch_assoc($r) ) {
        $title = stripslashes($a['title']);
        $bodytext = stripslashes($a['bodytext']);

        $entry_display = <<< ENTRY_DISPLAY

  <h2>title</h2>
  <p>$bodytext</p>
      }
    }
  }

  public function display_admin() {
//PPH_SELF IS A SHORTCUT TO THE FILE DISPLAY.php
//CREATE FORM USING HEREDOC SYNTAX
    return <<<ADMIN_FORM

    <form action="{$_SERVER['PHP_SELF']}" method="post"

      <label for="title">Title:</label>
      <input name="title" id="title" type="text" maxlength="150" />

      <label for="bodytext">Body Text:</label>
      <textarea name="bodytext" id="bodytext"></textarea>

      <input type="submit" value="create This entry" />

    </form>

  ADMIN_FORM;

  }

  public function write($p) {
    if ( $p['title'])
      $title = mysql_real_escape_string($p['title']);
    if ($p['bodytext'])
      $bodytext = mysql_real_escape_string($['bodytext']);
    if ( $title && $bodytext ) {
      $created = time();
      $sql_query = "INSERT INTO test DB VALUES('$title', '$bodoytext', '$created')";

    return mysql_query($sql_query);
  } else { return false; }
    }

  }


  public function connect() {
    myql_connect($this->host,$this->username,$this->password) or die("could not connect. " . mysql_error());
    mysql_select_db($this->table) or die("could not select database. ". mysql_error());

    return $this->builDB();

  }

  private funtion builDB() {

    $query = <<<MySQL_QUERY
      CREATE TABLE IF NOT EXISTS (
        title VARCHAR(150),
        bodytext TEXT,
        created VARCHAR(100)
      )
      MYSQL_QUERY;

      return mysql_query($sql_query);
  }

}

 ?>
