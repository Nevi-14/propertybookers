<?php
use Illuminate\Http\Request;
use App\Models\SingleRowData;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\TaskManagerController;
use App\Http\Controllers\ChesterTrackerNotesController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\OnceHubController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\OnceHub;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PropertyTrackerNotesController;

use App\Http\Controllers\PropertyTrackerController;
Route::get('/', function () {
    try {
        DB::connection()->getPdo();
        $logo = SingleRowData::where('field_name','logo_file')->first();
        if($logo != null){
            $logo = $logo->field_value;
        }else{
            $logo = null;
        }
    } catch (\Exception $e) {
        $logo = null;
    }
    return view('welcome',compact('logo'));
});

Route::get('/refresh', function(){
    session()->put('refresh',true);
    return redirect()->back();
})->middleware('crm_counter');

Route::get('/lang', function(Request $request){
    if (! in_array($request->lang_code, config('constants.LOCALES'))) {
        abort(400);
    }
    App::setLocale($request->lang_code);
    session()->put('applocale', $request->lang_code);
    $minutes = 9999;
    Cookie::queue("applocale", $request->lang_code, $minutes);
    return redirect()->back();
});

Auth::routes([
    'register'=>false
]);


Route::get('services', 'HomePageController@services');

Route::get('about', 'HomePageController@about');

Route::get('rates', 'HomePageController@rates');

Route::get('contact', 'HomePageController@contact');



Route::group(['middleware'=>['auth']], function(){


    Route::get('/task/manager', [TaskManagerController::class, 'index'])->middleware(['can:view-manager']);
    Route::get('/task/manager/create', [TaskManagerController::class, 'create'])->middleware(['can:create-manager']);
    Route::post('/task/manager', [TaskManagerController::class, 'store'])->middleware(['can:create-manager']);
    Route::get('/task/manager/show/{lead}', [TaskManagerController::class, 'show'])->middleware(['can:view-manager']);
    Route::put('/task/manager/{lead}', [TaskManagerController::class, 'update'])->middleware(['can:update-manager']);
    Route::delete('/task/manager/destroy/{lead}', [TaskManagerController::class, 'destroy'])->middleware(['can:delete-manager']);



    // CHESTER 


    Route::get('/notes', [ChesterTrackerNotesController::class, 'index']);
    Route::get('/notes/create', [ChesterTrackerNotesController::class, 'create']);
    Route::post('/notes', [ChesterTrackerNotesController::class, 'store']);
    Route::get('/notes/lead/show/{chesterTrackerNotes}', [ChesterTrackerNotesController::class, 'show']);
    Route::put('/notes/lead/{chesterTrackerNotes}', [ChesterTrackerNotesController::class, 'update']);
    Route::delete('/notes/lead/destroy/{chesterTrackerNotes}', [ChesterTrackerNotesController::class, 'destroy']);


    Route::get('/team', [TeamController::class, 'index']);
    Route::get('/team/create', [TeamController::class, 'create']);
    Route::post('/team', [TeamController::class, 'store']);
    Route::get('/team/lead/show/{lead}', [TeamController::class, 'show']);
    Route::put('/team/lead/{lead}', [TeamController::class, 'update']);
    Route::delete('/team/lead/destroy/{lead}', [TeamController::class, 'destroy']);


    

    Route::get('/status', [StatusController::class, 'index']);
    Route::get('/status/create', [StatusController::class, 'create']);
    Route::post('/status', [StatusController::class, 'store']);
    Route::get('/status/lead/show/{lead}', [StatusController::class, 'show']);
    Route::put('/status/lead/{lead}', [StatusController::class, 'update']);
    Route::delete('/status/lead/destroy/{lead}', [StatusController::class, 'destroy']);


    Route::get('/state', [StateController::class, 'index']);
    Route::get('/state/create', [StateController::class, 'create']);
    Route::post('/state', [StateController::class, 'store']);
    Route::get('/state/lead/show/{lead}', [StateController::class, 'show']);
    Route::put('/state/lead/{lead}', [StateController::class, 'update']);
    Route::delete('/state/lead/destroy/{lead}', [StateController::class, 'destroy']);



    Route::get('/property/tracker', [PropertyTrackerController::class, 'index'])->name('tracker.index');
    Route::get('/property/tracker/create', [PropertyTrackerController::class, 'create']);
    Route::post('/property/tracker/sort', [PropertyTrackerController::class, 'sort']);
    Route::post('/property/tracker', [PropertyTrackerController::class, 'store']);
    Route::get('/property/tracker/show/{propertyTracker}', [PropertyTrackerController::class, 'show'])->name('chester.show');
    Route::put('/property/tracker/{propertyTracker}', [PropertyTrackerController::class, 'update'])->name('tracker.update');
    Route::delete('/property/tracker/destroy/{propertyTracker}', [PropertyTrackerController::class, 'destroy']);




    Route::get('/property/tracker/notes', [PropertyTrackerNotesController::class, 'index']);
    Route::get('/property/tracker/notes/create', [PropertyTrackerNotesController::class, 'create']);
    Route::post('/property/tracker/notes', [PropertyTrackerNotesController::class, 'store'])->name('tracker.notes');
    Route::get('/property/tracker/notes/show/{propertyTrackerNotes}', [PropertyTrackerNotesController::class, 'show'])->name('trakernotes.show');
    Route::put('/property/tracker/notes/{propertyTrackerNotes}', [PropertyTrackerNotesController::class, 'update']);
    Route::delete('/property/tracker/notes/destroy/{propertyTrackerNotes}', [PropertyTrackerNotesController::class, 'destroy']);


    Route::get('/appointments', [AppointmentController::class, 'index']);
    Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointment.create');
 //   Route::get('/appointments/show/{appointment}', [AppointmentController::class, 'show'])->name('trakernotes.show');
    Route::put('/appointments/{appointment}', [AppointmentController::class, 'update']);
    Route::delete('/appointments/destroy/{appointment}', [AppointmentController::class, 'destroy']);



});
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/oncehub', [OnceHubController::class, 'index'])->name('oncehub');

Route::post('file',[FileUploadController::class, 'store'])->name('upload.file');
Route::get('download_local',[FileUploadController::class, 'download_local']);

