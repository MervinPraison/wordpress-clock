<?php
/*
Plugin Name: Live Clock Widget
Plugin URI: https://github.com/MervinPraison/wordpress-clock
Description: Displays a modern, responsive analog or digital clock using JavaScript. Use shortcode [wpclock] or widget.
Version: 2.2
Author: Mervin Praison
Author URI: https://mer.vin
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: live-clock-widget
Domain Path: /languages
*/

// Enqueue scripts and styles
function wpclock_enqueue_assets() {
	wp_enqueue_style('wpclock-style', plugins_url('css/clock.css', __FILE__), array(), '2.0');
	wp_enqueue_script('wpclock-script', plugins_url('js/clock.js', __FILE__), array(), '2.0', true);
}
add_action('wp_enqueue_scripts', 'wpclock_enqueue_assets');

// Shortcode function
function wordclock($atts) {
	$atts = shortcode_atts(array(
		'type' => 'analog', // analog or digital
		'size' => '200',
		'timezone' => '',
	), $atts, 'wpclock');
	
	$type = sanitize_text_field($atts['type']);
	$size = absint($atts['size']);
	$timezone = sanitize_text_field($atts['timezone']);
	
	$clock_id = 'wpclock-' . uniqid();
	
	ob_start();
	?>
	<div class="wpclock-container wpclock-<?php echo esc_attr($type); ?>" 
	     id="<?php echo esc_attr($clock_id); ?>" 
	     data-type="<?php echo esc_attr($type); ?>" 
	     data-size="<?php echo esc_attr($size); ?>" 
	     data-timezone="<?php echo esc_attr($timezone); ?>" 
	     style="width: <?php echo esc_attr($size); ?>px; height: <?php echo esc_attr($size); ?>px;">
		<?php if ($type === 'analog') : ?>
			<div class="wpclock-analog">
				<div class="wpclock-face">
					<div class="wpclock-hour-hand"></div>
					<div class="wpclock-minute-hand"></div>
					<div class="wpclock-second-hand"></div>
					<div class="wpclock-center"></div>
				</div>
			</div>
		<?php else : ?>
			<div class="wpclock-digital">
				<span class="wpclock-time">00:00:00</span>
				<span class="wpclock-date"></span>
			</div>
		<?php endif; ?>
	</div>
	<?php
	return ob_get_clean();
}

add_shortcode('wpclock', 'wordclock');

// Widget class
class WPClock_Widget extends WP_Widget {
	public function __construct() {
		parent::__construct(
			'wpclock_widget',
			__('Live Clock Widget', 'live-clock-widget'),
			array(
				'description' => __('Displays a modern analog or digital clock', 'live-clock-widget'),
				'classname' => 'wpclock-widget'
			)
		);
	}
	
	public function widget($args, $instance) {
		echo $args['before_widget'];
		
		if (!empty($instance['title'])) {
			echo $args['before_title'] . esc_html($instance['title']) . $args['after_title'];
		}
		
		$type = !empty($instance['type']) ? $instance['type'] : 'analog';
		$size = !empty($instance['size']) ? absint($instance['size']) : 200;
		
		echo wordclock(array('type' => $type, 'size' => $size));
		
		echo $args['after_widget'];
	}
	
	public function form($instance) {
		$title = !empty($instance['title']) ? $instance['title'] : '';
		$type = !empty($instance['type']) ? $instance['type'] : 'analog';
		$size = !empty($instance['size']) ? $instance['size'] : '200';
		?>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('title')); ?>">
				<?php esc_html_e('Title:', 'live-clock-widget'); ?>
			</label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" 
			       name="<?php echo esc_attr($this->get_field_name('title')); ?>" 
			       type="text" value="<?php echo esc_attr($title); ?>">
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('type')); ?>">
				<?php esc_html_e('Clock Type:', 'live-clock-widget'); ?>
			</label>
			<select class="widefat" id="<?php echo esc_attr($this->get_field_id('type')); ?>" 
			        name="<?php echo esc_attr($this->get_field_name('type')); ?>">
				<option value="analog" <?php selected($type, 'analog'); ?>><?php esc_html_e('Analog', 'live-clock-widget'); ?></option>
				<option value="digital" <?php selected($type, 'digital'); ?>><?php esc_html_e('Digital', 'live-clock-widget'); ?></option>
			</select>
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('size')); ?>">
				<?php esc_html_e('Size (px):', 'live-clock-widget'); ?>
			</label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('size')); ?>" 
			       name="<?php echo esc_attr($this->get_field_name('size')); ?>" 
			       type="number" value="<?php echo esc_attr($size); ?>" min="100" max="500">
		</p>
		<?php
	}
	
	public function update($new_instance, $old_instance) {
		$instance = array();
		$instance['title'] = !empty($new_instance['title']) ? sanitize_text_field($new_instance['title']) : '';
		$instance['type'] = !empty($new_instance['type']) ? sanitize_text_field($new_instance['type']) : 'analog';
		$instance['size'] = !empty($new_instance['size']) ? absint($new_instance['size']) : 200;
		return $instance;
	}
}

// Register widget
function wpclock_register_widget() {
	register_widget('WPClock_Widget');
}
add_action('widgets_init', 'wpclock_register_widget');
