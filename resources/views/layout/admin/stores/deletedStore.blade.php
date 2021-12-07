@extends("layout.admin.admin")
@section("Headtitle")
    Show Deleted Store
@stop
@section("search-side")
    <form action="{{URL('admin/stores/searchDelete')}}" method="get"
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
    <div class="row">
        <div class="col-md-12">
            <div class="row" style="margin-left: 0%;">
                <div class="col-12">
                    <h4>Deleted Store</h4>
                </div>
            </div>
            <br>
            @if(session()->has('success'))

                <div class="alter alert-success" style="    padding: 10px;
    font: message-box;
    font-size: 16px;">
                    {{session()->get('success')}}
                </div>
                <br>
            @endif
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col col-md-12 text-right">
                            <a  class="btn badge-info" href="{{URL('admin/stores')}}">View All Store</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <table style="    text-align: center; " class="table table-bordered ">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Category_id</th>
                            <th scope="col">Category_Title</th>
                            <th scope="col">Image</th>
                            <th scope="col">Restore</th>

                        </tr>
                        </thead>
                        <tbody>
                        @if(!empty($stores)) <!-- count($stores) > 0--->
                            @foreach($stores as $store)
                                <tr>
                                    <td>{{$store->id}}</td>
                                    <td>
                                        <img src="{{ env('STORAGE_URL') . '/' . $store->src_logo }}" alt="Image" width="70px" height="70px">
                                    </td>
                                    <td>{{$store->name}}</td>
                                    <td>{{$store->address}}</td>
                                    <td>{{$store->phone}}</td>
                                    <td>{{$store->category_id}}</td>
                                    <td>{{$store->category->title}}</td>


                                    <td>
                                        <a href="{{url('admin/stores/restore/'.$store->id)}}" class="btn btn-info btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bootstrap-reboot" viewBox="0 0 16 16">
                                                <path d="M1.161 8a6.84 6.84 0 1 0 6.842-6.84.58.58 0 1 1 0-1.16 8 8 0 1 1-6.556 3.412l-.663-.577a.58.58 0 0 1 .227-.997l2.52-.69a.58.58 0 0 1 .728.633l-.332 2.592a.58.58 0 0 1-.956.364l-.643-.56A6.812 6.812 0 0 0 1.16 8z"/>
                                                <path d="M6.641 11.671V8.843h1.57l1.498 2.828h1.314L9.377 8.665c.897-.3 1.427-1.106 1.427-2.1 0-1.37-.943-2.246-2.456-2.246H5.5v7.352h1.141zm0-3.75V5.277h1.57c.881 0 1.416.499 1.416 1.32 0 .84-.504 1.324-1.386 1.324h-1.6z"/>
                                            </svg>
                                        </a>
                                    </td>

                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="9" class="text-center">No Store Found</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <div class="row" style="margin-left: 0%;">
            <div class="col-12">
                {{ $stores->links() }}
            </div>
        </div>
    </div>

@stop
