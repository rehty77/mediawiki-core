<?php
/** Ligure (Ligure)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Dario vet
 * @author Dedee
 * @author Gastaz
 * @author Giromin Cangiaxo
 * @author Malafaya
 * @author Urhixidur
 * @author ZeneizeForesto
 */

$fallback = 'it';

$namespaceNames = array(
	NS_MEDIA            => 'Media',
	NS_SPECIAL          => 'Speçiale',
	NS_TALK             => 'Discûscion',
	NS_USER             => 'Utente',
	NS_USER_TALK        => 'Discûscioîn_ûtente',
	NS_PROJECT_TALK     => 'Discûscioîn_$1',
	NS_FILE             => 'Immaggine',
	NS_FILE_TALK        => 'Discûscioîn_immaggine',
	NS_MEDIAWIKI_TALK   => 'Discûscioîn_MediaWiki',
	NS_TEMPLATE_TALK    => 'Discûscioîn_template',
	NS_HELP             => 'Agiûtto',
	NS_HELP_TALK        => 'Discûscioîn_agiûtto',
	NS_CATEGORY         => 'Categorîa',
	NS_CATEGORY_TALK    => 'Discûscioîn_categorîa',
);

$namespaceAliases = array(
	'Speciale' => NS_SPECIAL,
	'Discussione' => NS_TALK,
	'Discussioni_utente' => NS_USER_TALK,
	'Discussioni_$1' => NS_PROJECT_TALK,
	'Immagine' => NS_FILE,
	'Discussioni_immagine' => NS_FILE_TALK,
	'Discussioni_MediaWiki' => NS_MEDIAWIKI_TALK,
	'Discussioni_template' => NS_TEMPLATE_TALK,
	'Aiuto' => NS_HELP,
	'Discussioni_aiuto' => NS_HELP_TALK,
	'Categoria' => NS_CATEGORY,
	'Discussioni_categoria' => NS_CATEGORY_TALK,
);

$specialPageAliases = array(
	'Allmessages'               => array( 'Messaggi' ),
	'Allpages'                  => array( 'Tûtte e paggine' ),
	'Ancientpages'              => array( 'Paggine meno reçenti' ),
	'Block'                     => array( 'Blocca' ),
	'Blockme'                   => array( 'BloccaProxy' ),
	'Booksources'               => array( 'RiçercaISBN' ),
	'Categories'                => array( 'Categorîe' ),
	'ChangePassword'            => array( 'Rimposta paròlla d\'ordine' ),
	'Confirmemail'              => array( 'Comferma l\'e-mail' ),
	'Contributions'             => array( 'Contribûti' ),
	'Deadendpages'              => array( 'Paggine sensa sciortîa' ),
	'Emailuser'                 => array( 'Mandighe \'n\'e-mail' ),
	'Export'                    => array( 'Esporta' ),
	'Fewestrevisions'           => array( 'Paggine con meno revixoîn' ),
	'Import'                    => array( 'Importa' ),
	'BlockList'                 => array( 'IP bloccæ' ),
	'Listadmins'                => array( 'Amministratoî' ),
	'Listbots'                  => array( 'Bot' ),
	'Listfiles'                 => array( 'Immaggini' ),
	'Listredirects'             => array( 'Rediression' ),
	'Listusers'                 => array( 'Utenti' ),
	'Lockdb'                    => array( 'BloccaDB' ),
	'Log'                       => array( 'Registri', 'Registro' ),
	'Lonelypages'               => array( 'Paggine orfane' ),
	'Longpages'                 => array( 'Paggine ciû longhe' ),
	'MIMEsearch'                => array( 'RiçercaMIME' ),
	'Mostcategories'            => array( 'Paggine con ciû categorîe' ),
	'Mostimages'                => array( 'Immaggini ciû domandæ' ),
	'Mostlinked'                => array( 'Paggine ciû domandæ' ),
	'Mostlinkedcategories'      => array( 'Categorîe ciû domandæ' ),
	'Mostlinkedtemplates'       => array( 'Template ciû domandæ' ),
	'Mostrevisions'             => array( 'Paggine con ciû revixoîn' ),
	'Movepage'                  => array( 'Sposta' ),
	'Mycontributions'           => array( 'Mæ Contribûti' ),
	'Mypage'                    => array( 'Mæ Paggina Utente' ),
	'Mytalk'                    => array( 'Mæ Discûscioîn' ),
	'Newimages'                 => array( 'Immaggini reçenti' ),
	'Newpages'                  => array( 'Paggine ciû reçenti' ),
	'Popularpages'              => array( 'Paggine ciû viscitæ' ),
	'Preferences'               => array( 'Preferense' ),
	'Prefixindex'               => array( 'Prefisci' ),
	'Protectedpages'            => array( 'Paggine protezûe' ),
	'Protectedtitles'           => array( 'Tittoli protezûi' ),
	'Randompage'                => array( 'Paggina a brettio' ),
	'Randomredirect'            => array( 'Rediression a brettio' ),
	'Recentchanges'             => array( 'Ûrtime modiffiche' ),
	'Recentchangeslinked'       => array( 'Modiffiche correlæ' ),
	'Revisiondelete'            => array( 'Scassa revixon' ),
	'Search'                    => array( 'Riçerca', 'Çerca' ),
	'Shortpages'                => array( 'Paggine ciû cûrte' ),
	'Specialpages'              => array( 'Paggine speçiali' ),
	'Statistics'                => array( 'Statistighe' ),
	'Uncategorizedcategories'   => array( 'Categorîe sensa categorîa' ),
	'Uncategorizedimages'       => array( 'Immaggini sensa categorîa' ),
	'Uncategorizedpages'        => array( 'Paggine sensa categorîa' ),
	'Uncategorizedtemplates'    => array( 'Template sensa categorîa' ),
	'Unlockdb'                  => array( 'SbloccaDB' ),
	'Unusedcategories'          => array( 'Categorîe sensa ûso' ),
	'Unusedimages'              => array( 'Immaggini sensa ûso' ),
	'Unusedtemplates'           => array( 'Template sensa ûso' ),
	'Unwatchedpages'            => array( 'Paggine no osservæ' ),
	'Upload'                    => array( 'Carrega' ),
	'Userlogin'                 => array( 'Intra', 'Registrate' ),
	'Userlogout'                => array( 'Sciorti' ),
	'Userrights'                => array( 'Permissi utente' ),
	'Version'                   => array( 'Verscion' ),
	'Wantedcategories'          => array( 'Categorîe domandæ' ),
	'Wantedpages'               => array( 'Paggine domandæ' ),
	'Watchlist'                 => array( 'Osservæ speçiali' ),
	'Whatlinkshere'             => array( 'Cose appunta chì' ),
	'Withoutinterwiki'          => array( 'Sensa Interwiki' ),
);

