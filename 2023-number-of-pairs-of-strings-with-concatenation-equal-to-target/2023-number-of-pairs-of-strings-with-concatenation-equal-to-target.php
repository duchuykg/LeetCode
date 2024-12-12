class Solution {

    /**
     * @param String[] $nums
     * @param String $target
     * @return Integer
     */
    function numOfPairs($nums, $target) {
        $result = 0;
        
        for ($i = 0; $i < count($nums); $i++){
            for ($j = 0; $j < count($nums); $j++){
                if ($i !== $j) {
                    if ($nums[$i] . $nums[$j] === $target) $result += 1;
                }
            }
        }
        return $result;
    }
}