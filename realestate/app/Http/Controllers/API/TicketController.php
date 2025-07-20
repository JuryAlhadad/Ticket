<?php
namespace App\Http\Controllers\API;

use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TicketController extends Controller
{
    public function index()
    {
        return Ticket::with(['creator', 'assigned'])->get();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required|exists:users,id',
            'title' => 'required|string',
        ]);

        return Ticket::create($data);
    }

    public function show($id)
    {
        return Ticket::with(['creator', 'assigned'])->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $ticket = Ticket::findOrFail($id);

        $ticket->update($request->only('title', 'status', 'assigned_to'));

        return response()->json($ticket);
    }

    public function destroy($id)
    {
        Ticket::destroy($id);
        return response()->json(['message' => 'Deleted successfully']);
    }
}
