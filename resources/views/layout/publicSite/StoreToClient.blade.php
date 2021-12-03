@extends("layout.publicSite.CommonPage")

@section('content')
    <style>

        #message{
            width: 50%;
            padding: 13px;
            font: message-box;
            font-size: 16px;
            height: 42px;
            font: bold;
            font-weight: bold;
            margin: 19px;
            text-align: center;
        }
    </style>
    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filters">
                        <ul>
                            <li class="active" data-filter="*">All Store</li>
<li class="active" data-filter="*">
    <form action="{{URL('public/store/search/'.session('categoryID'))}}" method="get"
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

                <div class="col-md-12">
                    <div class="filters-content">
                        @if(session()->has('status'))
                            @if(session()->get('status') == true)
                                <div class="alter alert-success" id="message" style=" font-size: 14px;

        padding: 5px;
        width: 41%;
        text-align: center;
        margin: 3% 0% 0% 5%;">
                                    Rating Successfully
                                </div>
                            @else
                                <div class="alter alert-danger" id="message" style=" font-size: 14px;

        padding: 5px;
        width: 41%;
        text-align: center;
        margin: 3% 0% 0% 5%;">
                                    You already rated before Or Add Rate before submit
                                </div>
                            @endif
                            <br>


                        @endif

                        <div class="row grid">

                            @if(count($stores) > 0 )
                            @foreach($stores as $store)
                                <div class="col-lg-4 col-md-4 all des">
                                    <div class="product-item">
                                        <img src="{{ env('STORAGE_URL') . '/' . $store->src_logo }}" alt="Image" width="100px" height="300px">
                                        <div class="down-content">
                                            <a href="#"><h4>{{$store->name}}</h4></a>
                                            <form action="{{URL('public/rate/'.$store->id)}}" method="post">
                                                @csrf
                                                    <h4 class="mb-0" style=" font-size: 17px;

    text-align: left;">Rate Store : </h4>
                                                    <div class="rating" id="rating-bar-{{ $store->id }}">
                                                        <input type="hidden" name="store" value="{{ $store->id }}">
                                                        <input type="radio" name="rating" value="5" id="5-{{ $store->id }}">
                                                        <label for="5-{{ $store->id }}">☆</label>
                                                        <input type="radio" name="rating" value="4" id="4-{{ $store->id }}">
                                                        <label for="4-{{ $store->id }}">☆</label>
                                                        <input type="radio" name="rating" value="3" id="3-{{ $store->id }}">
                                                        <label for="3-{{ $store->id }}">☆</label>
                                                        <input type="radio" name="rating" value="2" id="2-{{ $store->id }}">
                                                        <label for="2-{{ $store->id }}">☆</label>
                                                        <input type="radio" name="rating" value="1" id="1-{{ $store->id }}">
                                                        <label for="1-{{ $store->id }}">☆</label></div>
                                                        <button  type="submit"
                                                            class="btn btn-warning btn-block rating-submit" style="color: white;
    font-size: 15px;
    font-weight: bold;
    border-color: #f33f3f;
    background-color: #f33f3f;">Save Rate</button>

                                            </form>
                                            <br>

                                            <a href="{{URL('public/detail/'.$store->id)}}"><button
                                                            class="btn btn-warning btn-block rating-submit" style="color: white;
    font-size: 15px;
    font-weight: bold;
    border-color: #f33f3f;
    background-color: #f33f3f;">Show Details</button></a>



                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            @else
                                <div class="col-md-12">
                                    <div class="row" style="margin-left: 0%;">
                                        <div class="col-12">
                                            <h4>No Store Found</h4>
                                        </div>
                                    </div>
                                </div>
                            @endif




                        </div>
                    </div>
                </div>
                <div class="col-md-12">


                        {{$stores->links()}}

                </div>
            </div>
        </div>
    </div>




@stop
