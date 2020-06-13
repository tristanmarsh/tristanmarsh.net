import { LogRocketInit } from "../services/LogRocket"
import React from "react"
import SEO from "../components/seo"
import { Website } from "../components/Website"

const IndexPage = () => (
  <div className="home">
    {/* <Layout> */}
    <SEO title="Home" />
    <Website />
    {/* </Layout> */}
  </div>
)

LogRocketInit()

export default IndexPage
