<?php

namespace App\Context;

use App\State\SolidState;

class Matter
{
  private $name;
  private $state;
  
  public function __construct($name)
  {
    $this->name = $name;
    $this->state = SolidState::getInstance();
  }

  public function getName()
  {
    return $this->name;
  }

  public function getState()
  {
    return $this->state->getState();
  }
  
  public function changeState()
  {
    $this->state = $this->state->nextState();
  }
}