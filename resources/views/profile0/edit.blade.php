


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/form-style.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
<div class="edit-profile-container">
    <div class="edit-profile-containe_header">
        <a href="/profile0/index"  ><i  class="material-icons arrow_back ">arrow_back </i></a> <h2>Edit Profile</h2>
    </div>

    <form class="edit-profile-form">
        <div class="form-group">
            <label for="full-name">Full Namnpm run deve</label>
            <input type="text" id="full-name" placeholder="Enter your full name" />
        </div>
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" placeholder="Enter your email address" />
        </div>
        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" placeholder="000-000-0000" />
        </div>
        <div class="form-group">
            <label for="bio">Bio</label>
            <textarea id="bio" placeholder="Write a little about yourself"></textarea>
        </div>
        <button type="submit" class="save-btn">Save Changes</button>
    </form>
</div>

{{-- <script>
    // Add this script at the end of your dynamically loaded profile page
document.getElementById("editProfileBtn").addEventListener("click", function () {
    const tabContent = document.getElementById("tab-content");
    fetch("editProfile")
        .then(response => response.text())
        .then(data => {
            tabContent.innerHTML = data;
        })
        .catch(error => {
            console.error("Error loading edit profile form:", error);
        });
});
</script> --}}

</body>
</html>
