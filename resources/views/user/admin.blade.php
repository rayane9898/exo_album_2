@extends('layout/admin/masterAdmin')
@section('title')
    list User Administration
@endsection


@section('titleH2')
    Liste des Users
@endsection

@section('content')
    <section class="container">
        <h1 class="text-center my-5"></h1>
        <div class="text-center my-5">
        <a class="text-center" href="{{route("createUser")}}"><button type="button" class="btn btn-outline-primary">Ajouter</button></a>
        </div>
        <table class="table table-primary table-hover">
            <thead>
                <tr>
                    <th colspan="6">

                        <h3 class="text-center">Tableau dynamique d'Users</h3>
                    </th>
                </tr>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>

                    <th class="text-center" colspan="3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                    <td class="text-center"> 
                    <a href="{{route("editUser", $user->id)}}"><button type="button" class="btn btn-success">Modifier</button></a></td>
                    <td class="text-center">
                    <a href="{{route("showAlbum",$user->id)}}"><button type="button" class="btn btn-primary">Show</button></a>
                        </td>
                    <td class="text-center">
                    <a href="{{route("destroyUser", $user->id)}}"><button type="button" class="btn btn-danger">Supprimer</button></a>
                    </td>
                </tr>    
                @endforeach
            </tbody>
        </table>  
@endsection