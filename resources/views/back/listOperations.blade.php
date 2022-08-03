@section('title')
  Comptes opss
  
@endsection


@extends('back.layout.admin')
 
@section('content')


 
    <section class="section">
        <div class="row">
           <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Toutes les Opérations</h5>
                <p>Liste complète des opérations sur comptes opss.</p>

                    <!-- Table with stripped rows -->
                <table class="table datatable">
                    <thead>
                    <tr>
                        <th scope="col">Type Opérations</th>
                        <th scope="col">Support</th>
                        <th scope="col">Montant</th>
                        <th scope="col">Montant de Virement</th>
                        <th scope="col">Montant de Dépôt</th>
                        <th scope="col">Raison</th>

                        <th scope="col">Statut</th>
                        <th scope="col">Bénéficiaire</th>
                        <th scope="col">Code 1</th>
                        <th scope="col">Code 2</th>
                        <th scope="col">Code 3</th>
                        <th scope="col">Témoin</th>
                        <th scope="col">Mail Témoin</th>
                        <th scope="col">Phone Témoin</th>
                        <th scope="col">Percentage</th>
                        <th scope="col">Date de Demande</th>
                        <th scope="col">Actions</th>
                     </tr>
                    </thead>
                    <tbody>
                    @foreach ($opsClient as $ops)
                     <tr>
                        <td> {{ $ops->typeOperation}}</td>
                        <td> {{ $ops->support}}</td>
                        <td>  {{ $ops->montant}}</td>
                        <td>  {{ $ops->montantVire}}</td>
                        <td>  {{ $ops->montantDepot}}</td>
                        <td>  {{ $ops->raison}}</td>
                        <td>  {{ $ops->pending}}</td>

                        <td> {{ $ops->receveu}}</td>
                        <td> {{ $ops->code1}}</td>
                        <td>  {{ $ops->code2}}</td>
                        <td>  {{ $ops->code3}}</td>
                        <td>  {{ $ops->temois}}</td>
                         <td>  {{ $ops->temoinsMail1}}</td>
                        <td>  {{ $ops->temoinsPhone1}}</td>
                        <td>  {{ $ops->percentage}}</td>
                        <td>  {{ $ops->created_at}}</td>
                     
                        <td>
                           
                           <a href="{{ route('back.opt', $ops->id) }}" class="btn btn-sm bg-success-light mr-2">
                               <i class="fe fe-pencil"></i> Modifier
                            </a>
                           <a href="{{ route('back.deleteOps', $ops->id) }}" class="btn btn-sm bg-danger-light">
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