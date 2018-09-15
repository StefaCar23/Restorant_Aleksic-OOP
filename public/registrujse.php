<?php require_once('../private/initialize.php'); ?>

<?php

   /* $id = $_GET['id'] ?? 'greska';
    
    if(!$id){
        echo "NIje nađen id!";
    } */

        $errors = [];
    
    if(is_post_request()){
        $args = [];
        
        $args['imeprezime'] = $_POST['imeprezime'] ?? '';
        $args['mejladresa'] = $_POST['mejladresa'] ?? '';
        $args['pol'] = $_POST['pol'] ?? '';
        $args['datumrodj'] = $_POST['datumrodj'] ?? '';
        
        $clanovi = new Clanovi($args);
        $result = $clanovi->create();
        
        if(is_blank($args['imeprezime']) ){
            $errors[] = 'Morate uneti vaše ime i prezime!';
        }
        
        if(is_blank($args['mejladresa']) ){
            $errors[] = 'Morate uneti mejl adresu!';
        }
        
        if(is_blank($args['pol'])){
            $errors[] = 'Morate uneti pol!';
        }
        
        if(is_blank($args['datumrodj'])){
            $errors[] = 'Mo'
                    . 'rate uneti datum rodjenja!';
        }
        
        if($result === true){
            $new_id = $clanovi->id;
            //$session->message['Uspešno ste se prijavili!'];
            redirect_to('../public/uspesnaprijava.php?id=' . $new_id);
        }
       /* if(is_blank($args['imeprezime'] )){
            echo "Morate uneti ime";
        } */
    }

?>


<?php $page_title = " prijavite se"; ?>

<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="content">
    
    <a href="<?php echo url_for('/index.php') ?>" >Vratite se na početnu stranu</a><br /><br />
    <div class="bicycle new">
        <h1>Prijavite se</h1>
        <p id="demo">Ostavite nam vaše podatke i sve naše ponude će vam blagovremeno stizati na vašu mejl adresu</p>
        <?php echo display_errors($errors); ?>
        <form action="<?php echo url_for('/registrujse.php'); ?>" method="post" >
            <?php include('forms.php'); ?>
            <input type="submit" id="js6" name="prijavi" value="Prijavite se" />
        </form>
    </div>
    
</div>


<?php include(SHARED_PATH . '/public_footer.php'); ?>


