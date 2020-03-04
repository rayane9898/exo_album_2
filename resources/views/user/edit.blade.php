@extends('layout/admin/masterAdmin')
@section('title')
    Edit User Administration
@endsection


@section('titleH2')
    Edit des Users
@endsection

@section('content')  
<form action="{{route("updateUser", $user->id)}}" method="POST">
    @csrf
    <section class="text-center">
        <div class="container">

            <input value="{{$user->name}}" name="name" class="form-control form-control-lg my-3" type="text" placeholder="nom">
            <input value="{{$user->email}}" name="email" class="form-control form-control-lg my-3" type="text" placeholder="email">
        
            <input value="" name="password" class="form-control form-control-lg my-3" type="text" placeholder="newPassword">
            </div>

            <div class="text-center my-3">
                <button type="submit" class="btn btn-danger">Modifier</button>
            </div>
        </section>
</form>
@endsection
