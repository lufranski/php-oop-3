<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 3</title>

    <?php

        require_once('models/persona.php');
        require_once('models/impiegato.php');
        require_once('models/capo.php');
        require_once('models/stipendio.php');
        require_once('db.php');
    ?>

</head>
<body>
    
    <ul>
        <p>Clienti:</p>
        
        <?php

            foreach($persone as $persona){

                echo '<li>' 
                    . $persona -> getFullName() . '<br>'
                    . $persona -> getBirthDate() . '<br>'
                    . $persona -> getBirthPlace() . '<br>'
                    . $persona -> getFiscalCode() . '<br>'
                    . '</li>';
            }
        ?>
    </ul>

    <ul>
        <p>Impiegati:</p>

        <?php
            foreach($impiegati as $impiegato){
                echo '<li>' 
                    . $impiegato -> getFullName() . '<br>'
                    . $impiegato -> getBirthDate() . '<br>'
                    . $impiegato -> getBirthPlace() . '<br>'
                    . $impiegato -> getFiscalCode() . '<br>'
                    . 'Data di assunzione: ' . $impiegato -> getHiringDate() . '<br>'
                    . 'Stipendio: ' . $impiegato -> getSalaryForYear() . ' euro'
                    . '</li>';
            }
        ?>    
    </ul>
</body>
</html>