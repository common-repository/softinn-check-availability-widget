<?php

/*

    Plugin Name: Softinn Check Availability Widget
	
    Plugin URI:  http://mysoftinn.com/

    Description: Softinn Check Hotel Room Availability System

    Author: Softinn

    Author URI: http://mysoftinn.com/

    Version: 1.0.0


*/



require_once 'RoomBooking.php';



/**

 * 

 */

function register_roombooking_widget(){

	register_widget('SoftinnRoomBookingSystem');

}


add_action('widgets_init','register_roombooking_widget');




?>