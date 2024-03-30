@extends('layouts.default')

@section('page_name', 'Edit Users Data')
@section('content')
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Edit User Form</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" action="{{ url('/') }}" method="post">
            @csrf
            <div class="card-body">
                <!--65160330 ทินภัทร เพิ่มคำนำหน้าชื่อ-->
                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-md-10">
                        <select id="title" class="form-control name="title>
                            <option value="">--เลือก--</option>
                            <option value="1">นาย </option>
                            <option value="2">นาง </option>
                            <option value="3">นางสาว </option>
                        </select>
                    </div>
                </div>
                <!--65160330 ทินภัทร เพิ่มข้อมูลชื่อ-->
                <div class="form-group row">
                    <label for="name" class="col-md-2 col-form-label">Name</label>
                    <div class="col-md-10">
                        <input id="name" type="text" class="form-control">
                    </div>
                </div>
                <!--65160330 ทินภัทร เพิ่มข้อมูล Email-->
                <div class="form-group row">
                    <label for="email" class="col-md-2 col-form-label">Email</label>
                    <div class="col-md-10">
                        <input id="email" type="email" class="form-control">
                    </div>
                </div>
                <!--65160330 ทินภัทร เพิ่มข้อมูล Avatar-->
                <div class="form-group row">
                    <label for="avatar" class="col-md-2 col-form-label">Avatar</label>
                    <div class="col-md-10">
                        <input id="avatar" type="file" class="form-control">
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-info">Submit</button>
                <a href="{{ url('/') }}" class="btn btn-default float-right">Cancel</a>
            </div>
            <!-- /.card-footer -->
        </form>
    </div>
    <!-- /.card -->
@endsection
