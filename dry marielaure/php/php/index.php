<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Echo</title>
</head>
<body>
    <?php 
        $txt1 = "Hello";
        echo var_dump($txt1);

        $text1 = "hello";
        $text2 = "world!";
        $GLOBAL[$yo] = $GLOBAL[$text1] + $GLOBAL[$text2];

        echo "<h3>" .$text1. "</h3>";
        echo "<h3>" .$text2. "</h3>";
        echo "<h3>" .$text1 . " ". $text2. "</h3>";


        $tab = array(15,22);
        $tabCrochets = [15,22];
        var_dump($tab);
        var_dump($tabCrochets);
        $jours = array("Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");
        var_dump($tab);

        for ($row = 0; $row <5; $row++) {
            echo "<ul>";
            echo "<li>" .$jours[$row] ."</li>";
            echo "</ul>";
        }
       
        
        echo $jours[0].$jours[1].$jours[2].$jours[3].$jours[4].$jours[5] ."<br>";
        echo $jours[2] ."<br>";
        echo $jours[3]."<br>";

        array_push($jours, "Dimanche");
        
        for ($row = 0; $row <7; $row++) {
            echo ($jours[$row]);
            echo "<br>";
        }
        
        unset($jours[6]);
        for ($row = 0; $row <7; $row++) {
            echo ($jours[$row]);
        }
        

        
            $activites = array("Lundi"=>"Php","Mardi"=>"Javascript", "Mercredi"=>"Typescript","Jeudi"=>"Angular","Vendredi"=>"SQL","Samedi"=>"Python","Dimanche"=>"Tout");
            asort($activites["Dimanche"] = "mon sommeil");
            
            foreach ($activites as $x => $x_value) {
               echo "Le ". $x .", Je travaille sur " .$x_value;
               echo "<br>";
            }
            var_dump($activites);

            $pierre = array("1"=>"Php","2"=>"Javascript","3"=>"Python");
            $paul = array("1"=>"Javascript","2"=>"Css","3"=>"Php");
            $jacques = array("1"=>"Java","2"=>"Php","3"=>"Javascript");
            
            

             $preferences = array(
               array("1"=>"Php","2"=>"Javascript","3"=>"Python"),
               array("1"=>"Javascript","2"=>"Css","3"=>"Php"),
               array("1"=>"Java","2"=>"Php","3"=>"Javascript"),
                
             );
             var_dump($preferences);
            //  $preferences = array_merge($pierre, $paul, $jacques);
            //  var_dump($preferences);
             echo "<p><b> Langages préférés de Pierre :</p></b>";
             echo $preferences[0][0] ." ".$preferences[0][1] .", " .$preferences[0][2]. ", " .$preferences[0][3].".<br>";
             echo "<p><b> Langages préférés de Paul :</p></b>";
             echo $preferences[1][0] ." " .$preferences[1][1] .", " .$preferences[1][2]. ", " .$preferences[1][3].".<br>";
             echo "<p><b> Langages préférés de Jacques :</p></b>";
             echo $preferences[2][0] ." "  .$preferences[2][1] .", " .$preferences[2][2] .", " .$preferences[2][3].".<br>";

             $preferences = array_merge($pierre, $paul, $jacques);
             var_dump (array_count_values($preferences));

            
                // echo $preferences[1][0] .$preferences[1][1].$preferences[1][2].".<br>";
                // echo $preferences[2][0].$preferences[2][1].$preferences[2][2].".<br>";
                // echo $preferences[3][0].$preferences[3][1].$preferences[3][2].".<br>";





            // for ($row=0; $row < 3; $row++) { 
            //    echo "<p> Langages préférés " .$row. "</p>";

            //    echo "<ul>";
            //    for ($col = 0; $col < 3; $col++) {
            //     echo "<li>".$preferences[$row][$col]."</li>";
              
                
            //    }
            //    echo "</ul>";
            // }
           

            

        
        
    ?>
</body>
</html>