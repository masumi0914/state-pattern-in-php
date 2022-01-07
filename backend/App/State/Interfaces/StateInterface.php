<?php

namespace App\State\Interfaces;

interface StateInterface
{
  public function nextState();
  public function getState();
}