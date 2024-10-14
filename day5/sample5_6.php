<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>郵便番号の確認</h1>
    <p><b>郵便番号</b></p>
    <form action="sample5_6.php" method="post">
        <input type="text" name="where" placeholder="123-4566">
        
        <input type="submit" value="check">
        <br>
        <?php
            

            if(isset($_POST["where"])){
                if(preg_match("/^[0-9]{3}-[0-9]{4}$/",$_POST["where"])){
                    echo "郵便番号です";
                }
                elseif(empty($_POST["where"])){
                    echo "郵便番号を入力してください";
                }
                else{
                    echo "郵便番号ではありません";
                }
            }
           

        ?>
    </form>
</body>
</html>
