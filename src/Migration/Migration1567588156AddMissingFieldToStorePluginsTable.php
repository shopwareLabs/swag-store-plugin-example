<?php declare(strict_types=1);

namespace Swag\StorePlugin\Migration;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Migration\MigrationStep;

class Migration1567588156AddMissingFieldToStorePluginsTable extends MigrationStep
{
    public function getCreationTimestamp(): int
    {
        return 1567588156;
    }

    public function update(Connection $connection): void
    {
        $connection->executeQuery(
            'ALTER TABLE store_plugins ADD buy_link VARCHAR(255) NULL AFTER title'
        );
    }

    public function updateDestructive(Connection $connection): void
    {
    }
}
