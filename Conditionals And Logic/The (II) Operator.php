<?php

function willWeEat($meal_type, $is_hungry){
  if ($meal_type === "ayam" || $is_hungry){
    return "Yum. Thanks!";
  } else {
    return "No thanks. We're not hungry.";
  }
}



echo willWeEat("ayam", false);
echo "\n\n";
echo willWeEat("babi", false);