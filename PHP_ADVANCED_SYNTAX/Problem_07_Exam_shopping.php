<?php

$stock = [];

while(true)
{
    $input = trim(fgets(STDIN));
    if($input == "shopping time")
    {
        
        while(true)
        {
            $input2 = trim(fgets(STDIN));
            if($input2 == "exam time")
            {
                break;
            } 

            $data = explode(" ", $input2);
            $action = $data[0];
            $product = $data[1];
            $amount = $data[2];

            if($action == "buy")
            {
                if(array_key_exists($product, $stock) && ($stock[$product]['amount'] >= $amount))
                {
                    $stock[$product]['amount'] = $stock[$product]['amount'] - $amount;
                }
                else
                {
                    $stock[$product]['amount'] = 0;
                    echo $product." doesn't exist\n";
                }
            }
        }

        foreach($stock as $left)
        {
            if($left['amount'] > 0)
            {
                echo $left['product'].' -> '.$left['amount']."\n";
            }
        }
        
    }
    
    
    $data = explode(" ", $input);
    $action = $data[0];
    $product = $data[1];
    $amount = @$data[2];
    
    if($action == "stock")
    {
        if(!array_key_exists($product, $stock)){ 
            $stock[$product] = [
                'product' => $product,
                'amount' => $amount
            ];
        } 
        else 
        {
            $stock[$product]['amount'] = $stock[$product]['amount'] + $amount; 
        }
    }
    else if($action == "buy")
    {
        echo $product." doesn't exist\n";
    }
     
}


