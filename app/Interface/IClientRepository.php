<?php
namespace App\Interface;
use Illuminate\Pagination\LengthAwarePaginator;
interface IClientRepository extends IGenericRepository{
    function getWithCountries() : LengthAwarePaginator;
}
