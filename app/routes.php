<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('information_source/dropdown','StudentsController@information_source_dropdown');
Route::get('intake_month/dropdown','StudentsController@intake_month_dropdown');
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
Route::get('checkSanAvailability','StudentsController@checkSanAvailability');
Route::get('/', 'UsersController@login');
Route::get('/login', 'UsersController@login');
Route::get('/privacy-policy', function(){
    return View::make('static/privacy');
});
Route::get('/terms-of-use', function(){
    return View::make('static/terms');
});

Route::post('/login', 'UsersController@authenticate');

Route::group(array('before' => 'members_auth'), function()
{
	
Route::get('/export', 'StudentsController@export');

Route::get('/logout', 'UsersController@logout');
    Route::get('/students/{san}/more','StudentsController@more');
    Route::get('/students/verify','StudentsController@verify');
    Route::get('/students/validate','StudentsController@validate');
    Route::get('/students/{san}/amendment','StudentsController@amendment');
    Route::get('/students/{san}/reject','StudentsController@reject');
    Route::get('/students/{san}/v','StudentsController@new_validate');
    Route::post('/students/validate','StudentsController@new_validate_post');
    Route::get('/students/{san}/ve','StudentsController@new_verify');
    Route::post('/students/verify','StudentsController@new_verify_post');

    Route::get('/modules/marks-input/create','ModulesController@markInputCreate');
    Route::post('/modules/marks-input/create','ModulesController@saveMarkInputs');
    Route::get('modules/marks-input/create/module/dropdown','ModulesController@getModulesByLsStudentNumber');
    Route::get('modules/marks-input/create/elements/dropdown','ModulesController@getElementsByModuleID');
    Route::get('modules/marks-input/get_student_marks','ModulesController@getStudentMarks');

    Route::get('/modules/marks-input','ModulesController@markInputIndex');
    Route::get('/modules/marks-input/{ls_student_number}','ModulesController@markInputShow');
    Route::get('students_for_marks_IM_A_01_glanced','StudentMarksIMA01GlancedsController@students_for_marks_IM_A_01_glanced');
    Route::post('save_marks_for_IM_A_01_glanced','StudentMarksIMA01GlancedsController@save_marks_for_IM_A_01_glanced');
    Route::get('save_marks_for_IM_A_01_glanced_excel_export','StudentMarksIMA01GlancedsController@excel_export');
   

    Route::get('save_marks_for_IM_A_01_glanced_word', 'StudentMarksIMA01GlancedsController@to_word');
 Route::resource('student-marks-IM-A-01-glanced', 'StudentMarksIMA01GlancedsController');
Route::resource('students','StudentsController');
Route::resource('users','UsersController');
    Route::resource('modules','ModulesController');


});

Route::get('/test', function(){
    $results =  DB::table('students')->select('san')->get();
   // return $results;
    $rr = array();
    foreach($results as $result){
        $array[] = $result->san;
    }
    return $array;
});