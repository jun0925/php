<?php 
// Sample integer value
$int = 20;

// Vlidate sample integer value
if(filter_var($int, FILTER_SANITIZE_NUMBER_INT)){
    echo "The <b>{$int}</b> is a valid integer";
}else{
    echo "The<b>{$int}</b> is not a valid integer";
}
?>