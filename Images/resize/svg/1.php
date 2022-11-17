<?php
$dom = new DOMDocument('1.0', 'utf-8');
$dom->load('home.svg');
$svg = $dom->documentElement;

if ( ! $svg->hasAttribute('viewBox') ) { // viewBox is needed to establish
                                         // userspace coordinates
     $pattern = '/^(\d*\.\d+|\d+)(px)?$/'; // positive number, px unit optional

     $interpretable =  preg_match( $pattern, $svg->getAttribute('width'), $width ) &&
                       preg_match( $pattern, $svg->getAttribute('height'), $height );

     if ( $interpretable ) {
        $view_box = implode(' ', [0, 0, $width[0], $height[0]]);
        $svg->setAttribute('viewBox', $view_box);
    } else { // this gets sticky
         throw new Exception("viewBox is dependent on environment");
    }
}

$svg->setAttribute('width', '43');
$svg->setAttribute('height', '43');
$dom->save('home2.svg');
?>
