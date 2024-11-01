<?php



/**

 * 

 */

class SoftinnRoomBookingSystem extends WP_Widget 

{

	public function __construct() {

		parent::WP_Widget(

			'SoftinnRoomBookingSystem', 
			
			//title of the widget in the WP dashboard
			__('Softinn Check Availability Widget'), 

			array('description'=>'Check Availability System.', 'class'=>'codewrapperwidget')

		);

	}

	

	/**

	 * 

	 * @param type $instance

	 */

	public function form($instance)

	{
		// these are the default widget values
		$default = array( 

			'title' => __(''),

			'id'=> __('')

			);
	
		$instance = wp_parse_args( (array)$instance, $default );

		//this is the html for the fields in the wp dashboard
		echo "\r\n";

		echo "<p>";

		echo "<label for='".$this->get_field_id('title')."'>" . __('Title') . ":</label> " ;

		echo "<input type='text' class='widefat' id='".$this->get_field_id('title')."' name='".$this->get_field_name('title')."' value='" . esc_attr($instance['title'] ) . "' />" ;

		echo "</p>";

		echo "<p>";

		echo "<label for='".$this->get_field_id('id')."'>" . __('Hotel ID') . ":</label> " ;

		echo "<input type='text' class='widefat' id='".$this->get_field_id('id')."' name='".$this->get_field_name('id')."' value='" . esc_attr( $instance['id'] ) . "' placeholder='Insert your hotel ID here.' />" ;

		echo "</p>";

	}

		

	/**

	 * 

	 * @param type $new_instance

	 * @param type $old_instance

	 * @return type

	 */

	public function update($new_instance, $old_instance) 

	{

		$instance = $old_instance;

		$instance['title'] = strip_tags($new_instance['title']);

		$instance['id'] = $new_instance['id'];

		return $instance;

	}

		

	/**

	 * Renders the actual widget

	 * 

	 * @global post $post

	 * @param array $args 

	 * @param type $instance

	 */

	public function widget($args, $instance) 

	{

		extract($args, EXTR_SKIP);
		
		//global WP theme-driven "before widget" code
		echo $before_widget;
		
		// code before your user input
		echo "<iframe src='http://softinn.azurewebsites.net/LatestPromotion/CheckAvailabilityWidget?hotelId=";
		echo $instance['id'];
		echo "' width='400px' height='285px' frameborder='no'></iframe>";

		//echo $instance['code'];
		
		// code after your user input
		//echo 'he';
			
		//global WP theme-driven "after widget" code
		echo $after_widget;
	}

}



