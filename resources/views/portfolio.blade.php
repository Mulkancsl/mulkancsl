@extends('layouts.master')
@section('title', 'Portfolio')

@section('content')

<section class="bagian-artikel-list">
    <div class="container mt-5">
        <div class="d-flex justify-content-center">
            <h2 class="h2-about mb-5">Portfolio</h2>
        </div>
        <div class="row">
            <?php for ($i = 0; $i < 5; $i++) : ?>
                <div class="col-md-6 my-3">
                    <div class="card-portfolio shadow-sm rounded-lg mb-3">
                        <a href="#" class="card-portfolio-title">Projects Title</a>
                        <p class="card-portfolio-parag">Detail info dari project</p>
                        <div class="card-portfolio-img">
                            <img src="https://i.pinimg.com/564x/74/73/c2/7473c27249e3c6827601d516a512bb87.jpg" class="card-img-bottom" alt="">
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>

@endsection