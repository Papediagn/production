@extends('template')
@section('titre')
    Liste des Blocs
@endsection
@section('main')
    <div class="col-md-12">
        <div class="white_shd full margin_bottom_30">

            <div class="table_section padding_infor_info">
                <div class="table-responsive-sm">
                    <table  class="table table-striped table-bordered text-inline text-center table-borderless border-0 border-b-2 brc-default-l1 table-condensed"" id="bloc">
                        <thead class="bg-none bgc-default-tp1">
                            <tr>
                                <th scope="col">Désignation</th>
                                <th scope="col">N°Bloc</th>
                                <th scope="col">Long</th>
                                <th scope="col">Larg</th>
                                <th scope="col">Haut</th>
                                <th scope="col">M3</th>
                                <th scope="col">Ton</th>
                                <th scope="col">Qlté</th>
                                <th scope="col">Obs</th>
                                <th   scope="col">Date d'Entrée</th>
                                <th scope="col">Heure d'entrée</th>
                                <th scope="col">Date de sortie</th>
                                <th scope="col">Heure de sortie</th>
                                <th scope="col">Machine</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blocs as $b)
                                @php
                                    $m = number_format($b['longueur'] * $b['largeur'] * $b['hauteur'], 2);
                                @endphp
                                {{-- {{$m = number_format(($b['longueur'] * $b['largeur']) * $b['hauteur'], 2)}};
            {{$n = number_format((($b['longueur'] * $b['largeur']) * $b['hauteur']) * 2.7, 3)}}; --}}
                                <tr>
                                    <td>{{ $b->designation }}</td>
                                    <td>{{ $b->numero }}</td>
                                    <td>{{ $b->longueur }}</td>
                                    <td>{{ $b->largeur }}</td>
                                    <td>{{ $b->hauteur }}</td>
                                    <td>{{ $m }}</td>
                                    <td>{{ $b->tonnage }}</td>
                                    <td>{{ $b->qualite }}</td>
                                    <td>{{ $b->etat }}</td>
                                    <td class="text-group" width="100%">{{ $b->date_entrer }}</td>
                                    <td>{{ $b->heure_entrer }}</td>
                                    <td>{{ $b->date_sortie }}</td>
                                    <td>{{ $b->heure_sortie }}</td>
                                    <td>{{ $b->machine->libelle }}</td>
                                    <td class="btn-group">
                                        <form style="display: inline" action="{{ route('blocs.destroy', $b) }}"
                                            onclick="return confirm('Voulez-vous supprimer?')" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button  class="btn btn-danger"> <i class="fa fa-trash"
                                                    aria-hidden="true"></i></button>
                                        </form>
                                        <a style="display: inline" onclick="return confirm('Voulez-vous modifier?')"
                                            href="{{ route('blocs.edit', $b) }}" class="btn btn-success"><i
                                                class="fa fa-edit" aria-hidden="true"></i></a>
                                    </td>



                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('#bloc').DataTable({
                language: {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
                }
            });

        });
    </script>
@endpush
