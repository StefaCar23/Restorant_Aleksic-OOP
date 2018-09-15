<!doctype html>

<html lang="en">
  <head>
    <title>Restoran Aleksić <?php if(isset($page_title)) { echo '- ' . h($page_title); } ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/public.css'); ?>" />
    <script src="jquery-3.1.1.min.js"></script>
   <!-- <script src="skripta.js"></script> -->
  </head>

  <body>

    <header>
      <h1>
        <a href="<?php echo url_for('/index.php'); ?>">
          <img class="bike-icon" src="<?php echo url_for('/images/USDOT_bicycle_symbol.svg') ?>" /><br />
          Restoran Aleksić
        </a>
      </h1>
    </header>
