<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>diworksblog掲示板</title>
        <meta name="description" content="An interactive getting started guide for Brackets.">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
        
        <header>
            
            <div class="header">
                <img src="diblog_logo.jpg">
            </div>
            
            <div class="header-text">
                <ul>
                    <li>トップ</li>
                    <li>プロフィール</li>
                    <li>D.I.Blogについて</li>
                    <li>登録フォーム</li>
                    <li>問い合わせ</li>
                    <li>その他</li>
                </ul>
            </div>
            
        </header>
        
        <main>
            
            <div class="left">
                
                <h1>プログラミングに役立つ掲示板</h1>
                <form method="post" action="insert.php">
                    <h2>入力フォーム</h2>
                    <div>
                        <label>ハンドルネーム</label>
                        <br>
                        <input type="text" name="handlename" size="35" required>
                    </div>
                    
                    <div>
                        <label>タイトル</label>
                        <br>
                        <input type="text" name="title" size="35" required>
                    </div>
                    
                    <div>
                        <label>コメント</label>
                        <br>
                        <textarea name="comments" cols="55" rows="7" required></textarea>
                    </div>
                    
                    <div>
                        <input type="submit" class="submit" value="投稿する">
                    </div>
                </form>
                
                <div class="form">
                    <?php
                        mb_internal_encoding("utf8");
                        $pdo = new PDO("mysql:dbname=lesson01;host=localhost;", "root", "root");
                        $stmt = $pdo->query("select * from diworks_keijiban");

                        while ($row = $stmt->fetch()) {
                            if (mb_strlen($row["handlename"]) ==0) {
                            } else if (mb_strlen($row["title"]) ==0) {
                            } else if (mb_strlen($row["comments"]) ==0) {
                            } else {
                                echo "<div class = 'kiji'>";
                                echo "<h3>".$row['title']."</h3>";
                                echo "<div class = 'contents'>";
                                echo $row['comments'];
                                echo "<div class = 'handlename'>posted by".$row['handlename']."</div>";
                                echo "</div>";
                                echo "</div>";
                            };
                        };
                    ?>
                </div>
                
            </div>
            
            <div class="right">
                
                <div class="right-container">
                    <h2>人気の記事</h2>
                    <ul>
                        <li>PHPオススメ本</li>
                        <li>PHP MyAdminの使い方</li>
                        <li>いま人気のエディタTops</li>
                        <li>HTMLの基礎</li>
                    </ul>
                </div>
                
                <div class="right-container">
                    <h2>オススメリンク</h2>
                    <ul>
                        <li>ディーアイワークス株式会社</li>
                        <li>XAMPPのダウンロード</li>
                        <li>Eclipseのダウンロード</li>
                        <li>Braketsのダウンロード</li>
                    </ul>
                </div>
                
                <div class="right-container">
                    <h2>カテゴリ</h2>
                    <ul>
                        <li>HTML</li>
                        <li>PHP</li>
                        <li>MySQL</li>
                        <li>JavaScript</li>
                    </ul>
                </div>
                
             </div>
            
        </main>
        
        <footer>
            
            <div class="footer">
                Copyright D.I.works| D.I.blog is the one which provides A to Z about programming
            </div>
            
        </footer>
        
    </body>
</html>