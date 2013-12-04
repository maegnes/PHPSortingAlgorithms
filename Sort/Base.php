<?php
/**
* Abstract Class for all sorters
*
* @package Sort
* @author Magnus Buk <MagnusBuk@gmx.de>
*/
namespace Sort {
    abstract class Base {
        abstract function sort( $sortArray = Array() );
    }
}