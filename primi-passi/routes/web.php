<?php

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
    return view('welcome');
});

Route::get('/corsi', function () {
    $corsi = [
        'header' => 'Corsi',
        'corsi' => [
            'Inglese',
            'Francese',
            'Spagnolo',
            'Tedesco',
            'Russo',
            'Giapponese',
            'Cinese',
            'Italiano per stranieri'
        ]
    ];
    return view('corsi', $corsi);
});

Route::get('/insegnanti', function () {
    $insegnanti = [
        'header' => 'Insegnanti',
        'insegnanti' => [
            'Jack Miller',
            'Michelle Renard',
            'Carla Romero Suarez',
            'Hans Becker',
            'Vladimir Medvedev',
            'Maya Kawaguchi',
            'Shin Zhang',
            'Massimo di Lorenzo'
        ]
    ];
    return view('insegnanti', $insegnanti);
});

Route::get('/locations', function () {
    $locations = [
        'header' => 'Locations',
        'locations' => [
            'Alba',
            'Lodi',
            'San Giminiano',
            'Viterbo',
            'Tivoli',
            'Pescara',
            'Termoli',
            'Molfetta'
        ]
    ];
    return view('locations', $locations);
});

Route::get('/formule', function () {
    $formule = [
        'header' => 'Formule',
        'formule' => [
            'Easy',
            'Smart',
            'Deluxe'
        ]
    ];
    return view('formule', $formule);
});

Route::get('/date', function () {
    $date = [
        'header' => 'Date',
        'date' => [
            'Maggio',
            'Giugno',
            'Settembre',
            'Ottobre'
        ]
    ];
    return view('date', $date);
});

Route::get('/dicono-di-noi', function () {
    $dicono = [
        'header' => 'Dicono di noi',
        'referrals' => [
            'La Repubblica',
            'L\'Espresso',
            'Wired',
            'Il Sole 24 Ore',
            'Marcopolo'
        ]
    ];
    return view('dicono', $dicono);
});

Route::get('/contatti', function () {
    $contatti = [
        'header' => 'Contattaci',
        'contatti' => [
            'Indirizzo' => 'Via Mazzini, 23 - 70056 Molfetta (BA)',
            'Telefono' => '+39 338 123 45 67',
            'Email' => 'info@scuoladilingue.com',
            'Sito' => 'www.scuoladilingue.com'
        ]
    ];
    return view('contatti', $contatti);
});

Route::get('/prenota-ora', function () {
    $prenota = [
        'header' => 'Prenota ora',
        'prenota' => [
            'url' => '../',
            'testo' => 'Clicca qui',
        ]
    ];
    return view('prenota', $prenota);
});
