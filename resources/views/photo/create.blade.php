@extends('layout/admin/masterAdmin')
@section('title')
    list Photo Administration
@endsection


@section('titleH2')
    Create Photo
@endsection


@section('content')
<form action="{{route("storePhoto")}}" method="POST">
    @csrf
    <section class="text-center">
        <div class="container">

            <input name="name" class="form-control form-control-lg my-3" type="text" placeholder="nom">
            <input name="url" class="form-control form-control-lg my-3" type="text" placeholder="url">
            <input name="description" class="form-control form-control-lg my-3" type="text" placeholder="description">
        
            <select name="id_album"class="form-control form-control-lg">
                @foreach ($albums as $album)
                    
            <option value="{{$album->id}}">{{$album->nom}}</option>
            @endforeach
        </select>
        </div>



            <div class="text-center my-3">
                <button type="submit" class="btn btn-primary">Ajouter</button>

            </div>
        </section>

</form> 
@endsection