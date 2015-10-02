<?php
function sellproperty_property_carousel(){
                $sellpropertyProperty= '<div id="owl-slider" class="owl-carousel-property">';
                $efs_query= "post_type=property&posts_per_page=-1";
                query_posts($efs_query);
                if (have_posts()) : while (have_posts()) : the_post();
                                global $post;
                                $thumb= get_the_post_thumbnail( $post->ID, 'property-image' );         
                                $sellpropertyProperty.='
                               
                                <div class="item">
                                                <div class="item_thumb">'.$thumb.'</div>
                                                <div class="sp_thumbTitle text-center">
                                                                <a href="'. get_permalink() . '">'. get_the_title () .'</a>
                                                                
                                                </div>
                                </div>';
                endwhile; endif; wp_reset_query();
                $sellpropertyProperty.= '</div>';
                return $sellpropertyProperty;
}

/**add the shortcode for the slider- for use in editor**/
function sellproperty_insert_property($atts, $content=null){
                $sellpropertyProperty= sellproperty_property_carousel();
                return $sellpropertyProperty;
}
add_shortcode('sellproperty_property', 'sellproperty_insert_property');