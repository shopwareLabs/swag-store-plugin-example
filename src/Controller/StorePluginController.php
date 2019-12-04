<?php declare(strict_types=1);

namespace Swag\StorePlugin\Controller;

use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepositoryInterface;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Sorting\FieldSorting;
use Shopware\Core\Framework\Routing\Annotation\RouteScope;
use Shopware\Storefront\Controller\StorefrontController;
use Swag\StorePlugin\Entity\StorePluginEntity;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @RouteScope(scopes={"storefront"})
 */
class StorePluginController extends StorefrontController
{
    /**
     * @var EntityRepositoryInterface
     */
    private $repository;

    public function __construct(EntityRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @Route("/store-plugins", name="frontend.store.plugin.controller", options={"seo"="false"}, methods={"GET"})
     */
    public function index(): Response
    {
        $this->installDemoData();

        /** @var StorePluginEntity[] $StorePlugins */
        $StorePlugins = $this->repository->search(
            (new Criteria())->addSorting((new FieldSorting('title', 'ASC'))),
            Context::createDefaultContext()
        );

        return $this->renderStorefront('@Storefront/storefront/index.html.twig', ['StorePlugins' => $StorePlugins]);
    }

    private function installDemoData(): void
    {
        $this->repository->upsert(
            [
                [
                    'id' => 'c3ec803c274f4f5e82e48078b31f27e7',
                    'title' => 'PayPal',
                    'buyLink' => 'https://store.shopware.com/swag828732772311f/paypal.html?c=1056',
                ],
                [
                    'id' => 'c56116dbe3c34fd4a101b69da06129da',
                    'title' => 'Business Essentials',
                    'buyLink' => 'https://store.shopware.com/swagbusinessessentials/business-essentials.html?c=1056',
                ],
                [
                    'id' => '1c3d675bc2bb4fc3915c5d6635b093ad',
                    'title' => 'Bundle',
                    'buyLink' => 'https://store.shopware.com/swagbundle/bundle.html?c=1056',
                ],
            ],
            Context::createDefaultContext()
        );
    }
}
