<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Interface\IUnitOfWork;
use Illuminate\Http\Request;
use Illuminate\View\View;
class ClientController extends Controller
{
    private IUnitOfWork $_unitOfWork;
    public function __construct(IUnitOfWork $unitOfWork){
        $this->_unitOfWork = $unitOfWork;
    }
    public function __call($send, $out){
        return view();
    }
    public function Show() : View{
        $clients = $this->_unitOfWork->Clients()->listAll();
        return view("Client", ["clients" => $clients]);
    }
    public function Save(Request $request){
        $this->_unitOfWork->Clients()->save($request->all());
        return view("welcome");
    }
}
