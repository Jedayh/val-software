<br>
<br>
<br>
<?php
        $results = file_get_contents('https://catalogue.valsoftware.cloud/ASSETS_CATALOGUE_ws/catalogue/produit/1');
        $results = json_decode($results);
        // echo $results;
        var_dump($results);
?>