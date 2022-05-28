import React from 'react'
import { Link } from '@inertiajs/inertia-react';

const Header = () => {
    return (
        <header className='nav'>
            <Link href="/">Home</Link>
            <Link href="/sample-page/">Sample page</Link>
        </header>
    )
}

export default Header