<!DOCTYPE html>
<html>

<head>
    <title>EJ-5</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>
<table border="3">
    <?php

    /* 

    Se inicializan las distintas variables que vamos a utilizar

    -$foro es un array que guarda los datos con clave y valor

    */

    $foro = array(
        "Tema 1" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ultricies erat sit amet enim pulvinar scelerisque. Morbi sit amet odio quis magna dapibus tempus et vitae sem. Quisque cursus ante nulla, eget feugiat est gravida et. Proin non tincidunt metus. Curabitur non ante sed velit facilisis sagittis at non arcu. Sed id auctor augue. Praesent pulvinar ante a metus tempus sollicitudin. Vestibulum elit lacus, luctus sed venenatis ut, commodo ut ante. In quis elementum nulla. Nam et egestas mi. Donec molestie purus ac elit suscipit efficitur. Integer odio urna, semper ultrices tristique quis, pellentesque ut enim. Suspendisse placerat, nisi at pretium laoreet, tellus augue placerat urna, eu auctor libero tellus et ex. Nam ultricies sem id ex fermentum semper.",
        "Tema 2" => "Vivamus faucibus, erat sed consectetur tempus, nisl risus elementum nisi, ut lacinia dolor arcu quis sem. Donec accumsan lacinia metus. Aenean convallis dolor a accumsan varius. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean ligula nisl, posuere eget metus vel, cursus eleifend leo. Proin sit amet erat turpis. Sed efficitur justo quis finibus tempor. Ut suscipit sollicitudin eros, quis iaculis nibh pretium sit amet. Ut iaculis dui et turpis mattis convallis. Mauris accumsan ante vel scelerisque lobortis.Etiam aliquet vulputate suscipit. Donec vel lacus id leo mattis condimentum a quis ipsum. Vivamus eget condimentum sem, ut auctor purus. Vestibulum euismod dictum condimentum. Nullam in egestas enim. Vestibulum volutpat ac felis eu tincidunt. Pellentesque aliquam nulla vitae consectetur consectetur.",
        "Tema 3" => "Mauris vel velit vel quam finibus sollicitudin ac ac lectus. Suspendisse erat lectus, euismod eu pulvinar eu, feugiat mollis felis. Suspendisse ac massa a felis tempor dignissim. Cras sit amet pellentesque ligula. Nunc et quam malesuada, mattis risus id, lobortis eros. Sed erat erat, malesuada sit amet augue in, sollicitudin interdum eros. Praesent a sapien vel nisi euismod vestibulum a sit amet sapien. Integer vitae volutpat augue.Vestibulum at malesuada orci. Cras facilisis, turpis vitae vehicula feugiat, turpis libero ullamcorper justo, nec dictum neque est vitae orci. Morbi vehicula felis sed quam molestie facilisis. Pellentesque ornare sagittis hendrerit. Sed at nisi malesuada, tempus felis quis, luctus ex. Nam et mollis urna, vitae tincidunt erat. Curabitur consectetur magna at aliquet venenatis. Donec ac nulla in velit auctor cursus. Nunc maximus, sapien hendrerit iaculis interdum, mi nulla posuere elit, at posuere tellus eros ac massa. Maecenas id metus molestie, dignissim neque vel, auctor odio. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aliquam pellentesque nibh felis, nec gravida magna faucibus vel. Quisque lectus urna, vulputate a vestibulum eget, tristique ac nibh. Integer ac sollicitudin nisl, eu vehicula ante.",
    );

    //Se realiza un foreach, para pintar el foro con sus temas y cuerpo
    
    foreach ($foro as $key => $value) {
        echo "<tr><td>$key</td> <td>$value</td></tr>";
    }
    ?>
    </table>
</body>

</html>