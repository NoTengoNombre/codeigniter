<!--
    @Created on : 25-oct-2016, 17:13:38
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
if (true AND true) {
  echo "AND true";
}
print "<hr>";
if (true & true) {
  echo "& true";
}
print "<hr>";
//    1    x   1 
if (true && true) {
  echo "&& true";
}
print "<hr>";
//    1    x   0 
if (true && false) {
  echo "true";
} else {
  echo "true && false : false";
}
print "<hr>";
//    0    x   0 
if (false && false) {
  echo "false && false : true";
} else {
  echo "true && false : false";
}

print "<hr>";
print "Restrictivo && : <br>";
if ((false && true) && (true && false)) {
  echo "Entrada por if : ((false || false) && (false || false)) ";
} else {
  echo "Entrada por else";
}

print "<hr>";
print "Restrictivo || : <br>";
if ((false || true) || (false || false)) {
  echo "Entrada por if";
} else {
  echo "Entrada por else";
}

print "<hr>";
print "Restrictivo && : <br>";
if ((false && true) && (false && false)) {
  echo "Entrada por if";
} else {
  echo "Entrada por else";
}







