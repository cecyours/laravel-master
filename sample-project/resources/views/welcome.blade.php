@extends ('layouts.master')
@section ('title','master')

@section('content')
<div>
    <style>
        .row{
            border:1px red solid;
        }
        .row div{
            border:0.5px blue dashed;
        }
    </style>
    <div class="row">
        <div class="col-md-8">
            <h1 class="heading">Hello World.</h1>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, ab minima esse alias quo accusantium architecto eius unde odit, eos consequuntur enim inventore odio voluptates doloribus explicabo ipsam. Fuga, architecto?
        </div>

        <div class="col-md-4">
                <img class="img-home" src="{{asset('/images/pic.jpg')}}" alt="kites">
        </div>
    </div>
</div>
@endsection