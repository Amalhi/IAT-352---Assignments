<!-- HTML header, title, body tags, etc -->
<?php require("includes/header.php"); ?>

<!-- Main menu bar for all pages -->
<?php require("includes/main_menu_bar.php"); ?>

<div id="content-container">

    <?php
        if (is_numeric($_GET['id'])) {

            // set id for the current user view
            $userID = $_GET['id'];

            // load user file
            $userFile = file_get_contents("memberinfo.txt");

            // split into an array at every new line
            $usersArray = explode("\n", $userFile);

            // array to hold users when all fields are separated
            $usersSortedArray = array();

            foreach ($usersArray as $user) {
                // split each user into an array of fields and add it to an array
                $user = explode(" | ", $user);
                array_push($usersSortedArray, $user);
            }

            // set the user based on the current ID of the GET with the page
            $pageUser = $usersSortedArray[($userID-1)];

            // get the variables for the user
            $userName = $pageUser[1];
            $userEmail = $pageUser[2];
            // $userPassword = $pageUser[3];
            // $userProfilePhoto = $pageUser[4];
            $userProgram = $pageUser[5];
            $userConcentration = $pageUser[6];
            $userBio = $pageUser[7];

            echo "<div id=\"user-info-box\" class=\"container\">
                    <div id=\"user-main-profile-picture\">
                        <img src=\"img/profile_pic.jpg\" alt=\"".$userName."'s Profile Picture\">
                    </div>
                    <div id=\"user-info-content\">";

            echo "<h1 class=\"user-name\">".$userName."</h1>";
            echo "<div><a href=\"mailto:".$userEmail."?Subject=Hello%20again\" target=\"_top\">".$userEmail."</a></div>";
            echo "<p>Works at ".$userProgram." as ".$userConcentration.".</p>";
            echo "<p>".$userBio."</p>";
          
        }

        else {
            echo "<h1 class=\"main-header\">User not found!</h1>";
        }
    ?>

</div>

<?php require("includes/footer.php"); ?>
