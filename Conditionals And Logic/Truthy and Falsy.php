<?php

function truthyOrFalsy ($nilai)
{
  return $nilai ? "True" : "False";
}




echo truthyOrFalsy(TRUE);
echo "\n\n";
echo truthyOrFalsy(FALSE);
echo "\n\n";
echo truthyOrFalsy("ayam");
echo "\n\n";
echo truthyOrFalsy("");
echo "\n\n";
