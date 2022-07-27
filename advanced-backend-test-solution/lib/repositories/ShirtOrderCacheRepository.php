<?php

namespace Befeni\Repositories;

use Befeni\Interface\shirtOrderInterface;
use Befeni\Store\Cache;

/**
 * Repository class for fetching details from cache or database
 */
class ShirtOrderCacheRepository extends ShirtOrderRepository implements shirtOrderInterface
{

    /**
     * Function for fetching all data from cache or database
     */
    public function getAll()
    {
        if (Cache::has('shirtOrder')) {
            return Cache::get('shirtOrder:*');
        }

        $orders = parent::getAll();
        Cache::set('shirtOrder', $orders);

        return $orders;
    }
    
    /**
     * Function for fetching a shirt details from cache or database
     */
    public function getById($id)
    {
        if (Cache::has('shirtOrder:' . $id)) {
            return Cache::get('shirtOrder:' . $id);
        }

        $order = parent::getById($id);
        Cache::set('shirtOrder', [$order]);

        return $order;
    }
}
