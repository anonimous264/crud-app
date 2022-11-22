<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD-APP INF-636</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>CRUD-APP INF-636 (TECNOLOGIAS EMERGENTES DE LA WEB)</h2>
                </div>
                <div class="pull-rigth mb-2">
                    <a class="btn btn-success" href="{{route('practicas.create')}}">CREATE</a>
                </div>  
            </div>
        </div>
        @if($message =Session::get('success'))
        <div class="alert alert success">
            <p>{{$message}}</p>
        </div>
        @endif
        <table class="table table-bordered">
            <tr>
                <th>N°</th>
                <th>name</th>
                <th>description</th>
                <th>state</th>
                <th>register_date</th>
                <th>finished_date</th>
                <th>change_date</th>
               <th width="280px">Action</th>
            </tr>
            @foreach($practicas as $practica)
            <tr>
                <td>{{$practica->id}}</td>
                <td>{{$practica->name}}</td>
                <td>{{$practica->description}}</td>
                <td>{{$practica->state}}</td>
                <td>{{$practica->register_date}}</td>
                <td>{{$practica->finished_date}}</td>
                <td>{{$practica->change_date}}</td>
                <td>
                    <form action="{{route('practicas.destroy',$practica->id)}}" method="POST">
                        <a class="btn btn-primary" href="{{route('practicas.edit', $practica->id)}}">EDIT</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        {!! $practicas->links()!!}
    </div>
</body>
</html>