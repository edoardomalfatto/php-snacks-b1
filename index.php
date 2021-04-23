<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Snack 1  -->

<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->
    
    <div class="Snack_1">
    <h2>Snack 1</h2>
    <?php
        $todaymatches = [ 
            "Roma - Verona" => [
            "squadra1" => 40,
            "squadra2" => 30
            ],
            "Inter - Napoli" => [
            "squadra1" => 50,
            "squadra2" => 20
            ],
            "Sampdoria - Cittadella" =>  [
                "squadra1"=>45,
                "squadra2"=>60
            ]
        ];

        foreach ($todaymatches as $key => &$arraycont) {
            echo($key." | ".$arraycont["squadra1"]."-".$arraycont["squadra2"]." ");
            echo("<br></br>");
        };
        
          
    ?>

    </div>

<!-- Snack 2 -->

<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
 che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
 Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”.   
 -->

<div class="Snack_2">
<h2>Snack 2</h2>
<?php
    $name=$_GET["name"];
    $mail=$_GET["mail"];
    $age=$_GET["age"];

    if(empty($name) || empty($mail) || empty($age) ) {
        $string="Inserisci tutti i dati";
    }
    else{

        if(strlen($name)>3 && filter_var($mail, FILTER_VALIDATE_EMAIL) && is_numeric($age)==true){
            $string="Accesso Riuscito";
        }else {
            $string="Accesso Negato";
        }
    };
   
?>

<div> <?php echo$string; ?></div>


</div>




</body>
</html>