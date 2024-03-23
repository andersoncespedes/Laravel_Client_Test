<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Interface\IUnitOfWork;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Event;
use App\Events\EmailEvent;
use App\Http\Requests\ClientRequest;

/**
 * Controller of Clients
 *
 */
class ClientController extends Controller
{
    private IUnitOfWork $_unitOfWork;
    public function __construct(IUnitOfWork $unitOfWork)
    {
        $this->_unitOfWork = $unitOfWork;
    }
    /**
     * Return to the main view of the application with the list of clients
     *
     *  @return Illuminate\View\View
     */
    public function show(): View
    {
        $clients = $this->_unitOfWork->Clients()->getWithCountries();
        return view("Clients.Client_show", compact("clients"));
    }
    /**
     * Save the values of a new Client, send a mail and redirect to the main view
     *
     *  @param App\Http\Requests\ClientRequest $request
     *
     *  @return Illuminate\Http\RedirectResponse
     */
    public function store(ClientRequest $request): RedirectResponse
    {
        $this->_unitOfWork->Clients()->save([
            "name" => $request->name,
            "address" => $request->address,
            "phone" => $request->phone,
            "id_country" => $request["id_country"]
        ]);
        Event::dispatch(new EmailEvent($request->email));
        return redirect("/");
    }
    /**
     * show the view to create a new client
     *
     *  @return Illuminate\View\View
     */
    public function create(): View
    {
        $countries = $this->_unitOfWork->Countries()->listAll();
        return view("Clients.Client_create", compact("countries"));
    }
    /**
     * update an existing client with new data and redirect to the main view
     *  @param int $id
     *  @param App\Http\Requests\ClientRequest $request
     *  @return Illuminate\Http\RedirectResponse
     */
    public function update(int $id, ClientRequest $request): RedirectResponse
    {
        $this->_unitOfWork->Clients()->update(
            $id,
            [
                "name" => $request->name,
                "address" => $request->address,
                "phone" => $request->phone,
                "id_country" => $request["id_country"]
            ]
        );
        return redirect("/");
    }
    /**
     * show the view where the selected client will be updated
     *  @param int $id
     *  @return Illuminate\View\View
     */
    public function edit(int $id): View
    {
        $client = $this->_unitOfWork->Clients()->getOne($id);
        $countries = $this->_unitOfWork->countries()->listAll();
        return view("Clients.Client_edit", compact("client", "countries"));
    }
    /**
     *  Delete, if exists, a client from the database by id
     *  @param int $id
     *  @return Illuminate\Http\RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $this->_unitOfWork->Clients()->delete($id);
        return redirect("/");
    }
}
