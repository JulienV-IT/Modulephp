<?php
session_start(); 
// start session pour sauvegarder le chiffre1 -> première saisie.
// pour sauvegarder le chiffre2 -> deuxième,
// mise en mémoire de l'application
// pour forcer la mise en session des saisie -> $idsession = true

// todo afficher les saisies
// todo nombres décimaux 

?>

<!doctype html>
<html>

<head>
    <title>Calculatrice</title>
    <meta charset="utf-8">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Bruno DROZDZ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- <script src="js/bootstrap.js"> -->
    </script>
</head>

<?php

//debugg
var_dump($_POST);

// déclaration des variables locales 
// & de session

if (!isset($_SESSION['resultat']))
{
    $_SESSION['resultat']=""; 
} 

// utilisation de variables textes pour récupérer la value
// en provenance du formulaire exemple :
// <input type="submit" name="commande" value="   7   ">
if (!isset($_SESSION['chiffre1']))
{
    $_SESSION['chiffre1']="";
} 

if (!isset($_SESSION['operation']))
{
    $_SESSION['operation']="="; 
}

if (!isset($_SESSION['chiffre2'])) 
{
    $_SESSION['chiffre2']=0;
    //debugg
    //$_SESSION['chiffre2']=5;
}

// not working yet -> pour les chiffres décimaux
// pour l'instant à false pour traiter les integer
if (!isset($_SESSION['concatenation']))
{
    $_SESSION['concatenation']=false;
}  

if (!isset($_SESSION['$idsession']))
{
    $_SESSION['$idsession']=false; // false ATB
}  

$_SESSION['séparateur']=false;

// initialisation des commandes passées par les boutons
if (isset($_POST['commande']))
{
    $commande = trim($_POST['commande']); 
} 
else
{
    $commande ="";
}
					
// tests des commandes reçues et envoyées par le formulaire
switch($commande)
{
    // exemple "bouton" 0 pressé
    case "0" : if ($_SESSION['$idsession'] )
                  { $_SESSION['chiffre1']=$commande;
                    $_SESSION['$idsession']=false;}
                else {$_SESSION['chiffre1']=$_SESSION['chiffre1'].$commande;
                }
		        break;
    case "1" : if ($_SESSION['$idsession'] )
                  { $_SESSION['chiffre1']=$commande;
                    $_SESSION['$idsession']=false;}
                else {$_SESSION['chiffre1']=$_SESSION['chiffre1'].$commande;
                 }  
                 break;
    case "2" : if ($_SESSION['$idsession'] )
                 { $_SESSION['chiffre1']=$commande;
                    $_SESSION['$idsession']=false;}
                else {$_SESSION['chiffre1']=$_SESSION['chiffre1'].$commande;
                 }
                break;
    case "3" : if ($_SESSION['$idsession'] )
                 { $_SESSION['chiffre1']=$commande;
                   $_SESSION['$idsession']=false;}
                else {$_SESSION['chiffre1']=$_SESSION['chiffre1'].$commande;
                }  
                break; 
    case "3" : if ($_SESSION['$idsession'] )
                { $_SESSION['chiffre1']=$commande;
                  $_SESSION['$idsession']=false;}
                else {$_SESSION['chiffre1']=$_SESSION['chiffre1'].$commande;
                }
                break;
    case "4" : if ($_SESSION['$idsession'] )
                { $_SESSION['chiffre1']=$commande;
                  $_SESSION['$idsession']=false;}
                else {$_SESSION['chiffre1']=$_SESSION['chiffre1'].$commande;
               }
               break;
    case "5" : if ($_SESSION['$idsession'] )
               { $_SESSION['chiffre1']=$commande;
                 $_SESSION['$idsession']=false;}
               else {$_SESSION['chiffre1']=$_SESSION['chiffre1'].$commande;
              }
              break;
    case "6" : if ($_SESSION['$idsession'] )
              { $_SESSION['chiffre1']=$commande;
                $_SESSION['$idsession']=false;}
              else {$_SESSION['chiffre1']=$_SESSION['chiffre1'].$commande;
              }
              break;
    case "7" : if ($_SESSION['$idsession'] )
              { $_SESSION['chiffre1']=$commande;
                $_SESSION['$idsession']=false;}
              else {$_SESSION['chiffre1']=$_SESSION['chiffre1'].$commande;
              }
              break; 
    case "8" : if ($_SESSION['$idsession'] )
              { $_SESSION['chiffre1']=$commande;
                $_SESSION['$idsession']=false;}
              else {$_SESSION['chiffre1']=$_SESSION['chiffre1'].$commande;
              }
              break;
    case "9" : if ($_SESSION['$idsession'] )
              { $_SESSION['chiffre1']=$commande;
                $_SESSION['$idsession']=false;}
              else {$_SESSION['chiffre1']=$_SESSION['chiffre1'].$commande;
              }
              break;
    // exemple "bouton" opération pressé (+) -> même principe pour les autres opérations
    // on utilise le case sur les symboles d'opération pour déterminer que l'on passe à la saisie
    // du second chiffre 
    case "+" :  $_SESSION['operation']="+";
                $_SESSION['chiffre2']=$_SESSION["chiffre1"];
                $_SESSION['$idsession']=true; // true ATB -> passage à true -> mise en mémoire;
                $_SESSION['concatenation']=false;
              break;
    case "-" :  $_SESSION['operation']="-";
                $_SESSION['chiffre2']=$_SESSION["chiffre1"];
                $_SESSION['$idsession']=true; 
                $_SESSION['concatenation']=false;
              break;
    case "*" :  $_SESSION['operation']="*";
                $_SESSION['chiffre2']=$_SESSION["chiffre1"];
                $_SESSION['$idsession']=true; 
                $_SESSION['concatenation']=false;
              break;
    case "/" :  $_SESSION['operation']="/";
                $_SESSION['chiffre2']=$_SESSION["chiffre1"];
                $_SESSION['$idsession']=true; 
                $_SESSION['concatenation']=false;
              break;

    // "bouton" = pressé -> on déclenche le calcule par appel de la fonction calcule et passage des arguments requis  
    case "=" :  $_SESSION['resultat']=calcule($_SESSION['chiffre1'],$_SESSION['operation'],$_SESSION['chiffre2']);
                $_SESSION['$idsession']=true;
                $_SESSION['concatenation']=false;
              break;
    // "bouton" "CE" pressé raz de la session en cas d'erreur de saisie 
    // utilie aussi pour le debug.
    case "." :	if ($_SESSION['concatenation']==false)
                {
                $_SESSION["chiffre1"]=$_SESSION["chiffre1"] .".";
                $_SESSION['concat']=true;
                }
    break;  
    case "CE" :	session_destroy();
                $_SESSION['resultat']="";
              break;	 
}

