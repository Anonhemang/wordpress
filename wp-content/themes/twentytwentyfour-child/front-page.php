<!DOCTYPE html>
<html lang="en">

<head>
</head>
<style>
    body {
        background-color: #1a1a1a !important;
    }
</style>

<body>
    <!-- !! Main Wrapper !! -->
    <div class="main_wrapper position-relative bg-primary">
        <!-- Navigation -->
        <nav class="navbar">
            <div class="container flex-nowrap">
                <a class="navbar-brand" href="/">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>./assets/images/ai-inspire-logo.png"
                        alt="AI Inspire logo">
                </a>
                <div class="collapse navbar-collapse d-block" id="navbarWrapper">
                    <ul class="navbar-nav me-auto align-items-center flex-row justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link  d-flex align-items-center" href="tel:1300745796">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>./assets/images/call-icon.png"
                                    alt="Call">
                                1300 745 796
                            </a>
                        </li>
                        <li class="nav-item d-none d-md-block">
                            <a class="btn btn-primary" type="button" data-bs-toggle="modal"
                                data-bs-target="#enquiryModal" href="javascript:void(0)">Make Enquiry</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navigation -->
        <!-- Page Banner -->
        <div class="page_banner position-relative">
            <!-- Hero Banner -->
            <div class="hero_banner position-relative">
                <div class="banner_el position-absolute top-0 w-100 h-100"
                    style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>./assets/images/ai-banner.png);">
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-10 col-12">
                            <div class="hero_banner_content text-center">
                                <h1><?php the_field('banner_text') ?> <br>
                                    <span class="typeWriter" data-end="3000"
                                        data-text='<?php echo json_encode(explode(',', get_field('typewriter'))); ?>'>
                                        <span
                                            class="wrap"><?php echo explode(',', get_field('typewriter'))[0]; ?></span>
                                    </span>
                                    With AI
                                </h1>
                                <div class="para mx-auto">
                                    <p><?php the_field('banner_para') ?> </p>
                                </div>
                                <a type="button" data-bs-toggle="modal" data-bs-target="#enquiryModal"
                                    href="javascript:void(0)" class="btn btn-secondary">Talk with our experts</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Hero Banner -->
            <!-- Our Services -->
            <div class="our_services position-relative">
                <div class="container">

                    <div class="common_title d-flex flex-column align-items-center justify-content-center">
                        <div class="common_title_wrapper d-inline-flex align-items-center justify-content-center">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>./assets/images/ai-title.png"
                                alt="AI">
                            <h2 class="m-0">AI Assisted Services</h2>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="our_services_box h-100 text-center">
                                <div class="our_services_icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>./assets/images/data-analysis.png"
                                        alt="Data Analysis">
                                </div>
                                <div class="our_services_content">
                                    <h4><?php the_field('ai_assisted_services_title_1') ?></h4>
                                    <div class="para">
                                        <p><?php the_field('ai_assisted_services_title_1_1') ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="our_services_box h-100 text-center">
                                <div class="our_services_icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>./assets/images/process.png"
                                        alt="Process Automation">
                                </div>
                                <div class="our_services_content">
                                    <h4><?php the_field('ai_assisted_services_title_2') ?></h4>
                                    <div class="para">
                                        <p><?php the_field('ai_assisted_services_title_2_2') ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="our_services_box h-100 text-center">
                                <div class="our_services_icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>./assets/images/ai-strategy.png"
                                        alt="AI Strategy">
                                </div>
                                <div class="our_services_content">
                                    <h4><?php the_field('ai_assisted_services_title_3') ?></h4>
                                    <div class="para">
                                        <p><?php the_field('ai_assisted_services_title_3_3') ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="our_services_box h-100 text-center">
                                <div class="our_services_icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>./assets/images/ai-marketing.png"
                                        alt="AI Marketing">
                                </div>
                                <div class="our_services_content">
                                    <h4><?php the_field('ai_assisted_services_title_4') ?></h4>
                                    <div class="para">
                                        <p><?php the_field('ai_assisted_services_title_4_4') ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Our Services -->
            <!-- Our Work -->
            <div class="our_work_wrapper position-relative">
                <div class="container">
                    <div class="common_title d-flex flex-column align-items-center justify-content-center">
                        <div class="common_title_wrapper d-inline-flex align-items-center justify-content-center">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>./assets/images/ai-title.png"
                                alt="AI">
                            <h2 class="m-0">How Our AI Service Works</h2>
                        </div>
                        <div class="para text-center">
                            <p><?php the_field('hoasw_tagline') ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="work_box bg-secondary position-relative h-100">
                                <div class="work_img">
                                    <?php
                                    // Retrieve the image field
                                    $image = get_field('hoasw_image_1'); // Replace 'header_image' with your field name
                                    
                                    // Check if the image field has a value
                                    if ($image): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>"
                                            alt="<?php echo esc_attr($image['alt']); ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="work_content d-flex align-items-center">
                                    <div class="number rounded-pill d-flex align-items-center justify-content-center">1
                                    </div>
                                    <h4 class="m-0"><?php the_field('hoasw_image_1_description') ?></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="work_box bg-secondary position-relative h-100">
                                <div class="work_img">
                                    <?php
                                    // Retrieve the image field
                                    $image = get_field('hoasw_image_2'); // Replace 'header_image' with your field name
                                    
                                    // Check if the image field has a value
                                    if ($image): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>"
                                            alt="<?php echo esc_attr($image['alt']); ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="work_content d-flex align-items-center">
                                    <div class="number rounded-pill d-flex align-items-center justify-content-center">2
                                    </div>
                                    <h4 class="m-0"><?php the_field('hoasw_image_2_description') ?></h4>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="work_box bg-secondary position-relative h-100">
                                <div class="work_img">
                                    <?php
                                    // Retrieve the image field
                                    $image = get_field('hoasw_image_3'); // Replace 'header_image' with your field name
                                    
                                    // Check if the image field has a value
                                    if ($image): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>"
                                            alt="<?php echo esc_attr($image['alt']); ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="work_content d-flex align-items-center">
                                    <div class="number rounded-pill d-flex align-items-center justify-content-center">3
                                    </div>
                                    <h4 class="m-0"><?php the_field('hoasw_image_3_description') ?></h4>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Our Work -->

            <!-- Tesimonials -->
            <div class="testimonials position-relative">
                <div class="container">
                    <div
                        class="common_title flex-lg-row flex-column d-flex align-items-center justify-content-lg-between">
                        <div
                            class="common_title_wrapper d-inline-flex align-items-center justify-content-center border-0 m-0 p-0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>./assets/images/ai-title.png"
                                alt="AI">
                            <h4 class="m-0 h2">How Our AI Service Works</h4>
                        </div>
                        <div class="testimonial_slider_btn d-flex align-items-center position-relative">
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                    <div class="swiper testimonial_slider">
                        <div class="swiper-wrapper">
                            <?php if (have_rows('testi')): ?>
                                <?php while (have_rows('testi')):
                                    the_row(); ?>
                                    <div class="swiper-slide">
                                        <div class="testimonial_slide_block flex-md-row flex-column d-flex 
                                         align-items-md-stretch align-items-start">

                                            <div class="testimonial_slide_block_content">
                                                <div class="rating">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M15.5441 19.7961L10 16.3268L4.45589 19.7961C4.25449 19.9237 3.99468 19.9139 3.80074 19.7732C3.60734 19.633 3.51863 19.3892 3.57699 19.1575L5.16312 12.8123L0.209524 8.61234C0.0263987 8.45898 -0.0451248 8.20949 0.0287034 7.98234C0.102532 7.7546 0.307375 7.59496 0.545422 7.57835L7.01082 7.12687L9.45641 1.06093C9.63609 0.618037 10.3639 0.618037 10.5436 1.06093L12.9892 7.12687L19.4546 7.57835C19.6926 7.59496 19.8975 7.7546 19.9713 7.98234C20.0451 8.20949 19.9736 8.45898 19.7905 8.61234L14.8368 12.8123L16.423 19.1575C16.4813 19.3893 16.3927 19.6331 16.1992 19.7732C16.0013 19.917 15.7422 19.9202 15.5441 19.7961Z"
                                                            fill="#FFB81C"></path>
                                                    </svg>
                                                    <span>5/5</span>
                                                </div>
                                                <div class="content">
                                                    <p><?php the_sub_field('test_para'); ?></p>
                                                </div>
                                                <div
                                                    class="author_wrap d-flex align-items-center justify-content-between flex-sm-nowrap flex-wrap">
                                                    <div class="author_box d-flex align-items-center">
                                                        <div class="icon">
                                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>./assets/images/author.png"
                                                                alt="author">
                                                        </div>
                                                        <div class="author_box_content">
                                                            <p class="name m-0"><?php the_sub_field('name') ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="date d-flex align-items-center">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_64_4471)">
                                                                <path
                                                                    d="M2.41787 16H13.5823C14.7527 16 15.7038 15.0489 15.7038 13.8785V3.30665C15.7038 2.13628 14.7527 1.18516 13.5823 1.18516H12.7408V0.592582C12.7408 0.266652 12.4741 0 12.1482 0C11.8223 0 11.5556 0.266652 11.5556 0.592582V1.18516H4.44456V0.592582C4.44456 0.266652 4.17786 0 3.85193 0C3.526 0 3.25934 0.266652 3.25934 0.592582V1.18516H2.41787C1.24751 1.18516 0.296387 2.13628 0.296387 3.30665V13.8785C0.296387 15.0489 1.24751 16 2.41787 16ZM1.4816 3.30665C1.4816 2.79111 1.90233 2.37038 2.41787 2.37038H3.25934V2.96296C3.25934 3.28889 3.526 3.55554 3.85193 3.55554C4.17786 3.55554 4.44451 3.28889 4.44451 2.96296V2.37038H11.5556V2.96296C11.5556 3.28889 11.8223 3.55554 12.1482 3.55554C12.4741 3.55554 12.7408 3.28889 12.7408 2.96296V2.37038H13.5823C14.0978 2.37038 14.5185 2.79111 14.5185 3.30665V5.03704H1.4816V3.30665ZM1.4816 6.22221H14.5186V13.8785C14.5186 14.3941 14.0979 14.8148 13.5824 14.8148H2.41787C1.90233 14.8148 1.4816 14.3941 1.4816 13.8785V6.22221Z"
                                                                    fill="white"></path>
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_64_4471">
                                                                    <rect width="16" height="16" fill="white"></rect>
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                        <span>February 2023</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
        <!-- End Testimonial -->
        <!-- Our Brands -->
        <div class="our_brands position-relative">
            <div class="container">
                <div
                    class="our_brands_wrapper d-flex align-items-center justify-content-center flex-xl-nowrap flex-wrap">
                    <div class="our_brands_box d-flex align-items-center justify-content-center">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>./assets/images/suzuki.png" alt="Suzuki">
                    </div>
                    <div class="our_brands_box d-flex align-items-center justify-content-center">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>./assets/images/swisse.png" alt="Swisse">
                    </div>
                    <div class="our_brands_box d-flex align-items-center justify-content-center">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>./assets/images/westpac.png"
                            alt="Westpac">
                    </div>
                    <div class="our_brands_box d-flex align-items-center justify-content-center">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>./assets/images/c-aus.png"
                            alt="Australian Government">
                    </div>
                    <div class="our_brands_box d-flex align-items-center justify-content-center">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>./assets/images/post.png"
                            alt="Australia Post">
                    </div>
                    <div class="our_brands_box d-flex align-items-center justify-content-center">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>./assets/images/the-y.png"
                            alt="The YMCA">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Our Brands -->




    <!-- Our Team -->
    <div class="our_team position-relative">
        <div class="container">
            <div class="common_title d-flex flex-column align-items-center justify-content-center">
                <div class="common_title_wrapper d-inline-flex align-items-center justify-content-center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>./assets/images/ai-title.png" alt="AI">
                    <h2 class="m-0">Meet Our Team</h2>
                </div>
                <div class="para text-center">
                    <p>Our team possesses deep expertise in AI and digital marketing, leveraging years of
                        experience to craft optimised, data-driven strategies.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <!--  -->
                <?php
                if (have_rows('content')):
                    while (have_rows('content')):
                        the_row();
                        if (get_row_layout() == 'meet_our_members'):
                            // Get the image field (assuming it is an image field type)
                            $team_image = get_sub_field('team_image');
                            $team_name = get_sub_field('team_name');
                            ?>
                            <div class="col-xl-3 col-md-5 col-12">
                                <div class="our_team_box mx-auto">
                                    <div class="team_member_img">
                                        <?php if ($team_image):
                                            // Output HTML for the image
                                            echo '<img src="' . esc_url($team_image['url']) . '" alt="' . esc_attr($team_image['alt']) . '" />';
                                        endif; ?>
                                    </div>
                                    <div class="team_member_info">
                                        <p><?php echo '<p>' . get_sub_field('designation') . '</p>'; ?></p>
                                        <h4 class="m-0"> <?php echo '<p>' . esc_html($team_name) . '</p>'; ?></h4>
                                    </div>
                                </div>
                            </div>
                            <?php
                        endif;
                    endwhile;
                endif;
                ?>
                <!--  -->

            </div>
        </div>
    </div>
    <!-- End Our Team -->
    <!-- FAQs Wrapper -->
    <div class="faqs_wrapper position-relative bg-secondary">
        <div class="container">
            <div class="common_title d-flex flex-column align-items-center justify-content-center">
                <div class="common_title_wrapper d-inline-flex align-items-center justify-content-center">
                    <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/ai-title.png'); ?>"
                        alt="AI">
                    <h2 class="m-0">FAQ’s</h2>
                </div>
                <div class="para text-center">
                    <p>Visit our FAQ section for clear, concise answers to common questions about our AI-driven digital
                        marketing services and processes.</p>
                </div>
            </div>
            <div class="accordion" id="accrdionWrapper">

                <?php
                if (have_rows('content')):
                    $counter = 0; // Initialize a counter for unique IDs
                    while (have_rows('content')):
                        the_row();
                        if (get_row_layout() == 'faqs'):
                            $counter++; // Increment counter for each FAQ item
                            $collapse_id = 'collapse-' . $counter; // Create a unique ID for each accordion item
                            ?>

                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#<?php echo esc_attr($collapse_id); ?>" aria-expanded="false"
                                        aria-controls="<?php echo esc_attr($collapse_id); ?>">
                                        <span></span>
                                        <?php the_sub_field('questions'); ?>
                                    </button>
                                </div>
                                <div id="<?php echo esc_attr($collapse_id); ?>" class="accordion-collapse collapse"
                                    data-bs-parent="#accrdionWrapper">
                                    <div class="accordion-body">
                                        <div class="para">
                                            <p>
                                                <?php the_sub_field('answers'); ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                        endif;
                    endwhile;
                endif;
                ?>

            </div>
        </div>

    </div>
    <!-- End FAQs Wrapper -->
    </div>
    <!-- End Page Banner -->
    </div>
    <!-- !! End Main Wrapper !! -->
    <!-- Modal -->
    <div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body overflow-hidden position-relative">

                    <div class="modal_el"><img
                            src="<?php echo get_stylesheet_directory_uri(); ?>./assets/images/curve-line.png"
                            alt="Element"></div>
                    <div
                        class="modal_enquiry_wrapper d-flex align-items-md-center justify-content-md-between flex-md-row flex-column align-items-start">
                        <div class="modal_form">
                            <div class="common_title_wrapper d-inline-flex align-items-center">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>./assets/images/ai-title.png"
                                    alt="AI">
                                <h2 class="m-0">Talk with an AI expert</h2>
                            </div>
                            <form>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form_group position-relative">
                                            <label for="name" class="form-label">Name *</label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form_group position-relative">
                                            <label for="email" class="form-label">Email *</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form_group position-relative">
                                            <label for="company" class="form-label">Company *</label>
                                            <input type="text" class="form-control" id="company">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form_group position-relative">
                                            <label for="phone" class="form-label">Phone *</label>
                                            <input type="tel" class="form-control" id="phone">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form_group position-relative">
                                            <label for="message" class="form-label">Message *</label>
                                            <textarea id="message" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="position-relative">
                                            <input type="submit" class="btn btn-primary" id="submit"
                                                value="Submit Request">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal_enquiry_info">
                            <div class="modal_testimonial">
                                <p>I have been hiring people in this space for a number of years and I have never seen
                                    this level of professionalism. It really feels like you are working with a team that
                                    can get the job done.</p>
                                <div class="modal_author d-flex align-items-center">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>./assets/images/author.png"
                                        class="rounded-pill" alt="Leonard Heiser">
                                    <div class="modal_author_info">
                                        <h6 class="m-0">Leonard Heiser</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="modal_brands">
                                <div class="common_title_wrapper d-inline-flex align-items-center">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>./assets/images/ai-title.png"
                                        alt="AI">
                                    <h4 class="m-0">Brands we have helped</h4>
                                </div>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>./assets/images/logos.png"
                                    alt="Brands we have worked with" class="w-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php get_header(); ?>
<?php get_footer(); ?>