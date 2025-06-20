<?php // Admin Page
class Admin {

    public function __construct() {

        // Remove all third party notices and enqueue style and script
        add_action('admin_enqueue_scripts', [$this, 'admin_script_n_style']);

        // Add admin page
        add_action('admin_menu', [$this, 'postblog_admin_page']);

        add_action('wp_ajax_admin_install_plug', array($this, 'install_plug_ajax'));
        // add_action('wp_ajax_nopriv_admin_install_plug', array($this, 'install_plug_ajax'));

    }

    public function admin_script_n_style() {
        $screen = get_current_screen();
        if (isset($screen->base) && $screen->base == 'toplevel_page_postblog-admin') {
            remove_all_actions('admin_notices');

            wp_enqueue_script('postblog-admin', POSTBLOG_URI . '/assets/js/admin.js', array('jquery'), POSTBLOG_VERSION, array());

            wp_localize_script(
                'postblog-admin',
                'admin_ajax_obj', 
                array(
                    'ajax_url' => admin_url('admin-ajax.php'),
                    'nonce' => wp_create_nonce('post_blog_admin_nonce_check'),
                    'import_url' => admin_url('themes.php?page=ananta-demo-import')
                )
            );

            wp_enqueue_style('admin-notice-styles', POSTBLOG_URI . '/assets/css/admin.css', array(), POSTBLOG_VERSION);

            add_filter('admin_footer_text', [$this, 'postblog_remove_admin_footer_text']);
        }
    }

    public function postblog_admin_page() {
        // Add top-level menu page
        
        add_menu_page(
            'PostBlog Blocks',  // Page title
            'PostBlog',            // Menu title
            'manage_options',   // Capability required to access the page
            'postblog-admin',      // Menu slug
            array($this, 'postblog_admin_page_content'), // Callback function
            'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgY2xpcC1wYXRoPSJ1cmwoI2NsaXAwXzM5NV8yMzkpIj4KPHBhdGggZD0iTTEwIDBDMTUuNTIyOCAwIDIwIDQuNDc3MTUgMjAgMTBDMjAgMTUuNTIyOCAxNS41MjI4IDIwIDEwIDIwQzQuNDc3MTUgMjAgMCAxNS41MjI4IDAgMTBDMCA0LjQ3NzE1IDQuNDc3MTUgMCAxMCAwWk02LjQwMDM5IDRWMTZIOC40MDAzOVYxMS4yMDAySDExLjIwMDJMMTEuMzg1NyAxMS4xOTUzQzEzLjIyNjMgMTEuMTAxOCAxNC43MDI2IDkuNjI1NzkgMTQuNzk1OSA3Ljc4NTE2TDE0LjgwMDggNy41OTk2MUMxNC44MDA2IDUuNjczOSAxMy4yODc1IDQuMTAxNTUgMTEuMzg1NyA0LjAwNDg4TDExLjIwMDIgNEg2LjQwMDM5Wk0xMS4yMDAyIDZMMTEuMzY0MyA2LjAwNzgxQzEyLjE3MDYgNi4wOTAwMyAxMi44MDA2IDYuNzcxNjEgMTIuODAwOCA3LjU5OTYxQzEyLjgwMDggOC40ODMxMiAxMi4wODM3IDkuMTk5OTggMTEuMjAwMiA5LjIwMDJIOC40MDAzOVY2SDExLjIwMDJaIiBmaWxsPSIjRjBGNkZDIi8+CjwvZz4KPGRlZnM+CjxjbGlwUGF0aCBpZD0iY2xpcDBfMzk1XzIzOSI+CjxyZWN0IHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgcng9IjEwIiBmaWxsPSJ3aGl0ZSIvPgo8L2NsaXBQYXRoPgo8L2RlZnM+Cjwvc3ZnPgo=', // Icon
            20                  // Position
        );
    }

    public function postblog_remove_admin_footer_text() {
        return 'Enjoyed <span class="post-blog-footer-thankyou"><strong>Postblog</strong>? Please leave us a <a href="https://wordpress.org/support/theme/postblog/reviews/?rate=5#new-post" target="_blank">★★★★★</a></span> rating. We really appreciate your support!';
    }

    public function postblog_free_features() {
        return array(
     
            array( 'type' => 'lite' , 'name' => 'Post List 1', 'demo' => '#' ),

            array( 'type' => 'lite' , 'name' => 'Post Grid 2', 'demo' => '#' ),
            
            array( 'type' => 'lite' , 'name' => 'Advanced Paragraph', 'demo' => '#' ),
            
            array( 'type' => 'lite' , 'name' => 'Taxonomy', 'demo' => '#' ),

            array( 'type' => 'lite' , 'name' => 'Advanced Image', 'demo' => '#' ),

            array( 'type' => 'lite' , 'name' => 'Header Template', 'demo' => '#' ),
    
            array( 'type' => 'lite' , 'name' => 'Footer Template', 'demo' => '#' ),
            
            array( 'type' => 'lite' , 'name' => 'Frontpage Template', 'demo' => '#' ),
            
            array( 'type' => 'lite' , 'name' => 'Post Archive Template', 'demo' => '#' ),
    
            array( 'type' => 'lite' , 'name' => 'Single Post Template', 'demo' => '#' ),
            
            array( 'type' => 'lite' , 'name' => '404 Page Template ', 'demo' => '#' ),
        
            array( 'type' => 'lite' , 'name' => 'Search Page Template', 'demo' => '#' ),
           
        );
    }

