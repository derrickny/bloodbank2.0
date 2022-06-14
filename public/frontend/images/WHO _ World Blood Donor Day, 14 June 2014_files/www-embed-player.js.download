(function(){var l;function aa(a,b){function c(){}
c.prototype=b.prototype;a.prototype=new c;a.prototype.constructor=a;for(var d in b)if(Object.defineProperties){var e=Object.getOwnPropertyDescriptor(b,d);e&&Object.defineProperty(a,d,e)}else a[d]=b[d]}
for(var ba="function"==typeof Object.defineProperties?Object.defineProperty:function(a,b,c){if(c.get||c.set)throw new TypeError("ES3 does not support getters and setters.");a!=Array.prototype&&a!=Object.prototype&&(a[b]=c.value)},ca="undefined"!=typeof window&&window===this?this:"undefined"!=typeof global&&null!=global?global:this,da=["String",
"prototype","startsWith"],fa=0;fa<da.length-1;fa++){var ga=da[fa];ga in ca||(ca[ga]={});ca=ca[ga]}
var ha=da[da.length-1],ia=ca[ha],ja=ia?ia:function(a,b){var c;if(null==this)throw new TypeError("The 'this' value for String.prototype.startsWith must not be null or undefined");if(a instanceof RegExp)throw new TypeError("First argument to String.prototype.startsWith must not be a regular expression");c=this+"";a+="";for(var d=c.length,e=a.length,f=Math.max(0,Math.min(b|0,c.length)),g=0;g<e&&f<d;)if(c[f++]!=a[g++])return!1;return g>=e};
ja!=ia&&null!=ja&&ba(ca,ha,{configurable:!0,writable:!0,value:ja});var m=this;function p(a){return void 0!==a}
function q(a,b,c){a=a.split(".");c=c||m;a[0]in c||!c.execScript||c.execScript("var "+a[0]);for(var d;a.length&&(d=a.shift());)!a.length&&p(b)?c[d]=b:c[d]&&Object.prototype.hasOwnProperty.call(c,d)?c=c[d]:c=c[d]={}}
function r(a,b){for(var c=a.split("."),d=b||m,e;e=c.shift();)if(null!=d[e])d=d[e];else return null;return d}
function ma(){}
function na(a){a.la=void 0;a.getInstance=function(){return a.la?a.la:a.la=new a}}
function oa(a){var b=typeof a;if("object"==b)if(a){if(a instanceof Array)return"array";if(a instanceof Object)return b;var c=Object.prototype.toString.call(a);if("[object Window]"==c)return"object";if("[object Array]"==c||"number"==typeof a.length&&"undefined"!=typeof a.splice&&"undefined"!=typeof a.propertyIsEnumerable&&!a.propertyIsEnumerable("splice"))return"array";if("[object Function]"==c||"undefined"!=typeof a.call&&"undefined"!=typeof a.propertyIsEnumerable&&!a.propertyIsEnumerable("call"))return"function"}else return"null";
else if("function"==b&&"undefined"==typeof a.call)return"object";return b}
function pa(a){return"array"==oa(a)}
function qa(a){var b=oa(a);return"array"==b||"object"==b&&"number"==typeof a.length}
function t(a){return"string"==typeof a}
function ra(a){return"function"==oa(a)}
function sa(a){var b=typeof a;return"object"==b&&null!=a||"function"==b}
function ta(a){return a[ua]||(a[ua]=++va)}
var ua="closure_uid_"+(1E9*Math.random()>>>0),va=0;function wa(a,b,c){return a.call.apply(a.bind,arguments)}
function xa(a,b,c){if(!a)throw Error();if(2<arguments.length){var d=Array.prototype.slice.call(arguments,2);return function(){var c=Array.prototype.slice.call(arguments);Array.prototype.unshift.apply(c,d);return a.apply(b,c)}}return function(){return a.apply(b,arguments)}}
function u(a,b,c){u=Function.prototype.bind&&-1!=Function.prototype.bind.toString().indexOf("native code")?wa:xa;return u.apply(null,arguments)}
function ya(a,b){var c=Array.prototype.slice.call(arguments,1);return function(){var b=c.slice();b.push.apply(b,arguments);return a.apply(this,b)}}
function za(a,b){for(var c in b)a[c]=b[c]}
var v=Date.now||function(){return+new Date};
function w(a,b){function c(){}
c.prototype=b.prototype;a.B=b.prototype;a.prototype=new c;a.prototype.constructor=a;a.mb=function(a,c,f){for(var d=Array(arguments.length-2),e=2;e<arguments.length;e++)d[e-2]=arguments[e];return b.prototype[c].apply(a,d)}}
;var Aa=document,x=window;var Ba=(new Date).getTime();function Ca(a){if(!a)return"";a=a.split("#")[0].split("?")[0];a=a.toLowerCase();0==a.indexOf("//")&&(a=window.location.protocol+a);/^[\w\-]*:\/\//.test(a)||(a=window.location.href);var b=a.substring(a.indexOf("://")+3),c=b.indexOf("/");-1!=c&&(b=b.substring(0,c));a=a.substring(0,a.indexOf("://"));if("http"!==a&&"https"!==a&&"chrome-extension"!==a&&"file"!==a&&"android-app"!==a&&"chrome-search"!==a)throw Error("Invalid URI scheme in origin");var c="",d=b.indexOf(":");if(-1!=d){var e=b.substring(d+
1),b=b.substring(0,d);if("http"===a&&"80"!==e||"https"===a&&"443"!==e)c=":"+e}return a+"://"+b+c}
;function Da(){function a(){e[0]=1732584193;e[1]=4023233417;e[2]=2562383102;e[3]=271733878;e[4]=3285377520;A=n=0}
function b(a){for(var b=g,c=0;64>c;c+=4)b[c/4]=a[c]<<24|a[c+1]<<16|a[c+2]<<8|a[c+3];for(c=16;80>c;c++)a=b[c-3]^b[c-8]^b[c-14]^b[c-16],b[c]=(a<<1|a>>>31)&4294967295;a=e[0];for(var d=e[1],f=e[2],h=e[3],k=e[4],n,H,c=0;80>c;c++)40>c?20>c?(n=h^d&(f^h),H=1518500249):(n=d^f^h,H=1859775393):60>c?(n=d&f|h&(d|f),H=2400959708):(n=d^f^h,H=3395469782),n=((a<<5|a>>>27)&4294967295)+n+k+H+b[c]&4294967295,k=h,h=f,f=(d<<30|d>>>2)&4294967295,d=a,a=n;e[0]=e[0]+a&4294967295;e[1]=e[1]+d&4294967295;e[2]=e[2]+f&4294967295;
e[3]=e[3]+h&4294967295;e[4]=e[4]+k&4294967295}
function c(a,c){if("string"===typeof a){a=unescape(encodeURIComponent(a));for(var d=[],e=0,g=a.length;e<g;++e)d.push(a.charCodeAt(e));a=d}c||(c=a.length);d=0;if(0==n)for(;d+64<c;)b(a.slice(d,d+64)),d+=64,A+=64;for(;d<c;)if(f[n++]=a[d++],A++,64==n)for(n=0,b(f);d+64<c;)b(a.slice(d,d+64)),d+=64,A+=64}
function d(){var a=[],d=8*A;56>n?c(h,56-n):c(h,64-(n-56));for(var g=63;56<=g;g--)f[g]=d&255,d>>>=8;b(f);for(g=d=0;5>g;g++)for(var k=24;0<=k;k-=8)a[d++]=e[g]>>k&255;return a}
for(var e=[],f=[],g=[],h=[128],k=1;64>k;++k)h[k]=0;var n,A;a();return{reset:a,update:c,digest:d,Ga:function(){for(var a=d(),b="",c=0;c<a.length;c++)b+="0123456789ABCDEF".charAt(Math.floor(a[c]/16))+"0123456789ABCDEF".charAt(a[c]%16);return b}}}
;/*
 gapi.loader.OBJECT_CREATE_TEST_OVERRIDE &&*/
