<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colore</title>
</head>
<body>
    
    <?php 
        function scegliColore($inCol){
            $colore;
            switch($inCol){
                case "r":
                    $colore ="red";
                    break;
                case "g":
                    $colore ="green";
                    break;
                case "b":
                    $colore ="blue";
                    break;
                default:
                    $colore ="black";
                    break;
            }
            return $colore;
        }
        $colore = scegliColore("g");
        echo "<p style='color:".$colore.";'> Questo paragrafo ha la proprietà color con valore ".$colore."</p>";

    ?>

</body>
</html>