(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["pages-API-background-audio-background-audio"],{"10d1":function(t,e,n){"use strict";var i,a=n("da84"),r=n("e2cc"),o=n("f183"),u=n("6d61"),s=n("acac"),c=n("861d"),f=n("69f3").enforce,d=n("7f9a"),l=!a.ActiveXObject&&"ActiveXObject"in a,p=Object.isExtensible,g=function(t){return function(){return t(this,arguments.length?arguments[0]:void 0)}},v=t.exports=u("WeakMap",g,s);if(d&&l){i=s.getConstructor(g,"WeakMap",!0),o.REQUIRED=!0;var b=v.prototype,h=b["delete"],y=b.has,m=b.get,w=b.set;r(b,{delete:function(t){if(c(t)&&!p(t)){var e=f(this);return e.frozen||(e.frozen=new i),h.call(this,t)||e.frozen["delete"](t)}return h.call(this,t)},has:function(t){if(c(t)&&!p(t)){var e=f(this);return e.frozen||(e.frozen=new i),y.call(this,t)||e.frozen.has(t)}return y.call(this,t)},get:function(t){if(c(t)&&!p(t)){var e=f(this);return e.frozen||(e.frozen=new i),y.call(this,t)?m.call(this,t):e.frozen.get(t)}return m.call(this,t)},set:function(t,e){if(c(t)&&!p(t)){var n=f(this);n.frozen||(n.frozen=new i),y.call(this,t)?w.call(this,t,e):n.frozen.set(t,e)}else w.call(this,t,e);return this}})}},1148:function(t,e,n){"use strict";n.d(e,"b",(function(){return a})),n.d(e,"c",(function(){return r})),n.d(e,"a",(function(){return i}));var i={pageHead:n("2c31").default},a=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("v-uni-view",[n("page-head",{attrs:{title:t.title}}),n("v-uni-view",{staticClass:"uni-padding-wrap"},[n("v-uni-view",{staticClass:"uni-center"},[n("v-uni-text",{staticClass:"time-big"},[t._v(t._s(t.formatedPlayTime))])],1),n("v-uni-view",{staticClass:"uni-common-mt"},[n("v-uni-slider",{staticClass:"slider",attrs:{min:"0",max:"21",step:"1",value:t.playTime},on:{change:function(e){arguments[0]=e=t.$handleEvent(e),t.seek.apply(void 0,arguments)}}})],1),n("v-uni-view",{staticClass:"play-time"},[n("v-uni-text",[t._v("00:00")]),n("v-uni-text",[t._v("00:21")])],1),n("v-uni-view",{staticClass:"uni-hello-text"},[t._v("注意：离开当前页面后背景音乐将保持播放，但退出uni-app将停止")]),n("v-uni-view",{staticClass:"page-body-buttons"},[t.playing?[n("v-uni-view",{staticClass:"page-body-button",on:{click:function(e){arguments[0]=e=t.$handleEvent(e),t.stop.apply(void 0,arguments)}}},[n("v-uni-image",{attrs:{src:"/static/stop.png"}})],1),n("v-uni-view",{staticClass:"page-body-button",on:{click:function(e){arguments[0]=e=t.$handleEvent(e),t.pause.apply(void 0,arguments)}}},[n("v-uni-image",{attrs:{src:"/static/pause.png"}})],1)]:t._e(),t.playing?t._e():[n("v-uni-view",{staticClass:"page-body-button"}),n("v-uni-view",{staticClass:"page-body-button",on:{click:function(e){arguments[0]=e=t.$handleEvent(e),t.play.apply(void 0,arguments)}}},[n("v-uni-image",{attrs:{src:"/static/play.png"}})],1)],n("v-uni-view",{staticClass:"page-body-button"})],2)],1)],1)},r=[]},5983:function(t,e,n){var i=n("24fb");e=i(!1),e.push([t.i,"uni-image[data-v-e8020ffe]{width:%?150?%;height:%?150?%}.page-body-text[data-v-e8020ffe]{padding:0 %?30?%}.page-body-wrapper[data-v-e8020ffe]{margin-top:0}.page-body-info[data-v-e8020ffe]{padding-bottom:%?50?%}.time-big[data-v-e8020ffe]{font-size:%?60?%;margin:%?20?%}.slider[data-v-e8020ffe]{width:%?630?%}.play-time[data-v-e8020ffe]{font-size:%?28?%;width:100%;padding:%?20?% 0;display:flex;justify-content:space-between;box-sizing:border-box}.page-body-buttons[data-v-e8020ffe]{display:flex;justify-content:space-around;margin-top:%?100?%}.page-body-button[data-v-e8020ffe]{width:%?250?%;text-align:center}",""]),t.exports=e},"6d61":function(t,e,n){"use strict";var i=n("23e7"),a=n("da84"),r=n("94ca"),o=n("6eeb"),u=n("f183"),s=n("2266"),c=n("19aa"),f=n("861d"),d=n("d039"),l=n("1c7e"),p=n("d44e"),g=n("7156");t.exports=function(t,e,n){var v=-1!==t.indexOf("Map"),b=-1!==t.indexOf("Weak"),h=v?"set":"add",y=a[t],m=y&&y.prototype,w=y,k={},T=function(t){var e=m[t];o(m,t,"add"==t?function(t){return e.call(this,0===t?0:t),this}:"delete"==t?function(t){return!(b&&!f(t))&&e.call(this,0===t?0:t)}:"get"==t?function(t){return b&&!f(t)?void 0:e.call(this,0===t?0:t)}:"has"==t?function(t){return!(b&&!f(t))&&e.call(this,0===t?0:t)}:function(t,n){return e.call(this,0===t?0:t,n),this})};if(r(t,"function"!=typeof y||!(b||m.forEach&&!d((function(){(new y).entries().next()})))))w=n.getConstructor(e,t,v,h),u.REQUIRED=!0;else if(r(t,!0)){var x=new w,A=x[h](b?{}:-0,1)!=x,D=d((function(){x.has(1)})),M=l((function(t){new y(t)})),E=!b&&d((function(){var t=new y,e=5;while(e--)t[h](e,e);return!t.has(-0)}));M||(w=e((function(e,n){c(e,w,t);var i=g(new y,e,w);return void 0!=n&&s(n,i[h],i,v),i})),w.prototype=m,m.constructor=w),(D||E)&&(T("delete"),T("has"),v&&T("get")),(E||A)&&T(h),b&&m.clear&&delete m.clear}return k[t]=w,i({global:!0,forced:w!=y},k),p(w,t),b||n.setStrong(w,t,v),w}},7037:function(t,e,n){function i(e){return"function"===typeof Symbol&&"symbol"===typeof Symbol.iterator?t.exports=i=function(t){return typeof t}:t.exports=i=function(t){return t&&"function"===typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},i(e)}n("a4d3"),n("e01a"),n("d28b"),n("d3b7"),n("3ca3"),n("ddb0"),t.exports=i},9383:function(t,e,n){"use strict";n.r(e);var i=n("1148"),a=n("c169");for(var r in a)"default"!==r&&function(t){n.d(e,t,(function(){return a[t]}))}(r);n("c9dc");var o,u=n("f0c5"),s=Object(u["a"])(a["default"],i["b"],i["c"],!1,null,"e8020ffe",null,!1,i["a"],o);e["default"]=s.exports},acac:function(t,e,n){"use strict";var i=n("e2cc"),a=n("f183").getWeakData,r=n("825a"),o=n("861d"),u=n("19aa"),s=n("2266"),c=n("b727"),f=n("5135"),d=n("69f3"),l=d.set,p=d.getterFor,g=c.find,v=c.findIndex,b=0,h=function(t){return t.frozen||(t.frozen=new y)},y=function(){this.entries=[]},m=function(t,e){return g(t.entries,(function(t){return t[0]===e}))};y.prototype={get:function(t){var e=m(this,t);if(e)return e[1]},has:function(t){return!!m(this,t)},set:function(t,e){var n=m(this,t);n?n[1]=e:this.entries.push([t,e])},delete:function(t){var e=v(this.entries,(function(e){return e[0]===t}));return~e&&this.entries.splice(e,1),!!~e}},t.exports={getConstructor:function(t,e,n,c){var d=t((function(t,i){u(t,d,e),l(t,{type:e,id:b++,frozen:void 0}),void 0!=i&&s(i,t[c],t,n)})),g=p(e),v=function(t,e,n){var i=g(t),o=a(r(e),!0);return!0===o?h(i).set(e,n):o[i.id]=n,t};return i(d.prototype,{delete:function(t){var e=g(this);if(!o(t))return!1;var n=a(t);return!0===n?h(e)["delete"](t):n&&f(n,e.id)&&delete n[e.id]},has:function(t){var e=g(this);if(!o(t))return!1;var n=a(t);return!0===n?h(e).has(t):n&&f(n,e.id)}}),i(d.prototype,n?{get:function(t){var e=g(this);if(o(t)){var n=a(t);return!0===n?h(e).get(t):n?n[e.id]:void 0}},set:function(t,e){return v(this,t,e)}}:{add:function(t){return v(this,t,!0)}}),d}}},bb2f:function(t,e,n){var i=n("d039");t.exports=!i((function(){return Object.isExtensible(Object.preventExtensions({}))}))},c004:function(t,e,n){var i=n("5983");"string"===typeof i&&(i=[[t.i,i,""]]),i.locals&&(t.exports=i.locals);var a=n("4f06").default;a("5a06f0b5",i,!0,{sourceMap:!1,shadowMode:!1})},c169:function(t,e,n){"use strict";n.r(e);var i=n("d998"),a=n.n(i);for(var r in i)"default"!==r&&function(t){n.d(e,t,(function(){return i[t]}))}(r);e["default"]=a.a},c9dc:function(t,e,n){"use strict";var i=n("c004"),a=n.n(i);a.a},d998:function(t,e,n){"use strict";var i=n("dbce");Object.defineProperty(e,"__esModule",{value:!0}),e.default=void 0;var a=i(n("dc68d")),r={data:function(){return{title:"backgroundAudio",bgAudioMannager:null,dataUrl:"https://vkceyugu.cdn.bspapp.com/VKCEYUGU-hello-uniapp/2cc220e0-c27a-11ea-9dfb-6da8e309e0d8.mp3",playing:!1,playTime:0,formatedPlayTime:"00:00:00"}},onLoad:function(){var t=this;this.playing=this.$backgroundAudioData.playing,this.playTime=this.$backgroundAudioData.playTime,this.formatedPlayTime=this.$backgroundAudioData.formatedPlayTime;var e=uni.getBackgroundAudioManager();e.title||(e.title="致爱丽丝"),e.singer||(e.singer="暂无"),e.coverImgUrl||(e.coverImgUrl="https://vkceyugu.cdn.bspapp.com/VKCEYUGU-dc-site/c517b410-5184-11eb-b997-9918a5dda011.jpeg"),e.onPlay((function(){console.log("开始播放"),t.$backgroundAudioData.playing=t.playing=!0})),e.onPause((function(){console.log("暂停播放"),t.$backgroundAudioData.playing=t.playing=!1})),e.onEnded((function(){t.playing=!1,t.$backgroundAudioData.playing=!1,t.$backgroundAudioData.playTime=t.playTime=0,t.$backgroundAudioData.formatedPlayTime=t.formatedPlayTime=a.formatTime(0)})),e.onTimeUpdate((function(n){Math.floor(e.currentTime)>Math.floor(t.playTime)&&(t.$backgroundAudioData.formatedPlayTime=t.formatedPlayTime=a.formatTime(Math.floor(e.currentTime))),t.$backgroundAudioData.playTime=t.playTime=e.currentTime})),this.bgAudioMannager=e},methods:{play:function(t){this.bgAudioMannager.src?(this.bgAudioMannager.seek(this.playTime),this.bgAudioMannager.play()):(this.bgAudioMannager.startTime=this.playTime,this.bgAudioMannager.src=this.dataUrl)},seek:function(t){this.bgAudioMannager.seek(t.detail.value)},pause:function(){this.bgAudioMannager.pause()},stop:function(){this.bgAudioMannager.stop(),this.$backgroundAudioData.playing=this.playing=!1,this.$backgroundAudioData.playTime=this.playTime=0,this.$backgroundAudioData.formatedPlayTime=this.formatedPlayTime=a.formatTime(0)}}};e.default=r},dbce:function(t,e,n){n("e439"),n("d3b7"),n("3ca3"),n("10d1"),n("ddb0");var i=n("7037");function a(){if("function"!==typeof WeakMap)return null;var t=new WeakMap;return a=function(){return t},t}function r(t){if(t&&t.__esModule)return t;if(null===t||"object"!==i(t)&&"function"!==typeof t)return{default:t};var e=a();if(e&&e.has(t))return e.get(t);var n={},r=Object.defineProperty&&Object.getOwnPropertyDescriptor;for(var o in t)if(Object.prototype.hasOwnProperty.call(t,o)){var u=r?Object.getOwnPropertyDescriptor(t,o):null;u&&(u.get||u.set)?Object.defineProperty(n,o,u):n[o]=t[o]}return n["default"]=t,e&&e.set(t,n),n}t.exports=r},dc68d:function(t,e,n){"use strict";function i(t){if("number"!==typeof t||t<0)return t;var e=parseInt(t/3600);t%=3600;var n=parseInt(t/60);t%=60;var i=t;return[e,n,i].map((function(t){return t=t.toString(),t[1]?t:"0"+t})).join(":")}function a(t,e){return"string"===typeof t&&"string"===typeof e&&(t=parseFloat(t),e=parseFloat(e)),t=t.toFixed(2),e=e.toFixed(2),{longitude:t.toString().split("."),latitude:e.toString().split(".")}}n("d81d"),n("d3b7"),n("acd8"),n("e25e"),n("ac1f"),n("25f0"),n("1276"),Object.defineProperty(e,"__esModule",{value:!0}),e.formatTime=i,e.formatLocation=a,e.dateUtils=void 0;var r={UNITS:{"年":315576e5,"月":26298e5,"天":864e5,"小时":36e5,"分钟":6e4,"秒":1e3},humanize:function(t){var e="";for(var n in this.UNITS)if(t>=this.UNITS[n]){e=Math.floor(t/this.UNITS[n])+n+"前";break}return e||"刚刚"},format:function(t){var e=this.parse(t),n=Date.now()-e.getTime();if(n<this.UNITS["天"])return this.humanize(n);var i=function(t){return t<10?"0"+t:t};return e.getFullYear()+"/"+i(e.getMonth()+1)+"/"+i(e.getDate())+"-"+i(e.getHours())+":"+i(e.getMinutes())},parse:function(t){var e=t.split(/[^0-9]/);return new Date(e[0],e[1]-1,e[2],e[3],e[4],e[5])}};e.dateUtils=r},f183:function(t,e,n){var i=n("d012"),a=n("861d"),r=n("5135"),o=n("9bf2").f,u=n("90e3"),s=n("bb2f"),c=u("meta"),f=0,d=Object.isExtensible||function(){return!0},l=function(t){o(t,c,{value:{objectID:"O"+ ++f,weakData:{}}})},p=function(t,e){if(!a(t))return"symbol"==typeof t?t:("string"==typeof t?"S":"P")+t;if(!r(t,c)){if(!d(t))return"F";if(!e)return"E";l(t)}return t[c].objectID},g=function(t,e){if(!r(t,c)){if(!d(t))return!0;if(!e)return!1;l(t)}return t[c].weakData},v=function(t){return s&&b.REQUIRED&&d(t)&&!r(t,c)&&l(t),t},b=t.exports={REQUIRED:!1,fastKey:p,getWeakData:g,onFreeze:v};i[c]=!0}}]);