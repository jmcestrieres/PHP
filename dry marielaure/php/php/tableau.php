<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<?php
        $a = array(
            array(
                "ville"=>"SAINT-TRIVIER-SUR-MOIGNANS",
                "departement"=>"01",
                "latitude"=>"46.0667",
                "longitude"=>"4.9",
                "population"=>"1900",
                "densite"=>"44"),
            array("ville"=>"OULCHES-LA-VALLEE-FOULON","departement"=>"02","latitude"=>"49.4333","longitude"=>"3.75","population"=>"100","densite"=>"14"),
            array("ville"=>"MARIOL","departement"=>"03","latitude"=>"46.0167","longitude"=>"3.5","population"=>"800","densite"=>"80"),
            array("ville"=>"BELLAFFAIRE","departement"=>"04","latitude"=>"44.4167","longitude"=>"6.18333","population"=>"100","densite"=>"10"),
            array("ville"=>"LE POET","departement"=>"05","latitude"=>"44.2833","longitude"=>"5.88333","population"=>"700","densite"=>"46"),
            array("ville"=>"ALCAY-ALCABEHETY-SUNHARETTE","departement"=>"64","latitude"=>"43.095","longitude"=>"-0.908889","population"=>"200","densite"=>"6"),
            array("ville"=>"LES ANGLES","departement"=>"65","latitude"=>"43.0833","longitude"=>"0.016667","population"=>"100","densite"=>"40"),
            array("ville"=>"LA QUEUE-EN-BRIE","departement"=>"94","latitude"=>"48.7833","longitude"=>"2.58333","population"=>"11400","densite"=>"1242"),
            array("ville"=>"LOC-EGUINER-SAINT-THEGONNEC","departement"=>"29","latitude"=>"48.4667","longitude"=>"-3.96667","population"=>"300","densite"=>"39"),
            array("ville"=>"SAINT-HILAIRE-DE-LA-NOAILLE","departement"=>"33","latitude"=>"44.6012","longitude"=>"0.00166667","population"=>"400","densite"=>"32"),
            array("ville"=>"MARCIAC","departement"=>"32","latitude"=>"43.5333","longitude"=>"0.166667","population"=>"1200","densite"=>"60"),
            array("ville"=>"RAMONVILLE-SAINT-AGNE","departement"=>"31","latitude"=>"43.55","longitude"=>"1.46667","population"=>"11600","densite"=>"1856"),
            array("ville"=>"MARENNES","departement"=>"17","latitude"=>"45.8167","longitude"=>"-1.11667","population"=>"5500","densite"=>"279"),
            array("ville"=>"HALLENNES-LEZ-HAUBOURDIN","departement"=>"59","latitude"=>"50.3333","longitude"=>"3.75","population"=>"300","densite"=>"101"),
            array("ville"=>"PAU","departement"=>"64","latitude"=>"43.3","longitude"=>"-0.366667","population"=>"84000","densite"=>"2575"),
            array("ville"=>"HERES","departement"=>"65","latitude"=>"43.55","longitude"=>"0","population"=>"100","densite"=>"21")

        );
        // var_dump($a);
        $tab = array($a, "ville", "departement", "latitude", "longitude", "population", "densite");
        foreach ($tab as $i => $i_value) {
            echo $tab [$i]. $i_value ;
        }
        print_r($tab);
       
        //     function maFonction($x) {
        //     foreach ($results as $x => $x_value) {
        //         echo "coordonnées ". $x ."value" .$x_value; 
        // }
        // maFonction();
        // }
            //  foreach ($a as $x => $x_value) {
            //     echo "Villes". $x ."Value" .$x_value;
            //     echo $a;
            //     echo "<br>";
            //  }
        // for ($row=1; $row < 7; $row++) { 
        //     echo "<p>" .$tab[$row]. "</p>";
        //     echo "<ul>";
        //     for ($col = 1; $col < 16; $col++) {
        //         echo "<li>".$tab[$row]."</li>";
        //     }
        //       echo "</ul>";
            
        //     }
        


            echo " ------ <br>";


            // $a contient le tableau de tableau 
            foreach($a as $cities){
            echo "<tr>" ."<th>" ."Ville : " ."<td>".$cities["ville"]. "</td>" ."<br>"."</th>";
            echo "<th>" ."Département : "."<td>" .$cities["departement"]. "<td>"."<br>" ."</th>";
            echo "<th>"  ."Latitude : " ."<td>" .$cities["latitude"]. "</td>" ."<br>" ."</th>";
            echo "<th>" ."Longitude : " ."<td>" .$cities["longitude"]. "</td>" ."</th>";
            echo "<th>"  ."Population : " ."<td>".$cities["population"]. "</td>" ."<br>" ."</th>";
            echo "<th>" ."Densité : " ."<td>" .$cities["densite"]. "</td>" ."<br>" ."</th>" ."</tr>";
            echo "<br>";
                
                // echo "<td>" ."Ville : ".$cities["ville"]. "</td>";
                // echo "<br>";
                // echo "<td>" ."Département : " .$cities["departement"]. "<td>";
                // echo "<br>" ;
                // echo "<td>" ."Latitude : ".$cities["latitude"]. "</td>";
                // echo "<br>";echo "<td>" ."Longitude : ".$cities["longitude"]. "</td>";
                // echo "<br>";echo "<td>" ."Population : ".$cities["population"]. "</td>";
                // echo "<br>";echo "<td>" ."Densité : ".$cities["densité"]. "</td>";
                
            }

            // echo "<br>";
            // // MEME CHOSE
            // for($x=0; $x< count($a); $x++){
            //     echo $a[$x]["ville"] . "<br>";
            // }



    ?>
    </section>
   
</body>
</html>