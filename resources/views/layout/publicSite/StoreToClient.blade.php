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
                        <div class="row grid">

                            @if(count($stores) > 0 )
                            @foreach($stores as $store)
                                <div class="col-lg-4 col-md-4 all des">
                                    <div class="product-item">
                                        <img src="{{ env('STORAGE_URL') . '/' . $store->src_logo }}" alt="Image" width="100px" height="300px">
                                        <div class="down-content">
                                            <a href="#"><h4>{{$store->name}}</h4></a>
                                            <form action="{{URL('public/detail/'.$store->id)}}" method="get">
                                                @csrf

                                                <div class="buttons px-4 mt-0">

                                                    <button type="submit"
                                                            class="btn btn-warning btn-block rating-submit" style="color: white;
    font-size: 15px;
    font-weight: bold;
    border-color: #f33f3f;
    background-color: #f33f3f;">Show Details</button> </div>

                                            </form>
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
