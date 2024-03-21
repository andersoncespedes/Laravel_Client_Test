<?php
namespace App\UnitOfWork;
use App\Interface\IUnitOfWork;
use App\Interface\ICountryRepository;
use App\Interface\IClientRepository;
use App\Repositories\ClientRepository;
use App\Repositories\CountryRepository;
use App\Models\Client;
use App\Models\Countries;

class UnitOfWork implements IUnitOfWork{
    private ICountryRepository $_country;
    private IClientRepository  $_client;
    private Client $_client_model;
    private Countries $_countries_model;
    public function __construct (Client $client, Countries $countries){
        $this->_client_model = $client;
        $this->_countries_model = $countries;
    }
    public function Countries() : ICountryRepository{
        $_countries ??= new CountryRepository($this->_countries_model);
        return $_countries;
    }
    public function Clients() : IClientRepository{
        $_client ??= new ClientRepository($this->_client_model);
        return $_client;
    }
}
