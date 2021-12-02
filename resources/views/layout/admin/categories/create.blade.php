@extends("layout.admin.admin")
@section("Headtitle")
    Add categories
@stop



@section("css")
    <link href="{{asset('css/addcategoriesForm.css')}}" rel="stylesheet" type="text/css" />
@stop

@section("content")
    <div class="page-wrapper bg-dark p-t-100 p-b-50" style="background-color:#2C2E3E !important">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Add categories
                    </h2>
                </div>
                @if(session()->has('status'))
                    @if(session()->get('status') == true)
                        <div class="alter alert-success" id="message" style=" font-size: 14px;

        padding: 5px;
        width: 41%;
        text-align: center;
        margin: 3% 0% 0% 5%;">
                            Add Successfully
                        </div>
                    @else
                        <div class="alter alert-danger" id="message" style=" font-size: 14px;

        padding: 5px;
        width: 41%;
        text-align: center;
        margin: 3% 0% 0% 5%;">
                            Category already exist before ):
                        </div>
                    @endif
                    <br>


                @endif
                <div class="card-body">
                    <form enctype='multipart/form-data' method="POST" action='{{URL('admin/categories/store')}}'>
                        @csrf
                        <div class="form-row">
                            <div class="name">Title</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="title" placeholder="Title">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Description</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="description" id="description" placeholder="Description of categories"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Upload Image</div>
                            <div class="value">
                                <div class="form-group mb-3">
                                    <input  multiple class="form-control" type="file" name="image" id="image">

                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                @foreach($errors->all as $msg)
                                    <div class="alert alert-danger">{{$msg}}</div>
                                @endforeach
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn--radius-2 btn--blue-2" type="submit">Send Application</button>
                            <button class="btn btn--radius-2 btn--blue-2" type="reset">Reset</button>
                            <a  href="{{URL('admin/categories')}}" class="btn btn--radius-2 btn--blue-2" >Back</a>

                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>


@stop