var Ea=window,Fa=document,Ga=Ea.location;function Ha(){}
var Ia=/\[native code\]/;function y(a,b,c){return a[b]=a[b]||c}
function Ja(a){for(var b=0;b<this.length;b++)if(this[b]===a)return b;return-1}
function Ka(a){a=a.sort();for(var b=[],c=void 0,d=0;d<a.length;d++){var e=a[d];e!=c&&b.push(e);c=e}return b}
function z(){var a;if((a=Object.create)&&Ia.test(a))a=a(null);else{a={};for(var b in a)a[b]=void 0}return a}
var La=y(Ea,"gapi",{});function Ma(a,b,c){this.i=c;this.g=a;this.j=b;this.f=0;this.b=null}
Ma.prototype.get=function(){var a;0<this.f?(this.f--,a=this.b,this.b=a.next,a.next=null):a=this.g();return a};
function Na(a,b){a.j(b);a.f<a.i&&(a.f++,b.next=a.b,a.b=b)}
;function Oa(a){if(Error.captureStackTrace)Error.captureStackTrace(this,Oa);else{var b=Error().stack;b&&(this.stack=b)}a&&(this.message=String(a))}
w(Oa,Error);Oa.prototype.name="CustomError";function Pa(a){return/^\s*$/.test(a)?!1:/^[\],:{}\s\u2028\u2029]*$/.test(a.replace(/\\["\\\/bfnrtu]/g,"@").replace(/(?:"[^"\\\n\r\u2028\u2029\x00-\x08\x0a-\x1f]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?)[\s\u2028\u2029]*(?=:|,|]|}|$)/g,"]").replace(/(?:^|:|,)(?:[\s\u2028\u2029]*\[)+/g,""))}
function Qa(a){a=String(a);if(Pa(a))try{return eval("("+a+")")}catch(b){}throw Error("Invalid JSON string: "+a);}
function Ra(a){return eval("("+a+")")}
function Sa(a){var b=[];Ta(new Ua,a,b);return b.join("")}
function Ua(){}
function Ta(a,b,c){if(null==b)c.push("null");else{if("object"==typeof b){if(pa(b)){var d=b;b=d.length;c.push("[");for(var e="",f=0;f<b;f++)c.push(e),e=d[f],Ta(a,e,c),e=",";c.push("]");return}if(b instanceof String||b instanceof Number||b instanceof Boolean)b=b.valueOf();else{c.push("{");f="";for(d in b)Object.prototype.hasOwnProperty.call(b,d)&&(e=b[d],"function"!=typeof e&&(c.push(f),Va(d,c),c.push(":"),Ta(a,e,c),f=","));c.push("}");return}}switch(typeof b){case "string":Va(b,c);break;case "number":c.push(isFinite(b)&&
!isNaN(b)?String(b):"null");break;case "boolean":c.push(String(b));break;case "function":c.push("null");break;default:throw Error("Unknown type: "+typeof b);}}}
var Wa={'"':'\\"',"\\":"\\\\","/":"\\/","\b":"\\b","\f":"\\f","\n":"\\n","\r":"\\r","\t":"\\t","\x0B":"\\u000b"},Xa=/\uffff/.test("\uffff")?/[\\\"\x00-\x1f\x7f-\uffff]/g:/[\\\"\x00-\x1f\x7f-\xff]/g;function Va(a,b){b.push('"',a.replace(Xa,function(a){var b=Wa[a];b||(b="\\u"+(a.charCodeAt(0)|65536).toString(16).substr(1),Wa[a]=b);return b}),'"')}
;function Ya(a,b){this.width=a;this.height=b}
l=Ya.prototype;l.aspectRatio=function(){return this.width/this.height};
l.isEmpty=function(){return!(this.width*this.height)};
l.ceil=function(){this.width=Math.ceil(this.width);this.height=Math.ceil(this.height);return this};
l.floor=function(){this.width=Math.floor(this.width);this.height=Math.floor(this.height);return this};
l.round=function(){this.width=Math.round(this.width);this.height=Math.round(this.height);return this};function Za(a){this.b=a||{cookie:""}}
var $a=/\s*;\s*/;l=Za.prototype;l.isEnabled=function(){return navigator.cookieEnabled};
l.set=function(a,b,c,d,e,f){if(/[;=\s]/.test(a))throw Error('Invalid cookie name "'+a+'"');if(/[;\r\n]/.test(b))throw Error('Invalid cookie value "'+b+'"');p(c)||(c=-1);e=e?";domain="+e:"";d=d?";path="+d:"";f=f?";secure":"";c=0>c?"":0==c?";expires="+(new Date(1970,1,1)).toUTCString():";expires="+(new Date(v()+1E3*c)).toUTCString();this.b.cookie=a+"="+b+e+d+c+f};
l.get=function(a,b){for(var c=a+"=",d=(this.b.cookie||"").split($a),e=0,f;f=d[e];e++){if(0==f.lastIndexOf(c,0))return f.substr(c.length);if(f==a)return""}return b};
l.remove=function(a,b,c){var d=p(this.get(a));this.set(a,"",0,b,c);return d};
l.isEmpty=function(){return!this.b.cookie};
l.clear=function(){for(var a=(this.b.cookie||"").split($a),b=[],c=[],d,e,f=0;e=a[f];f++)d=e.indexOf("="),-1==d?(b.push(""),c.push(e)):(b.push(e.substring(0,d)),c.push(e.substring(d+1)));for(a=b.length-1;0<=a;a--)this.remove(b[a])};
var ab=new Za("undefined"==typeof document?null:document);ab.f=3950;function bb(a,b){for(var c in a)b.call(void 0,a[c],c,a)}
function cb(a){var b=db,c;for(c in b)if(a.call(void 0,b[c],c,b))return c}
function eb(){var a=fb,b;for(b in a)return!1;return!0}
function gb(a,b){if(null!==a&&b in a)throw Error('The object already contains the key "'+b+'"');a[b]=!0}
function hb(a){var b={},c;for(c in a)b[c]=a[c];return b}
var ib="constructor hasOwnProperty isPrototypeOf propertyIsEnumerable toLocaleString toString valueOf".split(" ");function jb(a,b){for(var c,d,e=1;e<arguments.length;e++){d=arguments[e];for(c in d)a[c]=d[c];for(var f=0;f<ib.length;f++)c=ib[f],Object.prototype.hasOwnProperty.call(d,c)&&(a[c]=d[c])}}
;function kb(a){a.prototype.then=a.prototype.then;a.prototype.$goog_Thenable=!0}
;function lb(a){lb[" "](a);return a}
lb[" "]=ma;function mb(a,b){var c=nb;return Object.prototype.hasOwnProperty.call(c,a)?c[a]:c[a]=b(a)}
;function ob(){}
;var pb=String.prototype.trim?function(a){return a.trim()}:function(a){return a.replace(/^[\s\xa0]+|[\s\xa0]+$/g,"")};
function qb(a,b){return a<b?-1:a>b?1:0}
function rb(a){for(var b=0,c=0;c<a.length;++c)b=31*b+a.charCodeAt(c)>>>0;return b}
;var sb=function(){var a=!1;try{var b=Object.defineProperty({},"passive",{get:function(){a=!0}});
m.addEventListener("test",null,b)}catch(c){}return a}();var tb={};function ub(a){return tb[a]||(tb[a]=String(a).replace(/\-([a-z])/g,function(a,c){return c.toUpperCase()}))}
function vb(a,b){return a?a.dataset?a.dataset[ub(b)]:a.getAttribute("data-"+b):null}
function wb(a){a&&(a.dataset?a.dataset[ub("loaded")]="true":a.setAttribute("data-loaded","true"))}
;function xb(a){this.type="";this.state=this.source=this.data=this.currentTarget=this.relatedTarget=this.target=null;this.charCode=this.keyCode=0;this.shiftKey=this.ctrlKey=this.altKey=!1;this.clientY=this.clientX=0;this.changedTouches=this.touches=null;if(a=a||window.event){this.event=a;for(var b in a)b in yb||(this[b]=a[b]);(b=a.target||a.srcElement)&&3==b.nodeType&&(b=b.parentNode);this.target=b;if(b=a.relatedTarget)try{b=b.nodeName?b:null}catch(c){b=null}else"mouseover"==this.type?b=a.fromElement:
"mouseout"==this.type&&(b=a.toElement);this.relatedTarget=b;this.clientX=void 0!=a.clientX?a.clientX:a.pageX;this.clientY=void 0!=a.clientY?a.clientY:a.pageY;this.keyCode=a.keyCode?a.keyCode:a.which;this.charCode=a.charCode||("keypress"==this.type?this.keyCode:0);this.altKey=a.altKey;this.ctrlKey=a.ctrlKey;this.shiftKey=a.shiftKey}}
xb.prototype.preventDefault=function(){this.event&&(this.event.returnValue=!1,this.event.preventDefault&&this.event.preventDefault())};
xb.prototype.stopPropagation=function(){this.event&&(this.event.cancelBubble=!0,this.event.stopPropagation&&this.event.stopPropagation())};
xb.prototype.stopImmediatePropagation=function(){this.event&&(this.event.cancelBubble=!0,this.event.stopImmediatePropagation&&this.event.stopImmediatePropagation())};
var yb={stopImmediatePropagation:1,stopPropagation:1,preventMouseEvent:1,preventManipulation:1,preventDefault:1,layerX:1,layerY:1,screenX:1,screenY:1,scale:1,rotation:1,webkitMovementX:1,webkitMovementY:1};var zb=window.performance&&window.performance.timing&&window.performance.now?function(){return window.performance.timing.navigationStart+window.performance.now()}:function(){return(new Date).getTime()},Ab="Microsoft Internet Explorer"==navigator.appName;
function Bb(a,b){if(1<b.length)a[b[0]]=b[1];else{var c=b[0],d;for(d in c)a[d]=c[d]}}
;function Cb(a,b,c,d){this.f=a;this.i=b;this.g=c;this.b=d}
var Db=1;function Eb(a){var b={};void 0!==a.f?b.trackingParams=a.f:(b.veType=a.i,null!=a.g&&(b.veCounter=a.g));void 0!==a.b&&(b.dataElement=Eb(a.b));return b}
;var Fb=null;"undefined"!=typeof XMLHttpRequest?Fb=function(){return new XMLHttpRequest}:"undefined"!=typeof ActiveXObject&&(Fb=function(){return new ActiveXObject("Microsoft.XMLHTTP")});
function Gb(a){switch(a&&"status"in a?a.status:-1){case 200:case 201:case 202:case 203:case 204:case 205:case 206:case 304:return!0;default:return!1}}
;function B(a,b){this.version=a;this.args=b}
function Hb(a){if(!a.Aa){var b={};a.call(b);a.Aa=b.version}return a.Aa}
function Ib(a,b){function c(){a.apply(this,b.args)}
if(!b.args||!b.version)throw Error("yt.pubsub2.Data.deserialize(): serializedData is incomplete.");var d;try{d=Hb(a)}catch(e){}if(!d||b.version!=d)throw Error("yt.pubsub2.Data.deserialize(): serializedData version is incompatible.");c.prototype=a.prototype;try{return new c}catch(e){throw e.message="yt.pubsub2.Data.deserialize(): "+e.message,e;}}
function C(a,b){this.topic=a;this.b=b}
C.prototype.toString=function(){return this.topic};var Jb=window.performance||window.mozPerformance||window.msPerformance||window.webkitPerformance||{};function D(){this.f=this.f;this.G=this.G}
D.prototype.f=!1;D.prototype.dispose=function(){this.f||(this.f=!0,this.o())};
function Kb(a,b){a.f?p(void 0)?b.call(void 0):b():(a.G||(a.G=[]),a.G.push(p(void 0)?u(b,void 0):b))}
D.prototype.o=function(){if(this.G)for(;this.G.length;)this.G.shift()()};
function Lb(a){a&&"function"==typeof a.dispose&&a.dispose()}
function Mb(a){for(var b=0,c=arguments.length;b<c;++b){var d=arguments[b];qa(d)?Mb.apply(null,d):Lb(d)}}
;var E;a:{var Nb=m.navigator;if(Nb){var Ob=Nb.userAgent;if(Ob){E=Ob;break a}}E=""}function F(a){return-1!=E.indexOf(a)}
;function Pb(a){this.b=a}
Pb.prototype.set=function(a,b){p(b)?this.b.set(a,Sa(b)):this.b.remove(a)};
Pb.prototype.get=function(a){var b;try{b=this.b.get(a)}catch(c){return}if(null!==b)try{return Qa(b)}catch(c){throw"Storage: Invalid value was encountered";}};
Pb.prototype.remove=function(a){this.b.remove(a)};var Qb=!1,Rb="";function Sb(a){a=a.match(/[\d]+/g);if(!a)return"";a.length=3;return a.join(".")}
(function(){if(navigator.plugins&&navigator.plugins.length){var a=navigator.plugins["Shockwave Flash"];if(a&&(Qb=!0,a.description)){Rb=Sb(a.description);return}if(navigator.plugins["Shockwave Flash 2.0"]){Qb=!0;Rb="2.0.0.11";return}}if(navigator.mimeTypes&&navigator.mimeTypes.length&&(a=navigator.mimeTypes["application/x-shockwave-flash"],Qb=!(!a||!a.enabledPlugin))){Rb=Sb(a.enabledPlugin.description);return}try{var b=new ActiveXObject("ShockwaveFlash.ShockwaveFlash.7");Qb=!0;Rb=Sb(b.GetVariable("$version"));
return}catch(c){}try{b=new ActiveXObject("ShockwaveFlash.ShockwaveFlash.6");Qb=!0;Rb="6.0.21";return}catch(c){}try{b=new ActiveXObject("ShockwaveFlash.ShockwaveFlash"),Qb=!0,Rb=Sb(b.GetVariable("$version"))}catch(c){}})();
var Tb=Qb,Ub=Rb;function Vb(a,b,c){var d=Wb();this.label=a;this.type=b;this.eventId=c;this.value=d;this.duration=0}
;var Xb=window.yt&&window.yt.config_||window.ytcfg&&window.ytcfg.data_||{};q("yt.config_",Xb,void 0);function G(a){Bb(Xb,arguments)}
function I(a,b){return a in Xb?Xb[a]:b}
;function Yb(a){a=a||{};this.url=a.url||"";this.urlV9As2=a.url_v9as2||"";this.args=a.args||hb(Zb);this.assets=a.assets||{};this.attrs=a.attrs||hb($b);this.params=a.params||hb(ac);this.minVersion=a.min_version||"8.0.0";this.fallback=a.fallback||null;this.fallbackMessage=a.fallbackMessage||null;this.html5=!!a.html5;this.disable=a.disable||{};this.loaded=!!a.loaded;this.messages=a.messages||{}}
var Zb={enablejsapi:1},$b={},ac={allowscriptaccess:"always",allowfullscreen:"true",bgcolor:"#000000"};function bc(a){a instanceof Yb||(a=new Yb(a));return a}
function cc(a){var b=new Yb,c;for(c in a)if(a.hasOwnProperty(c)){var d=a[c];b[c]="object"==oa(d)?hb(d):d}return b}
;var dc={"api.invalidparam":2,auth:150,"drm.auth":150,"heartbeat.net":150,"heartbeat.servererror":150,"heartbeat.stop":150,"html5.unsupportedads":5,"fmt.noneavailable":5,"fmt.decode":5,"fmt.unplayable":5,"html5.missingapi":5,"html5.unsupportedlive":5,"drm.unavailable":5};function ec(a){B.call(this,1,arguments)}
w(ec,B);var fc=new C("timing-sent",ec);function gc(a){B.call(this,1,arguments);this.ga=a}
w(gc,B);function hc(a,b){B.call(this,2,arguments);this.f=a;this.b=b}
w(hc,B);function ic(a,b,c,d){B.call(this,1,arguments);this.b=b;this.f=c||null;this.itemId=d||null}
w(ic,B);function jc(a,b){B.call(this,1,arguments);this.f=a;this.b=b||null}
w(jc,B);function kc(a){B.call(this,1,arguments)}
w(kc,B);var lc=new C("ypc-core-load",gc),mc=new C("ypc-guide-sync-success",hc),nc=new C("ypc-purchase-success",ic),oc=new C("ypc-subscription-cancel",kc),pc=new C("ypc-subscription-cancel-success",jc),qc=new C("ypc-init-subscription",kc);var J;J=y(Ea,"___jsl",z());y(J,"I",0);y(J,"hel",10);function rc(){var a=Ga.href,b;if(J.dpo)b=J.h;else{b=J.h;var c=RegExp("([#].*&|[#])jsh=([^&#]*)","g"),d=RegExp("([?#].*&|[?#])jsh=([^&#]*)","g");if(a=a&&(c.exec(a)||d.exec(a)))try{b=decodeURIComponent(a[2])}catch(e){}}return b}
function sc(a){var b=y(J,"PQ",[]);J.PQ=[];var c=b.length;if(0===c)a();else for(var d=0,e=function(){++d===c&&a()},f=0;f<c;f++)b[f](e)}
function tc(a){return y(y(J,"H",z()),a,z())}
;var uc=Array.prototype.indexOf?function(a,b,c){return Array.prototype.indexOf.call(a,b,c)}:function(a,b,c){c=null==c?0:0>c?Math.max(0,a.length+c):c;
if(t(a))return t(b)&&1==b.length?a.indexOf(b,c):-1;for(;c<a.length;c++)if(c in a&&a[c]===b)return c;return-1},K=Array.prototype.forEach?function(a,b,c){Array.prototype.forEach.call(a,b,c)}:function(a,b,c){for(var d=a.length,e=t(a)?a.split(""):a,f=0;f<d;f++)f in e&&b.call(c,e[f],f,a)},vc=Array.prototype.map?function(a,b,c){return Array.prototype.map.call(a,b,c)}:function(a,b,c){for(var d=a.length,e=Array(d),f=t(a)?a.split(""):a,g=0;g<d;g++)g in f&&(e[g]=b.call(c,f[g],g,a));
return e};
function wc(a,b){var c;a:{c=a.length;for(var d=t(a)?a.split(""):a,e=0;e<c;e++)if(e in d&&b.call(void 0,d[e],e,a)){c=e;break a}c=-1}return 0>c?null:t(a)?a.charAt(c):a[c]}
function xc(a,b){var c=uc(a,b);0<=c&&Array.prototype.splice.call(a,c,1)}
function yc(a){var b=a.length;if(0<b){for(var c=Array(b),d=0;d<b;d++)c[d]=a[d];return c}return[]}
function zc(a,b){for(var c=1;c<arguments.length;c++){var d=arguments[c];if(qa(d)){var e=a.length||0,f=d.length||0;a.length=e+f;for(var g=0;g<f;g++)a[e+g]=d[g]}else a.push(d)}}
function Ac(a,b,c,d){return Array.prototype.splice.apply(a,Bc(arguments,1))}
function Bc(a,b,c){return 2>=arguments.length?Array.prototype.slice.call(a,b):Array.prototype.slice.call(a,b,c)}
;function Cc(){this.f=this.b=null}
var Fc=new Ma(function(){return new Ec},function(a){a.reset()},100);
Cc.prototype.remove=function(){var a=null;this.b&&(a=this.b,this.b=this.b.next,this.b||(this.f=null),a.next=null);return a};
function Ec(){this.next=this.scope=this.b=null}
Ec.prototype.set=function(a,b){this.b=a;this.scope=b;this.next=null};
Ec.prototype.reset=function(){this.next=this.scope=this.b=null};function Gc(){return F("iPhone")&&!F("iPod")&&!F("iPad")}
;function Hc(a){this.b=a}
w(Hc,Pb);function Ic(a){this.data=a}
function Jc(a){return!p(a)||a instanceof Ic?a:new Ic(a)}
Hc.prototype.set=function(a,b){Hc.B.set.call(this,a,Jc(b))};
Hc.prototype.f=function(a){a=Hc.B.get.call(this,a);if(!p(a)||a instanceof Object)return a;throw"Storage: Invalid value was encountered";};
Hc.prototype.get=function(a){if(a=this.f(a)){if(a=a.data,!p(a))throw"Storage: Invalid value was encountered";}else a=void 0;return a};var Kc=/^(?:([^:/?#.]+):)?(?:\/\/(?:([^/?#]*)@)?([^/#?]*?)(?::([0-9]+))?(?=[/#?]|$))?([^?#]+)?(?:\?([^#]*))?(?:#([\s\S]*))?$/;function L(a){return a.match(Kc)}
function Lc(a){return a?decodeURI(a):a}
function Mc(a){if(a[1]){var b=a[0],c=b.indexOf("#");0<=c&&(a.push(b.substr(c)),a[0]=b=b.substr(0,c));c=b.indexOf("?");0>c?a[1]="?":c==b.length-1&&(a[1]=void 0)}return a.join("")}
function Nc(a,b,c){if(pa(b))for(var d=0;d<b.length;d++)Nc(a,String(b[d]),c);else null!=b&&c.push("&",a,""===b?"":"=",encodeURIComponent(String(b)))}
function Oc(a,b,c){for(c=c||0;c<b.length;c+=2)Nc(b[c],b[c+1],a);return a}
function Pc(a,b){for(var c in b)Nc(c,b[c],a);return a}
function Qc(a,b){return Mc(2==arguments.length?Oc([a],arguments[1],0):Oc([a],arguments,1))}
;function Rc(a,b){var c=r("yt.logging.errors.log");c?c(a,b,void 0,void 0,void 0):(c=I("ERRORS",[]),c.push([a,b,void 0,void 0,void 0]),G("ERRORS",c))}
function Sc(a){return a&&window.yterr?function(){try{return a.apply(this,arguments)}catch(b){Rc(b)}}:a}
;function M(a){return I("EXPERIMENT_FLAGS",{})[a]}
;var Tc=window.yt&&window.yt.msgs_||window.ytcfg&&window.ytcfg.msgs||{};q("yt.msgs_",Tc,void 0);function Uc(a){Bb(Tc,arguments)}
;function Vc(a){a={client:{hl:a.Oa,gl:a.Na,clientName:a.Ma,clientVersion:a.innertubeContextClientVersion}};I("DELEGATED_SESSION_ID")&&(a.user={onBehalfOfUser:I("DELEGATED_SESSION_ID")});return a}
function Wc(){return{apiaryHost:I("APIARY_HOST",void 0),Ea:I("APIARY_HOST_FIRSTPARTY",void 0),gapiHintOverride:!!I("GAPI_HINT_OVERRIDE",void 0),gapiHintParams:I("GAPI_HINT_PARAMS",void 0),innertubeApiKey:I("INNERTUBE_API_KEY",void 0),innertubeApiVersion:I("INNERTUBE_API_VERSION",void 0),Ma:I("INNERTUBE_CONTEXT_CLIENT_NAME","WEB"),innertubeContextClientVersion:I("INNERTUBE_CONTEXT_CLIENT_VERSION",void 0),Oa:I("INNERTUBE_CONTEXT_HL",void 0),Na:I("INNERTUBE_CONTEXT_GL",void 0),kb:I("XHR_APIARY_HOST",
void 0)}}
;function Xc(){this.b=I("ALT_PREF_COOKIE_NAME","PREF");var a=ab.get(""+this.b,void 0);if(a)for(var a=unescape(a).split("&"),b=0;b<a.length;b++){var c=a[b].split("="),d=c[0];(c=c[1])&&(N[d]=c.toString())}}
na(Xc);var N=r("yt.prefs.UserPrefs.prefs_")||{};q("yt.prefs.UserPrefs.prefs_",N,void 0);function Yc(a){if(/^f([1-9][0-9]*)$/.test(a))throw Error("ExpectedRegexMatch: "+a);}
function Zc(a){if(!/^\w+$/.test(a))throw Error("ExpectedRegexMismatch: "+a);}
function $c(a){a=void 0!==N[a]?N[a].toString():null;return null!=a&&/^[A-Fa-f0-9]+$/.test(a)?parseInt(a,16):null}
Xc.prototype.get=function(a,b){Zc(a);Yc(a);var c=void 0!==N[a]?N[a].toString():null;return null!=c?c:b?b:""};
Xc.prototype.set=function(a,b){Zc(a);Yc(a);if(null==b)throw Error("ExpectedNotNull");N[a]=b.toString()};
Xc.prototype.remove=function(a){Zc(a);Yc(a);delete N[a]};
Xc.prototype.clear=function(){N={}};function ad(a){D.call(this);this.g=a;this.g.subscribe("command",this.xa,this);this.i={};this.j=!1}
w(ad,D);l=ad.prototype;l.start=function(){this.j||this.f||(this.j=!0,bd(this.g,"RECEIVING"))};
l.xa=function(a,b){if(this.j&&!this.f){var c=b||{};switch(a){case "addEventListener":if(t(c.event)&&(c=c.event,!(c in this.i))){var d=u(this.bb,this,c);this.i[c]=d;this.addEventListener(c,d)}break;case "removeEventListener":t(c.event)&&cd(this,c.event);break;default:this.b.isReady()&&this.b[a]&&(c=dd(a,b||{}),c=this.b[a].apply(this.b,c),(c=ed(a,c))&&this.j&&!this.f&&bd(this.g,a,c))}}};
l.bb=function(a,b){this.j&&!this.f&&bd(this.g,a,this.ha(a,b))};
l.ha=function(a,b){if(null!=b)return{value:b}};
function cd(a,b){b in a.i&&(a.removeEventListener(b,a.i[b]),delete a.i[b])}
l.o=function(){var a=this.g;a.f||fd(a.b,"command",this.xa,this);this.g=null;for(var b in this.i)cd(this,b);ad.B.o.call(this)};function gd(a,b,c){var d=[],e=[];if(1==(pa(c)?2:1))return e=[b,a],K(d,function(a){e.push(a)}),hd(e.join(" "));
var f=[],g=[];K(c,function(a){g.push(a.key);f.push(a.value)});
c=Math.floor((new Date).getTime()/1E3);e=0==f.length?[c,b,a]:[f.join(":"),c,b,a];K(d,function(a){e.push(a)});
a=hd(e.join(" "));a=[c,a];0==g.length||a.push(g.join(""));return a.join("_")}
function hd(a){var b=Da();b.update(a);return b.Ga().toLowerCase()}
;var id=y(J,"perf",z());y(id,"g",z());var jd=y(id,"i",z());y(id,"r",[]);z();z();function kd(a,b,c){b&&0<b.length&&(b=ld(b),c&&0<c.length&&(b+="___"+ld(c)),28<b.length&&(b=b.substr(0,28)+(b.length-28)),c=b,b=y(jd,"_p",z()),y(b,c,z())[a]=(new Date).getTime(),b=id.r,"function"===typeof b?b(a,"_p",c):b.push([a,"_p",c]))}
function ld(a){return a.join("__").replace(/\./g,"_").replace(/\-/g,"_").replace(/\,/g,"_")}
;function md(){this.b="";this.f=nd}
md.prototype.ka=!0;md.prototype.ja=function(){return this.b};
var nd={};function od(){return(F("Chrome")||F("CriOS"))&&!F("Edge")}
;function pd(a){this.b=a}
w(pd,Hc);pd.prototype.set=function(a,b,c){if(b=Jc(b)){if(c){if(c<v()){pd.prototype.remove.call(this,a);return}b.expiration=c}b.creation=v()}pd.B.set.call(this,a,b)};
pd.prototype.f=function(a,b){var c=pd.B.f.call(this,a);if(c){var d;if(d=!b){d=c.creation;var e=c.expiration;d=!!e&&e<v()||!!d&&d>v()}if(d)pd.prototype.remove.call(this,a);else return c}};function qd(){var a=rd;try{var b;if(b=!!a&&null!=a.location.href)a:{try{lb(a.foo);b=!0;break a}catch(c){}b=!1}return b}catch(c){return!1}}
function sd(a,b,c){for(var d in a)Object.prototype.hasOwnProperty.call(a,d)&&b.call(c,a[d],d,a)}
;function O(a,b){ra(a)&&(a=Sc(a));return window.setTimeout(a,b)}
;function td(a){"?"==a.charAt(0)&&(a=a.substr(1));a=a.split("&");for(var b={},c=0,d=a.length;c<d;c++){var e=a[c].split("=");if(1==e.length&&e[0]||2==e.length){var f=decodeURIComponent((e[0]||"").replace(/\+/g," ")),e=decodeURIComponent((e[1]||"").replace(/\+/g," "));f in b?pa(b[f])?zc(b[f],e):b[f]=[b[f],e]:b[f]=e}}return b}
function ud(a,b){var c=a.split("#",2);a=c[0];var c=1<c.length?"#"+c[1]:"",d=a.split("?",2);a=d[0];var d=td(d[1]||""),e;for(e in b)d[e]=b[e];return Mc(Pc([a],d))+c}
function vd(a){a=Pc([],a);a[0]="";return a.join("")}
;var wd=v().toString();var xd=z(),yd=[];function P(a){throw Error("Bad hint"+(a?": "+a:""));}
yd.push(["jsl",function(a){for(var b in a)if(Object.prototype.hasOwnProperty.call(a,b)){var c=a[b];"object"==typeof c?J[b]=y(J,b,[]).concat(c):y(J,b,c)}if(b=a.u)a=y(J,"us",[]),a.push(b),(b=/^https:(.*)$/.exec(b))&&a.push("http:"+b[1])}]);
var zd=/^(\/[a-zA-Z0-9_\-]+)+$/,Ad=[/\/amp\//,/\/amp$/,/^\/amp$/],Bd=/^[a-zA-Z0-9\-_\.,!]+$/,Cd=/^gapi\.loaded_[0-9]+$/,Dd=/^[a-zA-Z0-9,._-]+$/;function Ed(a,b,c,d){var e=a.split(";"),f=e.shift(),g=xd[f],h=null;g?h=g(e,b,c,d):P("no hint processor for: "+f);h||P("failed to generate load url");b=h;c=b.match(Fd);(d=b.match(Gd))&&1===d.length&&Hd.test(b)&&c&&1===c.length||P("failed sanity: "+a);return h}
function Id(a,b,c,d){function e(a){return encodeURIComponent(a).replace(/%2C/g,",")}
a=Jd(a);Cd.test(c)||P("invalid_callback");b=Kd(b);d=d&&d.length?Kd(d):null;return[encodeURIComponent(a.Ya).replace(/%2C/g,",").replace(/%2F/g,"/"),"/k=",e(a.version),"/m=",e(b),d?"/exm="+e(d):"","/rt=j/sv=1/d=1/ed=1",a.ra?"/am="+e(a.ra):"",a.ya?"/rs="+e(a.ya):"",a.Ca?"/t="+e(a.Ca):"","/cb=",e(c)].join("")}
function Jd(a){"/"!==a.charAt(0)&&P("relative path");for(var b=a.substring(1).split("/"),c=[];b.length;){a=b.shift();if(!a.length||0==a.indexOf("."))P("empty/relative directory");else if(0<a.indexOf("=")){b.unshift(a);break}c.push(a)}a={};for(var d=0,e=b.length;d<e;++d){var f=b[d].split("="),g=decodeURIComponent(f[0]),h=decodeURIComponent(f[1]);2==f.length&&g&&h&&(a[g]=a[g]||h)}b="/"+c.join("/");zd.test(b)||P("invalid_prefix");c=0;for(d=Ad.length;c<d;++c)Ad[c].test(b)&&P("invalid_prefix");c=Ld(a,
"k",!0);d=Ld(a,"am");e=Ld(a,"rs");a=Ld(a,"t");return{Ya:b,version:c,ra:d,ya:e,Ca:a}}
function Kd(a){for(var b=[],c=0,d=a.length;c<d;++c){var e=a[c].replace(/\./g,"_").replace(/-/g,"_");Dd.test(e)&&b.push(e)}return b.join(",")}
function Ld(a,b,c){a=a[b];!a&&c&&P("missing: "+b);if(a){if(Bd.test(a))return a;P("invalid: "+b)}return null}
var Hd=/^https?:\/\/[a-z0-9_.-]+\.google\.com(:\d+)?\/[a-zA-Z0-9_.,!=\-\/]+$/,Gd=/\/cb=/g,Fd=/\/\//g;function Md(){var a=rc();if(!a)throw Error("Bad hint");return a}
xd.m=function(a,b,c,d){(a=a[0])||P("missing_hint");return"https://apis.google.com"+Id(a,b,c,d)};
var Nd=decodeURI("%73cript"),Od=/^[-+_0-9\/A-Za-z]+={0,2}$/;function Pd(a,b){for(var c=[],d=0;d<a.length;++d){var e=a[d];e&&0>Ja.call(b,e)&&c.push(e)}return c}
function Qd(){var a=J.nonce;if(void 0!==a)return a&&a===String(a)&&a.match(Od)?a:J.nonce=null;var b=y(J,"us",[]);if(!b||!b.length)return J.nonce=null;for(var c=Fa.getElementsByTagName(Nd),d=0,e=c.length;d<e;++d){var f=c[d];if(f.src&&(a=String(f.nonce||f.getAttribute("nonce")||"")||null)){for(var g=0,h=b.length;g<h&&b[g]!==f.src;++g);if(g!==h&&a&&a===String(a)&&a.match(Od))return J.nonce=a}}return null}
function Rd(a){if("loading"!=Fa.readyState)Sd(a);else{var b=Qd(),c="";null!==b&&(c=' nonce="'+b+'"');Fa.write("<"+Nd+' src="'+encodeURI(a)+'"'+c+"></"+Nd+">")}}
function Sd(a){var b=Fa.createElement(Nd);b.setAttribute("src",a);a=Qd();null!==a&&b.setAttribute("nonce",a);b.async="true";(a=Fa.getElementsByTagName(Nd)[0])?a.parentNode.insertBefore(b,a):(Fa.head||Fa.body||Fa.documentElement).appendChild(b)}
function Td(a,b){var c=b&&b._c;if(c)for(var d=0;d<yd.length;d++){var e=yd[d][0],f=yd[d][1];f&&Object.prototype.hasOwnProperty.call(c,e)&&f(c[e],a,b)}}
function Ud(a,b,c){Vd(function(){var c;c=b===rc()?y(La,"_",z()):z();c=y(tc(b),"_",c);a(c)},c)}
function Wd(a,b){var c=b||{};"function"==typeof b&&(c={},c.callback=b);Td(a,c);var d=a?a.split(":"):[],e=c.h||Md(),f=y(J,"ah",z());if(f["::"]&&d.length){for(var g=[],h=null;h=d.shift();){var k=h.split("."),k=f[h]||f[k[1]&&"ns:"+k[0]||""]||e,n=g.length&&g[g.length-1]||null,A=n;n&&n.hint==k||(A={hint:k,features:[]},g.push(A));A.features.push(h)}var H=g.length;if(1<H){var ea=c.callback;ea&&(c.callback=function(){0==--H&&ea()})}for(;d=g.shift();)Xd(d.features,c,d.hint)}else Xd(d||[],c,e)}
function Xd(a,b,c){function d(a,b){if(H)return 0;Ea.clearTimeout(A);ea.push.apply(ea,Z);var d=((La||{}).config||{}).update;d?d(f):f&&y(J,"cu",[]).push(f);if(b){kd("me0",a,Y);try{Ud(b,c,n)}finally{kd("me1",a,Y)}}return 1}
a=Ka(a)||[];var e=b.callback,f=b.config,g=b.timeout,h=b.ontimeout,k=b.onerror,n=void 0;"function"==typeof k&&(n=k);var A=null,H=!1;if(g&&!h||!g&&h)throw"Timeout requires both the timeout parameter and ontimeout parameter to be set";var k=y(tc(c),"r",[]).sort(),ea=y(tc(c),"L",[]).sort(),Y=[].concat(k);0<g&&(A=Ea.setTimeout(function(){H=!0;h()},g));
var Z=Pd(a,ea);if(Z.length){var Z=Pd(a,k),ka=y(J,"CP",[]),la=ka.length;ka[la]=function(a){function b(){var a=ka[la+1];a&&a()}
function c(b){ka[la]=null;d(Z,a)&&sc(function(){e&&e();b()})}
if(!a)return 0;kd("ml1",Z,Y);0<la&&ka[la-1]?ka[la]=function(){c(b)}:c(b)};
if(Z.length){var Dc="loaded_"+J.I++;La[Dc]=function(a){ka[la](a);La[Dc]=null};
a=Ed(c,Z,"gapi."+Dc,k);k.push.apply(k,Z);kd("ml0",Z,Y);b.sync||Ea.___gapisync?Rd(a):Sd(a)}else ka[la](Ha)}else d(Z)&&e&&e()}
function Vd(a,b){if(J.hee&&0<J.hel)try{return a()}catch(c){b&&b(c),J.hel--,Wd("debug_error",function(){try{window.___jsl.hefn(c)}catch(d){throw c;}})}else try{return a()}catch(c){throw b&&b(c),c;
}}
La.load=function(a,b){return Vd(function(){return Wd(a,b)})};function Yd(a){m.setTimeout(function(){throw a;},0)}
var Zd;
function $d(){var a=m.MessageChannel;"undefined"===typeof a&&"undefined"!==typeof window&&window.postMessage&&window.addEventListener&&!F("Presto")&&(a=function(){var a=document.createElement("IFRAME");a.style.display="none";a.src="";document.documentElement.appendChild(a);var b=a.contentWindow,a=b.document;a.open();a.write("");a.close();var c="callImmediate"+Math.random(),d="file:"==b.location.protocol?"*":b.location.protocol+"//"+b.location.host,a=u(function(a){if(("*"==d||a.origin==d)&&a.data==
c)this.port1.onmessage()},this);
b.addEventListener("message",a,!1);this.port1={};this.port2={postMessage:function(){b.postMessage(c,d)}}});
if("undefined"!==typeof a&&!F("Trident")&&!F("MSIE")){var b=new a,c={},d=c;b.port1.onmessage=function(){if(p(c.next)){c=c.next;var a=c.sa;c.sa=null;a()}};
return function(a){d.next={sa:a};d=d.next;b.port2.postMessage(0)}}return"undefined"!==typeof document&&"onreadystatechange"in document.createElement("SCRIPT")?function(a){var b=document.createElement("SCRIPT");
b.onreadystatechange=function(){b.onreadystatechange=null;b.parentNode.removeChild(b);b=null;a();a=null};
document.documentElement.appendChild(b)}:function(a){m.setTimeout(a,0)}}
;function ae(){this.b="";this.f=be}
ae.prototype.ka=!0;ae.prototype.ja=function(){return this.b};
function ce(a){return a instanceof ae&&a.constructor===ae&&a.f===be?a.b:"type_error:SafeUrl"}
var de=/^(?:(?:https?|mailto|ftp):|[^&:/?#]*(?:[/?#]|$))/i;function ee(a){if(a instanceof ae)return a;a=a.ka?a.ja():String(a);de.test(a)||(a="about:invalid#zClosurez");return fe(a)}
var be={};function fe(a){var b=new ae;b.b=a;return b}
fe("about:blank");var ge="StopIteration"in m?m.StopIteration:{message:"StopIteration",stack:""};function he(){}
he.prototype.next=function(){throw ge;};
he.prototype.ba=function(){return this};
function ie(a){if(a instanceof he)return a;if("function"==typeof a.ba)return a.ba(!1);if(qa(a)){var b=0,c=new he;c.next=function(){for(;;){if(b>=a.length)throw ge;if(b in a)return a[b++];b++}};
return c}throw Error("Not implemented");}
function je(a,b){if(qa(a))try{K(a,b,void 0)}catch(c){if(c!==ge)throw c;}else{a=ie(a);try{for(;;)b.call(void 0,a.next(),void 0,a)}catch(c){if(c!==ge)throw c;}}}
function ke(a){if(qa(a))return yc(a);a=ie(a);var b=[];je(a,function(a){b.push(a)});
return b}
;function le(a,b){this.b=p(a)?a:0;this.f=p(b)?b:0}
le.prototype.equals=function(a){return a instanceof le&&(this==a?!0:this&&a?this.b==a.b&&this.f==a.f:!1)};
le.prototype.ceil=function(){this.b=Math.ceil(this.b);this.f=Math.ceil(this.f);return this};
le.prototype.floor=function(){this.b=Math.floor(this.b);this.f=Math.floor(this.f);return this};
le.prototype.round=function(){this.b=Math.round(this.b);this.f=Math.round(this.f);return this};var me=F("Opera"),Q=F("Trident")||F("MSIE"),ne=F("Edge"),oe=F("Gecko")&&!(-1!=E.toLowerCase().indexOf("webkit")&&!F("Edge"))&&!(F("Trident")||F("MSIE"))&&!F("Edge"),pe=-1!=E.toLowerCase().indexOf("webkit")&&!F("Edge"),qe=F("Macintosh"),re=F("Windows"),se=F("Android"),te=Gc(),ue=F("iPad"),ve=F("iPod");function we(){var a=m.document;return a?a.documentMode:void 0}
var xe;a:{var ye="",ze=function(){var a=E;if(oe)return/rv\:([^\);]+)(\)|;)/.exec(a);if(ne)return/Edge\/([\d\.]+)/.exec(a);if(Q)return/\b(?:MSIE|rv)[: ]([^\);]+)(\)|;)/.exec(a);if(pe)return/WebKit\/(\S+)/.exec(a);if(me)return/(?:Version)[ \/]?(\S+)/.exec(a)}();
ze&&(ye=ze?ze[1]:"");if(Q){var Ae=we();if(null!=Ae&&Ae>parseFloat(ye)){xe=String(Ae);break a}}xe=ye}var Be=xe,nb={};
function R(a){return mb(a,function(){for(var b=0,c=pb(String(Be)).split("."),d=pb(String(a)).split("."),e=Math.max(c.length,d.length),f=0;0==b&&f<e;f++){var g=c[f]||"",h=d[f]||"";do{g=/(\d*)(\D*)(.*)/.exec(g)||["","","",""];h=/(\d*)(\D*)(.*)/.exec(h)||["","","",""];if(0==g[0].length&&0==h[0].length)break;b=qb(0==g[1].length?0:parseInt(g[1],10),0==h[1].length?0:parseInt(h[1],10))||qb(0==g[2].length,0==h[2].length)||qb(g[2],h[2]);g=g[3];h=h[3]}while(0==b)}return 0<=b})}
var Ce;var De=m.document;Ce=De&&Q?we()||("CSS1Compat"==De.compatMode?parseInt(Be,10):5):void 0;function Ee(a,b){this.events=[];this.j={};this.b={};this.g=b||m;b&&(b.google_js_reporting_queue=b.google_js_reporting_queue||[],this.events=b.google_js_reporting_queue);this.f=null!=this.g.b?this.g.b:Math.random()<a}
function Wb(){var a=m.performance;return a&&a.now?a.now():v()}
function Fe(a){return"goog_"+a.label+"_"+a.type+"_"+a.eventId}
function Ge(a,b){var c=a.g;c.performance&&c.performance.mark&&c.performance.mark(b)}
function He(){var a=Ie;K(a.events,a.i,a);sd(a.b,function(a){K(a,this.i,this)},a);
a.b={};a.events.length=0;a.f=!1}
Ee.prototype.i=function(a){a=Fe(a);var b=this.g.performance;b&&b.clearMarks&&(b.clearMarks(a+"_start"),b.clearMarks(a+"_end"))};
Ee.prototype.start=function(a,b){if(!this.f)return null;var c=(this.j[a]||0)+1;this.j[a]=c;var c=new Vb(a,b,c),d=a+"_"+b;this.b[d]?this.b[d].push(c):this.b[d]=[c];Ge(this,Fe(c)+"_start");return c};
Ee.prototype.end=function(a,b){if(this.f){var c=a+"_"+b,d=this.b[c];d&&d.length&&(c=this.b[c].pop(),c.duration=Wb()-c.value,Ge(this,Fe(c)+"_end"),this.events.push(c))}};function Je(a,b,c){isNaN(c)&&(c=void 0);var d=r("yt.scheduler.instance.addJob");return d?d(a,b,c):void 0===c?(a(),NaN):O(a,c||0)}
function Ke(a,b){return Je(a,1,b)}
;function Le(a,b){Me||Ne();Oe||(Me(),Oe=!0);var c=Pe,d=Fc.get();d.set(a,b);c.f?c.f.next=d:c.b=d;c.f=d}
var Me;function Ne(){if(-1!=String(m.Promise).indexOf("[native code]")){var a=m.Promise.resolve(void 0);Me=function(){a.then(Qe)}}else Me=function(){var a=Qe;
!ra(m.setImmediate)||m.Window&&m.Window.prototype&&!F("Edge")&&m.Window.prototype.setImmediate==m.setImmediate?(Zd||(Zd=$d()),Zd(a)):m.setImmediate(a)}}
var Oe=!1,Pe=new Cc;function Qe(){for(var a;a=Pe.remove();){try{a.b.call(a.scope)}catch(b){Yd(b)}Na(Fc,a)}Oe=!1}
;!oe&&!Q||Q&&9<=Number(Ce)||oe&&R("1.9.1");Q&&R("9");Q&&R("9");!pe||R("528");oe&&R("1.9b")||Q&&R("8")||me&&R("9.5")||pe&&R("528");oe&&!R("8")||Q&&R("9");function Re(){this.b=""}
Re.prototype.ka=!0;Re.prototype.ja=function(){return this.b};
function Se(a){var b=new Re;b.b=a;return b}
Se("<!DOCTYPE html>");Se("");Se("<br>");function Te(a){this.b=a}
w(Te,pd);function Ue(){}
w(Ue,ob);Ue.prototype.clear=function(){var a=ke(this.ba(!0)),b=this;K(a,function(a){b.remove(a)})};(function(){var a;return re?(a=/Windows NT ([0-9.]+)/,(a=a.exec(E))?a[1]:"0"):qe?(a=/10[_.][0-9_.]+/,(a=a.exec(E))?a[0].replace(/_/g,"."):"10"):se?(a=/Android\s+([^\);]+)(\)|;)/,(a=a.exec(E))?a[1]:""):te||ue||ve?(a=/(?:iPhone|CPU)\s+OS\s+(\S+)/,(a=a.exec(E))?a[1].replace(/_/g,"."):""):""})();var Ve=F("Firefox"),We=Gc()||F("iPod"),Xe=F("iPad"),Ye=F("Android")&&!(od()||F("Firefox")||F("Opera")||F("Silk")),Ze=od(),$e=F("Safari")&&!(od()||F("Coast")||F("Opera")||F("Edge")||F("Silk")||F("Android"))&&!(Gc()||F("iPad")||F("iPod"));function af(){this.g=this.f=this.b=0;this.i="";var a=r("window.navigator.plugins"),b=r("window.navigator.mimeTypes"),a=a&&a["Shockwave Flash"],b=b&&b["application/x-shockwave-flash"],b=a&&b&&b.enabledPlugin&&a.description||"";if(a=b){var c=a.indexOf("Shockwave Flash");0<=c&&(a=a.substr(c+15));for(var c=a.split(" "),d="",a="",e=0,f=c.length;e<f;e++)if(d)if(a)break;else a=c[e];else d=c[e];d=d.split(".");c=parseInt(d[0],10)||0;d=parseInt(d[1],10)||0;e=0;if("r"==a.charAt(0)||"d"==a.charAt(0))e=parseInt(a.substr(1),
10)||0;a=[c,d,e]}else a=[0,0,0];this.i=b;b=a;this.b=b[0];this.f=b[1];this.g=b[2];if(0>=this.b){var g,h,k,n;if(Ab)try{g=new ActiveXObject("ShockwaveFlash.ShockwaveFlash")}catch(A){g=null}else k=document.body,n=document.createElement("object"),n.setAttribute("type","application/x-shockwave-flash"),g=k.appendChild(n);if(g&&"GetVariable"in g)try{h=g.GetVariable("$version")}catch(A){h=""}k&&n&&k.removeChild(n);(g=h||"")?(g=g.split(" ")[1].split(","),g=[parseInt(g[0],10)||0,parseInt(g[1],10)||0,parseInt(g[2],
10)||0]):g=[0,0,0];this.b=g[0];this.f=g[1];this.g=g[2]}}
na(af);function bf(a,b,c,d){b="string"==typeof b?b.split("."):[b,c,d];b[0]=parseInt(b[0],10)||0;b[1]=parseInt(b[1],10)||0;b[2]=parseInt(b[2],10)||0;return a.b>b[0]||a.b==b[0]&&a.f>b[1]||a.b==b[0]&&a.f==b[1]&&a.g>=b[2]}
;var cf;var df=E,df=df.toLowerCase();if(-1!=df.indexOf("android")){var ef=df.match(/android\D*(\d\.\d)[^\;|\)]*[\;\)]/);if(ef)cf=Number(ef[1]);else{var ff={cupcake:1.5,donut:1.6,eclair:2,froyo:2.2,gingerbread:2.3,honeycomb:3,"ice cream sandwich":4,jellybean:4.1,kitkat:4.4,lollipop:5.1,marshmallow:6,nougat:7.1},gf=[],hf=0,jf;for(jf in ff)gf[hf++]=jf;var kf=df.match("("+gf.join("|")+")");cf=kf?ff[kf[0]]:0}}else cf=void 0;function lf(a,b){var c;c=b instanceof ae?b:ee(b);a.href=ce(c)}
;function mf(a){nf();var b=new md;b.b=a;return b}
var nf=ma;function S(a,b){this.b=0;this.w=void 0;this.i=this.f=this.g=null;this.j=this.l=!1;if(a!=ma)try{var c=this;a.call(b,function(a){of(c,2,a)},function(a){of(c,3,a)})}catch(d){of(this,3,d)}}
function pf(){this.next=this.context=this.f=this.g=this.b=null;this.i=!1}
pf.prototype.reset=function(){this.context=this.f=this.g=this.b=null;this.i=!1};
var qf=new Ma(function(){return new pf},function(a){a.reset()},100);
function rf(a,b,c){var d=qf.get();d.g=a;d.f=b;d.context=c;return d}
function sf(a){if(a instanceof S)return a;var b=new S(ma);of(b,2,a);return b}
function tf(a){return new S(function(b,c){c(a)})}
S.prototype.then=function(a,b,c){return uf(this,ra(a)?a:null,ra(b)?b:null,c)};
kb(S);S.prototype.cancel=function(a){0==this.b&&Le(function(){var b=new vf(a);wf(this,b)},this)};
function wf(a,b){if(0==a.b)if(a.g){var c=a.g;if(c.f){for(var d=0,e=null,f=null,g=c.f;g&&(g.i||(d++,g.b==a&&(e=g),!(e&&1<d)));g=g.next)e||(f=g);e&&(0==c.b&&1==d?wf(c,b):(f?(d=f,d.next==c.i&&(c.i=d),d.next=d.next.next):xf(c),yf(c,e,3,b)))}a.g=null}else of(a,3,b)}
function zf(a,b){a.f||2!=a.b&&3!=a.b||Af(a);a.i?a.i.next=b:a.f=b;a.i=b}
function uf(a,b,c,d){var e=rf(null,null,null);e.b=new S(function(a,g){e.g=b?function(c){try{var e=b.call(d,c);a(e)}catch(n){g(n)}}:a;
e.f=c?function(b){try{var e=c.call(d,b);!p(e)&&b instanceof vf?g(b):a(e)}catch(n){g(n)}}:g});
e.b.g=a;zf(a,e);return e.b}
S.prototype.C=function(a){this.b=0;of(this,2,a)};
S.prototype.G=function(a){this.b=0;of(this,3,a)};
function of(a,b,c){if(0==a.b){a===c&&(b=3,c=new TypeError("Promise cannot resolve to itself"));a.b=1;var d;a:{var e=c,f=a.C,g=a.G;if(e instanceof S)zf(e,rf(f||ma,g||null,a)),d=!0;else{var h;if(e)try{h=!!e.$goog_Thenable}catch(n){h=!1}else h=!1;if(h)e.then(f,g,a),d=!0;else{if(sa(e))try{var k=e.then;if(ra(k)){Bf(e,k,f,g,a);d=!0;break a}}catch(n){g.call(a,n);d=!0;break a}d=!1}}}d||(a.w=c,a.b=b,a.g=null,Af(a),3!=b||c instanceof vf||Cf(a,c))}}
function Bf(a,b,c,d,e){function f(a){h||(h=!0,d.call(e,a))}
function g(a){h||(h=!0,c.call(e,a))}
var h=!1;try{b.call(a,g,f)}catch(k){f(k)}}
function Af(a){a.l||(a.l=!0,Le(a.D,a))}
function xf(a){var b=null;a.f&&(b=a.f,a.f=b.next,b.next=null);a.f||(a.i=null);return b}
S.prototype.D=function(){for(var a;a=xf(this);)yf(this,a,this.b,this.w);this.l=!1};
function yf(a,b,c,d){if(3==c&&b.f&&!b.i)for(;a&&a.j;a=a.g)a.j=!1;if(b.b)b.b.g=null,Df(b,c,d);else try{b.i?b.g.call(b.context):Df(b,c,d)}catch(e){Ef.call(null,e)}Na(qf,b)}
function Df(a,b,c){2==b?a.g.call(a.context,c):a.f&&a.f.call(a.context,c)}
function Cf(a,b){a.j=!0;Le(function(){a.j&&Ef.call(null,b)})}
var Ef=Yd;function vf(a){Oa.call(this,a)}
w(vf,Oa);vf.prototype.name="cancel";function T(a){D.call(this);this.l=1;this.i=[];this.j=0;this.b=[];this.g={};this.w=!!a}
w(T,D);l=T.prototype;l.subscribe=function(a,b,c){var d=this.g[a];d||(d=this.g[a]=[]);var e=this.l;this.b[e]=a;this.b[e+1]=b;this.b[e+2]=c;this.l=e+3;d.push(e);return e};
function fd(a,b,c,d){if(b=a.g[b]){var e=a.b;(b=wc(b,function(a){return e[a+1]==c&&e[a+2]==d}))&&a.L(b)}}
l.L=function(a){var b=this.b[a];if(b){var c=this.g[b];0!=this.j?(this.i.push(a),this.b[a+1]=ma):(c&&xc(c,a),delete this.b[a],delete this.b[a+1],delete this.b[a+2])}return!!b};
l.V=function(a,b){var c=this.g[a];if(c){for(var d=Array(arguments.length-1),e=1,f=arguments.length;e<f;e++)d[e-1]=arguments[e];if(this.w)for(e=0;e<c.length;e++){var g=c[e];Ff(this.b[g+1],this.b[g+2],d)}else{this.j++;try{for(e=0,f=c.length;e<f;e++)g=c[e],this.b[g+1].apply(this.b[g+2],d)}finally{if(this.j--,0<this.i.length&&0==this.j)for(;c=this.i.pop();)this.L(c)}}return 0!=e}return!1};
function Ff(a,b,c){Le(function(){a.apply(b,c)})}
l.clear=function(a){if(a){var b=this.g[a];b&&(K(b,this.L,this),delete this.g[a])}else this.b.length=0,this.g={}};
l.o=function(){T.B.o.call(this);this.clear();this.i.length=0};function Gf(a){this.b=a}
w(Gf,Ue);l=Gf.prototype;l.isAvailable=function(){if(!this.b)return!1;try{return this.b.setItem("__sak","1"),this.b.removeItem("__sak"),!0}catch(a){return!1}};
l.set=function(a,b){try{this.b.setItem(a,b)}catch(c){if(0==this.b.length)throw"Storage mechanism: Storage disabled";throw"Storage mechanism: Quota exceeded";}};
l.get=function(a){a=this.b.getItem(a);if(!t(a)&&null!==a)throw"Storage mechanism: Invalid value was encountered";return a};
l.remove=function(a){this.b.removeItem(a)};
l.ba=function(a){var b=0,c=this.b,d=new he;d.next=function(){if(b>=c.length)throw ge;var d=c.key(b++);if(a)return d;d=c.getItem(d);if(!t(d))throw"Storage mechanism: Invalid value was encountered";return d};
return d};
l.clear=function(){this.b.clear()};
l.key=function(a){return this.b.key(a)};function Hf(a){return(a=a.exec(E))?a[1]:""}
(function(){if(Ve)return Hf(/Firefox\/([0-9.]+)/);if(Q||ne||me)return Be;if(Ze)return Hf(/Chrome\/([0-9.]+)/);if($e&&!(Gc()||F("iPad")||F("iPod")))return Hf(/Version\/([0-9.]+)/);if(We||Xe){var a=/Version\/(\S+).*Mobile\/(\S+)/.exec(E);if(a)return a[1]+"."+a[2]}else if(Ye)return(a=Hf(/Android\s+([0-9.]+)/))?a:Hf(/Version\/([0-9.]+)/);return""})();function If(a,b,c,d){D.call(this);this.i=b||null;this.C="*";this.j=c||null;this.b=null;this.channel=d||null;this.K=!!a;this.D=u(this.J,this);window.addEventListener("message",this.D)}
aa(If,D);If.prototype.J=function(a){if(!("*"!=this.j&&a.origin!=this.j||this.i&&a.source!=this.i)&&t(a.data)){var b;try{b=Qa(a.data)}catch(c){return}if(!(null==b||this.K&&(this.b&&this.b!=b.id||this.channel&&this.channel!=b.channel))&&b)switch(b.event){case "listening":"null"!=a.origin?this.j=this.C=a.origin:Rc(Error("MessageEvent origin is null"),"WARNING");this.i=a.source;this.b=b.id;this.g&&(this.g(),this.g=null);break;case "command":this.l&&(this.w&&!(0<=uc(this.w,b.func))||this.l(b.func,b.args))}}};
If.prototype.sendMessage=function(a,b){var c=b||this.i;if(c){this.b&&(a.id=this.b);this.channel&&(a.channel=this.channel);try{var d=Sa(a);c.postMessage(d,this.C)}catch(e){Rc(e,"WARNING")}}};
If.prototype.o=function(){window.removeEventListener("message",this.D);D.prototype.o.call(this)};var Jf;var Kf=E,Lf=Kf.match(/\((iPad|iPhone|iPod)( Simulator)?;/);if(!Lf||2>Lf.length)Jf=void 0;else{var Mf=Kf.match(/\((iPad|iPhone|iPod)( Simulator)?; (U; )?CPU (iPhone )?OS (\d+_\d)[_ ]/);Jf=Mf&&6==Mf.length?Number(Mf[5].replace("_",".")):0}0<=Jf&&0<=E.search("Safari")&&E.search("Version");function Nf(a){var b=document;return t(a)?b.getElementById(a):a}
function Of(a){if(!a)return null;if(a.firstChild)return a.firstChild;for(;a&&!a.nextSibling;)a=a.parentNode;return a?a.nextSibling:null}
function Pf(a){if(!a)return null;if(!a.previousSibling)return a.parentNode;for(a=a.previousSibling;a&&a.lastChild;)a=a.lastChild;return a}
function Qf(a,b){for(var c=0;a;){if(b(a))return a;a=a.parentNode;c++}return null}
;function Rf(){var a=null;try{a=window.localStorage||null}catch(b){}this.b=a}
w(Rf,Gf);function Sf(){var a=null;try{a=window.sessionStorage||null}catch(b){}this.b=a}
w(Sf,Gf);function Tf(a){this.b=a||Wc();Uf||(Uf=Vf(this.b))}
function Vf(a){return(new S(function(b){try{var c={gapiHintOverride:a.gapiHintOverride,_c:{jsl:{h:a.gapiHintParams}},callback:b},d=ra(c)?{callback:c}:c||{};d._c&&d._c.jsl&&d._c.jsl.h||jb(d,{_c:{jsl:{h:I("GAPI_HINT_PARAMS",void 0)}}});if(d.gapiHintOverride||I("GAPI_HINT_OVERRIDE")){var e;var f=document.location.href;if(-1!=f.indexOf("?")){var f=(f||"").split("#")[0],g=f.split("?",2);e=td(1<g.length?g[1]:g[0])}else e={};var h=e.gapi_jsh;h&&jb(d,{_c:{jsl:{h:h}}})}Wd("client",d)}catch(k){Rc(k)}})).then(function(){})}
Tf.prototype.i=function(){var a=r("gapi.config.update");a("googleapis.config/auth/useFirstPartyAuth",!0);var b=this.b.apiaryHost;/^[\s\xa0]*$/.test(null==b?"":String(b))||a("googleapis.config/root",(-1==b.indexOf("://")?"//":"")+b);b=this.b.Ea;/^[\s\xa0]*$/.test(null==b?"":String(b))||a("googleapis.config/root-1p",(-1==b.indexOf("://")?"//":"")+b);b=I("SESSION_INDEX");a("googleapis.config/sessionIndex",b);r("gapi.client.setApiKey")(this.b.innertubeApiKey)};
Tf.prototype.f=function(){return{context:Vc(this.b)}};
Tf.prototype.g=function(a,b,c){var d,e=!1;0<c.timeout&&(d=O(function(){e||(e=!0,c.N&&c.N())},c.timeout));
Wf(this,a,b,function(a){if(!e)if(e=!0,d&&window.clearTimeout(d),a)c.F&&c.F(a);else if(c.onError)c.onError()})};
function Wf(a,b,c,d){var e={path:"/youtubei/"+a.b.innertubeApiVersion+"/"+b,headers:{"X-Goog-Visitor-Id":I("VISITOR_DATA")},method:"POST",body:Sa(c)},f=u(a.i,a);Uf.then(function(){f();r("gapi.client.request")(e).execute(d||ma)})}
var Uf=null;function Xf(){D.call(this);this.b=new T;Kb(this,ya(Lb,this.b))}
w(Xf,D);Xf.prototype.subscribe=function(a,b,c){return this.f?0:this.b.subscribe(a,b,c)};
Xf.prototype.L=function(a){return this.f?!1:this.b.L(a)};
Xf.prototype.l=function(a,b){this.f||this.b.V.apply(this.b,arguments)};var Yf=r("yt.pubsub.instance_")||new T;T.prototype.subscribe=T.prototype.subscribe;T.prototype.unsubscribeByKey=T.prototype.L;T.prototype.publish=T.prototype.V;T.prototype.clear=T.prototype.clear;q("yt.pubsub.instance_",Yf,void 0);var Zf=r("yt.pubsub.subscribedKeys_")||{};q("yt.pubsub.subscribedKeys_",Zf,void 0);var $f=r("yt.pubsub.topicToKeys_")||{};q("yt.pubsub.topicToKeys_",$f,void 0);var ag=r("yt.pubsub.isSynchronous_")||{};q("yt.pubsub.isSynchronous_",ag,void 0);
var bg=r("yt.pubsub.skipSubId_")||null;q("yt.pubsub.skipSubId_",bg,void 0);function cg(a,b){var c=dg();if(c){var d=c.subscribe(a,function(){if(!bg||bg!=d){var c=arguments,f;f=function(){Zf[d]&&b.apply(window,c)};
try{ag[a]?f():O(f,0)}catch(g){Rc(g)}}},void 0);
Zf[d]=!0;$f[a]||($f[a]=[]);$f[a].push(d);return d}return 0}
function eg(a){var b=dg();b&&("number"==typeof a?a=[a]:"string"==typeof a&&(a=[parseInt(a,10)]),K(a,function(a){b.unsubscribeByKey(a);delete Zf[a]}))}
function fg(a,b){var c=dg();return c?c.publish.apply(c,arguments):!1}
function gg(a){$f[a]&&(a=$f[a],K(a,function(a){Zf[a]&&delete Zf[a]}),a.length=0)}
function hg(a){var b=dg();if(b)if(b.clear(a),a)gg(a);else for(var c in $f)gg(c)}
function dg(){return r("yt.pubsub.instance_")}
;var ig=r("yt.pubsub2.instance_")||new T;T.prototype.subscribe=T.prototype.subscribe;T.prototype.unsubscribeByKey=T.prototype.L;T.prototype.publish=T.prototype.V;T.prototype.clear=T.prototype.clear;q("yt.pubsub2.instance_",ig,void 0);var jg=r("yt.pubsub2.subscribedKeys_")||{};q("yt.pubsub2.subscribedKeys_",jg,void 0);var kg=r("yt.pubsub2.topicToKeys_")||{};q("yt.pubsub2.topicToKeys_",kg,void 0);var lg=r("yt.pubsub2.isAsync_")||{};q("yt.pubsub2.isAsync_",lg,void 0);q("yt.pubsub2.skipSubKey_",null,void 0);
function U(a,b){var c=mg();c&&c.publish.call(c,a.toString(),a,b)}
function V(a,b){var c=mg();if(!c)return 0;var d=c.subscribe(a.toString(),function(c,f){if(!window.yt.pubsub2.skipSubKey_||window.yt.pubsub2.skipSubKey_!=d){var e=function(){if(jg[d])try{if(f&&a instanceof C&&a!=c)try{f=Ib(a.b,f)}catch(h){throw h.message="yt.pubsub2 cross-binary conversion error for "+a.toString()+": "+h.message,h;}b.call(window,f)}catch(h){Rc(h)}};
lg[a.toString()]?r("yt.scheduler.instance")?Ke(e):O(e,0):e()}});
jg[d]=!0;kg[a.toString()]||(kg[a.toString()]=[]);kg[a.toString()].push(d);return d}
function ng(a){var b=mg();b&&("number"==typeof a&&(a=[a]),K(a,function(a){b.unsubscribeByKey(a);delete jg[a]}))}
function mg(){return r("yt.pubsub2.instance_")}
;function og(a){"number"==typeof a&&(a=Math.round(a)+"px");return a}
;var pg=0,qg=r("yt.dom.dom.getNextId")||function(){return++pg};
q("yt.dom.dom.getNextId",qg,void 0);function rg(a,b,c){If.call(this,a,b,c||I("POST_MESSAGE_ORIGIN",void 0)||window.document.location.protocol+"//"+window.document.location.hostname,"widget");this.w=this.g=this.l=null}
aa(rg,If);var sg={log_event:"events",log_interaction:"interactions"},tg={},ug={},vg=0,fb=r("yt.logging.transport.logsQueue_")||{};q("yt.logging.transport.logsQueue_",fb,void 0);function wg(a,b){fb[a.endpoint]=fb[a.endpoint]||[];var c=fb[a.endpoint];c.push(a.va);ug[a.endpoint]=b;var d=Number(M("web_logging_max_batch")||0)||20;c.length>=d?xg():yg()}
function xg(){window.clearTimeout(vg);if(!eb()){for(var a in fb){var b=tg[a];if(!b){b=ug[a];if(!b)continue;b=new b;tg[a]=b}var c=b.f();c.requestTimeMs=Math.round(zb());c[sg[a]]=fb[a];b.g(a,c,{});delete fb[a]}eb()||yg()}}
function yg(){window.clearTimeout(vg);vg=O(xg,I("LOGGING_BATCH_TIMEOUT",1E4))}
;var zg=/\.vflset|-vfl[a-zA-Z0-9_+=-]+/,Ag=/-[a-zA-Z]{2,3}_[a-zA-Z]{2,3}(?=(\/|$))/;function Bg(a,b){var c=Cg(a),d=document.getElementById(c),e=d&&vb(d,"loaded"),f=d&&!e;if(e)b&&b();else{if(b){var e=cg(c,b),g=""+ta(b);Dg[g]=e}f||(d=Eg(a,c,function(){vb(d,"loaded")||(wb(d),fg(c),O(ya(hg,c),0))}))}}
function Eg(a,b,c){var d=document.createElement("script");d.id=b;d.onload=function(){c&&setTimeout(c,0)};
d.onreadystatechange=function(){switch(d.readyState){case "loaded":case "complete":d.onload()}};
d.src=a;a=document.getElementsByTagName("head")[0]||document.body;a.insertBefore(d,a.firstChild);return d}
function Fg(a,b){if(a&&b){var c=""+ta(b);(c=Dg[c])&&eg(c)}}
function Cg(a){var b=document.createElement("a");lf(b,a);a=b.href.replace(/^[a-zA-Z]+:\/\//,"//");return"js-"+rb(a)}
var Dg={};function Gg(a,b){if(window.spf){var c="";if(a){var d=a.indexOf("jsbin/"),e=a.lastIndexOf(".js"),f=d+6;-1<d&&-1<e&&e>f&&(c=a.substring(f,e),c=c.replace(zg,""),c=c.replace(Ag,""),c=c.replace("debug-",""),c=c.replace("tracing-",""))}spf.script.load(a,c,b)}else Bg(a,b)}
;var Hg=/cssbin\/(?:debug-)?([a-zA-Z0-9_-]+?)(?:-2x|-web|-rtl|-vfl|.css)/;function Ig(a){if(window.spf){var b=a.match(Hg);spf.style.load(a,b?b[1]:"",void 0)}else Jg(a)}
function Jg(a){var b=Kg(a),c=document.getElementById(b),d=c&&vb(c,"loaded");d||c&&!d||(c=Lg(a,b,function(){vb(c,"loaded")||(wb(c),fg(b),O(ya(hg,b),0))}))}
function Lg(a,b,c){var d=document.createElement("link");d.id=b;d.onload=function(){c&&setTimeout(c,0)};
a=mf(a);d.rel="stylesheet";d.href=a instanceof md&&a.constructor===md&&a.f===nd?a.b:"type_error:TrustedResourceUrl";(document.getElementsByTagName("head")[0]||document.body).appendChild(d);return d}
function Kg(a){var b=document.createElement("a");lf(b,a);a=b.href.replace(/^[a-zA-Z]+:\/\//,"//");return"css-"+rb(a)}
;function Mg(){if(!Ng&&!Og||!window.JSON)return null;var a;try{a=Ng.get("yt-player-two-stage-token")}catch(b){}if(!t(a))try{a=Og.get("yt-player-two-stage-token")}catch(b){}if(!t(a))return null;try{a=JSON.parse(a,void 0)}catch(b){}return a}
var Og,Pg=new Rf;Og=Pg.isAvailable()?new Te(Pg):null;var Ng,Qg=new Sf;Ng=Qg.isAvailable()?new Te(Qg):null;function Rg(a,b,c){Xf.call(this);this.g=a;this.i=b;this.j=c}
w(Rg,Xf);function bd(a,b,c){if(!a.f){var d=a.g;d.f||a.i!=d.b||(a={id:a.j,command:b},c&&(a.data=c),d.b.postMessage(Sa(a),d.i))}}
Rg.prototype.o=function(){this.i=this.g=null;Rg.B.o.call(this)};function Sg(a){var b=Qc("/signin?context=popup","next",document.location.protocol+"//"+document.domain+"/post_login"),b=Qc(b,"feature","sub_button");if(b=window.open(b,"loginPopup","width=375,height=440,resizable=yes,scrollbars=yes",!0)){var c=cg("LOGGED_IN",function(b){eg(I("LOGGED_IN_PUBSUB_KEY",void 0));G("LOGGED_IN",!0);a(b)});
G("LOGGED_IN_PUBSUB_KEY",c);b.moveTo((screen.width-375)/2,(screen.height-440)/2)}}
q("yt.pubsub.publish",fg,void 0);var Tg=!!window.google_async_iframe_id,rd=Tg&&window.parent||window;var Ug=null;function Vg(){var a=I("BG_I",null),b=I("BG_IU",null),c=I("BG_P",void 0);b?Gg(b,function(){Ug=new botguard.bg(c)}):a&&(eval(a),Ug=new botguard.bg(c))}
function Wg(){return null!=Ug}
function Xg(){return Ug?Ug.invoke():null}
;var Yg=[],Zg=!1;function $g(){function a(){Zg=!0;"google_ad_status"in window?G("DCLKSTAT",1):G("DCLKSTAT",2)}
Gg("//static.doubleclick.net/instream/ad_status.js",a);Yg.push(Ke(function(){Zg||"google_ad_status"in window||(Fg("//static.doubleclick.net/instream/ad_status.js",a),G("DCLKSTAT",3))},5E3))}
function ah(){return parseInt(I("DCLKSTAT",0),10)}
;var db=r("yt.events.events.listeners_")||{};q("yt.events.events.listeners_",db,void 0);var bh=r("yt.events.events.counter_")||{count:0};q("yt.events.events.counter_",bh,void 0);function ch(a,b,c){a.addEventListener&&("mouseenter"!=b||"onmouseenter"in document?"mouseleave"!=b||"onmouseenter"in document?"mousewheel"==b&&"MozBoxSizing"in document.documentElement.style&&(b="MozMousePixelScroll"):b="mouseout":b="mouseover");return cb(function(d){return d[0]==a&&d[1]==b&&d[2]==c&&0==d[4]})}
function dh(a,b,c){if(!a||!a.addEventListener&&!a.attachEvent)return"";var d=ch(a,b,c);if(d)return d;var d=++bh.count+"",e=!("mouseenter"!=b&&"mouseleave"!=b||!a.addEventListener||"onmouseenter"in document),f;f=e?function(d){d=new xb(d);if(!Qf(d.relatedTarget,function(b){return b==a}))return d.currentTarget=a,d.type=b,c.call(a,d)}:function(b){b=new xb(b);
b.currentTarget=a;return c.call(a,b)};
f=Sc(f);a.addEventListener?("mouseenter"==b&&e?b="mouseover":"mouseleave"==b&&e?b="mouseout":"mousewheel"==b&&"MozBoxSizing"in document.documentElement.style&&(b="MozMousePixelScroll"),a.addEventListener(b,f,!1)):a.attachEvent("on"+b,f);db[d]=[a,b,c,f,!1];return d}
function eh(a){a&&("string"==typeof a&&(a=[a]),K(a,function(a){if(a in db){var b=db[a],d=b[0],e=b[1],f=b[3],b=b[4];d.removeEventListener?d.removeEventListener(e,f,b):d.detachEvent&&d.detachEvent("on"+e,f);delete db[a]}}))}
;function fh(a,b,c,d,e,f,g){function h(){4==(k&&"readyState"in k?k.readyState:0)&&b&&Sc(b)(k)}
var k=Fb&&Fb();if(!("open"in k))return null;"onloadend"in k?k.addEventListener("loadend",h,!1):k.onreadystatechange=h;c=(c||"GET").toUpperCase();d=d||"";k.open(c,a,!0);f&&(k.responseType=f);g&&(k.withCredentials=!0);f="POST"==c;if(e=gh(a,e))for(var n in e)k.setRequestHeader(n,e[n]),"content-type"==n.toLowerCase()&&(f=!1);f&&k.setRequestHeader("Content-Type","application/x-www-form-urlencoded");k.send(d);return k}
function gh(a,b){b=b||{};var c;c=void 0;c=window.location.href;var d=L(a)[1]||null,e=Lc(L(a)[3]||null);d&&e?(d=c,c=L(a),d=L(d),c=c[3]==d[3]&&c[1]==d[1]&&c[4]==d[4]):c=e?Lc(L(c)[3]||null)==e&&(Number(L(c)[4]||null)||null)==(Number(L(a)[4]||null)||null):!0;for(var f in hh){if((e=d=I(hh[f]))&&!(e=c)){var g=a,e=f,h=I("CORS_HEADER_WHITELIST")||{};e=(g=Lc(L(g)[3]||null))?(h=h[g])?0<=uc(h,e):!1:!0}e&&(b[f]=d)}return b}
function ih(a,b){b.method="POST";b.A||(b.A={});jh(a,b)}
function kh(a,b){var c=I("XSRF_FIELD_NAME",void 0),d;b.headers&&(d=b.headers["Content-Type"]);return!b.ob&&(!Lc(L(a)[3]||null)||b.withCredentials||Lc(L(a)[3]||null)==document.location.hostname)&&"POST"==b.method&&(!d||"application/x-www-form-urlencoded"==d)&&!(b.A&&b.A[c])}
function jh(a,b){var c=b.format||"JSON";b.La&&(a=document.location.protocol+"//"+document.location.hostname+(document.location.port?":"+document.location.port:"")+a);var d=I("XSRF_FIELD_NAME",void 0),e=I("XSRF_TOKEN",void 0),f=b.na;f&&(f[d]&&delete f[d],a=ud(a,f||{}));var g=b.postBody||"",f=b.A;kh(a,b)&&(f||(f={}),f[d]=e);f&&t(g)&&(d=td(g),jb(d,f),g=b.wa&&"JSON"==b.wa?JSON.stringify(d):vd(d));var h=!1,k,n=fh(a,function(a){if(!h){h=!0;k&&window.clearTimeout(k);var d=Gb(a),e=null;if(d||400<=a.status&&
500>a.status)e=lh(c,a,b.nb);if(d)a:if(204==a.status)d=!0;else{switch(c){case "XML":d=0==parseInt(e&&e.return_code,10);break a;case "RAW":d=!0;break a}d=!!e}var e=e||{},f=b.context||m;d?b.F&&b.F.call(f,a,e):b.onError&&b.onError.call(f,a,e);b.ma&&b.ma.call(f,a,e)}},b.method,g,b.headers,b.responseType,b.withCredentials);
b.N&&0<b.timeout&&(k=O(function(){h||(h=!0,n.abort(),window.clearTimeout(k),b.N.call(b.context||m,n))},b.timeout))}
function lh(a,b,c){var d=null;switch(a){case "JSON":a=b.responseText;b=b.getResponseHeader("Content-Type")||"";a&&0<=b.indexOf("json")&&(d=Ra(a));break;case "XML":if(b=(b=b.responseXML)?mh(b):null)d={},K(b.getElementsByTagName("*"),function(a){d[a.tagName]=nh(a)})}c&&oh(d);
return d}
function oh(a){if(sa(a))for(var b in a){var c;(c="html_content"==b)||(c=b.length-5,c=0<=c&&b.indexOf("_html",c)==c);if(c){c=b;var d;d=Se(a[b]);a[c]=d}else oh(a[b])}}
function mh(a){return a?(a=("responseXML"in a?a.responseXML:a).getElementsByTagName("root"))&&0<a.length?a[0]:null:null}
function nh(a){var b="";K(a.childNodes,function(a){b+=a.nodeValue});
return b}
var hh={"X-Goog-Visitor-Id":"SANDBOXED_VISITOR_ID","X-YouTube-Client-Name":"INNERTUBE_CONTEXT_CLIENT_NAME","X-YouTube-Client-Version":"INNERTUBE_CONTEXT_CLIENT_VERSION","X-Youtube-Identity-Token":"ID_TOKEN","X-YouTube-Page-CL":"PAGE_CL","X-YouTube-Page-Label":"PAGE_BUILD_LABEL","X-YouTube-Variants-Checksum":"VARIANTS_CHECKSUM"};var ph=['video/mp4; codecs="avc1.42001E, mp4a.40.2"','video/webm; codecs="vp8.0, vorbis"'],qh=['audio/mp4; codecs="mp4a.40.2"'];function rh(){var a=!!I("WIDGET_ID_ENFORCE"),a=this.f=new rg(a),b=u(this.Za,this);a.l=b;a.w=null;this.f.channel="widget";if(a=I("WIDGET_ID"))this.f.b=a;this.i=[];this.l=!1;this.j={}}
l=rh.prototype;l.Za=function(a,b){if("addEventListener"==a&&b){var c=b[0];this.j[c]||"onReady"==c||(this.addEventListener(c,sh(this,c)),this.j[c]=!0)}else this.Ba(a,b)};
l.Ba=function(){};
function sh(a,b){return u(function(a){this.sendMessage(b,a)},a)}
l.addEventListener=function(){};
l.Ha=function(){this.l=!0;this.sendMessage("initialDelivery",this.ia());this.sendMessage("onReady");K(this.i,this.za,this);this.i=[]};
l.ia=function(){return null};
function th(a,b){a.sendMessage("infoDelivery",b)}
l.za=function(a){this.l?this.f.sendMessage(a):this.i.push(a)};
l.sendMessage=function(a,b){this.za({event:a,info:void 0==b?null:b})};
l.dispose=function(){this.f=null};var uh;if(Tg&&!qd()){var vh="."+Aa.domain;try{for(;2<vh.split(".").length&&!qd();)Aa.domain=vh=vh.substr(vh.indexOf(".")+1),rd=window.parent}catch(a){}qd()||(rd=window)}uh=rd;var Ie=new Ee(1,uh);if("complete"==uh.document.readyState)uh.b||He();else if(Ie.f){var wh=function(){uh.b||He()};
uh.addEventListener?uh.addEventListener("load",wh,sb?void 0:!1):uh.attachEvent&&uh.attachEvent("onload",wh)};function xh(a,b,c,d,e){c={name:c||I("INNERTUBE_CONTEXT_CLIENT_NAME",1),version:d||I("INNERTUBE_CONTEXT_CLIENT_VERSION",void 0)};e=window&&window.yterr||e||!1;if(a&&e&&!(5<=yh)){e=a.stacktrace;d=a.columnNumber;var f=r("window.location.href");if(t(a))a={message:a,name:"Unknown error",lineNumber:"Not available",fileName:f,stack:"Not available"};else{var g,h,k=!1;try{g=a.lineNumber||a.line||"Not available"}catch(H){g="Not available",k=!0}try{h=a.fileName||a.filename||a.sourceURL||m.$googDebugFname||f}catch(H){h=
"Not available",k=!0}a=!k&&a.lineNumber&&a.fileName&&a.stack&&a.message&&a.name?a:{message:a.message||"Not available",name:a.name||"UnknownError",lineNumber:g,fileName:h,stack:a.stack||"Not available"}}e=e||a.stack;g=a.lineNumber.toString();isNaN(g)||isNaN(d)||(g=g+":"+d);if(!(zh[a.message]||0<=e.indexOf("/YouTubeCenter.js")||0<=e.indexOf("/mytube.js"))){h=a.fileName;b={na:{a:"logerror",t:"jserror",type:a.name,msg:a.message.substr(0,1E3),line:g,level:b||"ERROR"},A:{url:I("PAGE_NAME",window.location.href),
file:h},method:"POST"};e&&(b.A.stack=e);for(var n in c)b.A["client."+n]=c[n];if(n=I("LATEST_ECATCHER_SERVICE_TRACKING_PARAMS",void 0))for(var A in n)b.A[A]=n[A];jh("/error_204",b);zh[a.message]=!0;yh++}}}
var zh={},yh=0;function Ah(){this.b=Wc()}
Ah.prototype.f=function(){return{context:Vc(this.b)}};
Ah.prototype.g=function(a,b,c){b={headers:{"Content-Type":"application/json","X-Goog-Visitor-Id":I("VISITOR_DATA")},A:b,wa:"JSON",N:c.N,F:c.F,onError:c.onError,timeout:c.timeout,withCredentials:!0};a:{c=[];var d=Ca(String(m.location.href)),e=m.__OVERRIDE_SID;null==e&&(e=(new Za(document)).get("SID"));if(e&&(d=(e=0==d.indexOf("https:")||0==d.indexOf("chrome-extension:"))?m.__SAPISID:m.__APISID,null==d&&(d=(new Za(document)).get(e?"SAPISID":"APISID")),d)){var e=e?"SAPISIDHASH":"APISIDHASH",f=String(m.location.href);
c=f&&d&&e?[e,gd(Ca(f),d,c||null)].join(" "):null;break a}c=null}c&&(b.headers.Authorization=c,b.headers["X-Goog-AuthUser"]=I("SESSION_INDEX",0));c=this.b.kb;c.startsWith("http")||(c="//"+c);ih(""+c+("/youtubei/"+this.b.innertubeApiVersion+"/"+a)+"?alt=json&key="+this.b.innertubeApiKey,b)};var Bh={},Ch=0;function Dh(a,b){a&&(I("USE_NET_AJAX_FOR_PING_TRANSPORT",!1)?fh(a,b):Eh(a,b))}
function Eh(a,b){var c=new Image,d=""+Ch++;Bh[d]=c;c.onload=c.onerror=function(){b&&Bh[d]&&b();delete Bh[d]};
c.src=a}
;function Fh(){var a=hb(Gh);return new S(function(b,c){a.F=function(a){Gb(a)?b(a):c(new Hh("Request failed, status="+a.status,"net.badstatus"))};
a.onError=function(){c(new Hh("Unknown request error","net.unknown"))};
a.N=function(){c(new Hh("Request timed out","net.timeout"))};
jh("//googleads.g.doubleclick.net/pagead/id",a)})}
function Hh(a,b){Oa.call(this,a+", errorCode="+b);this.errorCode=b;this.name="PromiseAjaxError"}
aa(Hh,Oa);function Ih(a){return(0==a.search("cue")||0==a.search("load"))&&"loadModule"!=a}
function Jh(a,b,c){t(a)&&(a={mediaContentUrl:a,startSeconds:b,suggestedQuality:c});b=/\/([ve]|embed)\/([^#?]+)/.exec(a.mediaContentUrl);a.videoId=b&&b[2]?b[2]:null;return Kh(a)}
function Kh(a,b,c){if(sa(a)){b="endSeconds startSeconds mediaContentUrl suggestedQuality videoId two_stage_token".split(" ");c={};for(var d=0;d<b.length;d++){var e=b[d];a[e]&&(c[e]=a[e])}return c}return{videoId:a,startSeconds:b,suggestedQuality:c}}
function Lh(a,b,c,d){if(sa(a)&&!pa(a)){b="playlist list listType index startSeconds suggestedQuality".split(" ");c={};for(d=0;d<b.length;d++){var e=b[d];a[e]&&(c[e]=a[e])}return c}c={index:b,startSeconds:c,suggestedQuality:d};t(a)&&16==a.length?c.list="PL"+a:c.playlist=a;return c}
function Mh(a){var b=a.video_id||a.videoId;if(t(b)){var c=Mg()||{},d=Mg()||{};p(void 0)?d[b]=void 0:delete d[b];var e=v()+3E5,f=Og;if(f&&window.JSON){t(d)||(d=JSON.stringify(d,void 0));try{f.set("yt-player-two-stage-token",d,e)}catch(g){f.remove("yt-player-two-stage-token")}}(b=c[b])&&(a.two_stage_token=b)}}
;function Nh(){if(null==r("_lact",window)){var a=parseInt(I("LACT"),10),a=isFinite(a)?v()-Math.max(a,0):-1;q("_lact",a,window);-1==a&&Oh();dh(document,"keydown",Oh);dh(document,"keyup",Oh);dh(document,"mousedown",Oh);dh(document,"mouseup",Oh);cg("page-mouse",Oh);cg("page-scroll",Oh);cg("page-resize",Oh)}}
function Oh(){null==r("_lact",window)&&(Nh(),r("_lact",window));var a=v();q("_lact",a,window);fg("USER_ACTIVE")}
function Ph(){var a=r("_lact",window);return null==a?-1:Math.max(v()-a,0)}
;function Qh(a,b,c){D.call(this);this.b=a;this.i=c;this.j=dh(window,"message",u(this.l,this));this.g=new Rg(this,a,b);Kb(this,ya(Lb,this.g))}
w(Qh,D);Qh.prototype.l=function(a){var b;if(b=!this.f)if(b=a.origin==this.i)a:{b=this.b;do{var c;b:{c=a.source;do{if(c==b){c=!0;break b}if(c==c.parent)break;c=c.parent}while(null!=c);c=!1}if(c){b=!0;break a}b=b.opener}while(null!=b);b=!1}if(b&&(a=a.data,t(a))){try{a=Qa(a)}catch(d){return}a.command&&(b=this.g,b.f||b.l("command",a.command,a.data))}};
Qh.prototype.o=function(){eh(this.j);this.b=null;Qh.B.o.call(this)};function Rh(a){for(var b=0;b<a.length;b++){var c=a[b];"send_follow_on_ping_action"==c.name&&c.data&&c.data.follow_on_url&&Dh(c.data.follow_on_url)}}
;function Sh(a,b,c,d){var e={};e.eventTimeMs=Math.round(d||zb());e[a]=b;M("web_gel_lact")&&(e.context={lastActivityMs:Ph()});wg({endpoint:"log_event",va:e},c)}
;function Th(a,b,c,d){Uh(a,{attachChild:{csn:b,parentVisualElement:Eb(c),visualElements:[Eb(d)]}},void 0)}
function Vh(a,b,c){c=vc(c,function(a){return Eb(a)});
Uh(a,{visibilityUpdate:{csn:b,visualElements:c}})}
function Uh(a,b,c){b.eventTimeMs=Math.round(zb());b.lactMs=Ph();c&&(b.clientData=Wh(c));wg({endpoint:"log_interaction",va:b},a)}
function Wh(a){var b={};a.analyticsChannelData&&(b.analyticsDatas=vc(a.analyticsChannelData,function(a){return{tabName:a.tabName,cardName:a.cardName,isChannelScreen:a.isChannelScreen,insightId:a.insightId,externalChannelId:a.externalChannelId,externalContentOwnerId:a.externalContentOwnerId}}));
return{playbackData:{clientPlaybackNonce:a.clientPlaybackNonce},analyticsChannelData:b,externalLinkData:a.externalLinkData}}
;function Xh(a,b){ad.call(this,b);this.b=a;this.start()}
w(Xh,ad);Xh.prototype.addEventListener=function(a,b){this.b.addEventListener(a,b)};
Xh.prototype.removeEventListener=function(a,b){this.b.removeEventListener(a,b)};
function dd(a,b){switch(a){case "loadVideoById":return b=Kh(b),Mh(b),[b];case "cueVideoById":return b=Kh(b),Mh(b),[b];case "loadVideoByPlayerVars":return Mh(b),[b];case "cueVideoByPlayerVars":return Mh(b),[b];case "loadPlaylist":return b=Lh(b),Mh(b),[b];case "cuePlaylist":return b=Lh(b),Mh(b),[b];case "seekTo":return[b.seconds,b.allowSeekAhead];case "playVideoAt":return[b.index];case "setVolume":return[b.volume];case "setPlaybackQuality":return[b.suggestedQuality];case "setPlaybackRate":return[b.suggestedRate];
case "setLoop":return[b.loopPlaylists];case "setShuffle":return[b.shufflePlaylist];case "getOptions":return[b.module];case "getOption":return[b.module,b.option];case "setOption":return[b.module,b.option,b.value];case "handleGlobalKeyDown":return[b.keyCode,b.shiftKey]}return[]}
function ed(a,b){switch(a){case "isMuted":return{muted:b};case "getVolume":return{volume:b};case "getPlaybackRate":return{playbackRate:b};case "getAvailablePlaybackRates":return{availablePlaybackRates:b};case "getVideoLoadedFraction":return{videoLoadedFraction:b};case "getPlayerState":return{playerState:b};case "getCurrentTime":return{currentTime:b};case "getPlaybackQuality":return{playbackQuality:b};case "getAvailableQualityLevels":return{availableQualityLevels:b};case "getDuration":return{duration:b};
case "getVideoUrl":return{videoUrl:b};case "getVideoEmbedCode":return{videoEmbedCode:b};case "getPlaylist":return{playlist:b};case "getPlaylistIndex":return{playlistIndex:b};case "getOptions":return{options:b};case "getOption":return{option:b}}}
Xh.prototype.ha=function(a,b){switch(a){case "onReady":return;case "onStateChange":return{playerState:b};case "onPlaybackQualityChange":return{playbackQuality:b};case "onPlaybackRateChange":return{playbackRate:b};case "onError":return{errorCode:b}}return Xh.B.ha.call(this,a,b)};
Xh.prototype.o=function(){Xh.B.o.call(this);delete this.b};function Yh(a){rh.call(this);this.b=a;this.g=[];this.addEventListener("onReady",u(this.Va,this));this.addEventListener("onVideoProgress",u(this.gb,this));this.addEventListener("onVolumeChange",u(this.hb,this));this.addEventListener("onApiChange",u(this.ab,this));this.addEventListener("onPlaybackQualityChange",u(this.cb,this));this.addEventListener("onPlaybackRateChange",u(this.eb,this));this.addEventListener("onStateChange",u(this.fb,this))}
w(Yh,rh);l=Yh.prototype;l.Ba=function(a,b){if(this.b[a]){b=b||[];if(0<b.length&&Ih(a)){var c;c=b;if(sa(c[0])&&!pa(c[0]))c=c[0];else{var d={};switch(a){case "loadVideoById":case "cueVideoById":d=Kh.apply(window,c);break;case "loadVideoByUrl":case "cueVideoByUrl":d=Jh.apply(window,c);break;case "loadPlaylist":case "cuePlaylist":d=Lh.apply(window,c)}c=d}Mh(c);b.length=1;b[0]=c}this.b[a].apply(this.b,b);Ih(a)&&th(this,this.ia())}};
l.Va=function(){var a=u(this.Ha,this);this.f.g=a};
l.addEventListener=function(a,b){this.g.push({eventType:a,listener:b});this.b.addEventListener(a,b)};
l.ia=function(){if(!this.b)return null;var a=this.b.getApiInterface();xc(a,"getVideoData");for(var b={apiInterface:a},c=0,d=a.length;c<d;c++){var e=a[c],f=e;if(0==f.search("get")||0==f.search("is")){var f=e,g=0;0==f.search("get")?g=3:0==f.search("is")&&(g=2);f=f.charAt(g).toLowerCase()+f.substr(g+1);try{var h=this.b[e]();b[f]=h}catch(k){}}}b.videoData=this.b.getVideoData();b.currentTimeLastUpdated_=v()/1E3;return b};
l.fb=function(a){a={playerState:a,currentTime:this.b.getCurrentTime(),duration:this.b.getDuration(),videoData:this.b.getVideoData(),videoStartBytes:0,videoBytesTotal:this.b.getVideoBytesTotal(),videoLoadedFraction:this.b.getVideoLoadedFraction(),playbackQuality:this.b.getPlaybackQuality(),availableQualityLevels:this.b.getAvailableQualityLevels(),videoUrl:this.b.getVideoUrl(),playlist:this.b.getPlaylist(),playlistIndex:this.b.getPlaylistIndex(),currentTimeLastUpdated_:v()/1E3,playbackRate:this.b.getPlaybackRate(),
mediaReferenceTime:this.b.getMediaReferenceTime()};this.b.getProgressState&&(a.progressState=this.b.getProgressState());this.b.getStoryboardFormat&&(a.storyboardFormat=this.b.getStoryboardFormat());th(this,a)};
l.cb=function(a){th(this,{playbackQuality:a})};
l.eb=function(a){th(this,{playbackRate:a})};
l.ab=function(){for(var a=this.b.getOptions(),b={namespaces:a},c=0,d=a.length;c<d;c++){var e=a[c],f=this.b.getOptions(e);b[e]={options:f};for(var g=0,h=f.length;g<h;g++){var k=f[g],n=this.b.getOption(e,k);b[e][k]=n}}this.sendMessage("apiInfoDelivery",b)};
l.hb=function(){th(this,{muted:this.b.isMuted(),volume:this.b.getVolume()})};
l.gb=function(a){a={currentTime:a,videoBytesLoaded:this.b.getVideoBytesLoaded(),videoLoadedFraction:this.b.getVideoLoadedFraction(),currentTimeLastUpdated_:v()/1E3,playbackRate:this.b.getPlaybackRate(),mediaReferenceTime:this.b.getMediaReferenceTime()};this.b.getProgressState&&(a.progressState=this.b.getProgressState());th(this,a)};
l.dispose=function(){Yh.B.dispose.call(this);for(var a=0;a<this.g.length;a++){var b=this.g[a];this.b.removeEventListener(b.eventType,b.listener)}this.g=[]};function Zh(a){Oa.call(this,a.message||a.description||a.name);this.b=a instanceof vf}
w(Zh,Oa);Zh.prototype.name="BiscottiError";function $h(a,b){this.f=a;this.b=b}
$h.prototype.then=function(a,b,c){try{if(p(this.f))return a?sf(a.call(c,this.f)):sf(this.f);if(p(this.b)){if(!b)return tf(this.b);var d=b.call(c,this.b);return!p(d)&&this.b.b?tf(this.b):sf(d)}throw Error("Invalid Result_ state");}catch(e){return tf(e)}};
kb($h);var Gh={format:"RAW",method:"GET",timeout:5E3,withCredentials:!0},ai=null;function bi(a){a=a.responseText;if(0!=a.lastIndexOf(")]}'",0))return ci(""),ai=new $h(""),"";a=JSON.parse(a.substr(4)).id;ci(a);ai=new $h(a);di(18E5,2);return a}
function ei(a,b){var c=new Zh(b);ci("");ai=new $h(void 0,c);0<a&&di(12E4,a-1);throw c;}
function di(a,b){O(function(){var a=u(ei,m,b),a=Fh().then(bi,a);uf(a,null,ma,void 0)},a)}
function ci(a){q("yt.www.ads.biscotti.lastId_",a,void 0)}
;function fi(){return M("enable_youtubei_innertube")?Ah:Tf}
;var gi=r("yt.logging.latency.usageStats_")||{};q("yt.logging.latency.usageStats_",gi,void 0);var hi=0;function ii(a){gi[a]=gi[a]||{count:0};var b=gi[a];b.count++;b.time=zb();hi||(hi=Je(ji,0,5E3));return 10<b.count?(11==b.count&&xh(Error("CSI data exceeded logging limit with key: "+a)),!0):!1}
function ji(){var a=zb(),b;for(b in gi)6E4<a-gi[b].time&&delete gi[b];hi=0}
;function ki(){var a=I("ROOT_VE_TYPE",void 0);return a?new Cb(void 0,a,void 0):null}
function li(){var a=I("client-screen-nonce",void 0);a||(a=I("EVENT_ID",void 0));return a}
;function mi(a){D.call(this);this.b=[];this.g=a||this}
w(mi,D);function ni(a,b,c,d){d=Sc(u(d,a.g));d={target:b,name:c,ga:d};b.addEventListener(c,d.ga,void 0);a.b.push(d)}
function oi(a){for(;a.b.length;){var b=a.b.pop();b.target.removeEventListener(b.name,b.ga)}}
mi.prototype.o=function(){oi(this);mi.B.o.call(this)};var pi={vc:!0},qi={ad_at:"adType",cpn:"clientPlaybackNonce",csn:"clientScreenNonce",is_nav:"isNavigation",yt_lt:"loadType",yt_ad:"isMonetized",yt_ad_pr:"prerollAllowed",yt_red:"isRedSubscriber",yt_vis:"isVisible",docid:"videoId",plid:"videoId"},ri="ap c cver ei yt_fss yt_li".split(" "),si=["isNavigation","isMonetized","prerollAllowed","isRedSubscriber","isVisible"],ti=u(Jb.clearResourceTimings||Jb.webkitClearResourceTimings||Jb.mozClearResourceTimings||Jb.msClearResourceTimings||Jb.oClearResourceTimings||
ma,Jb);
function ui(a){if("_"!=a[0]){var b=a;Jb.mark&&(0==b.lastIndexOf("mark_",0)||(b="mark_"+b),Jb.mark(b))}var b=vi(),c=zb();b[a]&&(b["_"+a]=b["_"+a]||[b[a]],b["_"+a].push(c));b[a]=c;wi()["tick_"+a]=void 0;zb();M("csi_on_gel")?(b=xi(),"_start"==a?ii("baseline_"+b)||Sh("latencyActionBaselined",{clientActionNonce:b},Ah,void 0):ii("tick_"+a+"_"+b)||Sh("latencyActionTicked",{tickName:a,clientActionNonce:b},Ah,void 0),a=!0):a=!1;if(a=!a)a=!r("yt.timing.pingSent_");if(a&&(b=I("TIMING_ACTION",void 0),a=vi(),
r("yt.timing.ready_")&&b&&a._start&&yi())){b=!0;c=I("TIMING_WAIT",[]);if(c.length)for(var d=0,e=c.length;d<e;++d)if(!(c[d]in a)){b=!1;break}b&&zi()}}
function Ai(){var a=Bi().info.yt_lt="hot_bg";wi().info_yt_lt=a;if(M("csi_on_gel"))if("yt_lt"in qi){var b={},c=qi.yt_lt;0<=uc(si,c)&&(a=!!a);b[c]=a;a=xi();c=Object.keys(b).join("");ii("info_"+c+"_"+a)||(b.clientActionNonce=a,Sh("latencyActionInfo",b,Ah))}else"yt_lt"in ri||Rc(Error("Unknown label yt_lt logged with GEL CSI."))}
function yi(){var a=vi();if(a.aft)return a.aft;for(var b=I("TIMING_AFT_KEYS",["ol"]),c=b.length,d=0;d<c;d++){var e=a[b[d]];if(e)return e}return NaN}
function zi(){if(!M("csi_on_gel")){var a=vi(),b=Bi().info,c=a._start,d;for(d in a)if(0==d.lastIndexOf("_",0)&&pa(a[d])){var e=d.slice(1);if(e in pi){var f=vc(a[d],function(a){return Math.round(a-c)});
b["all_"+e]=f.join()}delete a[d]}e=!!b.ap;if(f=r("yt.timing.reportbuilder_")){if(f=f(a,b,void 0))Ci(f,e),Di(),ti(),Ei(!1,void 0),I("TIMING_ACTION")&&G("PREVIOUS_ACTION",I("TIMING_ACTION")),G("TIMING_ACTION","")}else{var g=I("CSI_SERVICE_NAME","youtube"),f={v:2,s:g,action:I("TIMING_ACTION",void 0)},h=b.srt;void 0!==a.srt&&delete b.srt;if(b.h5jse){var k=window.location.protocol+r("ytplayer.config.assets.js");(k=Jb.getEntriesByName?Jb.getEntriesByName(k)[0]:null)?b.h5jse=Math.round(b.h5jse-k.responseEnd):
delete b.h5jse}a.aft=yi();Fi()&&"youtube"==g&&(Ai(),g=a.vc,k=a.pbs,delete a.aft,b.aft=Math.round(k-g));for(var n in b)"_"!=n.charAt(0)&&(f[n]=b[n]);a.ps=zb();b={};n=[];for(d in a)"_"!=d.charAt(0)&&(g=Math.round(a[d]-c),b[d]=g,n.push(d+"."+g));f.rt=n.join(",");(a=r("ytdebug.logTiming"))&&a(f,b);Ci(f,e,void 0);U(fc,new ec(b.aft+(h||0)))}}}
function Ci(a,b,c){if(M("debug_csi_data")){var d=r("yt.timing.csiData");d||(d=[],q("yt.timing.csiData",d,void 0));d.push({page:location.href,time:new Date,args:a})}var d="",e;for(e in a)d+="&"+e+"="+a[e];a="/csi_204?"+d.substring(1);if(window.navigator&&window.navigator.sendBeacon&&b)try{window.navigator&&window.navigator.sendBeacon&&window.navigator.sendBeacon(a,"")||Dh(a,void 0)}catch(f){Dh(a,void 0)}else Dh(a);Ei(!0,c)}
function xi(){var a=Bi().nonce;if(!a){var b;a:{if(window.crypto&&window.crypto.getRandomValues)try{var c=Array(16),d=new Uint8Array(16);window.crypto.getRandomValues(d);for(a=0;a<c.length;a++)c[a]=d[a];b=c;break a}catch(e){}b=Array(16);for(c=0;16>c;c++){d=v();for(a=0;a<d%23;a++)b[c]=Math.random();b[c]=Math.floor(256*Math.random())}if(wd)for(c=1,d=0;d<wd.length;d++)b[c%16]=b[c%16]^b[(c-1)%16]/4^wd.charCodeAt(d),c++}c=[];for(d=0;d<b.length;d++)c.push("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_".charAt(b[d]&
63));a=c.join("");Bi().nonce=a}return a}
function vi(){return Bi().tick}
function wi(){var a=Bi();"gel"in a||(a.gel={});return a.gel}
function Bi(){return r("ytcsi.data_")||Di()}
function Di(){var a={tick:{},info:{}};q("ytcsi.data_",a,void 0);return a}
function Ei(a,b){q("yt.timing."+(b||"")+"pingSent_",a,void 0)}
function Fi(){var a=vi(),b=a.pbr,c=a.vc,a=a.pbs;return b&&c&&a&&b<c&&c<a&&1==Bi().info.yt_pvis}
;function Gi(a,b){D.call(this);this.w=this.l=a;this.T=b;this.C=!1;this.g={};this.Z=this.S=null;this.U=new T;Kb(this,ya(Lb,this.U));this.j={};this.J=this.$=this.i=this.fa=this.b=null;this.W=!1;this.K=this.D=this.P=this.R=null;this.aa={};this.Da=["onReady"];this.X=new mi(this);Kb(this,ya(Lb,this.X));this.da=null;this.pa=NaN;this.Y={};Hi(this);this.H("onDetailedError",u(this.Sa,this));this.H("onTabOrderChange",u(this.Fa,this));this.H("onTabAnnounce",u(this.qa,this));this.H("WATCH_LATER_VIDEO_ADDED",u(this.Ta,
this));this.H("WATCH_LATER_VIDEO_REMOVED",u(this.Ua,this));Ve||(this.H("onMouseWheelCapture",u(this.Qa,this)),this.H("onMouseWheelRelease",u(this.Ra,this)));this.H("onAdAnnounce",u(this.qa,this));this.M=new mi(this);Kb(this,ya(Lb,this.M));this.ea=!1;this.ca=null}
w(Gi,D);var Ii=["drm.unavailable","fmt.noneavailable","html5.missingapi","html5.unsupportedads","html5.unsupportedlive"];l=Gi.prototype;l.oa=function(a,b){this.f||(Ji(this,a),Ki(this,b),this.C&&Li(this))};
function Ji(a,b){a.fa=b;a.b=cc(b);a.i=a.b.attrs.id||a.i;"video-player"==a.i&&(a.i=a.T,a.b.attrs.id=a.T);a.w.id==a.i&&(a.i+="-player",a.b.attrs.id=a.i);a.b.args.enablejsapi="1";a.b.args.playerapiid=a.T;a.$||(a.$=Mi(a,a.b.args.jsapicallback||"onYouTubePlayerReady"));a.b.args.jsapicallback=null;var c=a.b.attrs.width;c&&(a.w.style.width=og(Number(c)||c));if(c=a.b.attrs.height)a.w.style.height=og(Number(c)||c)}
l.Ia=function(){return this.fa};
function Li(a){a.b.loaded||(a.b.loaded=!0,"0"!=a.b.args.autoplay?a.g.loadVideoByPlayerVars(a.b.args):a.g.cueVideoByPlayerVars(a.b.args))}
function Ni(a){if(!p(a.b.disable.flash)){var b=a.b.disable,c;c=bf(af.getInstance(),a.b.minVersion);b.flash=!c}return!a.b.disable.flash}
function Oi(a,b){if((!b||(5!=(dc[b.errorCode]||5)?0:-1!=Ii.indexOf(b.errorCode)))&&Ni(a)){var c=Pi(a);c&&c.stopVideo&&c.stopVideo();var d=a.b;c&&c.getUpdatedConfigurationData&&(c=c.getUpdatedConfigurationData(),d=bc(c));d.args.autoplay=1;d.args.html5_unavailable="1";Ji(a,d);Ki(a,"flash")}}
function Ki(a,b){if(!a.f){if(!b){var c;if(!(c=!a.b.html5&&Ni(a))){if(!p(a.b.disable.html5)){var d;c=!0;void 0!=a.b.args.deviceHasDisplay&&(c=a.b.args.deviceHasDisplay);if(2.2==cf)d=!0;else{a:{var e=c;c=r("yt.player.utils.videoElement_");c||(c=document.createElement("VIDEO"),q("yt.player.utils.videoElement_",c,void 0));try{if(c.canPlayType)for(var e=e?ph:qh,f=0;f<e.length;f++)if(c.canPlayType(e[f])){d=null;break a}d="fmt.noneavailable"}catch(g){d="html5.missingapi"}}d=!d}d&&(d=Qi(a)||a.b.assets.js);
a.b.disable.html5=!d;d||(a.b.args.html5_unavailable="1")}c=!!a.b.disable.html5}b=c?Ni(a)?"flash":"unsupported":"html5"}("flash"==b?a.ib:a.jb).call(a)}}
function Qi(a){var b=!0,c=Pi(a);c&&a.b&&(a=a.b,b=vb(c,"version")==a.assets.js);return b&&!!r("yt.player.Application.create")}
l.jb=function(){if(!this.W){var a=Qi(this);a&&"html5"==Ri(this)?(this.J="html5",this.C||this.O()):(Si(this),this.J="html5",a&&this.P?(this.l.appendChild(this.P),this.O()):(this.b.loaded=!0,this.R=u(function(){var a=this.l,c=cc(this.b);r("yt.player.Application.create")(a,c);this.O()},this),this.W=!0,a?this.R():(Gg(this.b.assets.js,this.R),Ig(this.b.assets.css))))}};
l.ib=function(){var a=cc(this.b);if(!this.D){var b=Pi(this);b&&(this.D=document.createElement("SPAN"),this.D.tabIndex=0,ni(this.X,this.D,"focus",this.ta),this.K=document.createElement("SPAN"),this.K.tabIndex=0,ni(this.X,this.K,"focus",this.ta),b.parentNode&&b.parentNode.insertBefore(this.D,b),b.parentNode&&b.parentNode.insertBefore(this.K,b.nextSibling))}a.attrs.width=a.attrs.width||"100%";a.attrs.height=a.attrs.height||"100%";if("flash"==Ri(this))this.J="flash",this.C||this.O();else{Si(this);this.J=
"flash";this.b.loaded=!0;var b=af.getInstance(),c=(-1<b.i.indexOf("Gnash")&&-1==b.i.indexOf("AVM2")||9==b.b&&1==b.f||9==b.b&&0==b.f&&1==b.g?0:9<=b.b)||-1<navigator.userAgent.indexOf("Sony/COM2")&&!bf(b,9,1,58)?a.url:a.urlV9As2;window!=window.top&&document.referrer&&(a.args.framer=document.referrer.substring(0,128));b=this.l;if(c){var b=t(b)?Nf(b):b,d=hb(a.attrs);d.tabindex=0;var e=hb(a.params);e.flashvars=vd(a.args);if(Ab){d.classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000";e.movie=c;var a=document.createElement("object"),
f;for(f in d)a.setAttribute(f,d[f]);for(var g in e)f=document.createElement("param"),f.setAttribute("name",g),f.setAttribute("value",e[g]),a.appendChild(f)}else{d.type="application/x-shockwave-flash";d.src=c;a=document.createElement("embed");a.setAttribute("name",d.id);for(var h in d)a.setAttribute(h,d[h]);for(var k in e)a.setAttribute(k,e[k])}g=document.createElement("div");g.appendChild(a);b.innerHTML=g.innerHTML}this.O()}};
l.ta=function(){Pi(this).focus()};
function Pi(a){var b=Nf(a.i);!b&&a.w&&a.w.querySelector&&(b=a.w.querySelector("#"+a.i));return b}
l.O=function(){if(!this.f){var a=Pi(this),b=!1;try{a&&a.getApiInterface&&a.getApiInterface()&&(b=!0)}catch(f){}if(b)if(this.W=!1,a.isNotServable&&a.isNotServable(this.b.args.video_id))Oi(this);else{Hi(this);this.C=!0;a=Pi(this);a.addEventListener&&(this.S=Ti(this,a,"addEventListener"));a.removeEventListener&&(this.Z=Ti(this,a,"removeEventListener"));for(var b=a.getApiInterface(),b=b.concat(a.getInternalApiInterface()),c=0;c<b.length;c++){var d=b[c];this.g[d]||(this.g[d]=Ti(this,a,d))}for(var e in this.j)this.S(e,
this.j[e]);Li(this);this.$&&this.$(this.g);this.U.V("onReady",this.g)}else this.pa=O(u(this.O,this),50)}};
function Ti(a,b,c){var d=b[c];return function(){try{return a.da=null,d.apply(b,arguments)}catch(e){"Bad NPObject as private data!"!=e.message&&"sendAbandonmentPing"!=c&&(e.message+=" ("+c+")",a.da=e,Rc(e,"WARNING"))}}}
function Hi(a){a.C=!1;if(a.Z)for(var b in a.j)a.Z(b,a.j[b]);for(var c in a.Y)window.clearTimeout(parseInt(c,10));a.Y={};a.S=null;a.Z=null;for(var d in a.g)a.g[d]=null;a.g.addEventListener=u(a.H,a);a.g.removeEventListener=u(a.$a,a);a.g.destroy=u(a.dispose,a);a.g.getLastError=u(a.Ja,a);a.g.getPlayerType=u(a.Ka,a);a.g.getCurrentVideoConfig=u(a.Ia,a);a.g.loadNewVideoConfig=u(a.oa,a);a.g.isReady=u(a.lb,a)}
l.lb=function(){return this.C};
l.H=function(a,b){if(!this.f){var c=Mi(this,b);if(c){if(!(0<=uc(this.Da,a)||this.j[a])){var d=Ui(this,a);this.S&&this.S(a,d)}this.U.subscribe(a,c);"onReady"==a&&this.C&&O(ya(c,this.g),0)}}};
l.$a=function(a,b){if(!this.f){var c=Mi(this,b);c&&fd(this.U,a,c)}};
function Mi(a,b){var c=b;if("string"==typeof b){if(a.aa[b])return a.aa[b];c=function(){var a=r(b);a&&a.apply(m,arguments)};
a.aa[b]=c}return c?c:null}
function Ui(a,b){var c="ytPlayer"+b+a.T;a.j[b]=c;m[c]=function(c){var d=O(function(){if(!a.f){a.U.V(b,c);var e=a.Y,g=String(d);g in e&&delete e[g]}},0);
gb(a.Y,String(d))};
return c}
l.Fa=function(a){a=a?Pf:Of;for(var b=a(document.activeElement);b&&(1!=b.nodeType||b==this.D||b==this.K||(b.focus(),b!=document.activeElement));)b=a(b)};
l.qa=function(a){fg("a11y-announce",a)};
l.Sa=function(a){Oi(this,a)};
l.Ta=function(a){fg("WATCH_LATER_VIDEO_ADDED",a)};
l.Ua=function(a){fg("WATCH_LATER_VIDEO_REMOVED",a)};
l.Qa=function(){if(!this.ea){if(Ze){var a=document,b=a.scrollingElement?a.scrollingElement:pe||"CSS1Compat"!=a.compatMode?a.body||a.documentElement:a.documentElement,a=a.parentWindow||a.defaultView;this.ca=Q&&R("10")&&a.pageYOffset!=b.scrollTop?new le(b.scrollLeft,b.scrollTop):new le(a.pageXOffset||b.scrollLeft,a.pageYOffset||b.scrollTop);ni(this.M,window,"scroll",this.Xa);ni(this.M,this.l,"touchmove",this.Wa)}else ni(this.M,this.l,"mousewheel",this.ua),ni(this.M,this.l,"wheel",this.ua);this.ea=!0}};
l.Ra=function(){oi(this.M);this.ea=!1};
l.ua=function(a){a=a||window.event;a.returnValue=!1;a.preventDefault&&a.preventDefault()};
l.Xa=function(){window.scrollTo(this.ca.b,this.ca.f)};
l.Wa=function(a){a.preventDefault()};
l.Ka=function(){return this.J||Ri(this)};
l.Ja=function(){return this.da};
function Ri(a){return(a=Pi(a))?"div"==a.tagName.toLowerCase()?"html5":"flash":null}
function Si(a){ui("dcp");a.cancel();Hi(a);a.J=null;a.b&&(a.b.loaded=!1);var b=Pi(a);"html5"==Ri(a)?a.P=b:b&&b.destroy&&b.destroy();for(var b=a.l,c;c=b.firstChild;)b.removeChild(c);oi(a.X);a.D=null;a.K=null}
l.cancel=function(){this.R&&Fg(this.b.assets.js,this.R);window.clearTimeout(this.pa);this.W=!1};
l.o=function(){Si(this);if(this.P&&this.b)try{this.P.destroy()}catch(b){Rc(b)}this.aa=null;for(var a in this.j)m[this.j[a]]=null;this.fa=this.b=this.g=null;delete this.l;delete this.w;Gi.B.o.call(this)};function Vi(a,b,c){b=void 0===b?{}:b;c=void 0===c?!1:c;var d=I("EVENT_ID");d&&(b.ei||(b.ei=d));if(b){var d=a,e=I("VALID_SESSION_TEMPDATA_DOMAINS",[]),f=Lc(L(window.location.href)[3]||null);f&&e.push(f);f=Lc(L(d)[3]||null);if(0<=uc(e,f)||!f&&0==d.lastIndexOf("/",0))if(M("autoescape_tempdata_url")&&(e=document.createElement("a"),lf(e,d),d=e.href),d){var f=L(d),d=f[5],e=f[6],f=f[7],g="";d&&(g+=d);e&&(g+="?"+e);f&&(g+="#"+f);d=g;e=d.indexOf("#");if(d=0>e?d:d.substr(0,e)){if(b.itct||b.ved)b.csn=b.csn||
li();d="ST-"+rb(d).toString(36);e=b?vd(b):"";ab.set(""+d,e,5,"/","youtube.com");b&&(b=b.itct||b.ved,d=r("yt.logging.screen.storeParentElement"),b&&d&&d(new Cb(b)))}}}if(c)return!1;if((window.ytspf||{}).enabled)spf.navigate(a);else{var h,k;h=void 0===h?{}:h;k=void 0===k?"":k;c=window.location;a=Mc(Pc([a],h))+k;a=a instanceof ae?a:ee(a);c.href=ce(a)}return!0}
;function Wi(){}
function Xi(){try{var a;try{var b=r("yt.www.ads.biscotti.getId_"),c;if(b)c=b();else{if(!ai){var d=u(ei,m,2);ai=Fh().then(bi,d)}c=ai}a=c}catch(e){a=tf(e)}a.then(Yi,Wi);O(Xi,18E5)}catch(e){Rc(e)}}
var Zi=0;
function Yi(a){var b;a:{try{b=window.top.location.href}catch(Y){b=2;break a}b=null!=b?b==window.document.location.href?0:1:2}b={dt:Ba,flash:Ub||"0",frm:b};b.u_tz=-(new Date).getTimezoneOffset();var c;try{c=x.history.length}catch(Y){c=0}b.u_his=c;b.u_java=!!x.navigator&&"unknown"!==typeof x.navigator.javaEnabled&&!!x.navigator.javaEnabled&&x.navigator.javaEnabled();x.screen&&(b.u_h=x.screen.height,b.u_w=x.screen.width,b.u_ah=x.screen.availHeight,b.u_aw=x.screen.availWidth,b.u_cd=x.screen.colorDepth);x.navigator&&
x.navigator.plugins&&(b.u_nplug=x.navigator.plugins.length);x.navigator&&x.navigator.mimeTypes&&(b.u_nmime=x.navigator.mimeTypes.length);b.bid=a;b.ca_type=Tb?"flash":"image";if(M("enable_server_side_search_pyv")||M("enable_server_side_mweb_search_pyv")){var d;a=window;try{d=a.screenX;var e=a.screenY}catch(Y){}try{var f=a.outerWidth,g=a.outerHeight}catch(Y){}try{var h=a.innerWidth,k=a.innerHeight}catch(Y){}d=[a.screenLeft,a.screenTop,d,e,a.screen?a.screen.availWidth:void 0,a.screen?a.screen.availTop:
void 0,f,g,h,k];var n;e=window.top||x;try{var A;if(e.document&&!e.document.body)A=new Ya(-1,-1);else{var H=(e||window).document,ea="CSS1Compat"==H.compatMode?H.documentElement:H.body;A=(new Ya(ea.clientWidth,ea.clientHeight)).round()}n=A}catch(Y){n=new Ya(-12245933,-12245933)}A=0;window.SVGElement&&document.createElementNS&&(A|=1);za(b,{bc:A,bih:n.height,biw:n.width,brdim:d.join(),vis:{visible:1,hidden:2,prerender:3,preview:4}[Aa.webkitVisibilityState||Aa.mozVisibilityState||Aa.visibilityState||""]||
0,wgl:!!x.WebGLRenderingContext})}b.bsq=Zi++;ih("//www.youtube.com/ad_data_204",{La:!1,A:b})}
;function $i(a){B.call(this,1,arguments);this.b=a}
w($i,B);function W(a){B.call(this,1,arguments);this.b=a}
w(W,B);function aj(a,b,c){B.call(this,3,arguments);this.g=a;this.f=b;this.b=null!=c?!!c:null}
w(aj,B);function bj(a,b,c,d,e){B.call(this,2,arguments);this.f=a;this.b=b;this.i=c||null;this.g=d||null;this.source=e||null}
w(bj,B);function cj(a,b,c){B.call(this,1,arguments);this.b=a;this.subscriptionId=b}
w(cj,B);function dj(a,b,c,d,e,f,g){B.call(this,1,arguments);this.f=a;this.subscriptionId=b;this.b=c;this.i=e||null;this.g=f||null;this.source=g||null}
w(dj,B);
var ej=new C("subscription-batch-subscribe",$i),fj=new C("subscription-batch-unsubscribe",$i),gj=new C("subscription-subscribe",bj),hj=new C("subscription-subscribe-loading",W),ij=new C("subscription-subscribe-loaded",W),jj=new C("subscription-subscribe-success",cj),kj=new C("subscription-subscribe-external",bj),lj=new C("subscription-unsubscribe",dj),mj=new C("subscription-unsubscirbe-loading",W),nj=new C("subscription-unsubscribe-loaded",W),oj=new C("subscription-unsubscribe-success",W),pj=new C("subscription-external-unsubscribe",
dj),qj=new C("subscription-enable-ypc",W),rj=new C("subscription-prefs",aj),sj=new C("subscription-prefs-success",aj),tj=new C("subscription-prefs-failure",aj);var uj={},vj="player_uid_"+(1E9*Math.random()>>>0);function wj(a,b){a=t(a)?Nf(a):a;b=bc(b);var c=vj+"_"+ta(a),d=uj[c];if(d)return d.oa(b),d.g;d=new Gi(a,c);uj[c]=d;fg("player-added",d.g);Kb(d,ya(xj,d));O(function(){d.oa(b)},0);
return d.g}
function xj(a){uj[a.T]=null}
function yj(a){a=Nf(a);if(!a)return null;var b=vj+"_"+ta(a),c=uj[b];c||(c=new Gi(a,b),uj[b]=c);return c.g}
;var X=null,zj=[];function Aj(a){return{externalChannelId:a.externalChannelId,Pa:!!a.isChannelPaid,source:a.source,subscriptionId:a.subscriptionId}}
function Bj(a){a&&a.externalChannelId&&Cj(Aj(a))}
function Cj(a){var b=I("PLAYER_CONFIG");b&&b.args&&void 0!==b.args.authuser||I("SESSION_INDEX")||I("LOGGED_IN")?(U(gj,new bj(a.externalChannelId,a.Pa?{itemType:"U",itemId:a.externalChannelId}:null)),a=vd({event:"subscribe",source:a.source}),Dh("/gen_204?"+a,void 0)):Dj(a)}
function Dj(a){Sg(function(b){b.subscription_ajax&&Cj(a)})}
function Ej(a){a=Aj(a);U(lj,new dj(a.externalChannelId,a.subscriptionId,null));a=vd({event:"unsubscribe",source:a.source});Dh("/gen_204?"+a,void 0)}
function Fj(a){X&&X.channelSubscribed(a.b,a.subscriptionId)}
function Gj(a){X&&X.channelUnsubscribed(a.b)}
;var Hj=!1,Ij=[],Jj=[];function Kj(a){a.b?Hj?U(kj,a):U(lc,new gc(function(){U(qc,new kc(a.b))})):Lj(a.f,a.i,a.g,a.source)}
function Mj(a){a.b?Hj?U(pj,a):U(lc,new gc(function(){U(oc,new kc(a.b))})):Nj(a.f,a.subscriptionId,a.i,a.g,a.source)}
function Oj(a){Pj(yc(a.b))}
function Qj(a){Rj(yc(a.b))}
function Sj(a){Tj(a.g,a.f,a.b)}
function Uj(a){var b=a.itemId,c=a.b.subscriptionId;b&&c&&U(jj,new cj(b,c,a.b.channelInfo))}
function Vj(a){var b=a.b;bb(a.f,function(a,d){U(jj,new cj(d,a,b[d]))})}
function Wj(a){U(oj,new W(a.f.itemId));a.b&&a.b.length&&(Xj(a.b,oj),Xj(a.b,qj))}
function Lj(a,b,c,d){var e=new W(a);U(hj,e);var f={};f.c=a;c&&(f.eurl=c);d&&(f.source=d);c={};(d=I("PLAYBACK_ID"))&&(c.plid=d);(d=I("EVENT_ID"))&&(c.ei=d);b&&Yj(b,c);jh("/subscription_ajax?action_create_subscription_to_channel=1",{method:"POST",na:f,A:c,F:function(b,c){var d=c.response;U(jj,new cj(a,d.id,d.channel_info));d.show_feed_privacy_dialog&&fg("SHOW-FEED-PRIVACY-SUBSCRIBE-DIALOG",a);d.actions&&Rh(d.actions)},
ma:function(){U(ij,e)}})}
function Nj(a,b,c,d,e){var f=new W(a);U(mj,f);var g={};d&&(g.eurl=d);e&&(g.source=e);d={};d.c=a;d.s=b;(a=I("PLAYBACK_ID"))&&(d.plid=a);(a=I("EVENT_ID"))&&(d.ei=a);c&&Yj(c,d);jh("/subscription_ajax?action_remove_subscriptions=1",{method:"POST",na:g,A:d,F:function(a,b){var c=b.response;U(oj,f);c.actions&&Rh(c.actions)},
ma:function(){U(nj,f)}})}
function Tj(a,b,c){if(a){var d={};d.channel_id=a;switch(b){case "receive-all-updates":d.receive_all_updates=!0;break;case "receive-no-updates":d.receive_no_updates=!0;d.receive_post_updates=!1;break;case "receive-highlight-updates":d.receive_all_updates=!1;d.receive_no_updates=!1;break;default:return}null===c||d.receive_no_updates||(d.receive_post_updates=c);var e=new aj(a,b,c);jh("/subscription_ajax?action_update_subscription_preferences=1",{method:"POST",A:d,onError:function(){U(tj,e)},
F:function(){U(sj,e)}})}}
function Pj(a){if(a.length){var b=Ac(a,0,40);U("subscription-batch-subscribe-loading");Xj(b,hj);var c={};c.a=b.join(",");var d=function(){U("subscription-batch-subscribe-loaded");Xj(b,ij)};
jh("/subscription_ajax?action_create_subscription_to_all=1",{method:"POST",A:c,F:function(c,f){d();var e=f.response,h=e.id;if(pa(h)&&h.length==b.length){var k=e.channel_info_map;K(h,function(a,c){var d=b[c];U(jj,new cj(d,a,k[d]))});
a.length?Pj(a):U("subscription-batch-subscribe-finished")}},
onError:function(){d();U("subscription-batch-subscribe-failure")}})}}
function Rj(a){if(a.length){var b=Ac(a,0,40);U("subscription-batch-unsubscribe-loading");Xj(b,mj);var c={};c.c=b.join(",");var d=function(){U("subscription-batch-unsubscribe-loaded");Xj(b,nj)};
jh("/subscription_ajax?action_remove_subscriptions=1",{method:"POST",A:c,F:function(){d();Xj(b,oj);a.length&&Rj(a)},
onError:function(){d()}})}}
function Xj(a,b){K(a,function(a){U(b,new W(a))})}
function Yj(a,b){var c=td(a);za(b,c)}
;var Zj=r("yt.abuse.botguardInitialized")||Wg;q("yt.abuse.botguardInitialized",Zj,void 0);var ak=r("yt.abuse.invokeBotguard")||Xg;q("yt.abuse.invokeBotguard",ak,void 0);var bk=r("yt.abuse.dclkstatus.checkDclkStatus")||ah;q("yt.abuse.dclkstatus.checkDclkStatus",bk,void 0);var ck=r("yt.player.exports.navigate")||Vi;q("yt.player.exports.navigate",ck,void 0);var dk=r("yt.player.embed")||wj;q("yt.player.embed",dk,void 0);var ek=r("yt.player.getPlayerByElement")||yj;q("yt.player.getPlayerByElement",ek,void 0);
var fk=r("yt.util.activity.init")||Nh;q("yt.util.activity.init",fk,void 0);var gk=r("yt.util.activity.getTimeSinceActive")||Ph;q("yt.util.activity.getTimeSinceActive",gk,void 0);var hk=r("yt.util.activity.setTimestamp")||Oh;q("yt.util.activity.setTimestamp",hk,void 0);var ik=null,jk=null,kk=null,lk={};function mk(a){Sh(a.payload_name,a.payload,M("enable_youtubei_innertube")?Ah:Tf,void 0)}
function nk(a){var b=a.id;a=a.ve_type;var c=Db++;a=new Cb(void 0,a,c,void 0);lk[b]=a;b=li();c=ki();b&&c&&Th(fi(),b,c,a)}
function ok(a){var b=a.csn;a=a.root_ve_type;if(b&&a&&(G("client-screen-nonce",b),G("ROOT_VE_TYPE",a),a=ki()))for(var c in lk){var d=b,e=a,f=lk[c];Th(fi(),d,e,f)}}
function pk(a){lk[a.id]=new Cb(a.tracking_params)}
function qk(a){var b=li();a=lk[a.id];if(b&&a){var c=fi();Uh(c,{click:{csn:b,visualElement:Eb(a)}},void 0)}}
function rk(a){a=a.ids;var b=li();if(b){for(var c=[],d=0;d<a.length;d++){var e=lk[a[d]];e&&c.push(e)}c.length&&Vh(fi(),b,c)}}
function sk(){var a=ik;a&&a.startInteractionLogging&&a.startInteractionLogging()}
;q("yt.setConfig",G,void 0);q("yt.config.set",G,void 0);q("yt.setMsg",Uc,void 0);q("yt.msgs.set",Uc,void 0);q("yt.logging.errors.log",xh,void 0);
q("writeEmbed",function(){var a=I("PLAYER_CONFIG",void 0);"1"!=a.privembed&&Xi();"gvn"==a.args.ps&&(document.body.style.backgroundColor="transparent");var b=document.referrer,c=I("POST_MESSAGE_ORIGIN");window!=window.top&&b&&b!=document.URL&&(a.args.loaderUrl=b);I("LIGHTWEIGHT_AUTOPLAY")&&(a.args.autoplay="1");a.args.autoplay&&Mh(a.args);ik=a=wj("player",a);a.addEventListener("onScreenChanged",ok);a.addEventListener("onLogClientVeCreated",nk);a.addEventListener("onLogServerVeCreated",pk);a.addEventListener("onLogToGel",
mk);a.addEventListener("onLogVeClicked",qk);a.addEventListener("onLogVesShown",rk);a.addEventListener("onReady",sk);b=I("POST_MESSAGE_ID","player");I("ENABLE_JS_API")?kk=new Yh(a):I("ENABLE_POST_API")&&t(b)&&t(c)&&(jk=new Qh(window.parent,b,c),kk=new Xh(a,jk.g));I("BG_P")&&(I("BG_I")||I("BG_IU"))&&Vg();$g();X=a;X.addEventListener("SUBSCRIBE",Bj);X.addEventListener("UNSUBSCRIBE",Ej);zj.push(V(jj,Fj),V(oj,Gj))},void 0);
q("yt.www.watch.ads.restrictioncookie.spr",function(a){Dh(a+"mac_204?action_fcts=1");return!0},void 0);
var tk=Sc(function(){ui("ol");Hj=!0;Jj.push(V(gj,Kj),V(lj,Mj));Hj||Jj.push(V(kj,Kj),V(pj,Mj),V(ej,Oj),V(fj,Qj),V(rj,Sj),V(nc,Uj),V(pc,Wj),V(mc,Vj));var a=Xc.getInstance(),b=1<window.devicePixelRatio;if(!!(($c("f"+(Math.floor(119/31)+1))||0)&67108864)!=b){var c="f"+(Math.floor(119/31)+1),d=$c(c)||0,d=b?d|67108864:d&-67108865;0==d?delete N[c]:N[c]=d.toString(16).toString();var a=a.b,b=[],e;for(e in N)b.push(e+"="+escape(N[e]));ab.set(""+a,b.join("&"),63072E3,"/","youtube.com")}}),uk=Sc(function(){var a=
ik;
a&&a.sendAbandonmentPing&&a.sendAbandonmentPing();I("PL_ATT")&&(Ug=null);for(var a=0,b=Yg.length;a<b;a++){var c=Yg[a];if(!isNaN(c)){var d=r("yt.scheduler.instance.cancelJob");d?d(c):window.clearTimeout(c)}}Yg.length=0;a=Cg("//static.doubleclick.net/instream/ad_status.js");if(b=document.getElementById(a))hg(a),b.parentNode.removeChild(b);Zg=!1;G("DCLKSTAT",0);eg(Ij);Ij.length=0;ng(Jj);Jj.length=0;Hj=!1;X&&(X.removeEventListener("SUBSCRIBE",Cj),X.removeEventListener("UNSUBSCRIBE",Ej));X=null;ng(zj);
zj.length=0;Mb(kk,jk);if(a=ik)a.removeEventListener("onScreenChanged",ok),a.removeEventListener("onLogClientVeCreated",nk),a.removeEventListener("onLogServerVeCreated",pk),a.removeEventListener("onLogToGel",mk),a.removeEventListener("onLogVeClicked",qk),a.removeEventListener("onLogVesShown",rk),a.removeEventListener("onReady",sk),a.destroy();lk={}});
window.addEventListener?(window.addEventListener("load",tk),window.addEventListener("unload",uk)):window.attachEvent&&(window.attachEvent("onload",tk),window.attachEvent("onunload",uk));}).call(this);
