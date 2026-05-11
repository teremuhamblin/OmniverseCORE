#!/bin/bash

echo "[OMNIVERSE] Informations matérielles Linux"

echo "CPU : $(lscpu | grep 'Model name')"
echo "RAM : $(free -h | grep Mem)"
echo "GPU : $(lspci | grep -i vga)"
