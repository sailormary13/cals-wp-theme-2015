<?php

// Photo include

															$image = get_sub_field('photo_from_library');
															$size = 'large'; // (thumbnail, medium, large, full or custom size)

															if( $image ) {

																echo wp_get_attachment_image( $image, $size );

															}
