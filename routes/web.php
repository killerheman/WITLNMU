<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



//Home Route
Route::get('/', [HomeController::class, 'index'])->name('index');

//About Menu Routes
Route::get('/APJAKWIT-at-a-glance', [HomeController::class, 'witGlance'])->name('witGlance');
Route::get('/About-LNMU', [HomeController::class, 'aboutLnmu'])->name('aboutLnmu');
Route::get('/History', [HomeController::class, 'history'])->name('history');
Route::get('/Vision-and-Mission', [HomeController::class, 'visionMission'])->name('visionMission');

//Governance Menu Routes
Route::get('/Managing-Council', [HomeController::class, 'managingCouncil'])->name('managingCouncil');
Route::get('/Vice-Chancellor-Message', [HomeController::class, 'vcMessage'])->name('vcMessage');
Route::get('/Director-Desk', [HomeController::class, 'directorDesk'])->name('directorDesk');
Route::get('/Committees', [HomeController::class, 'committees'])->name('committees');

//Approval Menu Routes
Route::get('/AICTE', [HomeController::class, 'aicte'])->name('aicte');
Route::get('/DST-Bihar', [HomeController::class, 'dstBihar'])->name('dstBihar');
Route::get('/Higher-Education', [HomeController::class, 'higherEducation'])->name('higherEducation');

//Faculty Menu Route
Route::get('/Faculty', [HomeController::class, 'faculty'])->name('faculty');

//Admission Menu Routes
Route::get('/Academic-Programmes', [HomeController::class, 'academicProgrammes'])->name('academicProgrammes');
Route::get('/Fee-Structure', [HomeController::class, 'feeStructure'])->name('feeStructure');
Route::get('/Reservation', [HomeController::class, 'reservation'])->name('reservation');

//Alumni Menu Routes
Route::get('/Alumni-List', [HomeController::class, 'alumniList'])->name('alumniList');
Route::get('/Alumni-Message', [HomeController::class, 'alumniMessage'])->name('alumniMessage');

//Facilities Menu Routes
Route::get('/Hostels', [HomeController::class, 'hostel'])->name('hostel');
Route::get('/National-Knowledge-Network', [HomeController::class, 'nationalKnowledgeNetwork'])->name('nationalKnowledgeNetwork');
Route::get('/Free-WiFi', [HomeController::class, 'freeWifi'])->name('freeWifi');
Route::get('/Student-Credit-Card', [HomeController::class, 'studentCreditCard'])->name('studentCreditCard');

//Important Menu Routes
Route::get('/Mandatory-Disclosure', [HomeController::class, 'mandatoryDisclosure'])->name('mandatoryDisclosure');
Route::get('/Training-and-Placement-Cell', [HomeController::class, 'trainingPlacementCell'])->name('trainingPlacementCell');
