<!-- 
    Snack 2
Passare come parametri GET name, mail e age 
e verificare (cercando i metodi che non conosciamo nella documentazione) che 
name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
 -->

 <?php
$login_name = $_GET['name'];
$login_mail = $_GET['mail'];
$login_age = $_GET['age'];
var_dump($login_name, $login_mail, $login_age);
if (count($login_name) > 2 && is_int($login_age)) {
    var_dump('confermato');
}
else {
    var_dump('negato');
}
 ?>