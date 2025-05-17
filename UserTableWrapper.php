<?php
declare(strict_types=1);

interface TableWrapperInterface
{
    public function insert(array $values): void;
    public function update(int $id, array $values): array;
    public function delete(int $id): void;
    
    public function get(): array;
}


class UserTableWrapper
{
    private array $rows;

    /**
     * @param array|[column => row_value] $values
     */
    public function insert(array $values): void
    {
        $this->rows[] = $values;
    }

    public function sum(int $x, int $y): int
    {
      return $x + $y;
    }
}