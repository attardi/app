<?php
/** Greek (Ελληνικά)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author AK
 * @author Assassingr
 * @author Azimout
 * @author Badseed
 * @author Consta
 * @author Crazymadlover
 * @author Dada
 * @author Dead3y3
 * @author Demmy
 * @author Evropi
 * @author Flyax
 * @author Geraki
 * @author Kaganer
 * @author Kiolalis
 * @author Kiriakos
 * @author Lou
 * @author MF-Warburg
 * @author Malafaya
 * @author Omnipaedista
 * @author Reedy
 * @author Remember the dot
 * @author Sinopeus
 * @author Urhixidur
 * @author ZaDiak
 * @author Απεργός
 * @author Περίεργος
 * @author לערי ריינהארט
 */

/**
  * Translation by Pasok Internet Volunteers
  * http://forum.pasok.gr
  * version 1.0 (initial release)
  *
  * The project for the translation of MediaWiki into Greek
  * was undertaken by a group of ICT volunteers working under
  * the auspices of the Greek political party PASOK.
  *
  * The idea behind this effort was  to provide an extensible,
  * easy-to-use and non-intimidating tool for content development
  * and project management, to be used throughout the administrative
  * and political structure of PASOK by staff, volunteers, party members
  * and elected officials (all of whom possess varying degrees of ICT skills).
  *
  * The PASOK ICT team and the volunteers who worked on this project are
  * now returning the translated interface to the Open-Source Community
  * with over 98% of the messages translated into user-friendly Greek.
  *
  * We hope that it will be used as a tool by other civil society organizations
  * in Greece, and that it will enhance the collective creation and the dissemination
  * of knowledge - an essential component of the democratic process.
  */

$namespaceNames = array(
	NS_MEDIA            => 'Μέσο',
	NS_SPECIAL          => 'Ειδικό',
	NS_TALK             => 'Συζήτηση',
	NS_USER             => 'Χρήστης',
	NS_USER_TALK        => 'Συζήτηση_χρήστη',
	NS_PROJECT_TALK     => '$1_συζήτηση',
	NS_FILE             => 'Αρχείο',
	NS_FILE_TALK        => 'Συζήτηση_αρχείου',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'Συζήτηση_MediaWiki',
	NS_TEMPLATE         => 'Πρότυπο',
	NS_TEMPLATE_TALK    => 'Συζήτηση_προτύπου',
	NS_HELP             => 'Βοήθεια',
	NS_HELP_TALK        => 'Συζήτηση_βοήθειας',
	NS_CATEGORY         => 'Κατηγορία',
	NS_CATEGORY_TALK    => 'Συζήτηση_κατηγορίας',
);

$namespaceAliases = array(
	'Μέσον' => NS_MEDIA,
	'Εικόνα' => NS_FILE,
	'Συζήτηση_εικόνας' => NS_FILE_TALK,
);

