@extends('dashboard')

@section('title')
    Edit Slider
@endsection

@section('adminc')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>stock Return</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">stock Return</li>
                    </ol>
                </div>
            </div>
            <div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add Stock Return </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    {!! Form::open(['url' => route('Slider.update',$slider->id), 'files' => true, 'method'=>'PATCH']) !!}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        {{-- <img src="{{asset('pictures/'. $slider->photo) }}" height="70" width="70" alt="photo" alt=""> --}}
                                        {!! Form::label('photo', 'Upload Photo') !!}
                                        {!! Form::file('photo', ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('title', 'title :') !!}
                                        {!! Form::text('title', $slider->title, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('name', 'name :') !!}
                                        {!! Form::text('name', $slider->name, ['class' => 'form-control']) !!}
                                    </div>

                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        {!! Form::label('btn1', 'btn1 :') !!}
                                        {!! Form::text('btn1', $slider->btn1, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('btn2', 'btn2 :') !!}
                                        {!! Form::text('btn2', $slider->btn2, ['class' => 'form-control']) !!}
                                    </div>

                                    <div class="card-footer">
                                        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
                                    
                                    </div>


                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->

                        {{-- <div class="card-footer">
                            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                            {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
                        </div> --}}
                        {!! Form::close() !!}
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
</div>
<!-- /.content-wrapper -->
@endsection