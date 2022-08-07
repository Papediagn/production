@extends('template')
@section('titre')
    Ajouter des tranches
@endsection
@section('main')
    <div class="col-md-4 mx-auto border shadow p-2 rounded mt-2">
        <form action="{{ route('tranches.update', $tranches->id) }}" method="POST">
            @csrf
            @method('PUT')
            {{-- <div class="mb-3 text-info text-center border mt-3">
                <h1>Ajouter un Operateur</h1>
            </div> --}}
            {{-- protected $fillable =['long','larg','epaisseur','qunatite','observation','bloc_id']; --}}

            <div class="mb-3">
                Longueur:<input value="{{ old('long', $tranches->long) }}" type="text" name="long"
                    class="form-control @error('long') is-invalid @enderror">
                @error('long')
                    <span class="text-danger"> {{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                Largeur:<input value="{{ old('larg', $tranches->larg) }}" type="text" name="larg"
                    class="form-control @error('larg') is-invalid @enderror">
                @error('larg')
                    <span class="text-danger"> {{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                Epaisseur:<input value="{{ old('epaisseur', $tranches->epaisseur) }}" type="text" name="epaisseur"
                    class="form-control @error('epaisseur') is-invalid @enderror">
                @error('epaisseur')
                    <span class="text-danger"> {{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                Quantité:<input value="{{ old('quantite', $tranches->quantite) }}" type="number" name="quantite"
                    class="form-control @error('quantite') is-invalid @enderror">
                @error('quantite')
                    <span class="text-danger"> {{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                Observation:<input value="{{ old('observation', $tranches->observation) }}" type="text" name="observation"
                    class="form-control @error('observation') is-invalid @enderror">
                @error('observation')
                    <span class="text-danger"> {{ $message }}</span>
                @enderror
            </div>
            <button class=" btn btn-primary">Ajouter</button>
        </form>
    </div>
@endsection
