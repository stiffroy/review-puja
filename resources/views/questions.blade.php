@extends('master')
@section('title', 'Questions')
@section('pagesection')
    <br>
    <h3 style="text-align: center;">Admin</h3>
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
                        <div class="col-sm-1">
                            <h2>Users <b></b></h2>
                        </div>
                        
                        <div class="col-sm-7"><a href="addquestion"><Button data-toggle="modal" data-target="#Modal_add" class="btn btn-primary">Add</Button></a></div>
                        <div class="col-sm-4">
                            <div class="search-box">
                                <input type="text" class="form-control" placeholder="Search&hellip;">
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
                                    data-target="#Modal_edit/{{$qs->id}}">Update</a>
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
