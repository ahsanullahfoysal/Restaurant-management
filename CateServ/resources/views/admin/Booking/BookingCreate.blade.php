@extends('dashboard')

@section('title')
    Add Menu
@endsection

@section('adminc')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Book</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Book</li>
                    </ol>
                </div>
            </div>
            <div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add Book </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    @if ($errors->any())
                    {{ implode('', $errors->all('<div>:message</div>')) }}
                @endif
                <form class="forms-sample" action="{{ route('Book.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleInputName1">Name</label>
                                <input style="color: rgb(8, 8, 8)" type="text" class="form-control" id="exampleInputName1"
                                    placeholder="Name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Phone</label>
                                <input style="color: rgb(9, 9, 9)" type="text" class="form-control" id="exampleInputEmail3"
                                    placeholder="Phone" name="phone">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Email</label>
                                <input style="color: rgb(7, 7, 7)" type="email" class="form-control" id="exampleInputEmail3"
                                    placeholder="Email" name="email">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleInputEmail3">Date</label>
                                <input style="color: rgb(8, 8, 8)" type="date" class="form-control" id="exampleInputEmail3"
                                    placeholder="Email" name="date">
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputEmail3">Time</label>
                                <div >
                                    <!-- Select2 -->
                                    <select style="width: 100%; height:40px;color:rgb(98, 74, 74); background:rgb(38, 47, 59)" class="selection-1" name="time">
                                        <option>09:00:00</option>
                                        <option>09:30:00</option>
                                        <option>10:00:00</option>
                                        <option>10:30:00</option>
                                        <option>11:00:00</option>
                                        <option>11:30:00</option>
                                        <option>12:00:00</option>
                                        <option>12:30:00</option>
                                        <option>13:00:00</option>
                                        <option>13:30:00</option>
                                        <option>14:00:00</option>
                                        <option>14:30:00</option>
                                        <option>15:00:00</option>
                                        <option>15:30:00</option>
                                        <option>16:00:00</option>
                                        <option>16:30:00</option>
                                        <option>17:00:00</option>
                                        <option>17:30:00</option>
                                        <option>18:00:00</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Person</label>
                                <select style="width: 100%; height:40px;color:rgb(19, 18, 18); background:rgb(38, 47, 59)" class="selection-1" name="people">
                                    <option value="01">1 person</option>
                                    <option value="02">2 person</option>
                                    <option value="03">3 person</option>
                                    <option value="04">4 person</option>
                                    <option value="05">5 person</option>
                                    <option value="06">6 person</option>
                                    <option value="07">7 person</option>
                                    <option value="08">8 person</option>
                                    <option value="09">9 person</option>
                                    <option value="10">10 person</option>
                                    <option value="11">11 person</option>
                                    <option value="12">12 person</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="from-group">
                                <label for="exampleInputEmail3">Place</label>
                                <select style="width: 100%; height:40px;" class="selection-1" name="place">
                                    <option selected>Select Palace</option>
                                    <option value="Dahnmondi">Dahnmondi</option>
                                    <option value="Mirpur">Mirpur</option>
                                    <option value="Old Dhaka">Old Dhaka</option>
                                </select>
                            </div>
                            <div class="from-group">
                                <label for="exampleInputEmail3">Meals</label>
                                <select style="width: 100%; height:40px;" name="meals" class="selection-1" >
                                    <option selected>Select Meals</option>
                                    <option value="Vegetarian">Vegetarian</option>
                                    <option value=" Non Vegetarian"> Non Vegetarian</option>
                                </select>
                            </div>
                            <div class="from-group">
                                <label for="exampleInputEmail3">Event Name</label>
                                <select style="width: 100%; height:40px;" name="event" class="selection-1" >
                                    <option selected>Select Event</option>
                                    <option value="marriage">marriage</option>
                                    <option value="Birthday"> Birthday</option>
                                </select>
                            </div>
                        </div>

                        
                    </div>
            
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a class="btn btn-dark" href="/bookingconfirm">Cancel</a>
                </form>
                    
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
</div>
<!-- /.content-wrapper -->
@endsection



