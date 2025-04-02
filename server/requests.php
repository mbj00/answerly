<?php

include("db.php");


// Sign up new user

if (isset($_POST["signupBtn"])) {

    $username = $_POST["newUsername"];
    $email = $_POST["newEmail"];
    $password = $_POST["newPassword"];
    $Cpassword = $_POST["newCPassword"];

    if ($password != $Cpassword) {
        echo "<script>
         alert('Password Confirmation failed. Confirm password again.');
         window.location.href = '../signup.php';
         </script>";

    } else {

        $newUser = $conn->prepare("INSERT INTO `users` (`id`, `username`, `email`, `password`, `time`) VALUES (NULL, '$username', '$email', '$password', current_timestamp())");

        $result = $newUser->execute();

        if ($result) {
            echo "<script>
         alert('User Successfully registered');
         window.location.href = '../index.php';
         </script>";
            echo "registered";
        } else {
            echo "<script>
         alert('Some error Occured. Try again later');
         window.location.href = '../signup.php';
         </script>";
        }

    }
}

// log in user



if (isset($_POST["loginBtn"])) {
    session_start();
    $lemail = $_POST["loginEmail"];
    $lpassword = $_POST["loginPassword"];

    $query = "SELECT * FROM `users` WHERE `email` = '$lemail' AND `password` = '$lpassword'";

    $lResult = $conn->query($query);

    if ($lResult) {
        // echo"entered";
        foreach ($lResult as $row) {
            // print_r($row);
            $activeUser = $row['username'];
            $activeEmail = $row['email'];
            $_SESSION['user'] = $activeUser;
            $_SESSION['email'] = $activeEmail;
            // print_r($_SESSION['user']);
            // print_r($_SESSION['email']);
            header("Location: ../index.php"); 
        }
        // echo "$activeUser";
        // echo "$activeEmail";

        // $_SESSION['answerly'] = ["user" => $activeUser,"email"=> $activeEmail];

    }

}

// logout user
session_start();
if (isset($_POST['logout'])) {
    // Unset all session variables
    session_unset();

    // Destroy the session
    session_destroy();

    // Redirect to login or home page (optional)
    header("Location: ../index.php");
    exit();
}

// Questions Page

if (isset($_POST['questionBtn'])) {

    $question = $_POST['question'];
    $category = $_POST['categorySelect'];
    $author = isset($_SESSION['user']) ? $_SESSION['user'] : "Anonymous";

    $query = "INSERT INTO `questions` (`id`, `question`, `category`, `author`, `time`) VALUES (NULL, '$question', '$category', '$author', current_timestamp())";

    $result = $conn->query($query);

    if ($result) {
        echo "<script>
     alert('Question posted successfully');
     window.location.href = '../index.php';
     </script>";
        echo "registered";
    } else {
        echo "<script>
     alert('Some error Occured. Try again later');
     window.location.href = '../signup.php';
     </script>";
    }

}

?>