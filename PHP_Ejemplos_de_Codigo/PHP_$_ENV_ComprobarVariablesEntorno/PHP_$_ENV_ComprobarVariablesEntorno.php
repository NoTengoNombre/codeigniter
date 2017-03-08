<!--
    @Created on : 24-nov-2016, 12:16:29
    @Author     : RVS - N.F.N.D - Home
    @Pag        : http://www.codingprogrammer.com/php/php-env
    @version    : http://stackoverflow.com/questions/3780866/why-is-my-env-empty
    @TODO       :
-->

<?php
/*
1. $_ENV is only populated if php.ini allows it, which it doesn't seem to do by default, at least not in the default WAMP server installation.

; This directive determines which super global arrays are registered when PHP
; starts up. If the register_globals directive is enabled, it also determines
; what order variables are populated into the global space. G,P,C,E & S are
; abbreviations for the following respective super globals: GET, POST, COOKIE,
; ENV and SERVER. There is a performance penalty paid for the registration of
; these arrays and because ENV is not as commonly used as the others, ENV is
; is not recommended on productions servers. You can still get access to
; the environment variables through getenv() should you need to.
; Default Value: "EGPCS"
; Development Value: "GPCS"
; Production Value: "GPCS";
; http://php.net/variables-order
variables_order = "GPCS"
When I set the variables_order back to EGPCS, $_ENV is no longer empty.

2. When you use SetEnv in your .htaccess, it ends up in $_SERVER, not in $_ENV, which I gotta say is a tad confusing when it's named SetEnv...

# .htaccess
SetEnv ENV dev
SetEnv BASE /ssl/

# php
var_dump($_SERVER['ENV'], $_SERVER['BASE']);

// string 'dev' (length=3)
// string '/ssl/' (length=5)
3. The getenv function worked because it apparently searches both $_ENV and $_SERVER. Additionally it seems to do so insensitive to case, which might be useful.

var_dump(getenv('os'), getenv('env'));

// string 'Windows_NT' (length=10)
// string 'dev' (length=3)
var_dump($_SERVER['ENV'], $_SERVER['BASE']);
?>
 *
 */
