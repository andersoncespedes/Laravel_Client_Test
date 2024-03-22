<?php
namespace App\Interface;

interface IMailing{
    function Send(string $email) : void;
}
