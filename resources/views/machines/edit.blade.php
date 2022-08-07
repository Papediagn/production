@extends('template')
@section('titre')
    Ajouter une machine
@endsection
@section('main')
    <div class="col-md-4 mx-auto border shadow p-2 rounded mt-2">
        <form action="{{ route('machines.update',$machines->id) }}" method="POST">
            @csrf
            {{-- <div class="mb-3 text-info text-center border mt-3">
                <h1>Ajouter un Operateur</h1>
            </div> --}}
            @method('PUT')
            <div class="mb-3">
                Nom de la machine:<input value="{{old('libelle',$machines->libelle)}}" type="text" name="libelle"
                    class="form-control @error('libelle') is-invalid @enderror">
                @error('libelle')
                    <span class="text-danger"> {{ $message }}</span>
                @enderror
            </div>

            <button class=" btn btn-primary">Ajouter</button>
        </form>
    </div>
@endsection
