<?php declare(strict_types=1);

namespace Swag\StorePlugin\Entity;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

/**
 * @method void add(StorePluginEntity $entity)
 * @method void set(string $key, StorePluginEntity $entity)
 * @method StorePluginEntity[] getIterator()
 * @method StorePluginEntity[] getElements()
 * @method StorePluginEntity|null get(string $key)
 * @method StorePluginEntity|null first()
 * @method StorePluginEntity|null last()
 */
class StorePluginCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return StorePluginEntity::class;
    }
}
