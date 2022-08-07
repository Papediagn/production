@extends('template')
@section('titre')
    Liste des Machines
@endsection
@section('main')
    <div class="col-md-12">
        <div class="white_shd full margin_bottom_30">
            <div class="table-responsive-sm">
                <table class="table table-striped table-bordered  table-borderless border-0 border-b-2 brc-default-l1 table-condensed" id="mac">
                    <thead class="bg-none bgc-default-tp1">
                        <tr>
                            <th width="20" scope="col">Machine</th>
                            <th width="100" scope="col">Prénom</th>
                            <th width="100" scope="col">Nom</th>
                            <th width="20" scope="col">Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($machines as $m)
                            <tr>
                                <td>{{ $m->libelle }}</td>
                                <td>{{ $m->operateur->prenom }}</td>
                                <td>{{ $m->operateur->nom }}</td>
                                <td class="">
                                    <form style="display: inline"  action="{{ route('machines.destroy', $m) }}"
                                        onclick="return confirm('Voulez-vous supprimer?')" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger"> <i class="fa fa-trash"
                                                aria-hidden="true"></i></button>
                                    </form>
                                    <a onclick="return confirm('Voulez-vous modifier?')"
                                        href="{{ route('machines.edit', $m) }}" class="btn btn-success"><i class="fa fa-edit"
                                            aria-hidden="true"></i></a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
<script>
    $(document).ready(function () {
        $('#mac').DataTable({
            language: {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
            }

        });
    });
</script>
@endpush

