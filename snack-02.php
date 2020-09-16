<!-- Snack 2
Passare come parametri GET name, mail ed age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    $risultato ='';
    if (strlen($name)>2) {
        if (strpos($mail, '@')!==false) {
            if (strpos(substr($mail, strpos($mail, '@')+1), '.')) {
                if (intval($age)>0) {
                    $risultato .= 'Accesso riuscito';
                } else {
                    $risultato .= 'Accesso negato! La tua età deve essere un numero maggiore di 0';
                }
            } else {
                $risultato .= 'Accesso negato! La mail deve contenere un . dopo la @';
            }
        }
         else {
             $risultato .= 'Accesso negato! La mail deve contenere la @';
        }
    } else {
        $risultato .= 'Accesso negato! Il nome deve essere almeno di 3 caratteri';
    }

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
    </head>
    <body>
        <h1>Login</h1>
        <h3>I dati da te inseriti sono:</h3>
        <p><?php echo "Name: ".$name; ?></p>
        <p><?php echo "Mail: ".$mail; ?></p>
        <p><?php echo "Age: ".$age; ?></p>
        <h2><?php echo $risultato; ?></h2>

    </body>
</html>
