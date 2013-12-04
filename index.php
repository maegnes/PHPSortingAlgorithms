<?php
// Simple auto loader
function __autoload( $class ) {
    $classDetails = explode( '\\', $class );
    include_once( implode( '/', $classDetails ) . '.php' );
}

// Start with the algorithms

// MergeSort Start //
$mergeSort = new Sort\MergeSort();

$result = $mergeSort->sort(
    Array( 2, 15, 43, 17, 4, 8, 47, 16, 1 )
);

echo implode( ' ', $result );

// MergeSort End //