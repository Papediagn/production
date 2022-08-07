@extends('template')
@section('titre')
    Ajouter un opérateur
@endsection
@section('main')
    <div class="col-md-4 mx-auto border shadow p-2 rounded mt-2">
        <form action="{{route('operateurs.store')}}" method="POST">
            @csrf
        {{-- <div class="mb-3 text-info text-center border mt-3">
                <h1>Ajouter un Operateur</h1>
            </div> --}}
            <div class="mb-3">
                Nom:<input type="text" name="nom" class="form-control @error('nom')
                    is-invalid
                @enderror">
                @error('nom')
                   
                    <span class="text-danger"> {{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                Prenom:<input type="text" name="prenom" class="form-control @error('prenom')
                    is-invalid
                @enderror">
                @error('prenom')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                Telephone:<input type="text" name="telephone" class="form-control @error('telephone')
                    is-invalid
                @enderror">
                @error('telephone')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <button class=" btn btn-primary">Ajouter</button>
        </form>
    </div>
@endsection