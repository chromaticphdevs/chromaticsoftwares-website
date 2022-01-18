<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/SmsTesting/send" method="post">

        <?php Flash::show()?>

        <label for="">Number</label>
        <input type="text" name="mobile">

        <input type="submit" value="send">
    </form>
</body>
</html>