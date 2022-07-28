  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top"  style="display:none ;background-color: #101720;">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{ route('front.home') }}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('') }}assets/img/logo.png" alt=""> 
        <h1>RFGB</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ route('front.home') }}"   class="{{ Request::segment(1) === '' ? 'active' : null }}" >Accueil</a></li>
          <li><a href="{{ route('front.about') }}" class="{{ Request::segment(1) === 'about' ? 'active' : null }}">Découverte</a></li>
          <li><a href="{{ route('front.services') }}" class="{{ Request::segment(1) === 'services' ? 'active' : null }}">Services</a></li>
          <li><a href="{{ route('front.prot') }}" class="{{ Request::segment(1) === 'prot' ? 'active' : null }}">Votre sécurité</a></li>
          <li><a href="{{ route('front.contact') }}" class="{{ Request::segment(1) === 'contact' ? 'active' : null }}">Contact</a></li>
          <!--li><a href="https://wa.me/40751819445">WhatsApp  <i style="color:green; font-size: " class="fa fa-whatsapp"></i></a></li-->
          <li  style="margin-left:100px">
          <a class="get-a-quote" class="{{ Request::segment(1) === 'compte' ? 'active' : null }} get-a-quote" href="{{ route('front.compte') }}" >Espace Client</a></li>
          <li   style="margin-left:50px"  class="dropdown"><a href="#"><span>Langues</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul >
              <li><a href="javascript:void()"  onclick="window.location.hash='#googtrans(en)';location.reload();"><img src="{{ asset('assets/lang/en.png') }}">Anglais</a></li>
              <li><a href="javascript:void()"  onclick="window.location.hash='#googtrans(de)';location.reload();"><img src="{{ asset('assets/lang/de.png') }}">Allemend </a></li>
              <li><a href="javascript:void()"  onclick="window.location.hash='#googtrans(es)';location.reload();"><img src="{{ asset('assets/lang/es.png') }}">Espagnol </a></li>
              <li><a href="javascript:void()"  onclick="window.location.hash='#googtrans(fr)';location.reload();"><img src="{{ asset('assets/lang/fr.png') }}">Français</a></li>
              <li><a href="javascript:void()"  onclick="window.location.hash='#googtrans(nl)';location.reload();"><img src="{{ asset('assets/lang/nl.png') }}">NL</a></li>
              <li><a href="javascript:void()"  onclick="window.location.hash='#googtrans(lv)';location.reload();"><img src="{{ asset('assets/lang/lv.png') }}">Lv</a></li>
              <li><a href="javascript:void()"  onclick="window.location.hash='#googtrans(sk)';location.reload();"><img src="{{ asset('assets/lang/sk.png') }}">SK</a></li>
              <li><a href="javascript:void()"  onclick="window.location.hash='#googtrans(sl)';location.reload();"><img src="{{ asset('assets/lang/sl.png') }}">Slovaquie</a></li>
              <li><a href="javascript:void()"  onclick="window.location.hash='#googtrans(mt)';location.reload();"><img src="{{ asset('assets/lang/mt.png') }}">MT </a></li>
              <!-- Code provided by Google -->
            </ul>
          </li>
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
            alert("Error:Impossible de traduire dans cette langue.");
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
