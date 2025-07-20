<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Comment;
use App\Models\Employee;
class TicketController extends Controller
{
   public function store(Request $request)
{
    $validated = $request->validate([
        'careerNumber' => 'required|string|max:255',
        'phone' => 'required|string|max:255',
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'priority' => 'required|in:Low,Medium,High',
    ]);

   
 $validated['employee_id'] = auth()->user()->id; 
    Ticket::create($validated);

    return redirect('/createTicket')->with('success', 'Ticket created successfully!');
}

public function index()
{
    $tickets = Ticket::where('employee_id', auth()->user()->id)->get();
    return view('AllTicket', compact('tickets')); 
}

public function show($id)
{
    $ticket = Ticket::with(['employee', 'comments.employee'])->findOrFail($id);
    return view('TicketView', compact('ticket'));
}


public function showWithComments($id)
{
    
    $ticket = Ticket::with('comments')->findOrFail($id);

    
    if ($ticket->employee_id != auth()->id()) {
        abort(403, "You don't have permission to view this ticket.");
    }

    return view('Addcom', compact('ticket'));
}

public function addComment(Request $request, $id)
{
    $request->validate([
        'comment' => 'required|string|max:1000',
    ]);

    $ticket = Ticket::findOrFail($id);

    if ($ticket->employee_id != auth()->id()) {
        abort(403, "You don't have permission to comment on this ticket.");
    }

    $comment = new Comment();
    $comment->ticket_id = $ticket->id;
    $comment->employee_id = auth()->id();
    $comment->content = $request->comment;
    $comment->save();

    return redirect()->route('ticket.comments.show', $ticket->id)->with('success', 'Comment added successfully!');
}

public function adminDashboard()
{
    $tickets = Ticket::with('employee')->get(); 

    return view('index1', compact('tickets'));
}

public function showAssignForm($id)
{
    $ticket = Ticket::findOrFail($id);
    $Tick = Employee::where('role', 'Tick')->get(); 

    return view('Assign', compact('ticket', 'Tick'));
}

public function assignToUser(Request $request)
{
    $request->validate([
        'user_id' => 'required|exists:employees,id',
        'ticket_id' => 'required|exists:tickets,id',
    ]);

    $ticket = Ticket::findOrFail($request->ticket_id);
    $ticket->assigned_to = $request->user_id; 
    $ticket->status = 'assigned'; // تحديث الحالة
    $ticket->save();

   return back()->with('success', 'تم تعيين التذكرة بنجاح.');

}

public function showAssignedTickets()
{
    $employeeId = auth()->user()->id;
    $tickets = Ticket::where('employee_id', $employeeId)->get();
    return view('AssignTick', compact('tickets'));
}


}
