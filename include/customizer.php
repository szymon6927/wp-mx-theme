<?php
    function create_button_field($wp_customize, $section_name, $field_name, $default_url, $default_text, $priority, $theme) {
        $wp_customize->add_setting($field_name.'_text', array(
            'default' => _x($default_text, $theme),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control($field_name.'_text', array(
            'label' => __('Button Text', $theme),
            'section' => $section_name,
            'priority' => $priority
        ));

        $wp_customize->add_setting($field_name.'_url', array(
            'default' => _x($default_url, $theme),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control($field_name.'_url', array(
            'label' => __('Button URL', $theme),
            'section' => $section_name,
            'priority' => $priority + 1
        ));
    }

    function wpb_customize_register($wp_customize) {
        // Showcase Section
        $wp_customize->add_section('showcase', array(
            'title' => __('Showcase', 'mx-theme'),
            'description' => sprintf(__('Options for showcase', 'mx-theme')),
            'priority' => 130
        ));

        $wp_customize->add_setting('showcase_image', array(
            'default'   => get_bloginfo('template_directory').'/img/showcase.jpg',
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
            'label' => __('Showcase Image', 'mx-theme'),
            'section' => 'showcase',
            'settings' => 'showcase_image',
            'priority' => 1
        )));

        $wp_customize->add_setting('showcase_heading', array(
            'default' => _x('Custom Boostrap Wordpress theme', 'mx-theme'),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('showcase_heading', array(
            'label' => __('Heading', 'mx-theme'),
            'section' => 'showcase',
            'priority' => 2
        ));

        $wp_customize->add_setting('showcase_text', array(
            'default' => _x('Lorem ipsum dolor sit amet', 'mx-theme'),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('showcase_text', array(
            'label' => __('Text', 'mx-theme'),
            'section' => 'showcase',
            'priority' => 3
        ));

        create_button_field($wp_customize, 'showcase', 'showcase_btn', 'http://www.test.pl', 'Lorem ipsum', 4, 'mx-theme');

        // $wp_customize->add_setting('btn_url', array(
        //     'default' => _x('http://test.com', 'mx-theme'),
        //     'type' => 'theme_mod'
        // ));

        // $wp_customize->add_control('btn_url', array(
        //     'label' => __('Button URL', 'mx-theme'),
        //     'section' => 'showcase',
        //     'priority' => 4
        // ));

        // $wp_customize->add_setting('btn_text', array(
        //     'default' => _x('Read more', 'mx-theme'),
        //     'type' => 'theme_mod'
        // ));

        // $wp_customize->add_control('btn_text', array(
        //     'label' => __('Button Text', 'mx-theme'),
        //     'section' => 'showcase',
        //     'priority' => 5
        // ));
    }

    function WideParagraph($wp_customize) {
        // WideParagraph
        $wp_customize->add_section('WideParagraph', array(
            'title' => __('Wide Paragraph under Showcase', 'mx-theme'),
            'description' => sprintf(__('Options for wide paragraph', 'mx-theme')),
            'priority' => 140
        ));

        $wp_customize->add_setting('WideParagraph_heading', array(
            'default' => _x('Czym się zajmujemy', 'mx-theme'),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('WideParagraph_heading', array(
            'label' => __('Heading', 'mx-theme'),
            'section' => 'WideParagraph',
            'priority' => 1
        ));

        $wp_customize->add_setting('WideParagraph_text', array(
            'default' => _x('Lorem ipsum dolor sit amet', 'mx-theme'),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('WideParagraph_text', array(
            'type' => 'textarea',
            'label' => __('Text', 'mx-theme'),
            'section' => 'WideParagraph',
            'priority' => 2
        ));

        create_button_field($wp_customize, 'WideParagraph', 'paragraph_btn','http://www.test.pl', 'Lorem ipsum', 3, 'mx-theme');
    }

    function WorkingAt($wp_customize) {
        $wp_customize->add_section('WorkingAt', array(
            'title' => __('Working At', 'mx-theme'),
            'description' => sprintf(__('Options for Working At section', 'mx-theme')),
            'priority' => 150
        ));

        $wp_customize->add_setting('WorkingAt_heading', array(
            'default' => _x('W chwili obecnej trwają prace nad', 'mx-theme'),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('WorkingAt_heading', array(
            'label' => __('Heading', 'mx-theme'),
            'section' => 'WorkingAt',
            'priority' => 1
        ));

        for($i=0; $i<4; $i++) {
            $wp_customize->add_setting('Work-title'.$i, array(
                'default' => _x('Praca nad '.$i, 'mx-theme'),
                'type' => 'theme_mod'
            ));

            $wp_customize->add_control('Work-title'.$i, array(
                'label' => __('Work '.$i.' - title', 'mx-theme'),
                'section' => 'WorkingAt',
                'priority' => $i + 2
            ));

            $wp_customize->add_setting('Work-desc'.$i, array(
                'default' => _x('Opis '.$i, 'mx-theme'),
                'type' => 'theme_mod'
            ));

            $wp_customize->add_control('Work-desc'.$i, array(
                'type' => 'textarea',
                'label' => __('Work '.$i.' - desc', 'mx-theme'),
                'section' => 'WorkingAt',
                'priority' => $i + 3
            ));
        }
    }
    
    function Achievements($wp_customize) {
        $wp_customize->add_section('OurAchievements', array(
            'title' => __('Our Achievements', 'mx-theme'),
            'description' => sprintf(__('Options for Our Achievements section', 'mx-theme')),
            'priority' => 160
        ));

        $wp_customize->add_setting('OurAchievements_heading', array(
            'default' => _x('Nasze osiągnięcia', 'mx-theme'),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('OurAchievements_heading', array(
            'label' => __('Heading', 'mx-theme'),
            'section' => 'OurAchievements',
            'priority' => 1
        ));

        for($i=0;$i<3;$i++) {
            $wp_customize->add_setting('OurAchievements-desc'.$i, array(
                'default' => _x('Opis '.$i, 'mx-theme'),
                'type' => 'theme_mod'
            ));

            $wp_customize->add_control('OurAchievements-desc'.$i, array(
                'type' => 'textarea',
                'label' => __('Achievements '.$i.' - desc', 'mx-theme'),
                'section' => 'OurAchievements',
                'priority' => $i + 1
            ));
        }

        create_button_field($wp_customize, 'OurAchievements', 'OurAchievements_btn', 'http://www.test.pl', 'Lorem ipsum', 4, 'mx-theme');
    }

    function ContactOnHomePage($wp_customize) {
        $wp_customize->add_section('ContactHomePage', array(
            'title' => __('Contact on home page', 'mx-theme'),
            'description' => sprintf(__('Options contact section', 'mx-theme')),
            'priority' => 170
        ));

        $wp_customize->add_setting('contact_heading', array(
            'default' => _x('Zainteresowany?', 'mx-theme'),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('contact_heading', array(
            'label' => __('Heading', 'mx-theme'),
            'section' => 'ContactHomePage',
            'priority' => 1
        ));

        $wp_customize->add_setting('contact_desc', array(
            'default' => _x('Zostaw nam kontakt do Siebie', 'mx-theme'),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('contact_desc', array(
            'label' => __('Desc', 'mx-theme'),
            'section' => 'ContactHomePage',
            'priority' => 2
        ));

        $wp_customize->add_setting('contact_tel', array(
            'default' => _x('+48 123 456 789', 'mx-theme'),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('contact_tel', array(
            'label' => __('Tel', 'mx-theme'),
            'section' => 'ContactHomePage',
            'priority' => 3
        ));

        $wp_customize->add_setting('contact_mail', array(
            'default' => _x('test@test.com', 'mx-theme'),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('contact_mail', array(
            'label' => __('Mail', 'mx-theme'),
            'section' => 'ContactHomePage',
            'priority' => 4
        ));
    }

    add_action('customize_register', 'wpb_customize_register');
    add_action('customize_register', 'WideParagraph');
    add_action('customize_register', 'WorkingAt');
    add_action('customize_register', 'Achievements');
    add_action('customize_register', 'ContactOnHomePage');
?>