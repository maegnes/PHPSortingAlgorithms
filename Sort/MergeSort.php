<?php
/**
 * Implementation of sorting algorithms in php
 *
 * @author Magnus Buk <MagnusBuk@gmx.de>
 */
namespace Sort {

    /**
     * MergeSort Implementation
     *
     * @package Magnus\FOM\Sort
     * @author Magnus Buk <MagnusBuk@gmx.de>
     */
    class MergeSort extends Base {

        public function sort( $sortArray = Array() ) {
            return $this->mergeSort( $sortArray );
        }

        /**
         * Main method for the MergeSort
         *
         * @param array $f1
         * @return array
         */
        public function mergeSort( $f1 = Array() ) {
            if( 1 == count( $f1 ) )
                return $f1;
            $result = $this->divide( $f1 );
            return $this->merge(
                $this->mergeSort( $result[0] ),
                $this->mergeSort( $result[1] )
            );
        }

        /**
         * Divide one array to two array parts
         *
         * @param $f1
         * @return array
         */
        public function divide( $f1 ) {
            return Array(
                array_splice(
                    $f1,
                    ( 0 == ( count( $f1 ) % 2 ) ) ? ( count( $f1 ) / 2 ) : ( count( $f1 ) -1 ) / 2
                ),
                $f1
            );
        }

        /**
         * Merge the two given Arrays
         *
         * @param array $f1
         * @param array $f2
         * @return array
         */
        public function merge( $f1 = Array(), $f2 = Array() ) {
            $helpArray = Array();
            while( true ) { # i've ever wanted to do this :)
                if( 0 == count( $f1 ) || 0 == count( $f2 ) )
                    $helpArray[] = ( 0 == count( $f1 ) ) ? array_shift( $f2 ) : array_shift( $f1 );
                elseif( (int)$f1[0] < (int)$f2[0] )
                    $helpArray[] = array_shift( $f1 );
                else
                    $helpArray[] = array_shift( $f2 );
                // If both arrays are empty, leave loop
                if( 0 == count( $f1 ) && 0 == count( $f2 ) )
                    break;
            }
            return $helpArray;
        }
    }
}
