@section('title')
  Opérations
  
@endsection


@extends('back.layout.admin')
 
@section('content')


 
    <section class="section">
        <div class="row">
           <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Opérations(Dépots,Virements)</h5>
                <p>Liste complète des opérations par ordre décroissante.</p>

                <!-- Table with stripped rows -->
                <table class="table datatable">
                    <thead>
                    <tr>
                        <th scope="col">Client</th>
                        <th scope="col">Bénéficiaire</th>
                        <th scope="col">Email Client</th>

                        <th scope="col">Montant</th>
                        <th scope="col">Type Opérations</th>

                        <th scope="col">Date </th>

                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Brandon Jacob</td>
                        <td>Designer</td>
                        <td>28</td>
                        <td>2016-05-25</td>
                        <td>Brandon Jacob</td>
                        <td>Designer</td>
                   
                        <td>Détail    EDITER  SUPRIMMER</td>
                    </tr>
                    </tbody>
                </table>
                <!-- End Table with stripped rows -->

                </div>
            </div>

            </div>
      </div>
    </section> 
@endsection