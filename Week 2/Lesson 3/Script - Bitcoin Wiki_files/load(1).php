window.mwPerformance=(window.performance&&performance.mark)?performance:{mark:function(){}};window.mwNow=(function(){var perf=window.performance,navStart=perf&&perf.timing&&perf.timing.navigationStart;return navStart&&typeof perf.now==='function'?function(){return navStart+perf.now();}:function(){return Date.now();};}());window.isCompatible=function(str){var ua=str||navigator.userAgent;return!!((function(){'use strict';return!this&&!!Function.prototype.bind&&!!window.JSON;}())&&'querySelector'in document&&'localStorage'in window&&'addEventListener'in window&&!(ua.match(/webOS\/1\.[0-4]|SymbianOS|Series60|NetFront|Opera Mini|S40OviBrowser|MeeGo|Android.+Glass|^Mozilla\/5\.0 .+ Gecko\/$|googleweblight/)||ua.match(/PlayStation/i)));};(function(){var NORLQ,script;if(!isCompatible()){document.documentElement.className=document.documentElement.className.replace(/(^|\s)client-js(\s|$)/,'$1client-nojs$2');NORLQ=window.NORLQ||[];while(NORLQ.length){NORLQ.shift()();}window.NORLQ={push:function(fn){fn();}};window.RLQ={push:function(){}};return;}function startUp(){mw.config=new mw.Map(true);mw.loader.addSource({"local":"/w/load.php"});mw.loader.register([["site","1mvtcc2",[1]],["site.styles","0uebps0",[],"site"],["noscript","0ivxcym",[],"noscript"],["filepage","0iq2gb5"],["user.groups","1ut0nlr",[5]],["user","01ofszh",[6],"user"],["user.styles","181klbf",[],"user"],["user.defaults","09ihu8z"],["user.options","0bhc5ha",[7],"private"],["user.tokens","1gkmz1d",[],"private"],["mediawiki.language.data","14i3h1c",[176]],["mediawiki.skinning.elements","1bm3mkg"],["mediawiki.skinning.content","1ynmy8w"],["mediawiki.skinning.interface","1qllf55"],["mediawiki.skinning.content.parsoid","01l21r5"],["mediawiki.skinning.content.externallinks","0ecio98"],["jquery.accessKeyLabel","0grwcnx",[25,133]],["jquery.appear","0vtp8xs"],["jquery.async","1u4uzqu"],["jquery.autoEllipsis","0fhtaef",[37]],["jquery.badge","0ilobzq",[173]],["jquery.byteLength","08nasf7"],["jquery.byteLimit","1kbxikz",[21]],["jquery.checkboxShiftClick","12strti"],["jquery.chosen","19ut2j4"],["jquery.client","0nqqu8d"],["jquery.color","0hjrwci",[27]],["jquery.colorUtil","0mbjwex"],["jquery.confirmable","0vvy2zy",[177]],["jquery.cookie","08e2opf"],["jquery.expandableField","0xtohwn"],["jquery.farbtastic","1fdyz16",[27]],["jquery.footHovzer","0awd16v"],["jquery.form","1yg4hsi"],["jquery.fullscreen","0kosvjm"],["jquery.getAttrs","0l00k19"],["jquery.hidpi","10xsp63"],["jquery.highlightText","1hibe83",[133]],["jquery.hoverIntent","0h5nq1i"],["jquery.i18n","1i0st2n",[175]],["jquery.localize","0nkoust"],["jquery.makeCollapsible","0fefpal"],["jquery.mockjax","1t1i0wh"],["jquery.mw-jump","1scanjv"],["jquery.placeholder","1vhkisz"],["jquery.qunit","06sh9kr"],["jquery.spinner","0vxvwly"],["jquery.jStorage","04wgy06"],["jquery.suggestions","1sdrs79",[37]],["jquery.tabIndex","181jib0"],["jquery.tablesorter","0oulvp2",[133,178]],["jquery.textSelection","0zgwfvm",[25]],["jquery.throttle-debounce","1v7rndz"],["jquery.xmldom","0bdxarg"],["jquery.tipsy","0z2in0m"],["jquery.ui.core","1k91gi7",[56],"jquery.ui"],["jquery.ui.core.styles","02mzya5",[],"jquery.ui"],["jquery.ui.accordion","1og4qez",[55,75],"jquery.ui"],["jquery.ui.autocomplete","1j5q5eu",[64],"jquery.ui"],["jquery.ui.button","1f5mqd1",[55,75],"jquery.ui"],["jquery.ui.datepicker","0czs26y",[55],"jquery.ui"],["jquery.ui.dialog","0310pa0",[59,62,66,68],"jquery.ui"],["jquery.ui.draggable","08sphwz",[55,65],"jquery.ui"],["jquery.ui.droppable","0zj00pm",[62],"jquery.ui"],["jquery.ui.menu","1aosmap",[55,66,75],"jquery.ui"],["jquery.ui.mouse","1n7t6i3",[75],"jquery.ui"],["jquery.ui.position","1wepnx4",[],"jquery.ui"],["jquery.ui.progressbar","06vaeab",[55,75],"jquery.ui"],["jquery.ui.resizable","1dk0h5y",[55,65],"jquery.ui"],["jquery.ui.selectable","1xun6nl",[55,65],"jquery.ui"],["jquery.ui.slider","17ymq21",[55,65],"jquery.ui"],["jquery.ui.sortable","1cp0nvt",[55,65],"jquery.ui"],["jquery.ui.spinner","0diui71",[59],"jquery.ui"],["jquery.ui.tabs","0iwyo2y",[55,75],"jquery.ui"],["jquery.ui.tooltip","02prhoi",[55,66,75],"jquery.ui"],["jquery.ui.widget","0oa1211",[],"jquery.ui"],["jquery.effects.core","1cjmvja",[],"jquery.ui"],["jquery.effects.blind","1akj6jv",[76],"jquery.ui"],["jquery.effects.bounce","0icg4uh",[76],"jquery.ui"],["jquery.effects.clip","1xi5628",[76],"jquery.ui"],["jquery.effects.drop","09entpc",[76],"jquery.ui"],["jquery.effects.explode","1fqlnf9",[76],"jquery.ui"],["jquery.effects.fade","1bjor1l",[76],"jquery.ui"],["jquery.effects.fold","1m9i8od",[76],"jquery.ui"],["jquery.effects.highlight","120nyt1",[76],"jquery.ui"],["jquery.effects.pulsate","00xbi1l",[76],"jquery.ui"],["jquery.effects.scale","0zdc4d1",[76],"jquery.ui"],["jquery.effects.shake","0tmc26y",[76],"jquery.ui"],["jquery.effects.slide","0ygp03x",[76],"jquery.ui"],["jquery.effects.transfer","07krhpl",[76],"jquery.ui"],["json","1ut0nlr"],["moment","1yr7ep5",[173]],["mediawiki.apihelp","00wdyce"],["mediawiki.template","18hmewa"],["mediawiki.template.mustache","1t2ei7a",[93]],["mediawiki.template.regexp","0sffbgm",[93]],["mediawiki.apipretty","1u8udjc"],["mediawiki.api","016is7j",[150,9]],["mediawiki.api.category","02othep",[138,97]],["mediawiki.api.edit","095ronj",[138,148]],["mediawiki.api.login","181ym17",[97]],["mediawiki.api.options","1n6nccp",[97]],["mediawiki.api.parse","1f8hf2n",[97]],["mediawiki.api.upload","1wyhuhf",[99]],["mediawiki.api.user","0vxi887",[97]],["mediawiki.api.watch","1vdujz0",[97]],["mediawiki.api.messages","0twbm1n",[97]],["mediawiki.api.rollback","1ph2h6h",[97]],["mediawiki.content.json","0qctm6y"],["mediawiki.confirmCloseWindow","1w1pg6a"],["mediawiki.debug","11e8swc",[32]],["mediawiki.diff.styles","19vt552"],["mediawiki.feedback","0zkpikn",[138,127,273]],["mediawiki.feedlink","1rw1htf"],["mediawiki.filewarning","0cxse4h",[269]],["mediawiki.ForeignApi","0dsc1ap",[116]],["mediawiki.ForeignApi.core","06bvkjh",[97,265]],["mediawiki.helplink","1y9f4g1"],["mediawiki.hidpi","1czz49x",[36],null,null,"return'srcset'in new Image();"],["mediawiki.hlist","1t26ws2"],["mediawiki.htmlform","04k5wst",[22,133]],["mediawiki.htmlform.checker","01tz584",[52]],["mediawiki.htmlform.ooui","18etjyg",[269]],["mediawiki.htmlform.styles","0jto1rq"],["mediawiki.htmlform.ooui.styles","0j3uvex"],["mediawiki.icon","0h25gju"],["mediawiki.inspect","0iwun2m",[21,133]],["mediawiki.messagePoster","1o1bytc",[115]],["mediawiki.messagePoster.wikitext","1cg7cl5",[99,127]],["mediawiki.notification","069l8vh",[150]],["mediawiki.notify","1dnjppv"],["mediawiki.notification.convertmessagebox","1mivxc2",[129]],["mediawiki.notification.convertmessagebox.styles","0hvt0nr"],["mediawiki.RegExp","1mp6gnb"],["mediawiki.pager.tablePager","00x7ht1"],["mediawiki.searchSuggest","1o8v99h",[35,48,97]],["mediawiki.sectionAnchor","0748esf"],["mediawiki.storage","14zdqp6"],["mediawiki.Title","1lopnif",[21,150]],["mediawiki.Upload","0a5dm5z",[103]],["mediawiki.ForeignUpload","1naruc1",[115,139]],["mediawiki.ForeignStructuredUpload.config","0msydx9"],["mediawiki.ForeignStructuredUpload","1tpmzzm",[141,140]],["mediawiki.Upload.Dialog","0dc807e",[144]],["mediawiki.Upload.BookletLayout","0xnv9ex",[139,177,262,91,271,273]],["mediawiki.ForeignStructuredUpload.BookletLayout","0pahmpl",[142,144,106,181,254,249]],["mediawiki.toc","001vj5l",[154]],["mediawiki.Uri","1hpvjf0",[150,95]],["mediawiki.user","0ov6xll",[104,137,8]],["mediawiki.userSuggest","1rlpei6",[48,97]],["mediawiki.util","0153wcw",[16,130]],["mediawiki.viewport","0v59mfc"],["mediawiki.checkboxtoggle","0y2ijcu"],["mediawiki.checkboxtoggle.styles","1dgyacg"],["mediawiki.cookie","11vkf8t",[29]],["mediawiki.toolbar","1sez3rk",[51]],["mediawiki.experiments","1pl4rie"],["mediawiki.action.edit","0umeckx",[51,158,97,251]],["mediawiki.action.edit.styles","1iyuu2p"],["mediawiki.action.edit.collapsibleFooter","0y9e9lg",[41,125,137]],["mediawiki.action.edit.preview","0ojz5f6",[33,46,51,97,111,177,269]],["mediawiki.action.history","1eflwlp"],["mediawiki.action.history.styles","0tpl2gr"],["mediawiki.action.history.diff","19vt552"],["mediawiki.action.view.dblClickEdit","002fpwo",[150,8]],["mediawiki.action.view.metadata","10z3few"],["mediawiki.action.view.categoryPage.styles","0dko70u"],["mediawiki.action.view.postEdit","0zdgnrt",[177,129]],["mediawiki.action.view.redirect","0dcz90s",[25]],["mediawiki.action.view.redirectPage","1elolzv"],["mediawiki.action.view.rightClickEdit","12ozilc"],["mediawiki.action.edit.editWarning","0fuqbdl",[51,109,177]],["mediawiki.action.view.filepage","19iaq3k"],["mediawiki.language","11mjv1u",[174,10]],["mediawiki.cldr","11jwirc",[175]],["mediawiki.libs.pluralruleparser","190yipu"],["mediawiki.language.init","0f7d4nl"],["mediawiki.jqueryMsg","1c0uixg",[173,150,8]],["mediawiki.language.months","074s216",[173]],["mediawiki.language.names","02wxp1n",[176]],["mediawiki.language.specialCharacters","0qem0v5",[173]],["mediawiki.libs.jpegmeta","1xi5jbv"],["mediawiki.page.gallery","17p9xv8",[52,183]],["mediawiki.page.gallery.styles","1bmis4u"],["mediawiki.page.gallery.slideshow","1kxdewk",[138,97,271,286]],["mediawiki.page.ready","08ablf1",[16,23,43]],["mediawiki.page.startup","03s544i"],["mediawiki.page.patrol.ajax","18glibg",[46,138,97]],["mediawiki.page.watch.ajax","0pdg3o3",[138,105,177,186]],["mediawiki.page.rollback","1u0zjec",[46,107]],["mediawiki.page.image.pagination","1ce0zco",[46,150]],["mediawiki.rcfilters.filters.base.styles","09oe7ia"],["mediawiki.rcfilters.highlightCircles.seenunseen.styles","1tepg87"],["mediawiki.rcfilters.filters.dm","08i1t7h",[21,147,101,148,265]],["mediawiki.rcfilters.filters.ui","0mt0gwn",[41,193,268,280,282,284,286]],["mediawiki.special","0ytyvxu"],["mediawiki.special.apisandbox.styles","11xtytq"],["mediawiki.special.apisandbox","0a0ozh5",[41,97,177,252,268]],["mediawiki.special.block","1ppzpey",[120,150]],["mediawiki.special.changecredentials.js","17nc7id",[97,122]],["mediawiki.special.changeslist","1rngkgz"],["mediawiki.special.changeslist.enhanced","19siyoq"],["mediawiki.special.changeslist.legend","0zy2dnq"],["mediawiki.special.changeslist.legend.js","1ij58l9",[41,154]],["mediawiki.special.changeslist.visitedstatus","0158goi"],["mediawiki.special.comparepages.styles","1019rhz"],["mediawiki.special.contributions","1503plg",[177,249]],["mediawiki.special.edittags","1ffnj6y",[24]],["mediawiki.special.edittags.styles","02aeyrc"],["mediawiki.special.import","1t2ylsz"],["mediawiki.special.movePage","1bwvtvr",[247,251]],["mediawiki.special.movePage.styles","0k699ss"],["mediawiki.special.pageLanguage","1putzqe",[269]],["mediawiki.special.pagesWithProp","006b2jh"],["mediawiki.special.preferences","0yn13sm",[109,173,131]],["mediawiki.special.preferences.styles","1ooufha"],["mediawiki.special.recentchanges","0jxev1r"],["mediawiki.special.search","1sz0929",[260]],["mediawiki.special.search.commonsInterwikiWidget","0z2fzte",[147,97,177]],["mediawiki.special.search.interwikiwidget.styles","1uqtfi5"],["mediawiki.special.search.styles","08xw1ne"],["mediawiki.special.undelete","0x69xul"],["mediawiki.special.unwatchedPages","1sdxjrb",[138,105]],["mediawiki.special.upload","1ur6ii9",[46,138,97,109,177,181,224,93]],["mediawiki.special.upload.styles","13x5v1a"],["mediawiki.special.userlogin.common.styles","08jzeu5"],["mediawiki.special.userlogin.login.styles","0ekr4lu"],["mediawiki.special.userlogin.signup.js","1euszoj",[97,121,177]],["mediawiki.special.userlogin.signup.styles","0ceoxhx"],["mediawiki.special.userrights","12ig1zx",[131]],["mediawiki.special.watchlist","1sh593n",[138,105,177,269]],["mediawiki.special.watchlist.styles","0c3cjvx"],["mediawiki.special.version","03goayq"],["mediawiki.legacy.config","0pm7q5o"],["mediawiki.legacy.commonPrint","1vnj235"],["mediawiki.legacy.protect","1yulpfz",[22]],["mediawiki.legacy.shared","0dwbzs4"],["mediawiki.legacy.oldshared","1yo4myp"],["mediawiki.legacy.wikibits","0smf87a"],["mediawiki.ui","1bkdm8a"],["mediawiki.ui.checkbox","0p5i9nb"],["mediawiki.ui.radio","1406zaj"],["mediawiki.ui.anchor","1nlfu8w"],["mediawiki.ui.button","0zarhm9"],["mediawiki.ui.input","1o30iku"],["mediawiki.ui.icon","0pnx8ic"],["mediawiki.ui.text","0d44l61"],["mediawiki.widgets","1aje82x",[22,37,138,97,248,271]],["mediawiki.widgets.styles","07j1muw"],["mediawiki.widgets.DateInputWidget","0qh5mgv",[250,91,271]],["mediawiki.widgets.DateInputWidget.styles","0ye88dl"],["mediawiki.widgets.visibleByteLimit","035plfq",[22,269]],["mediawiki.widgets.datetime","038fvnh",[269,287,288]],["mediawiki.widgets.CategorySelector","1ut0nlr",[254]],["mediawiki.widgets.CategoryMultiselectWidget","0bczyny",[115,138,271]],["mediawiki.widgets.SelectWithInputWidget","0liyxql",[256,271]],["mediawiki.widgets.SelectWithInputWidget.styles","0vowckq"],["mediawiki.widgets.MediaSearch","1ya0qvp",[115,138,271]],["mediawiki.widgets.UserInputWidget","1jhoumr",[97,271]],["mediawiki.widgets.UsersMultiselectWidget","1ceetaq",[97,271]],["mediawiki.widgets.SearchInputWidget","1rlkrgv",[135,247]],["mediawiki.widgets.SearchInputWidget.styles","0fo4vhg"],["mediawiki.widgets.StashedFileWidget","1axih7k",[97,269]],["es5-shim","1ut0nlr"],["dom-level2-shim","1ut0nlr"],["oojs","06ay1o5"],["mediawiki.router","0bir8iu",[267]],["oojs-router","0e6qz1o",[265]],["oojs-ui","1ut0nlr",[272,271,273]],["oojs-ui-core","0rd6jpy",[173,265,270,277,278,283,274,275]],["oojs-ui-core.styles","0fkwbk0"],["oojs-ui-widgets","1bz18a1",[269,279,287,288]],["oojs-ui-toolbars","0p01zcs",[269,288]],["oojs-ui-windows","0i0frt0",[269,288]],["oojs-ui.styles.indicators","0572fim"],["oojs-ui.styles.textures","0rosvhy"],["oojs-ui.styles.icons-accessibility","1kkyruv"],["oojs-ui.styles.icons-alerts","138xjrh"],["oojs-ui.styles.icons-content","0t65ppy"],["oojs-ui.styles.icons-editing-advanced","1r2sace"],["oojs-ui.styles.icons-editing-core","0usctfc"],["oojs-ui.styles.icons-editing-list","1df244l"],["oojs-ui.styles.icons-editing-styling","0vtdd8e"],["oojs-ui.styles.icons-interactions","0kk23d3"],["oojs-ui.styles.icons-layout","1x81p3b"],["oojs-ui.styles.icons-location","16v8zs4"],["oojs-ui.styles.icons-media","1auznpz"],["oojs-ui.styles.icons-moderation","0y1b9e2"],["oojs-ui.styles.icons-movement","0j1oqhu"],["oojs-ui.styles.icons-user","0ml9hys"],["oojs-ui.styles.icons-wikimedia","0oj3bmc"],["ext.inputBox.styles","1m2iwz5"],["ext.inputBox","0d8psfg",[52]],["ext.pygments","1n4zs44"],["ext.cite.styles","05madfv"],["ext.cite.a11y","1vbekwv"],["ext.cite.style","1idk59x"],["jquery.wikiEditor","1ut0nlr",[299],"ext.wikiEditor"],["jquery.wikiEditor.core","1w3p025",[51,173],"ext.wikiEditor"],["jquery.wikiEditor.dialogs","1wt5h3a",[49,61,303],"ext.wikiEditor"],["jquery.wikiEditor.dialogs.config","0snt5q3",[48,299,145,143,93],"ext.wikiEditor"],["jquery.wikiEditor.preview","0gmzqiz",[298,97],"ext.wikiEditor"],["jquery.wikiEditor.publish","00b6t6c",[299],"ext.wikiEditor"],["jquery.wikiEditor.toolbar","15bpfp7",[18,29,298,305],"ext.wikiEditor"],["jquery.wikiEditor.toolbar.config","0dv8xha",[303,180],"ext.wikiEditor"],["jquery.wikiEditor.toolbar.i18n","1lti5he",[],"ext.wikiEditor"],["ext.wikiEditor","1ut0nlr",[309],"ext.wikiEditor"],["ext.wikiEditor.styles","1wszbnw",[],"ext.wikiEditor"],["ext.wikiEditor.core","1fvq5cr",[298,148],"ext.wikiEditor"],["ext.wikiEditor.dialogs","08ejjgc",[312,300],"ext.wikiEditor"],["ext.wikiEditor.preview","1vk2gmd",[308,301],"ext.wikiEditor"],["ext.wikiEditor.publish","1nl48lo",[308,302],"ext.wikiEditor"],["ext.wikiEditor.toolbar","1o6qzdw",[308,304],"ext.wikiEditor"],["mediawiki.api.titleblacklist","0j686kz",[97]],["skins.vector.styles","030odhs"],["skins.vector.styles.experimental.print","0xkwayw"],["skins.vector.styles.responsive","1k513x4"],["skins.vector.js","1m49c38",[49,52]],["skins.modern","0tqba7c"],["skins.monobook.styles","0qwt7vm"],["ext.confirmEdit.editPreview.ipwhitelist.styles","1hvxxrt"]]);;mw.config.set({"wgLoadScript":"/w/load.php","debug":!1,"skin":"vector","stylepath":"/w/skins","wgUrlProtocols":"bitcoin\\:|ftp\\:\\/\\/|ftps\\:\\/\\/|geo\\:|git\\:\\/\\/|gopher\\:\\/\\/|http\\:\\/\\/|https\\:\\/\\/|irc\\:\\/\\/|ircs\\:\\/\\/|magnet\\:|mailto\\:|mms\\:\\/\\/|news\\:|nntp\\:\\/\\/|redis\\:\\/\\/|sftp\\:\\/\\/|sip\\:|sips\\:|sms\\:|ssh\\:\\/\\/|svn\\:\\/\\/|tel\\:|telnet\\:\\/\\/|urn\\:|worldwind\\:\\/\\/|xmpp\\:|\\/\\/","wgArticlePath":"/wiki/$1","wgScriptPath":"/w","wgScriptExtension":".php","wgScript":"/w/index.php","wgSearchType":null,"wgVariantArticlePath":!1,"wgActionPaths":{},"wgServer":"https://en.bitcoin.it","wgServerName":"en.bitcoin.it","wgUserLanguage":"en","wgContentLanguage":"en","wgTranslateNumerals":!0,"wgVersion":"1.30.0","wgEnableAPI":!0,"wgEnableWriteAPI":!0,"wgMainPageTitle":"Main Page","wgFormattedNamespaces":{"-2":"Media","-1":"Special","0":"","1":"Talk","2":"User","3":"User talk","4":"Bitcoin Wiki","5":"Bitcoin Wiki talk","6":"File","7":"File talk","8":"MediaWiki","9":"MediaWiki talk","10":"Template","11":"Template talk","12":"Help","13":"Help talk","14":"Category","15":"Category talk","100":"Essay","101":"Essay talk","102":"Source","103":"Source talk"},"wgNamespaceIds":{"media":-2,"special":-1,"":0,"talk":1,"user":2,"user_talk":3,"bitcoin_wiki":4,"bitcoin_wiki_talk":5,"file":6,"file_talk":7,"mediawiki":8,"mediawiki_talk":9,"template":10,"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15,"essay":100,"essay_talk":101,"source":102,"source_talk":103,"bitcoin":4,"bw":4,"bitcoin_talk":5,"image":6,"image_talk":7,"project":4,"project_talk":5},"wgContentNamespaces":[0],"wgSiteName":"Bitcoin Wiki","wgDBname":"db_bitcoin_en","wgExtraSignatureNamespaces":[],"wgAvailableSkins":{"vector":"Vector","modern":"Modern","monobook":"MonoBook","fallback":"Fallback","apioutput":"ApiOutput"},"wgExtensionAssetsPath":"/w/extensions","wgCookiePrefix":"db_bitcoin_en","wgCookieDomain":"","wgCookiePath":"/","wgCookieExpiration":2592000,"wgResourceLoaderMaxQueryLength":2000,"wgCaseSensitiveNamespaces":[],"wgLegalTitleChars":" %!\"$&'()*,\\-./0-9:;=?@A-Z\\\\\\^_`a-z~+\\u0080-\\uFFFF","wgIllegalFileChars":":/\\\\","wgResourceLoaderStorageVersion":1,"wgResourceLoaderStorageEnabled":!0,"wgForeignUploadTargets":["local"],"wgEnableUploads":!0,"wgCiteVisualEditorOtherGroup":!1,"wgCiteResponsiveReferences":!0,"wgWikiEditorMagicWords":{"redirect":"#REDIRECT","img_right":"right","img_left":"left","img_none":"none","img_center":"center","img_thumbnail":"thumb","img_framed":"frame","img_frameless":"frameless"},"mw.msg.wikieditor":"--~~~~"});var RLQ=window.RLQ||[];while(RLQ.length){RLQ.shift()();}window.RLQ={push:function(fn){fn();}};window.NORLQ={push:function(){}};}window.mediaWikiLoadStart=mwNow();mwPerformance.mark('mwLoadStart');script=document.createElement('script');script.src="/w/load.php?debug=false&lang=en&modules=jquery%2Cmediawiki&only=scripts&skin=vector&version=0ra3zif";script.onload=script.onreadystatechange=function(){if(!script.readyState||/loaded|complete/.test(script.readyState)){script.onload=script.onreadystatechange=null;script=null;startUp();}};document.getElementsByTagName('head')[0].appendChild(script);}());