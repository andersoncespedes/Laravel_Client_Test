<?php

namespace App\Interface;

interface IMailing
{
    /**
     *  Method that send an email when a new client is registered
     *  @param string $email
     */
    function SendRegisterMail(string $email): void;
}
