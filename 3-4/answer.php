<?php 
 $my_name = $_POST['my_name'];
//  var_dump($my_name);
 $question1 = $_POST['question1'];
//  var_dump($question1);
 $question2 = $_POST['question2'];
//  var_dump($question2);
 $question3 = $_POST['question3'];
//  var_dump($question3);


 $answer1 = $_POST['answer1'];
//  var_dump($answer1);
 $answer2 = $_POST['answer2'];
//  var_dump($answer2);
 $answer3 = $_POST['answer3'];
//  var_dump($answer3);
 //$question1 == $answer1
 //$question2 == $answer2
 //$question3 == $answer3
function okcheck($p_Q,$p_A){
	if($p_Q == $p_A){
		print "正解！";
	}else if ($p_Q != $p_A){
		print "残念・・・";
	}
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
        <p class="item"><?php echo $my_name; ?>さんの結果は・・・？</p>

        <p class="item">①の答え</p>
        <?php echo okcheck($question1, $answer1);?>

        <p class="item">②の答え</p>
        <?php echo okcheck($question2, $answer2);?>

        <p class="item">③の答え</p>
        <?php echo okcheck($question3, $answer3);?>
</body>