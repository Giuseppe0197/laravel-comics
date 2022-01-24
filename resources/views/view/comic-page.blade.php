@extends('layout.main-layout')

@section('content')

<div class="blue">

    <img src="https://media.gettyimages.com/vectors/flying-super-hero-vector-id166053583?s=612x612" alt="">
</div>

<div class="info">

    <div class="container-info">

        <div class="comic-description">

            <h2>Action Comics #1000: the deluxe edition</h2>

            <div class="green">

                <div class="green-one">
                    
                    <div class="price">

                        <span id="us-price">U.S. Price</span>

                        <span id="price-num">$19.99</span>

                    </div>

                    <div class="availability">
                        <h4>Available</h4>
                    </div>

                </div>

                <div class="green-two">

                    <h4>check availability</h4>

                </div>

            </div>

            <p>The celebration of 1,000 isuues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman's new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all - the Superman stories Action Comics #1 and 2 from 1938!</p>

        </div>

        <div class="advertisement">
            <h4>advertisement</h4>

            <div class="image-ad">
                <h2>unleash heroic rewards</h2>
                <button class="apply">Apply now</button>
            </div>
        </div>
    </div>
    
</div>

<div class="description-comic">

    <div class="container-description">

        <div class="talent">

            <h2>Talent</h2>

            <div class="artby">

                <span>Art by:</span>

                <p>Jos&egrave; Luis Garc&igrave;-L&ograve;, Clay Mann, Rafael Albuquerque, Patrick Gleason, Dan Jurgens, Joe Shuster, Neal Adams, Curt Swan, John Cassaday, Olivier Coipel, Jim Lee</p>
            </div>

            <div class="writtenby">

                <span>Written by:</span>

                <p>Brad Meltzer, Tom King, Scott Snyder, Geoff Johns, Brian Michael Bendis, Paul Dini, Louise Simonson, Richard Donner, Marv Wolfman, Peter J. Tomasi, Dan Jurgens, Jerry Siegel, Paul Levitz</p>
            </div>

        </div>

        <div class="specs">

            <h2>Specs</h2>

            <div class="series-action">

                <p id="series">Series: </p>

                <p id="action-comics">Action Comics</p>

                <div></div>
            </div>

            <div class="us-price">

                <p id="price-us">U.S. Price:</p>

                <p id="action-comics">$19.99</p>

                <div></div>
            </div>

            <div class="on-sale">

                <p id="sale">On Sale Date:</p>

                <p id="date-sale">Oct 02 2018</p>

                <div></div>
            </div>

        </div>

    </div>

    <div class="merch-page">

        @foreach ($merchObjects as $object)
            
        <div class="merch-objects">

            <span class="merch-span">{{$object['title']}}</span>

            <img src="{{$object['image']}}" alt="">

        </div>

        @endforeach
    </div>
    
</div>
    
@endsection