Write-Host "[OMNIVERSE] Optimisation Windows..."

Stop-Service "DiagTrack" -Force
Set-Service "DiagTrack" -StartupType Disabled

Write-Host "[SUCCESS] Optimisation Windows terminée."