    public function postblog_premium_features(){
        return array(
     
            array( 'type' => 'pro' , 'name' => 'Advance Post List 1', 'demo' => '#' ),

            array( 'type' => 'pro' , 'name' => 'Advance Post Grid 2', 'demo' => '#' ),

            array( 'type' => 'pro' , 'name' => 'Advance Post Slider', 'demo' => '#' ),

            array( 'type' => 'pro' , 'name' => 'Advance Navigation Menu', 'demo' => '#' ),

            array( 'type' => 'pro' , 'name' => 'Advance News Ticker', 'demo' => '#' ),
            
            array( 'type' => 'pro' , 'name' => 'Advance Advanced Paragraph', 'demo' => '#' ),
            
            array( 'type' => 'pro' , 'name' => 'Advance Taxonomy', 'demo' => '#' ),

            array( 'type' => 'pro' , 'name' => 'Advance Advanced Image', 'demo' => '#' ),

            array( 'type' => 'pro' , 'name' => 'Advance Header Template', 'demo' => '#' ),
    
            array( 'type' => 'pro' , 'name' => 'Advance Footer Template', 'demo' => '#' ),
            
            array( 'type' => 'pro' , 'name' => 'Advance Frontpage Template', 'demo' => '#' ),
            
            array( 'type' => 'pro' , 'name' => 'Advance Post Archive Template', 'demo' => '#' ),
    
            array( 'type' => 'pro' , 'name' => 'Advance Single Post Template', 'demo' => '#' ),
            
            array( 'type' => 'pro' , 'name' => 'Advance 404 Page Template ', 'demo' => '#' ),
        
            array( 'type' => 'pro' , 'name' => 'Advance Search Page Template', 'demo' => '#' ),

            array( 'type' => 'pro' , 'name' => 'Advance Archive Post Grid 1', 'demo' => '#' ),

            array( 'type' => 'pro' , 'name' => 'Advance Archive Title', 'demo' => '#' ),

            array( 'type' => 'pro' , 'name' => 'Advance Social Icons', 'demo' => '#' ),
           
        );
    }

