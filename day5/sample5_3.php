<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>入力された名前</h1>
    <table>
        <tr>
            <th>名前</th>
            <th>性別</th>
        </tr>
        <tr>
            <td><?php echo $_GET["name"] ?></td>
            <td><?php echo $_GET["sex"] ?></td>
        </tr>
    </table>
    <a href="sample5_3.html">フォームに戻る</a>
    <div><?php echo var_dump($_GET) ?></div>

</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>入力された名前</h1>
    <table>
        <tr>
            <th>名前</th>
            <th>性別</th>
        </tr>
        <tr>
            <td><?php echo $_GET["name"] ?></td>
            <td><?php echo $_GET["sex"] ?></td>
        </tr>
    </table>
    <a href="sample5_3.html">フォームに戻る</a>
    <div><?php echo var_dump($_GET) ?></div>

</body>
</html>