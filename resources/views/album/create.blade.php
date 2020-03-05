@extends('layout/admin/masterAdmin')
@section('title')
    list Album Administration
@endsection


@section('titleH2')
    Create Album
@endsection


@section('content')
<form action="" method="POST">
    @csrf
    <section class="text-center">
        <div class="container">

            <input name="name" class="form-control form-control-lg my-3" type="text" placeholder="name">
            <input name="description" class="form-control form-control-lg my-3" type="text" placeholder="description">
        
            </div>

            <div class="text-center my-3">
                <button type="submit" class="btn btn-primary">Ajouter</button>

            </div>
        </section>

</form> 
@endsection