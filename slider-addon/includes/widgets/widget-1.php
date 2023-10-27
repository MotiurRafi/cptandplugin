<?php

namespace Elementor_Test_Addon;

class Widget_1 extends \Elementor\Widget_Base
{

	public function get_name()
	{
		return 'widget_name';
	}

	public function get_title()
	{
		return esc_html__('Add Lots', 'textdomain');
	}

	public function get_icon()
	{
		return 'dashicons-admin-generic';
	}

	public function get_custom_help_url()
	{
		return 'https://go.elementor.com/widget-name';
	}

	public function get_categories()
	{
		return ['basic'];
	}

	public function get_keywords()
	{
		return ['keyword', 'keyword'];
	}


	protected function register_controls()
	{

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__('Content', 'textdomain'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'title',
			[
				'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__('Title', 'textdomain'),
				'placeholder' => esc_html__('Enter a title', 'textdomain'),
				'default' => 'We Provide Medical Services That You Can Trust!'
			]
		);
		$this->add_control(
			'description',
			[
				'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__('Description', 'textdomain'),
				'placeholder' => esc_html__('Enter descption', 'textdomain'),
				'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl pellentesque, faucibus libero eu, gravida quam.'
			]
		);

		$this->add_control(
			'image',
			[
				'label' => esc_html__('Choose Image', 'textdomain'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => 'http://localhost/mywpproject/wp-content/uploads/2023/10/slider2.jpg',
				],
			]
		);

		$this->add_control(
			'button_1_text',
			[
				'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__('Button 1 Text', 'textdomain'),
				'placeholder' => esc_html__('Enter button text', 'textdomain'),
				'default' => 'Get Appointment'
				]
			);
			
			$this->add_control(
				'button_1_url',
				[
					'label' => esc_html__('Button 1 URL', 'textdomain'),
					'type' => \Elementor\Controls_Manager::URL,
					]
		);

		$this->add_control(
			'button_2_text',
			[
				'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__('Button 2 Text', 'textdomain'),
				'placeholder' => esc_html__('Enter button text', 'textdomain'),
				'default' => 'Learn More'
			]
		);

		$this->add_control(
			'button_2_url',
			[
				'label' => esc_html__('Button 2 URL', 'textdomain'),
				'type' => \Elementor\Controls_Manager::URL,
			]
		);


		$this->end_controls_section();
	}


	protected function render()
	{
		$settings = $this->get_settings_for_display();

		$title = $settings['title'];
		$desc = $settings['description'];
		$image_url = $settings['image']['url'];
		$button_1_text = $settings['button_1_text'];
		$button_1_url = $settings['button_1_url']['url'];
		$button_2_text = $settings['button_2_text'];
		$button_2_url = $settings['button_2_url']['url'];
		echo '<div class="widget-container">';
		echo '<h2>' . esc_html($title) . '</h2>';
		echo '<p>' . esc_html($desc) . '</p>';
		echo '<a href="' . esc_url($button_1_url) . '" class="button">' . esc_html($button_1_text) . '</a>';
        echo '<a href="' . esc_url($button_2_url) . '" class="button">' . esc_html($button_2_text) . '</a>';
		echo '<img src="' . esc_url($image_url) . '" alt="Widget Image" />';

		echo '</div>';
	}
}
