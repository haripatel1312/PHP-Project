<!-- Global Header Section -->
<link rel="stylesheet" href="Styles/headerstyle.css">
<header>
        <!-- Logo Section -->
            <img src="Images/logo.png" alt="Your Logo" id="logo">
        <!-- Login Form Section -->
            <form action="login.php" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Login</button>
            </form>

        <!-- Site Navigation Section -->
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="register.php">Register</a></li>
            </ul>
        </nav>
    </header>