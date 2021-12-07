@extends("layout.admin.admin")
@section("Headtitle")
    Show Stores
@stop
@section("search-side")
    <form action="{{URL('admin/stores/search')}}" method="get"
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
@section("title-side")

    <div class="col-md-2 text-right">
    <a href="{{asset('admin/stores/create')}}"
       class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
    <span>
 <i class="la la-plus"></i>
        <span style="font-size: 18px;"> Add    </span>

    </span>
    </a></div>
@stop

@section("content")
    <div class="row">
        <div class="col-md-12">

            <br>
            @if(session()->has('success'))

                <div class="alter alert-success" style="padding: 10px;
    font: message-box;
    font-size: 16px;">
                    {{session()->get('success')}}
                </div>
                <br>
            @endif
            <div class="card">
                      <div class="card-header">
                          <div class="row">
                              <div class="col col-md-6 text-left">
                                  <h4>Stores</h4>
                              </div>
                              <div class="col col-md-6 text-right">
                                  <a  class="btn btn-primary" href="{{URL('admin/stores/deleted')}}">View Deleted Store</a>
                              </div>

                          </div>
                      </div>
                <div class="card-body">

                    <table style="    text-align: center; " class="table table-bordered ">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Category_id</th>
                            <th scope="col">Category_Title</th>

                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(!empty($stores))
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
                                                <a href="{{url('admin/stores/edit/'.$store->id)}}" class="btn btn-info btn-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                                                    </svg>
                                                </a>
                                            </td>
                                            <td>

                                                <form action="{{url('admin/stores/delete/'.$store->id)}}" method="post" onsubmit="return confirm('Are you sure ? ')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                        </svg></button>
                                                </form>
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
                <div class="row" style="margin-left: 0%;">
                    <div class="col-12">
                        {{ $stores->links() }}
                    </div>
                </div>
            </div>
        </div>

    </div>

@stop
