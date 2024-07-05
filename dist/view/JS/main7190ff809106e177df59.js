/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./CSS/style.scss":
/*!************************!*\
  !*** ./CSS/style.scss ***!
  \************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n\n\n//# sourceURL=webpack:///./CSS/style.scss?");

/***/ }),

/***/ "./main.tsx":
/*!******************!*\
  !*** ./main.tsx ***!
  \******************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _CSS_style_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./CSS/style.scss */ \"./CSS/style.scss\");\n/* harmony import */ var _rocet_core_integration__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./rocet/core/integration */ \"./rocet/core/integration.ts\");\n/* harmony import */ var _rocet_core_rocet__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./rocet/core/rocet */ \"./rocet/core/rocet.ts\");\n/* harmony import */ var _router_api__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./router/api */ \"./router/api.tsx\");\n\n\n\n\nvar img = __webpack_require__(/*! ./images/obi.png */ \"./images/obi.png\");\nvar rocet = new _rocet_core_rocet__WEBPACK_IMPORTED_MODULE_2__.Rocet('App');\n// rocet.ExecAfter = [\n//     ()=>startReact(),\n// ]\nrocet.render(function () {\n    return (0,_rocet_core_integration__WEBPACK_IMPORTED_MODULE_1__.integ)(\"div\", { className: 'App' },\n        (0,_rocet_core_integration__WEBPACK_IMPORTED_MODULE_1__.integ)(\"h1\", null, \"\\u0421\\u0442\\u0430\\u0440\\u0442 \\u0440\\u0435\\u0430\\u043A\\u0442\"));\n});\n(0,_router_api__WEBPACK_IMPORTED_MODULE_3__.startReact)();\n\n\n//# sourceURL=webpack:///./main.tsx?");

/***/ }),

/***/ "./page/page.tsx":
/*!***********************!*\
  !*** ./page/page.tsx ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   Home: () => (/* binding */ Home)\n/* harmony export */ });\n/* harmony import */ var _rocet_core_integration__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../rocet/core/integration */ \"./rocet/core/integration.ts\");\n/* harmony import */ var _rocet_core_rocet__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../rocet/core/rocet */ \"./rocet/core/rocet.ts\");\n\n\nfunction Home(data) {\n    var context = new _rocet_core_rocet__WEBPACK_IMPORTED_MODULE_1__.Rocet('App');\n    console.log(data);\n    context.render(function () {\n        return (0,_rocet_core_integration__WEBPACK_IMPORTED_MODULE_0__.integ)(\"div\", { className: \"App\" },\n            (0,_rocet_core_integration__WEBPACK_IMPORTED_MODULE_0__.integ)(\"h1\", null, \"Home\"));\n    });\n}\n\n\n//# sourceURL=webpack:///./page/page.tsx?");

/***/ }),

/***/ "./page/pages.tsx":
/*!************************!*\
  !*** ./page/pages.tsx ***!
  \************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   Page: () => (/* binding */ Page)\n/* harmony export */ });\n/* harmony import */ var _rocet_core_integration__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../rocet/core/integration */ \"./rocet/core/integration.ts\");\n/* harmony import */ var _rocet_core_rocet__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../rocet/core/rocet */ \"./rocet/core/rocet.ts\");\n\n\nfunction Page() {\n    var context = new _rocet_core_rocet__WEBPACK_IMPORTED_MODULE_1__.Rocet('App');\n    context.render(function () {\n        return (0,_rocet_core_integration__WEBPACK_IMPORTED_MODULE_0__.integ)(\"div\", { className: \"App\" },\n            (0,_rocet_core_integration__WEBPACK_IMPORTED_MODULE_0__.integ)(\"a\", { href: './home' }, \"Home\"),\n            (0,_rocet_core_integration__WEBPACK_IMPORTED_MODULE_0__.integ)(\"h1\", null, \"Page\"));\n    });\n}\n\n\n//# sourceURL=webpack:///./page/pages.tsx?");

/***/ }),

