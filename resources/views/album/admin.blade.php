@extends('layout/admin/masterAdmin')
@section('title')
    list Album Administration
@endsection


@section('titleH2')
    Liste des Albums
@endsection

@section('content')
    <section class="container">
        <h1 class="text-center my-5"></h1>
        <div class="text-center my-5">
        <a class="text-center" href="{{route("createAlbum")}}"><button type="button" class="btn btn-outline-primary">Ajouter</button></a>
        </div>
        <table class="table table-primary table-hover">
            <thead>
                <tr>
                    <th colspan="6">

                        <h3 class="text-center">Tableau dynamique d'Album</h3>
                    </th>
                </tr>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>id_User</th>

                    <th class="text-center" colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($albums as $album) --}}
                <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                    <td class="text-center"> 
                    <a href=""><button type="button" class="btn btn-success">Modifier</button></a></td>
                    <td class="text-center">
                    <a href=""><button type="button" class="btn btn-danger">Supprimer</button></a>
                    </td>
                </tr>    
                {{-- @endforeach --}}
            </tbody>
        </table>  
@endsection