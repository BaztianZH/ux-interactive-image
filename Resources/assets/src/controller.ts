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

export default class extends Controller {
    readonly viewValue: any;

    static values = {
        view: Object,
    }

    connect() {
        this.element.setAttribute('style','background-image: url("'+this.viewValue.imageUrl+'");');
        (<any>$(this.element)).interactiveImage(this.viewValue.items, this.viewValue.options);
    }
}
