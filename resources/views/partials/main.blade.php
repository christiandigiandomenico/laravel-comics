<div class="main-content">

    <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="DC Jumbotron">

    <div class="current-series">

        CURRENT SERIES

    </div>

    <div class="text-content">

        @foreach($comics as $comicItem)
        <div class="comic">
            <img src="{{$comicItem['thumb']}} " :alt="{{$comicItem['thumb']}}">
            <h4>{{$comicItem['series']}}</h4>
        </div>
        @endforeach

    </div>

    <div class="learn-more">
        <button>Load More</button>
    </div>

</div>

<div class="main-content-merchandise">

    <div class="merchandise-content">

        <ul>
            <li>
                <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="Merchandise Logo">
                <span>DIGITAL COMICS</span> 
            </li>
            <li>
                <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="Merchandise Logo">
                <span>DC MERDCHANDISE</span> 
            </li>
            <li>
                <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="Merchandise Logo">
                <span>SUBSCRIPTION</span> 
            </li>
            <li>
                <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="Merchandise Logo">
                <span>COMIC SHOP LOCATOR</span> 
            </li>
            <li>
                <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="Merchandise Logo">
                <span>DC POWER VISA</span> 
            </li>
        </ul>

    </div>

</div>