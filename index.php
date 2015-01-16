<?php
if(is_string())
    
    echo "This is a string";
else
    echo "This is not a string";
var_dump(is_string('PZ'));
var_dump(is_string('12345'));
var_dump(is_string(321));
var_dump(is_string(false));
?>