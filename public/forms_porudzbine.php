
Jelo: <select name="jelo" >
    <option>Izaberite jelo</option>
    <?php $proba = Jelovnik::find_all(); ?>
    <?php foreach($proba as $test){ ?>
    <option value="<?php echo $test->jelo; ?>"><?php echo $test->jelo; ?></option>
    <?php } ?>
</select>


<br /><Br />
Ime i prezime: <input type="text" name="imeprez" /><br /><br />
Adresa: <input type="text" name="adresa" /><br /><br />
Broj telefona: <input type="text" name="brtel" /><br /><br />
Napomena: <textarea name="napomena" rows="5" cols="30" ></textarea><br /><Br />

<!--
Ovo je drugi nacin na koji moze da se napravi select tag, iz pocetka praveci novi query
<select name="jelo">
    <option value="">Izaberite jelo</option>
    <?php
        $sql = "SELECT * FROM meni";
        $result = $database->query($sql);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            //echo $row["jelo"];
    

        ?>
    <option value="<?php echo $row["jelo"]; ?>"><?php echo $row["jelo"]; ?></option>
        <?php 
        }
        } 
        ?>
</select> -->