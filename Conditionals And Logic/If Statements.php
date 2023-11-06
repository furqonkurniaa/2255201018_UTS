<?php

function markAnswer($balon)
{
  if ($balon) {
    return "hijau";
  } else {
    return "merah";
  }
}

echo markAnswer(FALSE);
echo "\n\n";
echo markAnswer(TRUE);
echo "\n\n";
