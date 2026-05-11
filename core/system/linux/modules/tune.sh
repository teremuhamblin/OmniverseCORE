#!/bin/bash
echo "[MODULE] Optimisation réseau"
sudo sysctl -w net.ipv4.tcp_fastopen=3
