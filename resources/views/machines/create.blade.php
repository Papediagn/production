@extends('template')
@section('titre')
    Ajouter une machine
@endsection
@section('main')
    <div class="col-md-4 mx-auto border shadow p-2 rounded mt-2">
        <form action="{{ route('machines.store') }}" method="POST">
            @csrf
            {{-- <div class="mb-3 text-info text-center border mt-3">
                <h1>Ajouter un Operateur</h1>
            </div> --}}
            <div class="mb-3">
                Nom de la machine:<input type="text" name="libelle"
                    class="form-control @error('libelle') is-invalid @enderror">
                @error('libelle')
                    <span class="text-danger"> {{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                Opérateur:<select type="text" name="operateur_id" class="form-control">
                    <option value="" selected>***</option>
                    @foreach ($operateurs as $o)
                    <option value="{{$o->id}}">{{$o->prenom}} {{$o->nom}}</option>
                    @endforeach
                </select>
            </div>

            <button class=" btn btn-primary">Ajouter</button>
        </form>
    </div>
@endsection
