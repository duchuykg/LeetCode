class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $result = [];
        $length = count($nums);
        for ($i = 0; $i < $length - 1; $i++){
            for ($j = $i + 1; $j < $length; $j ++){
                if ($nums[$i] + $nums[$j] == $target){
                    array_push($result, $i);
                    array_push($result, $j);
                }
            }
        }
        return $result;
    }
}