@extends('layout/admin/masterAdmin')
@section('title')
    list Album Administration
@endsection


@section('titleH2')
    Create Album
@endsection


@section('content')
<form action="{{route("storeAlbum")}}" method="POST">
    @csrf
    <section class="text-center">
        <div class="container">

            <input name="name" class="form-control form-control-lg my-3" type="text" placeholder="nom">
            <input name="description" class="form-control form-control-lg my-3" type="text" placeholder="description">
        
            <select name="id_user"class="form-control form-control-lg">
                @foreach ($users as $user)
                    
            <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
        </div>



            <div class="text-center my-3">
                <button type="submit" class="btn btn-primary">Ajouter</button>

            </div>
        </section>

</form> 
@endsection