<?php

function ternaryCheckout($benda)
{
    return $benda <= 12 ? "express lane" : "regular lane";
}

function ternaryVote ($umur) 
{
  return $umur >= 18 ? "yes" : "no";
 }

echo ternaryCheckout(1);
echo "\n\n";
echo ternaryCheckout(13);
echo "\n\n";
echo ternaryVote(19);
echo "\n\n";
echo ternaryVote(13);