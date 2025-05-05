

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Mobile scaling&#8203;:contentReference[oaicite:6]{index=6} -->
  <title>{{ config('app.name', 'CryptoAcademy') }} – Learn & Earn in Web3</title>
  <style>
    /* Global resets and base styles */
    *, *::before, *::after { box-sizing: border-box; }
    body { margin: 0; font-family: Arial, sans-serif; line-height: 1.6; color: #333; background: #f0f4f8; }
    img { max-width: 100%; height: auto; } /* Prevent overflow&#8203;:contentReference[oaicite:7]{index=7} */
    .container { max-width: 1200px; margin: 0 auto; padding: 0 1rem; }

    /* Header / Navigation */
    header { background: #fff; padding: 1rem 0; }
    .header-inner { display: flex; justify-content: space-between; align-items: center; }
    .logo { font-size: 1.5rem; font-weight: bold; }
    nav ul { list-style: none; display: flex; gap: 1rem; margin: 0; padding: 0; }
    nav a { text-decoration: none; color: #333; padding: 0.5rem 1rem; border-radius: 4px; }
    nav .btn-login { border: 1px solid #333; }
    nav a:hover { background: #eef2f7; }

    /* Hero Section */
    #hero { text-align: center; padding: 4rem 0;
             background: linear-gradient(135deg, #4f46e5 0%, #3b82f6 100%); color: #fff; }
    #hero h1 { font-size: 2.5rem; margin-bottom: 0.5rem; }
    #hero p { font-size: 1.25rem; margin-bottom: 1.5rem; }
    .btn-primary {
      display: inline-block;
      background: #10b981; color: #fff;
      padding: 0.75rem 1.5rem; border-radius: 25px;
      font-size: 1rem; text-decoration: none;
      min-width: 150px; text-align: center;
    }
    .btn-primary:hover { background: #059669; }

    /* Features Section */
    #features { padding: 3rem 0; }
    #features h2 { text-align: center; margin-bottom: 2rem; }
    .features-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 1rem;
    }
    .feature-card {
      background: #fff; border-radius: 8px; padding: 1.5rem;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1); text-align: center;
    }
    .feature-card h3 { margin-bottom: 0.75rem; }
    .feature-card p { color: #555; font-size: 0.95rem; }

    /* Testimonials Section */
    #testimonials { padding: 3rem 0; background: #eef2f7; }
    #testimonials h2 { text-align: center; margin-bottom: 2rem; }
    .testimonials-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 1rem;
    }
    .testimonial-card {
      background: #fff; border-radius: 8px; padding: 1.5rem;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    .testimonial-card p { font-style: italic; }
    .testimonial-card .author { margin-top: 1rem; font-weight: bold; text-align: right; color: #333; }

    /* Final CTA Section */
    #cta { text-align: center; padding: 3rem 0; }
    #cta h2 { margin-bottom: 1rem; }
    @media (max-width: 640px) {
      #hero h1 { font-size: 2rem; } /* Scale down on small screens */
    }
  </style>
</head>
<body>

<header>
  <div class="container header-inner">
    <div class="logo">{{ config('app.name', 'CryptoAcademy') }}</div> <!-- Dynamic app name -->
    <nav>
      <ul>
        <li><a href="">Courses</a></li>
        <li><a href="">Jobs</a></li>
        <li><a href="" class="btn-login">Login</a></li>
      </ul>
    </nav>
  </div>
</header>

<section id="hero">
  <div class="container">
    <h1>Join <span>{{ config('app.name', 'CryptoAcademy') }}</span> and Master Web3!</h1>
    <p>Earn while you learn blockchain, crypto, and DeFi through interactive courses and challenges.</p>
    <a href="{{ route('register') }}" class="btn-primary">Get Started</a>
  </div>
</section>

<section id="features">
  <div class="container">
    <h2>Main Features</h2>
    <div class="features-grid">
      <div class="feature-card">
        <h3>Calculator</h3>
        <p>Perform crypto conversions and profit/loss calculations.</p>
      </div>
      <div class="feature-card">
        <h3>GasPay</h3>
        <p>Learn about blockchain transaction fees and simulate gas payments.</p>
      </div>
      <div class="feature-card">
        <h3>Explorer</h3>
        <p>Browse testnet blockchains and track transactions in real time.</p>
      </div>
      <div class="feature-card">
        <h3>Tips</h3>
        <p>Get daily crypto tips and best practices from experts.</p>
      </div>
      <div class="feature-card">
        <h3>Ecosystem</h3>
        <p>Explore DeFi, NFTs, and emerging Web3 projects and courses.</p>
      </div>
      <div class="feature-card">
        <h3>Community</h3>
        <p>Join our forums and peer network to share knowledge and job leads.</p>
      </div>
    </div>
  </div>
</section>

<section id="testimonials">
  <div class="container">
    <h2>What Our Students Say</h2>
    <div class="testimonials-grid">
      <div class="testimonial-card">
        <p>"Thanks to CryptoAcademy, I landed my first blockchain developer role. The courses and community are amazing!"</p>
        <p class="author">- Alex Doe, Software Engineer</p>
      </div>
      <div class="testimonial-card">
        <p>"The interactive labs and airdrop challenges helped me earn crypto while learning. Highly recommend this platform!"</p>
        <p class="author">- Jane Smith, Product Manager</p>
      </div>
    </div>
  </div>
</section>

<section id="cta">
  <div class="container">
    <h2>Ready to Learn & Earn?</h2>
    <a href="{{ route('register') }}" class="btn-primary">Join Now</a>
  </div>
</section>

</body>
</html>

{{--
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fahax Connect - Master Cryptocurrency</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <style>
    /* General Styling */
    body {
      font-family: 'Roboto', sans-serif;
      background-color: #f5f5f5;
      margin: 0;
      padding: 0;
      color: #333;
    }

    /* Navigation */
    nav {
      background-color: #1a1a1a;
      padding: 10px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    nav a {
      color: white;
      text-decoration: none;
      margin: 0 15px;
      font-size: 16px;
    }

    nav .logo {
      font-size: 24px;
      font-weight: bold;
    }

    /* Hero Section */
    .hero {
      background: url('https://via.placeholder.com/1920x600?text=Crypto+Education+Background') no-repeat center center;
      background-size: cover;
      color: white;
      text-align: center;
      padding: 100px 20px;
    }

    .hero h1 {
      font-size: 48px;
      margin-bottom: 20px;
    }

    .hero p {
      font-size: 20px;
      margin-bottom: 30px;
    }

    .hero .cta-button {
      background-color: #ff5722;
      color: white;
      padding: 15px 30px;
      border: none;
      border-radius: 5px;
      font-size: 18px;
      cursor: pointer;
    }

    /* Features Section */
    .features {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      padding: 50px 20px;
      background-color: white;
    }

    .feature-tile {
      background-color: #f9f9f9;
      border-radius: 10px;
      margin: 10px;
      padding: 20px;
      width: 250px;
      text-align: center;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .feature-tile i {
      font-size: 40px;
      color: #ff5722;
      margin-bottom: 15px;
    }

    .feature-tile h3 {
      font-size: 20px;
      margin-bottom: 10px;
    }

    .feature-tile p {
      font-size: 14px;
    }

    /* Community Section */
    .community {
      background-color: #1a1a1a;
      color: white;
      padding: 50px 20px;
      text-align: center;
    }

    .community h2 {
      font-size: 32px;
      margin-bottom: 20px;
    }

    .community p {
      font-size: 18px;
      margin-bottom: 30px;
    }

    .community .testimonial {
      font-style: italic;
      margin: 20px 0;
    }

    /* Education Section */
    .education {
      padding: 50px 20px;
      background-color: white;
      text-align: center;
    }

    .education h2 {
      font-size: 32px;
      margin-bottom: 20px;
    }

    .course {
      display: inline-block;
      margin: 20px;
      text-align: left;
    }

    .course img {
      width: 200px;
      height: 150px;
      border-radius: 10px;
    }

    .course h3 {
      font-size: 18px;
      margin-top: 10px;
    }

    /* Footer */
    footer {
      background-color: #1a1a1a;
      color: white;
      padding: 20px;
      text-align: center;
    }

    footer a {
      color: white;
      text-decoration: none;
      margin: 0 10px;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .hero h1 {
        font-size: 32px;
      }

      .hero p {
        font-size: 16px;
      }

      .features {
        flex-direction: column;
        align-items: center;
      }

      .feature-tile {
        width: 80%;
      }

      .education .course {
        display: block;
        margin: 20px auto;
      }
    }
  </style>
</head>
<body>
  <!-- Navigation -->
  <nav>
    <div class="logo">Fahax Connect</div>
    <div>
      <a href="#">Home</a>
      <a href="#">Courses</a>
      <a href="#">Tools</a>
      <a href="#">Community</a>
      <a href="#">About</a>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero">
    <h1>Master Cryptocurrency with Fahax Connect</h1>
    <p>Learn, Earn, and Engage in the Crypto World</p>
    <p>Access expert-led courses, practical tools, and a supportive community to enhance your crypto journey.</p>
    <button class="cta-button">Start Learning Now</button>
  </section>

  <!-- Features Section -->
  <section class="features">
    <h2>What You Can Do with Fahax Connect</h2>
    <div class="feature-tile">
      <i class="material-icons">calculate</i>
      <h3>Crypto Profit Calculator</h3>
      <p>Track Your Gains and Losses</p>
    </div>
    <div class="feature-tile">
      <i class="material-icons">local_gas_station</i>
      <h3>GasPay</h3>
      <p>Optimize Your Gas Fees for Every Transaction</p>
    </div>
    <div class="feature-tile">
      <i class="material-icons">explore</i>
      <h3>Blockchain Explorer</h3>
      <p>Dive Deep into Transaction Data</p>
    </div>
    <div class="feature-tile">
      <i class="material-icons">lightbulb</i>
      <h3>Expert Tips</h3>
      <p>Strategies for Crypto Success</p>
    </div>
    <div class="feature-tile">
      <i class="material-icons">eco</i>
      <h3>Ecosystem</h3>
      <p>Explore the Latest Trends and Projects in Crypto</p>
    </div>
    <div class="feature-tile">
      <i class="material-icons">group</i>
      <h3>Community</h3>
      <p>Join a Vibrant Community of Crypto Enthusiasts</p>
    </div>
  </section>

  <!-- Community Section -->
  <section class="community">
    <h2>Join 10,000+ Users Learning Crypto</h2>
    <p class="testimonial">"Fahax Connect helped me understand crypto trading better!" - Alex, Crypto Enthusiast</p>
    <p class="testimonial">"The courses are easy to follow and incredibly insightful." - Jamie, Beginner Learner</p>
  </section>

  <!-- Education Section -->
  <section class="education">
    <h2>Popular Courses</h2>
    <div class="course">
      <img src="https://via.placeholder.com/200x150?text=Course+1" alt="Course 1">
      <h3>Beginner’s Guide to Crypto</h3>
    </div>
    <div class="course">
      <img src="https://via.placeholder.com/200x150?text=Course+2" alt="Course 2">
      <h3>Advanced Blockchain Concepts</h3>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <a href="#">Terms of Service</a>
    <a href="#">Privacy Policy</a>
    <a href="#">Contact Us</a>
    <p>Follow us on social media: <a href="#">X</a> | <a href="#">LinkedIn</a></p>
  </footer>
</body>
</html> --}}
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tab Navigation</title>
    <style>
        /* General Styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: #f8f9fa;
            padding: 20px;
        }

        .tab-buttons {
            display: flex;
            gap: 1rem;
            margin-bottom: 1rem;
            border-bottom: 2px solid #E7F0F3;
        }

        .tab-btn {
            padding: 10px 15px;
            border: none;
            background: none;
            cursor: pointer;
            font-weight: 600;
            color: #4a6fa5;
            transition: 0.3s;
        }

        .tab-btn.active {
            background: #e9ecef;
            border-radius: 8px;
            color: #C78F00;
            border-bottom: 3px solid #C78F00;
        }

        .tab-content {
            display: none;
            padding: 15px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .tab-content.active {
            display: block;
        }
    </style>
</head>
<body>

    <div class="tab-buttons">
        <button class="tab-btn active" data-tab="overview">Overview</button>
        <button class="tab-btn" data-tab="lecture-notes">Lecture Notes</button>
        <button class="tab-btn" data-tab="lecturers">Lecturers</button>
    </div>

    <div id="overview" class="tab-content active">
        <h2>Introduction</h2>
        <p>
            Lucien Spann dator al amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...
        </p>
    </div>

    <div id="lecture-notes" class="tab-content">
        <p>
            Lecture notes content goes here. More text and information about the course notes.
        </p>
    </div>

    <div id="lecturers" class="tab-content">
        <ul>
            <li><a href="#" style="color:#3710a2;">BinUsman</a></li>
            <li><a href="#" style="color:#DA5B14;">Munnir</a></li>
            <li><a href="#" style="color:#0C8C5E;">Saminu</a></li>
            <li><a href="#" style="color:#4568E1;">Muhammad</a></li>
        </ul>
    </div>

    <script>
        document.querySelectorAll('.tab-btn').forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons and contents
                document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
                document.querySelectorAll('.tab-content').forEach(content => content.classList.remove('active'));

                // Add active class to clicked button and corresponding content
                button.classList.add('active');
                document.getElementById(button.getAttribute('data-tab')).classList.add('active');
            });
        });
    </script>

</body>
</html> --}}



{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Statistics</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: #f8f9fa;
            padding: 2rem;
        }

        .stats-container {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            padding: 2rem;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
        }

        .stat-item {
            padding: 1.5rem;
            border-bottom: 2px solid #e9ecef;
        }

        .stat-label {
            color: #6c757d;
            font-size: 0.95rem;
            margin-bottom: 0.5rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .stat-value {
            font-size: 1.75rem;
            font-weight: 700;
            color: #2d3436;
        }

        .topics-container {
            margin-top: 2rem;
            padding: 1.5rem;
            background: #f8f9fa;
            border-radius: 8px;
        }

        .topic-tag {
            display: inline-block;
            padding: 0.5rem 1rem;
            background: #4a6fa5;
            color: white;
            border-radius: 20px;
            margin: 0.25rem;
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            body {
                padding: 1rem;
            }

            .stats-container {
                padding: 1rem;
            }

            .stats-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .stat-item {
                padding: 1rem;
            }

            .stat-value {
                font-size: 1.5rem;
            }

            .topic-tag {
                font-size: 0.8rem;
            }
        }
    </style>
</head>
<body>
    <div class="stats-container">
        <div class="stats-grid">
            <div class="stat-item">
                <div class="stat-label">No. Students</div>
                <div class="stat-value">15</div>
            </div>
            <div class="stat-item">
                <div class="stat-label">Number of Topics</div>
                <div class="stat-value">5</div>
            </div>
            <div class="stat-item">
                <div class="stat-label">Sessions in Number</div>
                <div class="stat-value">1,129</div>
            </div>
            <div class="stat-item">
                <div class="stat-label">Ratings</div>
                <div class="stat-value">4.8</div>
            </div>
            <div class="stat-item">
                <div class="stat-label">Views</div>
                <div class="stat-value">20+</div>
            </div>
        </div>

        <div class="topics-container">
            <div class="stat-label">Topics</div>
            <div class="topic-tags">
                <span class="topic-tag">RHSUSCZ</span>
                <span class="topic-tag">GOATENMENT</span>
            </div>
        </div>
    </div>
</body>
</html> --}}

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentor Pop-up</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* General Styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
}

/* Pop-up Trigger Button */
#popupTrigger {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin: 20px;
}

/* Pop-up Container */
.popup {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    z-index: 1000;
}

.popup-content {
    background-color: #fff;
    width: 50%;
    max-width: 600px;
    margin: 10% auto;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    position: relative;
}

.close-btn {
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 24px;
    cursor: pointer;
}

h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

h3 {
    font-size: 18px;
    margin: 15px 0;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

th, td {
    padding: 10px;
    border: 1px solid #ddd;
    text-align: left;
}

.back-session-btn {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
    </style>
</head>


    <body>
        <!-- Pop-up Trigger Button -->
        <button id="popupTrigger">View Profile</button>

        <!-- Pop-up Container -->
        <div id="popupContainer" class="popup">
            <div class="popup-content">
                <span class="close-btn">&times;</span>
                <h2>Sarah Rodriguez</h2>
                <p>Sarah is a dedicated mentor with expertise in guiding individuals toward personal and professional growth. With a passion for sharing knowledge and empowering others, she provides insightful advice, tailored strategies, and unwavering support to help mentees achieve their goals.</p>
                <h3>2+ years of Mentoring Experience</h3>
                <table>
                    <tr>
                        <th>Expertise</th>
                        <th>Reviews (10)</th>
                    </tr>
                    <tr>
                        <td>Learning</td>
                        <td>Sarah is a talented, skilled, and caring mentor who has been an incredibly trusted partner.</td>
                    </tr>
                    <tr>
                        <td>Gender/Behavior</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Miscreance</td>
                        <td></td>
                    </tr>
                </table>
                <button class="back-session-btn">Back Session</button>
            </div>
        </div>

        <script >
            // Get elements
    const popupTrigger = document.getElementById('popupTrigger');
    const popupContainer = document.getElementById('popupContainer');
    const closeBtn = document.querySelector('.close-btn');

    // Open pop-up
    popupTrigger.addEventListener('click', () => {
        popupContainer.style.display = 'block';
    });

    // Close pop-up
    closeBtn.addEventListener('click', () => {
        popupContainer.style.display = 'none';
    });

    // Close pop-up when clicking outside
    window.addEventListener('click', (e) => {
        if (e.target === popupContainer) {
            popupContainer.style.display = 'none';
        }
    });
        </script>    </body>
    </html> --}}




{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academics Page</title>
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Stats Section */
        .stats {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }
        .stat-box {
            background: #fff;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            width: 150px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .stat-box p {
            margin: 5px 0;
        }
        .stat-number {
            font-size: 24px;
            font-weight: bold;
        }
        .stat-label {
            font-size: 14px;
            color: gray;
        }

        /* Course List */
        .course-list {
            margin-top: 30px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }
        .course-card {
            background: #fff;
            padding: 15px;
            display: flex;
            align-items: center;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .course-icon {
            width: 50px;
            height: 50px;
            background: #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            font-size: 24px;
            margin-right: 15px;
        }
        .course-info h3 {
            margin: 0;
            font-size: 16px;
        }
        .course-info p {
            margin: 5px 0 0;
            font-size: 14px;
            color: gray;
        }

        /* Responsive Design */
        @media (max-width: 600px) {
            .stats {
                flex-direction: column;
                align-items: center;
            }
            .stat-box {
                width: 80%;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Stats Section -->
    <div class="stats">
        <div class="stat-box">
            <p class="stat-number">11</p>
            <p class="stat-label">Courses Completed</p>
        </div>
        <div class="stat-box">
            <p class="stat-number">4</p>
            <p class="stat-label">Courses in Progress</p>
        </div>
    </div>

    <!-- Course List -->
    <div class="course-list">
        <div class="course-card">
            <div class="course-icon">📖</div>
            <div class="course-info">
                <h3>Course 1</h3>
                <p>Watch videos and learn about this course!</p>
            </div>
        </div>
        <div class="course-card">
            <div class="course-icon">📖</div>
            <div class="course-info">
                <h3>Course 2</h3>
                <p>Watch videos and learn about this course!</p>
            </div>
        </div>
        <div class="course-card">
            <div class="course-icon">📖</div>
            <div class="course-info">
                <h3>Course 3</h3>
                <p>Watch videos and learn about this course!</p>
            </div>
        </div>
        <div class="course-card">
            <div class="course-icon">📖</div>
            <div class="course-info">
                <h3>Course 4</h3>
                <p>Watch videos and learn about this course!</p>
            </div>
        </div>
    </div>
</div>

</body>
</html> --}}
