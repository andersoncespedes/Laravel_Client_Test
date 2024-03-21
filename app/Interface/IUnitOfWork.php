<?php
namespace App\Interface;
use App\Models\Client;
use App\Models\Countries;
interface IUnitOfWork{
    function Countries() : ICountryRepository;
    function Clients() : IClientRepository;
}
