function detect_pangram($string) { 
  #your code here
  $re = '/([a-z])(?!.*\1)/i';
  preg_match_all($re ,$string, $matches, PREG_SET_ORDER, 0);
  $r = count($matches);
  return ($r>25);
  }

class MyExampleTestCases extends TestCase {
  public function testBasicTests() {
  # Pangrams:
  $result4 = detect_pangram("The quick brown fox jumps over the lazy dog.");
  $this->assertEquals(true, $result4);
  $result5 = detect_pangram("1L%r+f4G!e7w V z q6M h4d F3b+t O2n e K^g+c#S^i4i X7c-u P5d7j Y6a(a B");
  $this->assertEquals(true, $result5);
  
  # Not pangrams:
  $result1 = detect_pangram("A pangram is a sentence that contains every single letter of the alphabet at least once.");
  $this->assertEquals(false, $result1 );
  $result2 = detect_pangram("5B!e i J x*p F h d!A:o q D y n6L%u9i.G9f2g4C a h+K!m+z:R t!j:B w s C");
  $this->assertEquals(false, $result2);
  }
}
/*
function detect_pangram($string) { 
  return count(array_unique(str_split(preg_replace('/[^a-z]/', '', strtolower($string))))) === 26;
}
*/