<?php

   function walking_robot($x, $y, $d, $dir) {

	$stringArray = str_split($dir);
	
	foreach( $stringArray as $key => $value ){
	    
	    if( $value == 'W' ) { continue; }

          switch ( strtoupper($d) ) {

               case 'EAST':
                if( $value == 'L' ){
					$d = 'NORTH';
				} elseif( $value == 'R' ) {
					$d = 'SOUTH';
				} elseif( true == is_numeric( $value ) ) {
					$x = $x + $value;
				}
                break;

               case 'WEST':
                if( $value == 'L' ){
					$d = 'SOUTH';
				} elseif( $value == 'R' ) {
					$d = 'NORTH';
				} elseif( true == is_numeric( $value ) ) {
					$x = $x - $value;
				} 
                break;

               case 'NORTH':
                if( $value == 'L' ){
					$d = 'WEST';
				} elseif( $value == 'R' ) {
					$d = 'EAST';
				} elseif( true == is_numeric( $value ) ) {
					$y = $y + $value;
				}
                break;

               case 'SOUTH':
                if( $value == 'L' ){
					$d = 'EAST';
				} elseif( $value == 'R' ) {
					$d = 'WEST';
				} elseif( true == is_numeric( $value ) ) {
					$y = $y - $value;
				}
                break;

               default:
                echo 'Please provide proper direction (EAST, WEST, NORTH or SOUTH)';
           }
	}
	
	return [ 'X' => $x, 'Y' => $y, 'D' => $d ];
  
}

print_r( walking_robot( 5, 2, 'SOUTH', 'RW2LW4R') );
?>
