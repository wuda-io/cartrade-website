<?php
function getHeader($title, $description, $imageURL=null) {
return '<!DOCTYPE html>
<html lang="de">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>'.$title.'</title>
  <meta name="description" content="'.$description.'">
  <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="./img/apple-touch-icon.png"/>
  <!-- Facebook Open Graph -->
  '.(!is_null($imageURL) ? '<meta property="og:image" content="'.$imageURL.'">' : '').'
  <meta property="og:title" content="'.$title.'">
  <meta property="og:description" content="'.$description.'">
  <meta property="og:type" content="Website">
  <meta property="og:site_name" content="Wuda CarTrade">
  <!-- CSS -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <main>
    <!-- Header -->
    <div class="header-bar white-text">
      <div class="container section">
        <a href="." class="white-text">Wuda CarTrade</a>
      </div>
    </div>';
}
?>