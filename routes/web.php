<?php

use App\Http\Controllers\{
    ProfileController,PermissionController,LeadController,UserManagementController,RoleController,
    AdmittionController,CourceController, curriculamController, InvoiceController,
    QuestionController,QuizController,StripePaymentController,
};
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

   Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('lead', LeadController::class);
    Route::resource('user', UserManagementController::class);
    Route::resource('role', RoleController::class);
    Route::resource('permission', PermissionController::class);
    Route::resource('cource', CourceController::class);
    Route::resource('class', curriculamController::class);
    Route::get('/admittion', [AdmittionController::class, 'admittion'])->name('admittion');
    Route::get('/invoice', [InvoiceController::class, 'invoice_index'])->name('invoice_index');
    Route::resource('quize', QuizController::class);
    Route::resource('question', QuestionController::class );
    Route::get('/invoice/{id}', [InvoiceController::class, 'show'])->name('invoice-show');
    Route::get('/quiz-show/{id}', [QuizController::class, 'quizShow'])->name('quiz-show');
    Route::get('/invoises/{id}', [InvoiceController::class, 'invoice_pdf'])->name('invoice-pdf');
    Route::post('/stripe', [StripePaymentController::class, 'stripe_payment'])->name('stripe');

});





require __DIR__.'/auth.php';
