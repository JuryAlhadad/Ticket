<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class EmployeeController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email',
            'password' => 'required|string|min:6|confirmed',
            'role' => 'required|string',
        ]);
     $validated['password'] = Hash::make($validated['password']);

    Employee::create($validated);
    return Redirect()->back()->with('success','Add success');
        
    }
    public function index()
{
    $employees = Employee::all();
    return view('userinfo', compact('employees'));
}
public function edit($id)
{
    $employee = Employee::findOrFail($id);
    return view('edituser', compact('employee'));
}
public function update(Request $request, $id)
{
  $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email',
          'role' => 'nullable|string|in:Admin,User,Tick',
        'password' => 'nullable|string|min:6',
    ]);
    $employee = Employee::findOrFail($id);

    $employee->first_name = $request->input('first_name');
    $employee->last_name = $request->input('last_name');
    $employee->email = $request->input('email');
   if ($request->filled('role')) {
        $employee->role = $request->input('role');
    }

    if ($request->filled('password')) {
        $employee->password = Hash::make($request->input('password'));
    }

    $employee->save();

    return redirect()->route('Edituser', ['id' => $id])
                     ->with('success', 'تم تحديث البيانات بنجاح');
     
}
public function showAssignForm()
{
    $tickUsers = Employee::where('role', 'Tick')->get();
    return view('Assign', ['Tick' => $tickUsers]);
}
public function destroy($id)
{
    $employee = Employee::findOrFail($id);
    $employee->delete();

    return redirect('/userinfo')->with('success', 'User deleted successfully.');
}


}