$specialPageAliases = array(
	'Activeusers'               => array( 'ΕνεργοίΧρήστες' ),
	'Allmessages'               => array( 'ΌλαΤαΜηνύματα' ),
	'Allpages'                  => array( 'ΌλεςΟιΣελίδες' ),
	'Ancientpages'              => array( 'ΑρχαίεςΣελίδες' ),
	'Blankpage'                 => array( 'ΚενήΣελίδα' ),
	'Block'                     => array( 'Φραγή', 'ΦραγήIP', 'ΦραγήΧρήστη' ),
	'Blockme'                   => array( 'ΦραγήΕμένα' ),
	'Booksources'               => array( 'ΠηγέςΒιβλίων' ),
	'BrokenRedirects'           => array( 'ΛανθασμένεςΑνακατευθύνσεις' ),
	'Categories'                => array( 'Κατηγορίες' ),
	'ChangePassword'            => array( 'ΑλλαγήΚωδικού', 'ΑρχικοποίησηΠάσου', 'ΑρχικοποίησηΚωδικού' ),
	'Confirmemail'              => array( 'ΕπιβεβαίωσηEmail' ),
	'Contributions'             => array( 'Συνεισφορές' ),
	'CreateAccount'             => array( 'ΔημιουργίαΛογαριασμού' ),
	'Deadendpages'              => array( 'ΑδιέξοδεςΣελίδες' ),
	'DeletedContributions'      => array( 'ΔιαγραμμένεςΣυνεισφορές' ),
	'Disambiguations'           => array( 'Αποσαφηνίσεις' ),
	'DoubleRedirects'           => array( 'ΔιπλέςΑνακατευθύνσεις' ),
	'Emailuser'                 => array( 'EmailΧρήστη' ),
	'Export'                    => array( 'Εξαγωγή' ),
	'Fewestrevisions'           => array( 'ΛιγότεροΕπεξεργασίες' ),
	'FileDuplicateSearch'       => array( 'ΑναζήτησηΔιπλώνΑρχείων' ),
	'Filepath'                  => array( 'ΔιαδρομήΑρχείου' ),
	'Import'                    => array( 'Εισαγωγή' ),
	'Invalidateemail'           => array( 'ΑκύρωσηEmail' ),
	'BlockList'                 => array( 'ΚατάλογοςΦραγών', 'ΦραγώνΚατάλογος', 'ΚατάλογοςΦραγώνIP' ),
	'LinkSearch'                => array( 'ΣυνδέσμουΑναζήτηση' ),
	'Listadmins'                => array( 'ΚατάλογοςΔιαχειριστών' ),
	'Listbots'                  => array( 'ΚατάλογοςBot' ),
	'Listfiles'                 => array( 'ΚατάλογοςΑρχείων', 'ΑρχείαΚατάλογος', 'ΚατάλογοςΕικόνων' ),
	'Listgrouprights'           => array( 'ΚατάλογοςΔικαιωμάτωνΧρηστών' ),
	'Listredirects'             => array( 'ΚατάλογοςΑνακατευθύνσεων' ),
	'Listusers'                 => array( 'ΚατάλογοςΧρηστών', 'ΧρήστεςΚατάλογος' ),
	'Lockdb'                    => array( 'ΚλείδωμαΒάσης' ),
	'Log'                       => array( 'Μητρώο', 'Μητρώα' ),
	'Lonelypages'               => array( 'ΜόνεςΣελίδες', 'ΟρφανέςΣελίδες' ),
	'Longpages'                 => array( 'ΜεγάλεςΣελίδες' ),
	'MergeHistory'              => array( 'ΣυγχώνευσηΙστορικού' ),
	'MIMEsearch'                => array( 'ΑναζήτησηMIME' ),
	'Mostcategories'            => array( 'ΠερισσότεροΚατηγορίες' ),
	'Mostimages'                => array( 'ΠερισσότεροΣυνδεδεμέναΑρχεία', 'ΠερισσότεροΑρχεία' ),
	'Mostlinked'                => array( 'ΠερισσότεροΣυνδεδεμένεςΣελίδες', 'ΠερισσότεροΣυνδεδεμένες' ),
	'Mostlinkedcategories'      => array( 'ΠερισσότεροΣυνδεδεμένεςΚατηγορίες', 'ΠερισσότεροΧρησιμοποιημένεςΚατηγορίες' ),
	'Mostlinkedtemplates'       => array( 'ΠερισσότεροΣυνδεδεμέναΠρότυπα', 'ΠερισσότεροΧρησιμοποιημέναΠρότυπα' ),
	'Mostrevisions'             => array( 'ΠερισσότεροΕπεξεργασίες' ),
	'Movepage'                  => array( 'ΜετακίνησηΣελίδας' ),
	'Mycontributions'           => array( 'ΟιΣυνεισφορέςΜου' ),
	'Mypage'                    => array( 'ΗΣελίδαΜου' ),
	'Mytalk'                    => array( 'ΗΣυζήτησήΜου' ),
	'Newimages'                 => array( 'ΝέαΑρχεία', 'ΝέεςΕικόνες' ),
	'Newpages'                  => array( 'ΝέεςΣελίδες' ),
	'Popularpages'              => array( 'ΔημοφιλείςΣελίδες' ),
	'Preferences'               => array( 'Προτιμήσεις' ),
	'Prefixindex'               => array( 'ΕυρετήριοΠροθεμάτων' ),
	'Protectedpages'            => array( 'ΠροστατευμένεςΣελίδες' ),
	'Protectedtitles'           => array( 'ΠροστετευμένοιΤίτλοι' ),
	'Randompage'                => array( 'Τυχαία', 'ΤυχαίαΣελίδα' ),
	'Randomredirect'            => array( 'ΤυχαίαΑνακατεύθυνση' ),
	'Recentchanges'             => array( 'ΠρόσφατεςΑλλαγές' ),
	'Recentchangeslinked'       => array( 'ΣυνδεδεμένεςΠρόσφατεςΑλλαγές', 'ΣχετικέςΑλλαγές' ),
	'Revisiondelete'            => array( 'ΔιαγραφήΈκδοσης' ),
	'Search'                    => array( 'Αναζήτηση' ),
	'Shortpages'                => array( 'ΜικρέςΣελίδες' ),
	'Specialpages'              => array( 'ΕιδικέςΣελίδες' ),
	'Statistics'                => array( 'Στατιστικά' ),
	'Tags'                      => array( 'Ετικέτες' ),
	'Uncategorizedcategories'   => array( 'ΑκατηγοριοποίητεςΚατηγορίες' ),
	'Uncategorizedimages'       => array( 'ΑκατηγοριοποίηταΑρχεία', 'ΑκατηγοριοποίητεςΕικόνες' ),
	'Uncategorizedpages'        => array( 'ΑκατηγοριοποίητεςΣελίδες' ),
	'Uncategorizedtemplates'    => array( 'ΑκατηγοριοποίηταΠρότυπα' ),
	'Undelete'                  => array( 'ΑναίρεσηΔιαγραφής' ),
	'Unlockdb'                  => array( 'ΞεκλείδωμαΒάσης' ),
	'Unusedcategories'          => array( 'ΑχρησιμοποίητεςΚατηγορίες' ),
	'Unusedimages'              => array( 'ΑχρησιμοποίηταΑρχεία' ),
	'Unusedtemplates'           => array( 'ΜηΧρησιμοποιούμεναΠρότυπα' ),
	'Unwatchedpages'            => array( 'ΜηΠαρακολουθούμενεςΣελίδες' ),
	'Upload'                    => array( 'Επιφόρτωση' ),
	'Userlogin'                 => array( 'ΣύνδεσηΧρήστη' ),
	'Userlogout'                => array( 'ΑποσύνδεσηΧρήστη' ),
	'Userrights'                => array( 'ΔικαιώματαΧρηστών' ),
	'Version'                   => array( 'Έκδοση' ),
	'Wantedcategories'          => array( 'ΕπιθυμητέςΚατηγορίες' ),
	'Wantedfiles'               => array( 'ΕπιθυμητάΑρχεία' ),
	'Wantedpages'               => array( 'ΕπιθυμητέςΣελίδες', 'ΣπασμένοιΣύνδεσμοι' ),
	'Wantedtemplates'           => array( 'ΕπιθυμητάΠρότυπα' ),
	'Watchlist'                 => array( 'ΛίσταΠαρακολούθησης' ),
	'Whatlinkshere'             => array( 'ΤιΣυνδέειΕδώ' ),
	'Withoutinterwiki'          => array( 'ΧωρίςInterwiki' ),
);

