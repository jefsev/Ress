import React from 'react'
import AppHead from '../Components/Shared/AppHead';
import Header from '../Components/Shared/Header'
import Footer from '../Components/Shared/Footer'

const Page = (props) => {
    return (

        <>
            <AppHead seo={props.yoast_meta} pageTitle={props.title} />

            <div className='container mx-auto px-2'>
                <Header />
                <h1>{props.title}</h1>
                <div dangerouslySetInnerHTML={{ __html: props.content }} ></div>
                <Footer />
            </div>

        </>
    )
}

export default Page