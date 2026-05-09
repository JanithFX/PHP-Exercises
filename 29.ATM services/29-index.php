<?php
//data
$accountBalance = 5000;
$choice = 0;
//information
$accountBalance = 0;


if ($choice == 1) {
    // Get the amount to deposit
    $amount = 0; 
    $accountBalance = depositCash($accountBalance, $amount);
} elseif ($choice == 2) {
    // Get the amount to withdraw
    $amount = 0; 
    $accountBalance = withdrawCash($accountBalance, $amount);
} elseif ($choice == 3) {
    checkBalance($accountBalance);
} elseif ($choice == 4) {
    echo "Thank you.";
} else {
    echo "Invalid Choice.";
}

// function name: depositCash
//pre-condition: $balance, $amount
//post-condition: $balance
//description: This function deposits the specified amount into the account balance and returns the updated balance.
//version: 1.0
function depositCash($balance, $amount) {
    $balance = $balance + $amount;
    echo "Deposit Successful.";
    return $balance;
}
// function name: withdrawCash
//pre-condition: $balance, $amount
//post-condition: $balance
//description: This function withdraws the specified amount from the account balance if sufficient funds are available and returns the updated balance.
//version: 1.0
function withdrawCash($balance, $amount) {
    if ($amount > $balance) {
        echo "Insufficient Funds.";
        return $balance;
    } else {
        $balance = $balance - $amount;
        echo "Withdrawal Successful.";
        return $balance;
    }
}
// function name: checkBalance
//pre-condition: $balance
//post-condition: None
//description: This function displays the current account balance to the user.  
//version: 1.0
function checkBalance($balance) {
    echo "Your Current Balance is: Rs. " . $balance;
}
?>