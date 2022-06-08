import React from 'react';
import { Helmet } from "react-helmet";
import { Link } from '@inertiajs/inertia-react';
import defaultLogo from '../../assets/images/logo-nm.svg';

const Header = (props) => {
    console.log(props.seo)
    return (
        <>
            <Helmet>
                {(props.seo.yoast_status === false) &&
                    <>
                        <title>{props.title}</title>
                    </>
                }

                {(props.seo.yoast_status === true) &&
                    <>
                        <meta name="robots" content={props.seo.robots.index + ',' + props.seo.robots.follow}></meta>
                        <title>{props.seo.seo_title}</title>
                        <meta name="description" content={props.seo.seo_description} />
                    </>
                }
            </Helmet>

            <header className='nav flex flex-row justify-between items-center py-3'>
                <Link href='/'>
                    <img src={props.logo != null && props.logo || defaultLogo} alt='site logo' className="logo" />
                </Link>
                <nav className='nav-menu'>
                    {props.nav.map((link, index) =>
                        <Link href={link.link} key={index}>{link.name}</Link>
                    )}
                </nav>
            </header>
        </>
    )
}

export default Header