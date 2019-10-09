import { useState, useEffect } from "react"

export function useScrollPosition() {
  const [scrollPosition, setScrollPosition] = useState(0)

  useEffect(() => {
    let lastPosition = 0
    let requestRunning = false

    const handleScroll = () => {
      lastPosition = window.scrollY

      if (requestRunning) {
        requestRunning = true
      } else {
        window.requestAnimationFrame(() => {
          setScrollPosition(lastPosition)
          requestRunning = false
        })
      }
    }

    window.addEventListener("scroll", handleScroll)
    return () => window.removeEventListener("scroll", handleScroll)
  })

  return scrollPosition
}
