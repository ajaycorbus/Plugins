<?php
/**
 * @package facebook_widget
 */
/*
Plugin Name: Facebook Widget
Plugin URI: http://akismet.com/
Description: Used by millions, Akismet is quite possibly the best way in the world to <strong>protect your blog from spam</strong>. It keeps your site protected even while you sleep. To get started: 1) Click the "Activate" link to the left of this description, 2) <a href="http://akismet.com/get/">Sign up for an Akismet plan</a> to get an API key, and 3) Go to your Akismet configuration page, and save your API key.
Version: 3.1.5
Author: Ajay Kumar Chauhary
Author URI: http://automattic.com/wordpress-plugins/
License: GPLv2 or later
Text Domain: akismet
*/



 
 
class TutsplusText_Widget extends WP_Widget {
 
    public function __construct() {
     
        parent::__construct(
            'tutsplustext_widget',
            __( 'Facebook Widget', 'tutsplustextdomain' ),
            array(
                'classname'   => 'tutsplustext_widget',
                'description' => __( 'A basic text widget to demo the Tutsplus series on creating your own widgets.', 'tutsplustextdomain' )
                )
        );
       
        load_plugin_textdomain( 'tutsplustextdomain', false, basename( dirname( __FILE__ ) ) . '/languages' );
       
    }
 
    /**  
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget( $args, $instance ) {    
         
 extract( $args );
         
        $title      = apply_filters( 'widget_title', $instance['title'] );
        $message    = $instance['message'];
         
        echo $before_widget;
         
        if ( $title ) {
            echo $before_title . $title . $after_title;
        }
                             
       
		echo '<form class="form-group" action="#" method="get">
	<div class="col-sm-12">
		<h4 class="text-success">Enquiry Now<span  class="glyphicon glyphicon-remove pull-right" id="enquiry-close"></span></h4>
	</div>
		<div class="col-sm-12">
		<label for="name">Your Name</label><input type="text" name="name" class="form-control" placeholder="Enter your full name" />
	</div>
	<div class="col-sm-12">
		<label for="mobile">Mobile</label><input type="tel" name="mibile" class="form-control" placeholder="Enter your mobile number" />
	</div>
	<div class="col-sm-12">
		<label for="email">Your Email</label><input type="email" name="email" class="form-control" placeholder="Enter your email id" />
	</div>
	<div class="col-sm-12">
		<label for="query">Query</label><textarea  name="query" class="text-justify form-control" rows="5" placeholder="Write your query here..."></textarea>
	</div>
	<div class="col-sm-12">
	<span class="clearfix"></span>
		<button type="submit"  class="form-control btn btn-success"><span class="glyphicon glyphicon-send"></span> Send</button>
	</div>
	</form>';
		
		
         
    }
 
  
    /**
      * Sanitize widget form values as they are saved.
      *
      * @see WP_Widget::update()
      *
      * @param array $new_instance Values just sent to be saved.
      * @param array $old_instance Previously saved values from database.
      *
      * @return array Updated safe values to be saved.
      */
    public function update( $new_instance, $old_instance ) {        
         
        $instance = $old_instance;
         
        $instance['title'] = strip_tags( $new_instance['title'] );
        $instance['message'] = strip_tags( $new_instance['message'] );
         
        return $instance;
         
    }
  
    /**
      * Back-end widget form.
      *
      * @see WP_Widget::form()
      *
      * @param array $instance Previously saved values from database.
      */
    public function form( $instance ) {    
     
        $title      = esc_attr( $instance['title'] );
        $message    = esc_attr( $instance['message'] );
        ?>
         
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('message'); ?>"><?php _e('Simple Message'); ?></label> 
            <textarea class="widefat" rows="16" cols="20" id="<?php echo $this->get_field_id('message'); ?>" name="<?php echo $this->get_field_name('message'); ?>"><?php echo $message; ?></textarea>
        </p>
     
    <?php 
    }
     
}
 
/* Register the widget */
add_action( 'widgets_init', function(){
     register_widget( 'TutsplusText_Widget' );
});