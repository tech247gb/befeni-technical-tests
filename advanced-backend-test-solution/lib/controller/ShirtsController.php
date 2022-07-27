<?php

namespace Befeni\Controller;

use Befeni\Repositories\ShirtOrderCacheRepository;
use Befeni\Repositories\ShirtOrderWarehouseAPI;
use Befeni\Repositories\shirtOrderExternalAPI;

/**
 * Controller for shirts
 */
class ShirtsController
{
    /**
     * Controller function for getting shirt details
     */
    public function getDetails($id)
    {
        $orderRepo = new ShirtOrderCacheRepository();
        $order =   $orderRepo->getById($id);
        $repository = "shirtOrder" . $order->source;
        $source  =  new  $repository();
        return $source->getDetails($source->id);
    }

    /**
     * Controller function for getting all shirts data
     */
    public function getAll()
    {
        $orderRepo = new ShirtOrderCacheRepository();
        $orders =   $orderRepo->getAll();
        return $orders;
    }
}
