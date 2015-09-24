<!-- HTML header, title, body tags, etc -->
<?php require("includes/header.php"); ?>

<!-- Main menu bar for all pages -->
<?php require("includes/main_menu_bar.php"); ?>
<div id="content-container">

    <!-- Select Member Type up form -->
        <h1 class="center-text">Would you like to:</h1>
        <!-- sign up for industry -->
<div class="choose">
        <a  class="button-grey2" id="sign-up-button" href="sign_up_student.php">
            Sign up as COOP Student
        </a>

        <!-- sign up for industry -->
        <a  class="button-grey2" id="sign-up-button" href="sign_up_company.php">
          Sign up as Industry Member
        </a>
</div>
</div>


<?php require("includes/footer.php"); ?>
