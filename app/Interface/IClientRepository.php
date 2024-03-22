<?php
namespace App\Interface;
use Illuminate\Pagination\LengthAwarePaginator;
interface IClientRepository extends IGenericRepository
{
    /**
     *  transaction to get all of the Clients with their countries by pagination
     * @return Illuminate\Pagination\LengthAwarePaginator;
     */
    function getWithCountries() : LengthAwarePaginator;
}
