<?php
/**
 * Implementation of sorting algorithms in php
 *
 * @author Magnus Buk <MagnusBuk@gmx.de>
 */
namespace Sort {

    /**
     * QuickSort Implementation
     *
     * @package Sort
     * @author Magnus Buk <MagnusBuk@gmx.de>
     */
    class QuickSort extends Base {

        public function sort( $sortArray = Array() ) {
            return $this->quickSort( $sortArray );
        }

        public function quickSort( $f1 ){
            if( 1 == count( $f1 ) )
                return $f1;
            $result = $this->divide( $f1 );
            return $this->merge(
                $this->divide( $result[0] ),
                $this->divide( $result[1] )
            );
        }

        public function merge( $f1, $f2 ) {
            $result = Array();
            foreach( $f1 as $v ) {
                $result[] = $v;
            }
            foreach( $f2 as $v ) {
                $result[] = $v;
            }
            return $result;
        }

        public function divide( $f1 ) {
            // Generate pivot element
            $pivot = floor( min( $f1 ) + max( $f1 ) / 2 );
            $result = Array( 0 => Array(), 1 => Array() );
            foreach( $f1 as $int ) {
                if( $int < $pivot )
                    $result[0][] = $int;
                else
                    $result[1][] = $int;
            }
            sort( $result[0], $result[1] ); # @todo - build correct quick sort sorting!
            return $result;
        }

    }
}