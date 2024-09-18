import './bootstrap';
import 'flowbite';

import AOS from 'aos';
import 'aos/dist/aos.css'; 

AOS.init({
  startEvent: 'DOMContentLoaded',
  duration: 600,
  offset: 280,
  once: true,
  easing: 'ease-out-cubic'
});


