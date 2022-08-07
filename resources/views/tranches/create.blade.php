@extends('template')
@section('titre')
    Ajouter des tranches
@endsection
@section('main')
    <div class="col-md-4 mx-auto border shadow p-2 rounded mt-2">
        <form action="{{ route('tranches.store') }}" method="POST">
            @csrf
            {{-- <div class="mb-3 text-info text-center border mt-3">
                <h1>Ajouter un Operateur</h1>
            </div> --}}
{{-- protected $fillable =['long','larg','epaisseur','qunatite','observation','bloc_id']; --}}

            <div class="mb-3">
                Longueur:<input type="text" name="long"
                    class="form-control @error('long') is-invalid @enderror">
                @error('long')
                    <span class="text-danger"> {{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                Largeur:<input type="text" name="larg"
                    class="form-control @error('larg') is-invalid @enderror">
                @error('larg')
                    <span class="text-danger"> {{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                Epaisseur:<input type="text" name="epaisseur"
                    class="form-control @error('epaisseur') is-invalid @enderror">
                @error('epaisseur')
                    <span class="text-danger"> {{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                Quantité:<input type="number" name="quantite"
                    class="form-control @error('quantite') is-invalid @enderror">
                @error('quantite')
                    <span class="text-danger"> {{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                Observation:<input type="text" name="observation"
                    class="form-control @error('observation') is-invalid @enderror">
                @error('observation')
                    <span class="text-danger"> {{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                Bloc:<select type="text" name="bloc_id" class="form-control">
                    <option value="" selected>***</option>
                    @foreach ($blocs as $b)
                    <option value="{{$b->id}}">{{$b->numero}} {{$b->designation}}</option>
                    @endforeach
                </select>
            </div>

            <button class=" btn btn-primary">Ajouter</button>
        </form>
    </div>
@endsection
