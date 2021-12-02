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
var_dump(count($login_name) > 3);
if (count($login_name) > 3 !== false && strpos($login_mail, '@') !== false && is_int($login_age) !== false) {
    var_dump('accesso confermato');
}
else {
    var_dump('accesso negato');
}
 ?>