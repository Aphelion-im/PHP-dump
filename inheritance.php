<?php

class Toaster
{
  public int $slots = 2;

  public function toast()
  {
      return "Toasted " . $this->slots . " slices";
  }
}

class FrenchToaster extends Toaster
{
  public int $slots = 4;
}

$frenchToaster = new FrenchToaster();
echo $frenchToaster->toast();
