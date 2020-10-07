<?php
session_start();
// recuperation des infos
$classe = $_POST['class'];
$classe2 = $_POST['class2'];
$name = $_POST['name'];
$name2 = $_POST['name2'];
$weapon = $_POST['weapon'];
$weapon2 = $_POST['weapon2'];

// premier if pour avoir les toutes les infos
if (($name != "") && ($name2 != "") && ($classe != "") && ($classe2 != "") && ($name != "") && ($name2 != "") && ($weapon != "") && ($weapon2 != "")) {
    //creation de la classe personnage
    class Personnage
    {
        public $name;
        function __construct($name)
        {
            $this->name = $name;
        }
    }
    //creation de la classe junior qui decoul de personnage
    class Junior extends Personnage
    {
        public $name;
        function __construct($name)
        {
            parent::__construct($name);
        }
        function stat()
        {
            $stat = array(
                "name" => $this->name,
                "hp" => "100",
            );
            return $stat;
        }
    }
    //creation de la classe confirme qui decoule de personnage
    class Confirme extends Personnage
    {
        public $name;
        function __construct($name)
        {
            parent::__construct($name);
        }
        function stat()
        {
            $stat = array(
                "name" => $this->name,
                "hp" => "200",
            );
            return $stat;
        }
    }
    //creation de la classe veteran qui decoule de la classe personnage
    class Veteran extends Personnage
    {
        public $name;
        function __construct($name)
        {
            parent::__construct($name);
        }
        function stat()
        {
            $stat = array(
                "name" => $this->name,
                "hp" => "150",
            );
            return $stat;
        }
    }
    //creation de l'arme sword
    class Sword
    {
        public $dammage;
        public $defense;
        function __construct()
        {
            $this->dammage = "15";
            $this->defense = "15";
        }
        function stat($stat)
        {
            $weapon = array(
                "dammage" => $this->dammage,
                "defense" => $this->defense,
            );
            array_push( $stat, $weapon);

            return $stat;
        }
    }
    //creation de l'arme shield
    class Shield
    {
        public $dammage;
        public $defense;
        function __construct()
        {
            $this->dammage = "50";
            $this->defense = "30";
        }
        function stat($stat)
        {
            $weapon = array(
                "dammage" => $this->dammage,
                "defense" => $this->defense,
            );
            array_push( $stat, $weapon);

            return $stat;
        }
    }
    //creation de l'arme spear
    class Spear
    {
        public $dammage;
        public $defense;
        function __construct()
        {
            $this->dammage = "20";
            $this->defense = "8";
        }
        function stat($stat)
        {
            $weapon = array(
                "dammage" => $this->dammage,
                "defense" => $this->defense,
            );
            array_push( $stat, $weapon);

            return $stat;
        }
    }
    //creation de l'arme bow
    class Bow
    {
        public $dammage;
        public $defense;
        function __construct()
        {
            $this->dammage = "30";
            $this->defense = "5";
        }
        function stat($stat)
        {
            $weapon = array(
                "dammage" => $this->dammage,
                "defense" => $this->defense,
            );
            array_push( $stat, $weapon);
            return $stat;
        }
    }
    // creation de la fonction fight1 qui faire taper le personnage 2 puis le 1
    function fight1($stat, $stat2){
        //personnage 1 prend des degats
        $i = rand(0, 10);
        switch ($i) {
            case '4':
                // coup critique
                $def = $stat['0']['defense'] * 2;
                $stat['hp'] = $stat['hp'] + ($def - $stat2['0']['dammage']);
                break;
            case '8':
                // pas de defense
                $def = 0;
                $stat['hp'] = $stat['hp'] - $stat2['0']['dammage'];
                break;
            default:
                //defense normale
                $def = $stat['0']['defense'] * 0.5;
                $stat['hp'] = $stat['hp'] + ($def - $stat2['0']['dammage']);
                break;
        }
        //personnage 2 prend des degats
        $i = rand(0, 10);
        switch ($i) {
            case '4':
                // coup critique
                $def = $stat2['0']['defense'] * 2;
                $stat2['hp'] = $stat2['hp'] + ($def - $stat['0']['dammage']);
                break;
            case '8':
                // pas de defense
                $def = 0;
                $stat2['hp'] = $stat2['hp'] - $stat['0']['dammage'];
                break;
            default:
                //defense normale
                $def = $stat2['0']['defense'] * 0.5;
                $stat2['hp'] = $stat2['hp'] + ($def - $stat['0']['dammage']);
                break;
        }
        $arr = array($stat,$stat2);
        return $arr;
    }
    // creation de la fonction fight2 qui fait tapper le personnage 1 avant le 2
    function fight2($stat, $stat2){
        //personnage 2 prends des degats
        $i = rand(0, 10);
        switch ($i) {
            case '4':
                // coup critique
                $def = $stat2['0']['defense'] * 2;
                $stat2['hp'] = $stat2['hp'] + ($def - $stat['0']['dammage']);
                break;
            case '8':
                // pas de defense
                $def = 0;
                $stat2['hp'] = $stat2['hp'] - $stat['0']['dammage'];
                break;
            default:
                //defense normale
                $def = $stat2['0']['defense'] * 0.5;
                $stat2['hp'] = $stat2['hp'] + ($def - $stat['0']['dammage']);
                break;
        }
        //personnage 1 ^prend des degats
        $i = rand(0, 10);
        switch ($i) {
            case '4':
                // coup critique
                $def = $stat['0']['defense'] * 2;
                $stat['hp'] = $stat['hp'] + ($def - $stat2['0']['dammage']);
                break;
            case '8':
                // pas de defense
                $def = 0;
                $stat['hp'] = $stat['hp'] - $stat2['0']['dammage'];
                break;
            default:
                //defense normale
                $def = $stat['0']['defense'] * 0.5;
                $stat['hp'] = $stat['hp'] + ($def - $stat2['0']['dammage']);
                break;
        }
        $arr = array($stat,$stat2);
        return $arr;
    }
    //creation des perssonngae selon parametre choisie
    //perso 1
    $soldier = new $classe($name);
    $soldier->stat();
    $stat = $soldier->stat();
    $soldier = new $weapon();
    $soldier->stat($stat);
    $stat = $soldier->stat($stat);
    //perso 2
    $soldier2 = new $classe2($name2);
    $soldier2->stat();
    $stat2 = $soldier2->stat();
    $soldier2 = new $weapon2();
    $soldier2->stat($stat2);
    $stat2 = $soldier2->stat($stat2);
    //choix de qui commence a tapper
    if ($stat['hp'] > $stat2['hp']) {
        //le perso 2 commence a tapper
        echo "<div style='display : flex;' ><h1>Première manche </h1><h1 style='color : orange; margin : auto 5px'>" . $stat2['name'] . "</h1><h1> commence à tapper ⚔︎⚔︎⚔︎<br></h1></div>";
        echo "<div style='display : flex;' ><h1 style='color : orange; margin : auto 5px'>" . $stat['name'] . "</h1><h1> prépare ton bouclier 🛡🛡🛡</h1></div><br>";
        //boucle de combat
        while (($stat['hp'] > 0) && ($stat2['hp']) > 0) {
            fight1($stat, $stat2);
            $stat = fight1($stat, $stat2)['0'];
            $stat2 = fight1($stat, $stat2)['1'];
        }
    }else{
        // le perso 1 commence a taper
        echo "<h1>Première manche " . $stat['name'] . " commence à tapper ⚔︎⚔︎⚔︎<br>  " . $stat2['name'] . " prépare ton bouclier 🛡🛡🛡</h1><br>";
        //boucle de combat
        while (($stat['hp'] > 0) && ($stat2['hp'] > 0)) {
            fight2($stat, $stat2);
            $stat = fight1($stat, $stat2)['0'];
            $stat2 = fight1($stat, $stat2)['1'];
        }
    }
    //if des resultat
    if ($stat['hp'] <= 0) {
        echo "<br>Bravo a " . $stat2['name'] . ",<br>Tu as gagnée !!🥇";
    }elseif ($stat2['hp'] <= 0) {
        echo "<br>Bravo a " . $stat['name'] . ",<br>Tu as gagnée !!🥇";
    } else {
        echo "<br>Égalité, plus personne n'est debout. 🤝";
    }
} else {
    //si il n'y a pas tout les renseignement cela renvoie a la page de choix avec une alert
    $_SESSION["error"] = "Selection non valide";
    header('Location: ./prep.php');
    exit();
}
