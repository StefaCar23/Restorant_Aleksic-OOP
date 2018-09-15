<?php require_once('../private/initialize.php'); ?>

<?php

    $id = $_GET['id'] ?? '';
    
    if(!$id){
        echo "Nije nadjen id!";
    }
    
    $clanovi = Clanovi::find_by_id($id);
   
?>


<?php $page_title = " uspešno ste se prijavili!"; ?>

<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="content">
    
    <a href="<?php echo url_for('/index.php') ?>" >Nazad</a><br /><br />
    <div class="bicycle new">
       <?php
         echo "<h2>Uspešno ste se prijavili!</h2>";
    echo "<p>Vaši podacisu: </p><br />";
    echo "Ime i prezime: " . $clanovi->name() . "<br />";
    echo "Mejl adresa: " . $clanovi->mejladresa . "<Br />";
    echo "Datum rođenja: " . $clanovi->datumrodj . "<Br />";
    echo "Pol: " . $clanovi->pol . "<Br />";
       
       ?>
    </div>
    
</div>


<?php include(SHARED_PATH . '/public_footer.php'); ?>




