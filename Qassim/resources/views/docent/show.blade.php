@extends('docent.layout')
@section('content')

        <div class="card-header text-center p-3">
            <h3>Docent</h3>
        </div>
        <div class="card-body">
            <div class="card-body">
                <p class="card-title">Voornaam : {{ $docent->firstname }}</p>
                <p class="card-text">Achternaam : {{ $docent->lastname }}</p>
                <p class="card-text">E-mail : {{ $docent->email }}</p>
                <p class="card-text">Telefoon_nummer : {{ $docent->phone_number }}</p>
            </div>
            </hr>
        </div>
    </div>
