@extends('template')
@section('titre')
    Liste des tranches
@endsection
@section('main')
    <div class="col-md-12">
        <div class="white_shd full margin_bottom_30">

            <div class="table_section padding_infor_info">
                <div class="table-responsive-sm">
                    <table class="table table-striped table-bordered text-center" id="tranche">
                        <div class=" text-center">
                            <!-- <a href="#" onclick="window.print()" class="btn btn-info col-md-5">Imprimer</a> -->
                            <a href="" class="btn btn-primary col-md-2">Imprimer</a>
                        </div>
                        <thead>
                            <tr>
                                {{-- <th scope="col">#</th> --}}
                                <th scope="col">Désignation</th>
                                <th scope="col">N°Bloc</th>
                                <th scope="col">Qualité</th>
                                <th scope="col">Longueur</th>
                                <th scope="col">Largeur</th>
                                <th scope="col">Hauteur</th>
                                <th scope="col">M3</th>
                                <th scope="col">Tonnage</th>
                                <th scope="col">Quantité</th>
                                <th scope="col">Longueur</th>
                                <th scope="col">Largeur</th>
                                <th scope="col">Epaisseur</th>
                                <th scope="col">M²</th>
                                <th scope="col">Observation</th>
                                <th scope="col">Actions</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                                @php
                                    $x = number_format($tranches['long'] * $tranches['larg'] * $tranches['quantite'], 2);
                                    // $n = number_format($t->bloc['longueur'] * $t->bloc['largeur'] * $t->bloc['hauteur'], 2);
                                    // $m = number_format($t->bloc['longueur'] * $t->bloc['largeur'] * $t->bloc['hauteur'] * 2.7, 3);
                                @endphp
                                {{-- {{$m = number_format(($b['longueur'] * $b['largeur']) * $b['hauteur'], 2)}};
            {{$n = number_format((($b['longueur'] * $b['largeur']) * $b['hauteur']) * 2.7, 3)}}; --}}
                                <tr>
                                    {{-- <th scope="row">{{ $t->id }}</th> --}}
                                    {{-- <td>{{ $t->bloc->designation }}</td>
                                    <td>{{ $t->bloc->numero }}</td>
                                    <td>{{ $t->bloc->qualite }}</td>
                                    <td>{{ $t->bloc->longueur }}</td>
                                    <td>{{ $t->bloc->largeur }}</td>
                                    <td>{{ $t->bloc->hauteur }}</td> --}}
                                    {{-- <td>{{ $n }}</td>
                                    <td>{{ $m }}</td> --}}
                                    <td>{{ $tranches->quantite }}</td>
                                    <td>{{ $tranches->long }}</td>
                                    <td>{{ $tranches->larg }}</td>
                                    <td>{{ $tranches->epaisseur }}</td>
                                    <td>{{ $x }}</td>
                                    <td>{{ $tranches->observation }}</td>

                            {{-- @endforeach --}}
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
                language: {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
                },
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
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
