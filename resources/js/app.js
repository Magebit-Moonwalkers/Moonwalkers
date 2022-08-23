/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({});

import ExampleComponent from './components/ExampleComponent.vue';
app.component('example-component', ExampleComponent);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.globEager('./**/*.vue')).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

app.mount('#app');

let $attributes = {
    "telescopes": ["asd", "dsa"],
    "mounting": ["a","b"],
    "eyepieces": ["p","s"],
    "lenses": ["o"],
    "bags": ["q","w","e"],
    "filters": ["kl"]
};

document.getElementById('product-type-select').addEventListener("change", function (event) {
    console.log(event.target.value);
    console.log($attributes[event.target.value]);
    let parent = document.getElementById('attributes');
    while (parent.firstChild) {
        parent.removeChild(parent.firstChild);
    }

    let formGroup = document.createElement("div");
    formGroup.classList.add("form-group");

    parent.appendChild(formGroup);

    $attributes[event.target.value].forEach(element => {
        console.log(element);
        let label = document.createElement("label");
        label.setAttribute("for", element);
        label.textContent = element;

        let input = document.createElement("input");
        input.setAttribute("id", element);
        input.setAttribute("name", element);
        input.classList.add("form-control");

        formGroup.appendChild(label);
        formGroup.appendChild(input);
    });
}) 