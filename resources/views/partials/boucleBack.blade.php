<section>
    <div class="container">
        <div class="row">
            @foreach ($back as $pomme)
            <div class="card m-4" style="width: 18rem;">
                <img class="imgCadre" style="height: 18rem;" src='{{$pomme -> src}}' class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$pomme -> nom}}</h5>
                    <h5 class="card-title">{{$pomme -> fonction}}</h5>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>