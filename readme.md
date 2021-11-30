# Découverte du PHP

    [doc officiel php7](https://www.php.net/manual/fr/langref.php)

    [w3schools](https://www.w3schools.com/php/default.asp)

## tableaux
    [sort_array](https://www.php.net/supported-versions.php )
    [function array](https://www.php.net/manual/fr/ref.array.php )

Jour 1:

    client/serveur

    installation apache2 mysql


Jour 2:

    variable

    tableaux

    tableaux associatifs

    fonctions et boucle

Jour 3:

    instruction

    opérateur

    incrément / décrément

    try catch

    boucle et conditions

    switch & type conditions

Jour 4:


Jour 5:



PSEUDO-code explicatif (non-fonctionnel en php) algo des pates

```php
    // on definit ce que l'on a besoins dans des variables
    $pate = "pate"
    $eau = "eau"
    $feux = "feux"
    $casserole= "casserole"
    // condition qui vérifie que l'on a tout ce qu'il nous faut
    if $casserole & $eau & $pate {

        if $feux { // condition qui verifie que le feux est allumer
            push $eau + $casserole // si le feux n'est pas null alors on y ajoute l'eau dans la casserole sur le feux
        }
        if $eau + $casserole + $feux = True { // condition qui vérifie que toute les conditions sont reunis
            wait 5 min // on lance l'attente pendant la cuisson si tout est bon jusque la
        }
        if(5 min = true){ // condition qui vérifie que l'on ai bien attendu
            return $patte mangeable // si condition est vérifier alors on retourne le résultat: des pattes qui se mange
        }
    }
```
