<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('samaj-info', function () {
    return view('samajInfo');
})->name('samajInfo');
Route::get('samaj-info2', function () {
    return view('samajInfo2');
})->name('samajInfo2');
Route::get('samaj-info3', function () {
    return view('samajInfo3');
})->name('samajInfo3');

Route::get('team', function () {
    return view('team');
})->name('team');

Route::get('hodedar-shree', function () {
    return view('hodedarShree');
})->name('hodedarShree');

Route::get('karobari', function () {
    return view('karobari');
})->name('karobari');
Route::get('karobari2', function () {
    return view('karobari2');
})->name('karobari2');

Route::get('pratinidhi', function () {
    return view('pratinidhi1');
})->name('pratinidhi');
Route::get('pratinidhi2', function () {
    return view('pratinidhi2');
})->name('pratinidhi2');
Route::get('pratinidhi3', function () {
    return view('pratinidhi3');
})->name('pratinidhi3');
Route::get('pratinidhi4', function () {
    return view('pratinidhi4');
})->name('pratinidhi4');

Route::get('samajik', function () {
    return view('samajik');
})->name('samajik');
Route::get('samajik2', function () {
    return view('samajik2');
})->name('samajik2');

Route::get('download', function () {
    return view('download');
})->name('download');

Route::get('newregform', function (Request $request) {
    $count = DB::table('membermasters')->count();
    return view('newregform', compact('count'));
})->name('newregform');

Route::get('newregformGet', function (Request $request) {
    $count = DB::table('membermasters')->count();
    $data = DB::table('membermasters')
        ->select('member_id', 'name', 'city')
        ->where(function ($q) use ($request) {
            if ($request->find_by === 'mem_no') {
                $q->where('member_id', $request->find_value);
            } else if ($request->find_by === 'name') {
                $q->where('name', 'LIKE', '"%' . $request->find_value . '%"');
            } else if ($request->find_by === 'city') {
                $q->where('city', 'LIKE', '"%' . $request->find_value . '%"');
            } else if ($request->find_by === 'native') {
                $q->where('native_place', 'LIKE', '"%' . $request->find_value . '%"');
            }
        })
        ->paginate(20);
    return view('newregform', compact('data', 'count'));
})->name('newregformGet');

Route::get('view-member/{id}', function ($id) {
    if (empty($id)) {
        return redirect()->back();
    }
    $data = DB::table('membermasters')->where('member_id', $id)->first();
    return view('viewMember', compact('data'));
})->name('viewMember');

Route::get('death-member', function (Request $request) {
    $count = DB::table('membermasters')
        ->join('deathmasters', 'deathmasters.m_id', '=', 'membermasters.member_id')
        ->count();
    $data = DB::table('membermasters')
        ->join('deathmasters', 'deathmasters.m_id', '=', 'membermasters.member_id')
        ->select('membermasters.member_id', 'membermasters.name', 'membermasters.city', 'deathmasters.death_date', 'deathmasters.amount')
        ->where(function ($q) use ($request) {
            if (!empty($request->find_value)) {
                $q->where('membermasters.name', 'LIKE', '"%' . $request->find_value . '%"');
            }
        })
        ->paginate(20);
    return view('deathMember', compact('data', 'count'));
})->name('deathMember');

Route::get('matrimonial', function (Request $request) {
    $data = DB::table('metromonialusers')
        ->select('member_id', 'name', 'city', 'age')
        ->where(function ($q) use ($request) {
            $q->where('gender', $request->sex)
                ->whereBetween('age', [$request->age_from, $request->age_to]);
        })
        ->paginate(20);
    return view('matrimonial', compact('data'));
})->name('matrimonial');

Route::get('ebusinessadv', function () {
    return view('ebusinessadv');
})->name('ebusinessadv');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('job-available', function () {
    return view('jobAvailable');
})->name('jobAvailable');

Route::get('job-required', function () {
    return view('jobRequired');
})->name('jobRequired');

Route::get('photo-gallery', function () {
    return view('photoGallery');
})->name('photoGallery');
