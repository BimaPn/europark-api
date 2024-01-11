// <?php
//
// use App\Http\Controllers\QuizQuestionController;
// use App\Http\Controllers\CategoryController;
// use App\Http\Controllers\QuizController;
// use Illuminate\Support\Facades\Route;
//
// Route::group([
//     'middleware' => 'auth:api',
//     'prefix' => 'quizzes'
// ], function ($router) {
//     Route::get("/{quiz}/play",[QuizController::class,"index"]);
//     Route::post("/create",[QuizController::class,"store"]);
//     Route::post("/{quiz}/attempt/add",[QuizController::class,"storeAttempt"]);
// });
//
// Route::get("/categories/{category}/quizzes",[CategoryController::class,"getQuizzes"])->middleware("api");
//
// Route::post("/quizzes/{quiz}/update",[QuizController::class,"update"])->middleware("api");
// Route::get("/quizzes/{quiz}/get",[QuizController::class,"getQuiz"])->middleware("api");
// Route::get("/quizzes/{quiz}/questions",[QuizController::class,"getQuestions"])->middleware("api");
// Route::post("/quizzes/{quiz}/question/create",[QuizQuestionController::class,"store"])->middleware("api");
//
//
// Route::get("/questions/{quizQuestion}/get",[QuizQuestionController::class,"show"])->middleware("api");
// Route::put("/questions/{quizQuestion}/update",[QuizQuestionController::class,"update"])->middleware("api");
// Route::delete("/questions/{quizQuestion}/delete",[QuizQuestionController::class,"destroy"])->middleware("api");
