<?php

    // Prendere un testo abbastanza lungo, contenente diverse frasi. 
    // Prendere il testo e suddividerlo in tanti paragrafi ogni volta in cui si incontrerà un punto.

    $paragrafo = "Returns an array of strings created by splitting the string parameter on boundaries formed by the separator. 
                If separator is an empty string, explode throws a ValueError. 
                If separator contains a value that is not contained in string and a negative limit is used, then an empty array will be returned, otherwise an array containing string will be returned. 
                If separator values appear at the start or end of string, said values will be added as an empty array value either in the first or last position of the returned array respectively.";
                
    // explode - divide una stringa per una stringa

    $paragrafoArray = explode('.', $paragrafo);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNACK 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="text">
        <h3>Text</h3>
        <p><?php echo $paragrafo ?></p>
    </div>

    <div class="text_divided">
        <h3>Text divided</h3>
        <?php 
            // count - conta tutti gli elementi in una matrice o in un oggetto numerabile
            
            for ($i = 0; $i < (count($paragrafoArray)); $i++) {
                echo "<p>$paragrafoArray[$i]</p>";
            }
        ?>
    </div>

</body>
</html>