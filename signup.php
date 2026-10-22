<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TutorTrack — Create Account</title>
    <link rel="stylesheet" href="css/style.css">


</head>
<body>

    <div class="auth-wrapper">
        <div class="auth-left">
            <div class="auth-left-logo">

    <!-- Logo Image: Shows your uploaded logo.png -->
    <!-- "src" = where the file is located -->
    <!-- "alt" = text that shows if image fails to load -->
    <!-- "style" = controls size and spacing -->
    <img 
        src="images/logo.png" 
        alt="TutorTrack — Student Attendance System"
        style="
            width: 40px;          <!-- Fixed width for logo -->
            height: auto;         <!-- Auto height keeps proportions correct -->
            margin-right: 10px;   <!-- Space between logo and text -->
            vertical-align: middle; <!-- Aligns logo perfectly with text -->
            display: inline-block;
        "
    >

    <!-- Brand Name Text next to the logo -->
    <span style="font-size: 22px; font-weight: 700;">TutorTrack</span>

</div>
<!-- END OF LOGO SECTION -->
            <div class="circle-shape"></div>
        </div>

        <div class="auth-right">
            <div class="auth-box">
                <p class="tagline">Get started</p>
                <h2>Create your tutor account</h2>
                <p class="subtext">Set up your private tutoring workspace.</p>

                <form action="dashboard.php" method="POST">
                    <div class="form-group">
                        <label for="name">Display name</label>
                        <input type="text" id="name" class="form-control" placeholder="Your name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" id="email" class="form-control" placeholder="tutor@example.com" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" class="form-control" placeholder="Enter password" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Create account →</button>
                </form>

                <div class="auth-link">
                    Already have an account? <a href="index.php">Sign in</a>
                </div>

                <p style="text-align:center; font-size:12px; color:var(--text-muted); margin-top:16px;">
                    By continuing, you agree to our Terms of Service and Privacy Policy.
                </p>
            </div>
        </div>
    </div>

</body>
</html>