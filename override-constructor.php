<?php

class Toaster
{
  protected int $slots;

  public function __construct()
  {
    $this->slots = 2;
  }

  public function toast()
  {
    echo "Toasted " . $this->slots . " slices";
  }
}

// Toaster Premium
class ToasterPremium extends Toaster
{
  protected int $slots;
  private int $duration;

  public function __construct(int $newDuration)
  {
    parent::__construct();
    $this->slots = 4;
    $this->duration = $newDuration;
  }

  public function toast()
  {
    parent::toast();
    echo " with some peanutbutter for " . $this->duration . " minutes";
  }
}

$toaster = new ToasterPremium(3);
echo $toaster->toast();
