<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Ticket;

class TicketController extends Controller
{
    public function ServiceTicket()
    {
        $types = Ticket::latest()->get();
        return view('backend.tickets.ticket', compact('types'));
    }

    public function AddTicket()
    {
        return view('backend.tickets.add_ticket');
    }
}
