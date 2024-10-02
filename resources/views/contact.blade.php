<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Person</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .contact-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            width: 100%;
        }
        h2 {
            margin-top: 0;
        }
        .contact-info {
            margin: 20px 0;
        }
        .contact-info p {
            margin: 8px 0;
        }
        .contact-info a {
            color: #1e90ff;
            text-decoration: none;
        }
        .contact-info a:hover {
            text-decoration: underline;
        }
        .social-links a {
            margin-right: 10px;
            text-decoration: none;
        }
        .social-links i {
            font-size: 24px;
            color: #555;
        }
        .social-links i:hover {
            color: #1e90ff;
        }
    </style>
</head>
<body>

    <div class="contact-card">
        <h2>Contact Person</h2>
        <div class="contact-info">
            <p><strong>Name:</strong> Azril</p>
            <p><strong>Email:</strong> <a href="mailto:aditazril26@gmail.com">aditazril26@gmail.com</a></p>
            <p><strong>Phone:</strong> <a href="tel:+1234567890">+123 456 7890</a></p>
            <p><strong>Address:</strong> Jabon, Sidoarjo</p>
        </div>

        <h3>Connect with me:</h3>
        <div class="social-links">
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-github"></i></a>
        </div>
    </div>

    <!-- You need to include Font Awesome CDN to get the icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</body>
</html>
