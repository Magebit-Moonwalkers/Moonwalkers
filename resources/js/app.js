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


let checkbox = document.getElementById('if_shipping_same');

checkbox.addEventListener("change", function() {
    if(checkbox.checked) {
        document.getElementById('billing-address-button').textContent = "Continue to Payment";
        document.getElementById('billing-address-button').value = "toPayment";
    }
    else {
        document.getElementById('billing-address-button').textContent = "Continue to Shipping Address";
        document.getElementById('billing-address-button').value = "toShippingAddress";
    }
})

let attributes = {
    "1": [
        { "textContent": "Optics type", "type": "text", "name": "optics_type" },
        { "textContent": "Max useful magnification", "type": "text", "name": "magnification" },
        { "textContent": "Focal length (mm)", "type": "number", "name": "focal_length" },
        {
            "textContent": "Area of application", "type": "dropdown",
            "options": [
                { "textContent": "Nature observation", "name": "nature_observation" },
                { "textContent": "Moon and planets", "name": "moon_planets" },
                { "textContent": "Nebula and galaxies", "name": "moon_planets" },
                { "textContent": "Astrophotography", "name": "astrophotography" },
                { "textContent": "Sun", "name": "sun" }
            ],
            "name": "area_of_application"
        },
        { "textContent": "Aperture (mm)", "type": "number", "name": "aperture" },
        { "textContent": "Mounting type", "type": "text", "name": "mounting_type" }],
    "2": [
        { "textContent": "Max additional load capacity (kg)", "type": "number", "name": "max_additional_load_capacity" },
        { "textContent": "Material tripod", "type": "text", "name": "material_tripod" },
        { "textContent": "Mounting type", "type": "text", "name": "mounting_type" },
        { "textContent": "Total weight (kg)", "type": "number", "name": "total_weight" },
        { "textContent": "Max height (cm)", "type": "number", "name": "max_height" }],
    "3": [
        { "textContent": "Focal length (mm)", "type": "number", "name": "focal_length" },
        { "textContent": "Apparent field of view", "type": "text", "name": "apparent_field_of_view" },
        { "textContent": "Connection", "type": "text", "name": "connection" }],
    "4": [
        { "textContent": "Magnification", "type": "text", "name": "magnification" },
        { "textContent": "Connection (to the telescope)", "type": "text", "name": "connection" }],
    "5": [
        { "textContent": "Fits to", "type": "text", "name": "fits_to" },
        { "textContent": "Shape", "type": "text", "name": "shape" },
        { "textContent": "Dimensions(L x W x H), (mm)", "type": "text", "name": "dimensions" },
        { "textContent": "Material", "type": "text", "name": "material" },
        { "textContent": "Colour", "type": "text", "name": "colour" }],
    "6": [
        { "textContent": "Connection", "type": "text", "name": "connection" },
        { "textContent": "Colour", "type": "text", "name": "colour" }
    ]
};

window.onload = function(event) {
    console.log(document.getElementById('category').value);
    addAttributesToHTML(document.getElementById('category').value);
}
   
document.getElementById('category').addEventListener("change", function (event) {
    console.log(event.target.value);
    addAttributesToHTML(event.target.value);
});

document.getElementById('category').addEventListener("load", function (event) {
    // console.log(event.target.value);
    // addAttributesToHTML(event.target.value);
    console.log(123123);
});

function addAttributesToHTML(e) {
    let parent = document.getElementById('attributes');
    while (parent.firstChild) {
        parent.removeChild(parent.firstChild);
    }
    if (!e) return;

    let formGroup = document.createElement("div");
    formGroup.classList.add("form-group");

    parent.appendChild(formGroup);

    attributes[e].forEach(element => {
        let label = document.createElement("label");
        label.setAttribute("for", element["name"]);
        label.textContent = element["textContent"];
        formGroup.appendChild(label);

        if (element["type"] == "dropdown") {
            let select = document.createElement("select");
            select.classList.add("form-select");
            formGroup.appendChild(select);
            element["options"].forEach(elem => {
                let option = document.createElement("option");
                option.setAttribute("value", elem["name"]);
                option.textContent = elem["textContent"];
                select.appendChild(option);
            });
        }
        else {
            let input = document.createElement("input");
            input.setAttribute("id", element["name"]);
            input.setAttribute("name", element["name"]);
            input.classList.add("form-control");
            input.setAttribute("type", element["type"]);

            formGroup.appendChild(input);
        }
    });
}



document.getElementById('deleteBtn').addEventListener("click", function() {
    confirm('Are you sure you want to delete?');
})


