import * as React from "react"

import Countdown from "react-countdown"
import Layout from "../components/layout"
import styled from "@emotion/styled"

const StyledLayout = styled.div`
  display: flex;
  flex-direction: row;
  justify-content: center;
  min-height: 100vh;
  border: 10px solid turquoise;
  position: absolute;
  left: 0;
  width: 100vw;
  box-sizing: border-box;

  & > * {
    flex: 1;
  }

  main {
    margin: 4rem 1rem;
    text-align: center;
    justify-content: center;
    flex-direction: column;
    display: flex;
  }
`

const Confetti = styled.div`
  position: fixed;

  .container {
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    height: 100vh;
    width: 100vw;
  }
  .confetti {
    width: 15px;
    height: 15px;
    background-color: #f2d74e;
    position: absolute;
    left: 50%;
    animation: confetti 5s ease-in-out -2s infinite;
    transform-origin: left top;
  }
  .confetti:nth-child(1) {
    background-color: #f2d74e;
    left: 10%;
    animation-delay: 0;
  }
  .confetti:nth-child(2) {
    background-color: #95c3de;
    left: 20%;
    animation-delay: -5s;
  }
  .confetti:nth-child(3) {
    background-color: #ff9a91;
    left: 30%;
    animation-delay: -3s;
  }
  .confetti:nth-child(4) {
    background-color: #f2d74e;
    left: 40%;
    animation-delay: -2.5s;
  }
  .confetti:nth-child(5) {
    background-color: #95c3de;
    left: 50%;
    animation-delay: -4s;
  }
  .confetti:nth-child(6) {
    background-color: #ff9a91;
    left: 60%;
    animation-delay: -6s;
  }
  .confetti:nth-child(7) {
    background-color: #f2d74e;
    left: 70%;
    animation-delay: -1.5s;
  }
  .confetti:nth-child(8) {
    background-color: #95c3de;
    left: 80%;
    animation-delay: -2s;
  }
  .confetti:nth-child(9) {
    background-color: #ff9a91;
    left: 90%;
    animation-delay: -3.5s;
  }
  .confetti:nth-child(10) {
    background-color: #f2d74e;
    left: 100%;
    animation-delay: -2.5s;
  }

  @keyframes confetti {
    0% {
      transform: rotateZ(15deg) rotateY(0deg) translate(0, 0);
    }
    25% {
      transform: rotateZ(5deg) rotateY(360deg) translate(-5vw, 20vh);
    }
    50% {
      transform: rotateZ(15deg) rotateY(720deg) translate(5vw, 60vh);
    }
    75% {
      transform: rotateZ(5deg) rotateY(1080deg) translate(-10vw, 80vh);
    }
    100% {
      transform: rotateZ(15deg) rotateY(1440deg) translate(10vw, 110vh);
    }
  }
`

const AreWeMarriedYet = () => {
  const weddingDate = new Date("2020-11-23:15:00:00").getTime()
  const today = Date.now()
  const hasWeddingHappened = today > weddingDate

  return (
    <Layout>
      <StyledLayout>
        <main>
          <h4>Are We Married Yet?!</h4>
          <h1 style={{ fontSize: "20rem" }}>
            {hasWeddingHappened ? "yep!" : "nope"}
          </h1>

          {!hasWeddingHappened && (
            <p className="lead">
              Keep Counting{" "}
              <Countdown
                date={weddingDate}
                renderer={({ days, hours, minutes, seconds, ...props }) => (
                  <div>
                    {days && <span>{days} days</span>}{" "}
                    {hours && <span>{hours} hours</span>}{" "}
                    {minutes && <span>{minutes} minutes</span>}{" "}
                    {seconds && <span>{seconds} seconds</span>}{" "}
                  </div>
                )}
              />
            </p>
          )}
        </main>

        {hasWeddingHappened && (
          <Confetti>
            <div className="container">
              {Array(10)
                .fill(0)
                .map((x, i) => (
                  <div className="confetti" key={i} />
                ))}
            </div>
          </Confetti>
        )}
      </StyledLayout>
    </Layout>
  )
}

export default AreWeMarriedYet
