<?php

namespace Befeni\Repositories;

use Befeni\Interface\shirtOrderInterface;

/**
 * Repository class for fetching a shirt details from databse
 */
class ShirtOrderRepository implements shirtOrderInterface
{

    /**
     * Function for fetching all data from shirt_order table
     */
    public function getAll()
    {
        return 'select * from shirt_order limit 10';
    }

    /**
     * Function for fetching details from shirt_order table with id
     */
    public function getById($id)
    {
        return 'select * from shirt_order where id=' . $id;
    }
}
