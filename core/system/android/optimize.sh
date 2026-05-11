#!/bin/bash
echo "[OMNIVERSE] Optimisation Android..."

adb shell pm trim-caches 100G
adb shell settings put global window_animation_scale 0

echo "[SUCCESS] Android optimisé."
