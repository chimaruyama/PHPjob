<?php
 $number = $_GET['number'];
 $number_spt = str_split($number);
  // var_dump($number_spt); 
//  $number_idx = 0;
//  $number_rst = "";
 
//  foreach ($number_spt as  $number_rnd){
  // echo $number_rnd;
// }

  $number_keyidx = array_rand($number_spt,1);
  // var_dump($number_keyidx);
 
  $number_valrst = $number_spt[$number_keyidx];
  // var_dump($number_valrst);
?>



<?php
echo date("Y/m/d", time());?>の運勢は
<p>選ばれた数字は<?php echo $number_valrst;?></p>


<?php
if($number_valrst == 0) {
  echo "凶";
} elseif($number_valrst >= 1 && $number_valrst <= 3) {
  echo "小吉";
} elseif($number_valrst >= 4 && $number_valrst <= 6) {
  echo "中吉";
} elseif($number_valrst >= 7 && $number_valrst <= 8) {
  echo "吉";
} elseif($number_valrst == 9) {
  echo "大吉";
}
?>