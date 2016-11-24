<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $file = 'log.txt';
      $ipaddress = $_SERVER['REMOTE_ADDR'];
      $date = date('d/F/Y h:i:s');
      $browser = $_SERVER['HTTP_USER_AGENT'];
      $fp = fopen($file, 'a');
      $fwrite($fp, $ipaddress.' '.$date.' '.$browser"\r\n");
      fclose($fp);
    ?>
    <h1>Hello..</h1>
  </body>
</html>
