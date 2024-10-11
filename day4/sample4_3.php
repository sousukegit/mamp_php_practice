<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" style="border-collapse: collapse;">
        <tr>
            <th>名前</th><th>性別</th><th>住所</th>
        </tr>
        <?php
            $member = [
                ["真鍋颯一朗","男","東京都杉並区"],
                ["平満菜々子","女","愛媛県今治市"],
                ["山路一貴","男","神奈川県横浜市"]
            ];
            foreach($member as $person){
                echo <<<LOOP
                <tr>
                    <td>$person[0]</td><td>$person[1]</td><td>$person[2]</td>
                </tr>
                LOOP;
            }
        ?>
    </table>
    <?php
            #practice1
            echo "<br>";
            for ($i=0; $i<4 ; $i++) { 
                echo "★";
            }

            #practice2
            echo "<br>" . "素数：";
            for ($i=2; $i <100 ; $i++) { 
                $isDivide = false;
                for($u= 2; $u < $i; $u++){
                    if($i === 2){
                        echo 2;
                        echo " ";
                    }
                    $amari = $i % $u;
                    if($amari === 0){
                        $isDivide = true;
                    }
                }
                if($isDivide === false){
                    echo $i;
                    echo " ";
                }
            }
    ?>
    <ul>
    <?php
        #practice4
        $countries = ["日本","アメリカ","中国"];
        
        foreach($countries as $country){
            echo <<<list
            <li>$country</li>  
            list;
        }
    ?>
    </ul>
</body>
</html>