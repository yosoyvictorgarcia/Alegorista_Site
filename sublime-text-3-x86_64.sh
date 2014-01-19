# Sublime Text 3 for Fedora Linux (64 Bit)
# Adapted from https://gist.github.com/sayak-sarkar/5810101
# Sublime Text 3 - Build 3059

#!/bin/sh
SHORTCUT="#!/usr/bin/env xdg-open
[Desktop Entry]
Comment=The Best Code Editor
Terminal=false
Name=Sublime Text 3
Exec=/usr/local/share/applications/sublime-text-3/sublime_text
Type=Application
Icon=/usr/local/share/applications/sublime-text-3/Icon/128x128/sublime-text.png"

curl -L "http://c758482.r82.cf2.rackcdn.com/sublime_text_3_build_3059_x64.tar.bz2" -o "/usr/src/Sublime Text 3.tar.bz2"
cd /usr/src
tar -xvjf "Sublime Text 3.tar.bz2"
cd "sublime_text_3"
mkdir -pv "/usr/local/share/applications/sublime-text-3"
mv -fv * "/usr/local/share/applications/sublime-text-3/"
yum -y install wget && wget "https://spideroak.com/share/PBSW433EMVZXS43UMVWXG/78656e6f6465/var/CDN/xenodecdn/sublime3-fedora/subl" -O /usr/bin/subl
chmod +x "/usr/bin/subl"
echo "${SHORTCUT}" > "/usr/share/applications/sublime-text-3.desktop"

echo "Finish!"
subl
