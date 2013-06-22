<?php

$tx['site']['title']="English site Title";
$tx['subsite']['template']="";

$tx['meta']['keywords']="Enter list of comma separated keywords here";
$tx['meta']['description']="Enter website description for search engine results here";

$tx['template']['text1']="text 1 for templates requiring this text";
$tx['template']['text2']="text 2 for templates requiring this text";
$tx['template']['text3']="text 3 for templates requiring this text";

$tx['action']['cancel']="Cancel";
$tx['action']['delete']="delete";
$tx['action']['download']="download";
$tx['action']['edit']="edit";
$tx['action']['ok']="OK";
$tx['action']['restore']="restore";
$tx['action']['save']="save";
$tx['action']['upload']="upload";
$tx['action']['view']="view";

$tx['editmenu']['configuration']="CMS";
$tx['editmenu']['downloads']="Downloads";
$tx['editmenu']['edit']="Edit mode";
$tx['editmenu']['files']="Files";
$tx['editmenu']['help']="Help";
$tx['editmenu']['images']="Images";
$tx['editmenu']['language']="Language";
$tx['editmenu']['log']="Log file";
$tx['editmenu']['logout']="Logout";
$tx['editmenu']['media']="Media";
$tx['editmenu']['normal']="View mode";
$tx['editmenu']['pagemanager']="Pages";
$tx['editmenu']['plugins']="Plugins";
$tx['editmenu']['settings']="Settings";
$tx['editmenu']['stylesheet']="Stylesheet";
$tx['editmenu']['sysinfo']="Info";
$tx['editmenu']['template']="Template";
$tx['editmenu']['userfiles']="Userfiles";
$tx['editmenu']['validate']="Validate links";

$tx['error']['401']="Error 401: Unauthorized";
$tx['error']['403']="Error 403: Forbidden";
$tx['error']['404']="Error 404: Not found";
$tx['error']['alreadyexists']="Already exists";
$tx['error']['cntdelete']="Could not delete";
$tx['error']['cntlocateheading']="No page selected";
$tx['error']['cntopen']="Could not open";
$tx['error']['cntsave']="Could not save";
$tx['error']['cntwriteto']="Could not write to";
$tx['error']['headers']="Cannot modify header information - headers already sent (output started at {location})";
$tx['error']['missing']="Missing";
$tx['error']['nocookies']="Please enable Cookies!";
$tx['error']['nojs']="Please enable Javascript!";
$tx['error']['notreadable']="Not readable";
$tx['error']['notwritable']="Not writeable";
$tx['error']['plugincall']="Function %s() is not defined!";
$tx['error']['plugin_error']="Plugin error: ";
$tx['error']['tolarge']="is too large! Maximum size is set to";
$tx['error']['undefined']="Undefined";
$tx['error']['wrongext']="Wrong file extension in";

$tx['files']['bytes']="bytes";
$tx['files']['totalsize']="Total size";

$tx['filetype']['backup']="backup";
$tx['filetype']['config']="CMS configuration";
$tx['filetype']['content']="content file";
$tx['filetype']['execute']="execute";
$tx['filetype']['file']="file";
$tx['filetype']['folder']="folder";
$tx['filetype']['language']="language file";
$tx['filetype']['log']="log";
$tx['filetype']['stylesheet']="stylesheet";
$tx['filetype']['template']="template";

$tx['heading']['error']="ERROR";
$tx['heading']['warning']="ERROR / WARNING";

$tx['help']['downloads_maxsize']="Maximum size of uploaded files in Byte. This must neither exceed the limit set for upload_max_filesize nor post_max_size in the PHP configuration.";
$tx['help']['editmenu_scroll']="If set to <b>true</b> the admin menu will be scrolled with your webpage";
$tx['help']['editor_height']="Integer or JavaScript expression returning an integer for editor hight in pixels.";
$tx['help']['editor_external']="If you want to use an external editor, install it as a plugin and enter its name here.";
$tx['help']['filebrowser_external']="If you want to use an external file browser, e.g. hi_kcfinder, install the plugin and enter its name here";
$tx['help']['functions_file']="Please do not change";

$tx['help']['show_hidden_path_locator']="<b>true</b> shows the path of the hidden page in the locator.";
$tx['help']['show_hidden_pages_search']="<b>true</b> shows hidden pages in the results of the internal search function.";
$tx['help']['show_hidden_pages_sitemap']="<b>true</b> shows hidden pages in the sitemap.";
$tx['help']['show_hidden_pages_toc']="<b>true</b> shows hidden pages in the toc (navigation menu), if they are called (for example called by link).";

$tx['help']['images_maxsize']="Maximum size of uploaded images in Byte. This must neither exceed the limit set for upload_max_filesize nor post_max_size in the PHP configuration.";
$tx['help']['language_default']="The primary language of your site";
$tx['help']['locator_show_homepage']="<b>true</b> shows a link to the homepage at the start of the locator";
$tx['help']['mailform_captcha']="<b>true</b> enables the captcha in the mailform";
$tx['help']['mailform_email']="If set the mailform will be enabled";
$tx['help']['menu_color']="Not used by CMSimple_XH core";
$tx['help']['menu_highlightcolor']="Not used by CMSimple_XH core";
$tx['help']['menu_levels']="Possible settings are 1 to 6";
$tx['help']['menu_sdoc']="Leave it empty or enter \"parent\", which gives the class \"sdocs\" to higher level navigation links when lower pages of that branch are selected.";
$tx['help']['pagemanager_external']="If you want to use an external page manager, install the plugin and enter its name here";
$tx['help']['plugins_disabled']="A comma separated list of plugins which shall not be loaded. <strong>Caveat: if any of these plugins is actually in use on the site, you may not be able to access the site anymore, and would have to fix this option via FTP!</strong>";
$tx['help']['plugins_folder']="Please do not change";
$tx['help']['security_password']="Default password of the site. Can be substituted in subsites, like secondary language pages etc. under:<br><b>Settings => CMSimple => Website</b><br><br>What you see here is the encrypted version of your password. To change the password, just enter the new one (unencrypted).";
$tx['help']['site_template']="<p>Default template of the site. Can be substituted in subsites, like secondary language pages etc. under:</p><p><b>Settings => CMSimple => Website</b></p>";
$tx['help']['title_format']="The format of the title of the page (&lt;title&gt;).";
$tx['help']['uri_seperator']="The character which separates names of pages and sub pages in the URL.";
$tx['help']['uri_length']="The URLs of the pages will be truncated at this length. This might change in a future release, so it's best to use shorter page headings (e.g. by using Page&rarr;Alternative heading).";
$tx['help']['xhtml_amp']="<b>true</b> converts <b>&</b> to <b>&amp;amp;</b> in your content. Changing this setting is not recommended";
$tx['help']['xhtml_endtags']="<b>true</b> creates in the content XHTML required endslashes in standalone tags like &lt;br&gt; etc.";

$tx['images']['usedin']="Used in";

$tx['languagemenu']['text']="select language: ";

$tx['lastupdate']['dateformat']="F d, Y, H:i";
$tx['lastupdate']['text']="Last update";

$tx['link']['check']="Please check: ";
$tx['link']['check_errors']="Problems encountered: ";
$tx['link']['check_ok']="No errors found";
$tx['link']['checked']=" links have been checked. ";
$tx['link']['email']="Is this e-mail address valid and still in use?";
$tx['link']['error']="Error: ";
$tx['link']['errors']="Errors: ";
$tx['link']['ext_error_domain']="faulty external Link, domain not reachable.";
$tx['link']['ext_error_page']="faulty external Link, page not reachable.";
$tx['link']['hints']="Hints:";
$tx['link']['int_error']="faulty internal Link, page does not exist.";
$tx['link']['link']="Link: ";
$tx['link']['linked_page']="Link target: ";
$tx['link']['page']="Page: ";
$tx['link']['redirect']="The targetted page redirects to another location. Please check it and update your link.";
$tx['link']['returned_status']="Returned http status code: ";
$tx['link']['unknown']="Unknown problem, please check this link.";

$tx['locator']['home']="Home";
$tx['locator']['text']="You are here: ";

$tx['log']['dateformat']="Y-m-d H:i:s";
$tx['log']['loggedin']="logged in";

$tx['login']['loggedout']="You have been logged out";
$tx['login']['warning']="Site administration. Please enter password.";

$tx['mailform']['captcha']="Please enter this number (spam prevention)";
$tx['mailform']['captchafalse']="Please enter anti-spam code";
$tx['mailform']['mustwritemessage']="No message has been entered";
$tx['mailform']['notaccepted']="Please fill in the required fields";
$tx['mailform']['notsend']="The message could not be sent";
$tx['mailform']['send']="The message has been sent";
$tx['mailform']['sendbutton']="Send";
$tx['mailform']['sender']="Your e-mail (required): ";
$tx['mailform']['sendername']="Your name: ";
$tx['mailform']['senderphone']="Your phone number: ";
$tx['mailform']['subject']="Subject (required): ";

$tx['menu']['available_plugins']="Plugins: ";
$tx['menu']['login']="Login";
$tx['menu']['mailform']="Mailform";
$tx['menu']['print']="Print view";
$tx['menu']['select_plugin']="Select plugin ...";
$tx['menu']['sitemap']="Sitemap";
$tx['menu']['tab_main']="Main Settings";
$tx['menu']['tab_css']="Stylesheet";
$tx['menu']['tab_config']="Config";
$tx['menu']['tab_language']="Language";
$tx['menu']['tab_help']="Help";

$tx['message']['deleted']="The content has been successfully deleted.";
$tx['message']['pd_success']="The page data have been successfully saved. However, some settings will only become effective after you refresh the page or browse to another page.";
$tx['message']['pd_fail']="The page data could not be saved. Please try again.";
$tx['message']['restored']="The backup has been successfully restored.";

$tx['navigator']['next']="next »";
$tx['navigator']['previous']="« prev";
$tx['navigator']['top']="top";

$tx['password']['change']="Change password";
$tx['password']['confirmation']="Confirmation";
$tx['password']['fields_missing']="Fill out all fields.";
$tx['password']['invalid']="New password is invalid.";
$tx['password']['mismatch']="New password and its confirmation do not match.";
$tx['password']['new']="New password";
$tx['password']['old']="Old password";
$tx['password']['wrong']="Old password is wrong.";

$tx['result']['created']="created";
$tx['result']['deleted']="deleted";
$tx['result']['uploaded']="uploaded";

$tx['search']['button']="Search";
$tx['search']['found_1']="\"%s\" was found in one page:";
$tx['search']['found_2-4']="\"%s\" was found in %d pages:";
$tx['search']['found_5']="\"%s\" was found in %d pages:";
$tx['search']['notfound']="\"%s\" was not found.";
$tx['search']['result']="Result of your search";

$tx['settings']['backup']="Backup";
$tx['settings']['backupexplain1']="On logout content is backed up and the oldest backup file will be deleted.";
$tx['settings']['backupexplain2']="Backup file names start with date and time of backup as: YYYYMMDD_HHMMSS";
$tx['settings']['ftp']="Use FTP for remote file management";
$tx['settings']['systemfiles']="System files";
$tx['settings']['warning']="Only change settings when you understand the effect your changes will have!";

$tx['submenu']['heading']="Submenu";

$tx['success']['saved'] = "File saved: ";

$tx['syscheck']['encoding']="Encoding 'UTF-8' configured";
$tx['syscheck']['extension']="Extension '%s' loaded";
$tx['syscheck']['writable']="'%s' writable";
$tx['syscheck']['magic_quotes']="Magic quotes runtime off";
$tx['syscheck']['phpversion']="PHP version ≥ %s";
$tx['syscheck']['title']="System check";

$tx['sysinfo']['helplinks']="Info and Help Links";
$tx['sysinfo']['php_version']="PHP-Version";
$tx['sysinfo']['phpinfo_hint']="(opens in a new window or tab)";
$tx['sysinfo']['phpinfo_link']="PHP Info &raquo;";
$tx['sysinfo']['plugins']="Installed Plugins";
$tx['sysinfo']['version']="Installed CMSimple Version";

$tx['template']['default']="default template";

$tx['title']['downloads']="Downloads";
$tx['title']['images']="Images";
$tx['title']['mailform']="Mailform";
$tx['title']['media']="Mediafiles";
$tx['title']['phpinfo']="PHP Info";
$tx['title']['search']="Search";
$tx['title']['settings']="Settings";
$tx['title']['sitemap']="Sitemap";
$tx['title']['sysinfo']="System Info";
$tx['title']['userfiles']="Userfiles";
$tx['title']['validate']="Validate links";

$tx['toc']['dupl']="DUPLICATE HEADING";
$tx['toc']['empty']="EMPTY HEADING";
$tx['toc']['missing']="MISSING HEADING";
$tx['toc']['newpage']="NEW PAGE";

$tx['uri']['toolong']="According to Settings&rarr;CMS&rarr;Uri&rarr;Length the URL is too long:";

$tx['urichar']['new']="";
$tx['urichar']['org']="";

$tx['validate']['extfail']="EXTERNAL LINK FAILED";
$tx['validate']['extok']="EXTERNAL LINK OK";
$tx['validate']['intfail']="INTERNAL LINK FAILED";
$tx['validate']['intfilok']="INTERNAL LINK TO FILE OK";
$tx['validate']['intok']="INTERNAL LINK OK";
$tx['validate']['mailto']="MAILTO LINK";
$tx['validate']['notxt']="NO TEXT IN LINK";

$tx['utf-8']['marker']="äöü";

?>
