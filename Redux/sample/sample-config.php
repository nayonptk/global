<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "redux_demo";

    // This line is only for altering the demo. Can be easily removed.
    $opt_name = apply_filters( 'redux_demo/opt_name', $opt_name );

    /*
     *
     * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
     *
     */

    $sampleHTML = '';
    if ( file_exists( dirname( __FILE__ ) . '/info-html.html' ) ) {
        Redux_Functions::initWpFilesystem();

        global $wp_filesystem;

        $sampleHTML = $wp_filesystem->get_contents( dirname( __FILE__ ) . '/info-html.html' );
    }

    // Background Patterns Reader
    $sample_patterns_path = ReduxFramework::$_dir . '../sample/patterns/';
    $sample_patterns_url  = ReduxFramework::$_url . '../sample/patterns/';
    $sample_patterns      = array();
    
    if ( is_dir( $sample_patterns_path ) ) {

        if ( $sample_patterns_dir = opendir( $sample_patterns_path ) ) {
            $sample_patterns = array();

            while ( ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) !== false ) {

                if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
                    $name              = explode( '.', $sample_patterns_file );
                    $name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
                    $sample_patterns[] = array(
                        'alt' => $name,
                        'img' => $sample_patterns_url . $sample_patterns_file
                    );
                }
            }
        }
    }

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Theme Options', 'redux-framework-demo' ),
        'page_title'           => __( 'Global Options', 'redux-framework-demo' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => false,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => true,
        // Show the time the page took to load, etc
        'update_notice'        => false,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => 'Global',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
    $args['admin_bar_links'][] = array(
        'id'    => 'redux-docs',
        'href'  => 'http://docs.reduxframework.com/',
        'title' => __( 'Documentation', 'redux-framework-demo' ),
    );

    $args['admin_bar_links'][] = array(
        //'id'    => 'redux-support',
        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
        'title' => __( 'Support', 'redux-framework-demo' ),
    );

    $args['admin_bar_links'][] = array(
        'id'    => 'redux-extensions',
        'href'  => 'reduxframework.com/extensions',
        'title' => __( 'Extensions', 'redux-framework-demo' ),
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/reduxframework',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://www.linkedin.com/company/redux-framework',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'redux-framework-demo' ), $v );
    } else {
        $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'redux-framework-demo' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'redux-framework-demo' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */


    /*
     * ---> START HELP TABS
     */

 Redux::setSection($opt_name, array( 

    'title'         =>__('Header Logo','global'),
    'id'            => 'logo_img',
    'icon'          => 'dashicons dashicons-upload',
    'fields'        => array(
            array(
                'title' => __('LOGO','global'),
                'id'    => 'main_logo',
                'type'  => 'media',
                'url'       => true,
                 'compiler'  => 'false',
              //  'default'   => array('url' => '/global_logo.png'),
             
            ),
          array(
                'title' => __('Logo-Name','global'),
                'id'    => 'logo-name',
                'type'  => 'text',
                'default'   => __('Global Media','global'),
             
            ),
    ),
 ));


 Redux::setSection($opt_name, array( 

    'title'         =>__('online marketing','global'),
    'id'            => 'marketing',
    'icon'          => 'dashicons dashicons-admin-links',
    'fields'        => array(
            array(
                'title' => __('Marketing-Title','global'),
                'id'    => 'market-Title',
                'type'  => 'text',
                'default'   => __('Global agency online marketing','global'),
             
            ),
          array(
                'title' => __('Market-link-text','global'),
                'id'    => 'market-link-text',
                'type'  => 'text',
                'default'   => __('Sign Up right now','global'),
             
            ),
          array(
                'title' => __('Market-link','global'),
                'id'    => 'market-link',
                'type'  => 'text',
                'default'   => __('google.com','global'),
             
            ),        
    ),
 ));


 Redux::setSection($opt_name, array( 

    'title'         =>__('Why we','global'),
    'id'            => 'Why-we',
    'icon'          => 'dashicons dashicons-admin-links',
    'fields'        => array(
            array(
                'title' => __('Why We Title','global'),
                'id'    => 'Why-we-Title',
                'type'  => 'text',
                'default'   => __('Why we?','global'),
             
            ),
          array(
                'title' => __('Why-We-content','global'),
                'id'    => 'Why-We-content',
                'type'  => 'text',
                'default'   => __('That can be definitely said about the contemporary travel websites. ','global'),
             
            ),
            array(
                'title' => __('Why-one-icon','fair'),
                'id'    => 'Why-one-icon',
                'type'  => 'media',
                'url'       => true,
                 'compiler'  => 'false',
             
            ),

          array(
                'title' => __('Why-We-one','global'),
                'id'    => 'Why-We-one',
                'type'  => 'text',
                'default'   => __('As the holidays approach, everything tends to get a little hectic. Stress levels increase, there seems to be more unfinished business to take care of than usual. And deadlines, which should always be met anyway,','global'),
             
            ), 
            array(
                'title' => __('Why-two-icon','fair'),
                'id'    => 'Why-two-icon',
                'type'  => 'media',
                'url'       => true,
                 'compiler'  => 'false',
             
            ),

          array(
                'title' => __('Why-We-two','global'),
                'id'    => 'Why-We-two',
                'type'  => 'text',
                'default'   => __('As the holidays approach, everything tends to get a little hectic. Stress levels increase, there seems to be more unfinished business to take care of than usual. And deadlines, which should always be met anyway,','global'),
             
            ), 
            array(
                'title' => __('Why-three-icon','fair'),
                'id'    => 'Why-three-icon',
                'type'  => 'media',
                'url'       => true,
                 'compiler'  => 'false',
             
            ),

          array(
                'title' => __('Why-We-three','global'),
                'id'    => 'Why-We-three',
                'type'  => 'text',
                'default'   => __('As the holidays approach, everything tends to get a little hectic. Stress levels increase, there seems to be more unfinished business to take care of than usual. And deadlines, which should always be met anyway,','global'),
             
            ), 
            array(
                'title' => __('Why-four-icon','fair'),
                'id'    => 'Why-four-icon',
                'type'  => 'media',
                'url'       => true,
                 'compiler'  => 'false',
             
            ),

          array(
                'title' => __('Why-We-four','global'),
                'id'    => 'Why-We-four',
                'type'  => 'text',
                'default'   => __('As the holidays approach, everything tends to get a little hectic. Stress levels increase, there seems to be more unfinished business to take care of than usual. And deadlines, which should always be met anyway,','global'),
             
            ),        
    ),
 ));





 Redux::setSection($opt_name, array( 

    'title'         =>__('How we are working','global'),
    'id'            => 'working',
    'icon'          => 'dashicons dashicons-upload',
    'fields'        => array(
            array(
                'title' => __('Working Title','global'),
                'id'    => 'working-title',
                'type'  => 'text',
                'default'   => __('How we are working','global'),     
            ),
          array(
                'title'     => __('working-content','global'),
                'id'        => 'working-subtitle',
                'type'      => 'text',
                'default'   => __('That can be definitely said about the contemporary travel websites.','global'),
            ),
          array(
                'title' => __('Working one','global'),
                'id'    => 'working-one',
                'type'  => 'text',
                'default'   => __('CPI','global'),     
            ),
          array(
                'title'     => __('working-two','global'),
                'id'        => 'working-two',
                'type'      => 'text',
                'default'   => __('CPA','global'),
            ),
         array(
                'title' => __('Working three','global'),
                'id'    => 'working-three',
                'type'  => 'text',
                'default'   => __('CPR','global'),     
            ),
          array(
                'title'     => __('working-fore','global'),
                'id'        => 'working-fore',
                'type'      => 'text',
                'default'   => __('CPC','global'),
            ),
        array(
                'title' => __('Working five','global'),
                'id'    => 'working-five',
                'type'  => 'text',
                'default'   => __('CPM','global'),     
            ),
         array(
                'title'     => __('working-six','global'),
                'id'        => 'working-six',
                'type'      => 'text',
                'default'   => __('RSM','global'),
            ),      

    ),
 ));



 Redux::setSection($opt_name, array( 

    'title'         =>__('Advertisers','global'),
    'id'            => 'Advertisers',
    'icon'          => 'dashicons dashicons-admin-links',
    'fields'        => array(
            array(
                'title' => __('Advertisers-Title','global'),
                'id'    => 'Advertisers-Title',
                'type'  => 'text',
                'default'   => __('Advertisers','global'),
             
            ),
          array(
                'title' => __('Advertisers-content','global'),
                'id'    => 'Advertisers-content',
                'type'  => 'text',
                'default'   => __('hat can be definitely said about the contemporary travel websites. Whether it is an page for a local hotel or a feature-heavy portal that belongs to big holiday company, it fantastic interfaces are user magnets.','global'),
             
            ),
          array(
                'title' => __('Advertisers-link','global'),
                'id'    => 'Advertisers-link',
                'type'  => 'text',
                'url'       => true,
                'default'   => __('google.com','global'),
             
            ),        
    ),
 ));





 Redux::setSection($opt_name, array( 

    'title'         =>__('publishers','global'),
    'id'            => 'publishers-area',
    'icon'          => 'dashicons dashicons-admin-users',
    'fields'        => array(
            array(
                'title' => __('publishers title','global'),
                'id'    => 'pub-title',
                'type'  => 'text',
                'default'   => __('publishers','global'),

            ),
          array(
                'title' => __('pub-content','global'),
                'id'    => 'pub-content',
                'type'  => 'text',
                'default'   => __('hat can be definitely said about the contemporary travel websites. Whether it is an page for a local hotel or a feature-heavy portal that belongs to big holiday company, it fantastic interfaces are user magnets.','global'),
             
            ),
            array(
                'title' => __('publishers link','global'),
                'id'    => 'pub-link',
                'type'  => 'text',
                'default'   => __('google.com','global'),

            ),
    ),
 ));




 Redux::setSection($opt_name, array( 

    'title'         =>__('about us','global'),
    'id'            => 'about-us-area',
    'icon'          => 'dashicons dashicons-admin-users',
    'fields'        => array(
            array(
                'title' => __('about us title','global'),
                'id'    => 'about-title',
                'type'  => 'text',
                'default'   => __('Fact about us','global'),

            ),
          array(
                'title' => __('about-content','global'),
                'id'    => 'about-content',
                'type'  => 'text',
                'default'   => __('Whether you are creating for web or print, designing brochures or user interfaces, developing a brand identity or creating a logo, one of the key elements of a successful project is the typeface you are using. ','global'),
             
            ),      
              array(
                'title' => __('about-icon-one','fair'),
                'id'    => 'about-icon-one',
                'type'  => 'media',
                'url'       => true,
                 'compiler'  => 'false',
             
            ),

             array(
                'title' => __('about-title-one','global'),
                'id'    => 'about-title-one',
                'type'  => 'text',
                'default'   => __('Tips for Creating a Great Personal ','global'),

            ),     
              array(
                'title' => __('about-icon-two','fair'),
                'id'    => 'about-icon-two',
                'type'  => 'media',
                'url'       => true,
                 'compiler'  => 'false',
             
            ),

             array(
                'title' => __('about-title-two','global'),
                'id'    => 'about-title-two',
                'type'  => 'text',
                'default'   => __('How to Create Checkout Form Using HTML ','global'),

            ),      
              array(
                'title' => __('about-icon-three','fair'),
                'id'    => 'about-icon-three',
                'type'  => 'media',
                'url'       => true,
                 'compiler'  => 'false',
             
            ),

             array(
                'title' => __('about-title-three','global'),
                'id'    => 'about-title-three',
                'type'  => 'text',
                'default'   => __('WebAssembly Now in Browser Preview Mode','global'),

            ),     
              array(
                'title' => __('about-icon-four','fair'),
                'id'    => 'about-icon-four',
                'type'  => 'media',
                'url'       => true,
                 'compiler'  => 'false',
             
            ),

             array(
                'title' => __('about-title-four','global'),
                'id'    => 'about-title-four',
                'type'  => 'text',
                'default'   => __('Adobe Introduces Project Felix, Sensei','global'),

            ),      
              array(
                'title' => __('about-icon-five','fair'),
                'id'    => 'about-icon-five',
                'type'  => 'media',
                'url'       => true,
                 'compiler'  => 'false',
             
            ),

             array(
                'title' => __('about-title-five','global'),
                'id'    => 'about-title-five',
                'type'  => 'text',
                'default'   => __('A Design Workflow Comparison','global'),

            ),     
              array(
                'title' => __('about-icon-six','fair'),
                'id'    => 'about-icon-six',
                'type'  => 'media',
                'url'       => true,
                 'compiler'  => 'false',
             
            ),

             array(
                'title' => __('about-title-six','global'),
                'id'    => 'about-title-six',
                'type'  => 'text',
                'default'   => __('Top 5 Underutilized Web Performance ','global'),

            ),



    ),
 ));


















 Redux::setSection($opt_name, array( 

    'title'         =>__('SOCIAL','global'),
    'id'            => 'social-area',
    'icon'          => 'dashicons dashicons-admin-users',
    'fields'        => array(
            array(
                'title' => __('social phone','global'),
                'id'    => 'social-phone',
                'type'  => 'text',
                'default'   => __('phone:','global'),

            ),
          array(
                'title' => __('social-phone-number','global'),
                'id'    => 'social-number',
                'type'  => 'text',
                'default'   => __('+38 (098) 483 61 77 ','global'),
             
            ),
            array(
                'title' => __('social Email','global'),
                'id'    => 'social-email',
                'type'  => 'text',
                'default'   => __('email:','global'),

            ),
            array(
                'title' => __('social Email Name','global'),
                'id'    => 'social-email-id',
                'type'  => 'text',
                'default'   => __('info@globalmedia.com','global'),

            ),

          array(
                'title' => __('social-Skype','global'),
                'id'    => 'social-skype',
                'type'  => 'text',
                'default'   => __('Skype:','global'),
             
            ),
            array(
                'title' => __('social Skype Name','global'),
                'id'    => 'social-skype-id',
                'type'  => 'text',
                'default'   => __('globalmedia','global'),

            ),
    ),
 ));








    /*
     * <--- END SECTIONS
     */


    /*
     *
     * YOU MUST PREFIX THE FUNCTIONS BELOW AND ACTION FUNCTION CALLS OR ANY OTHER CONFIG MAY OVERRIDE YOUR CODE.
     *
     */

    /*
    *
    * --> Action hook examples
    *
    */

    // If Redux is running as a plugin, this will remove the demo notice and links
    //add_action( 'redux/loaded', 'remove_demo' );

    // Function to test the compiler hook and demo CSS output.
    // Above 10 is a priority, but 2 in necessary to include the dynamically generated CSS to be sent to the function.
    //add_filter('redux/options/' . $opt_name . '/compiler', 'compiler_action', 10, 3);

    // Change the arguments after they've been declared, but before the panel is created
    //add_filter('redux/options/' . $opt_name . '/args', 'change_arguments' );

    // Change the default value of a field after it's been set, but before it's been useds
    //add_filter('redux/options/' . $opt_name . '/defaults', 'change_defaults' );

    // Dynamically add a section. Can be also used to modify sections/fields
    //add_filter('redux/options/' . $opt_name . '/sections', 'dynamic_section');

    /**
     * This is a test function that will let you see when the compiler hook occurs.
     * It only runs if a field    set with compiler=>true is changed.
     * */
    if ( ! function_exists( 'compiler_action' ) ) {
        function compiler_action( $options, $css, $changed_values ) {
            echo '<h1>The compiler hook has run!</h1>';
            echo "<pre>";
            print_r( $changed_values ); // Values that have changed since the last save
            echo "</pre>";
            //print_r($options); //Option values
            //print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS )
        }
    }

    /**
     * Custom function for the callback validation referenced above
     * */
    if ( ! function_exists( 'redux_validate_callback_function' ) ) {
        function redux_validate_callback_function( $field, $value, $existing_value ) {
            $error   = false;
            $warning = false;

            //do your validation
            if ( $value == 1 ) {
                $error = true;
                $value = $existing_value;
            } elseif ( $value == 2 ) {
                $warning = true;
                $value   = $existing_value;
            }

            $return['value'] = $value;

            if ( $error == true ) {
                $field['msg']    = 'your custom error message';
                $return['error'] = $field;
            }

            if ( $warning == true ) {
                $field['msg']      = 'your custom warning message';
                $return['warning'] = $field;
            }

            return $return;
        }
    }

    /**
     * Custom function for the callback referenced above
     */
    if ( ! function_exists( 'redux_my_custom_field' ) ) {
        function redux_my_custom_field( $field, $value ) {
            print_r( $field );
            echo '<br/>';
            print_r( $value );
        }
    }

    /**
     * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
     * Simply include this function in the child themes functions.php file.
     * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
     * so you must use get_template_directory_uri() if you want to use any of the built in icons
     * */
    if ( ! function_exists( 'dynamic_section' ) ) {
        function dynamic_section( $sections ) {
            //$sections = array();
            $sections[] = array(
                'title'  => __( 'Section via hook', 'redux-framework-demo' ),
                'desc'   => __( '<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'redux-framework-demo' ),
                'icon'   => 'el el-paper-clip',
                // Leave this as a blank section, no options just some intro text set above.
                'fields' => array()
            );

            return $sections;
        }
    }

    /**
     * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
     * */
    if ( ! function_exists( 'change_arguments' ) ) {
        function change_arguments( $args ) {
            //$args['dev_mode'] = true;

            return $args;
        }
    }

    /**
     * Filter hook for filtering the default value of any given field. Very useful in development mode.
     * */
    if ( ! function_exists( 'change_defaults' ) ) {
        function change_defaults( $defaults ) {
            $defaults['str_replace'] = 'Testing filter hook!';

            return $defaults;
        }
    }

    /**
     * Removes the demo link and the notice of integrated demo from the redux-framework plugin
     */
    if ( ! function_exists( 'remove_demo' ) ) {
        function remove_demo() {
            // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
            if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
                remove_filter( 'plugin_row_meta', array(
                    ReduxFrameworkPlugin::instance(),
                    'plugin_metalinks'
                ), null, 2 );

                // Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
                remove_action( 'admin_notices', array( ReduxFrameworkPlugin::instance(), 'admin_notices' ) );
            }
        }
    }

