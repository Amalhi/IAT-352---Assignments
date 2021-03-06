<!--IAT 352 - Assignment 1 - Amrit Malhi -->
<!-- HTML header, title, body tags, etc -->
<?php require("includes/header.php"); ?>

<!-- Main menu bar for all pages -->
<?php require("includes/main_menu_bar.php"); ?>

<div id="content-container">
    <h1 class="main-header">Members</h1>

    <div class="toggle-switch" id="hs-members-toggle">
        <!-- Choose how to sort the data -->
        <a class="toggle-switch-left " href="members.php">
            Members</a><a class="toggle-switch-right active" href="company.php">
            Company</a>
    </div>

    <div id="company-list" class="container">
<!--Code below made with the use of tutorials and examples -->
        <?php
            // compare two names using the "human order" algrorithm
            function compare_name($a, $b) {
                return strnatcasecmp($a[1], $b[1]);
            }

            if (filesize("memberinfo.txt") > 0) {
                // array to hold users when all fields are separated
                $usersSortedArray = array();

                // array to hold users when all fields are separated and sorted
                $companysArray = array();

                // load info file for all users
                $userFile = file_get_contents("memberinfo.txt");

                // create an array of each user by splitting it every new line
                $usersArray = explode("\n", $userFile);

                foreach ($usersArray as $user) {
                    // split each user into an array of fields and add it to an array
                    $user = explode(" | ", $user);
                    array_push($usersSortedArray, $user);
                }

                // go through each user
                foreach($usersSortedArray as $user) {

                    // check if the user's company is not in the list of companys
                    if (in_array($user[5], $companysArray) == false) {

                        // add it to the list of companys if it's not there
                        array_push($companysArray, $user[5]);
                    }
                }

                // sort the companies using a natural order algorithm
                natcasesort($companysArray);

                // sort the array of arrays alphabetically by name
                usort($usersSortedArray, 'compare_name');

                // loop through all the companies
                foreach($companysArray as $company) {

                    echo "<div><b>".$company."</b></div><ul>";

                    // loop through all the users
                    foreach($usersSortedArray as $user){

                        // check if the user'scompanies matches the one currently being checked
                        if ($user[5] == $company) {

                            // print it as a list item if it is
                            echo "<li><a href=\"user.php?id=".$user[0]."\">".$user[1]."</a></li>";
                        }
                    }
                    echo "</ul>";
                }
            }
        ?>
    </table>
</div>
</div>

<?php require("includes/footer.php"); ?>
