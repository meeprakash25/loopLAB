<?php
session_start();

// function message()
// {
//     if (isset($_SESSION["message"])) {
//         $output = "<div class=\"\">";
//         $output .= htmlentities($_SESSION["message"]);
//         $output .= "</div>";
//         $msg = "<script>console.log(";
//         $msg .= $_SESSION["message"];
//         $msg .= ")</script>";
//         echo $msg;
//         //display only once, dissappears on reload
//         $_SESSION["message"] = null;
//
//         return $output;
//     }
// }

function errors()
{
    if (isset($_SESSION["errors"])) {
        $errors = ($_SESSION["errors"]);
        $msg = "<script>console.log(";
        $msg .= $_SESSION["errors"];
        $msg .= ")</script>";
        echo $msg;
        //display only once, dissappears on reload
        $_SESSION["errors"] = null;

        return $errors;
    }
}

?>
