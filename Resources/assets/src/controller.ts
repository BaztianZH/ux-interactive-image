/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

'use strict';

import { Controller } from '@hotwired/stimulus';
import $ from 'jquery';
import 'interactiveimagejs/dist/interactive-image.min';
window.$ = window.jQuery = $;

export default class extends Controller {
    static values = {
        view: Object,
    }

    connect() {
        this.element.style.backgroundImage = "url("+ this.viewValue.imageUrl + ")";
        this.element.style.width = "1920px";
        this.element.style.height = "640px";
        this.element.style.backgroundRepeat = "no-repeat";
        this.element.style.backgroundSize = "cover";
        this.element.style.maxWidth = this.element.parentElement.width;
        $(this.element).interactiveImage(this.viewValue.items, this.viewValue.options);
    }
}
