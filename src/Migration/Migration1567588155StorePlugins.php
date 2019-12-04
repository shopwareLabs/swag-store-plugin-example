<?php declare(strict_types=1);

namespace Swag\StorePlugin\Migration;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Migration\MigrationStep;

class Migration1567588155StorePlugins extends MigrationStep
{
    public function getCreationTimestamp(): int
    {
        return 1567588155;
    }

    public function update(Connection $connection): void
    {
        $connection->executeQuery(
            'CREATE TABLE IF NOT EXISTS `store_plugins`
            (
                id BINARY(16) NOT NULL,
                title VARCHAR(100) NULL,
                cover VARCHAR(255) NULL,
                `created_at` DATETIME(3) NOT NULL,
                `updated_at` DATETIME(3) NULL,
            PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        '
        );
    }

    public function updateDestructive(Connection $connection): void
    {
    }
}
