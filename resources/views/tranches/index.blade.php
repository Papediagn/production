@extends('template')
@section('titre')
    Liste des tranches
@endsection
@section('main')
    <div class="col-md-12">
        <div class="white_shd full margin_bottom_30">

            <div class="table_section padding_infor_info">

                <div class="table-responsive-sm">
                    <table class="table table-striped table-bordered text-center table-borderless border-0 border-b-2 brc-default-l1 table-condensed" cellspacing="0" widh="100%"
                        id="tranche">

                        <thead class="bg-none bgc-default-tp1">
                            <tr>

                                {{-- <th scope="col">#</th> --}}
                                <th width="100" scope="col">Désignation</th>
                                <th width="50" scope="col">N°Bloc</th>
                                <th width="50" scope="col">Qualité</th>
                                <th width="50" scope="col">Long</th>
                                <th width="50" scope="col">Larg</th>
                                <th width="50" scope="col">Haut</th>
                                <th width="50" scope="col">M3</th>
                                <th width="50" scope="col">Tonne</th>
                                <th width="50" scope="col">Nbr</th>
                                <th width="50" scope="col">Long</th>
                                <th width="50" scope="col">Larg</th>
                                <th width="50" scope="col">Ep</th>
                                <th width="50" scope="col">M²</th>
                                <th width="50" scope="col">Obs</th>
                                <th width="50" scope="col" class="noprint">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tranches as $t)
                                @php
                                    $x = number_format($t['long'] * $t['larg'] * $t['quantite'], 2);
                                    $n = number_format($t->bloc['longueur'] * $t->bloc['largeur'] * $t->bloc['hauteur'], 2);
                                @endphp
                                {{-- {{$m = number_format(($b['longueur'] * $b['largeur']) * $b['hauteur'], 2)}};
            {{$n = number_format((($b['longueur'] * $b['largeur']) * $b['hauteur']) * 2.7, 3)}}; --}}
                                <tr>
                                    {{-- <th scope="row">{{ $t->id }}</th> --}}
                                    <td>{{ $t->bloc->designation }}</td>
                                    <td>{{ $t->bloc->numero }}</td>
                                    <td>{{ $t->bloc->qualite }}</td>
                                    <td>{{ $t->bloc->longueur }}</td>
                                    <td>{{ $t->bloc->largeur }}</td>
                                    <td>{{ $t->bloc->hauteur }}</td>
                                    <td>{{ $n }}</td>
                                    <td>{{ $t->bloc->tonnage }}</td>
                                    <td>{{ $t->quantite }}</td>
                                    <td>{{ $t->long }}</td>
                                    <td>{{ $t->larg }}</td>
                                    <td>{{ $t->epaisseur }}</td>
                                    <td>{{ $x }}</td>
                                    <td>{{ $t->observation }}</td>
                                    <td class="btn-group">
                                        <form style="display: inline" action="{{ route('tranches.destroy', $t) }}"
                                            onclick="return confirm('Voulez-vous supprimer?')" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger"> <i class="fa fa-trash"
                                                    aria-hidden="true"></i></button>
                                        </form>
                                        <a onclick="return confirm('Voulez-vous modifier?')"
                                            href="{{ route('tranches.edit', $t) }}" class="btn btn-success"><i
                                                class="fa fa-edit" aria-hidden="true"></i></a>
                                        <a
                                            href="{{ route('tranches', $t->bloc->id) }}" class="btn btn-primary"><i
                                                class="fa fa-print" aria-hidden="true"></i></a>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <!-- <th scope="col">#</th> -->
                                {{-- <th scope="col"></th> --}}
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col">Total</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>

                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('#tranche').DataTable({
                // responsive: true
                language: {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
                },
                dom: 'Bfrtip',
                buttons: [
                    'print', 'csv', 'excel', 'pdf', 'copy'
                ],

                footerCallback: function(row, data, start, end, display) {
                    var api = this.api();

                    // Remove the formatting to get integer data for summation
                    var intVal = function(i) {
                        return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i ===
                            'number' ? i : 0;
                    };

                    // Total over all pages
                    total = api
                        .column(12)
                        .data()
                        .reduce(function(a, b) {
                            return intVal(a) + intVal(b);
                        }, 0);

                    // Total over this page
                    pageTotal = api
                        .column(12, {
                            page: 'current'
                        })
                        .data()
                        .reduce(function(a, b) {
                            return intVal(a) + intVal(b);
                        }, 0);

                    // Update footer
                    $(api.column(12).footer()).html(pageTotal + 'M²', 0);
                },

            });
        });
    </script>
@endpush
