<?php
namespace App\Repositories;
use App\Interface\IGenericRepository;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
class GenericRepository implements IGenericRepository
{
    private object $_model;
    public function __construct(object $model){
        $this->_model = $model;
    }
    function save(array $data) : void
    {
        $this->_model->create($data);
    }
    function delete(int $id) : bool{
        $entity = $this->_model->findOrFail($id);
        if(is_null($entity) ){
            return false;
        }
        $entity->delete();
        return true;
    }
    function update(int $id, array $data) : void
    {
        $this->_model->where("id", $id)->update($data);
    }
    function listAll() : Collection
    {
        return $this->_model->all();
    }
    function getOne(int $id) : object{
        return $this->_model->findOrFail($id);
    }
}
