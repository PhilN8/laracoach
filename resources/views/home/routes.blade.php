<head>
    <title>{{$title ?? "EasyCoach KE"}}</title>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="{{asset('css/routes.css')}}">
    <link rel="stylesheet" href="{{asset('css/search.css')}}">
</head>
<x-layout>
    <div class="container">
        @include('partials/_search')
    </div>

    <section class="result">
        <div class="container result-container">
            @foreach ($routes as $route)
                <div class="result__div">
                    <p>{{$route->departure}}  - {{$route->destination}}</p>
                    <p class="result__cost">{{$route->cost}}</p>
                </div>
            @endforeach
        </div>
    </section>

    <section class="hero">
        <div class="hero-container container">
            <h1 class="hero__title">Routes</h1>
            <p class="hero__text">
                Here at EasyCoach, we value meeting customer needs as our highest priority.
                Due to increasing demands, we have expanded our services to all corners of the
                country so that our esteemed customers can easily access our services.

                <br>

                As such, we now cover the following cities and towns:
            </p>

        </div>
    </section>

    <section class="routes">
        <div class="routes-container container">
            <table class="routes__table">
                <tbody>
                    <tr>
                        <td>Awendo</td>
                        <td>Bondo</td>
                        <td>Bomet</td>
                        <td>Bumala</td>
                    </tr>
                    <tr>
                        <td>Bungoma</td>
                        <td>Busia</td>
                        <td>Eldoret</td>
                        <td>Kaimosi</td>
                    </tr>
                    <tr>
                        <td>Kakamega</td>
                        <td>Kampala</td>
                        <td>Kericho</td>
                        <td>Kisii</td>
                    </tr>
                    <tr>
                        <td>Kisumu</td>
                        <td>Kitale</td>
                        <td>Malaba</td>
                        <td>Maseno</td>
                    </tr>
                    <tr>
                        <td>Mbale</td>
                        <td>Migori</td>
                        <td>Moi's Bridge</td>
                        <td>Mumias</td>
                    </tr>
                    <tr>
                        <td>Nairobi</td>
                        <td>Nakuru</td>
                        <td>Narok</td>
                        <td>Rongo</td>
                    </tr>
                    <tr>
                        <td>Siaya</td>
                        <td>Sirare</td>
                        <td>Ugunja</td>
                        <td>Usenge</td>
                    </tr>
                    <tr>
                        <td>Webuye</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    

    <?php
    echo "<pre>";
        echo "</pre>";
    // print_r($routes);
    ?>
</x-layout>