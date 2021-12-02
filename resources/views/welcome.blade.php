@extends('layout.publicSite.CommonPage')

@section('content')
    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filters">
                        <ul>
                            <li class="active" data-filter="*">All Categories</li>
                            <li class="active" data-filter="*">
                                <form action="{{URL('public/category/search')}}" method="get"
                                      style=" width: 195px;">

                                    <div class="input-group">
                                        <input type="search" name="search" class="form-control" placeholder="Search" style="    height: 30px;">
                                        <div class="input-group-btn">
                                            <button class="btn btn-info" type="submit" style="    height: 30px;">
                                                <i class="glyphicon glyphicon-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                @if(session()->has('status'))
                    @if(session()->get('status') == true)
                        <div class="alter alert-success" id="message">
                            Rating Successfully
                        </div>
                    @else
                        <div class="alter alert-danger" id="message" >
                            You already rated before Or Add Rate before submit
                        </div>
                    @endif
                    <br>


                @endif
                <div class="col-md-12">
                    <div class="filters-content">
                        <div class="row grid">

                            @if(count($categories) > 0 )
                                @foreach($categories as $category)
                                    <div class="col-lg-4 col-md-4 all des">
                                        <div class="product-item">
                                            <img src="{{ env('STORAGE_URL') . '/' . $category->src_photo }}" alt="Image" width="100px" height="300px">
                                            <div class="down-content">
                                                <a href="#"><h4>{{$category->title}}</h4></a>
                                                <p>Title : {{$category->description}}</p>

                                                <form action="{{URL('public/store/'.$category->id)}}" method="get">
                                                    @csrf
                                                    <div class="rate bg-success py-3 text-white mt-3">
                                                        <div class="rating">

                                                            <div class="buttons px-4 mt-0">

                                                                <button type="submit"
                                                                        class="btn btn-warning btn-block rating-submit" style="color: white;
    font-size: 15px;
    font-weight: bold;
    border-color: #f33f3f;
    background-color: #f33f3f;">Show Store</button> </div>

                                                        </div>
                                                    </div> </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            @else
                                <div class="col-md-12">
                                    <div class="row" style="margin-left: 0%;">
                                        <div class="col-12">
                                            <h4>No category Found</h4>
                                        </div>
                                    </div>
                                </div>
                            @endif




                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



@stop
