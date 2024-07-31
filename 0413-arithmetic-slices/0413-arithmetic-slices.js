var numberOfArithmeticSlices = function(nums) {
  let l = nums.length;

  if (l <= 2) {
    return 0;
  }

  let sum = 0;
  let dp = [0, 0]; // dp[i] represents the number of arithmetic slices ending at index i

  for (let i = 2; i < l; i++) {
    if (nums[i] - nums[i - 1] === nums[i - 1] - nums[i - 2]) {
      dp[i] = dp[i - 1] + 1;
      sum += dp[i]; // Add the newly formed arithmetic slices to the total sum
    } else {
      dp[i] = 0;
    }
  }

  return sum;
};
