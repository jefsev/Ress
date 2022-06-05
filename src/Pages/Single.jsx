import React from 'react'
import Header from '../Components/Shared/Header'
import Footer from '../Components/Shared/Footer'

const Single = (props) => {
    console.log(props)
    return (
        <div>
            <Header data={props.primary_menu} />
            <h1>{props.post.post_title}</h1>
            <div dangerouslySetInnerHTML={{ __html: props.post.post_content }} ></div>
            <Footer />
        </div>
    )
}

export default Single