'use strict';
import { Controller } from '@hotwired/stimulus';
import $ from 'jquery';
import 'interactiveimagejs/dist/interactive-image.min';
export default class default_1 extends Controller {
    connect() {
        this.element.setAttribute('style', 'background-image: url("' + this.viewValue.imageUrl + '");');
        $(this.element).interactiveImage(this.viewValue.items, this.viewValue.options);
    }
}
default_1.values = {
    view: Object,
};
