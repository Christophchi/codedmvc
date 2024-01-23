<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| views are loaded by the PlatesTemplate Engine within a group ,
| simply add your url endpoint in the switch statement and handle 
| the cases based on actions needed Now create something great!
|
*/

switch ($endpoint) {
    case 'about':
        echo $templates->render('about', ['name' => 'Jonathan']);
        break;

    default:
        //Default endpoint handling
        echo $templates->render('index', ['name' => 'Jonathan']);
        break;
}

