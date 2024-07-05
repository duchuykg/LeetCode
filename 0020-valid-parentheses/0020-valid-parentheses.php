class Solution
{
    function isValid($s)
    {
    $length = strlen($s);
    $count = 0;
    $flag1 = [];
    $flag2 = [];
    $flag3 = [];
        
    if ($length % 2 != 0) 
    {
        return false;
    }

    for ($i = 0; $i < $length; $i ++) {
        switch ($s[$i]) {
            case '(':
                array_push($flag1, $count);
                ++$count;
                break;
            case '{':
                array_push($flag2, $count);
                ++$count;
                break;
            case '[':
                array_push($flag3, $count);
                ++$count;
                break;
            case ')':
                --$count;
                if ($count !==  array_pop($flag1))
                return false;
                break;
            case '}':
                --$count;
                if ($count !== array_pop($flag2))
                return false;
                break;
            case ']':
                --$count;
                if ($count !== array_pop($flag3))
                return false;
                break;
        }
        if ($count < 0)
            return false;
        }

        if ($count != 0)
          return false;
        
        return true;
    }
}