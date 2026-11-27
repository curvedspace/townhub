<?php

use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/plants', function () {
    return view('plants');
})->middleware(['auth', 'verified'])->name('plants');

Route::get('/organizations/create', [OrganizationController::class, 'create'])
    ->name('organizations.create');

Route::get('/orgs/{organization:id}', [OrganizationController::class, 'show'])
    ->name('organizations.show');

Route::get('/organizations', [OrganizationController::class, 'index']
)->middleware(['auth', 'verified'])->name('organizations.index');

// Route::post('/organizations/store', [OrganizationController::class, 'store'])
//     ->middleware(['auth', 'verified'])->name('organizations.store');   

Route::post('/organizations/store', function () {
    //dd(request()->all()); // Debugging: Dump the request data

    $data = request()->validate([
        'name' => 'required|string|max:255',
        'status' => 'required|string|max:255',
        'description' => 'nullable|string',
        'placard' => 'nullable|string',
        'website' => 'nullable|url|max:255',
        'email' => 'nullable|email|max:255'
    ]);

    $data['user_id'] = auth()->id(); // Associate the organization with the authenticated user

    //dd($data); // Debugging: Dump the validated data

    // Create a new organization using the validated data
    $organization = \App\Models\Organization::create($data);

    // Redirect to the organization's show page or any other desired page
    return redirect()->route('organizations.show', ['organization' => $organization->id]);  
})
    ->middleware(['auth', 'verified'])->name('organizations.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