/***/ "./rocet/config.rocet.ts":
/*!*******************************!*\
  !*** ./rocet/config.rocet.ts ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   EventChange: () => (/* binding */ EventChange)\n/* harmony export */ });\nvar EventChange = {\n    tagElement: [\"select\", \"input\", \"textarea\"],\n    event: [\"onchange\", \"onkeydown\"]\n};\n\n\n//# sourceURL=webpack:///./rocet/config.rocet.ts?");

/***/ }),

/***/ "./rocet/core/attribute.ts":
/*!*********************************!*\
  !*** ./rocet/core/attribute.ts ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   default_atribute: () => (/* binding */ default_atribute),\n/* harmony export */   react_default_atribute: () => (/* binding */ react_default_atribute),\n/* harmony export */   removeAttribute: () => (/* binding */ removeAttribute),\n/* harmony export */   setAttributeElement: () => (/* binding */ setAttributeElement)\n/* harmony export */ });\n/* harmony import */ var _string__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./string */ \"./rocet/core/string.ts\");\n\nvar exception = {\n    className: 'class',\n    class: 'class',\n    name: 'name',\n    selected: 'selected',\n    src: 'src',\n    for: 'for',\n    style: 'style',\n    maxlength: 'maxlength',\n    minlength: 'minlength',\n    rows: 'rows',\n    cols: 'cols',\n    draggable: 'draggable',\n    data: 'data',\n    id: 'id',\n    href: 'href',\n    value: \"value\"\n};\nvar universal = {\n    value: \"value\"\n};\nfunction setAttributeElement(Element, props, NameAttribute) {\n    try {\n        if (exception[NameAttribute]) {\n            if (NameAttribute == 'style') {\n                var style = JSON.stringify(props[NameAttribute]);\n                style = (0,_string__WEBPACK_IMPORTED_MODULE_0__.replaceAll)(['\"', '{'], '', style);\n                style = (0,_string__WEBPACK_IMPORTED_MODULE_0__.replaceAll)('}', ';', style);\n                props[NameAttribute] = (0,_string__WEBPACK_IMPORTED_MODULE_0__.replaceAll)(',', '; ', style);\n            }\n            if (!Element.hasAttribute(NameAttribute) || Element.getAttribute(NameAttribute) != props[NameAttribute]) {\n                Element.setAttribute(exception[NameAttribute], props[NameAttribute]);\n                if (universal[NameAttribute])\n                    Element[NameAttribute] = props[NameAttribute];\n            }\n        }\n        else {\n            var attr = NameAttribute;\n            if (react_default_atribute[NameAttribute])\n                NameAttribute = react_default_atribute[NameAttribute];\n            if (Element[NameAttribute] != props[attr])\n                Element[NameAttribute] = props[attr];\n        }\n    }\n    catch (err) {\n        console.error(\"Error: It was not possible to assign the attribute \".concat(NameAttribute, \" to the element \").concat(Element.tagName, \" : \").concat(err));\n    }\n}\nfunction removeAttribute(Element, NameAttribute) {\n    try {\n        // if(NameAttribute == 'name') Rocet.DeleteGlobalVALUE(NameAttribute)\n        if (exception[NameAttribute]) {\n            Element.removeAttribute(Element);\n        }\n        else {\n            if (react_default_atribute[NameAttribute])\n                NameAttribute = react_default_atribute[NameAttribute];\n            Element[NameAttribute] = default_atribute[NameAttribute];\n        }\n    }\n    catch (err) {\n        console.error(\"Error: It was not possible to assign the attribute \".concat(NameAttribute, \" to the element \").concat(Element.tagName, \" : \").concat(err));\n    }\n}\nvar react_default_atribute = {\n    onClick: 'onclick',\n    onChange: 'onchange'\n};\nvar default_atribute = {\n    onabort: null,\n    onanimationend: null,\n    onanimationiteration: null,\n    onanimationstart: null,\n    onauxclick: null,\n    onbeforecopy: null,\n    onbeforecut: null,\n    onbeforeinput: null,\n    onbeforematch: null,\n    onbeforepaste: null,\n    onbeforetoggle: null,\n    onbeforexrselect: null,\n    onblur: null,\n    oncancel: null,\n    oncanplay: null,\n    oncanplaythrough: null,\n    onchange: null,\n    onclick: null,\n    onclose: null,\n    oncontentvisibilityautostatechange: null,\n    oncontextlost: null,\n    oncontextmenu: null,\n    oncontextrestored: null,\n    oncopy: null,\n    oncuechange: null,\n    oncut: null,\n    ondblclick: null,\n    ondrag: null,\n    ondragend: null,\n    ondragenter: null,\n    ondragleave: null,\n    ondragover: null,\n    ondragstart: null,\n    ondrop: null,\n    ondurationchange: null,\n    onemptied: null,\n    onended: null,\n    onerror: null,\n    onfocus: null,\n    onformdata: null,\n    onfullscreenchange: null,\n    onfullscreenerror: null,\n    ongotpointercapture: null,\n    oninput: null,\n    oninvalid: null,\n    onkeydown: null,\n    onkeypress: null,\n    onkeyup: null,\n    onload: null,\n    onloadeddata: null,\n    onloadedmetadata: null,\n    onloadstart: null,\n    onlostpointercapture: null,\n    onmousedown: null,\n    onmouseenter: null,\n    onmouseleave: null,\n    onmousemove: null,\n    onmouseout: null,\n    onmouseover: null,\n    onmouseup: null,\n    onmousewheel: null,\n    onpaste: null,\n    onpause: null,\n    onplay: null,\n    onplaying: null,\n    onpointercancel: null,\n    onpointerdown: null,\n    onpointerenter: null,\n    onpointerleave: null,\n    onpointermove: null,\n    onpointerout: null,\n    onpointerover: null,\n    onpointerrawupdate: null,\n    onpointerup: null,\n    onprogress: null,\n    onratechange: null,\n    onreset: null,\n    onresize: null,\n    onscroll: null,\n    onscrollend: null,\n    onsearch: null,\n    onsecuritypolicyviolation: null,\n    onseeked: null,\n    onseeking: null,\n    onselect: null,\n    onselectionchange: null,\n    onselectstart: null,\n    onslotchange: null,\n    onstalled: null,\n    onsubmit: null,\n    onsuspend: null,\n    ontimeupdate: null,\n    ontoggle: null,\n    ontransitioncancel: null,\n    ontransitionend: null,\n    ontransitionrun: null,\n    ontransitionstart: null,\n    onvolumechange: null,\n    onwaiting: null,\n    onwebkitanimationend: null,\n    onwebkitanimationiteration: null,\n    onwebkitanimationstart: null,\n    onwebkitfullscreenchange: null,\n    onwebkitfullscreenerror: null,\n    onwebkittransitionend: null,\n    onwheel: null,\n    isConnected: true,\n    isContentEditable: false,\n    hidden: false,\n    inert: false,\n    spellcheck: true,\n    value: \"\"\n};\n\n\n//# sourceURL=webpack:///./rocet/core/attribute.ts?");

