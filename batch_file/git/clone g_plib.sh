#!/usr/bin/sh

BASEDIR=$(dirname "$0")
# 切換目錄
# cd "$BASEDIR"/libraries/

# 更新
# -- g_plib
mkdir -p "$BASEDIR"/../../libraries
cd "$BASEDIR"/../../libraries/
git clone "https://github.com/hahaha0417/php_g_plib.git" "g_plib"


# pwd
# read