@extends("layout.admin.admin")
@section("Headtitle")
    Edit Store
@stop
@section("title","Edit Store")

@section("css")
    <link href="{{asset('css/addcategoriesForm.css')}}" rel="stylesheet" type="text/css" />
@stop
@section("js")
    <script>
        $(".summernote").summernote({height:400})
    </script>
@stop
@section("content")

    <div class="page-wrapper bg-dark p-t-100 p-b-50" style="background-color:#2C2E3E !important">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Edit Store
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
                    <form enctype="multipart/form-data" method='post' action='{{URL('admin/stores/update/'.$store->id)}}'>
                        @csrf

                        @method("put")
                        <div class="form-row">
                            <div class="name">Name</div>
                            <div class="value">
                                <input class="input--style-6" type="text" value="{{$store->name}}" name="name" placeholder="Name">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Address</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6"
                                              name="address" id="address" >{{$store->address}}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Phone</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="tel" value="{{$store->phone}}" name="phone" placeholder="Store Phone Number">

                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Category</div>
                            <div class="value">
                                <div class="input-group">
                                    <select name="category_id" class="form-control">
                                        @foreach ($categories as $category)
                                            @if ( $store->category_id == $category->id)
                                                <option value="{{ $category->id }}"selected >{{ $category->title }}</option>
                                            @else
                                                <option value="{{ $category->id }}" >{{ $category->title }}</option>
                                            @endif

                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>



                        <div class="form-row">
                            <div class="name">Upload Image</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input  multiple class="input-file" type="file" name="image" id="image"> <br><br>
                                    <img src="{{ env('STORAGE_URL') . '/' . $store->src_logo }}" alt="Image"
                                         width="100px" height="100px">


                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn--radius-2 btn--blue-2" >Update Application</button>
                            <button class="btn btn--radius-2 btn--blue-2" type="reset">Reset</button>
                            <a  href="{{URL('admin/stores')}}" class="btn btn--radius-2 btn--blue-2" >Back</a>


                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@stop
<!--
<div class="m-portlet m-portlet--mobile">
    <form enctype="multipart/form-data" method='post' action="">
        @csrf
@method("put")
    <div class='m-form'>
        <div class="m-portlet__body">
            <div class="m-form__section m-form__section--first">
                <div class="form-group m-form__group row">
                    <label class="col-lg-3 col-form-label">العنوان</label>
                    <div class="col-lg-6">
                        <input id="title" value="{{$category->title}}" name="title" placeholder="title"
                                class="form-control" type="text">
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">الوصف القصير</label>
                        <div class="col-lg-6">
                            <input id="slug" value="" name="slug"
                                placeholder="الوصف القصير" class="form-control" type="text">
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">التفاصيل</label>
                        <div class="col-lg-6">
                            <textarea id="details" rows='8' style='height:350px;' name="details" placeholder="أدخل التفاصيل"
                                class="summernote form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">الصورة</label>
                        <div class="col-lg-6">
                            <input type='file' class="form-control" name="image" id="image" />
                            <hr>
                            <img style='max-width:250px' src='{{asset("storage/images/")}}' />

                        </div>
                    </div>
                </div>
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <button class="btn btn-primary" type="submit">تحديث</button>
                            <a href="{{asset('admin/categories')}}" class="btn btn-secondary">الغاء الامر</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
-->