/***/ }),

/***/ "./rocet/core/integration.ts":
/*!***********************************!*\
  !*** ./rocet/core/integration.ts ***!
  \***********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   integ: () => (/* binding */ integ)\n/* harmony export */ });\n/* harmony import */ var _rocet_virtual_node__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./rocet_virtual_node */ \"./rocet/core/rocet_virtual_node.ts\");\nvar __spreadArray = (undefined && undefined.__spreadArray) || function (to, from, pack) {\n    if (pack || arguments.length === 2) for (var i = 0, l = from.length, ar; i < l; i++) {\n        if (ar || !(i in from)) {\n            if (!ar) ar = Array.prototype.slice.call(from, 0, i);\n            ar[i] = from[i];\n        }\n    }\n    return to.concat(ar || Array.prototype.slice.call(from));\n};\n\n//** интеграция в реакт ))\nfunction integ(tag, props) {\n    var children = [];\n    for (var _i = 2; _i < arguments.length; _i++) {\n        children[_i - 2] = arguments[_i];\n    }\n    // Проверка на то что попадает в массив \n    var rChildren = children.filter(function (rocet, i) {\n        if (i == 0 && typeof rocet == 'string')\n            return true;\n        if (rocet === null || rocet === void 0 ? void 0 : rocet.tag)\n            return true;\n    });\n    if (typeof tag == 'function') {\n        if (props == null)\n            return tag.apply(void 0, rChildren);\n        return tag.apply(void 0, __spreadArray([props], rChildren, false));\n    }\n    else {\n        if (typeof rChildren[0] == \"string\") {\n            return (0,_rocet_virtual_node__WEBPACK_IMPORTED_MODULE_0__.RocetNode)(tag, props, rChildren[0]);\n        }\n        return (0,_rocet_virtual_node__WEBPACK_IMPORTED_MODULE_0__.RocetNode)(tag, props, rChildren);\n    }\n}\n\n\n//# sourceURL=webpack:///./rocet/core/integration.ts?");

