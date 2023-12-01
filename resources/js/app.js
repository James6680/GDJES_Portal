import './bootstrap';
import 'flowbite';
import '../css/app.css';
import Alpine from 'alpinejs';   

Alpine.start();

window.onload = (event) => {
  /////////SET THE APPURL VALUE TO "" OR "/public/" FOR LOCAL AND HOSTED ENV
  localStorage.setItem('appUrl', "");
    const appUrl = localStorage.getItem('appUrl');
    console.log(appUrl);
};
