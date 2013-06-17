<?php 

phpinfo();
print "just another test for git to show changes";

print "this is the second commit hey esta chida esta cosa";

$flower_shop = array(
"rose" => array( "5.00", "7 items", "red" ),
"daisy" => array( "4.00", "3 items", "blue" ),
"orchid" => array( "2.00", "1 item", "white" ),
);

//print "rose costs 5.00, and you get 7 items."
echo "rose costs ".$flower_shop['rose'][0].", and you get ".$flower_shop['rose'][1].".";
//print "daisy costs 4.00, and you get 3 items."
echo "daisy costs ".$flower_shop['daisy'][0].", and you get ".$flower_shop['daisy'][1].".";
//print "orchild costs 2.00, and you get 1 item.
echo "orchid costs ".$flower_shop['orchid'][0].", and you get ".$flower_shop['orchild'][1].".";

?>
