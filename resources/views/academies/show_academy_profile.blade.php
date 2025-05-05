<!-- filepath: c:\xampp\htdocs\fahax\resources\views\dashboard3.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentor Profile</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script defer src="{{ asset('js/script.js') }}"></script> --}}
    <style>
        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #3b82f6;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        p,
        h3 {
            text-align: left;
        }

        .popup-container {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .popup-content {
            background: white;
            padding: 20px;
            width: 90%;
            max-width: 400px;
            border-radius: 10px;
            position: relative;
        }

        .close-btn {
            position: absolute;
            top: 2.3rem;
            left: 1.2rem;
            font-size: 1.6rem;
            cursor: pointer;
            z-index: 1;
        }

        .mentor-image {
            width: 100px;
            border-radius: 50%;
            margin: 10px 0;
        }

        .ExpertiseAndRevieBlocks {
            display: flex;
            justify-content: space-between;
            width: 80%;
            gap: 1rem;
        }

        .expertise,
        .reviews-container {
            max-width: 10rem;
            height: 20%;
            /* border-radius: 11.36px;
            border: 0.71px solid#E5E5E5; */
            /* border-width: 0.71px; */
        }

        .reviews-container,
        .expertise {
            max-width: 150px;
            margin: 0 auto;
            background-color: #fff;
            padding: 0.5rem;
            border-radius: 8px;
            border: 0.71px solid#E5E5E5;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h2 {
            font-size: 24px;
            margin-bottom: 1rem;
        }

        .review {
            margin-bottom: 0.5rem;
        }

        .review-text {
            font-style: italic;
            line-height: 1.3;
        }

        .review-author {
            text-align: right;
            font-weight: bold;
            margin-top: -1.1rem;
            margin-bottom: -0.2rem;
        }

        .expertise ul li {
            text-align: left;
            list-style: none;
            text-decoration: none;
            margin-left: -1.4rem;
            line-height: 1.7rem;
        }

        h3,
        h2 {
            font-family: Inter;
            font-weight: 500;
            font-size: 1.3rem;
        }

        p {
            font-family: Inter;
            font-weight: 500;
            font-size: 1rem;
            color: #727272;
        }

        p b {
            color: #3750F7;
            font-weight: 700;
            font-size: 1rem;
        }

        body {
            font-family: Arial, sans-serif;
            text-align: center;
            font-family: Inter;
        }

        .join-btn {
            width: 80%;
            background-color: #2563eb;
            color: white;
            padding: 0.8rem;
            border: none;
            border-radius: 2rem;
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <!-- Button to trigger popup -->
    <button id="popupTrigger">View Profile</button>

    <!-- Popup container -->
    <div id="popupContainer" class="popup-container">
        <div class="popup-content">
            <span class="close-btn">&larr;</span>
            <h2>Acadamy</h2>
            <img src="{{ $academy->image ? asset('storage/' . $academy->image) : asset('img/placeholder.jpg') }}" alt="User Avatar" class="avatar">
            <h3>{{ $academy->name }}</h3>
            <p>{{ $academy->description }}</p>
            <p><strong><b>{{ $academy->experience }} </b>years of Mentoring Experience</strong></p>
            <div class="ExpertiseAndRevieBlocks">

                <div class="expertise">
                    <h4>Expertise</h4>
                    <ul>
                        <li style="color:#DA5B14;">{{ $academy->expertise1 }}</li>
                        <li style="color:#0C8C5E;">{{ $academy->expertise2 }}</li>
                        <li style="color:#4568E1;">{{ $academy->expertise3 }}</li>
                    </ul>
                </div>

                <div class="reviews-container">
                    <h2>Reviews (10)</h2>
                    <div class="review">
                        <p class="review-text">
                            "{{ $academy->reviews }}"
                        </p>
                        <p class="review-author">- Jane</p>
                    </div>
                </div>

            </div>
            <button class="join-btn">Join Academy</button>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const popupTrigger = document.getElementById("popupTrigger");
            const popupContainer = document.getElementById("popupContainer");
            const closeBtn = document.querySelector(".close-btn");

            // Show popup
            popupTrigger.addEventListener("click", function() {
                popupContainer.style.display = "flex";
            });

            // Hide popup when clicking close
            closeBtn.addEventListener("click", function() {
                popupContainer.style.display = "none";
            });

            // Hide popup when clicking outside
            window.addEventListener("click", function(e) {
                if (e.target === popupContainer) {
                    popupContainer.style.display = "none";
                }
            });
        });
    </script>
</body>

</html>


