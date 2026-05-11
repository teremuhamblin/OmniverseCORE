function Log-Info { Write-Host "[INFO] $args" -ForegroundColor Cyan }
function Log-Success { Write-Host "[SUCCESS] $args" -ForegroundColor Green }
function Log-Warn { Write-Host "[WARNING] $args" -ForegroundColor Yellow }
function Log-Error { Write-Host "[ERROR] $args" -ForegroundColor Red }
