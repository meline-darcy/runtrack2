<?php
    $bool = true;
    $int = 54;
    $float = 2.12;
    $str = 'hey';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css" />
    <title>Tableau php</title>
</head>
<body>
    <header>
<table>
    <thead>
        <tr>
            <th colspan="3">Tableau variables</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Type </td>
            <td>Nom</td>
            <td>Valeur</td>
        </tr>
    </tbody>
</table>
</header>
<table>
   
    <tbody>
        <tr>
            <td> <?php echo gettype ($bool) ?></td>
            <td> <?php echo 'bool' ?></td>
            <td><?php echo $bool?></td>
        </tr>
    </tbody>
    </tbody>
    <tbody>
        <tr>
            <td> <?php echo gettype ($int) ?></td>
            <td> <?php echo 'int' ?></td>
            <td><?php echo $int?></td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td> <?php echo gettype ($float) ?></td>
            <td> <?php echo 'float' ?></td>
            <td><?php echo $float?></td>
        </tr>
</tbody>

<tbody>
        <tr>
            <td> <?php echo gettype ($str) ?></td>
            <td> <?php echo 'str' ?></td>
            <td><?php echo $str?></td>
        </tr>
</tbody>

   
</table>
</body>
</html>
