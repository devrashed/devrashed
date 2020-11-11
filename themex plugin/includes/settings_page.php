<?php 

namespace themexpo\rkslide;


/**
 *  Setting Handle class
 *
 **/

class settings_page 
{
	 



/*  function setting_open()  {

    add_settings_section(
    'eg_setting_section',
    'Example settings section in reading',
    'eg_setting_section_callback_function',
    'slider_setting',
);

}

function eg_setting_section_callback_function( $arg ) {
    // echo section intro text here
    echo '<p>id: ' . $arg['id'] . '</p>';             // id: eg_setting_section
    echo '<p>title: ' . $arg['title'] . '</p>';       // title: Example settings section in reading
    echo '<p>callback: ' . $arg['callback'] . '</p>'; // callback: eg_setting_section_callback_function
}

 function slider_setting()
{
 echo "aa";
}
*/


public function setup_sections() {
    add_settings_section( 'our_first_section', 'My First Section Title', array( $this, 'section_callback' ), 'smashing_fields' );
    add_settings_section( 'our_second_section', 'My Second Section Title', array( $this, 'section_callback' ), 'smashing_fields' );
    add_settings_section( 'our_third_section', 'My Third Section Title', array( $this, 'section_callback' ), 'smashing_fields' );
}

public function section_callback( $arguments ) {
    switch ($arguments['id'] ){
        case 'our_first_section':
            echo 'This is the first description here!';
            break;
        case 'our_second_section':
            echo 'This one is number two';
            break;
        case 'our_third_section':
            echo 'Third time is the charm!';
            break;
    }
}


public function setup_fields() {
    add_settings_field( 'our_first_field', 'Field Name', array( $this, 'field_callback' ), 'smashing_fields', 'our_first_section' );
}

public function field_callback( $arguments ) {
    echo '<input name="our_first_field" id="our_first_field" type="text" value="' . get_option( 'our_first_field' ) . '" />';

    register_setting( 'smashing_fields', 'our_first_field' );
}

   
/*public function rashed()
{
   echo "aaa";
}
*/


} /*END the setting class*/

?>