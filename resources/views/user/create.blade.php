@extends('layout/admin/masterAdmin')
@section('title')
    list User Administration
@endsection


@section('titleH2')
    Create Users
@endsection


@section('content')
<form action="{{route('storeUser')}}" method="POST">
    @csrf
    <section class="text-center">
        <div class="container">
            <h3 class="text-center my-3">Ajoute un user</h3>

            <input name="name" class="form-control form-control-lg my-3" type="text" placeholder="name">
            <input name="email" class="form-control form-control-lg my-3" type="text" placeholder="email">
        
            <input name="password" class="form-control form-control-lg my-3" type="text" placeholder="password">
            </div>

            <div class="text-center my-3">
                <button type="submit" class="btn btn-primary">Ajouter</button>

            </div>
        </section>

</form> 
@endsection