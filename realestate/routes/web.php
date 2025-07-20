<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CommentController;

Route::post('/comments/store', [CommentController::class, 'store'])->name('comments.store');


Route::get('/login1', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login1', [LoginController::class, 'login'])->name('login1');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');
Route::get('/userinfo', [EmployeeController::class, 'index']);
Route::get('/Edituser/{id}', [EmployeeController::class, 'edit'])->name('Edituser');
Route::put('/Edituser/{id}', [EmployeeController::class, 'update']);
Route::delete('/Deleteuser/{id}', [EmployeeController::class, 'destroy'])->name('employees.destroy');
Route::get('/Assign', [EmployeeController::class, 'showAssignForm']);


Route::get('/AssignTick', [TicketController::class, 'showAssignedTickets'])->middleware('auth');
Route::post('/assign-ticket-to-user', [TicketController::class, 'assignToUser'])->name('assign.ticket.to.user');
Route::get('/TicketView/{id}', [TicketController::class, 'show'])->name('Ticket.View');
Route::get('/Assign/{id}', [TicketController::class, 'showAssignForm']);
Route::get('/index1', [TicketController::class, 'adminDashboard']);
Route::get('/AllTicket', [TicketController::class, 'index'])->middleware('auth');
Route::post('/createTicket', [TicketController::class, 'store'])->name('createTicket');
Route::get('/Addcom/{id}', [TicketController::class, 'showWithComments'])->middleware('auth')->name('ticket.comments.show');
Route::post('/Addcom/{id}/comment', [TicketController::class, 'addComment'])->middleware('auth')->name('ticket.comments.add');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/ViewAssignT', function () {
    return view('ViewAssignT');
});
Route::get('/Mainstate', function () {
    return view('Mainstate');
});
Route::get('/maint', function () {
    return view('maint');
});
Route::get('/viewonly', function () {
    return view('viewonly');
});
Route::get('/AllmainUser', function () {
    return view('AllmainUser');
});
Route::get('/Form', function () {
    return view('Form');
});
Route::get('/viewMaint', function () {
    return view('viewMaint');
});
Route::get('/AllMaintenance', function () {
    return view('AllMaintenance');
});
Route::get('/Addcom', function () {
    return view('Addcom');
});
Route::get('/contpage', function () {
    return view('contpage');
});
Route::get('/Maintenance', function () {
    return view('Maintenance');
});
Route::get('/createTicket', function () {
    return view('createTicket');
});

Route::get('/login1', function () {
    return view('login1');
});
Route::get('/Adduser', function () {
    return view('Adduser');
});

Route::get('/', function () {
    return view('welcome');
});
