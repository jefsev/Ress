import React from 'react'
import Header from '../Components/Shared/Header'
import Footer from '../Components/Shared/Footer'

const Archive = (props) => {

    return (
        <div className='container mx-auto px-2'>
            <Header nav={props.primary_menu} logo={props.custom_logo} />
            <h1>{props.title}</h1>
            <Footer />
        </div>
    )
}

export default Archive