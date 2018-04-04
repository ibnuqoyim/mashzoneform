/*!
 * TableExport.js v4.0.2 (https://www.travismclarke.com)
 * Copyright 2017 Travis Clarke
 * Licensed under the MIT license
 */
!function(t,e){"function"==typeof define&&define.amd?define(["jquery","blobjs","file-saverjs","xlsx"],e):"object"==typeof exports&&"string"!=typeof exports.nodeName?module.exports=e(require("jquery"),require("blobjs"),require("file-saverjs"),require("xlsx")):t.TableExport=e(t.jQuery,t.Blob,t.saveAs,t.XLSX)}(this,function(t,e,n,r){"use strict";function o(){for(var t=arguments,e=1;e<t.length;e++)for(var n in t[e])t[e].hasOwnProperty(n)&&(t[0][n]=t[e][n]);return t[0]}function i(t){return"undefined"==typeof t.length?[].concat(t):[].slice.call(t)}function a(t,e){return t.classList?t.classList.contains(e):new RegExp("(^| )"+e+"( |$)","gi").test(t.cls)}function s(t,e,n){var r={};return t?(r.bootstrapClass=e[0]+" ",r.bootstrapTheme=e[1]+" ",r.bootstrapSpacing=e[2]+" "):(r.bootstrapClass=n+" ",r.bootstrapTheme="",r.bootstrapSpacing=""),r}var l=function(t,e){var n=this;if(!t)return new Error('"selectors" is required');if(!n)return new l(t,e);n.settings=o({},n.defaults,e),n.selectors=i(t);var a=n.settings;a.ignoreRows=a.ignoreRows instanceof Array?a.ignoreRows:[a.ignoreRows],a.ignoreCols=a.ignoreCols instanceof Array?a.ignoreCols:[a.ignoreCols],a.ignoreCSS=n.ignoreCSS instanceof Array?n.ignoreCSS.join(", "):n.ignoreCSS,a.emptyCSS=n.emptyCSS instanceof Array?n.emptyCSS.join(", "):n.emptyCSS,a.formatValue=n.formatValue.bind(this,a.trimWhitespace),a.bootstrapSettings=s(a.bootstrap,n.bootstrapConfig,n.defaultButton);var c={};n.getExportData=function(){return c},n.selectors.forEach(function(t){var e={};e.rows=i(t.querySelectorAll("tbody > tr")),e.rows=a.headers?i(t.querySelectorAll("thead > tr")).concat(e.rows):e.rows,e.rows=a.footers?e.rows.concat(i(t.querySelectorAll("tfoot > tr"))):e.rows,e.thAdj=a.headers?t.querySelectorAll("thead > tr").length:0,e.filename="id"===a.filename?t.getAttribute("id")?t.getAttribute("id"):n.defaultFilename:a.filename?a.filename:n.defaultFilename,e.uuid=p(t),e.checkCaption=function(e){var n=t.querySelectorAll("caption.tableexport-caption");n.length?n[0].appendChild(e):(n=document.createElement("caption"),n.className=a.bootstrapSettings.bootstrapSpacing+a.position+" tableexport-caption",n.appendChild(e),t.insertBefore(n,t.firstChild))},e.setExportData=function(){return function(t){var n=u.getInstance().getItem(t),r=t.substring(t.indexOf("-")+1);c[e.uuid]=c[e.uuid]||{},c[e.uuid][r]=JSON.parse(n)}}();var o={};for(var s in f)o[s]=0;a.formats.forEach(function(t){!(!r||m||t!==f.xls)&&(t=f.biff2),!(r&&!m||t!==f.xlsx)&&(t=f.xls),o[t]||(e.setExportData(n.exporters[t].call(n,e)),o[t]++)})});var x=document.querySelectorAll("button[tableexport-id]");return d(x,"click",n.downloadHandler,n),n};l.prototype={version:"4.0.2",defaults:{headers:!0,footers:!0,formats:["xls","csv","txt"],filename:"id",bootstrap:!1,exportButtons:!0,position:"bottom",ignoreRows:null,ignoreCols:null,trimWhitespace:!0},charset:"charset=utf-8",defaultFilename:"myDownload",defaultButton:"button-default",ignoreCSS:"tableexport-ignore",emptyCSS:"tableexport-empty",bootstrapConfig:["btn","btn-default","btn-toolbar"],rowDel:"\r\n",entityMap:{"&":"&#38;","<":"&#60;",">":"&#62;","'":"&#39;","/":"&#47;"},xlsx:{defaultClass:"xlsx",buttonContent:"Export to xlsx",mimeType:"application/vnd.openxmlformats-officedocument.spreadsheetml.sheet",fileExtension:".xlsx"},xls:{defaultClass:"xls",buttonContent:"Export to xls",separator:"\t",mimeType:"application/vnd.ms-excel",fileExtension:".xls"},csv:{defaultClass:"csv",buttonContent:"Export to csv",separator:",",mimeType:"text/csv",fileExtension:".csv"},txt:{defaultClass:"txt",buttonContent:"Export to txt",separator:"  ",mimeType:"text/plain",fileExtension:".txt"},types:{string:{defaultClass:"tableexport-string"},number:{defaultClass:"tableexport-number",assert:function(t){return!isNaN(t)}},"boolean":{defaultClass:"tableexport-boolean",assert:function(t){return"true"===t.toLowerCase()||"false"===t.toLowerCase()}},date:{defaultClass:"tableexport-date",assert:function(t){return!/.*%/.test(t)&&!isNaN(Date.parse(t))}}},exporters:{xlsx:function(t){var e=this,n=e.settings,r={},o=i(t.rows).map(function(o,s){if(!~n.ignoreRows.indexOf(s-t.thAdj)&&!a(o,n.ignoreCSS)){var l=o.querySelectorAll("th, td");return i(l).map(function(t,o){if(!~n.ignoreCols.indexOf(o)&&!a(t,n.ignoreCSS)){if(a(t,n.emptyCSS))return" ";if(t.hasAttribute("colspan")&&(r[s]=r[s]||{},r[s][o+1]=t.getAttribute("colspan")-1),t.hasAttribute("rowspan"))for(var i=1;i<t.getAttribute("rowspan");i++)r[s+i]=r[s+i]||{},r[s+i][o]=1;if(r[s]){for(var l=o+1,u=0,p=0,i=0;i<=Math.max.apply(Math,Object.keys(r[s]))&&(r[s][i]?u=p>=o?u+r[s][i]:u:p++,p!==l);i++);return new Array(u).concat({v:n.formatValue(t.textContent),t:e.getType(t.className)})}return{v:n.formatValue(t.textContent),t:e.getType(t.className)}}}).filter(function(t){return"undefined"!=typeof t})}}).map(function(t){return t&&[].concat.apply([],t)}).filter(function(t){return"undefined"!=typeof t}),s=JSON.stringify({data:o,filename:t.filename,mimeType:l.prototype.xlsx.mimeType,fileExtension:l.prototype.xlsx.fileExtension}),p=l.prototype.xlsx.buttonContent,d=l.prototype.xlsx.defaultClass,m=c({uuid:t.uuid,type:f.xlsx}),x=n.exportButtons&&l.prototype.createObjButton(m,s,p,d,n.bootstrapSettings);return x&&t.checkCaption(x),u.getInstance().setItem(m,s,!0),m},biff2:function(t){var e=this,n=e.settings,r={},o=i(t.rows).map(function(o,s){if(!~n.ignoreRows.indexOf(s-t.thAdj)&&!a(o,n.ignoreCSS)){var l=o.querySelectorAll("th, td");return i(l).map(function(t,o){if(!~n.ignoreCols.indexOf(o)&&!a(t,n.ignoreCSS)){if(a(t,n.emptyCSS))return" ";if(t.hasAttribute("colspan")&&(r[s]=r[s]||{},r[s][o+1]=t.getAttribute("colspan")-1),t.hasAttribute("rowspan"))for(var i=1;i<t.getAttribute("rowspan");i++)r[s+i]=r[s+i]||{},r[s+i][o]=1;if(r[s]){for(var l=o+1,u=0,p=0,i=0;i<=Math.max.apply(Math,Object.keys(r[s]))&&(r[s][i]?u=p>=o?u+r[s][i]:u:p++,p!==l);i++);return new Array(u).concat({v:n.formatValue(t.textContent),t:e.getType(t.className)})}return{v:n.formatValue(t.textContent),t:e.getType(t.className)}}}).filter(function(t){return"undefined"!=typeof t})}}).map(function(t){return t&&[].concat.apply([],t)}).filter(function(t){return"undefined"!=typeof t}),s=JSON.stringify({data:o,filename:t.filename,mimeType:l.prototype.xls.mimeType,fileExtension:l.prototype.xls.fileExtension}),p=l.prototype.xls.buttonContent,d=l.prototype.xls.defaultClass,m=c({uuid:t.uuid,type:f.xls}),x=n.exportButtons&&l.prototype.createObjButton(m,s,p,d,n.bootstrapSettings);return x&&t.checkCaption(x),u.getInstance().setItem(m,s,!0),m},xls:function(t){var e=this,n=e.settings,r=l.prototype.xls.separator,o=i(t.rows).map(function(e,o){if(!~n.ignoreRows.indexOf(o-t.thAdj)&&!a(e,n.ignoreCSS)){var s=e.querySelectorAll("th, td");return i(s).map(function(t,e){if(!~n.ignoreCols.indexOf(e)&&!a(t,n.ignoreCSS))return a(t,n.emptyCSS)?" ":t.textContent}).filter(function(t){return"undefined"!=typeof t}).join(r)}}).filter(function(t){return"undefined"!=typeof t}).join(e.rowDel),s=JSON.stringify({data:o,filename:t.filename,mimeType:l.prototype.xls.mimeType,fileExtension:l.prototype.xls.fileExtension}),p=l.prototype.xls.buttonContent,d=l.prototype.xls.defaultClass,m=c({uuid:t.uuid,type:f.xls}),x=n.exportButtons&&l.prototype.createObjButton(m,s,p,d,n.bootstrapSettings);return x&&t.checkCaption(x),u.getInstance().setItem(m,s,!0),m},csv:function(t){var e=this,n=e.settings,r=l.prototype.csv.separator,o=i(t.rows).map(function(e,o){if(!~n.ignoreRows.indexOf(o-t.thAdj)&&!a(e,n.ignoreCSS)){var s=e.querySelectorAll("th, td");return i(s).map(function(t,e){if(!~n.ignoreCols.indexOf(e)&&!a(t,n.ignoreCSS))return a(t,n.emptyCSS)?" ":'"'+n.formatValue(t.textContent.replace(/"/g,'""'))+'"'}).filter(function(t){return"undefined"!=typeof t}).join(r)}}).filter(function(t){return"undefined"!=typeof t}).join(e.rowDel),s=JSON.stringify({data:o,filename:t.filename,mimeType:l.prototype.csv.mimeType,fileExtension:l.prototype.csv.fileExtension}),p=l.prototype.csv.buttonContent,d=l.prototype.csv.defaultClass,m=c({uuid:t.uuid,type:f.csv}),x=n.exportButtons&&l.prototype.createObjButton(m,s,p,d,n.bootstrapSettings);return x&&t.checkCaption(x),u.getInstance().setItem(m,s,!0),m},txt:function(t){var e=this,n=e.settings,r=l.prototype.txt.separator,o=i(t.rows).map(function(e,o){if(!~n.ignoreRows.indexOf(o-t.thAdj)&&!a(e,n.ignoreCSS)){var s=e.querySelectorAll("th, td");return i(s).map(function(t,e){if(!~n.ignoreCols.indexOf(e)&&!a(t,n.ignoreCSS))return a(t,n.emptyCSS)?" ":n.formatValue(t.textContent)}).filter(function(t){return"undefined"!=typeof t}).join(r)}}).filter(function(t){return"undefined"!=typeof t}).join(e.rowDel),s=JSON.stringify({data:o,filename:t.filename,mimeType:l.prototype.txt.mimeType,fileExtension:l.prototype.txt.fileExtension}),p=l.prototype.txt.buttonContent,d=l.prototype.txt.defaultClass,m=c({uuid:t.uuid,type:f.txt}),x=n.exportButtons&&l.prototype.createObjButton(m,s,p,d,n.bootstrapSettings);return x&&t.checkCaption(x),u.getInstance().setItem(m,s,!0),m}},createObjButton:function(t,e,n,r,o){var i=document.createElement("button");return i.setAttribute("tableexport-id",t),i.className=o.bootstrapClass+o.bootstrapTheme+r,i.textContent=n,i},escapeHtml:function(t){return String(t).replace(/[&<>'\/]/g,function(t){return l.prototype.entityMap[t]})},unescapeHtml:function(t){var e=String(t);for(var n in this.entityMap)e=e.replace(RegExp(this.entityMap[n],"g"),n);return e},formatValue:function(t,e){return t?e.trim():e},getType:function(t){if(!t)return"";var e=l.prototype.types;return~t.indexOf(e.string.defaultClass)?"s":~t.indexOf(e.number.defaultClass)?"n":~t.indexOf(e["boolean"].defaultClass)?"b":~t.indexOf(e.date.defaultClass)?"d":""},dateNum:function(t,e){e&&(t+=1462);var n=Date.parse(t);return(n-new Date(Date.UTC(1899,11,30)))/864e5},createSheet:function(t){for(var e={},n={s:{c:1e7,r:1e7},e:{c:0,r:0}},o=l.prototype.types,i=0;i!==t.length;++i)for(var a=0;a!==t[i].length;++a){n.s.r>i&&(n.s.r=i),n.s.c>a&&(n.s.c=a),n.e.r<i&&(n.e.r=i),n.e.c<a&&(n.e.c=a);var s=t[i][a];if(s&&s.v){var u=r.utils.encode_cell({c:a,r:i});s.t||(o.number.assert(s.v)?s.t="n":o["boolean"].assert(s.v)?s.t="b":o.date.assert(s.v)?s.t="d":s.t="s"),"d"===s.t&&(s.t="n",s.z=r.SSF._table[14],s.v=this.dateNum(s.v)),e[u]=s}}return n.s.c<1e7&&(e["!ref"]=r.utils.encode_range(n)),e},downloadHandler:function(t){var e=t.target,n=JSON.parse(u.getInstance().getItem(e.getAttribute("tableexport-id"))),r=n.data,o=n.filename,i=n.mimeType,a=n.fileExtension;this.export2file(r,i,o,a)},Workbook:function(){this.SheetNames=[],this.Sheets={}},string2ArrayBuffer:function(t){for(var e=new ArrayBuffer(t.length),n=new Uint8Array(e),r=0;r!==t.length;++r)n[r]=255&t.charCodeAt(r);return e},export2file:function(t,o,i,a){if(r&&!m&&".xls"===a.substr(0,4)){var s=new this.Workbook,l=this.createSheet(t),u=a.substr(1)===f.xls?f.biff2:f.xlsx;s.SheetNames.push(i),s.Sheets[i]=l;var p={bookType:u,bookSST:!1,type:"binary"},c=r.write(s,p);t=this.string2ArrayBuffer(c)}if(m){var d="data:"+o+";"+this.charset+","+t;this.downloadDataURI(d,i,a)}else n(new e([t],{type:o+";"+this.charset}),i+a,!0)},downloadDataURI:function(t,e,n){var r=encodeURI(t),o=document.createElement("a");o.setAttribute("href",r),o.setAttribute("download",e+n),document.body.appendChild(o),o.click()},update:function(t){return l.prototype.remove.call(this),new l(this.selectors,o({},this.defaults,t))},reset:function(){return l.prototype.remove.call(this),new l(this.selectors,this.settings)},remove:function(){this.selectors.forEach(function(t){var e=t.querySelector("caption.tableexport-caption");e&&t.removeChild(e)})},LocalStorage:function(){this.store=localStorage,this.namespace="te-",this.getKey=function(t){return this.namespace+t},this.setItem=function(t,e,n){var r=this.getKey(t);if(!this.exists(r)||n)return"string"!=typeof e?this.error('"value" must be a string'):this.store.setItem(r,e)},this.getItem=function(t){var e=this.getKey(t);return this.store.getItem(e)},this.exists=function(t){var e=this.getKey(t);return null!==this.store.getItem(e)},this.removeItem=function(t){var e=this.getKey(t);return this.store.removeItem(e)},this.error=function(t){return new Error("error:",t)}}};var u=l.prototype.LocalStorage;u.getInstance=function(){return u._instance=null,function(){return u._instance||(u._instance=new u),u._instance}}();var p=function(){var t=0;return function(e){return e.id||(e.id="tableexport-"+ ++t),e.id}}(),f=function(){return{xlsx:"xlsx",biff2:"biff2",xls:"xls",csv:"csv",txt:"txt"}}(),c=function(){var t,e,n=0;return function(r){var o=r.type;if(r=JSON.stringify(r),0===r.length)return n;for(t=0;t<r.length;t++)e=r.charCodeAt(t),n=(n<<5)-n+e,n|=0;return n.toString(16).substring(1)+"-"+o}}(),d=function(){var t=null;return function(e,n,r,o){for(var i=r.bind(o),a=0;a<e.length;++a)t&&e[a].removeEventListener(n,t,!1),e[a].addEventListener(n,i,!1);t=i}}(),m=function(t){return/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(t)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(t.substr(0,4))}(navigator.userAgent||navigator.vendor||window.opera);if(t){t.fn.tableExport=function(t){return new l(this,t)};for(var x in l.prototype)t.fn.tableExport[x]=l.prototype[x]}return l});