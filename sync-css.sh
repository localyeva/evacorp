#!/bin/bash
clear
lessc public_html/html/css/style.less > public_html/html/css/style.css
echo "-------------------------------"
echo "copy style.css -> theme eva2015"
echo "-------------------------------"
cp public_html/html/css/style.css public_html/wp/wp-content/themes/eva2015/css/style.css

