<?php require_once('../private/initialize.php'); ?>

<?php $page_title = "jelovnik" ?>

<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="page">
    <div class="intro">

<?php

    $sql = "SELECT jelo, cena FROM meni ORDER BY jelo asc";
    $result = $database->query($sql);
    
    //print_r($result);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo $row["jelo"] . " " . $row["cena"] . "<br />";
        }
    }

?>

               
    </div>
</div>
    
<?php include(SHARED_PATH . '/public_footer.php'); ?>