<?php
/** Tajik (Cyrillic script) (тоҷикӣ)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Cbrown1023
 * @author Chinneeb
 * @author Farrukh
 * @author FrancisTyers
 * @author Ibrahim
 * @author Kaganer
 * @author Soroush
 * @author ToJack
 * @author Urhixidur
 * @author לערי ריינהארט
 */

$namespaceNames = [
	NS_MEDIA            => 'Медиа',
	NS_SPECIAL          => 'Вижа',
	NS_TALK             => 'Баҳс',
	NS_USER             => 'Корбар',
	NS_USER_TALK        => 'Баҳси_корбар',
	NS_PROJECT_TALK     => 'Баҳси_$1',
	NS_FILE             => 'Акс',
	NS_FILE_TALK        => 'Баҳси_акс',
	NS_MEDIAWIKI        => 'Медиавики',
	NS_MEDIAWIKI_TALK   => 'Баҳси_медиавики',
	NS_TEMPLATE         => 'Шаблон',
	NS_TEMPLATE_TALK    => 'Баҳси_шаблон',
	NS_HELP             => 'Роҳнамо',
	NS_HELP_TALK        => 'Баҳси_роҳнамо',
	NS_CATEGORY         => 'Гурӯҳ',
	NS_CATEGORY_TALK    => 'Баҳси_гурӯҳ',
];

