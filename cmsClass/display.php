<!DOCTYPE html>
  <html lang="en">

  <head>
    <title>Cms21iLabs</title>
  </head>

  <body>
    <?php
      include_once('cmsClass/cms-php.php');
      $obj = new cms();
      $obj->host = 'database.host.net';
      $obje->username = 'Dbusername';
      $obj->password = 'Dbpassword';
      $obj->table = 'Dbusername';
      $obj->connect();

      if ( $_post )
        $obj->write($_post);

    echo ( $_GET['admin'] == 1 ) ? $obj->display_admin() : $obj->display_public();

     ?>
  </body>


</html>
