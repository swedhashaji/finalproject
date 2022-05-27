<?php
session_start();
include('../cred/dbConnect.php');
if (isset($_SESSION["smymSessionId"]) == session_id()) {
    header("Location: ../index.php");
    die();
} else {

    // Submit check
    if (isset($_POST['loginFormSubmit'])) {

        // Empty check
        if (!empty($_POST['loginUsername']) and !empty($_POST['loginPassword'])) {
            // Collecting values
            $loginUsername = $_POST['loginUsername'];
            $loginPassword = $_POST['loginPassword'];
            // Admin fetch for login
            $adminFetch = "SELECT * FROM tbl_admin WHERE  admin_mobile = '$loginUsername' AND admin_password = '$loginPassword' AND admin_status != 0 ";
            $adminResult = mysqli_query($connect, $adminFetch);

            if (mysqli_num_rows($adminResult) > 0) {
                $adminRow = mysqli_fetch_assoc($adminResult);
                // setting credentials
                $_SESSION["smymSessionId"] = session_id();
                $_SESSION["userId"] = $adminRow['admin_id'];
                $_SESSION['parish']=$adminRow['admin_parish'];
                $_SESSION["userDesignation"] = 'Admin';
                if ($adminRow['admin_status'] == 2) {
                    $_SESSION['MasterAdmin'] = 'Present';
                }
                if($adminRow['admin_type']=='1')
                {
                header("Location: ../index.php");
                }
                else if($adminRow['admin_type']=='2')
                {
                header('Location: ../dashboard1.php?id='.$adminRow['admin_id']);
                $_SESSION["adminrow"] =$adminRow['admin_id'];
                }
                else if($adminRow['admin_type']=='3')
                {
                header('Location: ../dashboard2.php?id='.$adminRow['admin_id']);
                $_SESSION["adminrow"] =$adminRow['admin_id'];
                }
            } else {
                $userFetch = "SELECT * from tbl_users WHERE user_mobile='$loginUsername' AND user_password='$loginPassword'";
                $userFetchResult = mysqli_query($connect, $userFetch);
                //check any user exisit
                if (mysqli_num_rows($userFetchResult) > 0) {
                    //which user 
                    $userRow = mysqli_fetch_assoc($userFetchResult);
                    // setting credentials
                    $_SESSION["smymSessionId"] = session_id();
                    $_SESSION["userId"] = $userRow['user_id'];
                    //rupatha exective
                    if ($userRow['role_id'] == 2) {
                        $_SESSION["userDesignation"] = 'rupatha';

                    }
                    //forane exective
                    else if ($userRow['role_id'] == 3) {
                        $_SESSION["userDesignation"] = 'forane';
                    }
                    //parish exective
                    elseif ($userRow['role_id'] == 4) {
                        $_SESSION["userDesignation"] = 'parish';
                    }
                    header("Location: ../index.php");
                }
                // No data found
                else {
                    $_SESSION['loginMessage'] = "Invalid Credentials";
                    header("Location: index.php");
                    die();
                }
            }
        } else {
            $_SESSION['loginMessage'] = "Please fill all fields";
            header("Location: index.php");
            die();
        }
    } else {
        $_SESSION['loginMessage'] = "Please fill all fields";
        header("Location: index.php");
        die();
    }
}
