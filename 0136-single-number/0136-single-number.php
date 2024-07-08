class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums) {
        $leng = count($nums);
        $in = [];
        if ($leng == 1) return $nums[0];
        foreach ($nums as $i => $value){
            unset($nums[$i]);
            if (!in_array($value, $nums)){
                if (!in_array($value, $in))
                    return $value; 
            }
            else {
                $in[] = $value;
            }
        }
    }
}