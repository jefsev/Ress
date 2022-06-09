import React from 'react';
import { Link, usePage } from '@inertiajs/inertia-react';
import defaultLogo from '../../assets/images/logo-nm.svg';

const Header = () => {
    const { custom_logo } = usePage().props
    const { primary_menu } = usePage().props

    return (
        <>
            <header className='nav flex flex-row justify-between items-center py-3'>
                <Link href='/'>
                    <img src={custom_logo != null && custom_logo || defaultLogo} alt='site logo' className="logo" />
                </Link>
                <nav className='nav-menu'>
                    {primary_menu.map((link, index) =>
                        <Link href={link.link} key={index}>{link.name}</Link>
                    )}
                </nav>
            </header>
        </>
    )
}

export default Header