<?php
/* Template Name: Contact*/



?>




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
    <?php if (have_rows('full_page')): ?>
        <?php while (have_rows('full_page')):
            the_row(); ?>
            <!-- !! Main Wrapper !! -->
            <?php if (get_row_layout() == 'banner'): ?>

                <div class="main_wrapper position-relative bg-primary">
                    <!-- Page Banner -->
                    <div class="page_banner position-relative">
                        <!-- Hero Banner -->
                        <div class="hero_banner position-relative">
                            <?php
                            $banner_image_url = get_stylesheet_directory_uri() . '/assets/images/ai-banner.png';
                            ?>
                            <div class="banner_el position-absolute top-0 w-100 h-100"
                                style="background-image: url('<?php echo esc_url($banner_image_url); ?>');">
                            </div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-xl-8 col-lg-10 col-12">
                                        <div class="hero_banner_content text-center">
                                            <h1><?php the_sub_field('banner_title') ?> <br>
                                                <span class="typeWriter" data-end="3000"
                                                    data-text='<?php echo json_encode(explode(',', get_sub_field('typewritter'))); ?>'>
                                                    <span
                                                        class="wrap"><?php echo explode(',', get_sub_field('typewritter'))[0]; ?></span>
                                                </span>
                                                With AI
                                            </h1>
                                            <div class="para mx-auto">
                                                <p><?php the_sub_field('banner_paragraph') ?> </p>
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
                    <?php elseif (get_row_layout() == 'ai_assisted_services'): ?>
                        <div class="our_services position-relative">
                            <div class="container">
                                <div class="common_title d-flex flex-column align-items-center justify-content-center">
                                    <div class="common_title_wrapper d-inline-flex align-items-center justify-content-center">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ai-title.png"
                                            alt="AI">
                                        <h2 class="m-0">AI Assisted Services</h2>
                                    </div>
                                </div>

                                <div class="row">

                                    <?php if (have_rows('service')): // Check if the repeater field has rows ?>
                                        <?php while (have_rows('service')):
                                            the_row();

                                            $image = get_sub_field('logo');

                                            ?>



                                            <div class="col-xl-3 col-md-6 col-12">
                                                <div class="our_services_box h-100 text-center">
                                                    <div class="our_services_icon">
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="Logo">
                                                    </div>
                                                    <div class="our_services_content">
                                                        <h4><?php echo get_sub_field('title'); ?></h4>
                                                        <div class="para">
                                                            <p><?php echo esc_html(get_sub_field('content')); ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>

                            </div>
                        </div>
                        <!-- End Our Services -->

                        <!-- Our Work -->
                    <?php elseif (get_row_layout() == 'how_our_ai_service_works'): ?>
                        <div class="our_work_wrapper position-relative">
                            <div class="container">
                                <div class="common_title d-flex flex-column align-items-center justify-content-center">
                                    <div class="common_title_wrapper d-inline-flex align-items-center justify-content-center">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ai-title.png"
                                            alt="AI">
                                        <h2 class="m-0">How Our AI Service Works</h2>
                                    </div>
                                </div>

                                <div class="row">
                                    <?php if (have_rows('content')): // Check if the repeater field has rows ?>
                                        <?php while (have_rows('content')):
                                            the_row();
                                            // Get sub-field values
                                            $image = get_sub_field('image');
                                            $content = get_sub_field('caption');
                                            ?>
                                            <div class="col-lg-4 col-12">
                                                <div class="work_box bg-secondary position-relative h-100">
                                                    <div class="work_img">
                                                        <?php if ($image): ?>
                                                            <img src="<?php echo esc_url($image['url']); ?>"
                                                                alt="<?php echo esc_attr($image['alt']); ?>">
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="work_content d-flex align-items-center">
                                                        <div class="number rounded-pill d-flex align-items-center justify-content-center">
                                                            <?php the_sub_field('sr_number') ?>
                                                        </div>


                                                        <h4 class="m-0"><?php echo esc_html($content); ?></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>


                        <!-- End Our Work -->



                        <!-- Tesimonials -->
                    <?php elseif (get_row_layout() == 'testimonial'): ?>
                        <div class="testimonials position-relative">
                            <div class="container">
                                <div
                                    class="common_title flex-lg-row flex-column d-flex align-items-center justify-content-lg-between">
                                    <div
                                        class="common_title_wrapper d-inline-flex align-items-center justify-content-center border-0 m-0 p-0">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>./assets/images/ai-title.png"
                                            alt="AI">
                                        <h4 class="m-0 h2">Testimonial</h4>
                                    </div>
                                    <div class="testimonial_slider_btn d-flex align-items-center position-relative">
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-button-next"></div>
                                    </div>
                                </div>
                                <div class="swiper testimonial_slider">
                                    <div class="swiper-wrapper">
                                        <?php if (have_rows('testimonial')): ?>
                                            <?php while (have_rows('testimonial')):
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
                                                                <span><?php the_sub_field('star'); ?>/5</span>
                                                            </div>
                                                            <div class="content">
                                                                <p><?php the_sub_field('review'); ?></p>
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
                <?php elseif (get_row_layout() == 'our_brands'): ?>
                    <div class="our_brands position-relative">
                        <div class="container">
                            <div
                                class="our_brands_wrapper d-flex align-items-center justify-content-center flex-xl-nowrap flex-wrap">

                                <?php if (have_rows('company_logo')): // Check if the repeater field has rows ?>
                                    <?php while (have_rows('company_logo')):
                                        the_row();
                                        // Get sub-field values
                                        $brand_image = get_sub_field('logo');
                                        $alt_text = get_sub_field('alt_text'); // Optional alt text field
                                        ?>

                                        <div class="our_brands_box d-flex align-items-center justify-content-center">
                                            <?php if ($brand_image): ?>
                                                <img src="<?php echo esc_url($brand_image['url']); ?>" alt="<?php echo esc_attr($alt_text); ?>">
                                            <?php endif; ?>
                                        </div>

                                    <?php endwhile; ?>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                    <!-- End Our Brands -->



                    <!-- Our Team -->
                <?php elseif (get_row_layout() == 'meet_our_team'): ?>
                    <div class="our_team position-relative">
                        <div class="container">
                            <div class="common_title d-flex flex-column align-items-center justify-content-center">
                                <div class="common_title_wrapper d-inline-flex align-items-center justify-content-center">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ai-title.png" alt="AI">
                                    <h2 class="m-0">Meet Our Team</h2>
                                </div>
                                <div class="para text-center">
                                    <!-- <p>Hello</p> -->
                                    <!-- <p><?php //the_field('tagline'); ?></p> -->
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <!-- Team Members Loop -->
                                <?php if (have_rows('team_content')): ?>
                                    <?php while (have_rows('team_content')):
                                        the_row(); ?>
                                        <?php
                                        $team_image = get_sub_field('image');
                                        $team_name = get_sub_field('name');
                                        $team_designation = get_sub_field('designation');
                                        ?>
                                        <div class="col-xl-3 col-md-5 col-12">
                                            <div class="our_team_box mx-auto">
                                                <div class="team_member_img">
                                                    <?php if ($team_image): ?>
                                                        <img src="<?php echo esc_url($team_image['url']); ?>"
                                                            alt="<?php echo esc_attr($team_image['alt']); ?>" />
                                                    <?php endif; ?>
                                                </div>
                                                <div class="team_member_info">
                                                    <p><?php echo esc_html($team_designation); ?></p>
                                                    <h4 class="m-0"><?php echo esc_html($team_name); ?></h4>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <!-- End Team Members Loop -->
                            </div>
                        </div>
                    </div>
                    <!-- End Our Team -->



                    <!-- FAQs Wrapper -->
                <?php elseif (get_row_layout() == 'faqs'): ?>

                    <div class="faqs_wrapper position-relative bg-secondary">
                        <div class="container">
                            <div class="common_title d-flex flex-column align-items-center justify-content-center">
                                <div class="common_title_wrapper d-inline-flex align-items-center justify-content-center">
                                    <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/ai-title.png'); ?>"
                                        alt="AI">
                                    <h2 class="m-0">FAQ’s</h2>
                                </div>
                                <div class="para text-center">
                                    <p>Visit our FAQ section for clear, concise answers to common questions about our AI-driven
                                        digital
                                        marketing services and processes.</p>
                                </div>
                            </div>
                            <div class="accordion" id="accrdionWrapper">

                                <?php
                                if (have_rows('faqs')):
                                    $counter = 0; // Initialize a counter for unique IDs
                                    while (have_rows('faqs')):
                                        the_row();

                                        $counter++; // Increment counter for each FAQ item
                                        $collapse_id = 'collapse-' . $counter; // Create a unique ID for each accordion item
                                        ?>

                                        <div class="accordion-item">
                                            <div class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#<?php echo esc_attr($collapse_id); ?>" aria-expanded="false"
                                                    aria-controls="<?php echo esc_attr($collapse_id); ?>">
                                                    <span></span>
                                                    <?php the_sub_field('ques'); ?>
                                                </button>
                                            </div>
                                            <div id="<?php echo esc_attr($collapse_id); ?>" class="accordion-collapse collapse"
                                                data-bs-parent="#accrdionWrapper">
                                                <div class="accordion-body">
                                                    <div class="para">
                                                        <p>
                                                            <?php the_sub_field('ans'); ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <?php

                                    endwhile;
                                endif;
                                ?>

                            </div>
                        </div>

                    </div>
                </div>
            <?php endif; ?>

        <?php endwhile; ?>
    <?php endif; ?>
    <?php get_header(); ?>
    <?php get_footer(); ?>