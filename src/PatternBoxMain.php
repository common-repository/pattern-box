<?php

namespace PatternBox;

class PatternBoxMain {

    private $options;

    public function __construct() {
        $this->options = get_option('pattern_pack_settings', []);
        $this->register_pattern_categories();
        $this->register_patterns();        
    }

    // Register Pattern Categories
    public function register_pattern_categories() {
        // Define categories to register
        $dwpb_categories = [
            'dwpb-hero' => [
                'label' => __('PB Hero', 'pattern-box'),
                'description' => __('Pattern Box Hero Sections.', 'pattern-box'),
            ],
            'dwpb-about' => [
                'label' => __('PB About', 'pattern-box'),
                'description' => __('Pattern Box About Sections.', 'pattern-box'),
            ],
            'dwpb-service' => [
                'label' => __('PB Service', 'pattern-box'),
                'description' => __('Pattern Box Service Sections.', 'pattern-box'),
            ],
            'dwpb-team' => [
                'label' => __('PB Team', 'pattern-box'),
                'description' => __('Pattern Box Team Sections.', 'pattern-box'),
            ],
        ];

        // Register categories
        if (function_exists('register_block_pattern_category') && isset($this->options['categories'])) {
            foreach ($dwpb_categories as $dwpb_slug => $dwpb_category) {
                if (isset($this->options['categories'][$dwpb_slug]) && $this->options['categories'][$dwpb_slug]) {
                    register_block_pattern_category($dwpb_slug, $dwpb_category);
                }
            }
        }
    }

    
    // Register Patterns
    public function register_patterns() {    
        
        // Register Hero Patterns
        if (isset($this->options['categories']) && isset($this->options['categories']['dwpb-hero']) && $this->options['categories']['dwpb-hero']) {

            if (isset($this->options['hero-3']) && $this->options['hero-3']) {
                require_once __DIR__ . '/patterns/hero/hero-center-aligned.php';
            }

        }

        // Register About Patterns
        if (isset($this->options['categories']) && isset($this->options['categories']['dwpb-about']) && $this->options['categories']['dwpb-about']) {

            if (isset($this->options['about-1']) && $this->options['about-1']) {
                require_once __DIR__ . '/patterns/about/about-section-1.php';
            }

            if (isset($this->options['about-2']) && $this->options['about-2']) {
                require_once __DIR__ . '/patterns/about/about-section-2.php';
            }

            if (isset($this->options['about-3']) && $this->options['about-3']) {
                require_once __DIR__ . '/patterns/about/about-section-3.php';
            }

        }

        // Register Service Patterns
        if (isset($this->options['categories']) && isset($this->options['categories']['dwpb-service']) && $this->options['categories']['dwpb-service']) {
            if (isset($this->options['service-split-layout']) && $this->options['service-split-layout']) {
                require_once __DIR__ . '/patterns/service/service-split-layout.php';
            }
        }

        // Register Team Patterns
        if (isset($this->options['categories']) && isset($this->options['categories']['dwpb-team']) && $this->options['categories']['dwpb-team']) {

            if (isset($this->options['team-social-centered']) && $this->options['team-social-centered']) {
                require_once __DIR__ . '/patterns/team/team-social-centered.php';
            }

        }

    } 
}


