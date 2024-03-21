<?php
namespace App\Interface;
use Illuminate\Support\Collection;

interface IClientRepository extends IGenericRepository{
    function getWithCountries() : Collection;
}
