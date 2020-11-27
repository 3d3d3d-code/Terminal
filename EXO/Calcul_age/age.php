
<?php

if (isset($_POST['s'])) {

    $dateNaissance = $_POST['d'];

    $aujourdhui = date("Y-m-d");
    $diff = date_diff(date_create($dateNaissance), date_create($aujourdhui))->y;
    //var_dump($diff);
    if ($diff < "1") {
        echo 'Ton age est : ' . $diff . ' an';
    } else {
        echo 'Ton age est : ' . $diff . ' ans';
    }
}

?>