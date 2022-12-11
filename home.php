<?php

require __DIR__ . "/vendor/autoload.php";

echo "<div class='box__title'>
            <div>Debugando orientacao a objeto com php</div>
            <i class='ri-apps-line'></i>
     </div>
     <div class='box__shadow'></div>";

echo "<hr><pre>SubTitle</pre>";

echo "<div class='msg__success'><i class='ri-wechat-2-line'></i>Text...</div>";
echo "<div class='msg__warning'><i class='ri-wechat-2-line'></i>Text...</div>";
echo "<div class='msg__alert'><i class='ri-wechat-2-line'></i>Text...</div>";

echo "<pre class='msg__dump'>". print_r(["Debugando objetos"], true) ."</pre>";