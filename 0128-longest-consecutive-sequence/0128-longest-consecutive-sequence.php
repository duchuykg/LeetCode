class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function longestConsecutive($nums) {
        $max = [];
        $currentMax = 1;
        
        sort($nums);
        
        if (count($nums) === 0) return 0;
        
        for ($i = 0; $i < count($nums); $i++)
        {
            if ($i === 0){
                $currentMax = 1;
                $max[0] = 1;
            }
            
            if ($i > 0 && $nums[$i] === $nums[$i - 1] + 1) {
                $currentMax++;
                $max[$i] = $currentMax;
            }
            else if ($i > 0 && $nums[$i] !== $nums[$i - 1] + 1)
            {
                if ($i > 0 && $nums[$i] === $nums[$i - 1]) continue;
                $currentMax = 1;
                $max[$i] = $max[$i - 1];
            }

        }
        
        return max($max);
    }
}