/***/ }),

/***/ "./rocet/core/rocet.ts":
/*!*****************************!*\
  !*** ./rocet/core/rocet.ts ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   ID: () => (/* binding */ ID),\n/* harmony export */   NAME: () => (/* binding */ NAME),\n/* harmony export */   Rocet: () => (/* binding */ Rocet),\n/* harmony export */   VALUE: () => (/* binding */ VALUE)\n/* harmony export */ });\n/* harmony import */ var _config_rocet__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../config.rocet */ \"./rocet/config.rocet.ts\");\n/* harmony import */ var _attribute__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./attribute */ \"./rocet/core/attribute.ts\");\n\n\nvar NAME = {};\nvar ID = {};\nvar VALUE = {};\nvar Rocet = /** @class */ (function () {\n    function Rocet(id) {\n        if (id === void 0) { id = \"body\"; }\n        this.Element = this.open(id);\n        this.RocetVirtualNode;\n        this.id = id;\n        this.ExecAfter = [];\n    }\n    Rocet.prototype.open = function (id) {\n        var element = document.querySelector(id);\n        if (!element)\n            element = document.querySelector(\"#\" + id);\n        if (!element)\n            element = document.querySelector(\".\" + id);\n        if (!element) {\n            console.error(\"Error: Element not found Rocet assembly not possible\");\n        }\n        else {\n            return element;\n        }\n    };\n    Rocet.prototype.render = function (rocet) {\n        if (rocet === void 0) { rocet = undefined; }\n        if (this.Element == undefined)\n            return console.error(\"Error: Element not found Rocet assembly not possible\");\n        if (typeof rocet == 'function')\n            this.RocetVirtualFunction = rocet;\n        var NewVirtualNode = this.RocetVirtualFunction();\n        if (!this.RocetVirtualNode) {\n            if (this.Element.children.length != 0)\n                this.Element.innerHTML = '';\n            this.Element.replaceWith(this.create(NewVirtualNode));\n            this.Element = this.open(this.id);\n        }\n        else {\n            this.compare(this.Element, NewVirtualNode, this.RocetVirtualNode);\n        }\n        this.RocetVirtualNode = NewVirtualNode; // Должна присваиваться После\n        this.execure();\n    };\n    Rocet.prototype.compare = function (elem, NewRVN, RVN) {\n        var _this = this;\n        NewRVN.elem = elem;\n        if (elem.localName != NewRVN.tag) {\n            elem.replaceWith(this.create(NewRVN));\n        }\n        else {\n            var lenNew_1 = Object.keys(NewRVN.props);\n            var lenOld = Object.keys(RVN.props);\n            lenNew_1.forEach(function (key) { (0,_attribute__WEBPACK_IMPORTED_MODULE_1__.setAttributeElement)(elem, NewRVN.props, key); });\n            lenOld.forEach(function (key) { if (!lenNew_1.includes(key))\n                (0,_attribute__WEBPACK_IMPORTED_MODULE_1__.removeAttribute)(elem, key); });\n            if (NewRVN.children.length >= RVN.children.length) {\n                NewRVN.children.forEach(function (ch, i) {\n                    if (RVN.children[i]) {\n                        if (RVN.children[i].elem) {\n                            _this.compare(RVN.children[i].elem, NewRVN.children[i], RVN.children[i]);\n                        }\n                        else {\n                            console.error(\"Error: No Element:\".concat(RVN.children[i].elem));\n                        }\n                    }\n                    else {\n                        elem.insertAdjacentElement(\"beforeend\", _this.create(ch));\n                    }\n                });\n            }\n            if (NewRVN.children.length < RVN.children.length) {\n                RVN.children.forEach(function (ch, i) {\n                    if (NewRVN.children[i]) {\n                        _this.compare(RVN.children[i].elem, NewRVN.children[i], RVN.children[i]);\n                    }\n                    else {\n                        RVN.children[i].elem.remove();\n                    }\n                });\n            }\n        }\n    };\n    Rocet.prototype.create = function (rocet) {\n        var _this = this;\n        try {\n            var NewCreateElement_1 = document.createElement(rocet.tag);\n            if (Object.keys(rocet.props).length != 0) {\n                for (var key in rocet.props)\n                    (0,_attribute__WEBPACK_IMPORTED_MODULE_1__.setAttributeElement)(NewCreateElement_1, rocet.props, key);\n                if (_config_rocet__WEBPACK_IMPORTED_MODULE_0__.EventChange.tagElement.includes(rocet.tag))\n                    this.events(rocet.props, NewCreateElement_1);\n                if (NewCreateElement_1.hasAttribute(\"name\"))\n                    NAME[rocet.props.name] = NewCreateElement_1;\n                if (NewCreateElement_1.hasAttribute(\"name\"))\n                    ID[rocet.props.id] = NewCreateElement_1;\n            }\n            if (rocet.children.length != 0) {\n                rocet.children.forEach(function (RocetElement) {\n                    if (!(RocetElement === null || RocetElement === void 0 ? void 0 : RocetElement.tag)) {\n                        NewCreateElement_1.innerHTML += RocetElement;\n                    }\n                    else {\n                        NewCreateElement_1.append(_this.create(RocetElement));\n                    }\n                });\n            }\n            rocet.elem = NewCreateElement_1;\n            return NewCreateElement_1;\n        }\n        catch (err) {\n            console.error(\"Error: Rocet.create => {tag:\".concat(rocet.tag, \", props:\").concat(rocet.props, \", children:[\").concat(rocet.children, \"]}\") + err);\n        }\n    };\n    Rocet.prototype.events = function (props, element) {\n        try {\n            _config_rocet__WEBPACK_IMPORTED_MODULE_0__.EventChange.event.forEach(function (event) {\n                element[event] = function (ev) {\n                    VALUE[props.name] = element.value;\n                    if (props[event])\n                        props[event](ev);\n                };\n            });\n        }\n        catch (err) {\n            console.error(\"Error: Rocet.events => \" + err);\n        }\n    };\n    Rocet.DeleteGlobalVALUE = function (name) {\n        delete VALUE[name];\n        delete NAME[name];\n    };\n    Rocet.prototype.State = function (WatchObject) {\n        var DOM = this;\n        if (WatchObject) {\n            return new Proxy(WatchObject, {\n                set: function (target, props, newValue) {\n                    target[props] = newValue;\n                    DOM.render();\n                    return true;\n                }\n            });\n        }\n        else {\n            DOM.render();\n        }\n        console.log(DOM);\n    };\n    Rocet.prototype.execure = function () {\n        if (this.ExecAfter.length != 0) {\n            this.ExecAfter.forEach(function (func) {\n                func();\n            });\n        }\n    };\n    return Rocet;\n}());\n\n\n\n//# sourceURL=webpack:///./rocet/core/rocet.ts?");

