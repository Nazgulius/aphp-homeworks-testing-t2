<?php

require_once './UserTableWrapper.php';
use PHPUnit\Framework\TestCase;

class UserTableWrapperTest extends TestCase
{
  public function testOne()
  {
    $a = new UserTableWrapper();
    $result = $a->sum(2, 3);
    $this->assertEquals(5, $result);
  }
}