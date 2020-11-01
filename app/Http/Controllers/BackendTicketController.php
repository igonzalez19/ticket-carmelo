<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class BackendTicketController extends Controller
{
    
    private $tickets = [
        'tickets' => [
            1 => ['id' => 1, 'name' => 'brunch',    'price' => 12.2, 'date' => '2020/10/18', 'time' => '09:00'],
            2 => ['id' => 2, 'name' => 'lunch',     'price' => 22.2, 'date' => '2020/10/18', 'time' => '14:00'],
            3 => ['id' => 3, 'name' => 'dinner',    'price' => 18.2, 'date' => '2020/10/18', 'time' => '19:00'],
            4 => ['id' => 4, 'name' => 'breakfast', 'price' => 7.2,  'date' => '2020/10/18', 'time' => '10:00'],
        ]
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $array= [
            'openTicket' => 'menu-open',
            'viewOpenTicket' => 'active'
            ];
        
        return view('backend.ticket.index', $array, $this->tickets);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $array= [
            'openTicket' => 'menu-open',
            'viewCreateTicket' => 'active'
            ];
            
        return View('backend.ticket.create', $array);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $price = $request->get('precio');
        
        if($price > 0){
            
            $response = ['op' => 'store', 'result' => 1];
            return redirect('backend/ticket')->with($response);
        } else {
            return back()->withInput(); //flash session   se recupera la informacion escrita del formulario
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show($numeroticket)
    {
        if(isset($this->tickets['tickets'][$numeroticket])){
            $datos = $this->tickets['tickets'][$numeroticket];
            return view('backend.ticket.show', $datos);    
        }
        View::share('origen', 'viene de show debido a un error en el número de tickets');
        return $this->index();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit($idTicket)
    {
        $datos = $this->tickets['tickets'][$idTicket];
        return view('backend.ticket.edit', $datos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        $response = ['op' => 'delete', 'result' => 1];
        //redirect a una ruta
        //with -> datos de la sesion de tipo flash (de un solo uso)
        return redirect('ticket')->with($response);
    }
}
