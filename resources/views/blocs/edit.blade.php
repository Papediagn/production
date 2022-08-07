@extends('template')
@section('titre')
    Ajouter un opérateur
@endsection
@section('main')
    <div class="container col-md-10 mx-auto">
        {{-- protected $fillable=['designation','numero','longueur','largeur','hauteur','qualite','etat','date_entrer','heure_entrer','date_sortie','heure_sortie','machine_id']; --}}

        <div class="col-md-10 mx-auto border shadow p-2 rounded mt-2">
            <form  action="{{ route('blocs.update',$blocs->id) }}" method="POST">
                @csrf
                {{-- <div class="mb-3 text-info text-center border mt-3">
                    <h1>Ajouter un Operateur</h1>
                </div> --}}
                @method('PUT')
                <div class="row">
                    <div class="col-md-4 mx-auto">
                        <div class="mb-3">
                            Désignation:<input value="{{old('designation',$blocs->designation)}}"  type="text" name="designation"
                                class="form-control @error('designation') is-invalid @enderror">
                            @error('designation')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            N°Bloc:<input value="{{old('numero',$blocs->numero)}}" type="text" name="numero"
                                class="form-control @error('numero') is-invalid @enderror">
                            @error('numero')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            Longueur:<input value="{{old('longueur',$blocs->longueur)}}" type="text" name="longueur"
                                class="form-control @error('longueur') is-invalid @enderror">
                            @error('longueur')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            Largeur:<input value="{{old('largeur',$blocs->largeur)}}" type="text" name="largeur"
                                class="form-control @error('largeur') is-invalid @enderror">
                            @error('largeur')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            Hauteur:<input value="{{old('hauteur',$blocs->hauteur)}}" type="text" name="hauteur"
                                class="form-control @error('hauteur') is-invalid @enderror">
                            @error('hauteur')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            Qualité:<input value="{{old('qualite',$blocs->qualite)}}" type="text" name="qualite" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-4 mx-auto">
                        <div class="mb-3">
                            Observation:<input value="{{old('etat',$blocs->etat)}}" type="text" name="etat" class="form-control">

                        </div>
                        <div class="mb-3">
                            Date d'entrée:<input value="{{old('date_entrer',$blocs->date_entrer)}}" type="date" name="date_entrer" class="form-control">

                        </div>
                        <div class="mb-3">
                            Heure d'entrée:<input value="{{old('heure_entrer',$blocs->heure_entrer)}}" type="time" name="heure_entrer" class="form-control">

                        </div>
                        <div class="mb-3">
                            Date de sortie:<input value="{{old('date_sortie',$blocs->date_sortie)}}" type="date" name="date_sortie" class="form-control">

                        </div>
                        <div class="mb-3">
                            Heure de sortie:<input value="{{old('heure_sortie',$blocs->heure_sortie)}}" type="time" name="heure_sortie" class="form-control">

                        </div>
                    </div>
                </div>
                <button class="d-block col-md-6 mx-auto btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>
@endsection
