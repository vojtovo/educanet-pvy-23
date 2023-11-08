# Instalace PHP pod Windows (bez WAMPP)

1) Stáhněte PHP 8.2.12: https://windows.php.net/downloads/releases/php-8.2.12-Win32-vs16-x64.zip
2) Rozbalte do C:\php
3) Přidejte C:\php do proměnné prostředí PATH ručně nebo příkazem v PS:
```
$env:path >> env_backup.out 
setx PATH "$env:path;C:\php" -m
```