    public function postblog_admin_page_content() { 
        $postblog_free_features = $this->postblog_free_features();
        $postblog_pro_features = $this->postblog_premium_features(); ?>

        <div class="page-content">
            <div class="tabbed">
                <input type="radio" id="tab1" name="css-tabs" <?php if( !isset($_GET['tab']) || isset($_GET['tab']) && $_GET['tab'] == 'welcome' ){ echo 'checked'; } ?> >
                <input type="radio" id="tab2" name="css-tabs" <?php if( isset($_GET['tab']) && $_GET['tab'] == 'starter-sites' ){ echo 'checked'; } ?> >
                <input type="radio" id="tab3" name="css-tabs" <?php if( isset($_GET['tab']) && $_GET['tab'] == 'plugins' ){ echo 'checked'; } ?> >
                <div class="head-top-items">
                    <div class="head-item">
                        <a href="#" class="site-icon"><img src="<?php echo POSTBLOG_URI . 'assets/images/site-logo.png' ?>" alt=""></a>
                        <ul class="tabs">
                            <li class="tab">
                                <label for="tab1" tab="welcome">
                                <a  href="<?php echo esc_url( add_query_arg( [ 'tab'   => 'welcome'] ) ); ?>">
                                    <?php esc_html_e( 'Welcome', 'postblog' ); ?>
                                </a>
                                </label>
                            </li>
                            <li class="tab">
                                <label for="tab2" tab="starter-sites">
                                <a  href="<?php echo esc_url( add_query_arg( [ 'tab'   => 'starter-sites'] ) ); ?>">
                                    <?php esc_html_e( 'Starter Sites', 'postblog' ); ?>
                                </a>
                                </label>
                            </li>
                            <li class="tab">
                                <label for="tab3" tab="plugins">
                                <a  href="<?php echo esc_url( add_query_arg( [ 'tab'   => 'plugins'] ) ); ?>">
                                    <?php esc_html_e( 'Plugins', 'postblog' ); ?>
                                </a>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="right-top-area">
                        <div class="version">
                            <span><?php echo POSTBLOG_VERSION; ?></span>
                        </div>
                        <div class="feature_pro">
                            <a href="https://anantsites.com/post-extra/pricing/" target="_blank">
                                <span class="head-icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 24 24"
                                        fill="none" style="fill: #fff;">
                                        <path
                                            d="M19.6872 14.0931L19.8706 12.3884C19.9684 11.4789 20.033 10.8783 19.9823 10.4999L20 10.5C20.8284 10.5 21.5 9.82843 21.5 9C21.5 8.17157 20.8284 7.5 20 7.5C19.1716 7.5 18.5 8.17157 18.5 9C18.5 9.37466 18.6374 9.71724 18.8645 9.98013C18.5384 10.1814 18.1122 10.606 17.4705 11.2451L17.4705 11.2451C16.9762 11.7375 16.729 11.9837 16.4533 12.0219C16.3005 12.043 16.1449 12.0213 16.0038 11.9592C15.7492 11.847 15.5794 11.5427 15.2399 10.934L13.4505 7.7254C13.241 7.34987 13.0657 7.03557 12.9077 6.78265C13.556 6.45187 14 5.77778 14 5C14 3.89543 13.1046 3 12 3C10.8954 3 10 3.89543 10 5C10 5.77778 10.444 6.45187 11.0923 6.78265C10.9343 7.03559 10.759 7.34984 10.5495 7.7254L8.76006 10.934C8.42056 11.5427 8.25081 11.847 7.99621 11.9592C7.85514 12.0213 7.69947 12.043 7.5467 12.0219C7.27097 11.9837 7.02381 11.7375 6.5295 11.2451C5.88787 10.606 5.46156 10.1814 5.13553 9.98012C5.36264 9.71724 5.5 9.37466 5.5 9C5.5 8.17157 4.82843 7.5 4 7.5C3.17157 7.5 2.5 8.17157 2.5 9C2.5 9.82843 3.17157 10.5 4 10.5L4.01771 10.4999C3.96702 10.8783 4.03162 11.4789 4.12945 12.3884L4.3128 14.0931C4.41458 15.0393 4.49921 15.9396 4.60287 16.75H19.3971C19.5008 15.9396 19.5854 15.0393 19.6872 14.0931Z"
                                            fill="#1C274C" style="&#10;    fill: #fff;&#10;" />
                                        <path
                                            d="M10.9121 21H13.0879C15.9239 21 17.3418 21 18.2879 20.1532C18.7009 19.7835 18.9623 19.1172 19.151 18.25H4.84896C5.03765 19.1172 5.29913 19.7835 5.71208 20.1532C6.65817 21 8.07613 21 10.9121 21Z"
                                            fill="#1C274C" style="&#10;    fill: #fff;&#10;" />
                                    </svg>
                                </span>
                                <?php esc_html_e( 'Upgrade to Pro', 'postblog' ); ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="post-blog-main-area">
                    <div class="tab-contents">
                        <div class="tab-content welcome">
                            <div class="item-content flex align-center gap-30">
                                <div class="text-content">
                                    <h2 class="heading-content"> 
                                        <?php esc_html_e( 'Welcome to ', 'postblog' ); 
                                        $current_theme = wp_get_theme();
                                        echo esc_html( $current_theme->get( 'Name' ) );                                       
                                        ?>
                                    </h2>
                                    <p><?php esc_html_e( 'Postblog is a sleek, fast, and highly customizable WordPress theme built specifically for block-based websites. Fully compatible with the WordPress Block Editor, it offers flexible design options, modern layouts, and seamless performance—making it perfect for creating engaging, content-rich blogs with ease.', 'postblog' );?></p>
                                    <div class="buttons flex gap-15">
                                        <a href="<?php echo esc_url( add_query_arg( [ 'tab'   => 'starter-sites'] ) ); ?>" class="btn-default"><?php esc_html_e( 'Get Starter Sites', 'postblog' );?></a>
                                        <a href="#" class="btn-default"><?php esc_html_e('Watch and Launch Quickly!', 'postblog' ); ?></a>
                                    </div>
                                </div>
                                <!-- media -->
                                <div class="postblog-media">
                                <iframe width="1111" height="542" src="https://www.youtube.com/embed/RkzAlQBy518" title="Create a Modern Blog or Magazine Site with PostBlog – WordPress Step-by-Step" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                            </div>
                            
                            <div class="grid mt-30 gap-30 column-4">
                                <div class="post-blog-key-features col-span-3">
                                    <div class="post-blog-key-features-free">
                                        <h2 class="post-blog-key-feature-title"><?php esc_html_e("Empower Your Blog with Postblog's Block-Based Features", "postblog" ); ?></h2>
                                        <div class="post-blog-key-features_content">
                                            <?php foreach ($postblog_free_features as $features) { ?>
                                                <div class="post-blog-key-feature-box">
                                                    <div class="post-blog-key-features-title-area">
                                                        <h5 class="post-blog-key-features-title"><?php echo esc_html($features['name']); ?></h5>
                                                    </div>
                                                    <div class="post-blog-key-features-btn-area anant-admin-f-center">
                                                        <span class="edit"><i class="dashicons dashicons-ellipsis"></i></span> 
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="post-blog-key-feature-premium">
                                        <h2 class="post-blog-key-feature-title"><?php esc_html_e("Maximize Your Blog’s Impact with Postblog Pro Features", "postblog" ); ?>.</h2>
                                        <div class="post-blog-key-features_content">
                                            <?php foreach ($postblog_pro_features as $features) { ?>
                                                <div class="post-blog-key-feature-box">
                                                    <div class="post-blog-key-features-title-area">
                                                        <h5 class="post-blog-key-features-title"><?php echo esc_html($features['name']); ?></h5>
                                                        <?php if($features['type'] == 'pro'){ ?>
                                                            <span class="post-blog-pro-feature"><?php esc_html_e('Pro', 'postblog' ); ?></span>
                                                        <?php } ?>
                                                    </div>
                                                    <div class="post-blog-key-features-btn-area anant-admin-f-center">
                                                        <span class="edit"><i class="dashicons dashicons-ellipsis"></i></span> 
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-blog-quick-links">
                                    <div class="post-blog-quick-link-box">
                                        <div class="post-blog-item-icon-title">
                                            <h2 class="post-blog-heading"><?php esc_html_e('Upgrade to Pro', 'postblog' ); ?></h2>
                                            <span class="post-blog-item-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" style="fill: white; width: 25px; height: 25px;" viewBox="0 0 640 512"><path d="M528 448H112c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h416c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zm64-320c-26.5 0-48 21.5-48 48 0 7.1 1.6 13.7 4.4 19.8L476 239.2c-15.4 9.2-35.3 4-44.2-11.6L350.3 85C361 76.2 368 63 368 48c0-26.5-21.5-48-48-48s-48 21.5-48 48c0 15 7 28.2 17.7 37l-81.5 142.6c-8.9 15.6-28.9 20.8-44.2 11.6l-72.3-43.4c2.7-6 4.4-12.7 4.4-19.8 0-26.5-21.5-48-48-48S0 149.5 0 176s21.5 48 48 48c2.6 0 5.2-.4 7.7-.8L128 416h384l72.3-192.8c2.5 .4 5.1 .8 7.7 .8 26.5 0 48-21.5 48-48s-21.5-48-48-48z"/></svg>
                                            </span>
                                        </div>
                                        <a href="https://anantsites.com/post-extra/pricing/" target="_blank"></a>
                                        <p class="post-blog-paragraph"><?php esc_html_e('Unlock advanced customization and enjoy premium support from our team of WordPress wizards.', 'postblog' ); ?></p>   
                                        <a href="https://anantsites.com/post-extra/pricing/" target="_blank" class="post-blog-sm-link"><?php esc_html_e('Buy Now!', 'postblog' ); ?></a>                             
                                    </div>

                                    <div class="post-blog-quick-link-box">
                                        <div class="post-blog-item-icon-title">
                                            <h2 class="post-blog-heading"><?php esc_html_e('Explore the Guide', 'postblog' ); ?></h2>
                                            <span class="post-blog-item-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" style="fill: white; width: 25px; height: 25px;" viewBox="0 0 384 512"><path d="M288 248v28c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-28c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12zm-12 72H108c-6.6 0-12 5.4-12 12v28c0 6.6 5.4 12 12 12h168c6.6 0 12-5.4 12-12v-28c0-6.6-5.4-12-12-12zm108-188.1V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V48C0 21.5 21.5 0 48 0h204.1C264.8 0 277 5.1 286 14.1L369.9 98c9 8.9 14.1 21.2 14.1 33.9zm-128-80V128h76.1L256 51.9zM336 464V176H232c-13.3 0-24-10.7-24-24V48H48v416h288z"/></svg>
                                            </span>
                                        </div>
                                        <a href="https://anantaddons.com/docs/" target="_blank"></a>
                                        <p class="post-blog-paragraph"><?php esc_html_e('Struggling to figure it out? Let our detailed guides be your ultimate problem-solver!', 'postblog' ); ?></p>   
                                        <a href="https://anantaddons.com/docs/" target="_blank" class="post-blog-sm-link"><?php esc_html_e('Explore Now', 'postblog' ); ?></a>                             
                                    </div>

                                    <div class="post-blog-quick-link-box">
                                        <div class="post-blog-item-icon-title">
                                            <h2 class="post-blog-heading"><?php esc_html_e('Rate Us', 'postblog' ); ?></h2>
                                            <span class="post-blog-item-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" style="fill: white; width: 25px; height: 25px;" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"/></svg>
                                            </span>
                                        </div>
                                        <a href="https://wordpress.org/support/theme/postblog/reviews/#new-post" target="_blank"></a>
                                        <p class="post-blog-paragraph"><?php esc_html_e('Share your thoughts! Please leave a review and help us improve your experience.', 'postblog' ); ?></p>   
                                        <a href="https://wordpress.org/support/theme/postblog/reviews/#new-post" target="_blank" class="post-blog-sm-link"><?php esc_html_e('Submit a Review', 'postblog' ); ?></a>                             
                                    </div>

                                    <div class="post-blog-quick-link-box">
                                        <div class="post-blog-item-icon-title">
                                            <h2 class="post-blog-heading"><?php esc_html_e('Our support', 'postblog' ); ?></h2>
                                            <span class="post-blog-item-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" style="fill: white; width: 25px; height: 25px;" viewBox="0 0 512 512"><path d="M192 208c0-17.7-14.3-32-32-32h-16c-35.4 0-64 28.7-64 64v48c0 35.4 28.7 64 64 64h16c17.7 0 32-14.3 32-32V208zm176 144c35.4 0 64-28.7 64-64v-48c0-35.4-28.7-64-64-64h-16c-17.7 0-32 14.3-32 32v112c0 17.7 14.3 32 32 32h16zM256 0C113.2 0 4.6 118.8 0 256v16c0 8.8 7.2 16 16 16h16c8.8 0 16-7.2 16-16v-16c0-114.7 93.3-208 208-208s208 93.3 208 208h-.1c.1 2.4 .1 165.7 .1 165.7 0 23.4-18.9 42.3-42.3 42.3H320c0-26.5-21.5-48-48-48h-32c-26.5 0-48 21.5-48 48s21.5 48 48 48h181.7c49.9 0 90.3-40.4 90.3-90.3V256C507.4 118.8 398.8 0 256 0z"/></svg>
                                            </span>
                                        </div>
                                        <a href="https://wordpress.org/support/theme/postblog/" target="_blank"></a>
                                        <p class="post-blog-paragraph"><?php esc_html_e('Need help or have feedback? Join our Support Forum for quick answers and friendly advice!', 'postblog' ); ?></p>   
                                        <a href="https://wordpress.org/support/theme/postblog/" target="_blank" class="post-blog-sm-link"><?php esc_html_e('Ask for Help', 'postblog' ); ?></a>                             
                                    </div>

                                    <div class="post-blog-quick-link-box">
                                        <div class="post-blog-item-icon-title">
                                            <h2 class="post-blog-heading"><?php esc_html_e('Feature Request', 'postblog' ); ?></h2>
                                            <span class="post-blog-item-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" style="fill: white; width: 25px; height: 25px;" viewBox="0 0 512 512"><path d="M168.2 384.9c-15-5.4-31.7-3.1-44.6 6.4c-8.2 6-22.3 14.8-39.4 22.7c5.6-14.7 9.9-31.3 11.3-49.4c1-12.9-3.3-25.7-11.8-35.5C60.4 302.8 48 272 48 240c0-79.5 83.3-160 208-160s208 80.5 208 160s-83.3 160-208 160c-31.6 0-61.3-5.5-87.8-15.1zM26.3 423.8c-1.6 2.7-3.3 5.4-5.1 8.1l-.3 .5c-1.6 2.3-3.2 4.6-4.8 6.9c-3.5 4.7-7.3 9.3-11.3 13.5c-4.6 4.6-5.9 11.4-3.4 17.4c2.5 6 8.3 9.9 14.8 9.9c5.1 0 10.2-.3 15.3-.8l.7-.1c4.4-.5 8.8-1.1 13.2-1.9c.8-.1 1.6-.3 2.4-.5c17.8-3.5 34.9-9.5 50.1-16.1c22.9-10 42.4-21.9 54.3-30.6c31.8 11.5 67 17.9 104.1 17.9c141.4 0 256-93.1 256-208S397.4 32 256 32S0 125.1 0 240c0 45.1 17.7 86.8 47.7 120.9c-1.9 24.5-11.4 46.3-21.4 62.9zM144 272a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm144-32a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm80 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/></svg>
                                            </span>
                                        </div>
                                        <a href="https://wordpress.org/support/theme/postblog/reviews/?rate=5#new-post" target="_blank"></a>
                                        <p class="post-blog-paragraph"><?php esc_html_e('We’d love to hear your ideas—share any features you think could make our product even better!', 'postblog' ); ?></p>   
                                        <a href="https://anantsites.com/support/support-ticket/" target="_blank" class="post-blog-sm-link"><?php esc_html_e('Send Feedback', 'postblog' ); ?></a>                             
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="tab-content starter-sites">
                            <?php if(!$this->is_plugin_installed('ananta-sites') || !is_plugin_active($this->retrive_plugin_install_path('ananta-sites'))){ ?>
                                <div class="modal-main">
                                    <div class="modal-image overlay">
                                        <img src="<?php echo POSTBLOG_URI . 'assets/images/demos.jpg' ?>" alt="">
                                    </div>
                                    <div class="modal-popup">
                                        <div class="modal-popup-content">
                                            <div class="modal-icon">
                                                <img src="<?php echo POSTBLOG_URI . 'assets/images/anantsite-logo.png' ?>" alt="">
                                            </div>
                                            <div>
                                                <h4>Anant Sites</h4>
                                                <p><?php esc_html_e('Elevate your block-powered blog with 7+ beautiful Postblog templates from Anant Sites.','postblog') ?></p>
                                                <a href="#" class="btn-default ins-ant-site" plug="ananta-sites" status="<?php echo $this->plugin_status_check('ananta-sites'); ?>">
                                                    <?php if (!$this->is_plugin_installed('ananta-sites')) {
                                                        esc_html_e('Install Anant Sites', 'postblog');
                                                    } elseif (!is_plugin_active($this->retrive_plugin_install_path('ananta-sites'))) {
                                                        esc_html_e('Activate Anant Sites', 'postblog');
                                                    } else {
                                                        esc_html_e( 'Import Demo', 'postblog' );
                                                    }
                                                    ?>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } else { 
                                    
                                $theme_data_api = wp_remote_get(esc_url_raw("https://template.anantaddons.com/wp-json/wp/v2/demos?block_categories=31"));

                                $theme_data_api_body = wp_remote_retrieve_body($theme_data_api);
                                $all_demos = json_decode($theme_data_api_body, TRUE);
                                if ($all_demos === null) { ?>
                                    <script type="text/javascript">
                                        window.location.reload();
                                    </script>
                                <?php }
                                foreach($all_demos as $key => $demo){
                                    if( in_array("elementor", $demo['meta']['template_type'])) {
                                        unset($all_demos[$key]);
                                    }
                                }
                                array_values($all_demos);

                                if (count($all_demos) == 0) {
                                    wp_die('There are no demos available for this theme!');
                                } ?>
                                <section class="ali-templates-main">
                                    <!-- Start: Demo Grid -->
                                    <div class="algrid-wrap theme-grid-wrap">
                                        <?php foreach($all_demos as $demo) { ?>
                                            <div class="grid-item" data-theme_type="<?php echo esc_attr(strtolower($demo['meta']['plugin_type'][0])); ?>" data-name="<?php echo esc_attr(strtolower($demo['title']['rendered'])); ?>" >
                                                <?php 
                                                if(strtolower($demo['meta']['plugin_type'][0]) == "pro"){ ?>
                                                    <span class="alribbon <?php echo esc_attr(strtolower($demo['meta']['plugin_type'][0])); ?>">
                                                        <?php echo esc_attr(ucfirst($demo['meta']['plugin_type'][0])); ?>
                                                    </span>
                                                <?php } ?>
                                                <div class="grid-item-images">
                                                    <img src="<?php echo esc_url($demo['meta']['preview_url'][0]); ?>" />
                                                    <div class="grid-item-overlay flex items-center justify-center">
                                                        <?php if ($this->is_plugin_installed('post-extra-pro') === false && strtolower($demo['meta']['plugin_type'][0]) == "pro"): ?>
                                                            <a class="demos-link" target="_blank"
                                                                href="<?php echo esc_url($demo['meta']['pro_link'][0]);?>">
                                                                <?php esc_html_e('Buy Now', 'postblog'); ?>
                                                            </a>
                                                        <?php else: ?>
                                                            <a class="demos-link" href="<?php echo esc_url(admin_url().'admin.php?page=ananta-demo-import&step=2&editor=elementor&theme_id='.$demo['id'].'&preview_url='.esc_url($demo['meta']['preview_link'][0]));?>">
                                                                <?php esc_html_e('Import', 'postblog'); ?>
                                                            </a>
                                                        <?php endif; ?>
                                                        <a aria-current="page" href="<?php echo !empty($demo['meta']['preview_link'][0]) ? esc_url(admin_url().'admin.php?page=ananta-demo-import&step=preview&editor=elementor&theme_id='.$demo['id'].'&preview_url='.esc_url($demo['meta']['preview_link'][0]).'&pro_link='.esc_url($demo['meta']['pro_link'][0]).'&dtn='.esc_attr($demo['meta']['plugin_name'][0])) : '#'; ?>" class="demos-preview-link">
                                                            <?php esc_html_e('Preview', 'postblog'); ?>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid-item-content flex justify-between align-center">
                                                <h5><?php echo esc_html($demo['title']['rendered']); ?></h5>
                                                <?php if ($this->is_plugin_installed('post-extra-pro') === false && strtolower($demo['meta']['plugin_type'][0]) == "pro"): ?>
                                                    <a class="pro-demos-link" target="_blank"
                                                        href="<?php echo esc_url($demo['meta']['pro_link'][0]);?>">
                                                        <?php esc_html_e('Buy Now', 'postblog'); ?>
                                                    </a>
                                                <?php else: ?>
                                                    <a class="import" href="<?php echo esc_url(admin_url().'admin.php?page=ananta-demo-import&&step=2&editor=elementor&theme_id='.$demo['id'].'&preview_url='.esc_url($demo['meta']['preview_link'][0]));?>"><?php esc_html_e('Import', 'postblog' ); ?></a>
                                                <?php endif; ?>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <!-- End: Demo Grid -->
                                </section>
                            <?php } ?>
                        </div>

                        <div class="tab-content plugins">
                            <!-- plugin area -->
                            <div class="grid column-4 gap-30">
                                <div class="post-blog-quick-link-box">
                                    <div class="post-blog-img">
                                        <img src="<?php echo POSTBLOG_URI . 'assets/images/anantsite-logo.png' ?>" alt="anantsite">
                                        <h2 class="post-blog-img-heading">Anant Sites</h2>
                                    </div>
                                    <p class="post-blog-paragraph"><?php esc_html_e('Anant Sites offers 40+ pre-made Elementor templates, including Woo-ready designs.', 'postblog' ); ?></p>
                                    <a href="#" class="post-blog-btn-link" plug="ananta-sites" status="<?php echo $this->plugin_status_check('ananta-sites'); ?>">
                                        <?php if (!$this->is_plugin_installed('ananta-sites')) {
                                                esc_html_e('Install', 'postblog');
                                            } elseif (!is_plugin_active($this->retrive_plugin_install_path('ananta-sites'))) {
                                                esc_html_e('Activate', 'postblog');
                                            } else {
                                                esc_html_e('Activated', 'postblog' );
                                            }
                                        ?>
                                    </a>
                                </div>
                                <div class="post-blog-quick-link-box">
                                    <div class="post-blog-img">
                                        <img src="<?php echo POSTBLOG_URI . 'assets/images/anantsite-logo.png' ?>" alt="anantaddons">
                                        <h2 class="post-blog-img-heading">Anant Addons</h2>
                                    </div>
                                    <p class="post-blog-paragraph"><?php esc_html_e('Enhance your Elementor experience with 90+ essential elements and extensions.', 'postblog' ); ?></p>
                                    <a href="#" class="post-blog-btn-link" plug="anant-addons-for-elementor" status="<?php echo $this->plugin_status_check('anant-addons-for-elementor'); ?>">
                                        <?php if (!$this->is_plugin_installed('anant-addons-for-elementor')) {
                                                esc_html_e('Install', 'postblog');
                                            } elseif (!is_plugin_active($this->retrive_plugin_install_path('anant-addons-for-elementor'))) {
                                                esc_html_e('Activate', 'postblog');
                                            } else {
                                                esc_html_e('Activated', 'postblog' );
                                            }
                                        ?>
                                    </a>
                                </div>
                                <div class="post-blog-quick-link-box">
                                    <div class="post-blog-img">
                                        <img src="<?php echo POSTBLOG_URI . 'assets/images/postextra-logo.png' ?>" alt="postextra">
                                        <h2 class="post-blog-img-heading">Post Extra</h2>
                                    </div>
                                    <p class="post-blog-paragraph"><?php esc_html_e('Boost your content with Post Extra’s customizable Gutenberg posts blocks.', 'postblog' ); ?></p>
                                    <a href="#" class="post-blog-btn-link" plug="post-extra" status="<?php echo $this->plugin_status_check('post-extra'); ?>">
                                        <?php if (!$this->is_plugin_installed('post-extra')) {
                                                esc_html_e('Install', 'postblog');
                                            } elseif (!is_plugin_active($this->retrive_plugin_install_path('post-extra'))) {
                                                esc_html_e('Activate', 'postblog');
                                            } else {
                                                esc_html_e('Activated', 'postblog' );
                                            }
                                        ?>
                                    </a>
                                </div>
                                <div class="post-blog-quick-link-box">
                                    <div class="post-blog-img">
                                        <img src="<?php echo POSTBLOG_URI . 'assets/images/gutenwawe-logo.png' ?>" alt="gutenwawe">
                                        <h2 class="post-blog-img-heading">Gutenwave</h2>
                                    </div>
                                    <p class="post-blog-paragraph"><?php esc_html_e('Create WordPress pages effortlessly with Gutenwave, your ultimate tool for seamless design and innovation.', 'postblog' ); ?></p>
                                    <a href="#" class="post-blog-btn-link" plug="gutenwave-blocks" status="<?php echo $this->plugin_status_check('gutenwave-blocks'); ?>">
                                        <?php if (!$this->is_plugin_installed('gutenwave-blocks')) {
                                                esc_html_e('Install', 'postblog');
                                            } elseif (!is_plugin_active($this->retrive_plugin_install_path('gutenwave-blocks'))) {
                                                esc_html_e('Activate', 'postblog');
                                            } else {
                                                esc_html_e('Activated', 'postblog' );
                                            }
                                        ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    <?php }

    public function install_plug_ajax() {
        // // Verify nonce
        if (!isset($_POST['post_blog_admin_nonce']) && !wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['post_blog_admin_nonce'])), 'post_blog_admin_nonce_check')) {
            wp_send_json_error('Nonce verification failed');
        }

        // Check user capabilities
        if (!current_user_can('edit_posts')) {
            wp_send_json_error('Insufficient permissions');
        }

        // check plugin name
        if (isset($_POST['plugin_name'])) {
            $plugin = $_POST['plugin_name'];
        }

        /* Get All Plugins Installed In Wordpress */
        $all_wp_plugins = get_plugins();
        $installed_plugins = [];

        $plugin_status = $this->postblog_elementor_get_required_plugin_status($plugin, $all_wp_plugins);
        if ($plugin_status == 'not-installed') {
            $this->install_plugin(['slug' => $plugin]);
            $installed_plugins['installed'][] = $plugin;
            $myplugin = $this->get_plugin_install_path($plugin);
            if ($myplugin) {
                $installed_plugins['activated'][] = !is_null(activate_plugin($myplugin, '', false, false)) ?: $plugin;
            }
            wp_send_json_success('Plugin Installed and activated Successfully');
        } else if ($plugin_status == 'inactive') {
            $myplugin = $this->get_plugin_install_path($plugin);
            if ($myplugin) {
                $installed_plugins['activated'][] = !is_null(activate_plugin($myplugin, '', false, false)) ?: $plugin;
            }
            wp_send_json_success('Plugin Activated Successfully');
        } else if ($plugin_status == 'active') {
            $installed_plugins['activated'][] = $plugin;
            wp_send_json_success('Plugin Installed Successfully');
        }else{
            wp_send_json_error('Something is wrong');
        }
    }

