<?php
$number = $_GET['number'];
$number_spt = str_split($number);
// var_dump($number_spt);
$number_rnd = array_rand($number_spt);
// echo $number_rnd;
?>


<?php
echo date("Y/m/d", time());?>の運勢は
<p>選ばれた数字は<?php echo $number_rnd;?></p>

<?php
if($number_rnd == '0') {
  echo "凶";
} elseif($number_rnd >= '1' && $number_rnd <= '3') {
  echo "小吉";
} elseif($number_rnd >= '4' && $number_rnd <= '6') {
  echo "中吉";
} elseif($number_rnd >= '7' && $number_rnd <= '8') {
  echo "吉";
} elseif($number_rnd == '9') {
  echo "大吉";
}
?>
