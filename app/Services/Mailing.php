<?php
namespace App\Services;
use App\Interface\IMailing;
use App\Mail\RegisterClientMail;
use Illuminate\Support\Facades\Mail;
class Mailing implements IMailing{
    public function __construct(){
    }
    function SendRegisterMail(string $email) : void{
        Mail::to($email)->send(new RegisterClientMail());
    }
}