    public function is_plugin_installed($plugin_slug) {
        $all_plugins = get_plugins();
        foreach ($all_plugins as $key => $wp_plugin) {
            $folder_arr = explode("/", $key);
            $folder = $folder_arr[0];
            if ($folder == $plugin_slug) {
                return true;
            }
        }
        return false;
    }

    private function get_plugin_install_path($plugin_slug) {
        $all_plugins = get_plugins();
        foreach ($all_plugins as $key => $wp_plugin) {
            $folder_arr = explode("/", $key);
            $folder = $folder_arr[0];
            if ($folder == $plugin_slug) {
                return (string) $key;
                break;
            }
        }
        return false;
    }

    /**
     * Install Plugin
     *
     * @param array $plugin Required Plugin.
     */
    public function install_plugin($plugin = array()) {

        if (!isset($plugin['slug']) || empty($plugin['slug'])) {
            return esc_html__('Invalid plugin slug', 'postblog');
        }

        include_once ABSPATH . 'wp-admin/includes/plugin.php';
        include_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
        include_once ABSPATH . 'wp-admin/includes/plugin-install.php';



        $api = plugins_api(
            'plugin_information',
            array(
                'slug' => sanitize_key(wp_unslash($plugin['slug'])),
                'fields' => array(
                    'sections' => false,
                ),
            )
        );

        if (is_wp_error($api)) {
            $status['errorMessage'] = $api->get_error_message();
            return $status;
        }

        $skin = new WP_Ajax_Upgrader_Skin();
        $upgrader = new Plugin_Upgrader($skin);
        $result = $upgrader->install($api->download_link);

        if (is_wp_error($result)) {
            return $result->get_error_message();
        } elseif (is_wp_error($skin->result)) {
            return $skin->result->get_error_message();
        } elseif ($skin->get_errors()->has_errors()) {
            return $skin->get_error_messages();
        } elseif (is_null($result)) {
            global $wp_filesystem;

            // Pass through the error from WP_Filesystem if one was raised.
            if ($wp_filesystem instanceof WP_Filesystem_Base && is_wp_error($wp_filesystem->errors) && $wp_filesystem->errors->has_errors()) {
                return esc_html($wp_filesystem->errors->get_error_message());
            }

            return esc_html__('Unable to connect to the filesystem. Please confirm your credentials.', 'postblog');
        }

        /* translators: %s plugin name. */
        return sprintf(esc_html__('Successfully installed "%s" plugin!', 'postblog'), $api->name);
    }

    public function retrive_plugin_install_path($plugin_slug) {
        include_once ABSPATH . 'wp-admin/includes/plugin.php';
        $all_plugins = get_plugins();
        foreach ($all_plugins as $key => $wp_plugin) {
            $folder_arr = explode("/", $key);
            $folder = $folder_arr[0];
            if ($folder == $plugin_slug) {
                return (string) $key;
                break;
            }
        }
        return false;
    }

    private function postblog_elementor_get_required_plugin_status($plugin, $all_plugins) {
        $response = 'not-installed';
        foreach ($all_plugins as $key => $wp_plugin) {
            $folder_arr = explode("/", $key);
            $folder = $folder_arr[0];
            if ($folder == $plugin) {
                if (is_plugin_inactive($key)) {
                    $response = 'inactive';
                } else {
                    $response = 'active';
                }
                return $response;
            }
        }
        return $response;

    }

    private function plugin_status_check($plug_slug){
        $status = '';
        if (!$this->is_plugin_installed($plug_slug)) {
            $status = 'not-installed';
        } elseif (!is_plugin_active($this->retrive_plugin_install_path($plug_slug))) {
            $status = 'not-active';
        } else {
            $status = 'active';
        }
        return $status;
    }
}

$admin_page = new Admin();