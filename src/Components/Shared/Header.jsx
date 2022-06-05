import React from 'react'
import { Link } from '@inertiajs/inertia-react';

const Header = (props) => {
    console.log(props)

    return (
        <header className='nav'>
            {props.data.map((link, index) =>
                <Link href={link.link} key={index}>{link.name}</Link>
            )}
        </header>
    )
}

export default Header