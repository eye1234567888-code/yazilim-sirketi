<header class="header" id="header">
    <div class="container">
        <div class="nav-container">
            <a href="{{ route('home') }}" class="nav-logo">
                <i class="fas fa-cubes"></i>
                <span>Yazılım</span> Şirketi
            </a>

            <button class="nav-toggle" id="navToggle" aria-label="Menü">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <div class="nav-menu" id="navMenu">
                <ul class="nav-list">
                    <!-- ANA SAYFA -->
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link">
                            <i class="fas fa-home"></i> Ana Sayfa
                        </a>
                    </li>

                    <!-- HAKKIMIZDA -->
                    <li class="nav-item">
                        <a href="{{ route('about') }}" class="nav-link">
                            <i class="fas fa-building"></i> Hakkımızda
                        </a>
                    </li>

                    <!-- HİZMETLER - MEGA MENÜ -->
                    <li class="nav-item">
                        <a href="{{ route('services') }}" class="nav-link">
                            <i class="fas fa-cogs"></i> Hizmetlerimiz <i class="fas fa-chevron-down"></i>
                        </a>
                        <div class="mega-menu-content">
                            <div class="mega-menu-grid">
                                <div class="mega-menu-col">
                                    <ul>
                                        <li><a href="{{ route('services') }}"><i class="fas fa-users"></i> CRM Çözümleri</a></li>
                                        <li><a href="{{ route('services') }}"><i class="fas fa-industry"></i> Sektörel Çözümler</a></li>
                                        <li><a href="{{ route('services') }}"><i class="fas fa-shopping-cart"></i> E-Ticaret</a></li>
                                        <li><a href="{{ route('services') }}"><i class="fas fa-sync-alt"></i> E-Dönüşüm</a></li>
                                    </ul>
                                </div>
                                <div class="mega-menu-col">
                                    <ul>
                                        <li><a href="{{ route('services') }}"><i class="fas fa-cubes"></i> ERP Çözümleri</a></li>
                                        <li><a href="{{ route('services') }}"><i class="fas fa-mobile-alt"></i> Mobil Çözümler</a></li>
                                        <li><a href="{{ route('services') }}"><i class="fas fa-code"></i> Web Geliştirme</a></li>
                                        <li><a href="{{ route('services') }}"><i class="fas fa-cloud"></i> Bulut Çözümleri</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- REFERANSLARIMIZ -->
                    <li class="nav-item">
                        <a href="{{ route('home') }}#testimonials" class="nav-link">
                            <i class="fas fa-handshake"></i> Referanslarımız
                        </a>
                    </li>

                    <!-- PROJELERİMİZ -->
                    <li class="nav-item">
                        <a href="{{ route('projects') }}" class="nav-link">
                            <i class="fas fa-project-diagram"></i> Projelerimiz
                        </a>
                    </li>

                    <!-- HABERLER -->
                    <li class="nav-item">
                        <a href="{{ route('blog') }}" class="nav-link">
                            <i class="fas fa-newspaper"></i> Haberler
                        </a>
                    </li>

                    <!-- BİLGİLERİMİZ -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-info-circle"></i> Bilgilerimiz
                        </a>
                    </li>

                    <!-- İLETİŞİM -->
                    <li class="nav-item">
                        <a href="{{ route('contact') }}" class="nav-link btn-primary">
                            <i class="fas fa-envelope"></i> İletişim
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
