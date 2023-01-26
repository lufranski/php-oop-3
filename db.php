<?php
    // Persona IS-A Impiegato
    //             IS-A Capo
    // Impiegato HAS-A Stipendio
    // Capo HAS-A Stipendio 

    $stipendio1 = new Stipendio(1000, 1, 1);
    $stipendio2 = new Stipendio(1500, 0, 1);

    $capo = new Capo ('Mimmo', 'Berardi', '22-07-1994', 'Corigliano Calabro', 'DMCBRD94A04C352I', 10000, 5000);

    $persone = [
        new Persona ('Mario', 'Rossi', '12-01-1990', 'Busto Arsizio', 'MRRSS29A90C352I'),
        new Persona ('Giorgio', 'Locatelli', '21-05-1960', 'Rovigo', 'GRGLCT60B21C352K')
    ];

    $impiegati = [
        new Impiegato ('Franco', 'Lerda', '13-02-1984', 'Modena', 'FRCLRD45A86C352J', '12-06-99', $stipendio1),
        new Impiegato ('Antonino', 'Cannavacciuolo', '31-05-1976', 'Caserta', 'NTNCNV76B31C352N', '21-06-03', $stipendio2)
    ];

?>
