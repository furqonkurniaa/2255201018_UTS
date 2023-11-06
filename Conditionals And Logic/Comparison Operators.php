<?php

function chooseCheckoutLane($kursi)
{
  if ($kursi <= 12){
    return "rendi rapitra";
  } else {
    return "Jeprinaldi";
  }
}

function canIVote ($umur) 
{
    if($umur >= 18){
        return "iya dia umur 18 ke atas";
       } else {
       return "umur dia 18 kebawah";
    }
 }

echo chooseCheckoutLane(1);
echo "\n\n";
echo chooseCheckoutLane(13);
echo "\n\n";
echo canIVote(19);
echo "\n\n";
echo canIVote(13);