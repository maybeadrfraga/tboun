<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\TicketResponse;
use Illuminate\Http\Request;

class TicketResponseController extends Controller
{
    public function store(Request $request, Ticket $ticket)
    {
        $request->validate([
            'response' => 'required|string',
        ]);

        TicketResponse::create([
            'ticket_id' => $ticket->id,
            'user_id' => auth()->id(),
            'response' => $request->response,
        ]);

        return redirect()->route('tickets.show', $ticket);
    }
}
