class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function smallestEqual($nums) {
        $min = 0;
        $isCheck = false;
        $leng = count($nums);
        foreach ($nums as $i => $value){
            if ($i % 10 == $value){
                return $i;
            }
        }
        return -1;
    }
}