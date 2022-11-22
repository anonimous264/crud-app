<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD EDIT</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>EDIT</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{route('practicas.index')}}" encType="multipart/form-data"> BACK</a>
                </div>
            </div>
        </div>
        @if(session('status'))
            <div class="alert alert-success mb-1 mt-1" >
                {{session('status')}}
            </div>
        @endif
        <form action="{{ route('practicas.update',$practica->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <!--name-->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{__('Name')}}:</strong>
                    <input type="text" name="name" value="{{$practica->name}}" class="form-control" placeholder="name">
                    @error('name')
                    <div class="alert alert-danger mt-1 mb-1">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <!--description-->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{__('Description')}}:</strong>
                    <input type="text" name="description" value="{{$practica->description}}" class="form-control" placeholder="description">
                    @error('descripotion')
                    <div class="alert alert-danger mt-1 mb-1">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <!--state-->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{ __('state') }}:</strong>
                    <select class="form-control" name="state"  id="state">
                        <option value="1">waiting</option>
                        <option value="2">finished</option>
                        <option value="3">posponed</option>
                        <option value="4">cancelled</option>
                        <option value="5">removed</option>
                    </select>
                    @error('state')
                        <div class="alert alert-danger mt-1 mb-1">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <!--register date-->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{__('Register Date')}}:</strong>
                    <input type="datetime-local" name="register_date" value="{{$practica->register_date}}" class="form-control" placeholder="Register date">
                    @error('resgister_date')
                    <div class="alert alert-danger mt-1 mb-1">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <!--finished date-->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{__('Finished Date')}}:</strong>
                    <input type="datetime-local" name="finished_date" value="{{$practica->register_date}}" class="form-control" placeholder="Finished date">
                    @error('finished_date')
                    <div class="alert alert-danger mt-1 mb-1">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <!--change date-->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{__('Change Date')}}:</strong>
                    <input type="datetime-local" name="change_date" value="{{$practica->change_date}}" class="form-control" placeholder="Change  date">
                    @error('change_date')
                    <div class="alert alert-danger mt-1 mb-1">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary ml-3">SUBMIT</button>
        </div>
    </div>
</body>
</html>