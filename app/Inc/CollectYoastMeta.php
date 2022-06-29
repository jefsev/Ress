<?php
namespace Ress\Inc;

/**
 * We need Yoast SEO meta data in our React theme
 * Use this class to collect Yoast SEO meta data with controllers to be shared with the React app using Inertia.
 * Build your own custom meta data with the Yoast SEO surface API.
 * @link https://developer.yoast.com/customization/apis/surfaces-api
 * 
 * @property id post id we need to get Yoast data.
 * @return array return $yoast_seo to controller to render with Inertia.
*/

class CollectYoastMeta {
    private $id;

    public static function collectMeta( $id ) {
        // Setup array
        $yoast_seo = [];

        // Get Yoast SEO meta data
        if(class_exists('WPSEO_Options')){
            /* Yoast is active */
            $yoast_seo['yoast_status']    = true;
            $yoast_seo['data']            = YoastSEO()->meta->for_post( $id )->schema;
            $yoast_seo['post_id']         = $id;
            $yoast_seo['robots']          = YoastSEO()->meta->for_post( $id )->robots;
            $yoast_seo['seo_site_name']   = YoastSEO()->meta->for_post( $id )->site_name;
            $yoast_seo['seo_description'] = YoastSEO()->meta->for_post( $id )->description;
            $yoast_seo['seo_title']       = YoastSEO()->meta->for_post( $id )->title;
        } else {
            /* Yoast is inactive set to false */
            $yoast_seo['yoast_status']    = false;
        }
    
        return $yoast_seo;
    }
}