<!DOCTYPE html>
  <html lang="en">

  <head>
    <title>Cms21iLabs</title>
  </head>

  <body>
    <?php
      include_once('cmsClass/cms.php');
      $obj = new cms();
      $obj->host = 'database.host.net';
      $obje->username = 'Dbusername';
      $obj->password = 'Dbpassword';
      $obj->table = 'Dbusername';
      $obj->connect();


      
     ?>
  </body>


</html>
