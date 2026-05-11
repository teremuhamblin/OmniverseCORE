#!/bin/bash
echo "[OMNIVERSE] Infos matérielles Android"

adb shell getprop ro.product.model
adb shell getprop ro.product.cpu.abi
adb shell cat /proc/meminfo | head -n 1
