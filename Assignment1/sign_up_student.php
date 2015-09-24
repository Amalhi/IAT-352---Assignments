<!-- HTML header, title, body tags, etc -->
<?php require("includes/header.php"); ?>

<!-- Main menu bar for all pages -->
<?php require("includes/main_menu_bar.php"); ?>


<div id="content-container">

    <!-- Sign up form -->
    <form name="input" action="sign_up_submit.php" method="post" class="sign-up-log-in-form container">

        <h1 class="center-text">SIAT COOP Member Sign up</h1>

        <input class="form-input" type="text" name="name" placeholder="Name">

        <input class="form-input" type="email" name="email" placeholder="Email">

        <input class="form-input" type="password" name="password" placeholder="Password">

        <!-- Profile picture upload just temp-->
        <!-- <input class="form-file-input" type='file' name='profilePicture'> -->

        <input class="form-input" type="text" name="program" placeholder="Program">

        <input class="form-input" type="text" name="concentration" placeholder="Concentration">

        <textarea class="form-textarea" name="bio" placeholder="Bio"></textarea>

        <input class="form-button button-grey" type="submit"  name="submit" value="Submit">

    </form>
</div>

<?php require("includes/footer.php"); ?>