function calcule($chiffre1,$operation,$chiffre2)
{
//debugg
var_dump ($chiffre1);
var_dump ($operation);
var_dump ($chiffre2);

$chiffre1= (float) $chiffre1;
$chiffre2= (float) $chiffre2;

// controle de l'opération
switch($operation)
    {
        case "+" : $resultat=$chiffre1+$chiffre2;
        var_dump ($resultat);
        break;
        
        case "-" : $resultat=$chiffre1-$chiffre2;
        break;
    
        case "*" : $resultat=$chiffre1*$chiffre2;
        break;
    
        case "/" : if($chiffre2==0)
        {
            $resultat=0; 
        }
        else 
        {$resultat=$chiffre1/$chiffre2;}
        break;  

        case "=" : $resultat=$chiffre2;
        break;
    }
    return $resultat; // fonctionne pas compris le problème de la dernière fois sur ce mot clé
    // peut être du à $_SESSION['resultat']=calcule($_SESSION[...) on charge une variable
}

?>

<H1 align="center">Calculatrice en PHP</H1>

<table align="center">
    <tr>
        <td>
            <table>
                <tr height="50">
                    <td colspan="5" align="center">
                        <table border="1" width="100%" height="100%">
                            <tr>
                                <td align="right">
                                    <?php echo $_SESSION['resultat']; ?> 
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <!-- <form action="Calcul.php" method="post"> On s'autoréfère au même fichier -->
                <form action="Calcul.php" method="post"> 
                    <tr>
                        <td align="center"> <input type="submit" name="commande" value="   7   "></td>
                        <td align="center"> <input type="submit" name="commande" value="   8   "></td>
                        <td align="center"> <input type="submit" name="commande" value="   9   "></td>
                        <td align="center"> <input type="submit" name="commande" value="   +   "></td>
                    </tr>
                    <tr>
                        <td align="center"> <input type="submit" name="commande" value="   4   "></td>
                        <td align="center"> <input type="submit" name="commande" value="   5   "></td>
                        <td align="center"> <input type="submit" name="commande" value="   6   "></td>
                        <td align="center"> <input type="submit" name="commande" value="   -   "></td>
                    </tr>
                    <tr>
                        <td align="center"> <input type="submit" name="commande" value="   1   "></td>
                        <td align="center"> <input type="submit" name="commande" value="   2   "></td>
                        <td align="center"> <input type="submit" name="commande" value="   3   "></td>
                        <td align="center"> <input type="submit" name="commande" value="   *   "></td>
                    </tr>
                    <tr>
                        <td align="center"> <input type="submit" name="commande" value="   0   "></td>
                        <td align="center"> <input type="submit" name="commande" value="   .   "></td>
                        <td align="center"> <input type="submit" name="commande" value="   =   "></td>
                        <td align="center"> <input type="submit" name="commande" value="   /   "></td>
                    </tr>
                    <tr>
                        <!-- Fonction raz ou erreur de saisie -->
                        <td colspan="4" align="center" width="100%"> <input type="submit" name="commande" value="   CE   "></td> 
                    </tr>
            </table>
        </td>
    </tr>
</table>
</form>
</body>
</html>