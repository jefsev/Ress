import React from 'react'
import { Link } from '@inertiajs/inertia-react';
import defaultLogo from '../../assets/images/nomix-logo.svg';

const Header = (props) => {
    const nav = props.data.primary_menu;
    //const logo = props.data.custom_logo;

    return (
        <header className='nav flex flex-row justify-between py-3'>
            <Link href='/'>
                <img src={defaultLogo} alt='site logo' className="logo" />
            </Link>
            <nav className='nav__menu'>
                {nav.map((link, index) =>
                    <Link href={link.link} key={index}>{link.name}</Link>
                )}
            </nav>
        </header>
    )
}

export default Header