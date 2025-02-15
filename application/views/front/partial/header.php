<header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark stroke">
                <h1><a class="navbar-brand" href="index.html">
                        SMK M Kretek
                    </a></h1>
                <!-- if logo is image enable this   
      <a class="navbar-brand" href="#index.html">
          <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
      </a> -->
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    
                    <ul class="navbar-nav mr-auto" style="margin-left:500px;">
                        <li class="nav-item <?=$active == 'home' ? 'active' : ''?>">
                            <a class="nav-link" href="<?=base_url('front/Home')?>">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item <?=$active == 'guru' ? 'active' : ''?>">
                            <a class="nav-link" href="<?=base_url('front/DataGuru')?>">Data Guru</a>
                        </li>
                        <li class="nav-item <?=$active == 'jurusan' ? 'active' : ''?>">
                            <a class="nav-link" href="<?=base_url('front/DataJurusan')?>">Jurusan</a>
                        </li>
                       
                        <li class="nav-item <?=$active == 'contact' ? 'active' : ''?>">
                            <a class="nav-link" href="<?=base_url('front/DataContact')?>">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- toggle switch for light and dark theme -->

                <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container py-1">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>