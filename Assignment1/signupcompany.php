<!-- HTML header, title, body tags, etc -->
<?php require("includes/header.php"); ?>

<!-- Main menu bar for all pages -->
<?php require("includes/main_menu_bar.php"); ?>

<div id="content-container">

    <!-- Sign up form -->
    <form name="input" action="signupsubmit.php" method="post" class="sign-up-log-in-form container">

        <h1 class="center-text">Industry Member Sign up</h1>

        <!-- Possible future implimentation one signup form which chnages -->
        <!-- <input type="radio" name="membertype" value="student">Student
        <input type="radio" name="membertype" value="industry">Industry -->

        <input class="form-input" type="text" name="name" placeholder="Name">

        <input class="form-input" type="email" name="email" placeholder="Email">

        <input class="form-input" type="password" name="password" placeholder="Password">

        <!-- Profile picture upload just temp-->
        <!-- <input class="form-file-input" type='file' name='profilePicture'> -->

        <input class="form-input" type="text" name="company" placeholder="Company">

        <input class="form-input" type="text" name="role" placeholder="Role">

        <textarea class="form-textarea" name="bio" placeholder="Bio"></textarea>

        <input class="form-button button-submit" type="submit"  name="submit" value="Submit">
    </form>
</div>

<?php require("includes/footer.php"); ?>
