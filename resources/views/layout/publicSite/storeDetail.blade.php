@extends("layout.publicSite.CommonPage")

@section('head')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
<style>

    body{margin-top:20px;
        background:#eee;
    }

    /*panel*/
    .panel {
        border: none;
        box-shadow: none;
    }

    .panel-heading {
        border-color:#eff2f7 ;
        font-size: 16px;
        font-weight: 300;
    }

    .panel-title {
        color: #2A3542;
        font-size: 14px;
        font-weight: 400;
        margin-bottom: 0;
        margin-top: 0;
        font-family: 'Open Sans', sans-serif;
    }

    /*product list*/

    .prod-cat li a{
        border-bottom: 1px dashed #d9d9d9;
    }

    .prod-cat li a {
        color: #3b3b3b;
    }

    .prod-cat li ul {
        margin-left: 30px;
    }

    .prod-cat li ul li a{
        border-bottom:none;
    }
    .prod-cat li ul li a:hover,.prod-cat li ul li a:focus, .prod-cat li ul li.active a , .prod-cat li a:hover,.prod-cat li a:focus, .prod-cat li a.active{
        background: none;
        color: #ff7261;
    }

    .pro-lab{
        margin-right: 20px;
        font-weight: normal;
    }

    .pro-sort {
        padding-right: 20px;
        float: left;
    }

    .pro-page-list {
        margin: 5px 0 0 0;
    }

    .product-list img{
        width: 100%;
        border-radius: 4px 4px 0 0;
        -webkit-border-radius: 4px 4px 0 0;
    }

    .product-list .pro-img-box {
        position: relative;
    }
    .adtocart {
        background: #fc5959;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        -webkit-border-radius: 50%;
        color: #fff;
        display: inline-block;
        text-align: center;
        border: 3px solid #fff;
        left: 45%;
        bottom: -25px;
        position: absolute;
    }

    .adtocart i{
        color: #fff;
        font-size: 25px;
        line-height: 42px;
    }

    .pro-title {
        color: #5A5A5A;
        display: inline-block;
        margin-top: 20px;
        font-size: 16px;
    }

    .product-list .price {
        color:#fc5959 ;
        font-size: 15px;
    }

    .pro-img-details {

        margin-left: -15px;
    }

    .pro-img-details img {
        width: 100%;
        height: 100%;

    }

    .pro-d-title {
        font-size: 16px;
        margin-top: 0;
    }

    .product_meta {

        border-top: 1px solid #eee;
        border-bottom: 1px solid #eee;
        padding: 10px 0;
        margin: 15px 0;
    }

    .product_meta span {
        display: block;
        margin-bottom: 10px;
    }


    .pro-price, .amount-old {
        font-size: 18px;
        padding: 0 10px;
    }

    .amount-old {
        text-decoration: line-through;
    }

    .quantity {
        width: 120px;
    }

    .pro-img-list {
        margin: 10px 0 0 -15px;
        width: 100%;
        display: inline-block;
    }

    .pro-img-list a {
        float: left;
        margin-right: 10px;
        margin-bottom: 10px;
    }

    .pro-d-head {
        font-size: 18px;
        font-weight: 300;
    }


</style>
@stop
@section('content')

    <div class="container bootdey" style="margin-top: 26%;">
        <div class="col-md-12">
            <section class="panel">
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

                <div class="panel-body">
                    <div class="col-md-6">
                        <div class="pro-img-details" style=" height: 400px;
        width: 500px;">
                            <img src="{{ env('STORAGE_URL') . '/' . $store->src_logo }}" alt="Image" height="100%" width="100%">
                        </div>

                    </div>
                    <div class="col-md-6">
                        <h4 class="pro-d-title" style="    font-size: 3.5rem;margin: 17px;    border-bottom: inset;">
                           {{$store->name}}
                        </h4>
                        <p>
                            Praesent ac condimentum felis. Nulla at nisl orci, at dignissim dolor, The best product descriptions address your ideal buyer directly and personally. The best product descriptions address your ideal buyer directly and personally.
                        </p>
                        <br><br>
                        <div class="product_meta" style="font-size: 14px;">
                            <span class="posted_in"> <strong>Address: </strong>{{$store->address}}</span>
                        </div>
                        <br>
                        <div class="m-bot15" style="font-size: 14px;"> <strong>Phone : </strong> <span class="amount-old">{{$store->phone}}</span></div>
                        <div class="m-bot15" style="font-size: 14px;"> <strong>Rate : </strong>

                        <div class="Stars" style="--rating:{{$store->avgRating}};" aria-label="Rating of this product is 2.3 out of 5."></div>
                    </div>
                        <br><br>
                        <div class="form-group" >
                            <form action="{{URL('public/rate/'.$store->id)}}" method="post">
                                @csrf
                                <div class="rate bg-success py-3 text-white mt-3">
                                    <h4 class="mb-0" style=" font-size: 17px;
    color: #ffffff;
    text-align: center;">Rate this Store</h4><br>
                                    <div class="rating">

                                        <input type="radio" name="rating" value="5" id="5">
                                        <label for="5">☆</label>
                                        <input type="radio" name="rating" value="4" id="4">
                                        <label for="4">☆</label>
                                        <input type="radio" name="rating" value="3" id="3">
                                        <label for="3">☆</label>
                                        <input type="radio" name="rating" value="2" id="2">
                                        <label for="2">☆</label>
                                        <input type="radio" name="rating" value="1" id="1">
                                        <label for="1">☆</label></div>

                                        <div class="buttons px-4 mt-0">

                                            <button type="submit"
                                                    class="btn btn-warning btn-block rating-submit" style="color: white;
    font-size: 15px;
    border-color: #f33f3f;
    background-color: #f33f3f;"> Save Rate</button> </div>

                                    </div>
                                </form>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </div>

    <style>


        .Stars {
            --star-size: 25px;
            --star-color: #8b8b8b;
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
