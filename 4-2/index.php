<?php
require_once("getData.php");
// インスタンス化
$data = new getData();
// インスタンス化したクラスの中にある関数を実行
$user_data = $data->getUserData();
// var_dump($user_data);
$post_data = $data->getPostData();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="header">
        <div class="header-left"><img src="1599315827_logo.png" alt="" class="image"></div>
        <div class="header-right">
            <div class="header-right-top">ようこそ <?php echo $user_data['last_name'].$user_data['first_name']?> さん</div>
            <div class="heder-right-bottom">最終ログイン日：<?php echo $user_data['last_login']?></div>
        </div>    
    </div>
    <div class="main">
    <table class="main-tbl">
        <tr class="title">
            <th>記事ID</th>
            <th>タイトル</th>
            <th>カテゴリ</th>
            <th>本文</th>
            <th>投稿日</th>
        </tr>
        <?php foreach($post_data as $post){?>
        <tr class="content">
            <td><?php echo $post['id'];?></td>
            <td><?php echo $post['title'];?></td>
            <td><?php if( $post['category_no'] == 1 ){
                echo "食事";
            }else if( $post['category_no'] == 2 ){
                echo "旅行";
            }else{
                echo "その他";
            }
            ?></td>
            <td><?php echo $post['comment'];?></td>
            <td><?php echo $post['created'];?></td>
        </tr>
        </div>
        <?php } ?>
    </table>
    <div class="footer">Y&I group.inc</div>
</body>
</html>