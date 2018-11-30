<?php


 
// Configuration: Define your Variables here
 

 

echo "<!DOCTYPE html>\n";
echo "\n";
echo "<html lang=\"en\">\n";
echo " <head>\n";

$fb_app_id = "515384261992651";
$fb_vanity_url ="Manasati30";
$fb_tab_content_url ="https://manasati30.herokuapp.com/Index2.php";
 
// These variables will define how your link to your page tab looks, when you share it.
 
$fb_og_title ="Manasati30 website";
$fb_og_image ="https://scontent-cdt1-1.xx.fbcdn.net/v/t39.2081-6/c0.0.76.76a/p75x75/47268263_921885974675809_3514383369641132032_n.png?_nc_cat=100&_nc_ht=scontent-cdt1-1.xx&oh=433a0bffcc500c51e905eaf157d3e463&oe=5C9F7AA6";
$fb_og_type = "website";
$fb_og_description ="Manasati30 website";

echo "<script type=\"text/javascript\">\n";
echo " \n";
echo "if (navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry)/)) {\n";
echo "  document.addEventListener(\"deviceready\", onDeviceReady, false);\n";
echo "} else {\n";
echo "  if (top == self) { top.location = \"https://www.facebook.com/<?php echo $fb_vanity_url ?>?v=app_<?php echo $fb_app_id ?>\"; }\n";
echo "  ; //this is the browser\n";
echo " \n";
echo "}\n";
echo " \n";
echo "</script>\n";

echo "     <title>Home</title>\n";
echo "	 <meta charset=\"utf-8\">\n";
echo "	 <!-- applying css externally\n";
echo "	 <link href=\"css/style2.css\" rel=\"stylesheet\" type=\"text/css\"> -->\n";
echo "	\n";
echo "		 <style>\n";
echo "	body {\n";
echo "    margin: 0;\n";
echo "}\n";
echo ".parent {\n";
echo "    display: flex;\n";
echo "    flex-direction: column;\n";
echo "    min-height: 100vh;\n";
echo "	margin:0px;\n";
echo "	padding:0px;\n";
echo "}\n";
echo ".parent .banner {\n";
echo "    background: #f00;\n";
echo "    width: 100%;\n";
echo "    height: 30px;\n";
echo "	margin:0px;\n";
echo "	padding:0px;\n";
echo "}\n";
echo ".parent iframe {\n";
echo "    background: #000;\n";
echo "    border: none;\n";
echo "	margin:0px;\n";
echo "	padding:0px;\n";
echo "    flex-grow: 1;\n";
echo "}\n";
echo "\n";
echo "	 </style> \n";
echo "	\n";
echo "   </head>\n";
echo "\n";
echo "<body>\n";
echo "\n";
echo "<div class=\"parent\">\n";
echo "    \n";
echo " <iframe src=\"https://manasati30.com\" width=\"100%\" height=\"100%\">\n";
echo "</iframe>\n";
echo "</div>\n";
echo "\n";
echo "\n";
echo "</body>\n";
echo "\n";
echo "</html>";

?>
