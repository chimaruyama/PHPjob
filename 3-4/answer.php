<?php 
 $my_name = $_POST['my_name'];
 $question1 = $_POST['question1'];
 $question2 = $_POST['question2'];
 $question3 = $_POST['question3'];


 $answer1 = $_POST['answer1'];
 $answer2 = $_POST['answer2'];
 $answer3 = $_POST['answer3'];
?>

<p><?php echo $my_name; ?>さんの結果は・・・？</p>

<p>①の答え</p>
<?php
if($answer1 == $question1){
	$result = "正解！";
}else{
	$result = "不正解･･･";
}
?>

<p>②の答え</p>
<?php
if($answer2 == $question2){
	$result = "正解！";
}else{
	$result = "不正解･･･";
}
?>

<p>③の答え</p>
<?php
if($answer3 == $question3){
	$result = "正解！";
}else{
	$result = "不正解･･･";
}
?>

