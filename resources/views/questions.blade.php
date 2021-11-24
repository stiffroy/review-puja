@extends('master')
@section('title', 'dashboard')
@section('pagesection')
    <br>
    <h3 style="text-align: center;">Admin</h3>
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-1">
                            <h2>Users <b></b></h2>
                        </div>
                        <div class="col-sm-7"><Button data-toggle="modal" data-target="#Modal_add"
                                class="btn btn-primary">Add</Button></div>
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
                            <th>Question <i class="fa fa-sort"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>what is your fav clr?</td>
                            

                            <td>
                                <a href="#" class="text-warning" data-toggle="tooltip" data-toggle="modal"
                                    data-target="#Modal_update">Update</a>
                                <a href="#" class="text-danger" data-toggle="tooltip">Delete</a>
                            </td>
                        </tr>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
    </body>

    </html>


    <!-- Modal-Add -->
    <div class="modal fade" id="Modal_add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="POST" action="/add">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="row">
                            
                        </div>
                        <div class="row">
                            <div class="col-md-6"><input id="addInputName" class="form-control"></div>
                            <div class="col-md-6"><input id="addInputMobile" class="form-control"></div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="Submit" class="btn btn-primary" data-dismiss="modal">Add questions</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
