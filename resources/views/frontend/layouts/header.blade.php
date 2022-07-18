  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top"  style="display:none ;background-color: #0e1d34;">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('') }}assets/img/logo.png" alt=""> 
        <h1>RFGB</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html" class="active">Accueil</a></li>
          <li><a href="about.html">Découverte</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="pricing.html">Votre sécurité</a></li>
        
          <li><a href="contact.html">Contact</a></li>
          <li><a class="get-a-quote" href="get-a-quote.html">Ouvrir un compte Epargne/ <br>Courant Personnel/d'Affaire</a></li>

          <li class="dropdown"><a href="#"><span>Langues</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul >

              <li>
                             <a href="javascript:void()"  onclick="window.location.hash='#googtrans(en)';location.reload();"><img src="{{ asset('assets/lang/en.png') }}" > Anglais</a>

              </li>
              <li>
                  <a href="javascript:void()"  onclick="window.location.hash='#googtrans(de)';location.reload();"><img src="{{ asset('assets/lang/de.png') }}" >Allemend </a>

              </li>

                    <li>
                  <a href="javascript:void()"  onclick="window.location.hash='#googtrans(es)';location.reload();"><img src="{{ asset('assets/lang/es.png') }}" >Espagnol </a>
              </li>
              <li>
                  <a href="javascript:void()"  onclick="window.location.hash='#googtrans(fr)';location.reload();"><img src="{{ asset('assets/lang/fr.png') }}" > Français</a>

              </li>

                 <li>
    <a href="javascript:void()"  onclick="window.location.hash='#googtrans(nl)';location.reload();"><img src="{{ asset('assets/lang/nl.png') }}" > NL</a>

              </li>
              <li>    <a href="javascript:void()"  onclick="window.location.hash='#googtrans(lv)';location.reload();"><img src="{{ asset('assets/lang/lv.png') }}" > lv</a>
</li>
<li>    <a href="javascript:void()"  onclick="window.location.hash='#googtrans(sk)';location.reload();"><img src="{{ asset('assets/lang/sk.png') }}" > SK</a>
</li>

<li>    <a href="javascript:void()"  onclick="window.location.hash='#googtrans(sl)';location.reload();"><img src="{{ asset('assets/lang/sl.png') }}" > Slovaquie</a>
</li>
<li>    <a href="javascript:void()"  onclick="window.location.hash='#googtrans(mt)';location.reload();"><img src="{{ asset('assets/lang/mt.png') }}" >MT </a>
</li>

<!-- Code provided by Google -->
    <div style="display:none ;background-color: blue;" >
        <div id="google_translate_element"></div>
        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'fr', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                }
        </script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    </div>

    <!-- Flag click handler -->
    <script type="text/javascript">
        $('.translation-links a').click(function() {
        var lang = $(this).data('lang');
        var $frame = $('.goog-te-menu-frame:first');
        if (!$frame.size()) {
            alert("Error: Could not find Google translate frame.");
            return false;
        }
        $frame.contents().find('.goog-te-menu2-item span.text:contains('+lang+')').get(0).click();
        return false;
        });
    </script>
            </ul>
          </li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- End Header -->
