<?php
namespace App\UnitOfWork;
//Interfaces
use App\Interface\IUnitOfWork;
use App\Interface\ICountryRepository;
use App\Interface\IClientRepository;
//Repositories
use App\Repositories\ClientRepository;
use App\Repositories\CountryRepository;
//Models
use App\Models\Client;
use App\Models\Country;

class UnitOfWork implements IUnitOfWork{
    private ICountryRepository $_country;
    private IClientRepository  $_client;
    private Client $_client_model;
    private Country $_countries_model;
    public function __construct (Client $client, Country $countries){
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
