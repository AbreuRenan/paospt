<!doctype html>
<html lang="pt">

<head>
  <title>P A O S</title>
  <link rel="shortcut icon" href="">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://kit.fontawesome.com/fc2a1ca477.css" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Metrophobic&family=Roboto:wght@300&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Metrophobic&family=Roboto:wght@700&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Metrophobic&family=Roboto:wght@500;700&display=swap"
    rel="stylesheet">

  <script src="https://kit.fontawesome.com/fc2a1ca477.js" crossorigin="anonymous"></script>
  <?php wp_head(); ?>
</head>

<body class="body">
  <!-- MENU -->

  <div class="container-fluid">
    <div class="row">

      <div style="width: 34%; height: 10px; background: #02619D;"></div>
      <div style="width: 33%; height: 10px; background: #4E93CF;"></div>
      <div style="width: 33%; height: 10px; background: #84B6E0;"></div>

      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <nav class="">
              <a href="/home">
                <div class="logo"></div>
              </a>
              <?php
              $menu = [
                'menu' => 'menuhome',
                'container' => 'nav',
                'container_class' => 'main-menu',
                'menu_class' => 'nav-menu',
              ];
              wp_nav_menu($menu);
              ?>
              <button id="menuMobileBtn"></button>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>