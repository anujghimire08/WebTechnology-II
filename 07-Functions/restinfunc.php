<?php

function displayNum(...$nums): void
{
  foreach ($nums as $num) echo $num;
}

displayNum(1, 2, 3, 4, 5, 6);
