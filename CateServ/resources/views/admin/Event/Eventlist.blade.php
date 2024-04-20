@extends('dashboard')

@section('title')
    Event List
@endsection

@section('adminc')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="/Event/create" class="btn btn-primary btn-sm"><h1>Add Event</h1></a>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Stock Return list</li>
                    </ol>
                </div>
            </div>

            
            <div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Event List</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th style="width: 10px">SL</th>
                                    <th>Title</th>
                                    <th>Photo</th>
                                    <th style="width: 165px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach ($data as $t)
                                   <td>{{$loop->iteration}}</td>
                                   <td>{{$t->title}}</td>
                                   <td><img src="{{asset('pictures/'. $t->photo) }}" height="70" width="70" alt="photo"></td>
                                   <td>
                                    <form action="{{ route('Event.destroy', $t->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-md"
                                            onclick="return confirm('Are You Confirm to Delete')">Delete</button>
                                    </form>
                                    <a class="btn btn-primary btn-md" href="{{ route('Event.edit', $t->id) }}">Edit </a>
                                    <a class="btn btn-info btn-md" href="{{ route('Event.show', $t->id) }}">Show</a>
                                   </td>
                               
                                </tr>
                                @endforeach
                               
                            </tbody>
                            
                        </table>
                    </div>
                    <!-- /.card-body -->
                    
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

</div>
<!-- /.content-wrapper -->
@endsection
