/*

 Core.js

*/

// Import Modules.
import App from '@/base/modules/app'
import SetStates from '@/base/modules/state/SetStates'

// Created Instance.
const app = new App()
const setStates = new SetStates()

// Initial.
app.init()

// DOM Content Loaded.
window.addEventListener('DOMContentLoaded', () => {
  // Call DOM Content Loaded Method.
  app.domContentLoaded()
})

// Load.
window.addEventListener('load', () => {
  // Call Load Method.
  app.load()
})

// Resize.
window.addEventListener('resize', () => {
  // Call Resize Method.
  app.resize()
})

// Scroll.
window.addEventListener('scroll', () => {
  // Call Scroll Method.
  app.scroll()
})
