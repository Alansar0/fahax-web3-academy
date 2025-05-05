<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Account Deletion Dialog</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <style>
    /* Body styling to mimic dark background */
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      font-family: sans-serif;
    }

    /* Dialog box container */
    .dialog-box {
      background-color: white;
      border-radius: 10px;
      padding: 20px;
      width: 300px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); Subtle shadow for depth
    }

    /* Warning icon */
    .warning-icon {
      background-color: #ffe6e6; /* Light red background */
      border-radius: 50%;
      width: 50px;
      height: 50px;
      display: flex;
      justify-content: center;
      align-items: center;
      margin-left: 44%;
    }

    .warning-icon i {
      color: #ffcc00; /* Yellow triangle */
      font-size: 30px;
    }

    /* Dialog title */
    .dialog-title {
      font-size: 24px;
      font-weight: bold;
      text-align: center;
      color: black;
      margin-bottom: 10px;
    }

    /* Dialog message */
    .dialog-message {
      font-size: 16px;
      text-align: left;
      color: black;
      margin-bottom: 20px;
    }

    /* Buttons container */
    .dialog-buttons {
      display: flex;
      justify-content: space-between;
    }
    .dialog-buttons a{
        text-decoration: none;
    }

    /* General button styling */
    .btn {
      padding: 10px 20px;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      border: none;
      color: white;
    }

    /* No button */
    .btn-no {
      background-color: #0E6883;
    }

    /* Yes button */
    .btn-yes {
      background-color: red;
      padding: 10px 20px; /* Slightly larger as per description */
    }
  </style>
</head>
<body>
  <div class="dialog-box">
    <div class="warning-icon">
      <i class="material-icons">warning</i>
    </div>
    <h2 class="dialog-title">Delete Account</h2>
    <p class="dialog-message">You're going to delete your account. Are you sure?</p>
    <div class="dialog-buttons">
        <a href="/profile0/index" class="btn btn-no">No, Keep it</a>
      <button class="btn btn-yes">Yes, Delete it!</button>
    </div>
  </div>
</body>
</html>
