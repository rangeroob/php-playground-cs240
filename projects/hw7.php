<?php

    function signChange ($changeIt) {
        if ($changeIt < 0) {
            return -$changeIt;
        }
    } // end function

    $changeIt = $_REQUEST['changeIt'];

    $newNum = signChange($changeIt);
    print "<h3>The new number is: $newNum</h3>";

?>
