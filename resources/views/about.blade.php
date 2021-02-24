@extends('layouts.master')
@section('title', 'About Me')

@section('content')
<div class="d-flex justify-content-center">
    <img class="ds-collapse mt-5 px-4 pt-5" src="{{ asset('images/mulkan.png') }}" alt="" width="100%">
</div>
<section class="bagian-intro">
    <div class="intro-bagian-kiri">
        <h2 class="font-weight-bold text-left font-color-292929">@mulkan</h2>
        <hr>
        <p class="lh-2 font-weight-500 font-color-5f5f5f">Hello my name is Mulkan, I am a student of Sharia Economics at Ar-Raniry State University. Nowadays I spend most of my time studying, trying to do business with my friends and hanging out with friends. I became interested in startups when I entered college. Actually I am currently working on my side project and it will be launching soon. Oh, by the way, I started learning programming from the first time I entered college even though this was not my background but I loved the magic and the things that appeared on my computer screen at the time. So, I decided to explore the world of computer science by myself, even though the knowledge I obtained was self-taught, I was very confident in the results I got.</p>
    </div>
    <div class="intro-bagian-kanan hp-collapse ">
        <div class="d-flex flex-column justify-content-center">
            <div class="d-flex justify-content-center">
                <img class="d-flex" src="{{ asset('images/mulkan.png') }}" alt="" width="200">
            </div>
            <!-- <div class="d-flex justify-content-center">
                <a href="https://www.instagram.com/mulkan_csl/" class="mx-3 my-4"><i class="icon fab fa-instagram"></i></a>
                <a href="https://twitter.com/MulkanCsl" class="mx-3 my-4"><i class="icon fab fa-twitter"></i></a>
            </div> -->
        </div>
    </div>
</section>

@endsection