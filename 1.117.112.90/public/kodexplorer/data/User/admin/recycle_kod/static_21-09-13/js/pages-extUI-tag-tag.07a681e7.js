(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["pages-extUI-tag-tag"],{"0b29":function(t,e,a){var i=a("24fb");e=i(!1),e.push([t.i,'@charset "UTF-8";\n/**\n * 这里是uni-app内置的常用样式变量\n *\n * uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量\n * 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App\n *\n */\n/**\n * 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能\n *\n * 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件\n */\n/* 颜色变量 */\n/* 行为相关颜色 */\n/* 文字基本颜色 */\n/* 背景颜色 */\n/* 边框颜色 */\n/* 尺寸变量 */\n/* 文字尺寸 */\n/* 图片尺寸 */\n/* Border Radius */\n/* 水平间距 */\n/* 垂直间距 */\n/* 透明度 */\n/* 文章场景相关 */.example-body[data-v-cfcd146c]{display:flex;flex-direction:row;justify-content:flex-start;align-items:flex-end;flex-wrap:wrap}.tag-view[data-v-cfcd146c]{margin-right:10px}',""]),t.exports=e},"17f5":function(t,e,a){"use strict";var i=a("9ae7"),n=a.n(i);n.a},"683b":function(t,e,a){"use strict";a("c975"),a("a434"),Object.defineProperty(e,"__esModule",{value:!0}),e.default=void 0;var i={components:{},data:function(){return{type:"default",inverted:!1}},methods:{setType:function(){var t=["default","primary","success","warning","error"],e=t.indexOf(this.type);t.splice(e,1);var a=Math.floor(4*Math.random());this.type=t[a]},setInverted:function(){this.inverted=!this.inverted}}};e.default=i},"842d":function(t,e,a){"use strict";var i;a.d(e,"b",(function(){return n})),a.d(e,"c",(function(){return r})),a.d(e,"a",(function(){return i}));var n=function(){var t=this,e=t.$createElement,a=t._self._c||e;return t.text?a("v-uni-text",{staticClass:"uni-tag",class:t.classes,style:t.customStyle,on:{click:function(e){arguments[0]=e=t.$handleEvent(e),t.onClick.apply(void 0,arguments)}}},[t._v(t._s(t.text))]):t._e()},r=[]},"877b":function(t,e,a){"use strict";var i=a("f5f6"),n=a.n(i);n.a},"8d31":function(t,e,a){"use strict";a.r(e);var i=a("e82b"),n=a.n(i);for(var r in i)"default"!==r&&function(t){a.d(e,t,(function(){return i[t]}))}(r);e["default"]=n.a},9178:function(t,e,a){"use strict";a.r(e);var i=a("683b"),n=a.n(i);for(var r in i)"default"!==r&&function(t){a.d(e,t,(function(){return i[t]}))}(r);e["default"]=n.a},9442:function(t,e,a){"use strict";a.r(e);var i=a("842d"),n=a("8d31");for(var r in n)"default"!==r&&function(t){a.d(e,t,(function(){return n[t]}))}(r);a("877b");var s,c=a("f0c5"),u=Object(c["a"])(n["default"],i["b"],i["c"],!1,null,"768ea8c6",null,!1,i["a"],s);e["default"]=u.exports},"9ae7":function(t,e,a){var i=a("0b29");"string"===typeof i&&(i=[[t.i,i,""]]),i.locals&&(t.exports=i.locals);var n=a("4f06").default;n("349ca132",i,!0,{sourceMap:!1,shadowMode:!1})},a520:function(t,e,a){"use strict";a.r(e);var i=a("b668"),n=a("9178");for(var r in n)"default"!==r&&function(t){a.d(e,t,(function(){return n[t]}))}(r);a("17f5");var s,c=a("f0c5"),u=Object(c["a"])(n["default"],i["b"],i["c"],!1,null,"cfcd146c",null,!1,i["a"],s);e["default"]=u.exports},b668:function(t,e,a){"use strict";a.d(e,"b",(function(){return n})),a.d(e,"c",(function(){return r})),a.d(e,"a",(function(){return i}));var i={uniCard:a("9948").default,uniSection:a("041f").default,uniTag:a("9442").default},n=function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("v-uni-view",{staticClass:"container"},[a("uni-card",{attrs:{"is-full":!0}},[a("v-uni-text",{staticClass:"uni-h6"},[t._v("标签组件多用于商品分类、重点内容显示等场景。")])],1),a("uni-section",{attrs:{title:"实心标签",type:"line",padding:!0}},[a("v-uni-view",{staticClass:"example-body"},[a("v-uni-view",{staticClass:"tag-view"},[a("uni-tag",{attrs:{text:"标签",type:"primary"}})],1),a("v-uni-view",{staticClass:"tag-view"},[a("uni-tag",{attrs:{text:"标签",type:"success"}})],1),a("v-uni-view",{staticClass:"tag-view"},[a("uni-tag",{attrs:{text:"标签",type:"warning"}})],1),a("v-uni-view",{staticClass:"tag-view"},[a("uni-tag",{attrs:{text:"标签",type:"error"}})],1),a("v-uni-view",{staticClass:"tag-view"},[a("uni-tag",{attrs:{text:"标签"}})],1)],1)],1),a("uni-section",{attrs:{title:"空心标签",subTitle:"使用 inverted 属性显示空心表签",type:"line",padding:!0}},[a("v-uni-view",{staticClass:"example-body"},[a("v-uni-view",{staticClass:"tag-view"},[a("uni-tag",{attrs:{inverted:!0,text:"标签",type:"primary"}})],1),a("v-uni-view",{staticClass:"tag-view"},[a("uni-tag",{attrs:{inverted:!0,text:"标签",type:"success"}})],1),a("v-uni-view",{staticClass:"tag-view"},[a("uni-tag",{attrs:{inverted:!0,text:"标签",type:"warning"}})],1),a("v-uni-view",{staticClass:"tag-view"},[a("uni-tag",{attrs:{inverted:!0,text:"标签",type:"error"}})],1),a("v-uni-view",{staticClass:"tag-view"},[a("uni-tag",{attrs:{inverted:!0,text:"标签"}})],1)],1)],1),a("uni-section",{attrs:{title:"标签尺寸",subTitle:"使用 size 属性控制标签大小",type:"line",padding:!0}},[a("v-uni-view",{staticClass:"example-body"},[a("v-uni-view",{staticClass:"tag-view"},[a("uni-tag",{attrs:{text:"标签",type:"primary",size:"normal"}})],1),a("v-uni-view",{staticClass:"tag-view"},[a("uni-tag",{attrs:{text:"标签",type:"primary",size:"small"}})],1),a("v-uni-view",{staticClass:"tag-view"},[a("uni-tag",{attrs:{text:"标签",type:"primary",size:"mini"}})],1)],1)],1),a("uni-section",{attrs:{title:"圆角样式",subTitle:"使用 circle 属性控制标签圆角",type:"line",padding:!0}},[a("v-uni-view",{staticClass:"example-body"},[a("v-uni-view",{staticClass:"tag-view"},[a("uni-tag",{attrs:{circle:!0,text:"标签",type:"primary"}})],1),a("v-uni-view",{staticClass:"tag-view"},[a("uni-tag",{attrs:{circle:!0,text:"标签",type:"primary",size:"small"}})],1),a("v-uni-view",{staticClass:"tag-view"},[a("uni-tag",{attrs:{circle:!0,text:"标签",type:"primary",size:"mini"}})],1)],1)],1),a("uni-section",{attrs:{title:"标记样式",subTitle:"使用 mark 属性显示标记样式",type:"line",padding:!0}},[a("v-uni-view",{staticClass:"example-body"},[a("v-uni-view",{staticClass:"tag-view"},[a("uni-tag",{attrs:{mark:!0,text:"标签",type:"primary",size:"default"}})],1),a("v-uni-view",{staticClass:"tag-view"},[a("uni-tag",{attrs:{mark:!0,text:"标签",type:"primary",size:"small"}})],1),a("v-uni-view",{staticClass:"tag-view"},[a("uni-tag",{attrs:{mark:!0,text:"标签",type:"primary",size:"mini"}})],1)],1)],1),a("uni-section",{attrs:{title:"不可点击状态",subTitle:"使用 disabled 属性 显示禁用样式",type:"line",padding:!0}},[a("v-uni-view",{staticClass:"example-body"},[a("v-uni-view",{staticClass:"tag-view"},[a("uni-tag",{attrs:{disabled:!0,text:"标签",type:"primary"}})],1)],1)],1),a("uni-section",{attrs:{title:"自定义样式",subTitle:"使用 custom-style 属性自定义样式",type:"line",padding:!0}},[a("v-uni-view",{staticClass:"example-body"},[a("v-uni-view",{staticClass:"tag-view"},[a("uni-tag",{attrs:{text:"自定义标签样式","custom-style":"background-color: #4335d6; border-color: #4335d6; color: #fff;"}})],1)],1)],1),a("uni-section",{attrs:{title:"点击事件",type:"line",padding:!0}},[a("v-uni-view",{staticClass:"example-body"},[a("v-uni-view",{staticClass:"tag-view"},[a("uni-tag",{attrs:{type:t.type,text:"标签"},on:{click:function(e){arguments[0]=e=t.$handleEvent(e),t.setType.apply(void 0,arguments)}}})],1),a("v-uni-view",{staticClass:"tag-view"},[a("uni-tag",{attrs:{circle:!0,inverted:t.inverted,text:"标签",type:"primary"},on:{click:function(e){arguments[0]=e=t.$handleEvent(e),t.setInverted.apply(void 0,arguments)}}})],1)],1)],1)],1)},r=[]},e82b:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default=void 0;var i={name:"UniTag",emits:["click"],props:{type:{type:String,default:"default"},size:{type:String,default:"normal"},text:{type:String,default:""},disabled:{type:[Boolean,String],default:!1},inverted:{type:[Boolean,String],default:!1},circle:{type:[Boolean,String],default:!1},mark:{type:[Boolean,String],default:!1},customStyle:{type:String,default:""}},computed:{classes:function(){var t=this.type,e=this.disabled,a=this.inverted,i=this.circle,n=this.mark,r=this.size,s=this.isTrue,c=["uni-tag--"+t,"uni-tag--"+r,s(e)?"uni-tag--disabled":"",s(a)?"uni-tag--"+t+"--inverted":"",s(i)?"uni-tag--circle":"",s(n)?"uni-tag--mark":"",s(a)?"uni-tag--inverted uni-tag-text--"+t:"","small"===r?"uni-tag-text--small":""];return c.join(" ")}},methods:{isTrue:function(t){return!0===t||"true"===t},onClick:function(){this.isTrue(this.disabled)||this.$emit("click")}}};e.default=i},ed85:function(t,e,a){var i=a("24fb");e=i(!1),e.push([t.i,'@charset "UTF-8";\n/**\n * 这里是uni-app内置的常用样式变量\n *\n * uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量\n * 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App\n *\n */\n/**\n * 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能\n *\n * 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件\n */\n/* 颜色变量 */\n/* 行为相关颜色 */\n/* 文字基本颜色 */\n/* 背景颜色 */\n/* 边框颜色 */\n/* 尺寸变量 */\n/* 文字尺寸 */\n/* 图片尺寸 */\n/* Border Radius */\n/* 水平间距 */\n/* 垂直间距 */\n/* 透明度 */\n/* 文章场景相关 */.uni-tag[data-v-768ea8c6]{line-height:14px;font-size:12px;font-weight:200;padding:4px 7px;color:#fff;border-radius:3px;background-color:#8f939c;border-width:%?1?%;border-style:solid;border-color:#8f939c;cursor:pointer}.uni-tag--default[data-v-768ea8c6]{font-size:12px}.uni-tag--default--inverted[data-v-768ea8c6]{color:#8f939c;border-color:#8f939c}.uni-tag--small[data-v-768ea8c6]{padding:2px 5px;font-size:12px;border-radius:2px}.uni-tag--mini[data-v-768ea8c6]{padding:1px 3px;font-size:12px;border-radius:2px}.uni-tag--primary[data-v-768ea8c6]{background-color:#2979ff;border-color:#2979ff;color:#fff}.uni-tag--success[data-v-768ea8c6]{color:#fff;background-color:#18bc37;border-color:#18bc37}.uni-tag--warning[data-v-768ea8c6]{color:#fff;background-color:#f3a73f;border-color:#f3a73f}.uni-tag--error[data-v-768ea8c6]{color:#fff;background-color:#e43d33;border-color:#e43d33}.uni-tag--primary--inverted[data-v-768ea8c6]{color:#2979ff;border-color:#2979ff}.uni-tag--success--inverted[data-v-768ea8c6]{color:#18bc37;border-color:#18bc37}.uni-tag--warning--inverted[data-v-768ea8c6]{color:#f3a73f;border-color:#f3a73f}.uni-tag--error--inverted[data-v-768ea8c6]{color:#e43d33;border-color:#e43d33}.uni-tag--inverted[data-v-768ea8c6]{background-color:#fff}.uni-tag--circle[data-v-768ea8c6]{border-radius:15px!important}.uni-tag--mark[data-v-768ea8c6]{border-top-left-radius:0!important;border-bottom-left-radius:0!important;border-top-right-radius:15px!important;border-bottom-right-radius:15px!important}.uni-tag--disabled[data-v-768ea8c6]{opacity:.5;cursor:not-allowed}.uni-tag-text[data-v-768ea8c6]{color:#fff;font-size:14px}.uni-tag-text--primary[data-v-768ea8c6]{color:#2979ff}.uni-tag-text--success[data-v-768ea8c6]{color:#18bc37}.uni-tag-text--warning[data-v-768ea8c6]{color:#f3a73f}.uni-tag-text--error[data-v-768ea8c6]{color:#e43d33}.uni-tag-text--small[data-v-768ea8c6]{font-size:12px}',""]),t.exports=e},f5f6:function(t,e,a){var i=a("ed85");"string"===typeof i&&(i=[[t.i,i,""]]),i.locals&&(t.exports=i.locals);var n=a("4f06").default;n("0ec837de",i,!0,{sourceMap:!1,shadowMode:!1})}}]);