<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add</title>
</head>
<body>
    <form action="../controller/W-Product.php" method="POST" enctype="multipart/form-data">

        <input type="file" name="img">
        <input type="text" name="pName" placeholder="name">
        <input type="text" name="pDes" placeholder="des">
        <input type="hidden" name="pQty" value="1">
        <input type="text" name="pPrice" placeholder="Price">
        <button type="submit" name="save">save</button>

    </form>
</body>
</html>