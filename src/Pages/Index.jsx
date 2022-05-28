import React from 'react'
import Header from '../Components/Shared/Header'
import Footer from '../Components/Shared/Footer'

const Index = (props) => {
    return (
        <div>
            <Header />
            <h1>{props.page.post_title} Dadasd</h1>
            <div dangerouslySetInnerHTML={{ __html: props.page.post_content }} ></div>
            <Footer />
        </div>
    )
}

export default Index