class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
//         $number = 0;
//         $result = [];
//         $result1 = [];
//         $j = 0;
//         $leng = count($digits);
//         for ($i = 0; $i < $leng; $i ++){
//             $number += $digits[$i] * 10 ** ($leng - $i - 1);
//         }
//         $number += 1;
//         echo $number;
//         while ($number != 0){
//             $result[$j] = $number % 10;
//             $number = (int) ($number / 10);
//             $j++;
//         }
        
//         for ($i = 0; $i < count($result); $i ++){
//             $result1[$i] = $result[count($result) - $i - 1];
//         }
        
//         return $result1;
        $n = count($digits);
        $carry = 1;
        
        for ($i = $n - 1; $i >= 0; $i--) {
            $digits[$i] = $digits[$i] + $carry;
            if ($digits[$i] < 10) {
                return $digits;
            }
            $digits[$i] = 0;
        }
        
        array_unshift($digits, 1);
        return $digits;
    }
}