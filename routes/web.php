use App\Http\Controllers\StudentController;

Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/view/{id}', [StudentController::class, 'view']);
Route::get('/students/edit/{id}', [StudentController::class, 'edit']);
Route::post('/students/update/{id}', [StudentController::class, 'update']);
Route::delete('/students/delete/{id}', [StudentController::class, 'destroy']);
