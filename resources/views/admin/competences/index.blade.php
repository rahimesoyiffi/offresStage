@extends('admin.layouts.sub-admin-layout')

@section('title-page')
Compétences
@endsection
@section('content')
<h1>Les compétences </h1>
<div class="row mb-3">
    <div class="col-lg-6 py-3">
        <div class="table-responsive">
            <table class="table table-condensed table-hover table-striped ng-table">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Etat & Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($competences as $competence)
                    <tr>
                        <td>{{$competence->id}}</td>
                        <td>
                            {{$competence->nom}}
                        </td>
                        <td>
                            <div style="display: flex;">
                                <form action="
                                    {{ url("/admin/competences/{$competence->id}") }}" method="POST"> @csrf
                                    @method('DELETE')<button class="btn btn-danger m-1">Supprimer</button>
                                </form>
                                <a class="btn btn-secondary m-2" href=" 
                                    {{ route('competences.edit') }}">Modifier</a>
                            </div>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$competences->links()}}
        </div>

    </div>
    <div class="col-lg-6">
        <form action="{{ route('competences.create') }}" method="POST">
            @csrf
            <div>
                <input class="form-control m-2" type="text" name="nom" placeholder="Nom">
                <button class="btn btn-primary m-2">Ajouter</button>

            </div>
        </form>
    </div>
</div>

@endsection