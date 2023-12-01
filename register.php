<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="Styles/style.css">
</head>

<body>
<?php
require 'Global/header.php';
?>
    <!-- Main Content Section -->
    <main>
        <section>
            <h2>Register</h2>
            <!-- Add your registration form here -->
            <form action="register.php" method="post">
                <div>
                    <label>Name:</label>
                    <div>
                        <input type="text" id="name" required>
                    </div>
                </div>
                <div>
                    <label>Contact:</label>
                    <div>
                        <input type="text" id="Contact" required>
                    </div>
                </div>
                <div>
                    <label>Email:</label>
                    <div>
                        <input type="email" id="email" required>
                    </div>
                </div>
                <div>
                    <label>Username:</label>
                    <div>
                        <input type="text" id="username" required>
                    </div>
                </div>
                <div>
                    <label>Password:</label>
                    <div>
                        <input type="text" id="password" required>
                    </div>
                </div>
                <div id="picture">
                    <label>Picture:</label>
                    <div>
                        <input type="file" id="picture" name="picture" accept="image/*">
                    </div>
                </div>
                
        <!-- Submit Button -->
        <button type="submit">Register</button>
        </section>
    </main>

    <?php require("Global/footer.php"); ?>
    
</body>

</html>
