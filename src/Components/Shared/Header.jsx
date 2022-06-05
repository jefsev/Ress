import React from 'react'
import { Link } from '@inertiajs/inertia-react';

const Header = (props) => {
    const nav = props.data.primary_menu;
    const logo = props.data.custom_logo;

    return (
        <header className='nav flex flex-row justify-between'>
            <Link href='/'>
                <img src={logo} alt='site logo' className="logo" />
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