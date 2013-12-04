<?php

// Simple auto loader
function __autoload( $class ) {
    $classDetails = explode( '\\', $class );
    include_once( implode( '/', $classDetails ) . '.php' );
}

// Start with the algorithms
$toSort = Array( 2, 43, 15, 17, 4, 8, 47, 16, 1 );

// MergeSort Start //
$mergeSort = new Sort\MergeSort();
$mergeResult = $mergeSort->sort( $toSort );

// QuickSort Start //
$quickSort = new Sort\QuickSort();
$quickResult = $quickSort->sort( $toSort );

echo "\nPHPSortingAlgortihms Start\n";
echo str_repeat( "=", 50 ) . "\n";
echo "Sort the following Numbers: " . implode( ' ', Array( 2, 43, 15, 17, 4, 8, 47, 16, 1 ) ) . "\n";
echo str_repeat( "-", 50 ) . "\n";
echo "MergeSort: " . implode( ' ', $result ) . "\n";

// MergeSort End //