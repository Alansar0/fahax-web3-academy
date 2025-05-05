<!-- filepath: c:\xampp\htdocs\fahax\resources\views\academies\index.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academy</title>
    <style>
        /* Your existing styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f9f9f9;
            color: #333;
        }

        header {
            text-align: center;
        }

        header h1,
        .academy-section h2 {
            font-size: 2rem;
            font-family: Inter;
            font-weight: 400;
            font-size: 1.875rem;
            line-height: 1.8rem;
        }

        .academybanner {
            width: 98%;
            margin: 1.25rem 0;
            text-align: center;
            border-radius: 0.9375rem;
        }

        .academybanner img {
            width: 100%;
            height: 16rem;
            display: block;
            border-radius: 0.9375rem;
        }

        .academy-section {
            padding: 1.25rem;
        }

        .academy-section h2 {
            font-size: 1.9rem;
            margin-bottom: 0.5rem;
            text-align: left;
        }

        .academy-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(15.625rem, 1fr));
            gap: 1.3rem;
            padding: 0.65rem;
            position: relative;
        }

        .academyImage {
            position: relative;
        }

        .academy_card_note {
            background-color: #FFF9F2;
            border-radius: 1.1rem;
            box-shadow: 0 0.3125rem 0.5625rem rgba(0, 0, 0, 0.2);
            padding: 1.1rem;
            height: 48%;
            margin-top: -3rem;
            text-align: center;
            transition: transform 0.3s ease;
            position: relative;
            z-index: 1;
        }

        .academy-card img {
            width: 100%;
            height: 15rem;
            border-radius: 2rem;
            box-shadow: 0 0.3125rem 0.5625rem rgba(0, 0, 0, 0.2);
            object-fit: content;
        }

        .academy-card:hover {
            transform: translateY(-0.3125rem);
        }

        .academy-card h3 {
            font-size: 1.5rem;
        }

        .academy-card p,
        h3 {
            font-family: Inter;
            font-weight: 500;
            font-size: 0.7rem;
            line-height: 1.6575rem;
        }

        .academy-card p b {
            color: #222222;
        }

        .academy-card p {
            font-size: 1rem;
            color: #555;
            text-align: left;
        }

        .academy-card button {
            background-color: #141B34;
            color: #fff;
            border: none;
            border-radius: 1rem;
            padding: 0.5rem 2.6rem;
            font-size: 1rem;
            cursor: pointer;
            margin-top: 0.65rem;
            transition: background-color 0.3s ease;
        }

        .academy-card button:hover {
            background-color: #141B34;
        }

        footer {
            text-align: center;
            padding: 1.25rem;
            background-color: #333;
            color: #fff;
            margin-top: 1.25rem;
        }

        /* Mobile View */
        @media (max-width: 48rem) {
            header h1 {
                font-size: 1.8rem;
                margin: 2rem 0 -0.6rem 0;
            }

            header p {
                font-size: 1rem;
            }

            .academybanner img {
                height: 10rem;
            }

            .academy-grid {
                grid-template-columns: repeat(2, 0.8fr);
                gap: 0.8rem;
                margin-left: -2rem;
            }

            .academy_card_note {
                padding: 0.7rem 0.2rem;
                height: auto;
                border-radius: 0.9rem;
            }

            .academy-card h3 {
                font-size: 1.3rem;
            }

            .academy-card p {
                font-size: 0.9rem;
            }

            .academy-card button {
                padding: 0.5rem 1rem;
                font-size: 0.9rem;
            }
        }
    </style>
</head>

<body>
    <header>
        <h1>Acadamy</h1>
    </header>
    <div class="academybanner">
        <img src="{{ asset('https://www.detroitk12.org//cms/lib/MI50000060/Centricity//Shared/wcm%20images/DPSCD_OnlineLearning_Bb%20697x450%20Web%20Story.png') }}"
            alt="academybanner" class="avatar">
    </div>
    <section class="academy-section">
        <h2>Top Acadamies</h2>
        <div class="academy-grid">
            @foreach ($academies as $academy)
                <div class="academy-card">
                    <div class="academyImage">
                        <img src="{{ $academy->image ? asset('storage/' . $academy->image) : asset('img/placeholder.jpg') }}" alt="User Avatar" class="avatar">
                    </div>
                    <div class="academy_card_note">
                        <h3>{{ $academy->name }}</h3>
                        <p><b>Expertise:</b> {{ $academy->expertise }}</p>
                        <p><b>Description:</b> {{ $academy->description }}</p>
                        <p>Experience: {{ $academy->experience }} years</p>
                        <button class="popupTrigger" data-id="{{ $academy->id }}">View Profile</button>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <div id="popupContainer" class="popup-container">
        <div class="popup-content">
            <span class="close-btn">&times;</span>
            <div id="popupContent">
                <!-- Dynamic content will be loaded here -->
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 Academy Platform. All rights reserved.</p>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const popupTriggers = document.querySelectorAll(".popupTrigger");
            const popupContainer = document.getElementById("popupContainer");
            const popupContent = document.getElementById("popupContent");
            const closeBtn = document.querySelector(".close-btn");

            popupTriggers.forEach(trigger => {
                trigger.addEventListener("click", function () {
                    const academyId = this.dataset.id;
                    fetch(`/academies/${academyId}`)
                        .then(response => response.text())
                        .then(html => {
                            popupContent.innerHTML = html;
                            popupContainer.style.display = "flex";
                        })
                        .catch(error => {
                            console.error('Error loading profile:', error);
                            popupContent.innerHTML = `<h1>Error loading content</h1>`;
                        });
                });
            });

            closeBtn.addEventListener("click", function () {
                popupContainer.style.display = "none";
            });

            window.addEventListener("click", function (e) {
                if (e.target === popupContainer) {
                    popupContainer.style.display = "none";
                }
            });
        });
    </script>
</body>

</html>
