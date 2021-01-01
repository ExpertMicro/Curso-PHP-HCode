<?php

/*
function test($callback) {
  $callback();
}

test(function() {
  echo "terminou";
});

*/

$fn = function($a){
  var_dump($a);
};

$fn("oi");
?>