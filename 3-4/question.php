<?php
$my_name = $_POST['my_name'];

$question1 = array('80','22','20','21');
$question2 = array('PHP','Python','JAVA','HTML');
$question3 = array('join','select','insert','update');

$answer1 = $question1[0];
$answer2 = $question2[3];
$answer3 = $question3[1];
?>



<p>お疲れ様です<?php echo $my_name; ?>さん</p>

<h2>①ネットワークのポート番号は何番？</h2>

<form method="POST" action="answer.php">
   <?php foreach($question1 as $value){ ?>
   <input type="radio" name="question1" value="<?php echo $value; ?>" /> <?php echo $value; ?>
   <?php } ?>
   <input type="hidden" name="answer1" value="<?php echo $answer1 ?>">
</form>


<h2>②Webページを作成するための言語は？</h2>

<form method="POST" action="answer.php">
   <?php foreach($question2 as $value){ ?>
   <input type="radio" name="question2" value="<?php echo $value; ?>" /> <?php echo $value; ?>
   <?php } ?>
   <input type="hidden" name="answer2" value="<?php echo $answer2 ?>">
</form>


<h2>③MySQLで情報を取得するためのコマンドは？</h2>

<form method="POST" action="answer.php">
   <?php foreach($question3 as $value){ ?>
   <input type="radio" name="question3" value="<?php echo $value; ?>" /> <?php echo $value; ?>
   <?php } ?>
   <input type="hidden" name="answer3" value="<?php echo $answer3 ?>"><br>
   <input type="submit" value="回答する">
</form>
