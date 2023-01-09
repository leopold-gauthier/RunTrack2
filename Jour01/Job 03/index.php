<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $bool = true;
    $int = 5;
    $string = "string";
    $float = 1.23332
    ?>
    <table>
    <thead>
        <tr>
            <th>type</th>
            <th>nom</th>
            <th>valeur</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>boolean</td>
            <td>$bool</td>
            <td><?php echo $bool ?></td>
        </tr>
        <tr>
            <td>integer</td>
            <td>$int</td>
            <td><?php echo $int ?></td>
        </tr>
        <tr>
            <td>string</td>
            <td>$string</td>
            <td><?php echo $string ?></td>
        </tr>
        <tr>
            <td>float</td>
            <td>$float</td>
            <td><?php echo $float ?></td>
        </tr>
    </tbody>
</table>
</body>
</html>