/** @phpcs-require-sorted-array */
$specialPageAliases = [
	'Activeusers'               => [ 'Корбарони_фаъол' ],
	'Allmessages'               => [ 'Паёмҳои_системавӣ' ],
	'AllMyUploads'              => [ 'Тамоми_парвандаҳои_ман' ],
	'Allpages'                  => [ 'Тамоми_саҳифаҳо' ],
	'Badtitle'                  => [ 'Номи_номусоид' ],
	'Blankpage'                 => [ 'Саҳифаи_холӣ' ],
	'Block'                     => [ 'Бастан' ],
	'BlockList'                 => [ 'Феҳристи_басташудаҳо' ],
	'Booksources'               => [ 'Манобеи_китобҳо' ],
	'BrokenRedirects'           => [ 'Саҳифаҳои_равонакунии_кандашуда' ],
	'Categories'                => [ 'Гурӯҳҳо' ],
	'ChangeEmail'               => [ 'Тағйири_почтаи_электронӣ' ],
	'ChangePassword'            => [ 'Тағйири_гузарвожа' ],
	'ComparePages'              => [ 'Муқоисаи_саҳафот' ],
	'Confirmemail'              => [ 'Тасдиқи_почтаи_электронӣ' ],
	'Contributions'             => [ 'Ҳиссагузориҳо' ],
	'CreateAccount'             => [ 'Сохтани_ҳисоби_корбарӣ' ],
	'Deadendpages'              => [ 'Саҳифаҳои_бемаъно' ],
	'DeletedContributions'      => [ 'Саҳми_ҳазфшуда' ],
	'Diff'                      => [ 'Тағйирот' ],
	'DoubleRedirects'           => [ 'Саҳифаҳои_равонакунии_дукарата' ],
	'EditWatchlist'             => [ 'Таҳрири_феҳристи_пайгириҳо' ],
	'Emailuser'                 => [ 'Навиштани_мактуб_ба_корбар' ],
	'ExpandTemplates'           => [ 'Густариши_шаблонҳо' ],
	'Export'                    => [ 'Экспорт' ],
	'Fewestrevisions'           => [ 'Камтарин_нусха' ],
	'FileDuplicateSearch'       => [ 'Ҷустани_парвандаҳои_такрорӣ' ],
	'Filepath'                  => [ 'Масири_парванда' ],
	'Import'                    => [ 'Импорт' ],
	'Invalidateemail'           => [ 'Қатъ_намудани_тасдиқоти_нишонаи_почтаи_электронӣ' ],
	'JavaScriptTest'            => [ 'Тести_JavaScript' ],
	'LinkSearch'                => [ 'Ҷустани_пайвандҳо' ],
	'Listadmins'                => [ 'Феҳристи_мудирон' ],
	'Listbots'                  => [ 'Феҳристи_ботҳо' ],
	'ListDuplicatedFiles'       => [ 'Феҳристи_парвандаҳои_такрорӣ' ],
	'Listfiles'                 => [ 'Феҳристи_аксҳо' ],
	'Listgrouprights'           => [ 'Феҳристи_гурӯҳҳои_корбарӣ' ],
	'Listredirects'             => [ 'Феҳкристи_саҳифаҳои_равонакунӣ' ],
	'Listusers'                 => [ 'Феҳристи_корбарон' ],
	'Lockdb'                    => [ 'Қуфл_намудани_пойгоҳи_додаҳо' ],
	'Log'                       => [ 'Гузоришҳо' ],
	'Lonelypages'               => [ 'Саҳифаҳои_ятим' ],
	'Longpages'                 => [ 'Саҳифаҳои_калон' ],
	'MergeHistory'              => [ 'Идғоми_таърихча' ],
	'MIMEsearch'                => [ 'Ҷустуҷӯи_MIME' ],
	'Mostcategories'            => [ 'Сергурӯҳтарин_саҳафот' ],
	'Mostimages'                => [ 'Серистифодашавандатарин_парвандаҳо' ],
	'Mostinterwikis'            => [ 'Бештарин_миёнавики' ],
	'Mostlinked'                => [ 'Истифодашавандатарин_саҳифаҳо' ],
	'Mostlinkedcategories'      => [ 'Истифодашавандатарин_гурӯҳҳо' ],
	'Mostlinkedtemplates'       => [ 'Истифодашавандатарин_шаблонҳо' ],
	'Mostrevisions'             => [ 'Саҳифаҳо_бо_бештарин_нусха' ],
	'Movepage'                  => [ 'Интиқоли_саҳифа' ],
	'Mycontributions'           => [ 'Саҳми_ман' ],
	'MyLanguage'                => [ 'Забони_ман' ],
	'Mypage'                    => [ 'Саҳифаи_ман' ],
	'Mytalk'                    => [ 'Баҳси_ман' ],
	'Myuploads'                 => [ 'Парвандаҳои_фиристодаи_ман' ],
	'Newimages'                 => [ 'Парвандаҳои_нав' ],
	'Newpages'                  => [ 'Саҳифаҳои_нав' ],
	'PasswordReset'             => [ 'Партофтани_гузарвожа' ],
	'PermanentLink'             => [ 'Пайванди_доимӣ' ],
	'Preferences'               => [ 'Танзимот' ],
	'Prefixindex'               => [ 'Намои_пешвандӣ' ],
	'Protectedpages'            => [ 'Саҳифаҳои_муфозатшуда' ],
	'Protectedtitles'           => [ 'Номҳои_муҳофизатшуда' ],
	'Randompage'                => [ 'Саҳифаи_тасодуфӣ' ],
	'Randomredirect'            => [ 'Саҳифаи_равонакунии_тасодуфӣ' ],
	'Recentchanges'             => [ 'Тағйироти_охирин' ],
	'Recentchangeslinked'       => [ 'Вироишоти_вобаста' ],
	'Revisiondelete'            => [ 'Вироишоти_ҳазфшуда' ],
	'Search'                    => [ 'Ҷустуҷӯ' ],
	'Shortpages'                => [ 'Саҳифаҳои_хурд' ],
	'Specialpages'              => [ 'Саҳифаҳои_вижа' ],
	'Statistics'                => [ 'Омор' ],
	'Tags'                      => [ 'Барчасбҳо' ],
	'Unblock'                   => [ 'Боз_кардан' ],
	'Uncategorizedcategories'   => [ 'Гурӯҳҳои_бе_гурӯҳ' ],
	'Uncategorizedimages'       => [ 'Парвандаҳои_бе_гурӯҳ' ],
	'Uncategorizedpages'        => [ 'Саҳифаҳои_бе_гурӯҳ' ],
	'Uncategorizedtemplates'    => [ 'Шаблонҳои_бе_гурӯҳ' ],
	'Undelete'                  => [ 'Эҳёи_саҳифаи_ҳазфшуда' ],
	'Unlockdb'                  => [ 'Боз_кардани_пойгоҳи_додаҳо' ],
	'Unusedcategories'          => [ 'Гурӯҳҳои_истифоданашуда' ],
	'Unusedimages'              => [ 'Парвандаҳои_истифоданашуда' ],
	'Unusedtemplates'           => [ 'Шаблонҳои_истифоданашуда' ],
	'Upload'                    => [ 'Боргузории_парванда' ],
	'UploadStash'               => [ 'Боркунии_пинҳонӣ' ],
	'Userlogin'                 => [ 'Вуруд' ],
	'Userlogout'                => [ 'Хуруҷ' ],
	'Userrights'                => [ 'Идораи_гурӯҳҳои_корбарӣ' ],
	'Version'                   => [ 'Нусха' ],
	'Wantedcategories'          => [ 'Гурӯҳҳҳои_дархостӣ' ],
	'Wantedfiles'               => [ 'Парвандаҳои_дархостӣ' ],
	'Wantedpages'               => [ 'Саҳифаҳои_дархостӣ' ],
	'Wantedtemplates'           => [ 'Шаблонҳои_дархости' ],
	'Watchlist'                 => [ 'Феҳристи_пайгириҳо' ],
	'Whatlinkshere'             => [ 'Пайвандҳо_ба_инҷо' ],
	'Withoutinterwiki'          => [ 'Бе_интервики' ],
];