/***/ }),

/***/ "./rocet/core/rocet_virtual_node.ts":
/*!******************************************!*\
  !*** ./rocet/core/rocet_virtual_node.ts ***!
  \******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   RocetNode: () => (/* binding */ RocetNode)\n/* harmony export */ });\nfunction RocetNode(tag, props, children) {\n    if (props === void 0) { props = undefined; }\n    if (children === void 0) { children = undefined; }\n    var rProps = {};\n    var rChildren = [];\n    if (typeof props == 'string') {\n        if (props.indexOf('</') >= 0 && props.indexOf('>') >= 0) {\n            rProps.innerHTML = props;\n        }\n        else {\n            rProps.textContent = props;\n        }\n    }\n    if (typeof props == 'object' && props != ( false || undefined)) {\n        if (Array.isArray(props)) {\n            rChildren = props;\n        }\n        else {\n            props.tag ? rChildren.push(props) : rProps = props;\n        }\n    }\n    if (typeof children == 'string') {\n        if (children.indexOf('<') >= 0 && children.indexOf('</') >= 0) {\n            rProps.innerHTML ? rProps.innerHTML = rProps.innerHTML + children : rProps.innerHTML = children;\n        }\n        else {\n            rProps.textContent ? rProps.textContent = rProps.textContent + children : rProps.textContent = children;\n        }\n    }\n    if (!Array.isArray(children) && typeof children == 'object' && children.tag) {\n        rChildren.push({ tag: children.tag, props: children.props, children: children.children });\n    }\n    if (Array.isArray(children))\n        rChildren.push.apply(rChildren, children);\n    return { tag: tag, props: rProps, children: rChildren };\n}\n\n\n//# sourceURL=webpack:///./rocet/core/rocet_virtual_node.ts?");

