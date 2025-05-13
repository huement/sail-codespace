// Default Site Layout Javascript
import axios from 'axios'
import Alpine from 'alpinejs'
import _ from 'lodash'
import $ from 'cash-dom'
import domReady from '@wordpress/dom-ready'
import fitty from 'fitty'
import '@huement/cosmicwave'

// Bootstrap 5 Components
import './bs5.js'

window.axios = axios
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'
window.Alpine = Alpine
Alpine.start()

function fitTextTitles() {
  fitty('.fit-text', {
    minSize: 16,
    maxSize: 200,
    sync: true
  })

  fitty('.fit-title', {
    minSize: 24,
    maxSize: 300,
    sync: true
  })

  fitty('.massive-title .h1', {
    minSize: 50,
    maxSize: 300,
    sync: true
  })
}

/**
 * fires when the page loads or resizes. controls spacing and height of various elements.
 */
function mainUISync() {
  console.log('sync')
}

domReady(async () => {
  console.log('JAVASCRIPT LOADING...')

  $('html').addClass('dom-loaded')

  setTimeout(() => {
    $('.massive-title').addClass('loaded')
  }, 500)

  $('.btm-frame').addClass('frame-loaded')

  fitTextTitles()
})

window.addEventListener('resize', (event) => {})
onresize = (event) => {
  console.log('resize')
  mainUISync()
}

var lastScrollTop = 0
window.addEventListener(
  'scroll',
  function () {
    // or window.addEventListener("scroll"....
    var st = window.pageYOffset || document.documentElement.scrollTop // Credits: "https://github.com/qeremy/so/blob/master/so.dom.js#L426"
    if (st > lastScrollTop) {
      // downscroll code
      if (this.scrollY > 300) $('.menu-container').addClass('bar-menu')
    } else if (st < lastScrollTop) {
      // upscroll code
      if (this.scrollY < 100) $('.menu-container').removeClass('bar-menu')
    } // else was horizontal scroll
    lastScrollTop = st <= 0 ? 0 : st // For Mobile or negative scrolling
    // console.log( this.scrollY )
  },
  false
)
