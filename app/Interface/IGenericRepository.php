<?php
namespace App\Interface;
use Illuminate\Pagination\LengthAwarePaginator;
interface IGenericRepository
{
    function save(array $data) : void;
    function update(int $id, array $data) : void;
    function listAll() : LengthAwarePaginator;
    function getOne(int $id) : object;
}
