<?php
namespace App\Repositories;
use App\Interface\IClientRepository;
use App\Models\Client;
use Illuminate\Support\Collection;

class ClientRepository extends GenericRepository implements IClientRepository{
    private Client $_model;
    public function __construct(Client $model){
        $this->_model = $model;
        parent::__construct($this->_model);
    }
    function getWithCountries() : Collection{
        return $this->_model->with("countries")->get();
    }
}
