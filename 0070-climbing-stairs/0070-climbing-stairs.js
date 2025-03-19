/**
 * @param {number} n
 * @return {number}
 */
var climbStairs = function(n) {
    let num = 1;
    let l1 = 1;
    let l2 = 1;

    for (let i = 1; i < n; i++){
        num = l1 + l2;
        l1 = l2;
        l2 = num;
    }

    return num;
};