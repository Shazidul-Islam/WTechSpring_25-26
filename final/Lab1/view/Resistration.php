<?php
include "../controller/ResistrationValidation.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Registration Form</title>
    </head>
    <body>
        <form method ="post" action="">
            <h2>Registration Form</h2>
            <table>
                <tr>
                    <td>
                        <p style="color: red;">* required field</p>
                    </td>
                </tr>
                <tr>
                    <td>Name:</td>
                    <td>
                        <input type="text" name="Name">
                    </td>
                    <td>
                        <p style="color: red;">*</p>
                    </td>
                </tr> 

                <tr>
                    <td>Email:</td>
                    <td>
                        <input type="email" name="Email">
                    </td>
                    <td><p style="color: red;">*</p></td>
                </tr>

                <tr>
                    <td>Website:</td>
                    <td>
                        <input type="url" name="Website">
                    </td>
                </tr>
                <tr>
                    <td>Comment:</td>
                    <td>
                        <textarea id="comment" name="Comment"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td>
                        <input type="radio" name="Gender" value="male"> Male
                        <input type="radio" name="Gender" value="female"> Female
                    </td>
                    <td><p style="color: red;">*</p></td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>