@extends('layouts.app')

@section('content')

  <style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #1c6172;
  color: white;
}

.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
<div class="" style="display:flex">
  <h1>animals</h1>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif


<div class="container-fluid">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10"> @auth @if (Auth::user()->role == "admin")  <a href="/animals/create" class="button"><i class="fa fa-plus" aria-hidden="true"></i> Create animal</a>@endif @endauth
          <table id="customers">
            <tr>
              <th>Name</th>
              <th>Description</th>
              <th>sex</th>
              <th>age</th>
              <th>weight</th>
              <th>height</th>
              <th>race</th>
          @auth  <th style="max-width:50px">actions</th> @endauth
            </tr>
              @foreach ($animals as $key => $animal)
                <tr>

              <td>{{$animal->name}}</td>
              <td>{{$animal->description}}</td>
              <td>{{$animal->sex}}</td>
              <td>{{$animal->age}}</td>
              <td>{{$animal->weight}}</td>
              <td>{{$animal->height}}</td>
              <td>{{$animal->race->name}}</td>
              @auth @if (Auth::user()->role == "admin")  <td style="max-width:50px"> <i class="fa fa-pencil" aria-hidden="true"></i> <a style="padding-right:50px" href="animals/{{$animal->id}}/edit">Update</a>  <i class="fa fa-trash" aria-hidden="true"></i> <a href="/animals/{{$animal->id}}/destroy">delete</a></td> @endif @endauth
              </tr>
        @endforeach
        </table></div>
        <div class="col-md-1"></div>
    </div>
</div>

@endsection
