. "$PSScriptRoot/utils.ps1"

Log-Info "Optimisation Windows..."

# Désactivation services inutiles
Stop-Service "DiagTrack" -Force
Set-Service "DiagTrack" -StartupType Disabled

# Nettoyage
cleanmgr /sagerun:1

Log-Success "Optimisation Windows terminée."
