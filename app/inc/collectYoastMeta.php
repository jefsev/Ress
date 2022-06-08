<?php
namespace Nomix\Inc;

/**
 * We need Yoast SEO meta data,
 * and return array with data we want to share with Inertia.
 *
*/

class collectYoastMeta {
    public static function collectMeta( $id ) {
        $yoast_seo = [];
        if(class_exists('WPSEO_Options')){
            /* Yoast is active */
            $yoast_seo['yoast_status']    = true;
            $yoast_seo['post_id']         = $id;
            $yoast_seo['robots']          = YoastSEO()->meta->for_post( $id )->robots;
            $yoast_seo['seo_site_name']   = YoastSEO()->meta->for_post( $id )->site_name;
            $yoast_seo['seo_description'] = YoastSEO()->meta->for_post( $id )->description;
            $yoast_seo['seo_title']       = YoastSEO()->meta->for_post( $id )->title;
        } else {
            $yoast_seo['yoast_status']    = false;
        }
    
        return $yoast_seo;
    }
}