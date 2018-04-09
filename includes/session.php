<?php
session_start();

function session_message()
{
    if (isset($_SESSION["session_message"])) {
        $output = "<div class=\"alert alert-success\" role=\"alert\">";
        $output .= htmlentities($_SESSION["session_message"]);
        $output .= "</div>";
        $msg = "<script>console.log(";
        $msg .= $_SESSION["session_message"];
        $msg .= ")</script>";
        echo $msg;
        //display only once, dissappears on reload
        $_SESSION["session_message"] = null;

        return $output;
    }
}

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
