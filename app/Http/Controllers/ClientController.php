<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Interface\IUnitOfWork;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Interface\IMailing;
use Illuminate\Support\Facades\Event;
use App\Events\EmailEvent;
use App\Http\Requests\ClientRequest;
class ClientController extends Controller
{
    private IUnitOfWork $_unitOfWork;
    public function __construct(IUnitOfWork $unitOfWork){
        $this->_unitOfWork = $unitOfWork;
    }
    public function show() : View{
        $clients = $this->_unitOfWork->Clients()->getWithCountries();
        return view("Clients.Client_show", compact("clients"));
    }
    public function store(ClientRequest $request) : RedirectResponse{
        $this->_unitOfWork->Clients()->save($request->all());
        Event::dispatch(new EmailEvent("teanbronylatino@gmail.com"));
        return redirect("/");
    }
    public function create() : View{
        $countries = $this->_unitOfWork->Countries()->listAll();
        return view("Clients.Client_create", compact("countries"));
    }
    public function update(int $id, ClientRequest $request) : RedirectResponse{
        $this->_unitOfWork->Clients()->update($id,
        [
            "name" => $request->name,
            "address" => $request->address,
            "phone" => $request->phone,
            "id_country" => $request["id_country"]
        ]
        );
        return redirect("/");
    }
    public function edit(int $id) : View{
        $client = $this->_unitOfWork->Clients()->getOne($id);
        $countries = $this->_unitOfWork->countries()->listAll();
        return view("Clients.Client_edit", compact("client", "countries"));
    }
    public function destroy(int $id) : RedirectResponse{
        $this->_unitOfWork->Clients()->delete($id);
        return redirect("/");
    }
}
