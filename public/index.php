<?php require_once('../private/initialize.php'); ?>
<?php $page_title = 'Dobrodošli u '; ?>

<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">
    <ul id="menu">
        <li> <a href="<?php echo url_for('/onama.php'); ?>">O nama </a> </li>
        <li> <a href="<?php echo url_for('/jelovnik.php'); ?>">Jelovnik</a> </li>
        <li><a href="<?php echo url_for('/registrujse.php'); ?>" >Registruj se</a></li>
        <li><a href="<?php echo url_for('/porucihranu.php'); ?>">Poruči hranu</a></li>
        <li> <a href="<?php echo url_for('/kontakt.php'); ?>" >Kontakt</a> </li>
    </ul>
</div>
<?php $super_hero_image = 'AdobeStock_18040381_xlarge.jpeg'; ?>

<?php include(SHARED_PATH . '/public_footer.php'); ?>