@ECHO OFF
:BEGIN
CLS

set DIR=e:
cd %DIR%\WEBDEV\Homestead

CHOICE /N /C:12 /M "Vagrant (1 - UP, 2 - HALT)"%1
IF ERRORLEVEL ==2 GOTO HALT
IF ERRORLEVEL ==1 GOTO UP
GOTO END
:HALT
ECHO Vagrant is halting...
vagrant halt
GOTO END
:UP
ECHO Launching VAGRANT...
vagrant up
:END
pause

