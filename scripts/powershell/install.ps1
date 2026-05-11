. "$PSScriptRoot/utils.ps1"

Log-Info "Installation des dépendances OMNIVERSE-CORE..."

winget install Python.Python.3
winget install Git.Git
winget install Microsoft.PowerShell

Log-Success "Installation terminée."
