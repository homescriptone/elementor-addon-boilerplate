<?php
namespace Homescriptone;
class Country extends \Elementor\Widget_Base {

	public function get_name() {
		return 'country';
	}

	public function get_title() {
		return esc_html__( 'Country', 'hs-elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-code';
	}

	public function get_categories() {
		return [ 'basic' ];
	}

	public function get_keywords() {
		return [ 'country' ];
	}

	protected function render() {
		?>

		<p> J'aime mon pays. </p>

		<?php
	}
}
