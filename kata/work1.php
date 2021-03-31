function bouncingBall($h, $bounce, $window) {
  if ( $h>0 and $window>0 and $window<$h and $bounce>0 and $bounce<1 ){
    $m = $h* $bounce; 
    $r=1; 
    while($m>$window){
      $r=$r+2;
      $m = $m* $bounce; 
      if ($m==$window){
         $r=$r+1;
      }
    }
   }else{
     $r=-1;
    }
  return $r;
}
/* 
function bouncingBall($h, $bounce, $window) {
  if($h <= 0 || $window <= 0 || $h <= $window || $bounce >= 1 || $bounce <= 0) {
    return -1;
  }
  
  return bouncingBall($h * $bounce, $bounce, $window) + 2;
}
*/
class BouncingBallCases extends TestCase
{
    private function revTest($actual, $expected) {
        $this->assertEquals($expected, $actual);
    }
    public function testBasics() {
        $this->revTest(bouncingBall(3.0, 0.66, 1.5) , 3);
        $this->revTest(bouncingBall(30.0, 0.66, 1.5), 15);
        $this->revTest(bouncingBall(10, 0.6, 10), -1);
    }
}