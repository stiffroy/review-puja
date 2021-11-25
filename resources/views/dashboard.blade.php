@extends('master')
@section('title', 'dashboard')

@section('pagestyle')
    <style>
        .card-size {
            width: 800px;
            height: 400px;
            text-align: center;
            padding: 50px;
            margin: 100px 250px ;
        }
        .text-color{
            color:rgb(0, 102, 255);
        }
        .text-color1{
            color: rgb(105, 189, 105);
        }
        

    </style>

@section('pagesection')
    <div class="">
        <div class="card  card-size ">
            <div class="card-body">
                <div class='container'>
                    <div class="row">
                        <h1 class="text-color">Online Quize Examination</h1>
                        <h5 class="mt-4 text-color1">welcome</h5>
                        <div class="col-md-12 mt-4">
                            <a href="questions"><button class="btn btn-primary">Teacher</button></a>
                            <a href="start"><button class="btn btn-primary">Student</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
