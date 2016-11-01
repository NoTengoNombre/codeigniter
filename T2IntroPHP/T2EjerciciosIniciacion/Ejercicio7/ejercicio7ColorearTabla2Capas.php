 

<!--<!DOCTYPE html>
<html>
  <head>
    <title>ejercicio 7 Colorear Tablas</title>
    <link rel=stylesheet href="micss.css" type="text/css">
  </head>
  <body>/
for ($n1 = 0; $n1 < 15; $n1++) {
 echo "<div style='width: 50px; height:50px; background: #cec85f;></div>";
 echo "<br>";
 for ($n2 = 0; $n2 < 15; $n2++) {
  echo "<div style='width: 50px; height:50px; background: #428bca;></div>";
  echo "<br>";
 }
}
?>
  </body>
</html>
-->

​<!DOCTYPE html>
<html lang="en">
  <head>
    <style>

      .flex
      {
          /* basic styling */
          width: 350px;
          height: 200px;
          border: 1px solid #555;
          font: 14px Arial;

          /* flexbox setup */
          display: -webkit-flex;
          -webkit-flex-direction: row;

          display: flex;
          flex-direction: row;
      }

      .flex > div
      {
          -webkit-flex: 1 1 auto;
          flex: 1 1 auto;

          width: 30px; /* To make the transition work nicely.  (Transitions to/from
                          "width:auto" are buggy in Gecko and Webkit, at least.
                          See http://bugzil.la/731886 for more info.) */

          -webkit-transition: width 0.7s ease-out;
          transition: width 0.7s ease-out;
      }

      /* colors */
      .flex > div:nth-child(1){ background : #009246; }
      .flex > div:nth-child(2){ background : #F1F2F1; }
      .flex > div:nth-child(3){ background : #CE2B37; }

      .flex > div:hover
      {
          width: 200px;
      }

    </style>

  </head>
  <body>
    <p>Flexbox nuovo</p>
    <div class="flex">
      <div>uno</div>
      <div>due</div>
      <div>tre</div>
    </div>
  </body>
</html>