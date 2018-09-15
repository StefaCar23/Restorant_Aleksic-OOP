<?php require_once('../private/initialize.php'); ?>

<?php $page_title = "jelovnik" ?>

<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="page">
    <div class="intro">
        <a href="<?php echo url_for('/index.php') ?>" >Vratite se na početnu stranu</a><br /><br />
        <h2>Ovde možete pročitati naš jelovnik</h2>
      <!-- iskoristiti ovo za kasnije
      <select name="forma" onchange="location = this.options[this.selectedIndex].value;">
            <option>Poredjajte jela po...</option>
            <option value="poceni.php">Ceni</option>
 <option value="azbucnired.php">Azbucnom redu</option>
 <option value="Sitemap.php">Sitemap</option>
</select>
        <a href="poceni.php" >Po ceni</a> -->
       
        <table>
            <tr>
                <th>Jelo</th>
                <th>Cena</th>
            </tr>
                
                <?php $jelovnik = Jelovnik::find_all(); ?>
                <?php foreach($jelovnik as $jelo){ ?>
            
            <tr>
                <td> <?php echo h($jelo->jelo);  ?> </td>
                <td><?php echo h($jelo->cena); ?> </td>
            </tr>
            
                <?php } ?>
            
        </table>
        
 
        
        
    </div>
</div>
    
<?php include(SHARED_PATH . '/public_footer.php'); ?>