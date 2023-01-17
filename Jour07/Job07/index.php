<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Change $str</title>
    <link rel="stylesheet" href="default.css">
</head>

<body>
    <div id="container">
        <h1>CUSTOMIZE STR ?</h1>
        <label>Choose a style :</label>
        <form method="get" id="myform">
            <input name="str" type="text">
            <select name="fonction">
                <option value="default">Default</option>
                <option value="gras">Gras</option>
                <option value="cesar">César</option>
                <option value="plateforme">Plateforme</option>
            </select>
            <input type="submit">
        </form>
    </div>
</body>

<?php



function gras($str)
{
    $result = substr($str, 0, 1);
    echo $result;
}
