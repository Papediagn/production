@extends('template')
@section('titre')
    Ajouter un bloc
@endsection
@section('main')
    <div class="container col-md-10 mx-auto">
        {{-- protected $fillable=['designation','numero','longueur','largeur','hauteur','qualite','etat','date_entrer','heure_entrer','date_sortie','heure_sortie','machine_id']; --}}

        <div class="col-md-10 mx-auto border shadow p-2 rounded mt-2">
            <form  action="{{ route('blocs.store') }}" method="POST">
                @csrf
                {{-- <div class="mb-3 text-info text-center border mt-3">
                    <h1>Ajouter un Operateur</h1>
                </div> --}}
                <div class="row">
                    <div class="col-md-4 mx-auto">
                        <div class="mb-3">
                            Désignation:<input type="text" name="designation"
                                class="form-control @error('designation') is-invalid @enderror">
                            @error('designation')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            N°Bloc:<input type="text" name="numero"
                                class="form-control @error('numero') is-invalid @enderror">
                            @error('numero')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            Longueur:<input type="text" name="longueur"
                                class="form-control @error('longueur') is-invalid @enderror">
                            @error('longueur')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            Largeur:<input type="text" name="largeur"
                                class="form-control @error('largeur') is-invalid @enderror">
                            @error('largeur')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            Hauteur:<input type="text" name="hauteur"
                                class="form-control @error('hauteur') is-invalid @enderror">
                            @error('hauteur')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            Tonnage:<input type="text" name="tonnage" class="form-control" />
                        </div>
                        <div class="mb-3">
                            Qualité:<input type="text" name="qualite" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-4 mx-auto">
                        <div class="mb-3">
                            Observation:<input type="text" name="etat" class="form-control">

                        </div>
                        <div class="mb-3">
                            Date d'entrée:<input type="date" name="date_entrer" class="form-control">

                        </div>
                        <div class="mb-3">
                            Heure d'entrée:<input type="time" name="heure_entrer" class="form-control">

                        </div>
                        <div class="mb-3">
                            Date de sortie:<input type="date" name="date_sortie" class="form-control">

                        </div>
                        <div class="mb-3">
                            Heure de sortie:<input type="time" name="heure_sortie" class="form-control">

                        </div>
                        <div class="mb-3">
                            Machine:<select type="text" name="machine_id"
                                class="form-control @error('machine_id') is-invalid @enderror">
                            @error('machine_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <option value="" selected>***</option>
                            @foreach ($machines as $m)
                            <option value="{{$m->id}}">{{$m->libelle}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <button class="d-block col-md-6 mx-auto btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>
@endsection
