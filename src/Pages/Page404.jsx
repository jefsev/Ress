import React from 'react'
import Header from '../Components/Shared/Header'
import Footer from '../Components/Shared/Footer'

const Page404 = (props) => {
    console.log(props)

    return (
        <div>
            <Header />
            <h1>{props.content}</h1>
            <Footer />
        </div>
    )
}

export default Page404