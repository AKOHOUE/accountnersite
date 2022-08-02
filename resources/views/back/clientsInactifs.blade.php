@section('title')
  Comptes Inactifs
  
@endsection


@extends('back.layout.admin')
 
@section('content')


 
    <section class="section">
        <div class="row">
           <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Comptes Clients Inactifs</h5>
                <p>Liste complète des comptes inactifs  par ordre décroissante.</p>

                <!-- Table with stripped rows -->
                <table class="table datatable">
                    <thead>
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Email</th>

                        <th scope="col">Téléphone</th>
                        <th scope="col">Pays</th>

                        <th scope="col">Adresse</th>
                        <th scope="col">Date de création de compte</th>
                        <th scope="col">Solde Initial</th>

                        <th scope="col">Solde</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($clientsInactifs as $client)
                       
                     <tr>
                        <td> {{ $client->lastname}}</td>
                        <td> {{ $client->firstname}}</td>
                        <td>  {{ $client->email}}</td>
                        <td>  {{ $client->phone}}</td>
                        <td>  {{ $client->country}}</td>
                        <td>  {{ $client->adresse}}</td>
                        <td>  {{ $client->created_at}}</td>
                        <td>{{ $client->compteSolde . ' ' . $client->devise}}</td>
                        <td>{{ $client->solde . ' ' . $client->devise}}</td>
                         <td>
                           
                           <a href="{{ route('back.activerVClient', $client->id) }}" class="btn btn-sm bg-success-light mr-2">
                               <i class="fe fe-pencil"></i> Activer
                            </a>
                              <a href="{{ route('back.depotsClient', $client->id) }}" class="btn btn-sm bg-success-light mr-2">
                               <i class="fe fe-pencil"></i> Entrer
                            </a>
                             
                         </td>

                      </tr>
                      @endforeach
               
                    </tbody>
                </table>
                <!-- End Table with stripped rows -->

                </div>
            </div>

            </div>
      </div>
    </section> 
@endsection