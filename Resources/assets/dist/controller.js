/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
'use strict';

var __extends = this && this.__extends || function () {
  var extendStatics = function (d, b) {
    extendStatics = Object.setPrototypeOf || {
      __proto__: []
    } instanceof Array && function (d, b) {
      d.__proto__ = b;
    } || function (d, b) {
      for (var p in b) if (Object.prototype.hasOwnProperty.call(b, p)) d[p] = b[p];
    };

    return extendStatics(d, b);
  };

  return function (d, b) {
    if (typeof b !== "function" && b !== null) throw new TypeError("Class extends value " + String(b) + " is not a constructor or null");
    extendStatics(d, b);

    function __() {
      this.constructor = d;
    }

    d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
  };
}();

exports.__esModule = true;

var stimulus_1 = require("@hotwired/stimulus");

var jquery_1 = require("jquery");

require("interactiveimagejs/dist/interactive-image.min");

window.$ = window.jQuery = jquery_1["default"];

var default_1 =
/** @class */
function (_super) {
  __extends(default_1, _super);

  function default_1() {
    return _super !== null && _super.apply(this, arguments) || this;
  }

  default_1.prototype.connect = function () {
    this.element.style.backgroundImage = "url(" + this.viewValue.imageUrl + ")";
    this.element.style.width = "1920px";
    this.element.style.height = "640px";
    this.element.style.backgroundRepeat = "no-repeat";
    this.element.style.backgroundSize = "cover";
    this.element.style.maxWidth = this.element.parentElement.width;
    (0, jquery_1["default"])(this.element).interactiveImage(this.viewValue.items, this.viewValue.options);
  };

  default_1.values = {
    view: Object
  };
  return default_1;
}(stimulus_1.Controller);

exports["default"] = default_1;