$fallback8bitEncoding = 'iso-8859-7';
$separatorTransformTable = array( ',' => '.', '.' => ',' );
$linkTrail = '/^([a-zαβγδεζηθικλμνξοπρστυφχψωςΑΒΓΔΕΖΗΘΙΚΛΜΝΞΟΠΡΣΤΥΦΧΨΩάέήίόύώϊϋΐΰΆΈΉΊΌΎΏΪΫ]+)(.*)$/sDu';


$datePreferences = array(
	'default',
	'dmy',
	'ISO 8601',
);

$defaultDateFormat = 'dmy';

$datePreferenceMigrationMap = array(
	'default',
	'dmy',
	'dmy',
	'dmy'
);

$dateFormats = array(
	'dmy time' => 'H:i',
	'dmy date' => 'j xg Y',
	'dmy both' => 'H:i, j xg Y',

	'ISO 8601 time' => 'xnH:xni:xns',
	'ISO 8601 date' => 'xnY-xnm-xnd',
	'ISO 8601 both' => 'xnY-xnm-xnd"T"xnH:xni:xns',
);


$magicWords = array(
	'redirect'                => array( '0', '#ΑΝΑΚΑΤΕΥΘΥΝΣΗ', '#REDIRECT' ),
	'notoc'                   => array( '0', '__ΧΩΡΙΣΠΠ__', '__NOTOC__' ),
	'nogallery'               => array( '0', '__ΧΩΡΙΣΠΙΝΑΚΟΘΗΚΗ__', '__NOGALLERY__' ),
	'forcetoc'                => array( '0', '__ΜΕΠΠ__', '__FORCETOC__' ),
	'toc'                     => array( '0', '__ΠΠ__', '__TOC__' ),
	'noeditsection'           => array( '0', '__ΧΩΡΙΣΕΠΕΞΕΝΟΤ__', '__NOEDITSECTION__' ),
	'noheader'                => array( '0', '__ΧΩΡΙΣΚΕΦΑΛΙΔΑ__', '__NOHEADER__' ),
	'currentmonth'            => array( '1', 'ΤΡΕΧΩΝΜΗΝΑΣ', 'CURRENTMONTH', 'CURRENTMONTH2' ),
	'currentmonth1'           => array( '1', 'ΤΡΕΧΩΝΜΗΝΑΣ1', 'CURRENTMONTH1' ),
	'currentmonthname'        => array( '1', 'ΤΡΕΧΩΝΜΗΝΑΣΟΝΟΜΑ', 'CURRENTMONTHNAME' ),
	'currentmonthnamegen'     => array( '1', 'ΤΡΕΧΩΝΜΗΝΑΣΓΕΝΙΚΗ', 'CURRENTMONTHNAMEGEN' ),
	'currentmonthabbrev'      => array( '1', 'ΤΡΕΧΩΝΜΗΝΑΣΣΥΝΤ', 'CURRENTMONTHABBREV' ),
	'currentday'              => array( '1', 'ΤΡΕΧΟΥΣΑΜΕΡΑ', 'CURRENTDAY' ),
	'currentday2'             => array( '1', 'ΤΡΕΧΟΥΣΑΜΕΡΑ2', 'CURRENTDAY2' ),
	'currentdayname'          => array( '1', 'ΤΡΕΧΟΥΣΑΜΕΡΑΟΝΟΜΑ', 'CURRENTDAYNAME' ),
	'currentyear'             => array( '1', 'ΤΡΕΧΟΝΕΤΟΣ', 'CURRENTYEAR' ),
	'currenttime'             => array( '1', 'ΤΡΕΧΩΝΧΡΟΝΟΣ', 'CURRENTTIME' ),
	'currenthour'             => array( '1', 'ΤΡΕΧΟΥΣΑΩΡΑ', 'CURRENTHOUR' ),
	'localmonth'              => array( '1', 'ΤΟΠΙΚΟΣΜΗΝΑΣ', 'LOCALMONTH', 'LOCALMONTH2' ),
	'localmonth1'             => array( '1', 'ΤΟΠΙΚΟΣΜΗΝΑΣ1', 'LOCALMONTH1' ),
	'localmonthname'          => array( '1', 'ΤΟΠΙΚΟΣΜΗΝΑΣΟΝΟΜΑ', 'LOCALMONTHNAME' ),
	'localmonthnamegen'       => array( '1', 'ΤΟΠΙΚΟΣΜΗΝΑΣΓΕΝΙΚΗ', 'LOCALMONTHNAMEGEN' ),
	'localmonthabbrev'        => array( '1', 'ΤΟΠΙΚΟΣΜΗΝΑΣΣΥΝΤ', 'LOCALMONTHABBREV' ),
	'localday'                => array( '1', 'ΤΟΠΙΚΗΜΕΡΑ', 'LOCALDAY' ),
	'localday2'               => array( '1', 'ΤΟΠΙΚΗΜΕΡΑ2', 'LOCALDAY2' ),
	'localdayname'            => array( '1', 'ΤΟΠΙΚΗΜΕΡΑΟΝΟΜΑ', 'LOCALDAYNAME' ),
	'localyear'               => array( '1', 'ΤΟΠΙΚΟΕΤΟΣ', 'LOCALYEAR' ),
	'localtime'               => array( '1', 'ΤΟΠΙΚΟΣΧΡΟΝΟΣ', 'LOCALTIME' ),
	'localhour'               => array( '1', 'ΤΟΠΙΚΗΩΡΑ', 'LOCALHOUR' ),
	'numberofpages'           => array( '1', 'ΑΡΙΘΜΟΣΣΕΛΙΔΩΝ', 'NUMBEROFPAGES' ),
	'numberofarticles'        => array( '1', 'ΑΡΙΘΜΟΣΑΡΘΡΩΝ', 'NUMBEROFARTICLES' ),
	'numberoffiles'           => array( '1', 'ΑΡΙΘΜΟΣΑΡΧΕΙΩΝ', 'NUMBEROFFILES' ),
	'numberofusers'           => array( '1', 'ΑΡΙΘΜΟΣΧΡΗΣΤΩΝ', 'NUMBEROFUSERS' ),
	'numberofactiveusers'     => array( '1', 'ΕΝΕΡΓΟΙΧΡΗΣΤΕΣ', 'ΑΡΙΘΜΟΣΕΝΕΡΓΩΝΧΡΗΣΤΩΝ', 'NUMBEROFACTIVEUSERS' ),
	'numberofedits'           => array( '1', 'ΑΡΙΘΜΟΣΕΠΕΞΕΡΓΑΣΙΩΝ', 'NUMBEROFEDITS' ),
	'numberofviews'           => array( '1', 'ΑΡΙΘΜΟΣΕΜΦΑΝΙΣΕΩΝ', 'NUMBEROFVIEWS' ),
	'pagename'                => array( '1', 'ΟΝΟΜΑΣΕΛΙΔΑΣ', 'PAGENAME' ),
	'pagenamee'               => array( '1', 'ΟΝΟΜΑΣΕΛΙΔΑΣΚ', 'PAGENAMEE' ),
	'namespace'               => array( '1', 'ΠΕΡΙΟΧΗ', 'NAMESPACE' ),
	'namespacee'              => array( '1', 'ΠΕΡΙΟΧΗΚ', 'NAMESPACEE' ),
	'talkspace'               => array( '1', 'ΠΕΡΙΟΧΗΣΥΖΗΤΗΣΕΩΝ', 'TALKSPACE' ),
	'talkspacee'              => array( '1', 'ΠΕΡΙΟΧΗΣΥΖΗΤΗΣΕΩΝΚ', 'TALKSPACEE' ),
	'subjectspace'            => array( '1', 'ΠΕΡΙΟΧΗΘΕΜΑΤΩΝ', 'SUBJECTSPACE', 'ARTICLESPACE' ),
	'subjectspacee'           => array( '1', 'ΠΕΡΙΟΧΗΘΕΜΑΤΩΝΚ', 'SUBJECTSPACEE', 'ARTICLESPACEE' ),
	'fullpagename'            => array( '1', 'ΠΛΗΡΕΣΟΝΟΜΑΣΕΛΙΔΑΣ', 'FULLPAGENAME' ),
	'fullpagenamee'           => array( '1', 'ΠΛΗΡΕΣΟΝΟΜΑΣΕΛΙΔΑΣΚ', 'FULLPAGENAMEE' ),
	'subpagename'             => array( '1', 'ΟΝΟΜΑΥΠΟΣΕΛΙΔΑΣ', 'SUBPAGENAME' ),
	'subpagenamee'            => array( '1', 'ΟΝΟΜΑΥΠΟΣΕΛΙΔΑΣΚ', 'SUBPAGENAMEE' ),
	'basepagename'            => array( '1', 'ΒΑΣΗΟΝΟΜΑΤΟΣΣΕΛΙΔΑΣ', 'BASEPAGENAME' ),
	'basepagenamee'           => array( '1', 'ΒΑΣΗΟΝΟΜΑΤΟΣΣΕΛΙΔΑΣΚ', 'BASEPAGENAMEE' ),
	'talkpagename'            => array( '1', 'ΟΝΟΜΑΣΕΛΙΔΑΣΣΥΖΗΤΗΣΕΩΝ', 'TALKPAGENAME' ),
	'talkpagenamee'           => array( '1', 'ΟΝΟΜΑΣΕΛΙΔΑΣΣΥΖΗΤΗΣΕΩΝΚ', 'TALKPAGENAMEE' ),
	'subjectpagename'         => array( '1', 'ΟΝΟΜΑΣΕΛΙΔΑΣΘΕΜΑΤΟΣ', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ),
	'subjectpagenamee'        => array( '1', 'ΟΝΟΜΑΣΕΛΙΔΑΣΘΕΜΑΤΟΣΚ', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ),
	'msg'                     => array( '0', 'ΚΕΙΜΕΝΟ:', 'MSG:' ),
	'subst'                   => array( '0', 'ΑΛΛΑΓΗ:', 'SUBST:' ),
	'msgnw'                   => array( '0', 'ΑΠΛΟΚΕΙΜΕΝΟ:', 'MSGNW:' ),
	'img_thumbnail'           => array( '1', 'μικρογραφία', 'μινιατούρα', 'thumbnail', 'thumb' ),
	'img_manualthumb'         => array( '1', 'μικρογραφία=$1', 'μινιατούρα=$1', 'thumbnail=$1', 'thumb=$1' ),
	'img_right'               => array( '1', 'δεξιά', 'right' ),
	'img_left'                => array( '1', 'αριστερά', 'left' ),
	'img_none'                => array( '1', 'καθόλου', 'none' ),
	'img_width'               => array( '1', '$1εσ', '$1px' ),
	'img_center'              => array( '1', 'κέντρο', 'center', 'centre' ),
	'img_framed'              => array( '1', 'με-πλαίσιο', 'framed', 'enframed', 'frame' ),
	'img_frameless'           => array( '1', 'χωρίς-πλαίσιο', 'frameless' ),
	'img_page'                => array( '1', 'σελίδα=$1', 'σελίδα $1', 'page=$1', 'page $1' ),
	'img_upright'             => array( '1', 'κατακόρυφα', 'κατακόρυφα=$1', 'κατακόρυφα $1', 'upright', 'upright=$1', 'upright $1' ),
	'img_border'              => array( '1', 'πλαίσιο', 'border' ),
	'img_baseline'            => array( '1', 'γραμμήβάσης', 'baseline' ),
	'img_sub'                 => array( '1', 'δείκτης', 'sub' ),
	'img_super'               => array( '1', 'εκθέτης', 'super', 'sup' ),
	'img_top'                 => array( '1', 'άνω', 'top' ),
	'img_text_top'            => array( '1', 'πάνω-από-το-κείμενο', 'text-top' ),
	'img_middle'              => array( '1', 'μέσο', 'middle' ),
	'img_bottom'              => array( '1', 'κάτω', 'bottom' ),
	'img_text_bottom'         => array( '1', 'κάτω-από-το-κείμενο', 'text-bottom' ),
	'img_link'                => array( '1', 'σύνδεσμος=$1', 'link=$1' ),
	'img_alt'                 => array( '1', 'εναλλ.=$1', 'alt=$1' ),
	'int'                     => array( '0', 'ΕΣΩΤ:', 'INT:' ),
	'sitename'                => array( '1', 'ΙΣΤΟΧΩΡΟΣ', 'SITENAME' ),
	'ns'                      => array( '0', 'ΧΟ:', 'NS:' ),
	'localurl'                => array( '0', 'ΤΟΠΙΚΟURL:', 'LOCALURL:' ),
	'localurle'               => array( '0', 'ΤΟΠΙΚΟURLΚ:', 'LOCALURLE:' ),
	'server'                  => array( '0', 'ΕΞΥΠΗΡΕΤΗΤΗΣ', 'SERVER' ),
	'servername'              => array( '0', 'ΟΝΟΜΑΕΞΥΠΗΡΕΤΗΤΗ', 'SERVERNAME' ),
	'scriptpath'              => array( '0', 'ΔΙΑΔΡΟΜΗΠΡΟΓΡΑΜΜΑΤΟΣ', 'SCRIPTPATH' ),
	'grammar'                 => array( '0', 'ΓΡΑΜΜΑΤΙΚΗ:', 'GRAMMAR:' ),
	'gender'                  => array( '0', 'ΦΥΛΟ:', 'GENDER:' ),
	'notitleconvert'          => array( '0', '__ΧΩΡΙΣΜΕΤΑΤΡΟΠΗΤΙΤΛΟΥ__', '__NOTITLECONVERT__', '__NOTC__' ),
	'nocontentconvert'        => array( '0', '__ΧΩΡΙΣΜΕΤΑΤΡΟΠΗΠΕΡΙΧΟΜΕΝΟΥ__', '__NOCONTENTCONVERT__', '__NOCC__' ),
	'currentweek'             => array( '1', 'ΤΡΕΧΟΥΣΑΕΒΔΟΜΑΔΑ', 'CURRENTWEEK' ),
	'currentdow'              => array( '1', 'ΤΡΕΧΟΥΣΑΜΕΡΑΕΒΔΟΜΑΔΑΣ', 'CURRENTDOW' ),
	'localweek'               => array( '1', 'ΤΟΠΙΚΗΕΒΔΟΜΑΔΑ', 'LOCALWEEK' ),
	'localdow'                => array( '1', 'ΤΟΠΙΚΗΜΕΡΑΕΒΔΟΜΑΔΑΣ', 'LOCALDOW' ),
	'revisionid'              => array( '1', 'ΚΩΔΙΚΟΣΑΛΛΑΓΗΣ', 'REVISIONID' ),
	'revisionday'             => array( '1', 'ΜΕΡΑΑΛΛΑΓΗΣ', 'REVISIONDAY' ),
	'revisionday2'            => array( '1', 'ΜΕΡΑΑΛΛΑΓΗΣ2', 'REVISIONDAY2' ),
	'revisionmonth'           => array( '1', 'ΜΗΝΑΣΑΛΛΑΓΗΣ', 'REVISIONMONTH' ),
	'revisionyear'            => array( '1', 'ΕΤΟΣΑΛΛΑΓΗΣ', 'REVISIONYEAR' ),
	'revisiontimestamp'       => array( '1', 'ΧΡΟΝΟΣΗΜΑΝΣΗΑΛΛΑΓΗΣ', 'REVISIONTIMESTAMP' ),
	'plural'                  => array( '0', 'ΠΛΗΘΥΝΤΙΚΟΣ:', 'PLURAL:' ),
	'fullurl'                 => array( '0', 'ΠΛΗΡΕΣURL:', 'FULLURL:' ),
	'fullurle'                => array( '0', 'ΠΛΗΡΕΣURLΚ:', 'FULLURLE:' ),
	'lcfirst'                 => array( '0', 'ΠΡΩΤΟΠΕΖΟ:', 'LCFIRST:' ),
	'ucfirst'                 => array( '0', 'ΠΡΩΤΟΚΕΦΑΛΑΙΟ:', 'UCFIRST:' ),
	'lc'                      => array( '0', 'ΠΕΖΑ:', 'LC:' ),
	'uc'                      => array( '0', 'ΚΕΦΑΛΑΙΑ:', 'UC:' ),
	'raw'                     => array( '0', 'ΓΥΜΝΑ:', 'RAW:' ),
	'displaytitle'            => array( '1', 'ΔΕΙΞΕΤΙΤΛΟ', 'DISPLAYTITLE' ),
	'rawsuffix'               => array( '1', 'Γ', 'R' ),
	'newsectionlink'          => array( '1', '__ΔΕΣΜΟΣΝΕΑΣΕΝΟΤΗΤΑΣ__', '__NEWSECTIONLINK__' ),
	'currentversion'          => array( '1', 'ΤΡΕΧΟΥΣΑΕΚΔΟΣΗ', 'CURRENTVERSION' ),
	'urlencode'               => array( '0', 'ΚΩΔΙΚΟΠΟΙΗΣΗURL:', 'URLENCODE:' ),
	'anchorencode'            => array( '0', 'ΚΩΔΙΚΟΠΟΙΗΣΗΑΓΚΥΡΑΣ', 'ANCHORENCODE' ),
	'currenttimestamp'        => array( '1', 'ΤΡΕΧΟΥΣΑΧΡΟΝΟΣΗΜΑΝΣΗ', 'CURRENTTIMESTAMP' ),
	'localtimestamp'          => array( '1', 'ΤΟΠΙΚΗΧΡΟΝΟΣΗΜΑΝΣΗ', 'LOCALTIMESTAMP' ),
	'directionmark'           => array( '1', 'ΚΩΔΙΚΟΣΦΟΡΑΣ', 'DIRECTIONMARK', 'DIRMARK' ),
	'language'                => array( '0', '#ΓΛΩΣΣΑ:', '#LANGUAGE:' ),
	'contentlanguage'         => array( '1', 'ΓΛΩΣΣΑΠΕΡΙΕΧΟΜΕΝΟΥ', 'CONTENTLANGUAGE', 'CONTENTLANG' ),
	'pagesinnamespace'        => array( '1', 'ΣΕΛΙΔΕΣΣΤΗΝΠΕΡΙΟΧΗΟΝΟΜΑΤΩΝ:', 'ΣΕΛΙΔΕΣΣΤΗΝΠΟ:', 'PAGESINNAMESPACE:', 'PAGESINNS:' ),
	'numberofadmins'          => array( '1', 'ΑΡΙΘΜΟΣΔΙΑΧΕΙΡΙΣΤΩΝ', 'NUMBEROFADMINS' ),
	'formatnum'               => array( '0', 'ΜΟΡΦΟΠΟΙΗΣΗΑΡΙΘΜΟΥ', 'FORMATNUM' ),
	'padleft'                 => array( '0', 'ΑΡΙΣΤΕΡΟΠΑΡΑΓΕΜΙΣΜΑ', 'PADLEFT' ),
	'padright'                => array( '0', 'ΔΕΞΙΠΑΡΑΓΕΜΙΣΜΑ', 'PADRIGHT' ),
	'special'                 => array( '0', 'λειτουργία', 'special' ),
	'defaultsort'             => array( '1', 'ΠΡΟΚΑΘΟΡΙΣΜΕΝΗΤΑΞΙΝΟΜΗΣΗ:', 'ΚΛΕΙΔΙΠΡΟΚΑΘΟΡΙΣΜΕΝΗΣΤΑΞΙΝΟΜΗΣΗΣ:', 'ΠΡΟΚΑΘΟΡΙΣΜΕΝΗΤΑΞΙΝΟΜΗΣΗΚΑΤΗΓΟΡΙΑΣ:', 'ΠΡΟΚΤΑΞ:', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ),
	'filepath'                => array( '0', 'ΔΙΑΔΡΟΜΗΑΡΧΕΙΟΥ:', 'FILEPATH:' ),
	'tag'                     => array( '0', 'ετικέτα', 'tag' ),
	'hiddencat'               => array( '1', '__ΚΡΥΦΗΚΑΤΗΓΟΡΙΑ__', '__HIDDENCAT__' ),
	'pagesincategory'         => array( '1', 'ΣΕΛΙΔΕΣΣΤΗΝΚΑΤΗΓΟΡΙΑ', 'PAGESINCATEGORY', 'PAGESINCAT' ),
	'pagesize'                => array( '1', 'ΜΕΓΕΘΟΣΣΕΛΙΔΑΣ', 'PAGESIZE' ),
	'index'                   => array( '1', '__ΕΥΡΕΤΗΡΙΟ__', '__INDEX__' ),
	'noindex'                 => array( '1', '__ΧΩΡΙΣΕΥΡΕΤΗΡΙΟ__', '__NOINDEX__' ),
	'numberingroup'           => array( '1', 'ΟΜΑΔΑΑΡΙΘΜΗΣΗΣ', 'NUMBERINGROUP', 'NUMINGROUP' ),
	'staticredirect'          => array( '1', '__ΣΤΑΤΙΚΗΑΝΑΚΑΤΕΥΘΥΝΣΗ__', '__STATICREDIRECT__' ),
	'protectionlevel'         => array( '1', 'ΕΠΙΠΕΔΟΠΡΟΣΤΑΣΙΑΣ', 'PROTECTIONLEVEL' ),
);

