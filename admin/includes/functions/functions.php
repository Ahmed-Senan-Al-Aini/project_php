<?php

function gettitel () {
    global $pagetitle;

    if ($pagetitle) {
        echo $pagetitle;
    } else {
        echo "Default";
    }
}

?>