import React from 'react';
import { Link, usePage } from '@inertiajs/inertia-react';
import defaultLogo from '../../assets/images/logo.png';

const Header = () => {
    const { custom_logo } = usePage().props
    const { primary_menu } = usePage().props

    return (
        <>
            <header className='nav py-3'>
                <div className="wrap container mx-auto px-3 flex flex-row justify-between items-center">
                    <Link href='/'>
                        <img src={custom_logo != null && custom_logo || defaultLogo} alt='site logo' className="logo" />
                    </Link>
                    <nav className='nav-menu'>
                        {primary_menu.map((link, index) =>
                            <Link href={link.link} key={index}>{link.name}</Link>
                        )}
                    </nav>
                </div>
            </header>
        </>
    )
}

export default Header