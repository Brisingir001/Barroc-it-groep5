@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">



                <div class="panel panel-default">
                    <div class="panel-heading"><p class="title-details">Voornaam:</p>{{ $task->voornaam }}</div>
                    <div class="panel-heading"><p class="title-details">Achternaam:</p>{{ $task->achternaam }}</div>
                    <div class="panel-heading"><p class="title-details">Adres:</p>{{ $task->adres }}</div>
                    <div class="panel-heading"><p class="title-details">Postcode:</p>{{ $task->postcode }}</div>
                    <div class="panel-heading"><p class="title-details">Telefoonnummer:</p>{{ $task->telefoon }}</div>
                    <div class="panel-heading"><p class="title-details">E-mail:</p>{{ $task->email }}</div>
                    <div class="panel-heading"><p class="title-details">IBAN:</p>{{ $task->iban }}</div>

                    <div class="panel-body"><p class="title-details">Opmerkingen:</p>{{ $task->body }}</div>
                </div>



            </div>
        </div>
    </div>
@endsection
