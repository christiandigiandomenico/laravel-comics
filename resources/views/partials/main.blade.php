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
            <li v-for="merchandiseLinks in merchandise">
                <img src=" " alt="Merchandise Logo">
                
            </li>
        </ul>

    </div>

</div>