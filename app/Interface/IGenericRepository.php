<?php
namespace App\Interface;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
interface IGenericRepository
{
    function save(array $data) : void;
    function update(int $id, array $data) : void;
    function listAll() : Collection;
    function getOne(int $id) : object;
}
