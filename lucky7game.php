<?php
echo"Welcome to lucky 7 game";
echo "\n\n";
echo"Place your bet (Rs.10)";
echo "\n";
echo "[below 7]","[7]","[above 7]";
echo "\n\n";
$current_balance = 100;
selectedBet($current_balance,2); //1 => below 7 ,2 => 7 ,3 => above 7
function selectedBet($current_balance,$value)
{
    $array = ["below 7","7","above 7"];
    $selected_bet = $array[$value-1]; 
    echo "Selected bet was ".$selected_bet."\n\n";
    $dice_1 = rand(1,6);
    $dice_2 = rand(1,6);
    $sum_of_dice = $dice_1 + $dice_2;
    displayGameResult($current_balance,$value,$dice_1,$dice_2,$sum_of_dice);
}

function displayGameResult($current_balance,$selected_bet,$dice_1,$dice_2,$sum_of_dice)
{
    echo "Game Results";
    echo "\n";
    echo "Dice 1 : ".$dice_1;
    echo "\n";
    echo "Dice 2 : ".$dice_2;
    echo "\n";
    echo "Total : ".$sum_of_dice;
    echo "\n";
    $final_verdict = "Congratulations ! You win ! Your balance is now Rs.";
    if($selected_bet == 2 && $sum_of_dice == 7)
    {
        $current_balance = $current_balance - 10 + 30;
    }
    elseif($selected_bet == 1 && $sum_of_dice < 7)
    {
        $current_balance = $current_balance - 10 + 20;
    }
    elseif($selected_bet == 3 && $sum_of_dice > 7)
    {
        $current_balance = $current_balance - 10 + 20;
    }
    else
    {
        $current_balance = $current_balance - 10;
        $final_verdict = "Sorry ! You Lose ! Your balance is now Rs.";
    }
    echo "\n";
    echo $final_verdict.$current_balance;
}
?>