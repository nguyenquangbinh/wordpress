<?php $post_meta_value = get_post_meta( $post->ID, 'test_meta_block_field', true );
					echo 'Email is: ' .$post_meta_value ; ?>