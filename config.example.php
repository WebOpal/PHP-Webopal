<?php
/**
This is the main configuration file for WebOpal. You need to configure the following variables.
**/

/**
Set the root url to your Webopal installation here.
Don't forget the slash at the end.
E.g. http://opal.somedomain.net/
**/
$HOSTURL=''; 

/**
In some countries (e.g. germany) you need an imprint.
Set the url to your imprint here.
E.g. http://somedomain.net/myimprint.html
**/
$IMPRESSUM=''; 

/**
Set the minimum/standard amount of structures here.
A value between 1 and 3 is recommended.
**/
$MINFILES=2; 

/**
Set the maximum amount of structures here.
A value between 5 and 10 is recommended.
**/
$MAXFILES=3; 

/**
Some programs need a lot of CPU time. 
You can restrict the duration in seconds the program is allowed to run.
We recommend a value of 10 seconds.
**/
$TIMEOUT=10; 

/**
If the program ran into the timeout, display a userfriendly message.
You can edit the message below.
**/
$TIMEOUTTXT='Your program maybe timed out (>'.$TIMEOUT.'s)'; 

/**
Set the session timeout in seconds.
After the timeout, the session will expire.
Note: The session will be renewed on everey users action. 
**/
$SESSIONTIMEOUT=600; 

/**
Set the implementation code of an example program, which will be shown to the user the first time he's visiting WebOpal.
**/
$EXAMPLECODE_IMPL = 'DEF hello == "Hello World!"';

/**
Set the signature code of an example program, which will be shown to the user the first time he's visiting WebOpal.
**/
$EXAMPLECODE_SIGN = 'FUN hello : denotation';

/**
Set the execution command of an example program.
**/
$EXAMPLECODE_CMD = 'hello';

/**
You can add a comment which will appear in some of the downloaded files. 
**/
$ADVERTCOMMENT = '-- created with WebOpal (https://github.com/gehaxelt/PHP-Webopal) on Server '.$HOSTURL; 

/**
Set the path to a temporary directory, which is writable by the webserver, where the files will be stored.
**/
$TMPDIR = 'tmp';

/**
Set the maximum number of execution composition.
We recommend a value of 10.
**/
$RUNMAX = 10;

/**
If the debug mode is enabled, you'll find the content of $_SESSION at /debug.php.
Useful for developement or debugging.
You should not enable it on productive systems.
**/
$DEBUGMODE = false; 

/**
If bugreport is enabled, you'll give the users the posibillity to send bugreports or improvements to a github repository.
You'll need php version >=5.3.2 with cURL extension enabled.
We recommend you to enable this option, so we can improve WebOpal ;)
**/
$BUGREPORT = false;

/**
You need to set the following variables to get the bugreport working.
**/

/**
Set name of the repository, to which the bugs should be reported.
E.g. PHP-WebOpal
**/
$ISSUEREPO='PHP-Webopal';

/**
Set the owner of the repository. 
E.g. gehaxelt
**/
$ISSUEUSER= 'gehaxelt';

/**
You'll need to declare a github user, which will post the reports.
In case, you do not want to use your real account, you can simply create on.
E.g. WebOpalReporter
**/
$GITHUBUSER='';

/**
The githubusers password for github.com
**/
$GITHUBPW='';

/**
We're using reCaptcha to protect you from spam.
You'll need to create a key for free at: https://www.google.com/recaptcha/admin/create
Paste the public/private key into the variables below.
**/
$PUBLICKEY = '';
$PRIVATEKEY = '';

