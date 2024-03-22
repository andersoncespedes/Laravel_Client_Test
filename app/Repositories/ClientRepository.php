<?php
namespace App\Repositories;
use App\Interface\IClientRepository;
use App\Models\Client;
use Illuminate\Pagination\LengthAwarePaginator;
class ClientRepository extends GenericRepository implements IClientRepository{
    private Client $_model;
    public function __construct(Client $model){
        $this->_model = $model;
        parent::__construct($this->_model);
    }
    function getWithCountries() : LengthAwarePaginator{
        return $this->_model->with("countries")->paginate(10);
    }
}
