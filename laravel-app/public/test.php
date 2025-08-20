<?php

echo "<html>
<head>
    <title>Laravel App Test</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #f7fafc;
        }
        .container {
            text-align: center;
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 600px;
        }
        h1 {
            color: #3490dc;
        }
        .status {
            margin-top: 1rem;
            padding: 0.5rem;
            background: #c6f6d5;
            color: #276749;
            border-radius: 4px;
        }
        .info {
            margin-top: 1rem;
            text-align: left;
            background: #f8fafc;
            padding: 1rem;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class='container'>
        <h1>Laravel App</h1>
        <div class='status'>
            Application is running successfully!
        </div>
        <div class='info'>
            <h3>Server Information:</h3>
            <ul>
                <li>PHP Version: " . phpversion() . "</li>
                <li>Server: " . $_SERVER['SERVER_SOFTWARE'] . "</li>
                <li>Host: " . $_SERVER['HTTP_HOST'] . "</li>
            </ul>
            <h3>Environment:</h3>
            <ul>
                <li>APP_ENV: " . (getenv('APP_ENV') ?: 'Not set') . "</li>
                <li>APP_DEBUG: " . (getenv('APP_DEBUG') ?: 'Not set') . "</li>
            </ul>
        </div>
    </div>
</body>
</html>";
