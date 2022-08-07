@extends('template')
@section('titre')
    Liste des Opérateurs
@endsection
@section('main')
    <div class="col-md-12">
        <div class="white_shd full margin_bottom_30">
            <div class="table-responsive-sm">
                <table class=" table table-striped table-bordered " id="op">
                    <thead class="bg-none bgc-default-tp1">
                        <tr class="text-center">
                            {{-- <th scope="col">#</th> --}}
                            <th width="100" scope="col">Prénom</th>
                            <th width="100" scope="col">Nom</th>
                            <th width="100" scope="col">Téléphone</th>
                            <th width="20" scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($operateurs as $o)
                            <tr>
                                {{-- <th scope="row">{{ $o->id }}</th> --}}
                                <td>{{ $o->prenom }}</td>
                                <td>{{ $o->nom }}</td>
                                <td>{{ $o->telephone }}</td>

                                <td class="">
                                    <form action="{{ route('operateurs.destroy', $o) }}"
                                        onclick="return confirm('Voulez-vous supprimer?')" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button style="display: inline" class="btn btn-danger"> <i class="fa fa-trash"
                                                aria-hidden="true"></i></button>
                                                <a onclick="return confirm('Voulez-vous modifier?')"
                                                    href="{{ route('operateurs.edit', $o) }}" class="btn btn-success"><i
                                                        class="fa fa-edit" aria-hidden="true"></i></a>
                                    </form>
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
        $('#op').DataTable({
            language: {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
            }

        });
    });
</script>
@endpush

