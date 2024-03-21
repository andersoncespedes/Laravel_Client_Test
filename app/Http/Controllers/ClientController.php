<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Interface\IUnitOfWork;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
class ClientController extends Controller
{
    private IUnitOfWork $_unitOfWork;
    public function __construct(IUnitOfWork $unitOfWork){
        $this->_unitOfWork = $unitOfWork;
    }
    public function __call($send, $out){
        return view();
    }
    public function show() : View{
        $clients = $this->_unitOfWork->Clients()->getWithCountries();
        return view("Clients.Client_show", compact("clients"));
    }
    public function store(Request $request) : RedirectResponse{
        $this->_unitOfWork->Clients()->save($request->all());
        return redirect("/");
    }
    public function create() : View{
        $countries = $this->_unitOfWork->Countries()->listAll();
        return view("Clients.Client_create", compact("countries"));
    }
    public function destroy(int $id) : RedirectResponse{
        $this->_unitOfWork->Clients()->delete($id);
        return redirect("/");
    }
}
