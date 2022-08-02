@extends('back.layout.admin')
 
@section('content')
 
 
 

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
 

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Listes des comptes créés <span></span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Client</th>
                        <th scope="col">Email</th>
                        <th scope="col">Dépot initial</th>
                        <th scope="col">Solde actuel</th>
                      </tr>
                    </thead>
                    <tbody>
                    		@foreach ($clients as $client)
                       
                     <tr>
                        <td> {{ $client->lastname . ' ' . $client->firstname}}</td>
                        <td>  {{ $client->email}}</td>
                        <td>{{ $client->compteSolde . ' ' . $client->devise}}</td>
                        <td>{{ $client->solde . ' ' . $client->devise}}</td>
                      </tr>
                      @endforeach
                    
                     
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->
 

          </div>
        </div><!-- End Left side columns -->

       

      </div>
    </section>

  </main><!-- End #main -->
@endsection