Write-Host "CPU :" (Get-WmiObject Win32_Processor).Name
Write-Host "RAM :" (Get-WmiObject Win32_ComputerSystem).TotalPhysicalMemory
Write-Host "GPU :" (Get-WmiObject Win32_VideoController).Name
