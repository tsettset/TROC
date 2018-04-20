<?php
$GLOBALS['sitename']='Troc';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="troc echange communaute">
  <meta name="author" content="Hat&Fat">
  <link rel="icon" href="img/favicon.ico">

  <?php
  echo '<title>';
  if (isset($GLOBALS['currentPageName']))
  {
    echo $GLOBALS['currentPageName'].' -  ';
  }
  echo $GLOBALS['sitename'].'</title>';
  ?>

  </head>
  <body>
