<?php
if (isset($_GET['import-demo']) && $_GET['import-demo'] == true) {
    class RealEstatePropertyDemoImporter {

        public function real_estate_property_customizer_primary_menu() {
            // Create Primary Menu
            $real_estate_property_themename = 'Real Estate Property'; // Define the theme name
            $real_estate_property_menuname = $real_estate_property_themename . ' Primary Menu';
            $real_estate_property_bpmenulocation = 'primary_menu';
            $real_estate_property_menu_exists = wp_get_nav_menu_object($real_estate_property_menuname);

            if (!$real_estate_property_menu_exists) {
                $real_estate_property_menu_id = wp_create_nav_menu($real_estate_property_menuname);

                wp_update_nav_menu_item($real_estate_property_menu_id, 0, array(
                    'menu-item-title' => __('Home', 'real-estate-property'),
                    'menu-item-classes' => 'home',
                    'menu-item-url' => home_url('/'),
                    'menu-item-status' => 'publish',
                ));

                wp_update_nav_menu_item($real_estate_property_menu_id, 0, array(
                    'menu-item-title' => __('About Us', 'real-estate-property'),
                    'menu-item-classes' => 'about-us',
                    'menu-item-url' => get_permalink(get_page_id_by_title('about-us')),
                    'menu-item-status' => 'publish',
                ));

                wp_update_nav_menu_item($real_estate_property_menu_id, 0, array(
                    'menu-item-title' => __('Properties', 'real-estate-property'),
                    'menu-item-classes' => 'properties',
                    'menu-item-url' => get_permalink(get_page_id_by_title('properties')),
                    'menu-item-status' => 'publish',
                ));

                wp_update_nav_menu_item($real_estate_property_menu_id, 0, array(
                    'menu-item-title' => __('Blog', 'real-estate-property'),
                    'menu-item-classes' => 'blog',
                    'menu-item-url' => get_permalink(get_page_id_by_title('blog')),
                    'menu-item-status' => 'publish',
                ));

                wp_update_nav_menu_item($real_estate_property_menu_id, 0, array(
                    'menu-item-title' => __('Contact Us', 'real-estate-property'),
                    'menu-item-classes' => 'contact-us',
                    'menu-item-url' => get_permalink(get_page_id_by_title('contact-us')),
                    'menu-item-status' => 'publish',
                ));

                if (!has_nav_menu($real_estate_property_bpmenulocation)) {
                    $locations = get_theme_mod('nav_menu_locations');
                    $locations[$real_estate_property_bpmenulocation] = $real_estate_property_menu_id;
                    set_theme_mod('nav_menu_locations', $locations);
                }
            }
        }

        public function setup_widgets() {

        $real_estate_property_home_id='';
        $real_estate_property_home_content = '';
        $real_estate_property_home_title = 'Home';
        $real_estate_property_home = array(
            'post_type' => 'page',
            'post_title' => $real_estate_property_home_title,
            'post_content' => $real_estate_property_home_content,
            'post_status' => 'publish',
            'post_author' => 1,
            'post_slug' => 'home'
        );
        $real_estate_property_home_id = wp_insert_post($real_estate_property_home);
        
        add_post_meta( $real_estate_property_home_id, '_wp_page_template', 'templates/template-homepage.php' );

        update_option( 'page_on_front', $real_estate_property_home_id );
        update_option( 'show_on_front', 'page' );

                        // Create a Posts Page
            $real_estate_property_blog_title = 'About Us';
            $real_estate_property_blog_check = get_page_id_by_title($real_estate_property_blog_title);

            if ($real_estate_property_blog_check == 1) {
                $real_estate_property_blog = array(
                    'post_type' => 'page',
                    'post_title' => $real_estate_property_blog_title,
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_name' => 'about-us',
                    'post_content' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."',
                );
                $real_estate_property_blog_id = wp_insert_post($real_estate_property_blog);

                if (!is_wp_error($real_estate_property_blog_id)) {
                }
            }

                        // Create a Posts Page
            $real_estate_property_blog_title = 'Properties';
            $real_estate_property_blog_check = get_page_id_by_title($real_estate_property_blog_title);

            if ($real_estate_property_blog_check  == 1) {
                $real_estate_property_blog = array(
                    'post_type' => 'page',
                    'post_title' => $real_estate_property_blog_title,
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_name' => 'properties',
                    'post_content' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."',
                );
                $real_estate_property_blog_id = wp_insert_post($real_estate_property_blog);

                if (!is_wp_error($real_estate_property_blog_id)) {
                }
            }

                         // Create a Posts Page
            $real_estate_property_blog_title = 'Blog';
            $real_estate_property_blog_check = get_page_id_by_title($real_estate_property_blog_title);

            if ($real_estate_property_blog_check  == 1) {
                $real_estate_property_blog = array(
                    'post_type' => 'page',
                    'post_title' => $real_estate_property_blog_title,
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_name' => 'blog',
                    'post_content' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."',
                );
                $real_estate_property_blog_id = wp_insert_post($real_estate_property_blog);

                if (!is_wp_error($real_estate_property_blog_id)) {
                }
            }

                         // Create a Posts Page
            $real_estate_property_blog_title = 'Contact Us';
            $real_estate_property_blog_check = get_page_id_by_title($real_estate_property_blog_title);

            if ($real_estate_property_blog_check  == 1) {
                $real_estate_property_blog = array(
                    'post_type' => 'page',
                    'post_title' => $real_estate_property_blog_title,
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_name' => 'contact-us',
                    'post_content' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."',
                );
                $real_estate_property_blog_id = wp_insert_post($real_estate_property_blog);

                if (!is_wp_error($real_estate_property_blog_id)) {
                }
            }

		//---Header--//

		set_theme_mod('real_estate_property_top_twitter_link', '#');
		set_theme_mod('real_estate_property_top_linkdin_link', '#');
		set_theme_mod('real_estate_property_top_youtube_link', '#');
		set_theme_mod('real_estate_property_top_facebook_link', '#');
		set_theme_mod('real_estate_property_top_instagram_link', '#');

		set_theme_mod('real_estate_property_header_register_link', '#');
		set_theme_mod('real_estate_property_header_register_text', 'Add Property');

		set_theme_mod('real_estate_property_header_phone_number', 'Call: +1234567890');
		set_theme_mod('real_estate_property_header_email_address', 'info@example.com');

		//-----Slider-----//

		set_theme_mod( 'real_estate_property_slide_on_off', 'on' );

		set_theme_mod('real_estate_property_slide_count','3');

		$real_estate_property_slider_title=array('Your Gateway to a Richer Life', 'Unlock the Door to a More Abundant Life', 'Your Key to a Life of Greater Fulfillment');

		for ($i=1; $i <= 3; $i++) {
			set_theme_mod( 'real_estate_property_slider_image'.$i, get_template_directory_uri().'/images/demo-import-images/slides/slide_'.$i.'.png' );
			
			set_theme_mod('real_estate_property_slider_heading'.$i, $real_estate_property_slider_title[$i - 1]);
			set_theme_mod('real_estate_property_slider_heading_link'.$i,'#');
			set_theme_mod('real_estate_property_slider_content'.$i,'Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.');
			set_theme_mod('real_estate_property_slider_button_link'.$i, '#');
			set_theme_mod('real_estate_property_slider_button_text'.$i, 'Buy Now');
		}

		//-----Projects-----//

		set_theme_mod( 'real_estate_property_project_on_off', 'on' );

		set_theme_mod('real_estate_property_project_main_heading','Our Recent Projects');

		set_theme_mod('real_estate_property_project_count','3');

		$real_estate_property_features_title=array('The best place to buy property for investing', 'How to achieve financial independence through real...', 'Dream house plus best rates, How to calculate?');

		$real_estate_property_features_date=array('05 December 2021', '15 January 2021', '21 December 2021');

		$real_estate_property_features_category=array('Investment', 'Finance', 'Property');

		for ($i=1; $i <= 3; $i++) {
			set_theme_mod( 'real_estate_property_project_image'.$i, get_template_directory_uri().'/images/demo-import-images/project/project_'.$i.'.jpg' );
			set_theme_mod('real_estate_property_project_heading'.$i, $real_estate_property_features_title[$i - 1]);
			set_theme_mod('real_estate_property_project_date'.$i, $real_estate_property_features_date[$i - 1]);
			set_theme_mod('real_estate_property_project_category'.$i, $real_estate_property_features_category[$i - 1]);
			set_theme_mod('real_estate_property_project_content'.$i,'Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.');
		}

        }
    }

    // Instantiate the class and call its methods
    $demo_importer = new RealEstatePropertyDemoImporter();
    $demo_importer->setup_widgets();
    $demo_importer->real_estate_property_customizer_primary_menu();
}
?>