/***/ }),

/***/ "./rocet/core/string.ts":
/*!******************************!*\
  !*** ./rocet/core/string.ts ***!
  \******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   IsJsonString: () => (/* binding */ IsJsonString),\n/* harmony export */   family_min: () => (/* binding */ family_min),\n/* harmony export */   replaceAll: () => (/* binding */ replaceAll)\n/* harmony export */ });\nfunction replaceAll(srtSearch, sumbol, str) {\n    if (typeof srtSearch == 'string') {\n        var len = str.split(srtSearch).length;\n        var strResult = str;\n        if (len != 0) {\n            for (var i = 1; i < len; i++) {\n                strResult = strResult.replace(srtSearch, sumbol);\n            }\n        }\n        return strResult;\n    }\n    else {\n        return replaceArrayAll(srtSearch, sumbol, str);\n    }\n}\nfunction replaceArrayAll(array, sumbol, string) {\n    var strResult = string;\n    for (var i = 0; i < array.length; i++) {\n        var len = string.split(array[i]).length;\n        if (len != 0) {\n            for (var t = 1; t < len; t++) {\n                strResult = strResult.replace(array[i], sumbol);\n            }\n        }\n    }\n    return strResult;\n}\n// Проверка на файл JSON\nfunction IsJsonString(str) {\n    try {\n        JSON.parse(str);\n    }\n    catch (e) {\n        return false;\n    }\n    return true;\n}\nfunction family_min(str) {\n    var fam = str.split(' ');\n    var returnStr = fam[0];\n    if (fam[1])\n        returnStr += \" \".concat(fam[1].split('')[0], \".\");\n    if (fam[2])\n        returnStr += \" \".concat(fam[2].split('')[0], \".\");\n    return returnStr;\n}\n\n\n//# sourceURL=webpack:///./rocet/core/string.ts?");

/***/ }),