$messages = array(
# User preference toggles
'tog-underline' => 'Sottolineâ i collegamenti',
'tog-justify' => 'Alliniamento di paragrafi giustificòu',
'tog-hideminor' => 'asconde e modifiche minori inte ùrtime modifiche',
'tog-hidepatrolled' => 'Ascondi e modifiche verificæ inte ùrtime modifiche',
'tog-newpageshidepatrolled' => "Ascondi e paggine verificæ da  l'elenco de paggine ciù reçenti",
'tog-extendwatchlist' => "mostra tùtte e modifiche a-i osservæ speciali, non solo l'urtima",
'tog-usenewrc' => 'Ammuggia pe paggina e modifiche in urtime modifiche e sotta oservaçion (serve o Javascript)',
'tog-numberheadings' => 'Nùmeraçion aotomàtica di tìtoli de seçión',
'tog-showtoolbar' => 'Fanni vedde a barra di strumenti de modìffica (serve JavaScript)',
'tog-editondblclick' => 'Modifica e paggine co-o doggio clic (serve Javascrpt)',
'tog-editsection' => 'Modifica e seçión co-o colegamento [modifica]',
'tog-editsectiononrightclick' => 'Modifica e seçión co-o clic drito in sciô tìtolo (serve Javascipt)',
'tog-showtoc' => "Fanni védde l'indiçe pe-e pàgine con ciù de 3 seçioìn",
'tog-rememberpassword' => "Arregorda a mæ paròlla d'ordine (a-o màscimo pe $1 {{PLURAL:$1|day|days}})",
'tog-watchcreations' => 'Azonzi e paggine che creo e i file che carrego a-i oservæ speciâli',
'tog-watchdefault' => 'Azonzi e paggine e i files che modiffico a-i mæ sotta oservaçion',
'tog-watchmoves' => 'Azonzi e paggine e i file che mescio a-i mæ sotta oservaçion',
'tog-watchdeletion' => 'Azonzi e paggine e i files che scancello a-i mæ sotta oservaçion',
'tog-minordefault' => 'Indica de longo comme menô e modiffiche',
'tog-previewontop' => "Veddi l'anteprimma de d'äto a-o spaçio pe cangiâ",
'tog-previewonfirst' => "Veddi l'anteprimma a-o primmo cangiamento",
'tog-nocache' => 'Disabilita a cache de pagine do navegatô',
'tog-enotifwatchlistpages' => "Famme savéi via e-mail quande 'na paggina o in file inti mæ osservæ a ven cangiâ.",
'tog-enotifusertalkpages' => "Màndime un messaggio e-mail se gh'é de-e modìffiche inta pagina de discuscion da mæ pagina d'utente.",
'tog-enotifminoredits' => 'Inviami una email pe e modifiche menoî ascì de pagine e di file',
'tog-enotifrevealaddr' => 'Mostra o mæ indirizzo e-mail inti messaggi de notifica',
'tog-shownumberswatching' => "Mostra o numero di utenti che tegnan d'oeuggio sta pagina",
'tog-oldsig' => 'Firma attuale:',
'tog-fancysig' => 'Tratta a firma comme wikitesto (sensa un collegamento aotomatico)',
'tog-showjumplinks' => 'Attiva i collegamenti d\'accescibilitæ "sata a"',
'tog-uselivepreview' => "Doeuvia l'anteprimma in diretta (ghe voeu o JavaScript)(sperimentâ)",
'tog-watchlisthideown' => "Ascondi e mæ modiffiche da-a lista che tegno d'oeuggio",
'tog-watchlisthidebots' => "Ascondi e modiffiche di bot da-a lista che tegno d'oeuggio",
'tog-watchlisthideminor' => "Ascondi e modiffiche menoî da-a lista che tegno d'oeuggio",
'tog-watchlisthideliu' => "Ascondi e modiffiche di utenti intræ da-a lista che tegno d'oeuggio",
'tog-watchlisthideanons' => "Ascondi e modiffiche di utenti anonnimi da-a lista che tegno d'oeuggio",
'tog-watchlisthidepatrolled' => "Ascondi e modiffiche za controllæ da-a lista che tegno d'oeuggio",
'tog-ccmeonemails' => "Mandime 'na coppia de e-mail che mando a-i atri utenti",
'tog-diffonly' => 'No mostrâ o contegnuo da paggina sotta o confronto tra verscioin',
'tog-showhiddencats' => 'Fa vedde e categorîe ascose',
'tog-norollbackdiff' => "Ometti o confronto tra verscioin doppo ch'ho fæto o ripristino",
'tog-useeditwarning' => "Avertime se lascio 'na paggina de modiffica sens'avei sarvou i cangi",

'underline-always' => 'Sempre',
'underline-never' => 'Mâi',

# Font style option in Special:Preferences
'editfont-style' => "Stile do carattere de l'aera de modiffica",

# Dates
'sunday' => 'Domenega',
'monday' => 'Lunedì',
'tuesday' => 'Martedì',
'wednesday' => 'Mäcordì',
'thursday' => 'Zeuggia',
'friday' => 'Venardì',
'saturday' => 'Sabbo',
'sun' => 'Dom',
'mon' => 'Lun',
'tue' => 'Mar',
'wed' => 'Mäc',
'thu' => 'Zeu',
'fri' => 'Ven',
'sat' => 'Sab',
'january' => 'Zenâ',
'february' => 'Frevâ',
'march' => 'Marso',
'april' => 'Arvî',
'may_long' => 'Mazzo',
'june' => 'Zûgno',
'july' => 'Lûggio',
'august' => 'Agosto',
'september' => 'Setenbre',
'october' => 'Ôtobre',
'november' => 'Novembre',
'december' => 'Dexembre',
'january-gen' => 'Zenâ',
'february-gen' => 'Frevâ',
'march-gen' => 'Marso',
'april-gen' => 'Arvî',
'may-gen' => 'Mazzo',
'june-gen' => 'Zûgno',
'july-gen' => 'Lûggio',
'august-gen' => 'Agosto',
'september-gen' => 'Settembre',
'october-gen' => 'Ötobre',
'november-gen' => 'Novembre',
'december-gen' => 'Dexembre',
'jan' => 'Zen',
'feb' => 'Fre',
'mar' => 'Mar',
'apr' => 'Arv',
'may' => 'Maz',
'jun' => 'Zûg',
'jul' => 'Lûg',
'aug' => 'Ago',
'sep' => 'Set',
'oct' => 'Öto',
'nov' => 'Nov',
'dec' => 'Dex',

# Categories related messages
'pagecategories' => '{{PLURAL:$1|Categorîa|Categorîe}}',
'category_header' => 'Pàgine inta categorîa "$1"',
'subcategories' => 'Sottocategorîe',
'category-media-header' => 'Media inta categorîa "$1"',
'category-empty' => "''Pe òua sta categorîa a no contegne pàgine ò file murtimediæ.''",
'hidden-categories' => '{{PLURAL:$1|Categoria ascoza|Categorie ascoze}}',
'hidden-category-category' => 'Categorîe ascôse',
'category-subcat-count' => "{{PLURAL:$2|Sta categoria a contegne sôlo 'na sottocategoria, chi de segoito.|Sta categoria a contegne {{PLURAL:$1|a sottocategoria indicâ|e $1 sottocategorie indicæ}} di segoito, pe in totale de $2.}}",
'category-subcat-count-limited' => "'Sta categorîa a contegne {{PLURAL:$1|ûnn-a sottocategorîa, indicaa|$1 sottocategorîe, indicæ}} chì inzû.",
'category-article-count' => "{{PLURAL:$2|Questa categoria a contegne solo sta pagina chì.|Questa categoria a contegne {{PLURAL:$1|a pagina indicâ|e $1 pagine indicæ}} chì de sotta , insce 'n totale de $2.}}",
'category-article-count-limited' => "'Sta categorîa a contegne {{PLURAL:$1|'sta paggina|'ste $1 paggine}}.",
'category-file-count' => "{{PLURAL:$2|Sta categoria a contegne sôlo sto file.|{{PLURAL:$1|Sto file o l'é|Sti $1 file son}} inte sta categoria, pe in totale de $2.}}",
'category-file-count-limited' => 'Questa categoria a contegne {{PLURAL:$1|o file indicao|i $1 file indicæ}} chi de sotta.',
'listingcontinuesabbrev' => 'cont.',
'index-category' => 'Paggine indiçizzæ',
'noindex-category' => 'Pàgine sénsa indiçe',
'broken-file-category' => 'Paggine con di colegamenti a di file che no ghe son',

'about' => 'Informaçioìn',
'article' => 'Pagina de i contenùi',
'newwindow' => "(O s'arve inte 'n âtro barcon)",
'cancel' => 'Scancella',
'moredotdotdot' => 'De ciû...',
'morenotlisted' => 'Atro...',
'mypage' => 'Paggina',
'mytalk' => 'Discuscioin',
'anontalk' => 'Discuscion pe questo indirisso IP',
'navigation' => 'Navegaçión',
'and' => '&#32;e',

# Cologne Blue skin
'qbfind' => 'Attrêuva',
'qbbrowse' => 'Navvega',
'qbedit' => 'Cangia',
'qbpageoptions' => "Opsioîn de 'sta paggina",
'qbmyoptions' => 'E mæ paggine',
'qbspecialpages' => 'Pagine speçiä',
'faq' => 'Domande frequenti',
'faqpage' => 'Project:Domande frequente',

# Vector skin
'vector-action-addsection' => 'Azónzi discusción',
'vector-action-delete' => 'Scancella',
'vector-action-move' => 'Mescia',
'vector-action-protect' => 'Protezi',
'vector-action-undelete' => 'Recuppera',
'vector-action-unprotect' => 'Cangia a proteçion',
'vector-view-create' => 'Crea',
'vector-view-edit' => 'Càngia',
'vector-view-history' => 'Fanni védde a Stöia',
'vector-view-view' => 'Lêzi',
'vector-view-viewsource' => 'Veddi a sorgénte',
'actions' => 'Açioìn',
'namespaces' => 'Namespaces',
'variants' => 'Diferense',

'navigation-heading' => 'Menu de navegaçion',
'errorpagetitle' => 'Erô',
'returnto' => 'Torna a $1.',
'tagline' => 'Da {{SITENAME}}',
'help' => 'Agiùtto',
'search' => 'Çerca',
'searchbutton' => 'Çerca',
'go' => 'Vanni',
'searcharticle' => 'Vanni',
'history' => 'Stöia da pàgina',
'history_short' => 'Stöia',
'updatedmarker' => 'modificâ da-a mæ urtima vixita',
'printableversion' => 'Verscion da stanpâ',
'permalink' => 'Ingancio fisso',
'print' => 'Stampa',
'edit' => 'Càngia',
'create' => 'Crea',
'editthispage' => "Modificâ 'sta pagina",
'create-this-page' => "Crea 'sta paggina",
'delete' => 'Scancella',
'deletethispage' => "Scassa 'sta paggina",
'undelete_short' => 'Recuppera {{PLURAL:$1|una revixon|$1 revixoin}}',
'protect' => 'Protezi',
'protect_change' => 'cangia',
'protectthispage' => "Proteze 'sta paggina.",
'unprotect' => 'Càngia proteçión',
'unprotectthispage' => 'Càngia a proteçión de sta paggina',
'newpage' => 'Nêuva pàgina',
'talkpage' => 'Paggina de discuscion',
'talkpagelinktext' => 'Ciæti',
'specialpage' => 'Pagina speçiâ',
'personaltools' => 'Strùmenti personâli',
'postcomment' => 'Noeuva seçion',
'articlepage' => 'Veddi a voxe',
'talk' => 'Ciæti',
'views' => 'Vìxite',
'toolbox' => 'Arneixi',
'userpage' => 'Veddi a paggina utente',
'projectpage' => 'Veddi a pagina de o progetto',
'imagepage' => 'Vizualizza a paggina do file',
'mediawikipage' => 'Vizualizza o messaggio',
'templatepage' => 'Vizualizza o modello',
'viewhelppage' => "Vizualizza a paggina d'agiutto",
'categorypage' => 'Veddi a paggina da categoria',
'viewtalkpage' => 'Veddi o ciæto',
'otherlanguages' => 'In âtre lengóe',
'redirectedfrom' => '(Rendirissou da $1)',
'redirectpagesub' => 'Paggina de rindirissamento',
'lastmodifiedat' => "Sta pagina a l'è stæta cangiâ l'urtima votta a e $2 do $1.",
'viewcount' => "'Sta paggina a l'è stæta vista {{PLURAL:$1|solo 'na vòtta|$1 vòtte}}.",
'protectedpage' => 'Paggina protetta',
'jumpto' => 'Vanni a:',
'jumptonavigation' => 'Navegaçión',
'jumptosearch' => 'çerca',
'view-pool-error' => "Scuza ma a-o momento i server sono stracarreghi.
Troppi utenti çercan d' amiâ sta paggina.
Aspeta quarche menuto primma de çercâ torna d'accede a sta pagina.

$1",
'pool-errorunknown' => 'Aro sconosciuo',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite' => 'Informaçioìn in sciô {{SITENAME}}',
'aboutpage' => 'Project:Informaçioìn',
'copyright' => 'O contegnûo o se peu trovâ a $1.',
'copyrightpage' => "{{ns:project}}:Driti d'autô",
'currentevents' => 'Atualitæ',
'currentevents-url' => 'Project:Atualitæ',
'disclaimers' => 'Avertense',
'disclaimerpage' => 'Project:Avertense generâli',
'edithelp' => 'Agiùtto',
'edithelppage' => 'Help:Modiffica',
'helppage' => 'Help:Contegnûi',
'mainpage' => 'Pàgina prinçipâ',
'mainpage-description' => 'Pagina prinçipâ',
'policy-url' => 'Project:Lezzi',
'portal' => 'Pòrtego da comunitæ',
'portal-url' => 'Project:Pòrtego da comunitæ',
'privacy' => 'Politica in sci dæti privæ',
'privacypage' => 'Project:Politica in scî dæti privæ',

'badaccess' => "No ti g'hæ o permisso",
'badaccess-group0' => "No ti g'hæ o permisso pe fâ quest'assion.",
'badaccess-groups' => "L'assion che ti vêu fâ a l'è permissa solo a i ûtenti {{PLURAL:$2|do gruppo|de un de sti gruppi}}: $1.",

'versionrequired' => 'Ghe voeu a verscion $1 de MediaWiki',
'versionrequiredtext' => "Pe doeuviâ sta paggina ghe voeu a verscion $1 do software MediaWiki. Amia [[Special:Version|l'appoxita paggina]].",

'ok' => "D'accòrdio",
'retrievedfrom' => 'Estræto da "$1"',
'youhavenewmessages' => "Ti gh'æ $1 ($2).",
'newmessageslink' => 'Nêuvi messaggi',
'newmessagesdifflink' => 'urtima modiffica',
'youhavenewmessagesfromusers' => "Ti g'hæ $1 da {{PLURAL:$3|un atro utente|$3 utenti}} ($2).",
'youhavenewmessagesmanyusers' => "Ti g'hæ $1 da tanti utenti ($2).",
'newmessageslinkplural' => '{{PLURAL:$1|un noeuvo messaggio|noeuvi messaggi}}',
'newmessagesdifflinkplural' => '{{PLURAL:$1|urtima modifica|urtime modifiche}}',
'youhavenewmessagesmulti' => "Ti t'æ neuvi messaggi in scia $1",
'editsection' => 'Càngia',
'editold' => 'càngia',
'viewsourceold' => 'veddi a sorgénte',
'editlink' => 'càngia',
'viewsourcelink' => 'Veddi a sorgénte',
'editsectionhint' => 'Càngia a seçión $1',
'toc' => 'Indiçe',
'showtoc' => 'Fâ vedde',
'hidetoc' => 'Asconde',
'collapsible-collapse' => 'Comprimmi',
'collapsible-expand' => 'Espandi',
'thisisdeleted' => 'Amia o ripristina $1?',
'viewdeleted' => 'Vedde $1?',
'restorelink' => '{{PLURAL:$1|una modifica scancelâ|$1 modifiche scancelæ}}',
'feedlinks' => 'Feed:',
'feed-invalid' => 'Modalitæ de sottoscriçion do feed non vallida.',
'site-rss-feed' => 'Feed RSS de $1',
'site-atom-feed' => 'Feed Atom de $1',
'page-rss-feed' => 'Feed RSS pe "$1"',
'page-atom-feed' => 'Feed Atom pe "$1"',
'red-link-title' => '$1 (ancon da scrîve)',
'sort-descending' => 'Ordine decrescente',
'sort-ascending' => 'Ordine crescente',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main' => 'Pàgina',
'nstab-user' => 'Utente',
'nstab-media' => 'File murtimediâ',
'nstab-special' => 'Pàgina speçiâ',
'nstab-project' => 'Paggina de servissio',
'nstab-image' => 'Archivio',
'nstab-mediawiki' => 'Messaggio',
'nstab-template' => 'Template',
'nstab-help' => 'Agiûtto',
'nstab-category' => 'Categorîa',

# Main script and global functions
'nosuchaction' => 'No se poeu',
'nosuchactiontext' => "L'açion specificâ inta URL a no l'è vallida.
O che t'hæ scrito mâ, o che donque l'ea sbaliou o colegamento.
O magara gh'è 'na cammoa into software doeuviou da {{SITENAME}}.",
'nosuchspecialpage' => "Sta paggina speciale a no gh'è",

# General errors
'error' => 'Errô',
'databaseerror' => 'Errô da a base de i dæti',
'readonly' => 'Database bloccòu',
'enterlockreason' => "Scrivi o motivo do blocco, e 'na stimma de quande o saiâ rimosso",
'missing-article' => "O database o no l'à trovòu o testo di 'na pàgina che ghe saiêiva dovûa êse  co-o nómme de \"\$1\" \$2.

Spésse vòtte questo o sucede quande a vegne riciamâ, da stöia ò dò-u confronto tra revixioìn, in colegaménto a 'na pàgina scancelâ, a in confronto tra revixioìn che no ghe son ciù ò a in confronto tra revixioìn sénsa ciù a stöia.

Se coscì no fîse l'é probabile che t'aggi scoverto 'n erô into software MediaWiki.
Pe favô ti peu segnalâ quello che l'é sucesso a in [[Special:ListUsers/sysop|aministratô]] dîndo  l'URL in questión.",
'missingarticle-rev' => '(nùmero da revixón: $1)',
'internalerror' => 'Errô interno',
'filecopyerror' => 'Non ho potùo copiâ o papê "$1" in te "$2".',
'filedeleteerror' => 'Non ho potùo scassâ o papê "$1".',
'filenotfound' => 'Non ho trovoö o papê "$1".',
'badarticleerror' => "L'açion che ti te veu fâ a non l'è permissa in sta pagina.",
'cannotdelete' => 'Non çe peu scassâ a pagina o o papê. (o peu ese za stæto scassoö da quarchedun ätro).',
'badtitle' => "O tìtolo o no l'è corretto.",
'badtitletext' => "O tittolo da paggina çercâ o l'è vêuo, sballiòu o con caratteri no accettæ, oppû o deriva da 'n errô inti collegamenti inter-lengoa o inter-wiki.",
'viewsource' => 'Veddi a fonte',
'protectedpagetext' => "'Sta paggina a l'è stæta protezûa pe impedîghe a modiffica.",
'viewsourcetext' => "O l'è poscibbile vedde e copiâ o còddice sorgente de 'sta paggina:",
'customjsprotected' => "No ti gh'æ i permessi pe cangiâ sta pagina de JavaScript percose a contegne e impostaçioin personæ de 'n atro utente",
'ns-specialprotected' => 'No se pœu modificâ e paggine speciali',
'titleprotected' => "A creaçion de 'na paggina con sto tittolo a l'è stæta bloccâ da [[User:$1|$1]].
A raxon a l'è: ''$2''.",
'exception-nologin' => "No t'ê introu",
'exception-nologin-text' => "Pe sta paggina ò sta açion ti gh'æ da effettuâ l'accesso inte sta wiki.",

# Virus scanner
'virus-scanfailed' => 'scansion fallia (codice $1)',
'virus-unknownscanner' => 'antivirus sconosciuo:',

# Login and logout pages
'yourname' => 'Nomme',
'yourpassword' => 'Pòula segretta:',
'yourpasswordagain' => 'Riscrivi a pòula segrétta:',
'remembermypassword' => 'Aregòrda a mæ login in sto navegatô (pe in mascimo de $1 {{PLURAL:$1|giórno|giórni}})',
'yourdomainname' => 'Indirisso do scito:',
'password-change-forbidden' => 'No ti peu cangiâ poula segretta in questa wiki.',
'login' => 'Intra',
'nav-login-createaccount' => 'Intra / Registrate',
'loginprompt' => "Pe fâ l'accesso inte {{SITENAME}} ti g'hæ da  abilitâ i cookie.",
'userlogin' => 'Intra / Registrite',
'userloginnocreate' => 'Intra',
'logout' => 'Sciorti',
'userlogout' => 'Sciorti',
'notloggedin' => "No t'ê introu",
'nologin' => "No ti gh'æ ancon in acesso? '''$1'''.",
'nologinlink' => "Creâ 'n' utensa",
'createaccount' => "Crea 'n nêuvo account",
'gotaccount' => "Ti ghe l'æ za 'n' utensa? '''$1'''.",
'gotaccountlink' => 'Intra',
'userlogin-resetlink' => "T'æ ascordòu i teu dæti de acesso?",
'createaccountreason' => 'Raxon:',
'badretype' => "E paròlle d'ordine che t'hæ scrîo son despægie.",
'userexists' => "O nomme ûtente inserîo o l'è za doeuviao.<br />
Çernine 'n âtro.",
'loginerror' => "Errô inte l'accesso",
'createaccounterror' => "Imposcibbile creâ l'account: $1",
'noname' => "O nomme d'ûtente o l'è sballiòu.",
'loginsuccesstitle' => 'Accesso effettuòu',
'loginsuccess' => "'''O collegamento a-o server de {{SITENAME}} co-o nomme d'ûtente \"\$1\" o l'è attivo.'''",
'nosuchuser' => 'No gh\'è nisciûn ûtente con quello nomme "$1". Verificâ o nomme inserîo ò creâ \'n nêuvo accesso.',
'nosuchusershort' => 'No gh\'è nisciûn ûtente con quello nomme "$1". Verificâ o nomme inserîo.',
'nouserspecified' => "O se deive inserî 'n nomme d'ûtente.",
'login-userblocked' => "St'utente o l'è bloccou. Accesso negou.",
'wrongpassword' => "Ti gh'æ scrîo 'na paròlla d'ordine sbaliâ. Tenta torna.",
'wrongpasswordempty' => "No ti g'hæ scrîo nisciûnn-a paròlla d'ordine. Tenta torna.",
'passwordtooshort' => 'E password devan aveighe aomanco {{PLURAL:$1|1 carattere|$1 caratteri}}.',
'password-name-match' => "A password a dev'ese despægia da-o nomme utente.",
'password-login-forbidden' => "L'utilizzo de sto nomme utente e password o l'è stæto proibio.",
'mailmypassword' => "Invia 'na nêuva paròlla segrétta a-a mæ e-mail",
'passwordremindertitle' => "Servissio Password Reminder (nêuva paròlla d'ordine temporannia) de {{SITENAME}}",
'passwordremindertext' => "Quarchedûn (probabilmente ti, con indirisso IP \$1) o l'ha domandòu l'invîo de 'na nêuva paròlla d'ordine pe l'accesso a {{SITENAME}} (\$4).
A paròlla d'ordine pe l'ûtente \"\$2\" a l'è stæta impostâ a \"\$3\".
Se conseggia de fâ l'accesso quanto primma e cangiâ a paròlla d'ordine immediatamente.
Se no ti ê stæto ti a fâ 'sta domanda, oppûre se ti t'hæ ritrovòu a têu paròlla d'ordine e no ti vêu cangiâla ciû, ti pêu ignorâ 'sto messaggio e andâ avanti deuviando a vegia paròlla d'ordine.",
'noemail' => 'No gh\'è nisciûn indirisso e-mail registròu pe l\'ûtente "$1".',
'noemailcreate' => 'Ti devi dâ un addresso e-mail vallido.',
'passwordsent' => "Ûnn-a nêuva paròlla d'ordine a l'è stæta inviâa a l'indirisso e-mail registròu pe l'ûtente \"\$1\".
Pe piaxei, fa 'n accesso appenn-a ti a ghe reçeivi.",
'blocked-mailpassword' => "O teu indirisso IP o l'è affirmoö, e pe sta razon o non se peu usâ a funscion de remandâ a pòula segretta.",
'eauthentsent' => "'N messaggio e-mail de confermassion o l'è stæto inviòu a l'indirisso indicòu.
Pe abilitâ l'invîo de messaggi e-mail pe quest'accesso, o se deive seguî l'istrûssioîn indicæ, coscì ti confermi che ti t'è o legittimo propietâjo de l'indirisso.",
'mailerror' => "Errô inte l'invio do messaggio: $1",
'acct_creation_throttle_hit' => "Ne dispiâxe, ma t'hæ zà creòu $1 accesci. No ti pêu creâne ciû!",
'emailauthenticated' => "O teu indirisso de posta elettronica o l'è stæto autenticou o $2 a $3.",
'emailconfirmlink' => 'Conferma o teu indirisso de posta elettronega',
'accountcreated' => 'Graçie pe esëte registroö!!!',
'accountcreatedtext' => "Utente $1, ti te guägno l'açeiso!",
'createaccount-title' => "Creaçion de 'n conto pe {{SITENAME}}",
'usernamehasherror' => 'O nomme utente o no poeu contegnî di caratteri hash',
'login-abort-generic' => "O to accesso o no l'ha avuo successo - Abortio",
'loginlanguagelabel' => 'Lengoa: $1',

# Change password dialog
'resetpass' => 'Cangia a pòula segretta',
'resetpass_announce' => "T'ê introu co in codiçe temporanio de l'e-mail.Pe completâ l'accesso ti devi çerne 'na neuva poula segretta chì:",
'resetpass_header' => 'Cangia a pòula segretta do conto',
'oldpassword' => 'Vegia poula segretta',
'newpassword' => 'Neuva poula segretta',
'retypenew' => "Ripette a nêuva paròlla d'ordine:",
'resetpass_submit' => 'Çerni a poula segretta e intra',
'resetpass_forbidden' => "No l'é poscìbile cangiâ e paròlle segrétte",

# Special:PasswordReset
'passwordreset-email' => 'Addresso e-mail:',
'passwordreset-emailtitle' => 'Dettaggi account sciu {{SITENAME}}',
'passwordreset-emailelement' => 'Nomme utente: $1
Poula segretta temporannia: $2',

# Special:ChangeEmail
'changeemail-none' => '(nisciun)',
'changeemail-cancel' => 'Annulla',

# Edit page toolbar
'bold_sample' => 'Grascetto',
'bold_tip' => 'Grascetto',
'italic_sample' => 'Testo in corscivo',
'italic_tip' => 'Corscivo',
'link_sample' => "Nomme de l'ingancio",
'link_tip' => 'Ingancio interno',
'extlink_sample' => "http://www.example.com Nomme de l'ingancio",
'extlink_tip' => 'Colegaménto esterno (inclûdde o prefisso http:// )',
'headline_sample' => 'Tìtolo',
'headline_tip' => 'Tìtolo de 2° livello',
'nowiki_sample' => 'Inserî chì o testo sensa formattaçion',
'nowiki_tip' => 'Ignorâ a formattassion wiki',
'image_sample' => 'Exempio.jpg',
'image_tip' => 'Incorpora file',
'media_sample' => 'Exempio.ogg',
'media_tip' => 'Colegaménto a file moltimediâ',
'sig_tip' => 'Firma con data e ôa',
'hr_tip' => 'Linnia orizontâ',

# Edit pages
'summary' => 'Oggetto:',
'subject' => 'Argomento (tittolo):',
'minoredit' => 'Cangiamento minô (m)',
'watchthis' => 'Metti sotta oservaçion',
'savearticle' => 'Sarva a pàgina',
'preview' => 'Anteprìmma',
'showpreview' => "Veddi l'anteprimma",
'showdiff' => 'Veddi i cangiamenti',
'anoneditwarning' => "'''Attension:''' No t'ê intròu. Inta stoia di cangiamenti da paggina ghe saiâ misso o têu adresso IP.",
'summary-preview' => 'Anteprimma oggetto:',
'blockedtitle' => "L'utente o l'é bloccòu",
'blockedtext' => "''''Sto nomme d'ûtente ou indirisso IP o l'è stæto bloccòu.'''

O blòcco o l'è stæto fæto da \$1. A raxon dæta a l'è ''\$2''.

* Iniçio de l'affermassion: \$8
* Iniçio de l'affermassion: \$6
* Intervallo de l'affermassion: \$7

O l'è poscibbile contattâ \$1 o 'n âtro [[{{MediaWiki:Grouppage-sysop}}|amministratô]] pe discûtte inscio blòcco.
O no se pêu ûsâ o comando \"Inviâ 'na léttia elettronega a quest'ûtente\" se ti no ti g'hæ 'n indirisso e-mail registròu inte têu [[Special:Preferences|preferense]] e se o no l'è stæto bloccòu ascì.
O têu indirisso IP o l'è \$3, e o têu blòcco ID o l'è #\$5.
Pe piaxei mettighe ûn di doî in tûtte e domande che ti fæ.",
'autoblockedtext' => "O têu indirisso IP o l'è stæto bloccòu outomaticamente perché o l'ea za ûsòu da 'n âtro ûtente, bloccòu da \$1.
A raxon dæta a l'è stæta:

:''\$2''

* Inissio do blòcco: \$8
* Fin do blòcco: \$6

Ti pêu contattâ \$1 ou 'n âtro
[[{{MediaWiki:Grouppage-sysop}}|amministratô]] pe parlâ inscio blòcco.

Dagghe a mente a che no ti pêu ûsâ o comando \"manda na littia elettronega a sto utente\" se non ti g'hæ 'n indirisso de posta elettronega registroö in te têu [[Special:Preferences|preferense]] e se o no l'è stæto bloccòu ascì.

O têu blòcco ID o l'è \$5. Pe piaxei metti 'sto ID in tûtte e domande che ti fæ.",
'whitelistedittext' => 'Pe cangia sta pagina devvi $1.',
'loginreqtitle' => "Besêugna registrâse primma de modificâ 'sta paggina.",
'accmailtitle' => 'Pòula segretta spedïa',
'accmailtext' => 'A pòula segretta pe-o utente "$1" a l\'è stæta spedïa a o indirisso $2.',
'newarticle' => '(Nêuvo)',
'newarticletext' => "Sto colegaménto o corisponde a 'na pàgina ch'a no l'existe ancon.

Se se vêu creâ a pàgina òua, se pêu comensâ a scrive into spàçio chì sotta.
(amia e [[{{MediaWiki:Helppage}}|paggine d'agiûtto]] pe ciû informaçioìn).

Se t'ê intròu chì pe sballio,  sciacca '''Inderê''' into navegatô.",
'noarticletext' => "Inte sto momento a pagina çercâ a l'è vêua. O l'è poscibbile [[Special:Search/{{PAGENAME}}|çercâ 'sto tittolo]] inte âtre pagine do scîto opû [{{fullurl:{{FULLPAGENAME}}|action=edit}} cangiâ a pagina òua].",
'noarticletext-nopermission' => "Òua a pàgina çercâ a l'è vêua. L'è poscìbile [[Special:Search/{{PAGENAME}}|çercâ sto tìtolo]] inte di âtre pàgine do scîto o <span class=\"plainlinks\">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} çercâ inti registri corelæ]</span>, ma no ti gh'hæ i outorizzaçioin pe creâ sta paggina.",
'previewnote' => "'''Questa chì a l'è solo 'n'anteprimma; i cangiamenti no son ancon stæti sarvæ!'''",
'editing' => 'Modiffica de $1',
'editingsection' => 'Càngio de $1 (seçión)',
'yourtext' => 'O teu testo',
'yourdiff' => 'Differense',
'copyrightwarning' => "Nota: Tùtte e contribuçioìn a {{SITENAME}} van conscideræ comme rilasciæ drento a-i termini da licensa d'ûso $2 (veddi $1 pe savéine de ciù).
Se no ti veu che i testi teu pêuan esse modificæ da quarchedùn sensa limitaçioìn, no mandâli a {{SITENAME}}.<br />
Inviando o testo ti diciâri, sott'a teu responsabilitæ, ch'o l'é stæto scrîto da ti personalmente oppure ch'o l'é stæto piggiòu da 'na fonte de pùbrico domìnio òu anàlogamente lìbea.<br />
'''NO INVIÂ MATERIÂLE COVERTO DA DRÎTI D'AUTÔ SENSA OUTORIZAÇION!'''",
'templatesused' => '{{PLURAL:$1|Template dêuviòu|Template dêuviæ}} in sta pàgina:',
'templatesusedpreview' => "Template dêuviæ inte 'st'anteprimma:",
'template-protected' => '(protezûo)',
'template-semiprotected' => '(semiprotezûo)',
'hiddencategories' => 'Sta pàgina a fa parte de {{PLURAL:$1|1 categoria ascoza|$1 categorie ascoze}}:',
'nocreatetext' => "A poscibilitæ de creâ nêuve paggine insce {{SITENAME}} a l'è stæta limitâ solo a-i ûtenti registræ.
O se pêu tornâ inderê e modificâ 'na paggina escistente, oppûre [[Special:UserLogin|intrâ ò creâ 'n accesso nêuvo]].",
'permissionserrorstext-withaction' => "No ti g'hæ i permìssi pe $2 pe {{PLURAL:$1|sta raxon|ste raxoìn}}:",
'recreate-moveddeleted-warn' => "Atençión: ti stæ pe ricreâ 'na pàgina zà scancelâ into passòu.'''

Consciddera se l'è o caxo de continoâ  a cangiâ 'sta pàgina.
Pe comoditæ e cancellaçioìn e i stramui son pubricæ chì sotta:",
'moveddeleted-notice' => "Sta pàgina a l'é stæta scancelâ.
A lista de scancelaçioìn e di stramui son riportæ chi de sotta pe informaçión.",

# Parser/template warnings
'post-expand-template-inclusion-warning' => "'''Atento:''' a dimensción di template che t'æ misso a l'é tròppo grande.
Quarchedun di teu template o no saiâ incluzo.",
'post-expand-template-inclusion-category' => "Pàgine con di template che gh'àn a dimensción ciù âta do limite mascimo",
'post-expand-template-argument-warning' => "'''Atençión:''' sta pàgina a contegne un ò ciù argomenti di template che son tròppo gràndi pe êse espansi. Sti argomenti no saiàn fæti védde.",
'post-expand-template-argument-category' => 'Pàgine con di template che ghe mancàn di argoménti',

# Account creation failure
'cantcreateaccounttitle' => 'Non çe peu registrâ o utente',
'cantcreateaccount-text' => "A registrascion de utenti da questo indirisso IP (<b>$1</b>) a l'è stæta affermaä da [[User:$3|$3]].

A razon dæta a l'è ''$2''",

# History pages
'viewpagelogs' => "Veddi i log relativi a 'sta paggina.",
'currentrev' => 'Verscion attuâle',
'currentrev-asof' => 'Ùrtima revixón de-e $1',
'revisionasof' => 'Verscion do $1',
'revision-info' => 'Verscion do $1 de $2',
'previousrevision' => '← Verscion meno recente',
'nextrevision' => 'Revixon ciù nêuva →',
'currentrevisionlink' => 'Ûrtima revixon',
'cur' => 'cor',
'next' => 'Proscimo',
'last' => 'Ûrtima',
'page_first' => 'primma',
'page_last' => 'ûrtima',
'histlegend' => "Confronto tra verscioîn: selession-a e cascette corispondenti a-e verscioîn dexidiæ e schissa Invio oppû o pomello da basso.

Legenda: (corr) = differense co-a verscion corrente, (prec) = differense co-a verscion precedente, '''m''' = modiffica minô",
'history-fieldset-title' => 'Véddi a stöia',
'history-show-deleted' => 'Sôlo scancelæ',
'histfirst' => 'Prìmmo',
'histlast' => 'Ùrtimo',
'historyempty' => '(vêua)',

# Revision feed
'history-feed-title' => 'Stöia de e revisioin',
'history-feed-item-nocomment' => '$1 o $2',

# Revision deletion
'rev-delundel' => 'fanni védde/ascondi',
'revdel-restore' => 'càngia a vixibilitæ',
'revdel-restore-deleted' => 'Revixioìn scancelæ',
'revdel-restore-visible' => 'revixioìn che se peuan védde',

# Merge log
'revertmerge' => 'Anùlla union',

# Diffs
'history-title' => 'Stöia de revixoìn de "$1"',
'lineno' => 'Linia $1:',
'compareselectedversions' => 'Confronta e verscioîn selessionæ',
'editundo' => 'Anùlla',
'diff-multi' => '({{PLURAL:$1|Inna revixón intermedia|$1 de revixoìn intermedie}} de {{PLURAL:$2|un utente|$2 utenti}} no son mostræ)',

# Search results
'searchresults' => 'Resultati da reçerca',
'searchresults-title' => 'Rezoltati da riçerca de "$1"',
'searchsubtitle' => "Ti t'è çercoö '''[[:$1]]'''",
'searchsubtitleinvalid' => "Ti t'è çercoö '''$1'''",
'prevn' => 'Precedenti {{PLURAL:$1|$1}}',
'nextn' => 'Proscima {{PLURAL:$1|$1}}',
'prevn-title' => '{{PLURAL:$1|rezoltato precedénte|rezoltati precedénti}}',
'nextn-title' => 'Pròscimo $1 {{PLURAL:$1|rezoltato|rezoltati}}',
'shown-title' => 'Fanni védde {{PLURAL:$1|in rizoltato|$1 rizoltati}} pe pàgina',
'viewprevnext' => 'Veddi ($1 {{int:pipe-separator}} $2) ($3).',
'searchmenu-exists' => "'''Inte questa wiki gh'è za 'na pàgina co-o nómme \"[[:\$1]]\"'''",
'searchmenu-new' => 'Crea a pagina "[[:$1]]" insce questo scito',
'searchhelp-url' => 'Help:Contegnûi',
'searchprofile-articles' => 'Pàgina di contegnûi',
'searchprofile-project' => 'Pàgine de agiùtto e relative a-o progetto',
'searchprofile-images' => 'Moltimedia',
'searchprofile-everything' => 'Tùtto',
'searchprofile-advanced' => 'Avansæ',
'searchprofile-articles-tooltip' => 'Çerca in $1',
'searchprofile-project-tooltip' => 'Çerca in $1',
'searchprofile-images-tooltip' => 'Çerca file',
'searchprofile-everything-tooltip' => 'Çerca in ògni dove (anche inte pàgine de discusción)',
'searchprofile-advanced-tooltip' => 'Çerca inti namespace personalizæ',
'search-result-size' => '$1 ({{PLURAL:$2|1 paròlla|$2 paròlle}})',
'search-result-category-size' => '{{PLURAL:$1|1 utente|$1 utenti}} ({{PLURAL:$2|1 sottocategoria|$2 sottocategorie}}, {{PLURAL:$3|1 file|$3 file}})',
'search-redirect' => '(redirect $1)',
'search-section' => '(seçión $1)',
'search-suggest' => 'Fòscia ti voéivi: $1',
'searchrelated' => 'corelæ',
'searchall' => 'tùtti',
'showingresultsheader' => "{{PLURAL:$5|Rizoltato '''$1''' di '''$3'''|Rizoltati '''$1 - $2''' de '''$3'''}} pe '''$4'''",
'search-nonefound' => "Mi n'ho atrovòu ninte",
'powersearch' => 'Çerca',

# Preferences page
'preferences' => 'Preferençe',
'mypreferences' => 'Preferençe',
'changepassword' => 'Cangiâ a pòula segretta',
'skin-preview' => 'Anteprimma',
'prefs-datetime' => 'Data e oùa',
'saveprefs' => 'Sarva',
'prefs-editing' => 'Cangia',
'searchresultshead' => 'Çerca',
'timezonelegend' => 'Oùa',
'allowemail' => 'Permitti a posta elettronega da ätri utenti',
'default' => 'Predefinïo',
'prefs-files' => 'Papê',
'youremail' => 'Indirìsso email:',
'username' => "Nomme d'utente",
'yourrealname' => 'Nomme vêo:',
'yourlanguage' => 'Léngoa:',
'yourvariant' => 'Differensa',
'yournick' => 'Nommeaggio:',
'badsig' => 'Errô in ta firma; controlla i comandi HTML.',
'badsiglength' => "O nommeaggio o l'é tròppo lóngo; o dêve avéi meno de $1 caratteri.",
'email' => 'Posta elettronega',
'prefs-help-realname' => '* Nomme vëo (opsionâ): se o se scellie de scrivilo, o sajà dêuviòu pe ascrivighe a paternitæ di contegnûi inviæ.',
'prefs-help-email' => "L'email a no l'é obligatöia, ma a te permette de reçéive a paròlla segrétta se ti l'ascòrdi.",
'prefs-help-email-others' => 'Ti ti peu scélie ascì de lasciâ che i âtri te contattan via e-mail co-in ingancio da-a to pàgina utente ò de discoscion sénsa rivelâ a to e-mail quande i atri utenti te contattan.',

# Groups
'group-user' => 'Ûtenti',

'grouppage-sysop' => '{{ns:project}}:Amministratoî',

# Special:Log/newusers
'newuserlogpage' => 'Nêuvi utenti',

# User rights log
'rightslog' => "Diritti d'ûtente",

# Associated actions - in the sentence "You do not have permission to X"
'action-edit' => 'càngia sta pàgina',

# Recent changes
'nchanges' => '$1 {{PLURAL:$1|modiffica|modiffiche}}',
'recentchanges' => 'Ùrtimi cangiamenti',
'recentchanges-legend' => 'Opçioin di ùrtimi cangiaménti',
'recentchanges-summary' => "Questa pàgina a g'ha di càngi ciù reçenti a-i contegnûi do scîto.",
'recentchanges-feed-description' => "Questo feed o g'ha di cangiaménti ciù reçenti a-i contegnûi do scîto.",
'recentchanges-label-newpage' => "Sto cangiaménto o l'à creòu 'na pàgina nêuva",
'recentchanges-label-minor' => 'Cangiamento minô (m)',
'recentchanges-label-bot' => "Sto cangiaménto o l'à fæto in bot",
'recentchanges-label-unpatrolled' => "Sto cangiaménto o no l'é stæto ancón verificòu",
'rcnote' => "Chì sotta {{PLURAL:$1|l'é elencou o cangiaménto ciù reçente|son elencæ i '''$1''' cangiaménti ciù reçenti}} a-o scîto {{PLURAL:$2|inte ùrtime 24 ôe|inti ùrtimi '''$2''' giorni}}; i dæti son agiornæ a-e $5 do $4.",
'rcnotefrom' => "Chì sotta gh'è i cangiamenti fæti comensando da '''$2''' (scin a '''$1''').",
'rclistfrom' => 'Fanni vedde e modiffiche apportæ partindo da $1',
'rcshowhideminor' => '$1 cangiaménti minoi',
'rcshowhidebots' => '$1 bot',
'rcshowhideliu' => '$1 utenti registræ',
'rcshowhideanons' => '$1 utenti anonnimi',
'rcshowhidepatr' => '$1 i cangiaménti controllæ',
'rcshowhidemine' => '$1 i mæ cangiamenti',
'rclinks' => 'Fanni vedde i $1 cangiaménti ciù reçenti fæti inti ùrtimi $2 giorni<br />$3',
'diff' => 'diff',
'hist' => 'stö',
'hide' => 'Ascondi',
'show' => 'Famme vedde',
'minoreditletter' => 'm',
'newpageletter' => 'N',
'boteditletter' => 'b',
'rc_categories_any' => 'Quarsevêuggia',
'rc-enhanced-expand' => 'Fanni védde detaggi (serve JavaScript)',
'rc-enhanced-hide' => 'Ascondi detaggi',

# Recent changes linked
'recentchangeslinked' => 'Cangiamenti correlæ',
'recentchangeslinked-feed' => 'Cangiamenti correlæ',
'recentchangeslinked-toolbox' => 'Cangiaménti corelæ',
'recentchangeslinked-title' => 'Modiffiche correlæ a "$1"',
'recentchangeslinked-noresult' => 'Nisciûn cangiamento a-e paggine collegæ into periodo speçificòu.',
'recentchangeslinked-summary' => "Sta pàgina a fa védde i cangiaménti ciù reçenti a-e pàgine colegæ a questa.
E pàgine che t'æ in oservaçion inti [[Special:Watchlist|oservæ speciâli]] son in '''grascetto'''.",
'recentchangeslinked-page' => 'Nómme da pàgina:',
'recentchangeslinked-to' => 'Fanni védde sôlo i cangiaménti a-e pàgine colegæ a-a pàgina specificâ',

# Upload
'upload' => "Carrega 'n file",
'uploadbtn' => "Carega 'n archivvio",
'uploadlogpage' => 'Log di file caregæ',
'filename' => 'Nomme do papê',
'filedesc' => 'Detaggi',
'filesource' => 'Reixe:',
'uploadedfiles' => 'Papê caregæ',
'badfilename' => 'O nomme do papê o l\'è stæto cangioö in "$1".',
'fileexists' => "Un papê co sto nomme o existe de zà, pe piaxei da unn'euggiâ a <strong>[[:$1]]</strong> se non ti tei seguo de voleilo cangiâ.
[[$1|thumb]]",
'fileexists-forbidden' => 'Un papê co sto nomme o existe de zà, pe piaxei vanni in derrê e carega sto papê co un ätro nomme. [[File:$1|thumb|center|$1]]',
'savefile' => 'Sarva o papê',
'uploadedimage' => 'O l\'ha caregòu "[[$1]]"',
'uploaddisabledtext' => 'In {{SITENAME}} non se peu caregâ de papê.',
'uploadvirus' => 'O papê gha un virus!! Dettaggi: $1',
'sourcefilename' => "Nomme do papê d'origine:",
'destfilename' => 'Nomme do papê de destin:',

'upload-file-error' => 'Errô interno',

'license' => 'Licensa:',
'license-header' => 'Licensa',
'nolicense' => 'Nisciûnn-a liçensa indicâa',

# Special:ListFiles
'listfiles_search_for' => "Çerca pe nomme de l'imàgine:",
'imgfile' => 'papê',
'listfiles' => "Lista d'archivvi",
'listfiles_date' => 'Dæta',

# File description page
'file-anchor-link' => 'file',
'filehist' => "Stöia de l'archivio",
'filehist-help' => "Sciacca insce data/ôa pe amiâ o file comm'o s'apresentâva into momento indicòu.",
'filehist-revert' => 'Ripristina',
'filehist-current' => 'Corrente',
'filehist-datetime' => 'Dæta/Ôa',
'filehist-thumb' => 'Miniatua',
'filehist-thumbtext' => 'Miniatua da versción de $1',
'filehist-user' => 'Utente',
'filehist-dimensions' => 'Dimenscioin',
'filehist-filesize' => "Dimension de l'archivvio",
'filehist-comment' => 'Coménti',
'imagelinks' => "Ûzo de l'archivio",
'linkstoimage' => '{{PLURAL:$1|A segoente pàgina a contegne|E segoenti $1 pàgine contegnan}} colegaménti a-o file:',
'nolinkstoimage' => "No gh'è nisciûnn-a pàgina collegâ con 'sto file.",
'sharedupload' => "'St'archivvio o l'è condiviso; sajeiva a dî c'o pêu ese dêuviòu da ciû progetti wiki.",
'sharedupload-desc-here' => 'Sto file o vegne da $1 e o peu êse dêuviòu inti âtri progetti.
Chì apreuvo ti peu védde a descriçión inta [$2 pàgina de descriçión do file].',
'uploadnewversion-linktext' => "Carega 'na nêuva verscion de 'st'archivvio chì",

# File deletion
'filedelete-submit' => 'Scassa',

# MIME search
'mimesearch' => 'Çerca MIME',

# List redirects
'listredirects' => 'Lista de rindirissamenti',

# Unused templates
'unusedtemplates' => 'Template no ûtilissæ',

# Random page
'randompage' => 'Pagina a brettìo',

# Random redirect
'randomredirect' => 'Ûn rindirissamento a brettîo',

# Statistics
'statistics' => 'Statistiche',

'disambiguations' => 'Paggine de desambiguassion',
'disambiguationspage' => 'Template:Omonimia',

'doubleredirects' => 'Rindirissamenti doggi',

'brokenredirects' => 'Rindirissamenti sballiæ',
'brokenredirectstext' => 'De sotta unn-a lista de reindirissi a pagine che non existàn:',
'brokenredirects-edit' => 'cangia',
'brokenredirects-delete' => 'scassa',

'withoutinterwiki' => 'Paggine sensa interwiki',
'withoutinterwiki-summary' => "'Ste paggine chì inzû no g'han nisciûn collegamento co-e verscioîn in âtre lengoe:",

'fewestrevisions' => 'Voxi con meno revixoîn',

# Miscellaneous special pages
'nbytes' => '$1 {{PLURAL:$1|byte|byte}}',
'nlinks' => '$1 {{PLURAL:$1|collegamento|collegamenti}}',
'nmembers' => '$1 {{PLURAL:$1|elemento|elementi}}',
'lonelypages' => 'Paggine orfane',
'uncategorizedpages' => 'Paggine sensa categorîa',
'uncategorizedcategories' => 'Categorîe sensa categorîa',
'uncategorizedimages' => 'Immaggini sensa categorîa',
'uncategorizedtemplates' => 'Template sensa categorîa',
'unusedcategories' => 'Categorîe no ûtilissæ',
'unusedimages' => 'Archivvi no ûtilissæ',
'wantedcategories' => 'Categorîe domandæ',
'wantedpages' => 'Paggine domandæ',
'mostlinked' => 'Paggine ciû collegæ',
'mostlinkedcategories' => 'Categorîe ciû collegæ',
'mostlinkedtemplates' => 'Template ciû dêuviæ',
'mostcategories' => 'Voxi con ciû categorîe',
'mostimages' => 'Immaggini con ciû collegamenti',
'mostrevisions' => 'Voxi con ciû revixoîn',
'prefixindex' => 'Indiçe arfabetico de voxe',
'shortpages' => 'Paggine ciû cûrte',
'longpages' => 'Paggine ciû longhe',
'deadendpages' => 'Paggine sensa sciortîa',
'protectedpages' => 'Paggine protette',
'protectedtitles' => 'Tittoli protezûi',
'listusers' => "Lista d'ûtenti",
'usercreated' => '{{GENDER:$3|Creòu/â}} o $1 a-a $2',
'newpages' => 'Pagine ciù reçenti',
'ancientpages' => 'Paggine ciû vëgie',
'move' => 'Mescia',
'movethispage' => "Mescia 'sta paggina",
'pager-newer-n' => '{{PLURAL:$1|1 ciù nêuvo|$1 ciù nêuvi}}',
'pager-older-n' => '{{PLURAL:$1|1 ciù vêgio|$1 ciù vêgi}}',

# Book sources
'booksources' => 'Fonte libraie',
'booksources-search-legend' => 'Çerca e fonti',
'booksources-isbn' => 'Codice ISBN:',
'booksources-go' => 'Vànni',
'booksources-text' => 'De sotta unn-a lista de ingançi a ätri sciti che vendan neuvi e vegi libbri, e che peuvre avei informaçioin in sci libbri che ti te çerchi',

# Special:Log
'specialloguserlabel' => 'Ûtente:',
'speciallogtitlelabel' => 'Tittolo:',
'log' => 'Log',
'all-logs-page' => 'Tûtti i registri',
'alllogstext' => 'Presentaçion unega de tutti i registri do scito {{SITENAME}}.
Ti te peu strinza a vista se ti te çerni un tipo de registro, un nomme de un utente o de pagina.',

# Special:AllPages
'allpages' => 'Tûtte e paggine',
'alphaindexline' => 'Da $1 a $2',
'nextpage' => 'Proscima paggina ($1)',
'prevpage' => 'Paggina preçedente ($1)',
'allpagesfrom' => 'Fanni vedde e paggine comensando da:',
'allarticles' => 'Tùtte e pàgine',
'allinnamespace' => 'Tutte e pagine ($1 namespace)',
'allnotinnamespace' => 'Tutte e pagine (non in $1)',
'allpagesprev' => 'De primma',
'allpagesnext' => 'De dòppo',
'allpagessubmit' => 'Vanni',
'allpagesprefix' => 'Fanni vedde e paggine che inissian con:',
'allpagesbadtitle' => 'O titolo pe a pagina o non va ben, o o tegne de i prefissi interlingua o interwiki. O peu tegne un o ciù caratteri non permissi in ti titoli ascì.',
'allpages-bad-ns' => '"$1" o no ghe in {{SITENAME}}.',

# Special:Categories
'categories' => 'Categorîe',
'special-categories-sort-count' => 'ordenâ pe nûmmero',
'special-categories-sort-abc' => 'ordenâ arfabeticamente',

# Special:LinkSearch
'linksearch-line' => '$1 colegòu a-a pagina $2',

# Special:ListUsers
'listusers-submit' => 'Fanni vedde',
'listusers-noresult' => 'Utente non trovöo.',

# Special:ListGroupRights
'listgrouprights-members' => '(Elenco di membri)',

# Email user
'emailuser' => "Invia 'na email a st'utente chi",
'emailpage' => "Mandighe 'na léttia elettronega",
'defemailsubject' => '{{SITENAME}} posta elettronega',
'noemailtitle' => 'Nisciûn conto e-mail',
'emailfrom' => 'Da',
'emailto' => 'A',
'emailsubject' => 'Argumento',
'emailmessage' => 'Comunicaçion',
'emailsend' => 'Spèdi',
'emailccme' => 'Mandame unn-a copia do messagio co unn-a lettìa elettronega.',
'emailsent' => 'Lettìa elettronega spèdïa',
'emailsenttext' => "A teua lettìa elettronega a l'è stæta spèdïa.",

# Watchlist
'watchlist' => 'Sotta osservassion',
'mywatchlist' => 'Sotta oservaçion',
'watchlistfor2' => 'Pe $1 $2',
'watchnologin' => "Non ti t'æ entroö",
'watchnologintext' => 'Devvi [[Special:UserLogin|entrâ]] pe cangiâ a toa lista in osservaçion.',
'addedwatchtext' => "A paggina \"[[:\$1]]\" a l'è stæta azzonta a-a pròpia [[Special:Watchlist|lista in osservaçion]]. De chì in avanti, i cangiamenti fæti a-a paggina e a-a sêu discûxon sajàn missi in lista lì; o tittolo da paggina o sajà scrîo in '''grascietto''' inta paggina di [[Special:RecentChanges|ûrtimi cangiamenti]] coscì ti o veddi megio. Se ti vêu eliminâla da-a lista in osservaçion ciû târdi, sciacca \"no seguî\" inscia barra de d'âto.",
'removedwatchtext' => 'A paggina "[[:$1]]" a l\'è stæta scassâa da-a têu lista in osservaçion.',
'watch' => 'Metti sotta oservaçion',
'watchthispage' => "Vigilâ 'sta paggina",
'unwatch' => "Leva da sott'oservaçion",
'watchlist-details' => "A lista d'oservaçión speçiâle a contegne {{PLURAL:$1|ina pàgina (co-a seu pàgina de discusción)|$1 de pàgine (co-e so pàgine de discusción)}}.",
'watchlistcontains' => "A lista in osservaçion g'ha $1 {{PLURAL:$1|pagine|pagina}}.",
'wlshowlast' => 'Famme vedde e ûrtime $1 ôe $2 giorni $3',
'watchlist-options' => 'Inpostaçioìn di oservæ speciâli',

# Displayed when you click the "watch" button and it is in the process of watching
'watching' => 'Inti osservæ speçiâli...',
'unwatching' => 'Scassâ da-i osservæ speçiâli',

'enotif_anon_editor' => 'ûtente anònnimo $1',
'changed' => 'cangiâ',

# Delete
'deletepage' => 'Scassa a paggina',
'exblank' => "a paggina a l'ea vêua",
'delete-confirm' => 'Scassa "$1"',
'delete-legend' => 'Scassa',
'historywarning' => "Attension: A paggina c'a se sta pe scassâ a g'ha 'na cronologîa:",
'confirmdeletetext' => "Ti stæ pe scassâ pe sempre da-o database 'na paggina ò 'n'immaggine, assemme a tûtta a sêu cronologîa. Pe cortexia, conferma che davvei ti vêu andâ avanti con quella cancellassion, che ti capisci perfettamente e conseguense de 'st'assion e che a s'adatta a-e linnie guidda stabilîe in [[{{MediaWiki:Policy-url}}]].",
'actioncomplete' => 'Açion completâ',
'actionfailed' => 'Açión falîa',
'deletedtext' => 'A paggina "$1" a l\'è stæta scassâa. Consûltâ o $2 pe \'na lista de-e paggine scassæ de reçente.',
'dellogpage' => 'Registro de cose scassæ',
'deletecomment' => 'Raxon:',
'deleteotherreason' => 'Ûn âtro motivo',
'deletereasonotherlist' => "Ûnn'âtra raxon",

# Rollback
'rollbacklink' => 'rollback',
'cantrollback' => "O no se pêu tornâ inderê; l'ûtente ch'à fæto quelle modiffiche o l'è stæto l'ûnico contribûente.",
'alreadyrolled' => "O no se peû tornâ inderê a-i ûrtimi cangiamenti da pagina [[:$1]]
da [[User:$2|$2]] ([[User talk:$2|Ciæti]]); quarche âtro
o l'à cangiâ ò o l'è zà tornòu inderê.
L'ûrtimo cangiamento o ghe l'à fæto [[User:$3|$3]] ([[User talk:$3|Ciæti]]).",
'revertpage' => 'E modificaçioin de [[Special:Contributions/$2|$2]] ([[User talk:$2|Ciæti]]) son stæte eliminæ; riportæ a verscion de primma de [[User:$1|$1]]',

# Protect
'protectlogpage' => 'Protessioin',
'protectedarticle' => 'o l\'à protetto "[[$1]]"',
'prot_1movedto2' => '[[$1]] mesciòu a [[$2]]',
'protect-legend' => 'Confermâ protession',
'protectcomment' => 'Raxon:',
'protectexpiry' => 'Scadensa:',
'protect_expiry_invalid' => 'Scadensa invalida.',
'protect_expiry_old' => 'Data de scadensa into passòu.',
'protect-text' => "Chì o l'è poscibbile vedde e modificâ o livello de protession pe-a paggina '''$1'''.",
'protect-locked-access' => "No ti g'hæ permisso pe modificâ i livelli de protession da paggina.
Queste son e impostassioîn correnti pe 'sta paggina ('''$1'''):",
'protect-cascadeon' => "Pe-o momento 'sta paggina chì a l'è bloccâa perché a l'è inclûsa {{PLURAL:$1|inta paggina indicâa apprêuvo, pe-a quæ|inte paggine indicæ apprêuvo, pe-e quæ}} a l'è attiva a protession recorsciva. O se pêu modificâ o livello de protession individuâle da paggina, ma l'impostassioîn derivanti da-a protession recorsciva no sajàn modificæ.",
'protect-default' => '(predefinîo)',
'protect-fallback' => 'Besêugna avei permisso "$1"',
'protect-level-autoconfirmed' => 'Solo ûtenti registræ',
'protect-level-sysop' => 'Solo amministratoî',
'protect-summary-cascade' => 'recorsciva',
'protect-expiring' => 'scadensa: $1 (UTC)',
'protect-cascade' => 'Protession recorsciva (estende a protession a tûtte e paggine inclûse in questa chì).',
'protect-cantedit' => "Ti no ti pêu modificâ i livelli de protession pe-a paggina se no ti g'hæ i permissi pe modificâ a paggina mæxima.",
'protect-expiry-options' => '2 ôe:2 hours,1 giorno:1 day,3 giorni:3 days,1 settemann-a:1 week,2 settemann-e:2 weeks,1 meise:1 month,3 meixi:3 months,6 meixi:6 months,1 anno:1 year,infinîo:infinite',
'restriction-type' => 'Permisso',
'restriction-level' => 'Livello de restrission',

# Restrictions (nouns)
'restriction-edit' => 'Cangia',
'restriction-move' => 'Mescia',

# Restriction levels
'restriction-level-all' => 'Tutti i livelli',

# Undelete
'undelete' => 'Repiggio de i dæti: veddi e pagine che son stæte scassæ',
'undeletebtn' => 'Ristorâ',
'undeletelink' => 'fanni védde/repìggia',
'undeleteviewlink' => 'fanni védde',
'cannotundelete' => "O repiggio de i dæti o non l'è riuscïo (i peun ese za stæti repiggiæ da quarchedun ätro).",
'undelete-bad-store-key' => "No se peu repiggiâ o papê con a data $1: o papê o l'éja za stæto scassoö.",
'undelete-cleanup-error' => 'Errô repiggiando i dæti do papê "$1".',
'undelete-error-short' => 'Errô repiggiando i dæti do papê "$1".',
'undelete-error-long' => 'Ghe son stæti de i errôi cuando se repiggiavan i dæti de o papê:

$1',

# Namespace form on various pages
'namespace' => 'Namespace:',
'invert' => 'Invertî a seleçión',
'blanknamespace' => '(Prinçipâ)',

# Contributions
'contributions' => 'Contribuçioin {{GENDER:$1|utente}}',
'contributions-title' => 'Contribuçioìn de $1',
'mycontris' => 'Contribuçioin',
'contribsub2' => 'Pe $1 ($2)',
'uctop' => '(ûrtima pe-a paggina)',
'month' => 'Partindo da-o meize (e precedénti):',
'year' => "Partindo da l'anno (e precedenti):",

'sp-contributions-newbies' => 'Fanni védde sôlo e contribuçioìn di nêuvi utenti',
'sp-contributions-newbies-sub' => 'Pe i nêuvi ûtenti',
'sp-contributions-blocklog' => 'Blòcchi',
'sp-contributions-uploads' => 'caregaménti',
'sp-contributions-logs' => 'log',
'sp-contributions-talk' => 'Ciæti',
'sp-contributions-search' => 'Riçerca contribuçioìn',
'sp-contributions-username' => 'Indirìsso IP ò nómme utente:',
'sp-contributions-toponly' => "Fanni védde sôlo i cangiaménti ch'en i ùrtime revixoìn da pàgina",
'sp-contributions-submit' => 'Çerca',

# What links here
'whatlinkshere' => 'Cöse se colega chì',
'whatlinkshere-title' => "Pàgine c'apontàn a $1",
'whatlinkshere-page' => 'Pàgina:',
'linkshere' => "E pàgine segoenti apontan a '''[[:$1]]''':",
'nolinkshere' => "Nisciùnn-a pàgina a se collega con '''[[:$1]]'''.",
'isredirect' => 'Paggina de rindirissamento',
'istemplate' => 'Incluxon',
'isimage' => 'Colegamento a file',
'whatlinkshere-prev' => '{{PLURAL:$1|precedente|precedenti $1}}',
'whatlinkshere-next' => '{{PLURAL:$1|sûccescivo|sûccescivi $1}}',
'whatlinkshere-links' => '← colegaménti',
'whatlinkshere-hideredirs' => '$1 i rendirissamenti',
'whatlinkshere-hidetrans' => '$1 Incluxon',
'whatlinkshere-hidelinks' => '$1 colegaménti',
'whatlinkshere-hideimages' => '$1 colegaménti di file',
'whatlinkshere-filters' => 'Filtri',

# Block/unblock
'blockip' => "Blocca l'ûtente",
'ipbreason' => 'Raxon:',
'ipboptions' => '2 ôe:2 hours,1 giorno:1 day,3 giorni:3 days,1 settemann-a:1 week,2 settemann-e:2 weeks,1 meise:1 month,3 meixi:3 months,6 meixi:6 months,1 anno:1 year,infinîo:infinite',
'badipaddress' => 'Indirisso IP non valido',
'blockipsuccesssub' => 'Affermaçion arriescïa',
'blockipsuccesstext' => "[[Special:Contributions/$1|$1]] o l'è stæto affermoö.
<br />Veddi [[Special:BlockList|Lista de i indirissi IP affermæ]] te cangia e affermaçioin.",
'ipblocklist' => 'Utenti blocæ',
'anononlyblock' => 'Non ti tè registroö. Non ti peu fanni de i cangiamenti! (Registräse o non vegne ninte!)',
'emailblock' => 'posta elettronega affermaä',
'ipblocklist-empty' => "A lista de e affermaçioin a l'è veua.",
'blocklink' => 'Blocca',
'unblocklink' => 'sblòcca',
'change-blocklink' => 'càngia blòcco',
'contribslink' => 'Contribuçioìn',
'autoblocker' => 'Affermoö automaticamente perchè o teu indirisso IP o l\'è stæto usöo da "[[User:$1|$1]]" neuvamente. A razon dæta pe affermâ $1 a l\'è stæta:
"$2"',
'blocklogpage' => 'Blòcchi',
'blocklogentry' => 'blocòu [[$1]] pe in periodo de $2 $3',
'blocklogtext' => "Sta chie a l'è unn-a lista de affermaçioin fæte e levæ.
I indirissi IP affermæ automaticamente non son  consideræ.
Veddi a [[Special:BlockList|Lista de i indirissi IP affermæ]] pe e informaçioin neuve.",
'block-log-flags-anononly' => 'Utenti anonimmi soö',
'block-log-flags-nocreate' => 'Neuve registrascioin non son permisse',
'block-log-flags-noautoblock' => "O blocco automatego o non l'è attïvo",
'block-log-flags-noemail' => "A posta elettronega a non l'è attïva",

# Developer tools
'databasenotlocked' => "A base de i dæti a non l'è serrâ.",

# Move page
'move-page-legend' => 'Mescia a paggina',
'movepagetext' => "Chì o se pêu dâ 'n nêuvo nomme a 'na paggina, stramûando tûtta a sêu cronologîa a-o nêuvo nomme.
A paggina attuâle a fa outomaticamente 'n rindirissamento a-o nêuvo tittolo.
I collegamenti escistenti no sajàn aggiornæ; veriffica che 'sto stramûo o no l'agge creòu doggi rindirissamenti ò rindirissamenti sballiæ.
A responsabilitæ pe tegnî i collegamenti sempre donde deivan andâ a l'è têu.

A paggina a '''no''' sajà stramûâa se ghe foisse zà ûnn-a co-o nêuvo nomme, a meno c'a no segge vêua ò fæta solo da 'n rindirissamento a-a vegia e a no l'agge verscioîn preçedenti.
In caso de stramûo sballiòu o se pêu tornâ sûbbito a-o vegio tittolo, e o no l'è poscibbile sorvescrive pe errô 'na paggina zà escistente.

'''ATTENSION:'''
'N cangiamento coscì grande o porieiva creâ di controtempi e problemmi, sorvetûtto pe-e paggine ciû viscitæ.
Pensa ben e conseguense de 'sto stramûo primma d'andâ avanti!",
'movepagetalktext' => "A corispondente paggina de discûxon a sajà stramûâa outomaticamente insemme a-a paggina prinçipâ, '''eççetto inti seguenti câxi''':

* Che o stramûo da paggina o segge tra namespace diversci
* Che inta corispondensa do nêuvo tittolo ghe segge zà 'na paggina de discûxon (no vêua)
* Che a cascetta chì sotta a segge stæta deselessionâa.

Inte 'sti câxi, se o se vêu fâ coscì, o se deive stramûâ ò azzonze manualmente e informassioîn contegnûe inta paggina de discûxon.",
'movearticle' => 'Stramûâ a paggina',
'newtitle' => 'Nêuvo tittolo:',
'move-watch' => 'Azzonze a li osservæ speçiâli',
'movepagebtn' => 'Stramûâ a paggina',
'pagemovedsub' => 'Remescio fæto',
'articleexists' => "Ghe n'æmmo zà 'na paggina con 'sto nomme, oppûre quello che ti g'hæ scelto o no l'è permisso. Cangia nomme.",
'talkexists' => "'''A paggina a l'è stæta stramûâa correttamente, ma o no l'è stæto poscibbile stramûâ a paggina de discûxon perché ghe n'è zà 'n'âtra co-o nêuvo tittolo. O se deive inserî manualmente i contegnûi de tûtte e doe.'''",
'movedto' => 'Stramûâa a',
'movetalk' => 'Stramûâ anche a paggina de discûxon',
'movelogpage' => 'Lista di stramûi',
'movereason' => 'Raxon',
'revertmove' => 'Ristorâ',
'delete_and_move' => 'Scassa e mescia',
'delete_and_move_confirm' => 'Scì, scassa a pagina',
'delete_and_move_reason' => 'Levoö pe fâ röso pe un remescio',

# Export
'export' => 'Espòrta pàgine',

# Namespace 8 related
'allmessages' => 'Messaggi do scistemma',
'allmessagesname' => 'Nomme',
'allmessagesdefault' => 'Testo predefinio',
'allmessagescurrent' => 'Testo corrente',
'allmessagestext' => "Sta chie a l'è unn-a lista de messaggi do scistema in ta MediaWiki.",
'allmessagesnotsupportedDB' => "'''{{ns:special}}:Allmessages''' o non ti te peu vedde, perchè '''\$wgUseDatabaseMessages''' o non l'è attivo.",

# Thumbnails
'thumbnail-more' => 'Ciù grande',
'filemissing' => 'O papê non ghe!',
'thumbnail_error' => 'Errô inta creassion da miniatûa: $1',
'thumbnail_invalid_params' => 'Parametri da a imàginetta non validi',

# Import log
'importlogpage' => 'Importassioîn',

# Tooltip help for the actions
'tooltip-pt-userpage' => 'A teu pagina utilizatô',
'tooltip-pt-mytalk' => 'E mæ discûscioîn',
'tooltip-pt-preferences' => 'E mæ preferense',
'tooltip-pt-watchlist' => 'A lista de-e pagine che ti æ sotta osservaçion',
'tooltip-pt-mycontris' => 'E mæ contribuçioìn',
'tooltip-pt-login' => "Consegemmo a registraçión, ma a no l'è obrigatoia.",
'tooltip-pt-logout' => 'Sciortîa (logout)',
'tooltip-ca-talk' => 'Discuscion riguardo a sta paggina.',
'tooltip-ca-edit' => "Ti pêu modificâ sta paggina. Pe piaxei dêuvia o pomello d'anteprimma primma de sarvâla.",
'tooltip-ca-addsection' => "Inça 'na seçión nêuva",
'tooltip-ca-viewsource' => "'Sta pagina a l'è protetta, ma ti peu védde o sêu còdice sorgente.",
'tooltip-ca-history' => 'Verscioìn précedenti da pàgina',
'tooltip-ca-protect' => "Protezi 'sta paggina",
'tooltip-ca-delete' => 'Scancella sta pàgina',
'tooltip-ca-move' => "Mescia 'sta paggina (cangia tittolo)",
'tooltip-ca-watch' => "Azónzi 'sta pagina a-a teu lista d'oservaçion",
'tooltip-ca-unwatch' => "Leva sta pàgina da sott'oservaçion.",
'tooltip-search' => 'Çerca {{SITENAME}}',
'tooltip-search-go' => "Vànni inte 'na pàgina con sto tìtolo, s'a l'existe",
'tooltip-search-fulltext' => 'Çerca sto testo in scie pàgine',
'tooltip-p-logo' => 'Vìxita a pàgina prinçipâ',
'tooltip-n-mainpage' => 'Vìxita a pagina prinçipâ',
'tooltip-n-mainpage-description' => 'Vìxita a pàgina prinçipâ',
'tooltip-n-portal' => 'Descriçión do progetto, cöse se peu fâ, donde trovâ e cöse',
'tooltip-n-currentevents' => "Informaçioìn in sci fæti d'atualitæ",
'tooltip-n-recentchanges' => "L'ùrtimi cangiaménti into scîto",
'tooltip-n-randompage' => "Fanni vedde 'na pagina a brettio.",
'tooltip-n-help' => "Pagine d'agiùtto",
'tooltip-t-whatlinkshere' => 'Lista de tùtte e pagine che son colegæ a sta chì.',
'tooltip-t-recentchangeslinked' => 'Ùrtimi càngi de pàgine colegæ a quésta',
'tooltip-feed-atom' => 'Feed Atom pe sta pàgina',
'tooltip-t-contributions' => "Lista de contribûssioîn de quest'utente",
'tooltip-t-emailuser' => "Invia 'n messaggio e-mail a quest'utente",
'tooltip-t-upload' => 'Carega inmàgini ò archivi moltimedia',
'tooltip-t-specialpages' => 'Lista de tùtte e pagine speçiâli',
'tooltip-t-print' => 'Versción da stànpa pe sta pàgina',
'tooltip-t-permalink' => 'Colegaménto fisso a sta revixión da pàgina',
'tooltip-ca-nstab-main' => 'Véddi a vôxe',
'tooltip-ca-nstab-user' => "Veddi a pàgina d'utente",
'tooltip-ca-nstab-special' => "Sta chi l'è 'na pàgina speciâle e a no peu êse cangiâ",
'tooltip-ca-nstab-project' => 'Veddi a paggina de servissio',
'tooltip-ca-nstab-image' => "Va a védde a pagina de l'inmàgine",
'tooltip-ca-nstab-template' => 'Veddi o template',
'tooltip-ca-nstab-help' => "Veddi a paggina d'agiûtto",
'tooltip-ca-nstab-category' => 'Veddi a paggina da categorîa',
'tooltip-minoredit' => 'Marchilo comme cangiaménto minô',
'tooltip-save' => 'Sarva i cangiaménti',
'tooltip-preview' => 'Anteprimma de modiffiche (fannila, primma de sarvâ!)',
'tooltip-diff' => "Ammîa e modiffiche che t'æ fæto a-o testo.",
'tooltip-compareselectedversions' => 'Amia e diferense tra e doê verscioìn seleçionæ de sta paggina chì.',
'tooltip-watch' => "Azónzi sta pàgina a-a têu lista d'osservæ speçiâli",
'tooltip-rollback' => "\"Rollback\" scancella i cangiaménti de sta pàgina de l'ùrtimo ch'o l'à fæto 'n càngio co-in click do ràtto",
'tooltip-undo' => '"Anùlla" o permette de anulâ sto cangiaménto e o l\'arve o modolo de cangiaménto into modalitæ anteprìmma. Ti peu ascì métte a raxón inte l\'ogetto do cangiaménto.',
'tooltip-summary' => "Scrîvi 'na scintexi",

# Stylesheets
'common.css' => '/** o codiçe css scrïo chie o vegne azzounto in tutte e pagine */',

# Attribution
'anonymous' => 'Utente anonimmo de {{SITENAME}}',
'lastmodifiedatby' => "Sta pagina a l'è stæta cangiâ l'urtima votta a e $2 do $1 da $3.",

# Browsing diffs
'previousdiff' => '← Diferensa precedénte',
'nextdiff' => 'Pròscima diferensa →',

# Media information
'thumbsize' => 'Dimescion da a imàginetta:',
'file-info-size' => '$1 × $2 pixel, dimenscioîn: $3, tippo MIME: $4',
'file-nohires' => 'No ghe son verscioìn a rezoluçion ciù âta.',
'svg-long-desc' => 'file in formato SVG, dimenscioìn nominâli $1 × $2 pixel, dimenscioin do file: $3',
'show-big-image' => 'Verscion a ata resolûçion',

# Special:NewFiles
'newimages' => 'Gallerîa de nêuvi archivvi',
'ilsubmit' => 'Çerca',
'bydate' => 'pe dâta',

# Bad image list
'bad_image_list' => "O formato o l'è coscì:
Van conscideræ sôlo e righe che comensan co-o càratere *.
O primmo ingancio in sce ògni riga o dev'ese 'n ingancio ch'o no fonçionn-a
I inganci sucescivi, in scia mæxima riga, van conscideræ comme eceçioìn (pagine donde o file o pêu ese reciamòu normalmente).",

# Metadata
'metadata' => 'Metadati',
'metadata-help' => "Sto file o contegne de informaçioìn in ciù, fòscia misse da-a fotocamera ò dò-u scansô dêuviòu pe creâla ò digitalizâla. Se o file o l'è stæto cangiòu, çerti detàggi porieivan no corisponde a-i cangi aportæ.",
'metadata-expand' => 'Fâ vedde dettaggi',
'metadata-collapse' => 'Asconde dettaggi',
'metadata-fields' => "I cànpi relativi a-i metadati EXIF elencæ inte 'sto messaggio saiàn in sciâ pàgina de l'inmàgine quande a tabella di metadati a saiâ inta forma cùrta. Cómme predefinîo, i âtri cànpi saiàn ascozi.
* make
* model
* datetimeoriginal
* exposuretime
* fnumber
* isospeedratings
* focallength
* artist
* copyright
* imagedescription
* gpslatitude
* gpslongitude
* gpsaltitude",

# EXIF tags
'exif-datetime' => 'Data e öa do cangiamento do papê',
'exif-artist' => 'Autô',
'exif-copyright' => "Diritti d'autô de",
'exif-filesource' => 'Reixe do papê',

# External editor support
'edit-externally' => 'Càngia sto file co-in programma esterno',
'edit-externally-help' => 'Pe avéi ciù informaçioìn amia e [//www.mediawiki.org/wiki/Manual:External_editors istruçioìn] (in ingléize)',

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'Tùtti',
'namespacesall' => 'Tùtti',
'monthsall' => 'tutti',

# Multipage image navigation
'imgmultipageprev' => '← Pagina de primma',
'imgmultipagenext' => 'Proscima pagina →',
'imgmultigo' => 'Vanni!',

# Table pager
'ascending_abbrev' => 'cresc',
'table_pager_next' => 'Proscima pagina',
'table_pager_prev' => 'Pagina de primma',
'table_pager_first' => 'Primma pagina',
'table_pager_last' => 'Urtima pagina',
'table_pager_limit' => 'Fanni devve $1 elementi pe pagina',
'table_pager_limit_submit' => 'Vanni',
'table_pager_empty' => 'Nisciun resultato',

# Auto-summaries
'autosumm-blank' => 'Scassa tutti i contenùi da a pagina',
'autosumm-replace' => "Sostituçion da pagina con '$1'",
'autoredircomment' => 'Reindirissoö a [[$1]]',
'autosumm-new' => 'Neuva pagina: $1',

# Live preview
'livepreview-loading' => 'Camallando…',
'livepreview-ready' => 'Camallando… Æmô finïo!',

# Watchlist editing tools
'watchlisttools-view' => 'Veddi e modiffiche pertinenti',
'watchlisttools-edit' => 'Veddi e modiffica a lista',
'watchlisttools-raw' => 'Modiffica a lista in formato testo',

# Core parser functions
'duplicate-defaultsort' => 'Atençión: a ciâve de ordinaménto predefinîa "$2" a sostitoisce quella de primma "$1".',

# Special:Version
'version' => 'Verscion',

# Special:SpecialPages
'specialpages' => 'Pagine speçiâli',

# External image whitelist
'external_image_whitelist' => " #Lascia sta riga comm'a l'é<pre>
#Inseisci i pessi de esprescioìn regolari (sôlo a pàrte ch'a va fra e //) chì sotta
#Ste chi saiàn misse a confronto co-i indirìssi URL de inmàgini esterne (hotlinked)
#E corispondense saiàn mostræ cómme inmàgini, donca saiâ mostròu sôlo in colegaménto
#E righe che començan con # son conscideræ coménti
#A diferensa tra maioscole e minoscole a no l'è scignificatîva

#Inseisci sovia sta rîga tùtti i frammenti de regex. Lascia sta rîga ezattamente comm'a l'é</pre>",

# Special:Tags
'tag-filter' => 'Filtra pe [[Special:Tags|etichetta]]:',

);
