@extends('dashboard')

@section('title')
    Edit About
@endsection

@section('adminc')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>EDit About</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">EDit About</li>
                    </ol>
                </div>
            </div>
            <div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add About </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    {!! Form::open(['url' => route('Aboutd.update',$about->id), 'files' => true, 'method'=>'PATCH']) !!}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        {!! Form::label('photo', 'Upload Photo') !!}
                                        {!! Form::file('photo', ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('title', 'title :') !!}
                                        {!! Form::text('title', $about->title , ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('details', 'details :') !!}
                                        {!! Form::text('details', $about->details, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="card-footer">
                                        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
                                    
                                    </div>

                                </div>
                                <div class="col-6">
                                    
                                    <div class="form-group">
                                        {!! Form::label('service1', 'service1 :') !!}
                                        {!! Form::text('service1', $about->service1 , ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('service2', 'service2 :') !!}
                                        {!! Form::text('service2',$about->service2, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('service3', 'service3 :') !!}
                                        {!! Form::text('service3', $about->service3, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('service4', 'service4 :') !!}
                                        {!! Form::text('service4', $about->service4, ['class' => 'form-control']) !!}
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