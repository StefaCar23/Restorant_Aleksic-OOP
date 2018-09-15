<?php require_once('../private/initialize.php'); ?>

<?php

    $id = $_GET['id'] ?? '';
    
    if(!$id){
        echo "Nije nadjen id!";
    }
    
    $porudzbine = Porudzbine::find_by_id($id);
   
?>


<?php $page_title = " uspešno ste poručili hranu!"; ?>

<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="content">
    
    <a href="<?php echo url_for('/porucihranu.php') ?>" >Nazad</a><br /><br />
    <div class="bicycle new">
       <?php
         echo "<h2>Uspešno ste poručili hranu!</h2>";
    echo "<p>Vaša porudžbina je: </p><br />";
    echo "Jelo: " . $porudzbine->jelo . "<Br />"; 
    echo "Ime i prezime: " . $porudzbine->imeprez . "<br />";
    echo "Adresa: " . $porudzbine->adresa . "<Br />";
    echo "Broj telefona: " . $porudzbine->brtel . "<Br />";
    echo "Napomena: " . $porudzbine->napomena . "<Br />";
       
       ?>
    </div>
    
</div>


<?php include(SHARED_PATH . '/public_footer.php'); ?>




