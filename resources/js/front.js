/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue'); //importiamo la librearia Vue
import App from './components/App.vue' //importiamo il componente base App

//Inizializziamo l'applicazione Vue passandogli l'oggetto di inizializzazione 
const app = new Vue({
    el: '#root', //id del componente nel file HTML entro al quale opererà Vue
    render: h => h(App), //monta componente App nell'elemento di root 
});
