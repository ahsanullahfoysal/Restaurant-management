@extends('dashboard')

@section('title')
    booking List
@endsection

@section('adminc')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <a href="/Book/create" class="btn btn-primary btn-sm">
                            <h1>Add Book</h1>
                        </a>
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
                            <h3 class="card-title">Menu List</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-striped table-hover">

                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>People</th>
                                        <th>Time</th>
                                        <th>Date</th>
                                        <th>Place</th>
                                        <th>Meals</th>
                                        <th>Event Name</th>
                                        <th>Confirmation</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($book as $k => $bk)
                                        <tr>
                                            <td>{{ ++$k }}</td>
                                            <td>{{ $bk->name }}</td>
                                            <td>{{ $bk->email }}</td>
                                            <td>{{ $bk->phone }}</td>
                                            <td>{{ round($bk->people) }}</td>
                                            <td>{{ $bk->time }}</td>
                                            <td>{{ $bk->date }}</td>
                                            <td>{{ $bk->place }}</td>
                                            <td>{{ $bk->meals }}</td>
                                            <td>{{ $bk->event }}</td>
                                            <td>
                                                @if ($bk->status == 'Confirmed')
                                                    <form action="{{ route('Book.store') }}" method="POST">
                                                        @csrf
                                                        <input hidden type="text" value="{{ $bk->id }}"
                                                            name="id2">
                                                        <button class="btn btn-success"
                                                            onclick="return confirm ('are you sure to cancel booking ?')">Confirmed</button>
                                                    </form>
                                                @else
                                                    <form action="{{ route('Book.store') }}" method="POST">
                                                        @csrf
                                                        <input hidden type="text" value="{{ $bk->id }}"
                                                            name="id1">
                                                        <button class="btn btn-warning"
                                                            onclick="return confirm ('are you sure to confirm ?')">Pending</button>
                                                    </form>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <form action="{{ route('Book.destroy', $bk->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger"
                                                            onclick="return confirm ('are you sure to delete ?')">Delete</button>
                                                    </form>
                                                </div>
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
