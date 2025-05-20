<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Login </title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            /* background: linear-gradient(135deg, #1e3c72, #2a5298); */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background-color: white;
            padding: 2.5rem;
            border-radius: 1rem;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
            width: 320px;
        }

        .login-form h2 {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #2a5298;
        }

        .input-group {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .input-group input {
            width: 100%;
            padding: 10px 12px;
            font-size: 1rem;
            border: 2px solid #ddd;
            border-radius: 6px;
            outline: none;
            transition: 0.3s;
        }

        .input-group input:focus {
            border-color: #2a5298;
        }

        .input-group label {
            position: absolute;
            top: 50%;
            left: 12px;
            transform: translateY(-50%);
            background: white;
            padding: 0 4px;
            color: #aaa;
            pointer-events: none;
            transition: 0.3s;
        }

        .input-group input:focus+label,
        .input-group input:valid+label {
            top: -10px;
            left: 10px;
            font-size: 0.8rem;
            color: #2a5298;
        }

        .toggle-password {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 1rem;
            color: #777;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #2a5298;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background-color: #1e3c72;
        }

        .error-message {
            color: red;
            font-size: 0.9rem;
            margin-top: 10px;
            text-align: center;
        }
        a{
            color:white;
            text-decoration: none;
        }
    </style>
    <div class="login-container">
        <form id="loginForm" class="login-form">
            <h2>Login</h2>

            <div class="input-group">
                <input type="email" id="email" required />
                <label for="email">Email</label>
            </div>

            <div class="input-group">
                <input type="password" id="password" required />
                <label for="password">Password</label>
                <span class="toggle-password" onclick="togglePassword()">👁️</span>
            </div>

            <button type="submit"><a href="{{ url('dashboard') }}">Login</a></button>
            <p class="error-message" id="errorMessage"></p>
        </form>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            passwordInput.type = passwordInput.type === 'password' ? 'text' : 'password';
        }

        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const email = document.getElementById('email').value.trim();
            const password = document.getElementById('password').value.trim();
            const errorMessage = document.getElementById('errorMessage');

            if (!email || !password) {
                errorMessage.textContent = "Please fill in all fields.";
                return;
            }

            // You can add actual login logic here
            errorMessage.textContent = "";
            alert("Login successful!");
        });
    </script>
</body>

</html>
