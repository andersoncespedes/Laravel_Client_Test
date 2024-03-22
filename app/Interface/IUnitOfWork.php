<?php
namespace App\Interface;
interface IUnitOfWork{
      /**
     *  Repository for the transactions of the entity country
     *  @return App\Interface\ICountryRepository;
     */
    function Countries() : ICountryRepository;
        /**
     *  Repository for the transactions of the entity Client
     *  @return App\Interface\IClientRepository;
     */
    function Clients() : IClientRepository;
}
