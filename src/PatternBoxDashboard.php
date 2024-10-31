<?php
namespace PatternBox;

class PatternBoxDashboard {

    private $options;

    public function __construct() {
        $this->options = get_option('pattern_pack_settings');
        add_action('admin_menu', [$this,'pattern_pack_add_admin_menu']);
        add_action('admin_init', [$this,'pattern_pack_settings_init']);
    }

    // Register admin dashboard
    public function pattern_pack_add_admin_menu(){
        add_menu_page(
            'Pattern Box Settings', 
            'Pattern Box', 
            'manage_options', 
            'pattern_pack', 
            [$this, 'pattern_pack_options_page']
        );
    }
    
    public function pattern_pack_settings_init() {
        register_setting('pattern_pack', 'pattern_pack_settings');
    
        add_settings_section(
            'pattern_pack_section', 
            esc_html__('Manage Patterns', 'pattern-box'), 
            [$this, 'pattern_pack_settings_section_callback'],
            'pattern_pack'
        );

        add_settings_field(
            'categories_enabled', 
            esc_html__('Enable/Disable Categories', 'pattern-box'), 
            [$this,'categories_enabled_render'], 
            'pattern_pack', 
            'pattern_pack_section'
        );
    
        add_settings_field(
            'patterns_enabled', 
            esc_html__('Enable/Disable Patterns', 'pattern-box'), 
            [$this, 'patterns_enabled_render'], 
            'pattern_pack', 
            'pattern_pack_section'
        );
    }
    
    public function pattern_pack_settings_section_callback() {
        echo esc_html__('Select which patterns you want to enable or disable.', 'pattern-box');
    }
    
    public function categories_enabled_render() {
        $categories = [
            'dwpb-hero' => 'Hero Patterns',
            'dwpb-about' => 'About Patterns',
            'dwpb-service' => 'Service Patterns',
            'dwpb-team' => 'Team Patterns',
        ];

        foreach ($categories as $category => $label) {
            $checked = isset($this->options['categories'][$category]) && $this->options['categories'][$category] ? 'checked' : '';
            echo '<div class="pp-switch" id="'. esc_attr($category) .'"><label class="switch">
                    <input type="checkbox" class="category-checkbox" data-category="' . esc_attr($category) . '" name="pattern_pack_settings[categories][' . esc_attr($category) . ']" value="1" ' . esc_attr($checked) . '>
                    <span class="slider"></span>
                  </label> ' . esc_html($label) . '<br></div>';
        }
    }
    
    public function patterns_enabled_render() {
        
        $patternCategories = [
            'dwpb-hero' => [
                'hero-3' => 'Hero Center Aligned',
            ],
            'dwpb-about' => [
                'about-1' => 'About 1',
                'about-2' => 'About 2',
                'about-3' => 'About 3',
            ],
            'dwpb-service' => [
                'service-split-layout' => 'Services Split Layout'
            ],
            'dwpb-team' => [
                'team-social-centered' => 'Team Social Centered'
            ],
        ];

        foreach ($patternCategories as $category => $patterns) {
            echo '<div id="'. esc_attr($category) .'-content" class="pp-content-hide"><h3>' . esc_html(ucfirst(str_replace('dwpb-', '', $category))) . ' Patterns: Enable/Disable</h3>';
            foreach ($patterns as $pattern => $label) {
                $checked = isset($this->options[$pattern]) && $this->options[$pattern] ? 'checked' : '';
                echo '<div><div class="pp-switch"><label class="switch">
                        <input type="checkbox" name="pattern_pack_settings[' . esc_attr($pattern) . ']" value="1" ' . esc_attr($checked) . '>
                        <span class="slider"></span>
                      </label> ' . esc_html($label) . '<br></div></div>';
            }
            echo "</div>";
        }
    }    
    
    public function pattern_pack_options_page() {
        ?>
        <form action="options.php" method="post">
            <div class="pp-form-body">
                <?php
                settings_fields('pattern_pack');
                do_settings_sections('pattern_pack');
                ?>
            </div>
            <div class="pp-form-submit">
                <?php
                submit_button();
                ?>
            </div>

        </form>
        <?php
    }
}
