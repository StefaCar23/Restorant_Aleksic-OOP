<?php require_once('../private/initialize.php'); ?>
<?php $page_title = 'Naručite hranu'; ?>

<?php 
    
        $errors = [];
    
if(is_post_request()){
        $args = [];
        
        $args['jelo'] = $_POST['jelo'] ?? '';
        $args['imeprez'] = $_POST['imeprez'] ?? '';
        $args['adresa'] = $_POST['adresa'] ?? '';
        $args['brtel'] = $_POST['brtel'] ?? '';
        $args['napomena'] = $_POST['napomena'] ?? '';
        
        $narudzbine = new Porudzbine($args);
        $result = $narudzbine->create();
        //$greska =  $narudzbine->errors;
        
        if(is_blank($args['jelo'])){
            $errors[] = 'Morate izabrati jelo!';
        }
        if(is_blank($args['imepresime'])){
            $errors[] = 'Morate uneti vaše ime i prezime!';
        }
        if(is_blank($args['adresa'])){
            $errors[] = 'Morate uneti vašu adresu!';
        }
        if(is_blank($args['brtel'])){
            $errors[] = 'Morate uneti vaš broj telefona!';
        }
        
        if($result === true){
            $new_id = $narudzbine->id;
            redirect_to('../public/uspesnaporudzbina.php?id=' . $new_id);
        }
        
    }

?>



<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="content">
    
    <a href="<?php echo url_for('/index.php') ?>" >Vratite se na početnu stranu</a><br /><br />
    <div class="bicycle new">
        <h1>Napravite vašu porudžbinu</h1>
        <p>Poručite hranu i dostavićemo vam porudžbinu na vašu adresu u roku od 30 minuta!</p>
         <?php echo display_errors($errors); ?>
        <form action="<?php echo url_for('/porucihranu.php'); ?>" method="post" >
            <?php include('forms_porudzbine.php'); ?>
            
            <input type="submit" name="poruci" value="Poručite hranu" />
        </form>
    </div>
    
</div>


<?php include(SHARED_PATH . '/public_footer.php'); ?>

SLEDEĆI ZADACI:
1. NAPRAVITI FORMS PORUDZBINE
2. NAPRAVITI PHP KOD ZA UNOS U BAZU
3. NAPRAVITI STRANICU USPEŠNA PORUDŽBINA
4. PROBATI DA NAPRAVIS POVEZIVANJE TEBELA
5. pROBATI RAZNE SQL KOMBINACIJE 