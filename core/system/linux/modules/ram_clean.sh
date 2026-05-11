#!/bin/bash
echo "[MODULE] Nettoyage RAM"
sudo sync; echo 3 | sudo tee /proc/sys/vm/drop_caches
