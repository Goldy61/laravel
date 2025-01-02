<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        /* Reset default styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body and page background */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Form container styling */
        .form-container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 400px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        /* Form group styling */
        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        input[type="text"]:focus, input[type="email"]:focus, input[type="password"]:focus {
            border-color: #007BFF;
            outline: none;
        }

        /* Button styling */
        .submit-btn {
            width: 100%;
            padding: 12px;
            background-color: #007BFF;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: #0056b3;
        }

        /* Placeholder text styling */
        input::placeholder {
            color: #aaa;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Register</h2>
        <form action="#" method="POST">
            @csrf
            <!-- Username Input -->
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required placeholder="Enter your username">
            </div>
            
            <!-- ID Input -->
            <div class="form-group">
                <label for="id">ID</label>
                <input type="text" id="id" name="id" required placeholder="Enter your ID">
            </div>
            
            <!-- Email Input -->
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required placeholder="Enter your email">
            </div>
            
            <!-- Password Input -->
            <div class="form-group">
                <label for="phonenumber">Phonenumber</label>
                <input type="phonenumber" id="phonenumber" name="phonenumber" required placeholder="Enter your phonenumber">
            </div>
            
            <!-- Submit Button -->
            <div class="form-group">
                <button type="submit" class="submit-btn">Register</button>
            </div>
        </form>
    </div>

</body>
</html>

