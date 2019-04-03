<?php 


// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  //
  // Set a unique slug-like ID
  $prefix = 'my_framework';

  //
  // Create options
  CSF::createOptions( $prefix, array(
    'menu_title' => 'My Framework',
    'menu_slug'  => 'my-framework',
  ) );

  
  // Create a section 1
  CSF::createSection( $prefix, array(
    'title'  => 'slider section',
    'fields' => array(

      //
      // A text field
      array(
        'id'    => 'heading',
        'type'  => 'text',
        'title' => 'slider heading',
      ),
       // A textarea field
      array(
        'id'    => 'slider_contnt',
        'type'  => 'textarea',
        'title' => 'slider content',
      ),

    )
  ) );



  // Create a section 2

  CSF::createSection( $prefix, array(
    'title'  => 'slider image',
    'fields' => array(

      //
      // A text field
      array(
        'id'    => 'slider_image',
        'type'  => 'media',
        'title' => 'slider image',
      ),
      

    )
  ) );


 

}



















 ?>