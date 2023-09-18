<?php
namespace Homescriptone;
class HelloWorld extends \Elementor\Widget_Base {

	public function get_name() {
		return 'hello_world';
	}

	public function get_title() {
		return esc_html__( 'Hello World', 'hs-elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-code';
	}

	public function get_categories() {
		return [ 'basic' ];
	}

	public function get_keywords() {
		return [ 'hello', 'world' ];
	}

	protected function render() {
		?>

		<p> Hello World </p>

		<?php
	}
}
