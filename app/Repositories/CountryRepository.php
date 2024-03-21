<?php
namespace App\Repositories;
use App\Interface\ICountryRepository;
use App\Models\Country;
use Illuminate\Support\Collection;

class CountryRepository extends GenericRepository implements ICountryRepository{
    private Country $_model;
    public function __construct(Country $model){
        $this->_model = $model;
        parent::__construct($this->_model);
    }
  
}
