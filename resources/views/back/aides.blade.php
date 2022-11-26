@section('title')
Emprunts Effectués  
@endsection


@extends('back.layout.admin')
 
@section('content')
<section class="section">
    <div class="row">
       <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
            <h5 class="card-title">Demandes de Prèts</h5>
            <p>Liste complète des demandes par ordre croissante.</p>

            <!-- Table with stripped rows -->
            <table class="table datatable">
                <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Email</th>

                    <th scope="col">Montant de Prèt</th>
                    <th scope="col">Délai</th>

                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($aides as $demande)
                   
                 <tr>
                    <td> {{ $demande->lastname}}</td>
                    <td> {{ $demande->firstname}}</td>
                    <td>  {{ $demande->email}}</td>
             
  
                    <td>{{ $demande->montant . ' ' . $demande->devise}}</td>
                    <td>{{ $demande->delai . ' mois '}}</td>
                     <td>
                       <a href="{{ route('back.detailDemandeAide', $demande->id) }}" class="btn btn-sm bg-success-light mr-2">
                           <i class="fe fe-pencil"></i> Détail
                        </a>
                     
                        <a href="{{ route('back.deleteDemandeAide', $demande->id) }}" class="btn btn-sm bg-danger-light">
                            <i class="fe fe-trash"></i> Supprimer
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