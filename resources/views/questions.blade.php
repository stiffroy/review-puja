@extends('master')
@section('title', 'Questions')

@section('pagestyle')
    <style>
        .text-color{
            color:rgb(0, 102, 255);
        }
    </style>

@section('pagesection')
    <br>
    <h2 style="text-align: center;" class="mt-4 text-color">Teachers Panel</h2>
    @if(Session::get('successMessage'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success</strong> {{Session::get('successMessage')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php Session::forget('successMessage');?>
    @endif
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-10">
                            <h3 class="mb-4 text-color">Laravel Questions<b></b></h3>
                        </div>
                        <div class="col-sm-2">
                            <div class="float-right">
                                <a href="addquestion"><Button data-toggle="modal" data-target="#Modal_add" class="btn btn-primary">Add Question</Button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Questions <i class="fa fa-sort"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($questions as $qs)
                        <tr>
                            <td>{{$qs->id}}</td>
                            <td>{{$qs->question}}</td>
                            

                            <td>
                                <a href="/edit/{{$qs->id}}" class="text-warning" data-toggle="modal"
                                    data-target="#Modal_update/{{$qs->id}}">Update</a>
                                <a href="/delete/{{$qs->id}}" class="text-danger" data-toggle="tooltip">Delete</a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </div>
   


 


@endsection