/**
We created a blacklist of trash/spam mail services. 
Feel free to add or remove some services.
**/
$FORBIDDENEMAIL = 
Array("0clickemail.com","noclickemail.com","10minutemail.com ","bofthew.com","jnxjn.com","klzlk.com","nepwk.com","nwldx.com","owlpic.com","pjjkp.com",
"prtnx.com","rmqkr.net","rppkn.com","rtrtr.com","tyldd.com","uggsrock.com","12houremail.com","12minutemail.com","1pad.de","akapost.com",
"anon-mail.de","anonbox.net","anonmails.de","anonymbox.com","antispam.de","antispam24.de","antispammail.de","b2cmail.de","breakthru.com",
"bspamfree.org","bugmenot.com","bumpymail.com","cam4you.cc","centermail.com","centermail.net","deadaddress.com","despammed.com",
"dispostable.com","dodgeit.com","dodgit.com","dontsendmespam.de","dotman.de","dudmail.com","dump-email.info","dumpmail.de","e4ward.com",
"edv.to","eintagsmail.de","emailgo.de","emailias.com","emailsensei.com","emailtemporanea.com","emailtemporanea.net","eyepaste.com",
"fakemail.fr","filzmail.com","frapmail.com","garbagemail.org","garliclife.com","getmails.eu","getonemail.com","gishpuppy.com","nurfuerspam.de",
"guerillamail.org","guerrillamail.biz","guerrillamail.com","guerrillamail.de","guerrillamail.info","guerrillamail.org","sharklasers.com",
"guerrillamailblock.com","haltospam.com","hidemail.de","bootybay.de","ieh-mail.de","plexolan.de","incognitomail.net","incognitomail.org ",
"instant-mail.de","sinnlos-mail.de","wegwerf-email-adressen.de","wegwerf-emails.de","ip6.li","irish2me.com","jetable.com","jetable.net",
"jetable.org","junk.to","kasmail.com","keepmymail.com","lhsdv.com","lifebyfood.com","lr78.com","luckymail.org","card.zp.ua","express.net.ua",
"infocom.zp.ua","mail.zp.ua","mycard.net.ua","delikkt.de","m21.cc","mail21.cc","mysamp.de","mail4trash.com","mailcatch.com","mailbiz.biz",
"mailde.de","mailde.info","mailms.com","mailorg.org","mailtv.net","mailtv.tv","ministry-of-silly-walks.de","maileater.com","maileimer.de",
"mailexpire.com","mailforspam.com","binkmail.com","bobmail.info","chogmail.com","devnullmail.com","mailin8r.com","mailinater.com","mailinator.com",
"mailinator.net","mailinator2.com","safetymail.info","slopsbox.com","sogetthis.com","spamherelots.com","SpamHerePlease.com","suremail.info",
"thisisnotmyrealemail.com","tradermail.info","veryrealemail.com","zippymail.info","mailita.tk","mailme24.com","mailnull.com","mailshell.com ","mailtome.de","mailtrash.net","makemetheking.com","mbx.cc","meltmail.com","messagebeamer.de","mintemail.com","mytempmail.com","mailmetrash.com",
"mt2009.com","mytrashmail.com","thankyou2010.com","trash2009.com","trashymail.com ","nervmich.net","nervtmich.net","wegwerfadresse.de","netzidiot.de",
"no-spam.ws","nospam4.us","nospamfor.us","nospammail.net","nowmymail.com","obobbo.com","ohaaa.de","blackmarket.to","omail.pro","thc.st","vpn.st",
"oneoffemail.com","oneoffmail.com","onlatedotcom.info","otherinbox.com","pookmail.com","privacy.net","privatdemail.net","fansworldwide.de","privy-mail.de","privymail.de",
"trashmailer.com","put2.net","quickinbox.com","realtyalerts.ca","mailseal.de","receiveee.com","safetypost.de","schafmail.de","schmeissweg.tk",
"schrott-email.de","secretemail.de","lolfreak.net","secure-mail.biz","secure-mail.cc","z1p.biz","SendSpamHere.com","senseless-entertainment.com",
"is.af","server.ms","us.af","shieldemail.com","sneakemail.com","sofort-mail.de","sofortmail.de","soodonims.com","spam.la","spam.su","spamail.de",
"spamavert.com","spambob.com","0815.ru","3d-painting.com","agedmail.com","ano-mail.net","bio-muesli.info","bio-muesli.net","brennendesreich.de","buffemail.com",
"bund.us","cust.in","dbunker.com","discardmail.com","discardmail.de","duskmail.com","emaillime.com","ero-tube.org","film-blog.biz","flyspam.com","fr33mail.info",
"geschent.biz","great-host.in","hochsitze.com","hulapla.de","imails.info","kulturbetrieb.info","m4ilweb.info","misterpinball.de","mypartyclip.de","nomail2me.com","nospamthanks.info",
"politikerclub.de","recode.me","s0ny.net","sandelf.de","spambog.com","spambog.de","spambog.ru","superstachel.de","teewars.org","thanksnospam.info",
"watch-harry-potter.com","watchfull.net","webm4il.info","spambox.us","spamcero.com","spamcorptastic.com","spamex.com ","spamfree.eu","spamfree24.com",
"spamfree24.de","spamfree24.info","spamfree24.org","antichef.net","spamgourmet.com","spamhole.com","spaminator.de","spaml.de","spammotel.com",
"spamobox.com","spamspot.com","SpamThisPlease.com","spamtrail.com","cheatmail.de","fivemail.de","giantmail.de","nevermail.de","spoofmail.de",
"stuffmail.de","trialmail.de","squizzy.de","stinkefinger.net","super-auswahl.de","teleworm.com","temp-mail.org","llogin.ru","odnorazovoe.ru",
"temp-mail.ru","tempail.com","tempemail.co.za","tempemail.net","beefmilk.com","dingbone.com","fudgerub.com","lookugly.com",
"smellfear.com","tempinbox.com","tempmailer.com","tempmailer.de","tempomail.fr","temporarily.de","temporaryemail.net","temporaryinbox.com",
"temporarymailaddress.com","thismail.net","topranklist.de","trash-mail.com","trash-mail.de","trashdevil.com","trashdevil.de","trashemail.de",
"trashmail.com","kurzepost.de","objectmail.com","proxymail.eu","punkass.com","rcpt.at","trash-mail.at","trashmail.at","trashmail.me",
"trashmail.net","wegwerfmail.de","wegwerfmail.net","wegwerfmail.org","trashmail.ws","twinmail.de","163.com","2prong.com","8127ep.com","antireg.ru",
"asdasd.ru","bugmenever.com","despam.it","disposeamail.com","dontreg.com","einmalmail.de","fakedemail.com ","hmamail.com","humaility.com","ignoremail.com",
"lawlita.com","losemymail.com","mailscrap.com","nabuma.com","nobugmail.com","nobuma.com",
"spamday.com","spamkill.info","spaml.com","tilien.com","trashinbox.com","yxzx.net","wasteland.rfc822.org","weg-werf-email.de","wegwerf-email.net","wegwerfemail.com",
"wegwerfemail.de","wh4f.org","willhackforfood.biz","whyspam.me","cool.fr.nf","courriel.fr.nf","jetable.fr.nf","mega.zik.dj","moncourrier.fr.nf",
"monemail.fr.nf","monmail.fr.nf","nomail.xl.cx","nospam.ze.tc","speed.1s.fr","yopmail.com","yopmail.fr","yopmail.net","youmailr.com","zehnminuten.de","zehnminutenmail.de");

/**
DO NOT CHANGE ANYTHING BELOW.
**/
if($ISSUEREPO==''||$ISSUEUSER== ''||$GITHUBUSER==''||$GITHUBPW==''||$PUBLICKEY == ''||$PRIVATEKEY == ''){
	$BUGREPORT = false; 
}
if (!in_array('curl', get_loaded_extensions())) {
	$BUGREPORT = false;
}
?>
