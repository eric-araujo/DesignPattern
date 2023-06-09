<?php

namespace DesignPattern;

class PDOConnection extends \PDO
{
    private static ?self $pdoConnection = null;

    private function __construct(
        string $dsn,
        ?string $username = null,
        ?string $password = null,
        ?array $options = null
    ) {
        parent::__construct($dsn, $username, $password, $options);
    }

    public static function conectar(
        string $dsn,
        ?string $username = null,
        ?string $password = null,
        ?array $options = null
    ): self {
        if (is_null(self::$pdoConnection)) {
            self::$pdoConnection = new static($dsn, $username, $password, $options);
        }

        return self::$pdoConnection;
    }
}
