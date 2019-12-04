<?php declare(strict_types=1);

namespace Swag\StorePlugin\Entity;

use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;

class StorePluginEntity extends Entity
{
    use EntityIdTrait;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $cover;

    /**
     * @var string
     */
    protected $buyLink;

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getCover(): string
    {
        return $this->cover;
    }

    /**
     * @param string $cover
     */
    public function setCover(string $cover): void
    {
        $this->cover = $cover;
    }

    /**
     * @return string
     */
    public function getBuyLink(): string
    {
        return $this->buyLink;
    }

    /**
     * @param string $buyLink
     */
    public function setBuyLink(string $buyLink): void
    {
        $this->buyLink = $buyLink;
    }
}
