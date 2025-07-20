<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        /* Define a consistent color palette using CSS variables */
        /*
           * IMPORTANT: REPLACE THESE HEX CODES WITH THE ACTUAL COLORS FROM YOUR LOGO *
           Consult your brand guidelines or use a color picker tool to get the exact hex codes.
        */
        :root {
            --primary-bank-blue: #0A3258; /* A deep, professional blue (often main logo color) */
            --secondary-bank-blue: #1C3D5A; /* A standard, trustworthy action blue */
            --accent-bank-gold: #D4AF37; /* A subtle, rich gold (often a logo accent) */

            --gradient-start: #041424; /* Darker blue for background gradient start */
            --gradient-middle: #0A2239; /* Mid blue for background gradient */
            --gradient-end: #1C3D5A; /* Lighter blue for background gradient end */

            --container-bg: rgba(255, 255, 255, 0.98); /* Near-white, slightly transparent container */
            --text-main: #212529; /* Dark text for primary content */
            --text-secondary: #495057; /* Slightly lighter text for secondary info */
            --border-subtle: rgba(0, 0, 0, 0.08); /* Very light border color */
            --shadow-subtle: rgba(0, 0, 0, 0.07); /* Light, diffused shadow */
            --button-text-color: #FFFFFF; /* White text for buttons */
            --error-color: #dc3545; /* Standard red for errors */
            --error-bg-color: #f8d7da; /* Light red background for error messages */
            --error-border-color: #f5c6cb; /* Red border for error messages */
        }
/* General Body Styles */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Cairo', sans-serif;
            background: linear-gradient(to right, var(--gradient-start), var(--gradient-middle), var(--gradient-end)); /* Professional dark blue gradient */
            color: var(--text-main); /* Default text color (will be overridden by login-box) */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Full viewport height */
            text-align: center; /* Center text within body if not for login box */
            overflow: hidden; /* Prevent scrollbars if not needed */
        }

        /* Login Box Styling */
        .login-box {
            background-color: var(--container-bg); /* Near-white container background */
            padding: 45px 40px; /* Ample padding */
            border-radius: 15px; /* Rounded corners */
            box-shadow: 0 10px 30px var(--shadow-subtle); /* Soft shadow */
            backdrop-filter: blur(8px); /* Frosted glass effect */
            -webkit-backdrop-filter: blur(8px);
            width: 380px; /* Fixed width for login box */
            border: 1px solid var(--border-subtle); /* Subtle border */
            animation: fadeIn 1.2s ease-out; /* Smooth fade-in animation */
            text-align: right; /* Align text to the right for RTL */
        }

        /* Logo inside Login Box */
        .logo-login {
            margin-bottom: 25px; /* Space below the logo */
        }

        .logo-login img {
            max-width: 150px; /* Adjust logo size for login box */
            height: auto;
            display: block; /* Centers the image */
            margin: 0 auto; /* Centers the image */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); /* Subtle shadow for logo */
            border-radius: 8px; /* Slightly rounded logo */
        }

        /* Title */
        h2 {
            text-align: center;
            margin-bottom: 30px; /* Space below title */
            color: var(--primary-bank-blue); /* Primary blue for the title */
            font-size: 30px; /* Prominent title size */
            font-weight: 700; /* Bold */
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.05); /* Very subtle text shadow */
        }

        /* Error Message Styling */
        .error {
            color: var(--error-color); /* Red text */
            background-color: var(--error-bg-color); /* Light red background */
            border: 1px solid var(--error-border-color); /* Red border */
            border-radius: 8px; /* Rounded corners */
            padding: 12px 15px; /* Padding inside the box */
            margin-bottom: 25px; /* Space below error message */
            text-align: center;
            font-size: 15px;
            font-weight: 600; /* Semi-bold for emphasis */
            animation: fadeIn 0.5s ease-out; /* Fade in error message */
        }

        /* Form Labels */
        label {
            display: block;
            margin-bottom: 8px; /* Space below label */
            font-weight: 600; /* Semi-bold */
            color: var(--text-secondary); /* Lighter text for labels */
            font-size: 16px;
            text-align: right; /* Align labels to the right */
        }

        /* Input Fields */
        input[type="email"],
        input[type="password"] {
            width: calc(100% - 24px); /* Full width minus padding */
            padding: 12px;
            margin-bottom: 25px; /* Space below input */
            border: 1px solid var(--border-subtle); /* Subtle border */
            border-radius: 8px; /* Rounded corners */
            font-size: 16px;
            color: var(--text-main);
            background-color: #fefefe; /* Slightly off-white background for inputs */
            transition: all 0.3s ease; /* Smooth transition for focus */
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: var(--secondary-bank-blue); /* Highlight border on focus */
            box-shadow: 0 0 0 3px rgba(0, 86, 179, 0.2); /* Soft shadow on focus */
            outline: none; /* Remove default outline */
            background-color: #ffffff;
        }

        /* Button Styling */
        .btn {
            width: 100%; /* Full width button */
            padding: 15px; /* Padding for button */
            background-color: var(--secondary-bank-blue); /* Action blue */
            color: var(--button-text-color); /* White text */
            border: none;
            border-radius: 10px; /* Rounded corners */
            font-size: 18px; /* Clear font size */
            font-weight: 700; /* Bold */
            cursor: pointer;
            transition: all 0.3s ease-in-out; /* Smooth transition */
            box-shadow: 0 5px 15px rgba(0, 86, 179, 0.2); /* Soft shadow */
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .btn:hover {
            background-color: var(--primary-bank-blue); /* Darker blue on hover */
            box-shadow: 0 8px 20px rgba(0, 86, 179, 0.3); /* Enhanced shadow on hover */
            transform: translateY(-2px); /* Gentle lift */
        }

        /* Animation for login box */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Responsive Adjustments */
        @media (max-width: 480px) {
            .login-box {
                width: 90%; /* Make login box more responsive */
                padding: 30px 20px;
            }
            h2 {
                font-size: 26px;
                margin-bottom: 25px;
            }
            .logo-login img {
                max-width: 120px;
                margin-bottom: 20px;
            }
            input[type="email"],
            input[type="password"] {
                padding: 10px;
                font-size: 15px;
                margin-bottom: 20px;
            }
            .btn {
                padding: 12px;
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
<div class="login-box">
    <div class="logo-login">
        <img src="{{asset('img/bank.png')}}" alt="logo">
    </div>
    <h2>🔐 تسجيل الدخول</h2>
    <form method="POST" action="{{ route('login1') }}">
    @csrf
       <label for="email">البريد الإلكتروني</label>
    <input type="email" id="email" name="email" required>
        <label for="password">كلمة المرور</label>
        <input type="password" id="password" name="password" required>
        <button type="submit" class="btn">دخول</button>
    </form>
    @if ($errors->any())
    <div class="error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>
</body>
</html>