/***/ "./router/api.tsx":
/*!************************!*\
  !*** ./router/api.tsx ***!
  \************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   GET: () => (/* binding */ GET),\n/* harmony export */   PAGES: () => (/* binding */ PAGES),\n/* harmony export */   Router: () => (/* binding */ Router),\n/* harmony export */   handleLocation: () => (/* binding */ handleLocation),\n/* harmony export */   startReact: () => (/* binding */ startReact),\n/* harmony export */   transition: () => (/* binding */ transition)\n/* harmony export */ });\n/* harmony import */ var _page_page__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../page/page */ \"./page/page.tsx\");\n/* harmony import */ var _page_pages__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../page/pages */ \"./page/pages.tsx\");\n\n\nvar PAGES = {\n    'homs': _page_page__WEBPACK_IMPORTED_MODULE_0__.Home,\n    'page': _page_pages__WEBPACK_IMPORTED_MODULE_1__.Page\n};\nfunction startReact() {\n    var page = document.querySelector('meta[name=react]').getAttribute('data');\n    if (PAGES[page]) {\n        PAGES[page](PageData);\n    }\n    else {\n        console.error(\"Error key: \".concat(page, \" pages \"));\n    }\n}\nfunction Router(url) {\n    GET(url, null, true).onload = function () {\n        var page = this.getResponseHeader(\"React\");\n        if (PAGES[page]) {\n            PAGES[page](JSON.parse(this.responseText));\n        }\n        else {\n            console.error(\"Error key: \".concat(page, \" pages \"));\n        }\n    };\n}\nfunction GET(url, body, cache) {\n    if (body === void 0) { body = null; }\n    if (cache === void 0) { cache = false; }\n    var response = '';\n    if (body) {\n        response = '?';\n        Object.keys(body).forEach(function (key) {\n            response += key + \"=\" + body[key];\n        });\n    }\n    var request = new XMLHttpRequest();\n    request.open('GET', url + response, true);\n    if (cache == false)\n        request.setRequestHeader(\"Cache-Control\", \"no-cache, no-store, max-age=0\");\n    request.setRequestHeader(\"Content-type\", \"application/json\");\n    request.setRequestHeader(\"React\", \"inertia\");\n    request.send();\n    return request;\n}\ndocument.addEventListener('click', function (e) {\n    if (e.target.tagName == 'A') {\n        transition(e.target.href);\n        e.preventDefault();\n    }\n});\nfunction handleLocation() {\n    Router(window.location.href);\n}\nfunction transition(path) {\n    window.history.pushState({}, '', path);\n    handleLocation();\n}\n// handleLocation()\nwindow.onpopstate = handleLocation;\n\n\n//# sourceURL=webpack:///./router/api.tsx?");

/***/ }),

/***/ "./images/obi.png":
/*!************************!*\
  !*** ./images/obi.png ***!
  \************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

eval("module.exports = __webpack_require__.p + \"view/images/obi.png\";\n\n//# sourceURL=webpack:///./images/obi.png?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/global */
/******/ 	(() => {
/******/ 		__webpack_require__.g = (function() {
/******/ 			if (typeof globalThis === 'object') return globalThis;
/******/ 			try {
/******/ 				return this || new Function('return this')();
/******/ 			} catch (e) {
/******/ 				if (typeof window === 'object') return window;
/******/ 			}
/******/ 		})();
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/publicPath */
/******/ 	(() => {
/******/ 		var scriptUrl;
/******/ 		if (__webpack_require__.g.importScripts) scriptUrl = __webpack_require__.g.location + "";
/******/ 		var document = __webpack_require__.g.document;
/******/ 		if (!scriptUrl && document) {
/******/ 			if (document.currentScript)
/******/ 				scriptUrl = document.currentScript.src;
/******/ 			if (!scriptUrl) {
/******/ 				var scripts = document.getElementsByTagName("script");
/******/ 				if(scripts.length) {
/******/ 					var i = scripts.length - 1;
/******/ 					while (i > -1 && !scriptUrl) scriptUrl = scripts[i--].src;
/******/ 				}
/******/ 			}
/******/ 		}
/******/ 		// When supporting browsers where an automatic publicPath is not supported you must specify an output.publicPath manually via configuration
/******/ 		// or pass an empty string ("") and set the __webpack_public_path__ variable from your code to use your own logic.
/******/ 		if (!scriptUrl) throw new Error("Automatic publicPath is not supported in this browser");
/******/ 		scriptUrl = scriptUrl.replace(/#.*$/, "").replace(/\?.*$/, "").replace(/\/[^\/]+$/, "/");
/******/ 		__webpack_require__.p = scriptUrl + "../../";
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./main.tsx");
/******/ 	
/******/ })()
;