<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Card</title>
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            padding: 20px;
            display: flex;
            justify-content: center;
        }

        .stats-container {
            display: flex;
            justify-content: space-between;
            gap: 0.5rem;
            background: #fff;
            padding: 0.4rem;
            margin-bottom: 1rem;

            font-family: Baloo Bhai;
            font-weight: 600;
            font-size: 1.3rem;
        }

        .stat-box {
            width: 24rem;
            background: #f8f8f8;
            border-radius: 11px;
            display: flex;
            justify-content: space-around;

        }

        .stat-number {
            font-size: 6rem;
            margin: auto;
        }

        .stat-label {
            margin: 2.5rem  auto auto -1.5rem;
            color: #555;
        }

        .container {
            /* max-width: 600px; */
            width: 100%;
        }

        /* Course Navigation Tabs */
        .course-nav {
            display: flex;
            gap: 1.5rem;
            margin-bottom: 1rem;
        }

        .course-nav a {
            text-decoration: none;
            color: #aaa;

            font-family: Inter;
            font-weight: 500;
            font-size: 1rem;
        }

        .course-nav a.active {
            font-weight: bold;
            color: #000;
        }

        /* Course Card */
        .course-card {
            background: #f4f8fc;
            border-radius: 12px;
            padding: 1.2rem;
            display: flex;
            align-items: center;
            margin-bottom: 1.6rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .course-icon {
            width: 40px;
            height: 40px;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
        }

        .course-details {
            flex-grow: 1;
        }

        .course-title {
            font-size: 16px;
            font-weight: bold;
            color: #007bff;
            margin-bottom: 5px;
        }

        .course-desc {
            font-size: 12px;
            color: #555;
            margin-bottom: 8px;
        }

        .course-meta {
            display: flex;
            align-items: center;
            font-size: 12px;
            color: #666;
            gap: 15px;
        }

        .menu-icon {
            font-size: 18px;
            color: #aaa;
            cursor: pointer;
        }

        /* Ensure same look on mobile */
        @media (max-width: 600px) {

            .stats-container {
                flex-direction: row;
                /* Keep horizontal layout */
                justify-content: center;
                /* font-weight: 400;
                font-size: 1rem; */
            }

            .stat-box {
                width: 12rem;
                height: 6rem;
                padding: 0.2rem 0.5rem;
                justify-content: space-between;
                text-align: center  ;

            }

            .stat-number {
                font-size: 4rem;
                font-weight: 600;

            }

            .stat-label {
                margin: 2rem auto;
                font-size: 1rem;
                font-weight: 550;
            }

            .course-nav {
                flex-direction: row;
                gap: 0.5rem;

            }

            .course-nav a {
                font-weight: 300;
                font-size: 0.96rem;
            }

            .course-card {
                flex-direction: row;
                /* Keep horizontal layout */
            }
        }
    </style>
</head>

<body>


    <div class="container">
        <div class="stats-container">
            <div class="stat-box">
                <p class="stat-number">11</p>
                <p class="stat-label">Courses Completed</p>
            </div>
            <div class="stat-box">
                <p class="stat-number">4</p>
                <p class="stat-label">Courses in Progress</p>
            </div>
        </div>

        <!-- Navigation Tabs -->
        <div class="course-nav">
            <a href="#" class="active">All Courses</a>
            <a href="#">Text-Based Course</a>
            <a href="#">Video Tutorial Course</a>
        </div>

        <!-- Course Card -->
        <div class="course-card">
            <div class="course-icon">
                📖 <!-- Replace with an actual icon if needed -->
            </div>
            <div class="course-details">
                <div class="course-title">Course 1</div>
                <div class="course-desc">Watch videos and learn about course 1</div>
                <div class="course-meta">
                    ⏳ 6h 30min • ⭐ 4.9
                </div>
            </div>
            <div class="menu-icon">⋮</div> <!-- Menu dots -->
        </div>

        <!-- Course Card -->
        <div class="course-card">
            <div class="course-icon">
                📖 <!-- Replace with an actual icon if needed -->
            </div>
            <div class="course-details">
                <div class="course-title">Course 2</div>
                <div class="course-desc">Watch videos and learn about course 1</div>
                <div class="course-meta">
                    ⏳ 6h 30min • ⭐ 4.9
                </div>
            </div>
            <div class="menu-icon">⋮</div> <!-- Menu dots -->
        </div>

        <div class="course-card">
            <div class="course-icon">
                📖 <!-- Replace with an actual icon if needed -->
            </div>
            <div class="course-details">
                <div class="course-title">Course 3</div>
                <div class="course-desc">Watch videos and learn about course 1</div>
                <div class="course-meta">
                    ⏳ 6h 30min • ⭐ 4.9
                </div>
            </div>
            <div class="menu-icon">⋮</div> <!-- Menu dots -->
        </div>

        <div class="course-card">
            <div class="course-icon">
                📖 <!-- Replace with an actual icon if needed -->
            </div>
            <div class="course-details">
                <div class="course-title">Course 4</div>
                <div class="course-desc">Watch videos and learn about course 1</div>
                <div class="course-meta">
                    ⏳ 6h 30min • ⭐ 4.9
                </div>
            </div>
            <div class="menu-icon">⋮</div> <!-- Menu dots -->
        </div>

        <div class="course-card">
            <div class="course-icon">
                📖 <!-- Replace with an actual icon if needed -->
            </div>
            <div class="course-details">
                <div class="course-title">Course 5</div>
                <div class="course-desc">Watch videos and learn about course 1</div>
                <div class="course-meta">
                    ⏳ 6h 30min • ⭐ 4.9
                </div>
            </div>
            <div class="menu-icon">⋮</div> <!-- Menu dots -->
        </div>

        <div class="course-card">
            <div class="course-icon">
                📖 <!-- Replace with an actual icon if needed -->
            </div>
            <div class="course-details">
                <div class="course-title">Course 6</div>
                <div class="course-desc">Watch videos and learn about course 1</div>
                <div class="course-meta">
                    ⏳ 6h 30min • ⭐ 4.9
                </div>
            </div>
            <div class="menu-icon">⋮</div> <!-- Menu dots -->
        </div>
    </div>

</body>

</html>
