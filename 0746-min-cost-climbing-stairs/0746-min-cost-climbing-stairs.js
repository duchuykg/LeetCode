/**
 * @param {number[]} cost
 * @return {number}
 */
var minCostClimbingStairs = function(cost) {
    let min = 0;
    let l1 = cost[0];
    let l2 = cost[1];

    for (let i = 2; i < cost.length; i++){
        min = Math.min(l1, l2) + cost[i];
        l1 = l2;
        l2 = min;
    }
    return Math.min(l1, l2);
};