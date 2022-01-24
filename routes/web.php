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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function () {

    $arrComics = [

        [
            'image' => 'https://media.gettyimages.com/vectors/flying-super-hero-vector-id166053583?s=612x612',
            'title' => 'Superman'
        ],

        [
            'image' => 'https://media.gettyimages.com/vectors/flying-super-hero-vector-id166053583?s=612x612',
            'title' => 'Spiderman'
        ],

        [
            'image' => 'https://media.gettyimages.com/vectors/flying-super-hero-vector-id166053583?s=612x612',
            'title' => 'Batman'
        ],

        [
            'image' => 'https://media.gettyimages.com/vectors/flying-super-hero-vector-id166053583?s=612x612',
            'title' => 'Joker'
        ],

        [
            'image' => 'https://media.gettyimages.com/vectors/flying-super-hero-vector-id166053583?s=612x612',
            'title' => 'Batgirl'
        ],

        [
            'image' => 'https://media.gettyimages.com/vectors/flying-super-hero-vector-id166053583?s=612x612',
            'title' => 'Aquaman'
        ],

        [
            'image' => 'https://media.gettyimages.com/vectors/flying-super-hero-vector-id166053583?s=612x612',
            'title' => 'Wolverine'
        ],

        [
            'image' => 'https://media.gettyimages.com/vectors/flying-super-hero-vector-id166053583?s=612x612',
            'title' => 'Capitan America'
        ],

        [
            'image' => 'https://media.gettyimages.com/vectors/flying-super-hero-vector-id166053583?s=612x612',
            'title' => 'Hulk'
        ],

        [
            'image' => 'https://media.gettyimages.com/vectors/flying-super-hero-vector-id166053583?s=612x612',
            'title' => 'Falcon'
        ],

        [
            'image' => 'https://media.gettyimages.com/vectors/flying-super-hero-vector-id166053583?s=612x612',
            'title' => 'Thor'
        ],

        [
            'image' => 'https://media.gettyimages.com/vectors/flying-super-hero-vector-id166053583?s=612x612',
            'title' => 'Avengers'
        ],

    ];

    $arrMerch = [

        [
            'image' => 'storage/img/buy-comics-digital-comics.png',
            'title' => 'Digital comics'
        ],

        [
            'image' => 'storage/img/buy-comics-merchandise.png',
            'title' => 'DC merchandise'
        ],

        [
            'image' => 'storage/img/buy-comics-shop-locator.png',
            'title' => 'Comic shop locator'
        ],

        [
            'image' => 'storage/img/buy-comics-subscriptions.png',
            'title' => 'Subscription'
        ],

        [
            'image' => 'storage/img/buy-dc-power-visa.svg',
            'title' => 'Dc power visa'
        ]
    ];

    return view('view.home', compact('arrComics', 'arrMerch'));
}) -> name('home');

Route::get('comic-page', function () {

    $merchObjects = [
        [
            'image' => '',
            'title' => ''
        ],

        [
            'image' => 'storage/img/buy-comics-digital-comics.png',
            'title' => 'Digital comics'
        ],

        [
            'image' => 'storage/img/buy-comics-subscriptions.png',
            'title' => 'Shop DC'
        ],

        [
            'image' => 'storage/img/buy-comics-shop-locator.png',
            'title' => 'Comic Shop Locator'
        ],

        [
            'image' => 'storage/img/buy-comics-merchandise.png',
            'title' => 'Digital comics'
        ],

        [
            'image' => '',
            'title' => ''
        ]
    ];


    return view('view.comic-page', compact('merchObjects'));
}) -> name('comic-page');
