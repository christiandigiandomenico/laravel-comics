<div class="main-content">

    <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="DC Jumbotron">

    <div class="current-series">

        CURRENT SERIES

    </div>

    <div class="text-content">

        <div class="comic">
            <img src=" " :alt=" ">
            <h4> </h4>
        </div>

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