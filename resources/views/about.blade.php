@extends('layouts.master')
@section('title', 'About Me')

@section('content')
<!-- <div class="d-flex justify-content-center">
    <img class="ds-collapse mt-5 px-4 pt-5" src="{{ asset('images/mulkan.png') }}" alt="" width="100%">
</div> -->
<div style="height: 100px;"></div>

<!-- Desktop -->
<div class="d-none d-md-block container mt-5">
    <div class="row justify-content-center align-item-center">
        <div class="col-md-6">
            <h1 style="font-size: 100px; line-height: 100px; font-weight: 600;">My <br> Story:</h1>
            <div class="pl-5 mt-5" style="font-size: 18px;">
                <p>Hello my name is Mulkan, I am a student of Sharia Economics at Ar-Raniry State University. Nowadays I spend most of my time studying, trying to do business with my friends and hanging out with friends. I became interested in startups when I entered college. Actually I am currently working on my side project and it will be launching soon. Oh, by the way, I started learning programming from the first time I entered college even though this was not my background but I loved the magic and the things that appeared on my computer screen at the time. So, I decided to explore the world of computer science by myself, even though the knowledge I obtained was self-taught, I was very confident in the results I got.</p>
            </div>
        </div>
        <div class="col-md-6 mr-auto mb-5 mt-5">
            <img class="d-flex ml-auto rounded-lg" src="{{ asset('images/mulkan-profil.png') }}" alt="" width="400">
        </div>
        <div class="col-md-8 row justify-content-center align-items-center mb-5">
            <div class="card bg-dark" style="width: 75%;">
                <div class="card-body text-light">
                    <h1>Expertise</h1>  
                    <ul type="disc" style="font-size: 24px;">
                        <li>Javascript</li>
                        <li>PHP Laravel & Codeigniter</li>
                        <li>React Native</li>
                        <li>Vue.Js</li>
                        <li>HTML</li>
                        <li>CSS & Bootstrap</li>
                        <li>MySql</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-2">
        </div>
    </div>
</div>
<!-- Mobile -->
<div class="d-sm-block d-md-none container mt-3">
    <div class="row justify-content-center align-item-center">
        <div class="col-md-6">
            <h1 style="font-size: 100px; line-height: 100px; font-weight: 600;">My <br> Story:</h1>
            <div class="mt-5" style="font-size: 18px;">
                <p>Hello my name is Mulkan, I am a student of Sharia Economics at Ar-Raniry State University. Nowadays I spend most of my time studying, trying to do business with my friends and hanging out with friends. I became interested in startups when I entered college. Actually I am currently working on my side project and it will be launching soon. Oh, by the way, I started learning programming from the first time I entered college even though this was not my background but I loved the magic and the things that appeared on my computer screen at the time. So, I decided to explore the world of computer science by myself, even though the knowledge I obtained was self-taught, I was very confident in the results I got.</p>
            </div>
        </div>
        <div class="col-md-6 mr-auto mb-5 mt-5 pl-5 pr-5">
            <img class="d-flex rounded-lg" src="{{ asset('images/mulkan-profil-sm.png') }}" alt="" width="100%">
        </div>
        <div class="col-md-8 row justify-content-center align-items-center mb-5">
            <div class="card bg-dark" style="width: 75%;">
                <div class="card-body text-light">
                    <h1>Expertise</h1>  
                    <ul type="disc" style="font-size: 20px;">
                        <li>Javascript</li>
                        <li>PHP Laravel & Codeigniter</li>
                        <li>React Native</li>
                        <li>Vue.Js</li>
                        <li>HTML</li>
                        <li>CSS & Bootstrap</li>
                        <li>MySql</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-2">
        </div>
    </div>
</div>

<!-- <section class="bagian-intro mt-5"> -->
    <!-- <div class="intro-bagian-kiri">
        <h2 class="font-weight-bold text-left font-color-292929">@mulkan</h2>
        <hr>
        <p class="lh-2 font-weight-500 font-color-5f5f5f">Hello my name is Mulkan, I am a student of Sharia Economics at Ar-Raniry State University. Nowadays I spend most of my time studying, trying to do business with my friends and hanging out with friends. I became interested in startups when I entered college. Actually I am currently working on my side project and it will be launching soon. Oh, by the way, I started learning programming from the first time I entered college even though this was not my background but I loved the magic and the things that appeared on my computer screen at the time. So, I decided to explore the world of computer science by myself, even though the knowledge I obtained was self-taught, I was very confident in the results I got.</p>
    </div>
    <div class="intro-bagian-kanan hp-collapse ">
        <div class="d-flex flex-column justify-content-center">
            <div class="d-flex justify-content-center">
                <img class="d-flex" src="{{ asset('images/mulkan.png') }}" alt="" width="200">
            </div>
        </div>
    </div> -->
<!-- </section> -->

@endsection