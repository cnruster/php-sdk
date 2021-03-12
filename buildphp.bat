phpsdk-vc15-x64
cd phpdev\vc15\x64\php-7.2.34-src
buildconf
configure --help
pause
configure --disable-all --enable-cli
nmake