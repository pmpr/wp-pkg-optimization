/*! For license information please see admin.748T4mnS1.js.LICENSE.txt */
(()=>{"use strict";var e={608:(e,t,o)=>{o.r(t)}},t={};function o(a){var n=t[a];if(void 0!==n)return n.exports;var c=t[a]={exports:{}};return e[a](c,c.exports,o),c.exports}o.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return o.d(t,{a:t}),t},o.d=(e,t)=>{for(var a in t)o.o(t,a)&&!o.o(e,a)&&Object.defineProperty(e,a,{enumerable:!0,get:t[a]})},o.g=function(){if("object"==typeof globalThis)return globalThis;try{return this||new Function("return this")()}catch(e){if("object"==typeof window)return window}}(),o.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),o.r=e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},(()=>{const e=jQuery;var t=o.n(e);const a=()=>{PMPRModal.update({refresh:!0})};t()(document).ready((function(){const e={sendRequest:(e,t={},o=!1)=>{e=PMPRUtil.getSettingByPath(`purge.ajax.${e}`),PMPRUtil.isEmpty(e)||PMPRRequest.post(e,t).addNonce().setBefore((()=>{PMPRModal.close()})).setSuccess((()=>{o&&a()})).send()},purgeCache:()=>{e.sendRequest("purge_cache")},purgePostCache:t=>{PMPRUtil.isEmpty(t)||e.sendRequest("purge_post_cache",t,!0)}};let o=t()("#opt_purge_opcache");PMPRUtil.isEmpty(o)||o.on("click",(t=>{t.preventDefault(),e.sendRequest("purge_opcache")})),t()(document).on("click",".opt-purge-cache",(t=>{t.preventDefault(),e.purgeCache()})),t()(document).on("click",".opt-purge-post-cache",(o=>{o.preventDefault();let a=t()(o.target);if(!PMPRUtil.isEmpty(a)){let t=a.data("page");t=PMPRUtil.isEmpty(t)?{post:a.data("post")}:{page:t},e.purgePostCache(t)}}))})),t()(document).ready((function(){function e(e,t={}){e=PMPRUtil.getSettingByPath(`preloader.ajax.${e}`),PMPRRequest.post(e,t).setBefore((()=>{PMPRModal.close()})).addNonce().send()}t()(document).on("click",".opt-start-page-preloader",(o=>{o.preventDefault();let a=t()(o.target);if(!PMPRUtil.isEmpty(a)){e("start_for_page",{page:a.data("page")})}})),t()(document).on("click",".opt-unlock-preloader",(t=>{t.preventDefault(),e("unlock")})),t()(document).on("click",".opt-start-preloader",(t=>{t.preventDefault(),e("start")}))})),t()(document).ready((function(){const e={sendRequest:(e,t={})=>{e=PMPRUtil.getSettingByPath(`cloudflare.ajax.${e}`),PMPRUtil.isEmpty(e)||PMPRRequest.post(e,t).setBefore((()=>{PMPRModal.close()})).addNonce().send()},changeDevMode:t=>{PMPRUtil.isEmpty(t)||(e.sendRequest("change_dev_mode",{dev_mode:t}),a())}};t()(document).on("click",".disable-cloudflare-cache",(t=>{t.preventDefault(),e.sendRequest("disable_page_cache"),a()})),t()(document).on("click",".enable-cloudflare-cache",(t=>{t.preventDefault(),e.sendRequest("enable_page_cache"),a()})),t()(document).on("click",".change-cloudflare-mode",(o=>{o.preventDefault();let a=t()(o.target).data("dev-mode");PMPRUtil.isEmpty(a)||e.changeDevMode(a)}))})),o(608)})()})();