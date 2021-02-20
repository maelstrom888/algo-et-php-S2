<!-- CODE HTML & PHP -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" media="all" href="calcul_math.css"/>
</head>
<body>
    <h1>Notes</h1>
    <div id="notes">
        <?php
        $tab=array(15.6, 7.4, 13.5, 18.2, 20);
        $arrlength=count($tab);

        for($x=0; $x < $arrlength; $x++) {
            echo "note ".($x+1)." : "."<span>".$tab[$x]."</span>"."<br>";
        }
        ?>
    </div>
    <div id="verif">
        <?php
        define("NOTE_MAX", 20);
        function verifier_notes($tab){
            $arrlength=count($tab);
            for($x=0; $x < $arrlength; $x++){
                if($tab[$x]>=0 and $tab[$x]<=20){
                        // return TRUE;
                }
                else{
                    return FALSE;
                }
            }
            return TRUE;
        }
        $verif = verifier_notes($tab);
        // echo $verif;
        if ($verif==TRUE){
            echo "Les notes sont valides<br>";
        }
        else{
            echo "Les notes ne sont pas valides<br>";
        }
        ?>
    </div>
    <div id="results">
        <?php
        function trouver_max($tab){
            $arrlength=count($tab);
            $max=0;
            for($x=0; $x < $arrlength; $x++){
                if($tab[$x]>$max){
                $max=$tab[$x];
                }
                else{
                $max=$max;
                }
            }
            return $max;
        }
        
        function trouver_min($tab){
            $arrlength=count($tab);
            $min=20;
            for($x=0; $x < $arrlength; $x++){
                if($tab[$x]<$min){
                $min=$tab[$x];
                }
                else{
                $min=$min;
                }
            }
            return $min;
        }
        
        function calculer_moy($tab){
            $arrlength=count($tab);
            $somme=0;
               for($x=0; $x < $arrlength; $x++){
                $somme=$somme+$tab[$x];
            }
            $moy=$somme/$arrlength;
            return $moy;
        }
        $max=trouver_max($tab);
        echo "La note max est : ".$max."<br>";
        
        $min=trouver_min($tab);
        echo "La note min est : ".$min."<br>";
        
        $moy=calculer_moy($tab);
        // echo "La moyenne est : ".round($moy, 0)."<br>";
        echo "La moyenne est : ".number_format($moy, 2)."<br>";
        ?>
    </div>
</body>
</html>

<!-- CODE PHP -->
<?php 
// $tab=array(15.6, 7.4, 13.5, 18.2, 20);
// $arrlength=count($tab);

// for($x=0; $x < $arrlength; $x++) {
//     echo "note ".($x+1)." : ".$tab[$x]."<br>";
// }

// define("NOTE_MAX", 20);
// function verifier_notes($tab){
//     $arrlength=count($tab);
//     for($x=0; $x < $arrlength; $x++){
//         if($tab[$x]>=0 and $tab[$x]<=20){
//                 // return TRUE;
//         }
//         else{
//             return FALSE;
//         }
//     }
//     return TRUE;
// }

// function trouver_max($tab){
//     $arrlength=count($tab);
//     $max=0;
//     for($x=0; $x < $arrlength; $x++){
//         if($tab[$x]>$max){
//         $max=$tab[$x];
//         }
//         else{
//         $max=$max;
//         }
//     }
//     return $max;
// }

// function trouver_min($tab){
//     $arrlength=count($tab);
//     $min=20;
//     for($x=0; $x < $arrlength; $x++){
//         if($tab[$x]<$min){
//         $min=$tab[$x];
//         }
//         else{
//         $min=$min;
//         }
//     }
//     return $min;
// }

// function calculer_moy($tab){
//     $arrlength=count($tab);
//     $somme=0;
//        for($x=0; $x < $arrlength; $x++){
//         $somme=$somme+$tab[$x];
//     }
//     $moy=$somme/$arrlength;
//     return $moy;
// }

// $verif = verifier_notes($tab);
// echo $verif;
// if ($verif==TRUE){
//     echo "Les notes sont valides<br>";
// }
// else{
//     echo "Les notes ne sont pas valides<br>";
// }

// $max=trouver_max($tab);
// echo "La note max est : ".$max."<br>";

// $min=trouver_min($tab);
// echo "La note min est : ".$min."<br>";

// $moy=calculer_moy($tab);
// // echo "La moyenne est : ".round($moy, 0)."<br>";
// echo "La moyenne est : ".number_format($moy, 2)."<br>";
?>