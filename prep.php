<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prep jeux</title>
</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION["error"])) { ?>
        <script>
            alert("<?= $_SESSION["error"] ?>")
        </script>
    <?php
        session_destroy();
    }
    ?>
    <h1 style="color: blue;" >Choisissez votre personnage</h1>
    <form action="./jeux.php" method="post">
    <div>
        <label for="name">Entrez votre pseudo</label>
        <input type="text" name="name" id="name">
        <div>
            <label for="Junior">Junior</label>
            <input type="radio" name="class" id="Junior" value="Junior">
            <label for="Confirme">Confirme</label>
            <input type="radio" name="class" id="Confirme" value="Confirme">
            <label for="Veteran">Veteran</label>
            <input type="radio" name="class" id="Veteran" value="Veteran">
        </div>
        <div>
            <label for="Sword">Sword</label>
            <input type="radio" name="weapon" id="Sword" value="Sword">
            <label for="Shield">Shield</label>
            <input type="radio" name="weapon" id="Shield" value="Shield">
            <label for="Spear">Spear</label>
            <input type="radio" name="weapon" id="Spear" value="Spear">
            <label for="Bow">Bow</label>
            <input type="radio" name="weapon" id="Bow" value="Bow">
        </div>
    </div>
    <div>
        <label for="name">Entrez votre pseudo</label>
        <input type="text" name="name2" id="name">
        <div>
            <label for="Junior2">Junior</label>
            <input type="radio" name="class2" id="Junior2" value="Junior">
            <label for="Confirme2">Confirme</label>
            <input type="radio" name="class2" id="Confirme2" value="Confirme">
            <label for="Veteran2">Veteran</label>
            <input type="radio" name="class2" id="Veteran2" value="Veteran">
        </div>
        <div>
            <label for="Sword2">Sword</label>
            <input type="radio" name="weapon2" id="Sword2" value="Sword">
            <label for="Shield2">Shield</label>
            <input type="radio" name="weapon2" id="Shield2" value="Shield">
            <label for="Spear2">Spear</label>
            <input type="radio" name="weapon2" id="Spear2" value="Spear">
            <label for="Bow2">Bow</label>
            <input type="radio" name="weapon2" id="Bow2" value="Bow">
        </div>
        <input type="submit" value="Valider">
    </div>
    </form>
</body>

</html>