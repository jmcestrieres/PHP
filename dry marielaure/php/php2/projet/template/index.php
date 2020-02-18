    <?php 

    // First of all loading the config file and the menu file:
    include  "config/config.php";
    include  "template/menu/menu.php";
    
    //One Method
    // If page parameter exists then :
    // if(isset($_GET["page"])){
    //     // Si la valeur du paramètre "page" existe, en tant que clé de liens alors : 
    //     if(array_key_exists($_GET["page"], liens)){
    //         // On affiche la page qui a le meme nom que la valeur du parametre "page"
    //         include "template/pages/" .$_GET["page"] . ".php";
    //         // include "template/pages/accueil.php";
    //     }else{
    //         // Sinon page "404"
    //         include "template/pages/notfound.php";
    //     }
    // }else{
    //     include "template/pages/accueil.php";
    // }


    //Another (more simple) method:
    if($_GET["page"] == "accueil"){
        include "template/pages/accueil.php";
    }else if($_GET["page"] == "contact"){
        include "template/pages/contact.php";
    }else if($_GET["page"] == "about"){
        include "template/pages/about.php";
    }else if($_GET["page"] == "produits"){
        include "template/pages/produits.php";
    }else if($_GET["page"] == "blog"){
        include "template/pages/blog.php";
    }else if(!isset($_GET["page"])){
        include "template/pages/accueil.php";
    }else{
        include "template/pages/notfound.php";
    }





  
    // loading the footer in index
    include  "template/footer/footer.php";
    ?>

