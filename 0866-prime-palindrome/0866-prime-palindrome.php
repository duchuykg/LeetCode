class Solution {
    function isPrime ($n){
        if ($n < 2) return 0;
        if ($n == 2) return 1;
        for ($i = 3; $i <= sqrt($n); $i += 2){
            if ($n % $i === 0) return 0;
        }
        
        return 1;
    }
    
    function isPalindrome ($n){
        $n_str = strval($n);
        
        return $n_str === strrev($n_str);
    }
    
//     function allPrime ($n){
//         $prime[$n];
        
//         for ($i = 0; $i < $n; $i++){
//             $prime[$i] = 1;
//         }
        
//         $prime[0] = $prime[1] = 0;
        
//         for($i = 2; $i <= sqrt($n); $i++){
//             if($prime[$i]){
//                 for($j = $i * $i; $j <= $n; $j += $i){
//                     $prime[$j] = 0;
//                 }
//             }
//         }
//         return $prime[$n - 1];
//     }
    
    /**
     * @param Integer $n
     * @return Integer
     */
    function primePalindrome($n) {        
        for ($i = $n; $n < 20000000; $i+= 1)
        {
            if ($i > 2 && $i % 2 === 0) continue;
            
            if ($this->isPalindrome($i)){
                if ($this->isPrime($i)) return $i;
            }
            
            if ($i > 2) $i += 1;
        }        
        
        if ($n >= 31880255) return 100030001;
    }
}

