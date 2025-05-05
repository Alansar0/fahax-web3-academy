<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- <style>
        /* Carousel Container */
        .main-content {
        flex-grow: 1;
        padding: 8px;
     }
        .carousel-container {
        margin-top:-4px;
        }
    </style> -->
</head>
<body>

        <!-- Main Content -->
        <main class="main-content">
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
                                <img src="{{ asset('img/illustration.png') }} " alt="Welcome Image">
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
                    <img src="{{ asset('img/caculator.png') }}" alt="tips Icon" class="icon">
                </div>
                <h3 class="feature-title">tips</h3>
                <p class="feature-description">Guidance from experts to help you grow.</p>
            </div>
            <div class="feature-card">
                <div class="icon-container">
                <li><a href="#"><i id="gaspay" class="fa-solid fa-fire"  style="font-size: 2.5em;"></i></a></li>
                </div>
                <h3 class="feature-title">GasPay</h3>
                <p class="feature-description">Guidance from experts to help you grow.</p>
            </div>
            <div class="feature-card">
                <div class="icon-container">
                    <img src="{{ asset('img/explorer.png') }}" alt="tips Icon" class="icon">
                </div>
                <h3 class="feature-title">Explorer</h3>
                <p class="feature-description">Guidance from experts to help you grow.</p>
            </div>
            <div class="feature-card">
                <div class="icon-container">
                    <img src="{{ asset('img/tips.png') }}" alt="tips Icon" class="icon">
                </div>
                <h3 class="feature-title">tips</h3>
                <p class="feature-description">Guidance from experts to help you grow.</p>
            </div>
            <div class="feature-card">
                <div class="icon-container">
                    <img src="{{ asset('img/ecosystem.png') }}" alt="tips Icon" class="icon">
                </div>
                <h3 class="feature-title">Ecosystem</h3>
                <p class="feature-description">Guidance from experts to help you grow.</p>
            </div>

            <div class="feature-card">
                <div class="icon-container">
                    <img src="{{ asset('img/community.png') }}" alt="tips Icon" class="icon">
                </div>
                <h3 class="feature-title">Community</h3>
                <p class="feature-description">Guidance from experts to help you grow.</p>
            </div>
            </section>
            </div>
        </main>
</body>
</html>
