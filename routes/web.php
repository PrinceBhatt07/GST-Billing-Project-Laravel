<?php

use App\Http\Controllers\BillController;
use App\Http\Controllers\PartyController;
use App\Models\Party;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('party', PartyController::class)->names([
    'index' => 'party.index',
    'create' => 'party.add',
    'store' => 'party.store',
    'show' => 'party.show',
    'edit' => 'party.edit',
    'update' => 'party.update',
    'destroy' => 'party.destroy',
]);

Route::resource('bill', BillController::class)->names([
    'index' => 'bill.index',
    'create' => 'bill.add',
    'store' => 'bill.store',
    'show' => 'bill.show',
    'edit' => 'bill.edit',
    'update' => 'bill.update',
    'destroy' => 'bill.destroy',
]);

Route::get('/bill-print', [BillController::class, 'print'])->name('bill.print');