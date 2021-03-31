<?php

abstract class ControlMain {
  protected $action = "start";
  
  abstract public function run();
}