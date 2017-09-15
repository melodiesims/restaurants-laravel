@extends('templates.admin')

@section('title', 'Liste des restaurants')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <td>Actions</td>
            <td>id</td>
            <td>nom</td>
            <td>adresse</td>
            <td>cp</td>
            <td>ville</td>
            <td>tel</td>
            <td>description</td>
            <td>dateouverture</td>
        </tr>
        </thead>
        <tbody>
        @foreach($restaurant as $restaurants)
            <tr>
                <td>
                    <a href="{{route('AdminRestotDestroy', ['id'=>$restaurant->id])}}">Supprimer</a>
                    <a href="{{route('AdminRestotEdit', ['id'=>$restaurant->id])}}">Editer</a>
                    <a href="{{route('AdminRestotShow', ['id'=>$restaurant->id])}}">Afficher</a>
                </td>
                <td>{{$restaurant->id}}</td>
                <td>{{$restaurant->nom}}</td>
                <td>{{$restaurant->adresse}}</td>
                <td>{{$restaurant->cp}}</td>
                <td>{{$restaurant->ville}}</td>
                <td>{{$restaurant->tel}}</td>
                <td>{{$restaurant->description}}</td>
                <td>{{$restaurant->dateouverture}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection