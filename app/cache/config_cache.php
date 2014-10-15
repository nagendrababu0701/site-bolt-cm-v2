<?php /* bolt */ die(); ?>json:{"general":{"database":{"prefix":"bolt_","driver":"sqlite","databasename":"boltsite"},"sitename":"BoltCM","homepage":"page\/homepage","homepage_template":"index.twig","locale":"en_GB","recordsperpage":10,"recordsperdashboardwidget":5,"debug":true,"debug_show_loggedoff":false,"debug_error_level":6135,"debug_enable_whoops":true,"debug_permission_audit_mode":false,"frontend_permission_checks":false,"strict_variables":false,"theme":"bolt-v20","debug_compressjs":true,"debug_compresscss":true,"listing_template":"listing.twig","listing_records":6,"listing_sort":"datepublish DESC","caching":{"config":true,"rendering":false,"templates":true,"request":false,"duration":10,"authenticated":false},"wysiwyg":{"images":true,"tables":true,"fontcolor":false,"align":false,"subsuper":false,"embed":true,"anchor":false,"ck":{"allowedContent":true,"autoParagraph":true,"contentsCss":["\/app\/view\/lib\/ckeditor\/contents.css","\/app\/view\/css\/ckeditor.css"],"filebrowserWindowWidth":640,"filebrowserWindowHeight":480},"filebrowser":{"browseUrl":"\/async\/filebrowser\/","imageBrowseUrl":"\/bolt\/files\/files"}},"canonical":"boltsite.anke.twokings.eu","developer_notices":false,"cookies_use_remoteaddr":true,"cookies_use_browseragent":false,"cookies_use_httphost":true,"cookies_https_only":false,"cookies_lifetime":1209600,"thumbnails":{"default_thumbnail":[160,120],"default_image":[1000,750],"quality":80,"cropping":"crop","notfound_image":"view\/img\/default_notfound.png","error_image":"view\/img\/default_error.png","save_files":false,"allow_upscale":false},"accept_file_types":["twig","html","js","css","scss","gif","jpg","jpeg","png","ico","zip","tgz","txt","md","doc","docx","pdf","epub","xls","xlsx","ppt","pptx","mp3","ogg","wav","m4a","mp4","m4v","ogv","wmv","avi","webm","svg"],"hash_strength":10,"branding":{"name":"Bolt","path":"\/beheer","provided_by":[]},"maintenance_mode":false,"payoff":"Sophisticated, Lightweight and Simple","maintenance_template":"maintenance_default.twig","cron_hour":3,"notfound":"page\/not-found","record_template":"record.twig","search_results_template":"listing.twig","search_results_records":10,"add_jquery":false,"changelog":{"enabled":false},"cookies_domain":".boltsite.anke.twokings.eu","session_use_storage_handler":true,"grunt":{"livereload":false,"livereloadport":35729}},"taxonomy":{"tags":{"slug":"tags","singular_slug":"tag","behaves_like":"tags","name":"Tags","singular_name":"Tag","has_sortorder":false,"tagcloud":true},"chapters":{"slug":"chapters","singular_slug":"chapter","behaves_like":"grouping","options":{"main":"The main chapter","meta":"Meta Chapter","other":"The other stuff"},"has_sortorder":true,"name":"Chapters","singular_name":"Chapter"},"categories":{"name":"Categories","slug":"categories","singular_name":"Category","singular_slug":"category","behaves_like":"categories","multiple":true,"options":{"news":"news","events":"events","movies":"movies","music":"music","books":"books","life":"life","love":"love","fun":"fun"},"has_sortorder":false},"slidechapters":{"slug":"slidechapters","singular_slug":"slidechapter","behaves_like":"grouping","options":{"main":"Slideshow homepage"},"has_sortorder":true,"name":"Slidechapters","singular_name":"Slidechapter"}},"menu":{"main":[{"label":"Home","title":"This is the first menu item.","path":"homepage"},{"label":"Features","path":"pages\/features"},{"label":"Documentation","link":"http:\/\/docs.bolt.cm"},{"label":"News","path":"pages\/news"},{"label":"IRC\/Chat","path":"pages\/irc"},{"label":"Download","path":"pages\/download"}]},"routing":{"homepage":{"path":"\/","defaults":{"_controller":"Bolt\\Controllers\\Frontend::homepage"}},"search":{"path":"\/search","defaults":{"_controller":"Bolt\\Controllers\\Frontend::search"}},"preview":{"path":"\/preview\/{contenttypeslug}","defaults":{"_controller":"Bolt\\Controllers\\Frontend::preview"},"requirements":{"contenttypeslug":"Bolt\\Controllers\\Routing::getAnyContentTypeRequirement"}},"contentlink":{"path":"\/{contenttypeslug}\/{slug}","defaults":{"_controller":"Bolt\\Controllers\\Frontend::record"},"requirements":{"contenttypeslug":"Bolt\\Controllers\\Routing::getAnyContentTypeRequirement"}},"taxonomylink":{"path":"\/{taxonomytype}\/{slug}","defaults":{"_controller":"Bolt\\Controllers\\Frontend::taxonomy"},"requirements":{"taxonomytype":"Bolt\\Controllers\\Routing::getAnyTaxonomyTypeRequirement"}},"contentlisting":{"path":"\/{contenttypeslug}","defaults":{"_controller":"Bolt\\Controllers\\Frontend::listing"},"requirements":{"contenttypeslug":"Bolt\\Controllers\\Routing::getPluralContentTypeRequirement"}}},"permissions":{"roles":{"editor":{"description":"This user can edit some content.","label":"Editor"},"chief-editor":{"description":"This user can edit any content in the system.","label":"Chief Editor"},"admin":{"description":"User-level administrator.","label":"Administrator"},"developer":{"description":"Developer access. Only required to change system-level settings.","label":"Developer"},"guest":{"description":"This user can log on, but is not allowed to edit any content.","label":"Guest Editor"}},"global":{"about":["editor","admin","developer"],"activitylog":["admin","developer","chief-editor"],"clearcache":["admin","developer"],"contentaction":["editor","admin","developer"],"dashboard":["everyone"],"dbcheck":["admin","developer"],"dbupdate":["admin","developer"],"dbupdate_result":["admin","developer"],"extensions":["developer"],"fileedit":["admin","developer"],"files:config":["developer"],"files:theme":["developer"],"files:uploads":["admin","developer","chief-editor"],"files":["editor","admin","developer"],"prefill":["developer"],"profile":["everyone"],"settings":["admin","developer","everyone"],"translation":["developer"],"useraction":["admin","developer"],"useredit":["admin","developer"],"users":["admin","developer"],"maintenance-mode":["everyone"],"omnisearch":["everyone"],"login":["anonymous"],"postLogin":["anonymous"],"logout":["everyone"]},"contenttype-all":{"edit":["developer","admin","chief-editor"],"create":["developer","admin","chief-editor"],"publish":["developer","admin","chief-editor"],"depublish":["developer","admin","chief-editor"],"delete":["developer","admin"],"change-ownership":["developer","admin"]},"contenttype-default":{"edit":["editor"],"create":["editor"],"change-ownership":["owner"],"view":["anonymous"],"frontend":["anonymous"]},"contenttypes":null},"extensions":[],"theme":[],"contenttypes":{"news":{"name":"News","singular_name":"Newsitem","fields":{"title":{"type":"text","class":"large","group":false},"slug":{"type":"slug","uses":["title"],"group":false},"image":{"type":"image","extensions":["gif","jpg","jpeg","png"],"group":false},"text":{"type":"html","height":"300px","allowtwig":true,"group":false},"text_markdown":{"type":"markdown","height":"400px","group":false}},"record_template":"newsitem.twig","listing_template":"newslisting.twig","sort":"-id","slug":"news","singular_slug":"newsitem","show_on_dashboard":true,"show_in_menu":true,"default_status":"draft"},"features":{"name":"Features","singular_name":"Feature","fields":{"title":{"type":"text","class":"large","group":false},"slug":{"type":"slug","uses":["title"],"group":false},"image":{"type":"image","extensions":["gif","jpg","jpeg","png"],"group":false},"text":{"type":"html","height":"300px","group":false}},"record_template":"newsitem.twig","listing_template":"features.twig","taxonomy":["chapters"],"recordsperpage":100,"slug":"features","singular_slug":"feature","show_on_dashboard":true,"show_in_menu":true,"sort":"","default_status":"draft"},"homepage":{"name":"Homepage","singular_name":"Home","fields":{"title":{"type":"text","class":"large","group":false},"slug":{"type":"slug","uses":["title"],"group":false},"subtitle":{"label":"Ondertitel","type":"text","class":"wide","group":false},"block1":{"type":"html","height":"150px","group":false},"block2":{"type":"html","height":"150px","group":false},"block3":{"type":"html","height":"150px","group":false}},"template":"index.twig","slug":"homepage","singular_slug":"home","show_on_dashboard":true,"show_in_menu":true,"sort":"","default_status":"draft"},"pages":{"name":"Pages","singular_name":"Page","fields":{"title":{"type":"text","class":"large","group":false},"slug":{"type":"slug","uses":["title"],"group":false},"subtitle":{"type":"text","group":false},"image":{"type":"image","extensions":["gif","jpg","jpeg","png"],"group":false},"body":{"type":"html","height":"300px","group":false},"template":{"label":"Choose a template..","type":"templateselect","filter":"*.twig","group":false}},"template":"page.twig","sort":"title","recordsperpage":100,"slug":"pages","singular_slug":"page","show_on_dashboard":true,"show_in_menu":true,"default_status":"draft"},"slides":{"name":"Slides","singular_name":"slide","fields":{"title":{"type":"text","class":"large","label":"naam slide","group":false},"slug":{"type":"slug","uses":["title"],"group":false},"image":{"type":"image","label":"screenshot desktop","extensions":["gif","jpg","jpeg","png"],"group":false},"imagemobile":{"type":"image","label":"screenshot mobile","extensions":["gif","jpg","jpeg","png"],"group":false},"body":{"type":"html","height":"300px","label":"Lijst highlights per slide","group":false},"sitelink":{"type":"text","class":"large","group":false}},"taxonomy":["slidechapters"],"record_template":"newsitem.twig","listing_template":"showcase.twig","slug":"slides","singular_slug":"slide","show_on_dashboard":true,"show_in_menu":true,"sort":"","default_status":"draft"},"showcases":{"name":"Showcases","singular_name":"showcaseitem","fields":{"title":{"type":"text","class":"large","group":false},"slug":{"type":"slug","uses":["title"],"group":false},"image":{"type":"image","extensions":["gif","jpg","jpeg","png"],"group":false},"sitelink":{"type":"text","class":"large","group":false}},"record_template":"newsitem.twig","listing_template":"showcase.twig","slug":"showcases","singular_slug":"showcaseitem","show_on_dashboard":true,"show_in_menu":true,"sort":"","default_status":"draft"},"blocks":{"name":"Blocks","singular_name":"block","fields":{"title":{"type":"text","class":"large","label":"titel","group":false},"slug":{"type":"slug","uses":["title"],"group":false},"subtitle":{"type":"text","group":false},"body":{"type":"html","height":"300px","label":"Tekst","group":false},"calltoaction":{"type":"text","label":"Tekst op knop","group":false},"sitelink":{"type":"text","label":"Linkt naar","group":false}},"record_template":"newsitem.twig","listing_template":"showcase.twig","slug":"blocks","singular_slug":"block","show_on_dashboard":true,"show_in_menu":true,"sort":"","default_status":"draft"}},"version":"2.0.0 almost beta"}