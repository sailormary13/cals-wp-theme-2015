<?php //social
?>
<div class="social_wrapper">

    <div class="social_inner">
        
				<header class="entry-header small-header">
					<h1 class="entry-title personsectiontitle">Social</h1>
				</header>

                <div class="social_text_wrapper">
                    <?php if(get_sub_field('featured_image')) { ?>
                        <div class="social_post socialimage">

                        <div class="social_text">
                            <?php the_sub_field('post_content'); ?>

                            <div class="social_network">
                    <?php $network = get_sub_field('social_network'); ?>


                    <?php if($network == "twitter") { ?>

                    <div class="social_id">
                        <div class="social_icon">
                            <svg enable-background="new 0 0 32 32" height="32px" id="Layer_1" version="1.0" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.993,6.077C30.816,6.6,29.552,6.953,28.223,7.11c1.355-0.812,2.396-2.098,2.887-3.63  c-1.269,0.751-2.673,1.299-4.168,1.592C25.744,3.797,24.038,3,22.149,3c-3.625,0-6.562,2.938-6.562,6.563  c0,0.514,0.057,1.016,0.169,1.496C10.301,10.785,5.465,8.172,2.227,4.201c-0.564,0.97-0.888,2.097-0.888,3.3  c0,2.278,1.159,4.286,2.919,5.464c-1.075-0.035-2.087-0.329-2.972-0.821c-0.001,0.027-0.001,0.056-0.001,0.082  c0,3.181,2.262,5.834,5.265,6.437c-0.55,0.149-1.13,0.23-1.729,0.23c-0.424,0-0.834-0.041-1.234-0.117  c0.834,2.606,3.259,4.504,6.13,4.558c-2.245,1.76-5.075,2.811-8.15,2.811c-0.53,0-1.053-0.031-1.566-0.092  C2.905,27.913,6.355,29,10.062,29c12.072,0,18.675-10.001,18.675-18.675c0-0.284-0.008-0.568-0.02-0.85  C30,8.55,31.112,7.395,31.993,6.077z" fill="#55ACEE"/><g/><g/><g/><g/><g/><g/></svg>
                        </div>
                        <div>Follow Us </div>
                        <a href="https://twitter.com/@<?php the_sub_field('social_name'); ?>" class="social_name">@<?php the_sub_field('social_name'); ?></a>
                    </div>
                    <?php } ?>

                    <?php if($network == "facebook") { ?>

                    <div class="social_id">
                        <div class="social_icon">
                            <svg enable-background="new 0 0 32 32" height="32px" id="Layer_1" version="1.0" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M32,30c0,1.104-0.896,2-2,2H2c-1.104,0-2-0.896-2-2V2c0-1.104,0.896-2,2-2h28c1.104,0,2,0.896,2,2V30z" fill="#3B5998"/><path d="M22,32V20h4l1-5h-5v-2c0-2,1.002-3,3-3h2V5c-1,0-2.24,0-4,0c-3.675,0-6,2.881-6,7v3h-4v5h4v12H22z" fill="#FFFFFF" id="f"/></g><g/><g/><g/><g/><g/><g/></svg>
                        </div>
                        <div>Like Us On Facebook</div>
                        <a href="https://www.facebook.com/<?php the_sub_field('social_name'); ?>" class="social_name"><?php the_sub_field('social_name'); ?></a>
                    </div>
                    <?php } ?>

                    <?php if($network == "instagram") { ?>

                    <div class="social_id">
                        <div class="social_icon">
                            <svg enable-background="new 0 0 128 128" id="Social_Icons" version="1.1" viewBox="0 0 128 128" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="_x37__stroke"><g id="Instagram_1_"><rect clip-rule="evenodd" fill="none" fill-rule="evenodd" height="128" width="128"/><radialGradient cx="19.1111" cy="128.4444" gradientUnits="userSpaceOnUse" id="Instagram_2_" r="163.5519"><stop offset="0" style="stop-color:#FFB140"/><stop offset="0.2559" style="stop-color:#FF5445"/><stop offset="0.599" style="stop-color:#FC2B82"/><stop offset="1" style="stop-color:#8E40B7"/></radialGradient><path clip-rule="evenodd" d="M105.843,29.837    c0,4.242-3.439,7.68-7.68,7.68c-4.241,0-7.68-3.438-7.68-7.68c0-4.242,3.439-7.68,7.68-7.68    C102.405,22.157,105.843,25.595,105.843,29.837z M64,85.333c-11.782,0-21.333-9.551-21.333-21.333    c0-11.782,9.551-21.333,21.333-21.333c11.782,0,21.333,9.551,21.333,21.333C85.333,75.782,75.782,85.333,64,85.333z M64,31.135    c-18.151,0-32.865,14.714-32.865,32.865c0,18.151,14.714,32.865,32.865,32.865c18.151,0,32.865-14.714,32.865-32.865    C96.865,45.849,82.151,31.135,64,31.135z M64,11.532c17.089,0,19.113,0.065,25.861,0.373c6.24,0.285,9.629,1.327,11.884,2.204    c2.987,1.161,5.119,2.548,7.359,4.788c2.24,2.239,3.627,4.371,4.788,7.359c0.876,2.255,1.919,5.644,2.204,11.884    c0.308,6.749,0.373,8.773,0.373,25.862c0,17.089-0.065,19.113-0.373,25.861c-0.285,6.24-1.327,9.629-2.204,11.884    c-1.161,2.987-2.548,5.119-4.788,7.359c-2.239,2.24-4.371,3.627-7.359,4.788c-2.255,0.876-5.644,1.919-11.884,2.204    c-6.748,0.308-8.772,0.373-25.861,0.373c-17.09,0-19.114-0.065-25.862-0.373c-6.24-0.285-9.629-1.327-11.884-2.204    c-2.987-1.161-5.119-2.548-7.359-4.788c-2.239-2.239-3.627-4.371-4.788-7.359c-0.876-2.255-1.919-5.644-2.204-11.884    c-0.308-6.749-0.373-8.773-0.373-25.861c0-17.089,0.065-19.113,0.373-25.862c0.285-6.24,1.327-9.629,2.204-11.884    c1.161-2.987,2.548-5.119,4.788-7.359c2.239-2.24,4.371-3.627,7.359-4.788c2.255-0.876,5.644-1.919,11.884-2.204    C44.887,11.597,46.911,11.532,64,11.532z M64,0C46.619,0,44.439,0.074,37.613,0.385C30.801,0.696,26.148,1.778,22.078,3.36    c-4.209,1.635-7.778,3.824-11.336,7.382C7.184,14.3,4.995,17.869,3.36,22.078c-1.582,4.071-2.664,8.723-2.975,15.535    C0.074,44.439,0,46.619,0,64c0,17.381,0.074,19.561,0.385,26.387c0.311,6.812,1.393,11.464,2.975,15.535    c1.635,4.209,3.824,7.778,7.382,11.336c3.558,3.558,7.127,5.746,11.336,7.382c4.071,1.582,8.723,2.664,15.535,2.975    C44.439,127.926,46.619,128,64,128c17.381,0,19.561-0.074,26.387-0.385c6.812-0.311,11.464-1.393,15.535-2.975    c4.209-1.636,7.778-3.824,11.336-7.382c3.558-3.558,5.746-7.127,7.382-11.336c1.582-4.071,2.664-8.723,2.975-15.535    C127.926,83.561,128,81.381,128,64c0-17.381-0.074-19.561-0.385-26.387c-0.311-6.812-1.393-11.464-2.975-15.535    c-1.636-4.209-3.824-7.778-7.382-11.336c-3.558-3.558-7.127-5.746-11.336-7.382c-4.071-1.582-8.723-2.664-15.535-2.975    C83.561,0.074,81.381,0,64,0z" fill="url(#Instagram_2_)" fill-rule="evenodd" id="Instagram"/></g></g></svg>
                        </div>
                        <div>Follow Us </div>
                        <a href="https://www.instagram.com/<?php the_sub_field('social_name'); ?>" class="social_name"><?php the_sub_field('social_name'); ?></a>
                    </div>
                    <?php } ?>

                    
                </div>
                        </div>

                        <div class="social_image">
                            <?php 

                                $image = get_sub_field('featured_image');
                                $size = 'large'; // (thumbnail, medium, large, full or custom size)

                                if( $image ) {

                                    echo wp_get_attachment_image( $image, $size );

                                }

                                ?>
                        </div>
                    </div>
                    <?php } else { ?>
                        <div class="social_post">

                            <div class="social_text">
                                <?php the_sub_field('post_content'); ?>

                                <div class="social_network">
                    <?php $network = get_sub_field('social_network'); ?>


                    <?php if($network == "twitter") { ?>

                    <div class="social_id">
                        <div class="social_icon">
                            <svg enable-background="new 0 0 32 32" height="32px" id="Layer_1" version="1.0" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.993,6.077C30.816,6.6,29.552,6.953,28.223,7.11c1.355-0.812,2.396-2.098,2.887-3.63  c-1.269,0.751-2.673,1.299-4.168,1.592C25.744,3.797,24.038,3,22.149,3c-3.625,0-6.562,2.938-6.562,6.563  c0,0.514,0.057,1.016,0.169,1.496C10.301,10.785,5.465,8.172,2.227,4.201c-0.564,0.97-0.888,2.097-0.888,3.3  c0,2.278,1.159,4.286,2.919,5.464c-1.075-0.035-2.087-0.329-2.972-0.821c-0.001,0.027-0.001,0.056-0.001,0.082  c0,3.181,2.262,5.834,5.265,6.437c-0.55,0.149-1.13,0.23-1.729,0.23c-0.424,0-0.834-0.041-1.234-0.117  c0.834,2.606,3.259,4.504,6.13,4.558c-2.245,1.76-5.075,2.811-8.15,2.811c-0.53,0-1.053-0.031-1.566-0.092  C2.905,27.913,6.355,29,10.062,29c12.072,0,18.675-10.001,18.675-18.675c0-0.284-0.008-0.568-0.02-0.85  C30,8.55,31.112,7.395,31.993,6.077z" fill="#55ACEE"/><g/><g/><g/><g/><g/><g/></svg>
                        </div>
                        <div>Follow Us </div>
                        <a href="https://twitter.com/@<?php the_sub_field('social_name'); ?>" class="social_name">@<?php the_sub_field('social_name'); ?></a>
                    </div>
                    <?php } ?>

                    <?php if($network == "facebook") { ?>

                    <div class="social_id">
                        <div class="social_icon">
                            <svg enable-background="new 0 0 32 32" height="32px" id="Layer_1" version="1.0" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M32,30c0,1.104-0.896,2-2,2H2c-1.104,0-2-0.896-2-2V2c0-1.104,0.896-2,2-2h28c1.104,0,2,0.896,2,2V30z" fill="#3B5998"/><path d="M22,32V20h4l1-5h-5v-2c0-2,1.002-3,3-3h2V5c-1,0-2.24,0-4,0c-3.675,0-6,2.881-6,7v3h-4v5h4v12H22z" fill="#FFFFFF" id="f"/></g><g/><g/><g/><g/><g/><g/></svg>
                        </div>
                        <div>Like Us On Facebook</div>
                        <a href="https://www.facebook.com/<?php the_sub_field('social_name'); ?>" class="social_name"><?php the_sub_field('social_name'); ?></a>
                    </div>
                    <?php } ?>

                    <?php if($network == "instagram") { ?>

                    <div class="social_id">
                        <div class="social_icon">
                            <svg enable-background="new 0 0 128 128" id="Social_Icons" version="1.1" viewBox="0 0 128 128" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="_x37__stroke"><g id="Instagram_1_"><rect clip-rule="evenodd" fill="none" fill-rule="evenodd" height="128" width="128"/><radialGradient cx="19.1111" cy="128.4444" gradientUnits="userSpaceOnUse" id="Instagram_2_" r="163.5519"><stop offset="0" style="stop-color:#FFB140"/><stop offset="0.2559" style="stop-color:#FF5445"/><stop offset="0.599" style="stop-color:#FC2B82"/><stop offset="1" style="stop-color:#8E40B7"/></radialGradient><path clip-rule="evenodd" d="M105.843,29.837    c0,4.242-3.439,7.68-7.68,7.68c-4.241,0-7.68-3.438-7.68-7.68c0-4.242,3.439-7.68,7.68-7.68    C102.405,22.157,105.843,25.595,105.843,29.837z M64,85.333c-11.782,0-21.333-9.551-21.333-21.333    c0-11.782,9.551-21.333,21.333-21.333c11.782,0,21.333,9.551,21.333,21.333C85.333,75.782,75.782,85.333,64,85.333z M64,31.135    c-18.151,0-32.865,14.714-32.865,32.865c0,18.151,14.714,32.865,32.865,32.865c18.151,0,32.865-14.714,32.865-32.865    C96.865,45.849,82.151,31.135,64,31.135z M64,11.532c17.089,0,19.113,0.065,25.861,0.373c6.24,0.285,9.629,1.327,11.884,2.204    c2.987,1.161,5.119,2.548,7.359,4.788c2.24,2.239,3.627,4.371,4.788,7.359c0.876,2.255,1.919,5.644,2.204,11.884    c0.308,6.749,0.373,8.773,0.373,25.862c0,17.089-0.065,19.113-0.373,25.861c-0.285,6.24-1.327,9.629-2.204,11.884    c-1.161,2.987-2.548,5.119-4.788,7.359c-2.239,2.24-4.371,3.627-7.359,4.788c-2.255,0.876-5.644,1.919-11.884,2.204    c-6.748,0.308-8.772,0.373-25.861,0.373c-17.09,0-19.114-0.065-25.862-0.373c-6.24-0.285-9.629-1.327-11.884-2.204    c-2.987-1.161-5.119-2.548-7.359-4.788c-2.239-2.239-3.627-4.371-4.788-7.359c-0.876-2.255-1.919-5.644-2.204-11.884    c-0.308-6.749-0.373-8.773-0.373-25.861c0-17.089,0.065-19.113,0.373-25.862c0.285-6.24,1.327-9.629,2.204-11.884    c1.161-2.987,2.548-5.119,4.788-7.359c2.239-2.24,4.371-3.627,7.359-4.788c2.255-0.876,5.644-1.919,11.884-2.204    C44.887,11.597,46.911,11.532,64,11.532z M64,0C46.619,0,44.439,0.074,37.613,0.385C30.801,0.696,26.148,1.778,22.078,3.36    c-4.209,1.635-7.778,3.824-11.336,7.382C7.184,14.3,4.995,17.869,3.36,22.078c-1.582,4.071-2.664,8.723-2.975,15.535    C0.074,44.439,0,46.619,0,64c0,17.381,0.074,19.561,0.385,26.387c0.311,6.812,1.393,11.464,2.975,15.535    c1.635,4.209,3.824,7.778,7.382,11.336c3.558,3.558,7.127,5.746,11.336,7.382c4.071,1.582,8.723,2.664,15.535,2.975    C44.439,127.926,46.619,128,64,128c17.381,0,19.561-0.074,26.387-0.385c6.812-0.311,11.464-1.393,15.535-2.975    c4.209-1.636,7.778-3.824,11.336-7.382c3.558-3.558,5.746-7.127,7.382-11.336c1.582-4.071,2.664-8.723,2.975-15.535    C127.926,83.561,128,81.381,128,64c0-17.381-0.074-19.561-0.385-26.387c-0.311-6.812-1.393-11.464-2.975-15.535    c-1.636-4.209-3.824-7.778-7.382-11.336c-3.558-3.558-7.127-5.746-11.336-7.382c-4.071-1.582-8.723-2.664-15.535-2.975    C83.561,0.074,81.381,0,64,0z" fill="url(#Instagram_2_)" fill-rule="evenodd" id="Instagram"/></g></g></svg>
                        </div>
                        <div>Follow Us </div>
                        <a href="https://www.instagram.com/<?php the_sub_field('social_name'); ?>" class="social_name"><?php the_sub_field('social_name'); ?></a>
                    </div>
                    <?php } ?>

                    
                </div>
                            </div>

                        
                        </div>
                    <?php } ?>

                    
                </div>

                

		
    </div>

    <div class="social_lines">
        <div class="social_line_1">
            <svg viewBox="0 0 1440 246" xmlns="http://www.w3.org/2000/svg">
  <title>
    Group 6
  </title>
  <defs>
    <linearGradient x1="0%" y1="55.1825%" y2="64.7337%" id="a">
      <stop stop-color="#D02134" offset="0%"/>
      <stop stop-color="#55ACEE" offset="100%"/>
    </linearGradient>
  </defs>
  <g transform="translate(-26)" fill="none" fill-rule="evenodd">
    <path d="M510.7703 103.8816C515.6313 98.143 522.8903 94.5 531 94.5c14.6355 0 26.5 11.8645 26.5 26.5 0 1.1727-.0762 2.3276-.2238 3.46 10.117 4.6333 22.8788 10.5367 41.1783 19.018 55.725 25.8277 85.1177 38.7415 118.423 51.2473 45.3035 17.011 85.081 27.5626 122.59 31.6427 42.405 4.6128 81.495.8066 118.416-12.42 39.6877-14.2177 75.479-35.931 129.3233-75.4955 4.4936-3.3018 9.147-6.746 15.034-11.122 2.181-1.621 12.3272-9.1726 15.12-11.2477 34.033-25.2886 54.6266-39.8266 77.6758-54.1635 29.715-18.483 57.856-32.5787 86.732-42.8015 68.3884-24.2114 140.095-26.0774 222.0942-1.8108l-4.8322 16.3c-78.5543-23.2472-146.58-21.477-211.5794 1.5346-27.621 9.7786-54.6855 23.335-83.4223 41.2095-22.546 14.024-42.834 28.3464-76.5145 53.373-2.786 2.07-12.9307 9.6204-15.1177 11.246-5.91 4.393-10.5867 7.8544-15.1094 11.1777-55.0746 40.4685-92.0332 62.89-133.6612 77.8028-39.4716 14.1403-81.14 18.1975-126.0003 13.3177-39.096-4.2528-80.1982-15.1558-126.7342-32.6296-33.8243-12.7006-63.499-25.7384-119.5973-51.739-18.5466-8.596-31.3835-14.5337-41.536-19.1814C544.9613 144.5256 538.328 147.5 531 147.5c-14.6355 0-26.5-11.8645-26.5-26.5 0-.4346.0105-.8667.031-1.296-23.753-10.0886-44.7997-18.193-64.7672-24.8034-42.5465-14.0854-94.804-20.1784-154.5833-19.3292-60.0548.853-124.5037 8.583-189.1902 20.9405-24.0915 4.6022-46.5194 9.5328-66.6838 14.4613-7.049 1.7228-13.308 3.3213-18.7024 4.7542-1.882.5-3.52.943-6.5457 1.7804 0 0-4.4143-16.4195-2.8767-16.8463 1.4328-.3943 3.1196-.8505 5.051-1.3635 5.5016-1.4614 11.87-3.0878 19.0308-4.838 20.4345-4.9945 43.143-9.9868 67.5315-14.646 65.5858-12.529 130.9783-20.3723 192.1436-21.241 61.5265-.874 115.5907 5.4296 160.1768 20.1902 20.3352 6.7322 41.672 14.9418 65.655 25.1182zM531 136c8.2843 0 15-6.7157 15-15s-6.7157-15-15-15-15 6.7157-15 15 6.7157 15 15 15z" fill="url(#a)" fill-rule="nonzero" opacity=".1862"/>
    <circle fill="#D02034" opacity=".5314" cx="531" cy="121" r="7"/>
    <circle stroke="#D02134" class="pulse" stroke-width="2" opacity=".2966" cx="531.5" cy="121.5" r="35.5"/>
  </g>
</svg>

        </div>

        <div class="social_line_2">

        </div>

        <div class="social_line_3">

        </div>

        <div class="social_line_4">

        </div>

        <div class="social_line_5">

        </div>

     
    </div>
    
</div>