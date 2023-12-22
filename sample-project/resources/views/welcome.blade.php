@extends ('layouts.master')
@section ('title','master')

@section('content')
<div>
    <style>
    </style>
    <div class="row home-container m-lg-5">
        <div class="col-md-8 justify-content-center align-items-center d-flex">
            <div>
            <h1 class="heading text-center">Hello World.</h1>
            <p class="home-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, ab minima esse alias quo accusantium architecto eius unde odit, eos consequuntur enim inventore odio voluptates doloribus explicabo ipsam. Fuga, architecto?
            </p>
            </div>  
        </div>

        <div class="col-md-4">
                <img class="img-home" src="{{asset('/images/pic2.png')}}" alt="kites">
        </div>
    </div>

        <div class="row justify-content-center">
            <div class="col-md-3 shadow-sm  post-container">
                <h3 class="heading">Kites</h3>
                <img src="{{asset('/images/pic2.png')}}" alt="sdfs" class="post-img">
                <span class="post-text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi quas impedit odio culpa at excepturi consequatur et necessitatibus dolorem aut quos obcaecati unde reiciendis vero, voluptatibus distinctio quae rem nulla!</span>
            </div>
        </div>
</div>
@endsection