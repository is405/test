<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>contactform</title>
        <meta name="description" content="An interactive getting started guide for Brackets.">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
        
        <h1>お問い合わせフォーム</h1>
        
        <form method="post" action="mail_confirm.php">
            
            <div>
                <label>名前</label>
                <br>
                <input type="text" name="name" class="text" size="35" value="<?php if(isset($_POST['name'])) {echo htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');} ?>" required>
            </div>
            
            <div>
                <label>メールアドレス</label>
                <br>
                <input type="text" name="mailaddress" class="text" size="35" value="<?php if(isset($_POST['mailaddress'])) {echo htmlspecialchars($_POST['mailaddress'], ENT_QUOTES, 'UTF-8');} ?>" required>
            </div>
            
            <div>
                <label>年齢</label>
                <br>
                <select class="dropdown" name="age">
                    <option>
                        <?php
                        if(isset($_POST['age'])) {
                            echo $_POST['age'];
                        } else {
                            echo "選択してください";
                        };
                        ?>
                    </option>
                    <?php
                    for($i=18; $i<=65; $i++) {
                        echo "<option value='{$i}歳'>{$i}歳</option>";
                    };
                    ?>
                </select>
            </div>
            
            <div>
                <label>コメント</label>
                <br>
                <textarea name="comments" cols="35" rows="7" required><?php if(isset($_POST['comments'])) {echo htmlspecialchars($_POST['comments'], ENT_QUOTES, 'UTF-8');} ?></textarea>
            </div>
            
            <div>
                <input type="submit" class="submit" value="送信する">
            </div>
            
        </form>
        
    </body>
</html>