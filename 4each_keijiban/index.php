<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<title>4eachblog 掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
 
    
<body>
    
<?php
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson_ashimine;host=localhost;","root","mysql");
$stmt = $pdo->query("select * from contactform2");
    

?>
    
    
    
 <div class="logo">
    <img src="4eachblog_logo.jpg">
    </div>   
    
     <header>
    <ul>
        <li>トップ</li>
        <li>プロフィール</li>
        <li>4eachについて</li>
        <li>登録フォーム</li>
        <li>お問い合わせ</li>
        <li>その他</li>
    </ul>

</header>
    
<div class="left">
    <h3>プログラミングに役立つ掲示板</h3>

<form method="post" action="insert.php">
    <h2>入力フォーム</h2>
        
<div>
    <label>ハンドルネーム</label>
    <br>
    <input type="text" size="35" name="handlename">
</div>
    
    <br>
    
<div>
    <label>タイトル</label>
    <br>
    <input type="text" size="35" name="title">
</div>
        
    <br>
    
<div>
    <label>コメント</label>
    <br>
    <textarea cols="35" rows="7" name="comments"></textarea>
</div>
<div>
    <input type="submit" class="submit" Value="投稿する">
</div>
    
    
</form>
    
    <?php
while($row = $stmt->fetch()){
    echo"<div class='kiji'>";
    echo"<h3>".$row['title']."</h3>";
    echo"<div class='contents'>";
    echo$row['comments'];
    echo"<div class='handlename'>posted by".$row['handlename']."</div>";
    echo"</div>";
    echo"</div>";
}
?>
    
    
</div>
    

<div class="right">
     
     <h3 class="ninki">人気の記事
    </h3>
   
     <div class="ABC">
         
PHPオススメ本
<br>
PHP MyAdminの使い方
<br>
今人気のエディタ Top5
<br>
HTMLの基礎
         </div>
         
     <h3 class="ninki">オススメリンク</h3>
    <div class="ABC">
     インターノウス株式会社
    <br>
    XAMPPのダウンロード
    <br>
    Eclipseノダウンロード
    <br>
    Bracketsのダウンロード
    </div>
    <h3 class="ninki">カテゴリ</h3>
    <div class="ABC">
    HTML
    <br>
    PHP
    <br>
    MySQL
    <br>
    JavaScript
    </div>
</div>
    

    
    
</body>

      <footer>
copyright C internous l 4each blog is the one which provides A to Z about programming.
</footer>
    
    
    
</html>