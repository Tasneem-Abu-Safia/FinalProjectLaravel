@extends("layout.admin.admin")
@section("Headtitle")
    Show Stores
@stop
@section("search-side")
    <form action="{{URL('admin/storesreview/search')}}" method="get"
          style="position: absolute; width: 20%;">
        <div class="input-group">
            <input type="search" name="search" class="form-control" placeholder="Search">
            <div class="input-group-btn">
                <button class="btn btn-info" type="submit">
                    <i class="glyphicon glyphicon-search"></i>
                </button>
            </div>
        </div>
    </form>

@stop


@section("content")
<head>
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templatemo-sixteen.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.css') }}">
</head>
    <div class="col-md-12">
        <div class="filters-content">
            <div class="row grid">
                @if(count($stores) > 0 )
                    @foreach($stores as $store)
                        <div class="col-lg-4 col-md-4 all des">
                            <div class="product-item">
                                <img src="{{ env('STORAGE_URL') . '/' . $store->src_logo }}" alt="Image" width="100px" height="300px">
                                <div class="down-content">
                                    <h4>{{$store->name}}</h4>
                                    <h4>Reviews ({{$store->numRating}})</h4>
                                    <h4>Average of Rating : ({{$store->avgRating}})</h4>
                                    <div class="Stars" style="--rating:{{$store->avgRating}};" aria-label="Rating of this product is 2.3 out of 5."></div>
                                    <p>Address : {{$store->address}} <br> Phone : {{$store->phone}}</p>

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



    <style>


        .Stars {
            --star-size: 25px;
            --star-color: #fff;
            --star-background: #fc0;
            --percent: calc(var(--rating) / 5 * 100%);

            display: inline-block;
            font-size: var(--star-size);
            font-family: Times; // make sure ★ appears correctly
        line-height: 1;}

        .Stars::before {
             content: '★★★★★';
             letter-spacing: 3px;
             background: linear-gradient(90deg, var(--star-background) var(--percent), var(--star-color) var(--percent));
             -webkit-background-clip: text;
             -webkit-text-fill-color: transparent;
         }



    </style>








@stop
