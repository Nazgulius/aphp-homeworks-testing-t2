<?php

require_once './UserTableWrapper.php';

use PHPUnit\Framework\TestCase;

class UserTableWrapperTest extends TestCase
{
  private $a;
  private $array;

  protected function setUp(): void
  {
    parent::setUp();
    $this->a = new UserTableWrapper();
    $this->array = [
      1 => 1,
      2 => 2,
      3 => 3,
    ];
  }

  public function testInsert()
  {
    $this->a->insert($this->array);
    $result = $this->a->get();
    $this->assertEquals([$this->array], $result);
  }

  public function testUpdate()
  {
    $this->a->insert([
      1 => 1,
      2 => 2,
      3 => 3,
    ]);
    $this->a->update(1, [5 => 5]);
    $result = $this->a->get();
    $expected = [
      [5 => 5],
    ];
    $this->assertEquals($expected, $result);
  }

  public function testDelete()
  {
    $this->a->insert([
      1 => 1,
      2 => 2,
      3 => 3,
    ]);
    // Удаляем запись с id=1
    $this->a->delete(1);
    $result = $this->a->get();
    $expected = [
      [
        1 => 1,
        2 => 2,
        3 => 3,
      ],
    ];
    // Обратите внимание, что удаление первой записи сместит остальные
    $this->assertEquals($expected, $result);
  }
}
