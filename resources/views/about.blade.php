<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>DOM Blog | About</title>
</head>

<body>
    <h1>About</h1>
    <h3>
        <?= $name; ?>
    </h3>
    <p>
        <?= $email; ?>
    </p>
    <img src="image/<?= $image; ?>" alt="<?= $name; ?>" width="200px">
</body>

</html>
