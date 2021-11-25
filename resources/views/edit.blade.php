@extends('master')
@section('title', 'Update')
@section('pagesection')
    <!-- Modal-Add -->
    {{-- <div class="modal fade" id="Modal_add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
   aria-hidden="true"> --}}
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error!</strong> {{ $error }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" action="/update/{{$q->id}}">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <label>Question</label>
                    </div>
                    <div class="row">
                        <input name="question" class="form-control" value={{$q->question}} >
                    </div>
                    <div class="row">
                        <div class="col-md-6"><label>A</label></div>
                        <div class="col-md-6"><label>B</label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><input name="opa" class="form-control" value={{$q->a}}></div>
                        <div class="col-md-6"><input name="opb" class="form-control" value={{$q->b}}></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><label>C</label></div>
                        <div class="col-md-6"><label>D</label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><input name="opc" class="form-control" value={{$q->c}} ></div>
                        <div class="col-md-6"><input name="opd" class="form-control" value={{$q->d}} ></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label>Answer</label><br />
                            <select name="ans" class="form-control">
                                <option Value={{$q->ans}}>Answer: {{$q->ans}}</option>
                                <option Value={{$q->a}}>A</option>
                                <option Value={{$q->b}}>B</option>
                                <option Value={{$q->c}}>C</option>
                                <option Value={{$q->d}}>D</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    {{-- <a href="questions"><button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button></a> --}}
                    <button type="Submit" class="btn btn-primary" data-dismiss="modal">Add questions</button>
                </div>
            </form>
        </div>
    </div>
    {{-- </div> --}}
@endsection