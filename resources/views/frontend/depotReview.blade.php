@section('title')
  Compte
  
@endsection
@extends('frontend.layouts.app')

@section('content')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Opération de dépôt sur votre Compte</h2>
           
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="{{ route('front.home') }}">Accueil</a></li>
            <li>Espace Client</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Get a Quote Section ======= -->
    <section id="get-a-quote" class="get-a-quote">
      <div class="container" data-aos="fade-up">

        <div class="row g-0">

          <div class="col-lg-5 quote-bg" style="background-image: url(assets/img/quote-bg.jpg);"></div>
                           
          <div class="col-lg-7">
            	Contactez votre gestionnaire de compte en cas de problèmes . <br> <br> <br>
                 Opération en cours ...
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 200px;" aria-valuenow="40" aria-valuemin="25%" aria-valuemax="100">{{$operation->percentage}}%</div>
                                </div>
          </div><!-- End Quote Form -->

        </div>

      </div>
    </section><!-- End Get a Quote Section -->

  </main><!-- End #main -->

  <script type="text/javascript">
            var percent = document.getElementById("percent");
            $(document).ready(function(){
                var tim = 5000;
                $(".progress-bar").animate({
                    width: parseFloat(percent.value) + "%"
                }, tim);

                width = percent.value ;
                tim2 = (tim-800) /width ;
                setInterval(function() {
                    var pVal = parseInt($('.progress-bar').text());
                    var pCnt = pVal + 1;
                    if (pCnt > width) {
                        clearInterval(pCnt);
                    } else {
                        $('.progress-bar').text(pCnt + '%');
                    }
                }
                ,tim2);
            });
        </script>
  @endsection