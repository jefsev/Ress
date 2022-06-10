import React from 'react'
import { Link } from '@inertiajs/inertia-react';
import AppHead from '../Components/Shared/AppHead';
import Header from '../Components/Shared/Header'
import Footer from '../Components/Shared/Footer'

const Index = (props) => {

    return (
        <>
            <AppHead seo={props.yoast_meta} pageTitle={props.title} />

            <div className='container mx-auto px-2'>
                <Header />
                <h1>{props.title}</h1>
                <div className='content' dangerouslySetInnerHTML={{ __html: props.content }} ></div>
                <div className="post-loop py-3">
                    {props.posts.map((post, index) =>
                        <article className='post py-2' key={index}>
                            <h2>{post.post_title}</h2>
                            <Link href={'/' + post.post_name}>Read more</Link>
                        </article>
                    )}
                </div>
                <Footer />
            </div>

        </>
    )
}

export default Index