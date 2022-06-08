import React from 'react'
import { Link } from '@inertiajs/inertia-react';
import defaultLogo from '../../assets/images/logo-nm.svg';

const Header = (props) => {
    console.log(props)
    return (
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
    )
}

export default Header