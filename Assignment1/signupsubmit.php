<!--IAT 352 - Assignment 1 - Amrit Malhi -->
<!-- HTML header, title, body tags, etc -->
<?php require("includes/header.php"); ?>

<!-- Main menu bar for all pages -->
<?php require("includes/main_menu_bar.php"); ?>

<div id="content-container">
  <!--Code below made with the use of tutorials and examples -->
    <?php
        // print_r($_POST);

        // if the form was submitted
        if(isset($_POST['submit'])) {

            // check if each form input was filled, if not, make the variable and empty string
            if(isset($_POST['name'])) {
                $name = $_POST['name'];
            }
            else {
                $name = '';
            }

            if(isset($_POST['email'])) {
                $email = $_POST['email'];
            }
            else {
                $email = '';
            }

            if(isset($_POST['password'])) {
                $password = $_POST['password'];
            }
            else {
                $password = '';
            }

            // if(isset($_POST['profilePicture'])) {
            //     $profilePicture = $_POST['profilePicture'];
            // }
            // else {
            //     $profilePicture = '';
            // }

            if(isset($_POST['company'])) {
                $company = $_POST['company'];
            }
            else {
                $company = '';
            }
            if(isset($_POST['program'])) {
                $program = $_POST['program'];
            }
            else {
                $program = '';
            }
            if(isset($_POST['concentration'])) {
                $concentration = $_POST['concentration'];
            }
            else {
                $concentration = '';
            }
            if(isset($_POST['role'])) {
                $role = $_POST['role'];
            }
            else {
                $role = '';
            }

            if(isset($_POST['graduationYear'])) {
                $graduationYear = $_POST['graduationYear'];
            }
            else {
                $graduationYear = '';
            }

            if(isset($_POST['bio'])) {
                $bio = $_POST['bio'];
            }
            else {
                $bio = '';
            }

            // check if the file is not empty
            if (filesize("memberinfo.txt") > 0) {

                // load info file for all users
                $userFile = file_get_contents("memberinfo.txt");

                // split it at each new line
                $userArray = explode("\n", $userFile);

                // get the last user
                $lastUser = end($userArray);

                // split it into fields
                $lastUser = explode(" | ", $lastUser);

                // get the ID
                $lastUserID = $lastUser[0];

                $userDataString = "\n".($lastUserID+1)." | ".$name." | ".$email." | ".$password." | ".$company." | ".$graduationYear." | ".$bio." | ".$program." | ".$concentration." | ".$role;

            }

            else {
                $userDataString = "1 | ".$name." | ".$email." | ".$password." | ".$company." | ".$graduationYear." | ".$bio." | ".$program." | ".$concentration." | ".$role;


            }

            // write the user info to a text file
            file_put_contents("memberinfo.txt", $userDataString, FILE_APPEND);

            // inform the user that the account was added
            echo "<div id=\"sign-up-results\">
                <h2>Your account was created!</h2>
                <p>Name: ".$name."</p>
                <p>Email: ".$email."</p>
                <p>Password: ".$password."</p>

                <p>company: ".$company."</p>
                <p>role: ".$role."</p>
                <p>program: ".$program."</p>
                <p>concentration: ".$concentration."</p>
                <p>Graduation Year: ".$graduationYear."</p>
                <p>Bio: ".$bio."</p>
                </div>";
        }

        else {
            echo 'Submit button was not clicked.<br>';
        }
    ?>
</div>

<?php require("includes/footer.php"); ?>
