<?php

function agreeOrDisagree($pertama, $kedua)
{
    if ($pertama === $kedua) {
        return "You agree!";
    } else {
        return "You disagree!";
    }
}

echo agreeOrDisagree("syafiq", "rendi"); 
echo "\n\n";
echo agreeOrDisagree("rendi", "rendi"); 
echo "\n\n";


function checkRenewalMonth($bulanBaru){
  $bulanSekarang = date("T");
  if ($bulanBaru !== $bulanSekarang) {
    return "Welcome!";
  } else {
    return "Time to renew";
  }
}

$bulanSekarang = date("T");
echo checkRenewalMonth($bulanSekarang);

echo "\n\n";
echo checkRenewalMonth("january");