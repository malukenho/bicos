@ECHO OFF
SET BIN_TARGET=%~dp0\"../phpunit/phpunit/composer/bin"\phpunit
C:\xampp\php\php.exe "%BIN_TARGET%" %*
