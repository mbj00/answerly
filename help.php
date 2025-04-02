<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/YOUR-KIT-ID.js" crossorigin="anonymous"></script>
    <title>Answerly</title>
</head>

<body>

    <?php
    session_start();
    include("common/navbar.php");

    ?>

    <div class="card m-1">
        <div class="card-header">
            <h3 class="text-center">Help and Support</h3>
        </div>
        <div class="card-body">
        <p>Welcome to the Help & Support page of Answerly! We're here to assist you with any issues, questions, or concerns you may have while using our platform.</p>    
        <h4>Getting Started</h4>
        <p>If you're new to Answerly, here are some common steps to help you navigate the platform:</p>
        <ul>
            <li><b>Creating an Account –</b>Sign up with your email or social login to start asking and answering questions.</li>
            <li><b>Posting a Question –</b>Click on the "Ask a Question" button, enter your query, and select the relevant category</li>
            <li><b>Answering Questions –</b>Browse existing questions and contribute your knowledge by posting helpful answers.</li>
            <li><b>Upvotes & Best Answers –</b>Upvote useful responses and mark the best answer for your question to help others.</li>
        </ul>   
        <h4>Need Assistance?</h4>
        <p>If you encounter any issues or need further support, feel free to reach out:</p>
        <ul>
            <li><b>General Support: </b><a href="mailto:support@answerly.com" class="text-decoration-none">support@answerly.com</a></li>
            <li><b>Technical Issues: </b><a href="mailto:tech@answerly.com" class="text-decoration-none">tech@answerly.com</a></li>
            <li><b>Account & Security: </b><a href="mailto:accounts@answerly.com" class="text-decoration-none">accounts@answerly.com</a></li>
        </ul> 
        <p>For quick answers, check out our FAQ section or visit the community forums for peer-to-peer assistance.<br>
        Thank you for being a part of Answerly! 
        </p>
        </div>
    </div>

    <?php

    include("common/footer.php");

    ?>

</body>

</html>