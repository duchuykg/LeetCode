class Solution
{

  /**
   * @param String $s
   * @return Boolean
   */

  function   isValid($s)
  {
      $length =strlen($s);
        if( $length%2 != 0) {
            return false;
        }
    $counter = 0;
    $flag1 = [];
    $flag2 = [];
    $flag3 = [];

    for ($i = 0; $i <$length; $i++) {
      switch ($s[$i]) {
        case '(':
          array_push($flag1, $counter);
          ++$counter;
          break;
        case '{':
          array_push($flag2, $counter);
          ++$counter;
          break;
        case '[':
          array_push($flag3, $counter);
          ++$counter;
          break;
        case ')':
          --$counter;
          if ($counter !==  array_pop($flag1))
            return false;
          break;
        case '}':
          --$counter;
          if ($counter !== array_pop($flag2))
            return false;
          break;
        case ']':
          --$counter;
          if ($counter !== array_pop($flag3))
            return false;
          break;
      }
      if ($counter < 0)
        return false;
    }

    if ($counter != 0)
      return false;

    return true;
  }
}