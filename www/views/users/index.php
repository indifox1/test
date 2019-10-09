<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Articles</h1>
<div>
    <ul>
        <?php foreach ($users as $user): ?>
            <li>
                <?= $user[1]?>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
</body>
</html>