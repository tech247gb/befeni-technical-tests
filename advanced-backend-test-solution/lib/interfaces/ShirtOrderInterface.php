<?php

namespace Befeni\Interface;

/**
 * Interface class for fetching shirt data from internal database
 */
interface shirtOrderInterface
{
    public function getById($id);
    public function getAll();
}
