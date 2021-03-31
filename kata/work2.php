function narcissistic(int $value): bool {
  // Your code here
  $numbers=strval($value);
  $length = strlen($numbers);
  $r=0;
  for ($i=0;$i<$length;$i++){
    $r =$r+pow($numbers[$i],$length);
  }
  if ($r == $value){
    return true;
  }else{
    return false;
  }
}

class NarcissisticTest extends TestCase {
  public function testExamples() {
    $this->assertTrue(narcissistic(7), '7 is narcissistic');
    $this->assertTrue(narcissistic(371), '371 is narcissistic');
  }
}
//
function narcissistic(int $value): bool {
  return $value == array_sum(array_map(function($n) use ($value) {return pow($n, strlen($value));}, str_split($value)));
}