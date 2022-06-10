import React from 'react'
import { Head } from '@inertiajs/inertia-react';

const AppHead = ({ seo, pageTitle }) => {
    console.log(seo)
    return (
        <>
            {(seo.yoast_status === false) &&
                <Head>
                    <title>{pageTitle}</title>
                </Head>
            }

            {(seo.yoast_status === true) &&
                <Head>
                    <meta name="robots" content={seo.robots.index + ',' + seo.robots.follow}></meta>
                    <title>{seo.seo_title}</title>
                    <meta name="description" content={seo.seo_description} />
                </Head>
            }
        </>
    )
}

export default AppHead