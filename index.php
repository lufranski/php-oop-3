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

    <style>
        div {
            display: flex;
            justify-content: space-evenly;
            padding-top: 4rem;
        }
        
        li {
            margin-bottom: 1rem;
        }
    </style>

</head>
<body>
    <div>

        <ul>
            <h3>
                <strong>
    
                    Clienti:
                </strong>
            </h3>
            
            <?php
    
                foreach($persone as $persona){
    
                    echo '<li>' 
                        . '<strong>Nome: </strong>' . $persona -> getFullName() . '<br>'
                        . '<strong>Data di nascita: </strong>' . $persona -> getBirthDate() . '<br>'
                        . '<strong>Luogo di nascita: </strong>' . $persona -> getBirthPlace() . '<br>'
                        . '<strong>Codice Fiscale: </strong>' . $persona -> getFiscalCode() . '<br>'
                        . '</li>';
                }
            ?>
        </ul>
    
        <ul>
            <h3>
                <strong>
                    
                    Impiegati:
                </strong>
            </h3>
    
            <?php
                foreach($impiegati as $impiegato){
                    echo '<li>' 
                        . '<strong>Nome: </strong>' . $impiegato -> getFullName() . '<br>'
                        . '<strong>Data di nascita: </strong>' . $impiegato -> getBirthDate() . '<br>'
                        . '<strong>Luogo di nascita: </strong>' . $impiegato -> getBirthPlace() . '<br>'
                        . '<strong>Codice Fiscale: </strong>' . $impiegato -> getFiscalCode() . '<br>'
                        . '<strong>Data di assunzione: </strong>' . $impiegato -> getHiringDate() . '<br>'
                        . '<strong>Stipendio: </strong>' . $impiegato -> getSalaryForYear() . ' euro'
                        . '</li>';
                }
            ?>    
        </ul>
    
        <ul>
            <h3>
                <strong>
                    Big Boss:
                </strong>
            </h3>
            <?php
                echo '<li>'
                    . '<strong>Nome: </strong>' . $capo -> getFullName() . '<br>'
                    . '<strong>Data di nascita: </strong>' . $capo -> getBirthDate() . '<br>'
                    . '<strong>Luogo di nascita: </strong>' . $capo -> getBirthPlace() . '<br>'
                    . '<strong>Codice Fiscale: </strong>' . $capo -> getFiscalCode() . '<br>'
                    . '<strong>Stipendio: </strong>' . $capo -> getBossSalary() . ' euro'
                    . '</li>';
            ?>
        </ul>

    </div>
</body>
</html>