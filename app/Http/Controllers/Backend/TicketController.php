<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Ticket;
use Illuminate\Validation\Rules\Enum;

class TicketController extends Controller
{
    public function IndexTicket()
    {
        $tickets = Ticket::latest()->get();
        return view('backend.tickets.ticket',compact('tickets'));
    }

    public function CreateTicket()
    {
        return view('backend.tickets.add_ticket');
    }

    public function StoreTicket(Request $request)
    {
        $request->validate([
            'status' => 'required',
            'service_type' => 'required',
            'requester' => 'required',          
            'description' => 'required',
            'priority' => 'required'
        ]);

        $notification = array(
            'message' => 'Ticket Created Successfully',
            'alert-type' => 'success'
        );

        Ticket::create($request->all());
        return redirect()->route('index.ticket')->with($notification);
        
    }

    public function show($id)
    {
        $ticket = Ticket::findOrFail($id); //Find the ticket by id
        return view('show.ticket', compact('ticket'));
    }

    public function DestroyTicket(Ticket $ticket)
    {
        $ticket->delete();
        return redirect()->route('index.ticket')->with('success', 'Ticket deleted successfully.');
    }

}
