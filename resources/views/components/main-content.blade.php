    <!-- Main Content -->
    <main class="main-content">
        <!-- Header -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <div id="desktop-view">
            <header class="header">
                <div class="search-bar">
                    <span class="search-icon">
                        <i class="material-icons">search</i>
                    </span>
                    <input type="text" placeholder="Search for something...">
                </div>
                <div class="user-info">
                    <div class="icon">
                        <i class="material-icons">chat</i>
                    </div>
                    <div class="icon">
                        <i class="material-icons">notifications</i>
                    </div>

                    <div class="avatar-container">
                        <i class="material-icons">account_circle</i>
                        <span class="dropdown-icon">
                            <i class="material-icons">arrow_drop_down</i>
                        </span>
                    </div>
                </div>
            </header>
        </div>



        <!-- Mobile View header-->
        <div id="mobile-view">
            <header class="header">
                <div class="logo">
                    <img src="{{ asset('img/logo.png') }}" alt="Welcome Image">
                    <span>Fahax Connect</span>
                </div>
                <i class="material-icons menu-icon" id="sidebarToggle">menu</i>
            </header>
        </div>

        <!-- Dynamic Content -->
        <div id="tab-content">
            <!-- Default Content -->
            <div class="carousel-container">
                <div class="carousel-slide active">
                    <div class="welcome-section">
                        <div class="welcome-text">
                            <h1>Hello Ansar! 👋</h1>
                            <p>It's good to see you again.</p>
                        </div>
                        <div class="welcome-illustration">
                            <img src="{{ asset('img/illustration.png') }}" alt="Welcome Image">
                        </div>
                    </div>
                </div>
                <div class="carousel-slide">
                    <div class="welcome-section">
                        <div class="welcome-text">
                            <h1>Welcome Back!</h1>
                            <p>Hope you're having a great day.</p>
                        </div>
                        <div class="welcome-illustration">
                            <img src="{{ asset('img/illustration.png') }}" alt="Welcome Image">
                        </div>
                    </div>
                </div>

                <div class="carousel-slide">
                    <div class="welcome-section">
                        <div class="welcome-text">
                            <h1>Keep Going!</h1>
                            <p>You're doing amazing work.</p>
                        </div>
                        <div class="welcome-illustration">
                            <img src="{{ asset('img/illustration.png') }}" alt="Welcome Image">
                        </div>
                    </div>
                </div>

                <!-- Dots for navigation -->
                <div class="carousel-dots">
                    <span class="dot active" data-slide="0"></span>
                    <span class="dot" data-slide="1"></span>
                    <span class="dot" data-slide="2"></span>
                </div>
            </div>

            <section class="features">
                <div class="feature-card">
                    <div class="icon-container">
                        <i class="fas fa-calculator"></i>
                    </div>
                    <h3 class="feature-title">Calculator</h3>
                    <p class="feature-description">Guidance from experts to help you grow.</p>
                </div>

                <div class="feature-card">
                    <div class="icon-container">
                        <i class="fas fa-fire" id="gaspay"></i>
                    </div>
                    <h3 class="feature-title">GasPay</h3>
                    <p class="feature-description">Guidance from experts to help you grow.</p>
                </div>

                <div class="feature-card">
                    <div class="icon-container">
                        <i class="fas fa-compass"></i>
                    </div>
                    <h3 class="feature-title">Explorer</h3>
                    <p class="feature-description">Guidance from experts to help you grow.</p>
                </div>

                <div class="feature-card">
                    <div class="icon-container">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3 class="feature-title">Tips</h3>
                    <p class="feature-description">Connect and engage with your community.</p>
                </div>

                <div class="feature-card">
                    <div class="icon-container">
                        <i class="fas fa-tree"></i>
                    </div>
                    <h3 class="feature-title">Ecosystem</h3>
                    <p class="feature-description">Collaborate and learn with peers.</p>
                </div>

                <div class="feature-card">
                    <div class="icon-container">
                        <i class="fas fa-users" style="margin-left:-10px"></i>
                    </div>
                    <h3 class="feature-title">Community</h3>
                    <p class="feature-description">Guidance from experts to help you grow.</p>
                </div>
            </section>
        </div>

        {{-- nav-bar --}}
        <div class="bottom-nav" id="bottom-nav">
            <div class="nav-item">
                <a href="/dashboard"> <i class="material-icons">home</i></a>
                <span>Home</span>
            </div>
            <div class="nav-item">
                <a href="/earn" class="tab-link" data-url="{{ route('academies.index') }}"> <i
                        class="material-icons">work</i></a>
                <span>Earn</span>
            </div>

            <div class="center-button  tab-link" data-url="{{ route('academies.index') }}">
                <i class="tab-link  material-icons" data-url="/academies.index">school</i>
                <!-- Centered action icon -->
            </div>

            <div class="nav-item">
                <a href="" class="tab-link" data-url="{{ route('profile0.index') }}"><i class="material-icons">newspaper</i></a>
                <span>News</span>
            </div>

            <div class="nav-item">
                <a href="" class="tab-link" data-url="{{ route('profile0.index')}}"><i
                        class="material-icons">person</i></a>
                <span>Profile</span>
            </div>
        </div>
    </main>
