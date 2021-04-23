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

    



</body>
</html>