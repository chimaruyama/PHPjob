<?php
$my_name = $_POST['my_name'];

$question1 = array('80','22','20','21');
// var_dump($question1);
$question2 = array('PHP','Python','JAVA','HTML');
// var_dump($question2);
$question3 = array('join','select','insert','update');
// var_dump($question3);

$answer1 = $question1[0];
// var_dump($answer1);
$answer2 = $question2[3];
// var_dump($answer2);
$answer3 = $question3[1];
// var_dump($answer3);
?>
<body>
   <p>お疲れ様です<?php echo $my_name; ?>さん</p>

   <form action="answer.php" method="post">
       <h2>①ネットワークのポート番号は何番？</h2>
       <?php foreach($question1 as $value){ ?>
       <input type="radio" name="question1" value="<?php echo $value; ?>" /> <?php echo $value; ?>
       <?php } ?>
       <input type="hidden" name="answer1" value="<?php echo $answer1; ?>"> 

       <h2>②Webページを作成するための言語は？</h2>
       <?php foreach($question2 as $value){ ?>
       <input type="radio" name="question2" value="<?php echo $value; ?>" /> <?php echo $value; ?>
       <?php } ?>
       <input type="hidden" name="answer2" value="<?php echo $answer2; ?>">


       <h2>③MySQLで情報を取得するためのコマンドは？</h2>
       <?php foreach($question3 as $value){ ?>
       <input type="radio" name="question3" value="<?php echo $value; ?>" /> <?php echo $value; ?>
       <?php } ?>
       <input type="hidden" name="answer3" value="<?php echo $answer3; ?>">
       <input type="hidden" name="my_name" value="<?php echo $my_name; ?>"><br>
       <input type="submit" value="回答する" />
    </form>
</body>
