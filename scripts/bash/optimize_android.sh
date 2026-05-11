#!/bin/bash
source "$(dirname "$0")/utils.sh"

log_info "Optimisation Android via ADB..."

adb devices
adb shell pm trim-caches 100G
adb shell settings put global window_animation_scale 0

log_success "Android optimisé."
