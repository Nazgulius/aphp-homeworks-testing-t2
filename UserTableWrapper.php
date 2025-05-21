<?php

declare(strict_types=1);

interface TableWrapperInterface
{
  public function insert(array $values): void;
  public function update(int $id, array $values): array;
  public function delete(int $id): void;

  public function get(): array;
}


class UserTableWrapper implements TableWrapperInterface
{
  /**
   * @param array|[column => row_value] $values
   */
  
  private array $rows;

  public function __construct()
  {
    $this->rows = [];
  }

  public function insert(array $values): void
  {
    $this->rows[] = $values;
  }

  public function update(int $id, array $values): array
  {
    $index = $id - 1; // так как id нумерация с 1
    if (isset($this->rows[$index])) {
      $this->rows[$index] = $values;
      return $this->rows[$index];
    }
    return [];
  }

  public function delete(int $id): void
  {
    $index = $id - 1;
    if (isset($this->rows[$index])) {
      unset($this->rows[$index]);
      $this->rows = array_values($this->rows); // переупорядочить
    }
  }

  public function get(): array
  {
    return $this->rows;
  }
}