$magicWords = [
	'redirect'                  => [ '0', '#равона', '#REDIRECT' ],
	'notoc'                     => [ '0', '__БЕ_ФЕҲРИСТ__', '__NOTOC__' ],
	'nogallery'                 => [ '0', '__БЕ_НИГОРХОНА__', '__NOGALLERY__' ],
	'forcetoc'                  => [ '0', '__БО_ФЕҲРИСТ__', '__FORCETOC__' ],
	'toc'                       => [ '0', '__ФЕҲРИСТ__', '__TOC__' ],
	'noeditsection'             => [ '0', '__БЕ_ВИРОИШИ_ҶУЗЪӢ__', '__NOEDITSECTION__' ],
	'currentmonth'              => [ '1', 'МОҲИ_КУНУНӢ', 'МОҲИ_КУНУНӢ_2', 'CURRENTMONTH', 'CURRENTMONTH2' ],
	'currentmonth1'             => [ '1', 'МОҲИ_КУНУНӢ_1', 'CURRENTMONTH1' ],
	'currentmonthname'          => [ '1', 'НОМИ_МОҲИ_КУНУНӢ', 'CURRENTMONTHNAME' ],
	'currentmonthnamegen'       => [ '1', 'НОМИ_МОҲИ_КУНУНӢ_ТАСРИФ', 'CURRENTMONTHNAMEGEN' ],
	'currentmonthabbrev'        => [ '1', 'НОМИ_МОҲИ_КУНУНӢ_ИХТИСОР', 'CURRENTMONTHABBREV' ],
	'currentday'                => [ '1', 'РӮЗИ_КУНУНӢ', 'CURRENTDAY' ],
	'currentday2'               => [ '1', 'РӮЗИ_КУНУНИ_2', 'CURRENTDAY2' ],
	'currentdayname'            => [ '1', 'НОМИ_РӮЗИ_КУНУНӢ', 'CURRENTDAYNAME' ],
	'currentyear'               => [ '1', 'СОЛИ_КУНУНӢ', 'CURRENTYEAR' ],
	'currenttime'               => [ '1', 'ЗАМОНИ_КУНУНӢ', 'CURRENTTIME' ],
	'currenthour'               => [ '1', 'СОАТИ_КУНУНӢ', 'CURRENTHOUR' ],
	'localmonth'                => [ '1', 'МОҲИ_МАҲАЛЛӢ', 'МОҲИ_МАҲАЛЛӢ_2', 'LOCALMONTH', 'LOCALMONTH2' ],
	'localmonth1'               => [ '1', 'МОҲИ_МАҲАЛЛӢ_1', 'LOCALMONTH1' ],
	'localmonthname'            => [ '1', 'НОМИ_МОҲИ_МАҲАЛЛӢ', 'LOCALMONTHNAME' ],
	'localmonthnamegen'         => [ '1', 'НОМИ_МОҲИ_МАҲАЛЛӢ_ТАСРИФ', 'LOCALMONTHNAMEGEN' ],
	'localmonthabbrev'          => [ '1', 'НОМИ_МОҲИ_МАҲАЛЛӢ_ИХТИСОР', 'LOCALMONTHABBREV' ],
	'localday'                  => [ '1', 'РӮЗИ_МАҲАЛЛӢ', 'LOCALDAY' ],
	'localday2'                 => [ '1', 'РӮЗИ_МАҲАЛЛӢ_2', 'LOCALDAY2' ],
	'localdayname'              => [ '1', 'НОМИ_РӮЗИ_МАҲАЛЛӢ', 'LOCALDAYNAME' ],
	'localyear'                 => [ '1', 'СОЛИ_МАҲАЛЛӢ', 'LOCALYEAR' ],
	'localtime'                 => [ '1', 'ЗАМОНИ_МАҲАЛЛӢ', 'LOCALTIME' ],
	'localhour'                 => [ '1', 'СОАТИ_МАҲАЛЛӢ', 'LOCALHOUR' ],
	'numberofpages'             => [ '1', 'ШУМОРАИ_САҲИФАҲО', 'NUMBEROFPAGES' ],
	'numberofarticles'          => [ '1', 'ШУМОРАИ_МАҚОЛАҲО', 'NUMBEROFARTICLES' ],
	'numberoffiles'             => [ '1', 'ШУМОРАИ_ПАРВАНДАҲО', 'NUMBEROFFILES' ],
	'numberofusers'             => [ '1', 'ШУМОРАИ_КОРБАРОН', 'NUMBEROFUSERS' ],
	'numberofactiveusers'       => [ '1', 'ШУМОРАИ_КОРБАРОНИ_ФАЪОЛ', 'NUMBEROFACTIVEUSERS' ],
	'numberofedits'             => [ '1', 'ШУМОРАИ_ВИРОИШОТ', 'NUMBEROFEDITS' ],
	'pagename'                  => [ '1', 'НОМИ_САҲИФА', 'PAGENAME' ],
	'pagenamee'                 => [ '1', 'НОМИ_САҲИФА_2', 'PAGENAMEE' ],
	'namespace'                 => [ '1', 'ФАЗОИ_НОМ', 'NAMESPACE' ],
	'namespacee'                => [ '1', 'ФАЗОИ_НОМ_2', 'NAMESPACEE' ],
	'namespacenumber'           => [ '1', 'РАҚАМИ_ФАЗОИ_НОМ', 'NAMESPACENUMBER' ],
	'talkspace'                 => [ '1', 'ФАЗОИ_БАҲСҲО', 'TALKSPACE' ],
	'talkspacee'                => [ '1', 'ФАЗОИ_БАҲСҲО_2', 'TALKSPACEE' ],
	'subjectspace'              => [ '1', 'ФАЗОИ_МАҚОЛАҲО', 'SUBJECTSPACE', 'ARTICLESPACE' ],
	'subjectspacee'             => [ '1', 'ФАЗОИ_МАҚОЛАҲО_2', 'SUBJECTSPACEE', 'ARTICLESPACEE' ],
	'fullpagename'              => [ '1', 'НОМИ_ПУРРАИ_САҲИФА', 'FULLPAGENAME' ],
	'fullpagenamee'             => [ '1', 'НОМИ_ПУРРАИ_САҲИФА_2', 'FULLPAGENAMEE' ],
	'subpagename'               => [ '1', 'НОМИ_ЗЕРГУРӮҲ', 'SUBPAGENAME' ],
	'subpagenamee'              => [ '1', 'НОМИ_ЗЕРГУРӮҲ_2', 'SUBPAGENAMEE' ],
	'basepagename'              => [ '1', 'АСОСИИ_НОМИ_САҲИФА', 'BASEPAGENAME' ],
	'basepagenamee'             => [ '1', 'АСОСИИ_НОМИ_САҲИФА_2', 'BASEPAGENAMEE' ],
	'talkpagename'              => [ '1', 'НОМИ_САҲИФАИ_БАҲС', 'TALKPAGENAME' ],
	'talkpagenamee'             => [ '1', 'НОМИ_САҲИФАИ_БАҲС_2', 'TALKPAGENAMEE' ],
	'subjectpagename'           => [ '1', 'НОМИ_САҲИФА_МАҚОЛА', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ],
	'subjectpagenamee'          => [ '1', 'НОМИ_САҲИФА_МАҚОЛА_2', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ],
	'msg'                       => [ '0', 'ПАЁМ:', 'MSG:' ],
	'subst'                     => [ '0', 'МОНДАН:', 'SUBST:' ],
	'safesubst'                 => [ '0', 'МОНДАНИҲИФЗ:', 'SAFESUBST:' ],
	'msgnw'                     => [ '0', 'ПАЁМ_БЕ_ВИКИ:', 'MSGNW:' ],
	'img_thumbnail'             => [ '1', 'мини', 'миниатюра', 'thumb', 'thumbnail' ],
	'img_manualthumb'           => [ '1', 'мини=$1', 'миниатюра=$1', 'thumbnail=$1', 'thumb=$1' ],
	'img_right'                 => [ '1', 'рост', 'right' ],
	'img_left'                  => [ '1', 'чап', 'left' ],
	'img_none'                  => [ '1', 'бе', 'none' ],
	'img_width'                 => [ '1', '$1пкс', '$1px' ],
	'img_center'                => [ '1', 'марказ', 'center', 'centre' ],
	'img_framed'                => [ '1', 'чаҳорчӯба', 'рамка', 'frame', 'framed', 'enframed' ],
	'img_frameless'             => [ '1', 'бе_чаҳорчӯба', 'бе_рамка', 'frameless' ],
	'img_page'                  => [ '1', 'саҳифа=$1', 'саҳифа $1', 'page=$1', 'page $1' ],
	'img_upright'               => [ '1', 'болорост', 'боло_рост=$1', 'болорост $1', 'upright', 'upright=$1', 'upright $1' ],
	'img_border'                => [ '1', 'сарҳад', 'border' ],
	'img_baseline'              => [ '1', 'асос', 'baseline' ],
	'img_sub'                   => [ '1', 'поён', 'sub' ],
	'img_super'                 => [ '1', 'боло', 'super', 'sup' ],
	'img_top'                   => [ '1', 'аз_боло', 'top' ],
	'img_text_top'              => [ '1', 'матнболо', 'text-top' ],
	'img_middle'                => [ '1', 'дарбайн', 'middle' ],
	'img_bottom'                => [ '1', 'дарпоён', 'bottom' ],
	'img_text_bottom'           => [ '1', 'матнпоён', 'text-bottom' ],
	'img_link'                  => [ '1', 'пайванд=$1', 'link=$1' ],
	'img_alt'                   => [ '1', 'алт=$1', 'alt=$1' ],
	'int'                       => [ '0', 'ДАРУН:', 'INT:' ],
	'sitename'                  => [ '1', 'НОМИ_СОМОНА', 'НОМИ_САЙТ', 'SITENAME' ],
	'ns'                        => [ '0', 'ПИ:', 'NS:' ],
	'nse'                       => [ '0', 'ПИК:', 'NSE:' ],
	'localurl'                  => [ '0', 'СУРОҒАИ_ЛОКАЛӢ:', 'LOCALURL:' ],
	'localurle'                 => [ '0', 'СУРОҒАИ_ЛОКАЛӢ_2:', 'LOCALURLE:' ],
	'articlepath'               => [ '0', 'МАСИРИ_САҲИФА', 'ARTICLEPATH' ],
	'pageid'                    => [ '0', 'ИДЕНТИФИКАТОРИ_САҲИФА', 'PAGEID' ],
	'server'                    => [ '0', 'СЕРВЕР', 'SERVER' ],
	'servername'                => [ '0', 'НОМИ_СЕРВЕР', 'SERVERNAME' ],
	'scriptpath'                => [ '0', 'МАСИРИ_СКРИПТ', 'SCRIPTPATH' ],
	'stylepath'                 => [ '0', 'МАСИРИ_УСЛУБ', 'STYLEPATH' ],
	'grammar'                   => [ '0', 'ТАСРИФ:', 'GRAMMAR:' ],
	'gender'                    => [ '0', 'ҶИНС:', 'GENDER:' ],
	'notitleconvert'            => [ '0', '__БЕ_ТАҒЙИРИ_САРЛАВҲА__', '__NOTITLECONVERT__', '__NOTC__' ],
	'nocontentconvert'          => [ '0', '__БЕ_ТАҒЙИРИ_МАТН__', '__NOCONTENTCONVERT__', '__NOCC__' ],
	'currentweek'               => [ '1', 'ХАФТАИ_КУНУНӢ', 'CURRENTWEEK' ],
	'currentdow'                => [ '1', 'РӮЗИ_КУНУНИИ_ҲАФТА', 'CURRENTDOW' ],
	'localweek'                 => [ '1', 'ҲАФТАИ_МАҲАЛЛӢ', 'LOCALWEEK' ],
	'localdow'                  => [ '1', 'РУЗИ_ҲАФТАИ_МАҲАЛЛӢ', 'LOCALDOW' ],
	'revisionid'                => [ '1', 'ИД_НУСХА', 'REVISIONID' ],
	'revisionday'               => [ '1', 'РӮЗИ_НУСХА', 'REVISIONDAY' ],
	'revisionday2'              => [ '1', 'РӮЗИ_НУСХА_2', 'REVISIONDAY2' ],
	'revisionmonth'             => [ '1', 'МОҲИ_НУСХА', 'REVISIONMONTH' ],
	'revisionmonth1'            => [ '1', 'МОҲИ_НУСХА_1', 'REVISIONMONTH1' ],
	'revisionyear'              => [ '1', 'СОЛИ_НУСХА', 'REVISIONYEAR' ],
	'revisiontimestamp'         => [ '1', 'НИШОНИ_ЗАМОНИ_НУСХА', 'REVISIONTIMESTAMP' ],
	'revisionuser'              => [ '1', 'НУСХАИ_КОРБАР', 'REVISIONUSER' ],
	'plural'                    => [ '0', 'ШАКЛИ_ҶАМЪ:', 'PLURAL:' ],
	'fullurl'                   => [ '0', 'СУРОҒАИ_ПУРРА:', 'FULLURL:' ],
	'fullurle'                  => [ '0', 'СУРОҒАИ_ПУРРА_2:', 'FULLURLE:' ],
	'lcfirst'                   => [ '0', 'ҲАРФИ_АВВАЛ_ХУРД:', 'LCFIRST:' ],
	'ucfirst'                   => [ '0', 'ҲАРФИ_АВВАЛ_КАЛОН:', 'UCFIRST:' ],
	'lc'                        => [ '0', 'БО_ҲАРФҲОИ_ХУРД:', 'LC:' ],
	'uc'                        => [ '0', 'БО_ҲАРФҲОИ_КАЛОН:', 'UC:' ],
	'raw'                       => [ '0', 'ХОМ:', 'RAW:' ],
	'displaytitle'              => [ '1', 'НАМОИШИ_САРЛАВҲА', 'DISPLAYTITLE' ],
	'rawsuffix'                 => [ '1', 'Н', 'R' ],
	'newsectionlink'            => [ '1', '__ПАЙВАНД_БА_ҚИСМАТИ_НАВ__', '__NEWSECTIONLINK__' ],
	'nonewsectionlink'          => [ '1', '__БЕ_ПАЙВАНД_БА_ҚИСМАТИ_НАВ__', '__NONEWSECTIONLINK__' ],
	'currentversion'            => [ '1', 'НУСХАИ_КУНУНӢ', 'CURRENTVERSION' ],
	'urlencode'                 => [ '0', 'СУРОҒАИ_РАМЗ:', 'URLENCODE:' ],
	'anchorencode'              => [ '0', 'РАМЗКУНИИ_БАРЧАСБ', 'ANCHORENCODE' ],
	'currenttimestamp'          => [ '1', 'БАРЧАСБИ_ЗАМОНИ_КУНУНӢ', 'CURRENTTIMESTAMP' ],
	'localtimestamp'            => [ '1', 'БАРЧАСБИ_ЗАМОНИ_МАҲАЛЛӢ', 'LOCALTIMESTAMP' ],
	'directionmark'             => [ '1', 'МАСИРИ_ПАЁМ', 'DIRECTIONMARK', 'DIRMARK' ],
	'language'                  => [ '0', '#ЗАБОН:', '#LANGUAGE:' ],
	'contentlanguage'           => [ '1', 'ЗАБОНИ_МӮҲТАВО', 'CONTENTLANGUAGE', 'CONTENTLANG' ],
	'pagesinnamespace'          => [ '1', 'САҲИФАҲО_ДАР_ФАЗОҲОИ_НОМ:', 'PAGESINNAMESPACE:', 'PAGESINNS:' ],
	'numberofadmins'            => [ '1', 'ШУМОРАИ_МУДИРОН', 'NUMBEROFADMINS' ],
	'formatnum'                 => [ '0', 'ФОРМАТИ_РАҚАМ', 'FORMATNUM' ],
	'padleft'                   => [ '0', 'АЗ_ТАРАФИ_ЧАП', 'PADLEFT' ],
	'padright'                  => [ '0', 'АЗ_ТАРАФИ_РОСТ', 'PADRIGHT' ],
	'special'                   => [ '0', 'ВИЖА', 'special' ],
	'defaultsort'               => [ '1', 'ТАРТИБ_БА_ТАВРИ_ПЕШФАРЗ:', 'КАЛИДИ_ТАРТИБ:', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ],
	'filepath'                  => [ '0', 'МАСИРИ_ПАРВАНДА:', 'FILEPATH:' ],
	'tag'                       => [ '0', 'барчасб', 'тег', 'тэг', 'tag' ],
	'hiddencat'                 => [ '1', '__ГУРӮҲИ_ПИНҲОН__', '__HIDDENCAT__' ],
	'pagesincategory'           => [ '1', 'САҲИФА_ДАР_ГУРӮҲ', 'PAGESINCATEGORY', 'PAGESINCAT' ],
	'pagesize'                  => [ '1', 'АНДОЗАИ_САҲИФА', 'PAGESIZE' ],
	'index'                     => [ '1', '__ИНДЕКС__', '__INDEX__' ],
	'noindex'                   => [ '1', '__БЕ_ИНДЕКС__', '__NOINDEX__' ],
	'numberingroup'             => [ '1', 'РАҚАМ_ДАР_ГУРӮҲ', 'NUMBERINGROUP', 'NUMINGROUP' ],
	'staticredirect'            => [ '1', '__РАВОНАИ_СТАТИСТИКӢ__', '__STATICREDIRECT__' ],
	'protectionlevel'           => [ '1', 'ДАРАҶАИ_МУҲОФИЗАТ', 'PROTECTIONLEVEL' ],
	'formatdate'                => [ '0', 'форматисана', 'formatdate', 'dateformat' ],
	'url_path'                  => [ '0', 'МАСИР', 'PATH' ],
	'url_wiki'                  => [ '0', 'ВИКИ', 'WIKI' ],
	'url_query'                 => [ '0', 'ДАРХОСТ', 'QUERY' ],
	'pagesincategory_all'       => [ '0', 'ҳама', 'all' ],
	'pagesincategory_pages'     => [ '0', 'саҳифаҳо', 'pages' ],
	'pagesincategory_subcats'   => [ '0', 'зергурӯҳҳо', 'subcats' ],
	'pagesincategory_files'     => [ '0', 'аксҳо', 'files' ],
];

$datePreferences = [
	'default',
	'dmy',
	'persian',
	'ISO 8601',
];

$defaultDateFormat = 'dmy';

$datePreferenceMigrationMap = [
	'default',
	'default',
	'default',
	'default'
];

$dateFormats = [
	'dmy time' => 'H:i',
	'dmy date' => 'j xg Y',
	'dmy both' => 'H:i, j xg Y',

	'persian time' => 'H:i',
	'persian date' => 'xij xiF xiY',
	'persian both' => 'H:i, xij xiF xiY',

	'ISO 8601 time' => 'xnH:xni:xns',
	'ISO 8601 date' => 'xnY-xnm-xnd',
	'ISO 8601 both' => 'xnY-xnm-xnd"T"xnH:xni:xns',
];

$linkTrail = '/^([a-zабвгдеёжзийклмнопрстуфхчшъэюяғӣқўҳҷцщыь]+)(.*)$/sDu';
