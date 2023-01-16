<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Change color</title>
    <link rel="stylesheet" href="<?= !isset($_GET['color']) ? 'default' :  $_GET['color'] ?>.css">
</head>

<body>
    <div id="container">
        <h1>CUSTOMIZE COLOR ?</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae ipsa quo laudantium explicabo obcaecati consectetur nulla sequi, cumque dolor expedita totam? Praesentium fugiat necessitatibus quam dignissimos aspernatur, facilis quos at blanditiis repellendus dolorem voluptatem saepe et, non temporibus nobis provident.
        </p>
    </div>
    <label for="color-select">Choose a style :</label>
    <form method="get" id="myform">
        <select name="color">
            <option value="default">Default</option>
            <option value="red">Red</option>
            <option value="dark">Dark</option>
            <option value="black">Black</option>
        </select>
        <input type="submit">
    </form>
</body>

</html>