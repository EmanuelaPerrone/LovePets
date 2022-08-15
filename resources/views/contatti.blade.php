@extends('layouts.app')

@section('title', 'LovePets | Contatti utili')

@section('content')
<header class="masthead" style="background-image: url('/img/contatti-banner.jpg'); padding-top: 4rem; padding-bottom: 4rem;">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                        <div class="banner-text text-center">
                            <h1>Contatti utili</h1>
                            <h2 class="subheading">Alcuni contatti come veterinari, associazioni, croce blu, protezione animali, 
                                che possono esserti d'aiuto in determinate situazioni...                            
                            </h2>
</div>
                        </div>
                    </div>
                </div>
            </div>
</header>
<ol class="breadcrumb justify-content-center">
    <li class="breadcrumb-item">Sei qui: <a href="{{ url('/') }}">Home</a></li>
    <li class="breadcrumb-item active"> <a href="{{ url('/contatti') }}"> Contatti utili</a></li>
  </ol>
<div class="main">
<table id="myTable" class="display" style="padding: 10px; margin-bottom: 5px;">
    <thead style="background-color: #2b4c9a; color: white;">
    <tr>
            <th>Nome</th>
            <th>Contatto</th>
            <th>Zona</th>
        </tr>
    </thead>
    <tbody>
        @foreach($contatto as $contatti)
        <tr>
            <td>{{ $contatti->nome }}</td>
            <td>{{ $contatti->telefono }}</td>
            <td>{{ $contatti->sede }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection