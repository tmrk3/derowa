#!/bin/sh
cd ~/Applications/c9sdk
node ./server.js -p 8082 -l 127.0.0.1 -w ~/Repos/derowa &
#forever start server.js -p 8082 -l 127.0.0.1 -w ~/Repos/derowa
open http://127.0.0.1:8082
