<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            margin-top: 20px;
            color: #484b51;
        }

        .text-secondary-d1 {
            color: #728299 !important;
        }

        .page-header {
            margin: 0 0 1rem;
            padding-bottom: 1rem;
            padding-top: .5rem;
            border-bottom: 1px dotted #e2e2e2;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -ms-flex-align: center;
            align-items: center;
        }

        .page-title {
            padding: 0;
            margin: 0;
            font-size: 1.75rem;
            font-weight: 300;
        }

        .brc-default-l1 {
            border-color: #dce9f0 !important;
        }

        .ml-n1,
        .mx-n1 {
            margin-left: -.25rem !important;
        }

        .mr-n1,
        .mx-n1 {
            margin-right: -.25rem !important;
        }

        .mb-4,
        .my-4 {
            margin-bottom: 1.5rem !important;
        }

        hr {
            margin-top: 1rem;
            margin-bottom: 1rem;
            border: 0;
            border-top: 1px solid rgba(0, 0, 0, .1);
        }

        .text-grey-m2 {
            color: #888a8d !important;
        }

        .text-success-m2 {
            color: #86bd68 !important;
        }

        .font-bolder,
        .text-600 {
            font-weight: 600 !important;
        }

        .text-110 {
            font-size: 110% !important;
        }

        .text-blue {
            color: #478fcc !important;
        }

        .pb-25,
        .py-25 {
            padding-bottom: .75rem !important;
        }

        .pt-25,
        .py-25 {
            padding-top: .75rem !important;
        }

        .bgc-default-tp1 {
            background-color: rgba(121, 169, 197, .92) !important;
        }

        .bgc-default-l4,
        .bgc-h-default-l4:hover {
            background-color: #f3f8fa !important;
        }

        .page-header .page-tools {
            -ms-flex-item-align: end;
            align-self: flex-end;
        }

        .btn-light {
            color: #757984;
            background-color: #f5f6f9;
            border-color: #dddfe4;
        }

        .w-2 {
            width: 1rem;
        }

        .text-120 {
            font-size: 120% !important;
        }

        .text-primary-m1 {
            color: #4087d4 !important;
        }

        .text-danger-m1 {
            color: #dd4949 !important;
        }

        .text-blue-m2 {
            color: #68a3d5 !important;
        }

        .text-150 {
            font-size: 150% !important;
        }

        .text-60 {
            font-size: 60% !important;
        }

        .text-grey-m1 {
            color: #7b7d81 !important;
        }

        .align-bottom {
            vertical-align: bottom !important;
        }

        @media print {

            a,
            button,
            .noprint {
                display: none !important;

            }

            body,
            html {
                width: 100%;
            }

            body {
                overflow-y: hidden;
                overflow-y: scroll;
            }
        }
    </style>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <div class="page-content container">
        <div class="page-header text-blue-d2">
            {{-- <h1 class="page-title text-secondary-d1">
                Invoice
                <small class="page-info">
                    <i class="fa fa-angle-double-right text-80"></i>
                    ID: #111-222
                </small>
            </h1> --}}

            <div class="page-tools">
                <div class="action-buttons">
                    <button class="btn bg-white btn-light mx-1px text-95" onclick="window.print()" data-title="Print">
                        <i class="mr-1 fa fa-print text-primary-m1 text-120 w-2"></i>
                        Imprimer
                    </button>
                    <a href="{{ route('tranches.index') }}" class="btn bg-primary btn-primary mx-1px text-95">
                        <i class="mr-1  text-primary-m1 text-120 w-2"></i>
                        Consulter la production
                    </a>
                </div>
            </div>
        </div>

        <div class="container px-0">
            <div class="row mt-4">
                <div class="col-12 col-lg-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center text-150">
                                {{-- <i class="fa fa-book fa-2x text-success-m2 mr-1"></i> --}}
                                <span class="text-default-d3">SOREVET IMPORT EXPORT</span>
                            </div>
                        </div>
                    </div>
                    <!-- .row -->

                    {{-- <hr class="row brc-default-l1 mx-n1 mb-4" /> --}}

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="text-grey-m2">
                                <div class="my-1">
                                    <img class="img-responsive" src="{{ asset('images/logo/logoo.png') }}"
                                        alt="" sizes="" srcset="">
                                </div>
                                <div class="my-1">
                                    Street, City
                                </div>
                                <div class="my-1">
                                    State, Country
                                </div>
                                <div class="my-1"><i class="fa fa-phone fa-flip-horizontal text-secondary"></i> <b
                                        class="text-600">111-111-111</b></div>
                            </div>
                        </div>
                        <!-- /.col -->

                        <div class="text-95 col-sm-6 align-self-start d-sm-flex justify-content-end">
                            <hr class="d-sm-none" />
                            <div class="text-grey-m2">
                                <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span
                                        class="text-600 text-90">Date:</span>
                                    @php
                                        echo date('d/m/Y');
                                    @endphp
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>

                    <div class="mt-4">
                        <div class="row border-b-2 brc-default-l2"></div>
                        <!-- or use a table instead -->
                        <div style="overflow-x:auto;">
                            <div class="table-responsive">
                                <table style="max-width: 100%"
                                    class="table table-striped table-bordered text-center table-borderless border-0 border-b-2 brc-default-l1 table-condensed">

                                    <thead class="bg-none bgc-default-tp1">
                                        <tr>

                                            {{-- <th scope="col">#</th> --}}
                                            <th width="50" scope="col">Désign</th>
                                            <th width="30" scope="col">N°B</th>
                                            <th width="10" scope="col">Lo</th>
                                            <th width="10" scope="col">La</th>
                                            <th width="10" scope="col">H</th>
                                            <th width="30" scope="col">M3</th>
                                            <th width="30" scope="col">T</th>
                                            <th width="10" scope="col">Nb</th>
                                            <th width="10" scope="col">Lo</th>
                                            <th width="10" scope="col">La</th>
                                            <th width="10" scope="col">Ep</th>
                                            <th width="10" scope="col">M²</th>

                                            {{-- <th width="30" scope="col">Ob</th> --}}
                                            {{-- <th scope="col" class="noprint">Actions</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $total = 0;
                                            $rd = 0;
                                        @endphp
                                        @foreach ($blocs as $bloc)
                                            @php

                                                $total = $total + number_format($bloc['long'] * $bloc['larg'] * $bloc['quantite'], 2);
                                                $rd = number_format($total / $bloc->bloc['tonnage'], 2);
                                                $x = number_format($bloc['long'] * $bloc['larg'] * $bloc['quantite'], 2);
                                                $n = number_format($bloc->bloc['longueur'] * $bloc->bloc['largeur'] * $bloc->bloc['hauteur'], 2);
                                            @endphp
                                            <tr>
                                                {{-- <th scope="row">{{ $tranches->id }}</th> --}}
                                                <td>{{ $bloc->bloc->designation }}</td>
                                                <td>{{ $bloc->bloc->numero }}</td>
                                                <td>{{ $bloc->bloc->longueur }}</td>
                                                <td>{{ $bloc->bloc->largeur }}</td>
                                                <td>{{ $bloc->bloc->hauteur }}</td>
                                                <td>{{ $n }}</td>
                                                <td>{{ $bloc->bloc->tonnage }}</td>
                                                <td>{{ $bloc->quantite }}</td>
                                                <td>{{ $bloc->long }}</td>
                                                <td>{{ $bloc->larg }}</td>
                                                <td>{{ $bloc->epaisseur }}</td>
                                                <td>{{ $x }}</td>
                                                {{-- <td>{{ $bloc->observation }}</td> --}}
                                            </tr>
                                        @endforeach
                                        <tfoot>
                                            <th width="10" colspan="10"></th>
                                            <th width="10">Machine</th>
                                            <th width="10">{{ $bloc->bloc->machine->libelle }}</th>
                                        </tfoot>
                                    <tfoot>
                                        <th width="10" colspan="10"></th>
                                        <th width="10">Total</th>
                                        <th width="10"><?= $total ?>m²</th><br>

                                    </tfoot>
                                    <tfoot>
                                        <th width="10" colspan="10"></th>
                                        <th width="10">Rd</th>
                                        <th width="10"><?= $rd ?>m²/t</th>
                                    </tfoot>
                                </table>
                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
