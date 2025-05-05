<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Detail</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: #f8f9fa;
            color: #2d3436;
            line-height: 1.6;
        }

        .header {
            width: 55%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;


            font-family: Inter;
            font-weight: 400;
            font-size: 1rem;
            line-height: 36px;

        }

        h2 {
            font-family: IBM Plex Sans;
            font-weight: 600;
        }

        .header a {
            text-decoration: none;
            color: #2d3436;
            font-size: 2rem;
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

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        .course-header {
            margin-bottom: 2rem;
        }


        .course-title {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
            font-family: IBM Plex Sans;
            font-weight: 600;
        }

        .h2-intro {
            line-height: 4rem;

        }

        .course-department,
        #course_lecture_notes {
            color: #6c757d;
            font-size: 1.2rem;
            font-family: IBM Plex Sans;
            font-weight: 500;


            display: -webkit-box;
            -webkit-line-clamp: 3;
            /* Limits text to 3 lines */
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        p {
            text-align: justify;
            word-spacing: -1px;
            /* Adjusts spacing to prevent unnatural gaps */
        }

        .course-description {
            font-family: IBM Plex Sans;
            font-weight: 400;
            line-height: 170%;
            text-align: justify;

        }

        nav ul,
        li a {
            text-decoration: none;
            color: #2d3436;
            font-size: 1.2rem;
            font-family: IBM Plex Sans;
            font-weight: 500;
            list-style-type: none;
            padding: 0.5rem;
            /* Remove default bullets */

        }

        nav ul a:hover {
            background: #e9ecef;
            border-radius: 8px;
            color: #C78F00;
            border-bottom: 0.2rem solid #C78F00;
        }



        .overview-tabs {
            flex: 1;
            max-width: 300px;
            font-family: IBM Plex Sans;
            font-weight: 500;
        }

        .tab-buttons {
            display: flex;
            flex-direction: row;
            gap: 1rem;
            border-bottom: 0.2rem solid #E7F0F3;
        }

        .tab-btn {
            padding: 0.5rem;
            background: none;
            border: none;
            text-align: right;
            cursor: pointer;
            font-weight: 600;
            color: #4a6fa5;
        }

        .tab-btn.active {
            background: #e9ecef;
            border-radius: 8px;
            color: #C78F00;
            border-bottom: 0.2rem solid #C78F00;
        }

        .course-content {
            flex: 2;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .stat-card {
            background: #F3F7F9;
            padding: 1.2rem;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            font-family: IBM Plex Sans;
            font-weight: 500;
        }

        .stat-value {
            text-align: center;
            font-size: 2rem;
            font-weight: 700;
            color: #2d3436;
        }

        .stat-label {
            text-align: center;
            color: #6c757d;
            margin-top: 0.5rem;
        }

        .course-overview-footer {
            max-width: 1200px;
            margin: 2rem auto;
            /* padding: 0.5rem; */
            display: block;



        }

        .inner-course-overview-footer:first-child {
            border-top: 1.3px solid #E7F0F3;
        }

        .inner-course-overview-footer {
            display: flex;
            justify-content: space-between;
            margin-bottom: 1rem;
            border-bottom: 1.3px solid #E7F0F3;
            padding: 1rem;
        }

        .topic-inner-right span {
            background: #F3F7F9;
            border-radius: 0.5rem;
            padding: 0.5rem;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        @media (max-width: 768px) {
            .header {
                width: 62%;
            }

            .academybanner img {
                width: 100%;
                height: 8rem;
            }

            height: 16rem;

            .container {
                padding: 1rem;
            }

            .course-title {
                font-size: 1.8rem;
            }

            .overview-section {
                flex-direction: column;
            }

            .overview-tabs {
                max-width: 100%;
            }

            .tab-buttons {
                flex-direction: row;
                overflow-x: auto;
            }

            .stats-grid {
                grid-template-columns: repeat(3, 0.9fr);
            }

            .stat-card {
                padding: 0.1rem;
                font-family: IBM Plex Sans;
            }

            .stat-value {
                font-size: 1rem;
                font-weight: 700;
            }

            .stat-label {
                font-size: 0.5rem;
            }

            .topic-inner-right span {
                padding: 0.4;
                font-size: 0.7rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <a href="/dashboard">&larr;</a>
            <h2>Acadamy</h2>
        </div>
        <div class="academybanner">
            <img src="{{ asset('https://www.detroitk12.org//cms/lib/MI50000060/Centricity//Shared/wcm%20images/DPSCD_OnlineLearning_Bb%20697x450%20Web%20Story.png') }}"
                alt="academybanner" class="avatar">
        </div>
        <header class="course-header">
            <h1 class="course-title">Course 1</h1>
            <p class="course-department">Department of Computer</p>
        </header>

        <section class="overview-section">
            <div class="overview-tabs">
                <div class="tab-buttons">
                    <button class="tab-btn active" data-tab="overview">Overview</button>
                    <button class="tab-btn" data-tab="lecture-notes">Lecture Notes</button>
                    <button class="tab-btn" data-tab="lecturers">Lecturers</button>
                </div>
            </div>

            <div class="course-content">
                <div id="course_overview">
                    <div id="overview" class="tab-content active">
                        <h2 class="h2-intro">Introduction</h2>
                        <p class="course-description">
                            Lucien Spann dator al amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                            labore
                            et dolore magna aliqua, tu enim a minim veniam, quis nostrud exercitation ullamco laboris
                            nisi
                            ut
                            Lucien Spann dator al amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                            labore
                            et dolore magna aliqua, tu enim a minim veniam, quis nostrud exercitation ullamco laboris
                            nisi
                            ut
                            Lucien Spann dator al amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                            labore
                            et dolore magna aliqua, tu enim a minim veniam, quis nostrud exercitation ullamco laboris
                            nisi
                            ut
                            aliquip ex ea commodo consequat...
                        </p>
                    </div>
                    <div id="lecture-notes" class="tab-content">

                        <p>
                            Lucien Spann dator al amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                            labore
                            et dolore magna aliqua, tu enim a minim veniam, quis nostrud exercitation ullamco laboris
                            nisi
                            ut
                            Lucien Spann dator al amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                            labore
                            et dolore magna aliqua, tu enim a minim veniam, quis nostrud exercitation ullamco laboris
                            nisi
                            ut
                            Lucien Spann dator al amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                            labore
                            et dolore magna aliqua, tu enim a minim veniam, quis nostrud exercitation ullamco laboris
                            nisi
                            utLucien Spann dator al amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt
                            ut
                            labore
                            et dolore magna aliqua, tu enim a minim veniam, quis nostrud exercitation ullamco laboris
                            nisi
                            ut
                            Lucien Spann dator al amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                            labore
                            et dolore magna aliqua, tu enim a minim veniam, quis nostrud exercitation ullamco laboris
                            nisi
                            ut
                            Lucien Spann dator al amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                            labore
                            et dolore magna aliqua, tu enim a minim veniam, quis nostrud exercitation ullamco laboris
                            nisi
                            utLucien Spann dator al amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt
                            ut
                            labore
                            et dolore magna aliqua, tu enim a minim veniam, quis nostrud exercitation ullamco laboris
                            nisi
                            ut
                            Lucien Spann dator al amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                            labore
                            et dolore magna aliqua, tu enim a minim veniam, quis nostrud exercitation ullamco laboris
                            nisi
                            ut
                            Lucien Spann dator al amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                            labore
                            et dolore magna aliqua, tu enim a minim veniam, quis nostrud exercitation ullamco laboris
                            nisi
                            ut
                        </p>
                    </div>

                    <div id="lecturers" class="tab-content">
                        <nav>
                            <ul>
                                <li><a href="" style="color:#3710a2;">BinUsman</a></li>
                                <li><a href="" style="color:#DA5B14;">Munnir</a></li>
                                <li><a href="" style="color:#0C8C5E;">Saminu</a></li>
                                <li><a href="" style="color:#4568E1;">Muhammad</a></li>
                            </ul>
                        </nav>
                    </div>

                </div>

                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-label">Number of Topics</div>
                        <div class="stat-value">15</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-label">No Solution</div>
                        <div class="stat-value">5</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-label">Sessions in Nursing</div>
                        <div class="stat-value">1,129</div>

                    </div>
                </div>

                <div class="course-overview-footer">
                    <div class="inner-course-overview-footer">
                        <div class="topic-inner-left" style="">Topics</div>
                        <div class="topic-inner-right">
                            <span>Technical Analysis</span>
                            <span>Risk Mangment</span>
                        </div>
                    </div>
                    <div class="inner-course-overview-footer">
                        <span>Ratings</span>
                        <span>⭐ 4.9</span>
                    </div>
                    <div class="inner-course-overview-footer">
                        <span>Views</span>
                        <span>20+</span>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <script>
        document.querySelectorAll('.tab-btn').forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons and contents
                document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
                document.querySelectorAll('.tab-content').forEach(content => content.classList.remove(
                    'active'));

                // Add active class to clicked button and corresponding content
                button.classList.add('active');
                document.getElementById(button.getAttribute('data-tab')).classList.add('active');
            });
        });
    </script>
</body>

</html>
