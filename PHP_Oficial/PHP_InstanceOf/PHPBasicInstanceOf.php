<!--
    @Created on : 29-oct-2016, 21:27:06
    @Author     : RVS - N.F.N.D
    @Pag        : http://php.net/manual/es/internals2.opcodes.instanceof.php
    @version    : 
    @TODO       :
-->

<?php

class A {
  
}

class MyClass {
  
}

class NoMyClass {
  
}

$myclass = new MyClass();
$myclass2 = new MyClass();
$myclass3 = new MyClass();
$myclass4 = new NoMyClass();
$myclass5 = new NoMyClass();

$ver1 = var_dump($myclass instanceof MyClass);
echo "<br> 1º - Es instancia de MyClass : " . $myclass instanceof MyClass;
echo "<br> 1º - tipo de MyClass : " . $ver1;
echo "<h6><hr></h6>";

$ver2 = var_dump($myclass2 instanceof NoMyClass);
echo "<br> 2º - Es instancia de MyClass : " . $myclass2 instanceof MyClass;
echo "<br> 2º - tipo de MyClass : " . $ver2;
echo "<h6><hr></h6>";

$ver3 = var_dump($myclass3 instanceof MyClass);
echo "<br> 3º - tipo de MyClass : " . $ver3;
echo "<br> 3º - Es instancia de MyClass : " . $myclass3 instanceof MyClass;
echo "<h6><hr></h6>";

$ver4 = var_dump($myclass4 instanceof NoMyClass);
echo "<br> 4º - tipo de NoMyClass : " . $ver4;
echo "<br> 4º - Es instancia de NoMyClass : " . $myclass4 instanceof NoMyClass;

echo "<h6><hr></h6>";

$ver5 = var_dump($myclass5 instanceof MyClass);
echo "<br> 5º - tipo de NoMyClass : " . $ver5;
echo "<br> 5º - Es instancia de NoMyClass : " . $myclass5 instanceof MyClass;

echo "<h6><hr></h6>";

$obj = new A();

if ($obj instanceof A) {
  echo "<br> Es 'obj' instancia de A : ";
}
if ($myclass instanceof MyClass) {
  echo "<br> Es 'ver1' instancia de MyClass: ";
}
if ($ver2 instanceof NoMyClass) {
  echo "<br> Es 'ver2' instancia de NoMyClass : ";
}
?>
