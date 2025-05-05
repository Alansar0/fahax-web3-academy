<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Profile Page</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="profile.css">
    <style>
        /* General Reset */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;

        }

        /* main-profile-container */
        .main-profile-container {
            display: flex;
            justify-content: space-between;
            width: 100%;
            height: 100vh;
        }

        /* Add to your existing styles */
        #tab-content.profile-container {
            width: 50%;
            height: 110vh;
            padding: 20px;
        }

        .edit-profile-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 400px;
        }

        /* Profile Container */
        .profile-container {
            display: block;
            justify-content: left;
            align-items: left;
            width: 50%;
            height: 100vh;
            /* padding: 20px; */
        }

        .profile-text h2 {
            display: flex;
            justify-content: start;

            font-family: IBM Plex Sans;
            font-size:1.2rem;
            font-weight: 700;
            line-height: 26px;
            text-align: center;
        }

        /* Profile Card */
        .profile-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 80%;
            height: 77vh;
            margin-top: 10px;
        }

        /* Header */
        /* .h2 {
            font-family: IBM Plex Sans;
            font-size: 16px;
            font-weight: 600;
            text-align: left;
            margin: 10px 10px 18px 14px;
            color: #333;
        } */
        .h2 {
            display: flex;
            justify-content:left;
            font-family: IBM Plex Sans;
            font-size: 10px;
            font-weight: 400;
            text-align: left;
            margin-left: 16px;
        }


        /* Profile Picture */
        .profile-picture {
            margin-bottom: 13px;
            margin-left: -0.4rem;

        }

        .profile-picture img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            border: 1px solid#fff;
        }


        /* Profile Details */
        .profile-details {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: Hug (440px)px;
            height: Hug (542px)px;
        }

        /* Details List */
        .details-list {
            width: 100%;
        }

        .detail-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            padding: 8px 10px;
            border-bottom: 1px solid #EAECEE;
        }

        .detail-row .label {
            font-weight: 400;
            font-family: IBM Plex Sans;
            font-size: 14px;
            font-weight: 400;
            line-height: 18.2px;
            text-align: left;
            margin-left: 10px;
            color: #7F8C9F;

        }

        .detail-row .value {
            font-family: IBM Plex Sans;
            font-size: 14px;
            font-weight: 400;
            line-height: 14px;
            text-align: right;
        }

        /*-------Actions------*/
        .profile-actions {
            display: flex;
            justify-content: space-between;
            margin-top: 12px;
        }

        .edit-btn,
        .delete-btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 11px 21px;
            font-size: 14px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            margin-left: 14px;
        }

        .delete-btn {
            background-color: #dc3545;
            margin-right: 50%;
        }

        .edit-btn:hover {
            /* background-color: #0056b3; */
            background-color: #0E6883;

        }

        .delete-btn:hover {
            background-color: #b32d3d;
        }



        @media (max-width: 768px) {

            /* Changed to standard 768px breakpoint */
            .main-profile-container {
                /* display: block; */



   `         }

            .profile-container {
                overflow: hidden;
                width: 100%;
                justify-content: center;
                /* align-items: center; */
            }
            .profile-picture {
                margin-left: 1.3rem;
            }
            .profile-card {
                width: 100%;
            }

        }
    </style>
</head>

<body>
    <div class="main-profile-container">
        <div class="profile-container">
            <div class="profile-text">
                <h2>Profile</h2>
            </div>
            <div class="profile-card">
                <div class="h2">
                    <h2>User Details</h2>
                </div>
                {{-- <h2 class="h2">User Details</h2> --}}
                <div class="profile-details">
                    <div class="profile-picture">
                        <img src="{{ asset('img/profilePic.png') }}" alt="Profile Picture" style="margin-left:-310px;">
                    </div>
                    <div class="details-list">
                        <div class="detail-row">
                            <span class="label">Full Name</span>
                            <span class="value">Randolph Turner</span>
                        </div>
                        <div class="detail-row">
                            <span class="label">Email Address</span>
                            <span class="value">Molly8@hotmail.com</span>
                        </div>
                        <div class="detail-row">
                            <span class="label">Phone Number</span>
                            <span class="value">726-993-9812</span>
                        </div>
                        <div class="detail-row">
                            <span class="label">User Type</span>
                            <span class="value">Student</span>
                        </div>
                        <div class="detail-row">
                            <span class="label">Bio</span>
                            <span class="value">Write a little about yourself</span>
                        </div>
                        <div class="detail-row">
                            <span class="label">Location</span>
                            <span class="value">Nigeria</span>
                        </div>
                        <div class="detail-row">
                            <span class="label">Date Joined</span>
                            <span class="value">Fri Mar 22 2024 15:09:14</span>
                        </div>
                    </div>
                </div>
                <div class="profile-actions">
                    <button class="edit-btn tab-link" onclick="window.location.href='{{ route('profile0.edit') }}'">
                        <i class="fas fa-edit"></i> Edit
                    </button>
                    <button class="delete-btn tab-link" onclick="window.location.href='{{ route('profile0.delete') }}'">
                        <i class="fas fa-trash"></i> Delete
                    </button>
                </div>
            </div>
        </div>
        <div id="tab-content">
            <div id="edit-section" style="display: none;">
                @include('profile0.edit')
            </div>
            <div id="delete-section" style="display: none;">
                @include('profile0.delete')
            </div>
        </div>

        <!-- JavaScript -->
            <script src="{{ asset('js/tabs.js') }}"></script>
        <script>
            // Remove the toggle logic since redirection is required
        </script>

</body>

</html>
