import './bootstrap';
import 'flowbite';
import '../css/app.css';
import Alpine from 'alpinejs';   

Alpine.start();

window.onload = (event) => {
  localStorage.setItem('appUrl', "");
    const appUrl = localStorage.getItem('appUrl');
    console.log(appUrl);
};
