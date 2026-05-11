#!/bin/bash
echo "CPU : $(sysctl -n machdep.cpu.brand_string)"
echo "RAM : $(sysctl -n hw.memsize)"
echo "GPU : $(system_profiler SPDisplaysDataType | grep Chip)"
