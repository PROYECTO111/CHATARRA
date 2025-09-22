<?php

namespace Core;

abstract class Model
{
    protected string $table;

    public function __construct()
    {
        if (!isset($this->table)) {
            throw new \LogicException('Model table property must be defined.');
        }
    }

    public function create(array $data): bool
    {
        $columns = array_keys($data);
        $placeholders = array_map(fn($col) => ':' . $col, $columns);

        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES (%s)',
            $this->table,
            implode(', ', $columns),
            implode(', ', $placeholders)
        );

        $stmt = Database::connection()->prepare($sql);

        foreach ($data as $column => $value) {
            $stmt->bindValue(':' . $column, $value);
        }

        return $stmt->execute();
    }
}
