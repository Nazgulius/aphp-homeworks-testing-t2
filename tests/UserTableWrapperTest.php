<?php

require_once './UserTableWrapper.php';
use PHPUnit\Framework\TestCase;

class UserTableWrapperTest extends TestCase
{
  // первый тест для проверки работы тестов
  public function testSum()
  {
    $a = new UserTableWrapper();
    $result = $a->sum(2, 3);
    $this->assertEquals(5, $result);
  }

  public function testInsert()
  {
    $a = new UserTableWrapper();
    $result = $a->sum(2, 3);
    $this->assertEquals(5, $result);
  }
}