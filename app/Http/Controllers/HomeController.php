<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

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
    }

    public function singlePage() {

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
    }
}
