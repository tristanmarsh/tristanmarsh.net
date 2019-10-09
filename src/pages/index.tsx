import React from "react"

import SEO from "../components/seo"
import { Website } from "./Website"

const IndexPage = () => (
  <div className="home">
    {/* <Layout> */}
    <SEO title="Home" />
    <Website />
    {/* </Layout> */}
  </div>
)

export default IndexPage
