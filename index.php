<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http_equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>
    <main>
        <form action ="includes/formhandler.php" method="post">
            <laberl for="firstname"> Firstname?</label>
            <input id="firstname" type="text" name="firstname" placeholder ="Firstname...">

            <laberl for="lastname"> Lastname?</label>
            <input id="lastname" type="text" name="lastname" placeholder ="Lastname...">

            <laberl for="favoritepet"> Favorite Pet?</label>
            <select id="favoritepet" name="favoritepet">
                <option value="none"> None</option>
                <option value="dog"> Dog</option>
                <option value="Cat"> Cat</option>
                <option value="bird"> Bird</option>
            </select>
            
            <button typo="submit">Submit</button>
</body>
</html>