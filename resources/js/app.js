// Default Site Layout Javascript
import axios from 'axios'
import Alpine from 'alpinejs'
import _ from 'lodash'
import $ from 'cash-dom'
import imagesLoaded from 'imagesloaded'
import domReady from '@wordpress/dom-ready'
import fitty from 'fitty'
import Headroom from 'headroom.js'

// Bootstrap 5 Components
import './bs5.js'

window.axios = axios
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'
window.Alpine = Alpine
Alpine.start()

function toggleMenu(e) {
  $('#overlay').toggleClass('open')
  $('.menu-container').toggleClass('full-menu')
  // menuIcon.classList.toggle("fa-bars");
  e.preventDefault()
}

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
 * keep card component svg and img sizes the same
 */
function cardImageSync() {
  if ($('img.card-img-tall').length > 0) {
    // console.log('card tall sync firing')
    const baseHeight = $('img.card-img-tall').height()
    $('svg.card-img-tall').height(baseHeight)
  }
  if ($('img.card-img').length > 0) {
    // console.log('card sync firing')
    const baseHeight = $('img.card-img').height()
    $('svg.card-img').height(baseHeight)
  }
}

/**
 * fires when the page loads or resizes. controls spacing and height of various elements.
 */
function mainUISync() {
  cardImageSync()
  var newPadSize = $('.headroom').outerHeight() + 'px'
  $('body.website-layout').css('paddingTop', newPadSize)
}

domReady(async () => {
  console.log('APP JAVASCRIPT LOADING...')

  $('html').addClass('dom-loaded')

  setTimeout(() => {
    $('.massive-title').addClass('loaded')
  }, 500)

  if ($('#pageContent').length > 1) {
    imagesLoaded($('#pageContent'), function () {
      console.log('all pageContent images are loaded')
      mainUISync()
    })
  }

  $('.btm-frame').addClass('frame-loaded')
  $('.logo-main').on('click', toggleMenu)

  // Main Navbar on website layout
  if ($('.headroom').length > 0) {
    const header = $('.headroom')
    const headroom = new Headroom(header)
    headroom.init()
  } else {
    console.log('no headroom header present')
  }

  mainUISync()
  fitTextTitles()

  // make aoi-active first in list
  if ($('.aoi-active').length > 0) {
    var items = $('.aoi-component .nav-item')
    for (let index = 0; index < items.length; index++) {
      const element = items[index]
      if ($(element).hasClass('aoi-active')) {
        items[index].parentNode.insertBefore(items[index], items[0])
      }
    }
  }
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
