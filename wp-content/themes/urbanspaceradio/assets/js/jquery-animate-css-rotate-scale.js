!function(t){var r="deg";t.fn.rotate=function(e){var a=t(this).css("transform")||"none";if(void 0===e){var n;if(a)if((n=a.match(/rotate\(([^)]+)\)/))&&n[1])return n[1];return 0}(n=e.toString().match(/^(-?\d+(\.\d+)?)(.+)?$/))&&(n[3]&&(r=n[3]),t(this).css("transform",a.replace(/none|rotate\([^)]*\)/,"")+"rotate("+n[1]+r+")"))},t.fn.scale=function(r,e,a){var n=t(this).css("transform");if(void 0===r){if(n){var o=n.match(/scale\(([^)]+)\)/);if(o&&o[1])return o[1]}return 1}t(this).css("transform",n.replace(/none|scale\([^)]*\)/,"")+"scale("+r+")")};var e=t.fx.prototype.cur;t.fx.prototype.cur=function(){return"rotate"==this.prop?parseFloat(t(this.elem).rotate()):"scale"==this.prop?parseFloat(t(this.elem).scale()):e.apply(this,arguments)},t.fx.step.rotate=function(e){t(e.elem).rotate(e.now+r)},t.fx.step.scale=function(r){t(r.elem).scale(r.now)};var a=t.fn.animate;t.fn.animate=function(t){if(void 0!==t.rotate){var e=t.rotate.toString().match(/^(([+-]=)?(-?\d+(\.\d+)?))(.+)?$/);e&&e[5]&&(r=e[5]),t.rotate=e[1]}return a.apply(this,arguments)}}(jQuery);