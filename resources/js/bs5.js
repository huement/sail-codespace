/**
 * --------------------------------------------------------------------------
 * Bootstrap index.umd.js
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 * --------------------------------------------------------------------------
 */

import * as Popper from '@popperjs/core/dist/umd/popper.js'

import Alert from './src/alert.js'
import Button from './src/button.js'
// import Carousel from './src/carousel.js'
import Collapse from './src/collapse.js'
import Dropdown from './src/dropdown.js'
import Modal from './src/modal.js'
import Offcanvas from './src/offcanvas.js'
import Popover from './src/popover.js'
import ScrollSpy from './src/scrollspy.js'
import Tab from './src/tab.js'
import Toast from './src/toast.js'
import Tooltip from './src/tooltip.js'

console.log('Loading Local BS5.3.3 + PopperJS')

export default {
  Popper,
  Alert,
  Button,
  // Carousel,
  Collapse,
  Dropdown,
  Modal,
  Offcanvas,
  Popover,
  ScrollSpy,
  Tab,
  Toast,
  Tooltip
}
