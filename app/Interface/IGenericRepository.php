<?php

namespace App\Interface;

use Illuminate\Support\Collection;

/**
 * Generic Repository to implement in every repository
 */
interface IGenericRepository
{
    /**
     * Generic transaction to create a new entity
     *  @param array $data
     */
    function save(array $data): void;
    /**
     * Generic transaction to update an existing entity
     *  @param int $id
     *  @param array $data
     */
    function update(int $id, array $data): void;
    /**
     * Generic transaction to LIST all of the entities
     *  @return Illuminate\Support\Collection;
     */
    function listAll(): Collection;
    /**
     * Generic transaction to get one entity by id
     *  @param int $id
     *  @return object;
     */
    function getOne(int $id): object;
    /**
     * Generic transaction to delete one entity by id
     *  @param int $id
     *  @return bool;
     */
    function delete(int $id): bool;
}
