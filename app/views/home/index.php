<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hẹ hẹ hẹ</title>
</head>

<body>
    <h1>this is hoem</h1>

    <?php foreach ($products as $product) : ?>
        <p><?php echo $product['name']; ?></p>
    <?php endforeach; ?>
    <a href="/auth/login">Login</a>
    <a href="/auth/register">Register</a>
</body>

</html>