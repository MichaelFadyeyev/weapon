<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Weapons Shot Together</title>
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <?php

    require('weapon_manager.php');
    $weapon_manager = new WeaponManager();
    $weapons = $weapon_manager->get_weapons();

    ?>

    <div class="container">
        <p class="message"><< Choose weapon & push the button >></p>
        <form action="#" method="POST">
            <select name="weapons" id="weapon_name" title="Weapons List">
                <option selected>Select weapon ...</option>
                <?php
                foreach ($weapons as $w) {
                    $w_name = $w->get_name();
                    echo '<option value="' . $w_name . '">' . $w_name . '</option>';
                }
                ?>
            </select>
            <div>
                <input class="submit-button" type="submit" name="weapon_name" value="Shot" />
            </div>
        </form>
        <?php
        if (isset($_POST['weapon_name'])) {
            $index = $weapon_manager->find_weapon_index($_POST['weapons']);
            if ($index != -1) {
                $weapon_manager->set_active_weapon($index);
                $actine_weapon = $weapon_manager->get_active_weapon();
                $w_name = $actine_weapon->get_name();
                $shot = $actine_weapon->shot();
                echo '<p class="weapon">>> ' . $w_name . ' <<</p>';
                echo '<h3 class="shot">' . $shot . '</h3>';
            }
        }
        ?>
    </div>



</body>

</html>