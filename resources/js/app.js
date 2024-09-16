import './bootstrap';
import 'flowbite';

import AOS from 'aos';
import 'aos/dist/aos.css'; 

AOS.init({
  startEvent: 'DOMContentLoaded',
  duration: 600,
  offset: 100,
  easing: 'ease-out-cubic'
});