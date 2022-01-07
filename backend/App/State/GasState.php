<?php

namespace App\State;

use App\State\Interfaces\StateInterface;

class GasState implements StateInterface
{
  public static $instance;

  public static function getInstance()
  {
    if(empty(self::$instance)) {
      self::$instance = new GasState();
    }
    return self::$instance;
  }

  public function nextState()
  {
    return SolidState::getInstance();
  }

  public function getState()
  {
    return '<span style="color: lightgrey;">気体</span>';
  }

  /**
   * インスタンスが複製された場合例外を投げる
   * インスタンスの単一性を保持
   *
   * @throws \Exception
   */
  public final function __clone()
  {
    throw new \Exception('This Instance is Not Clone');
  }

  /**
   * インスタンスがアンシリアライズされた場合例外を投げる
   * インスタンスの単一性を保持
   *
   * @throws \Exception
   */
  public final function __wakeup()
  {
    throw new \Exception('This Instance is Not unserialize');
  }
}