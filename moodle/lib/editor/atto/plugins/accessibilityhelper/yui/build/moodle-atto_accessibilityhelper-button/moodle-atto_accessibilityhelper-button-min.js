YUI.add("moodle-atto_accessibilityhelper-button",function(a,e){var n="atto_accessibilityhelper",i={STYLESLABEL:n+"_styleslabel",LINKSLABEL:n+"_linkslabel",IMAGESLABEL:n+"_imageslabel"};a.namespace("M.atto_accessibilityhelper").Button=a.Base.create("button",a.M.editor_atto.EditorPlugin,[],{initializer:function(){this.addButton({icon:"e/screenreader_helper",callback:this._displayDialogue})},_displayDialogue:function(){this.getDialogue({headerContent:M.util.get_string("pluginname",n),width:"800px",focusAfterHide:!0}).set("bodyContent",this._getDialogueContent()).show()},_getDialogueContent:function(){var e=a.Handlebars.compile('<div><p id="{{elementid}}_{{CSS.STYLESLABEL}}">{{get_string "liststyles" component}}<br/><span aria-labelledby="{{elementid}}_{{CSS.STYLESLABEL}}" /></p></div><span class="listStyles"></span><p id="{{elementid}}_{{CSS.LINKSLABEL}}">{{get_string "listlinks" component}}<br/><span aria-labelledby="{{elementid}}_{{CSS.LINKSLABEL}}"/></p><span class="listLinks"></span><p id="{{elementid}}_{{CSS.IMAGESLABEL}}">{{get_string "listimages" component}}<br/><span aria-labelledby="{{elementid}}_{{CSS.IMAGESLABEL}}"/></p><span class="listImages"></span>'),t=a.Node.create(e({CSS:i,component:n}));return t.one(".listStyles").empty().appendChild(this._listStyles()),t.one(".listLinks").empty().appendChild(this._listLinks()),t.one(".listImages").empty().appendChild(this._listImages()),t},_listStyles:function(){var e,t=[],i=this.get("host").getSelectionParentNode();for(i=i&&a.one(i);i&&i!==this.editor;)void 0!==(e=i.get("tagName"))&&t.push(a.Escape.html(e)),i=i.ancestor();return 0===t.length&&t.push(M.util.get_string("nostyles",n)),t.reverse(),t.join(", ")},_listLinks:function(){var t,i,l=a.Node.create("<ol />");return this.editor.all("a").each(function(e){(i=a.Node.create('<a href="#" title="'+M.util.get_string("selectlink",n)+'">'+a.Escape.html(e.get("text"))+"</a>")).setData("sourcelink",e),i.on("click",this._linkSelected,this),(t=a.Node.create("<li></li>")).appendChild(i),l.appendChild(t)},this),l.hasChildNodes()||l.append("<li>"+M.util.get_string("nolinks",n)+"</li>"),l},_listImages:function(){var i,l,s=a.Node.create("<ol/>");return this.editor.all("img").each(function(e){var t=e.getAttribute("alt");""===t&&""===(t=e.getAttribute("title"))&&(t=e.getAttribute("src")),(l=a.Node.create('<a href="#" title="'+M.util.get_string("selectimage",n)+'">'+a.Escape.html(t)+"</a>")).setData("sourceimage",e),l.on("click",this._imageSelected,this),(i=a.Node.create("<li></li>")).append(l),s.append(i)},this),s.hasChildNodes()||s.append("<li>"+M.util.get_string("noimages",n)+"</li>"),s},_imageSelected:function(e){e.preventDefault(),this.getDialogue({focusAfterNode:null}).hide();var t=this.get("host"),i=e.target.getData("sourceimage");this.editor.focus(),t.setSelection(t.getSelectionFromNode(i))},_linkSelected:function(e){e.preventDefault(),this.getDialogue({focusAfterNode:null}).hide();var t=this.get("host"),i=e.target.getData("sourcelink");this.editor.focus(),t.setSelection(t.getSelectionFromNode(i))}})},"@VERSION@",{requires:["moodle-editor_atto-plugin"]});