<html>
    <head>
        <title>Relatorio</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="icon" href="http://al.senai.br/senai.ico"">
    </head>
    <body>
        <?php 
        $json_file = file_get_contents("data.json");   
        $json_str = json_decode($json_file, true);
        $itens = $json_str['regionals'];
        $todo = count($itens);
        $part1 = floor($todo/2);
        $part2 = ($part1 + 1);
        $med = number_format($json_str['national'], 2, '.', '');

        echo "<h1>Relatorio</h1>
        <div id='reg'> 
            <table>
                <tr>
                    <th>Regional</th>
                    <th>Média</th>
                </tr>";
        for ($i = 0;$i <= $part1; $i++){ 
            $e = $itens[$i];
            $numero = number_format($e['average'], 2, '.', '');
            echo "
            <tr>
                <td>".$e['description']."</td>
                <td>".$numero."%</td>
            </tr>";
               
        } 
        echo "</table>
             <table>
                <tr>
                    <th>Regional</th>
                    <th>Média</th>
                </tr>";
        for ($i = $part2;$i < $todo; $i++){ 
            $e = $itens[$i];
            $numero = number_format($e['average'], 2, '.', '');
            echo "
            <tr>
                <td>".$e['description']."</td>
                <td>".$numero."%</td>
            </tr>";
            
        } 
        echo" </table>
        </div>
        <br>
            <table id='reg'>    
                <td><b>Média Nacional</b></td>
                <td>".$med."%</td>
            </table>
        ";
        
        ?>
    </body>
</html>