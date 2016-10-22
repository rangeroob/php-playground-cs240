 <?php
    $roll = rand(1,6);
    
    print "You rolled a $roll";
    print "<br>";
    print "Refresh to row another die";

    if ($roll == 1) {
        print "<h1>Thats an Ace!!</h1>";
    } else {
        print "<br>";
        print "thats not an Ace ..";
    }

    if ($roll == 1) {
        $binValue = "001";
    } else if ($roll == 2) {
        $binValue = "010";
    } else if ($roll == 3) {
        $binValue = "011";
    } else if ($roll == 4) {
        $binValue = "100";    
    } else if ($roll == 5) {
        $binValue = "101";    
    } else if ($roll == 6) {
        $binValue = "111";
    } else {
        print "I am confused";
    }

    print "<br>";
    print "In binary that's $binValue"; 
?>
 
