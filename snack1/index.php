<!-- 
    Snack 1:
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
-->
<?php
$matches = array(
    'partita1' => array(
        'squadra1' => 'Olimpia Milano',
        'squadra2' => 'Milano',
        'Punteggio squadra1' => '55',
        'Punteggio squadra2' => '60'),
    'partita2' => array(
        'squadra1' => 'Olimpia Milano',
        'squadra2' => 'Milano',
        'Punteggio squadra1' => '55',
        'Punteggio squadra2' => '60'),
    'partita3' => array(
        'squadra1' => 'Olimpia Milano',
        'squadra2' => 'Milano',
        'Punteggio squadra1' => '55',
        'Punteggio squadra2' => '60'),
    'partita4' => array(
        'squadra1' => 'Olimpia Milano',
        'squadra2' => 'Milano',
        'Punteggio squadra1' => '55',
        'Punteggio squadra2' => '60'),

);

var_dump($matches);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks-b1</title>
</head>
<body>

<p><?php
    // for ($i = 0; $i < count($matches); $i++) {$matches[$i]};
?></p>
</body>
</html>