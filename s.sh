mkdir tmp45
cd tmp45

wget https://www.apachefriends.org/xampp-files/7.2.33/xampp-linux-x64-7.2.33-1-installer.run
wget https://bin.equinox.io/c/4VmDzA7iaHb/ngrok-stable-linux-amd64.zip

unzip ngrok-stable-linux-amd64.zip

chmod +x xampp-linux-x64-7.2.33-1-installer.run
sudo ./xampp-linux-x64-7.2.33-1-installer.run

git clone https://github.com/asswadsarker/php-proxy /opt/lampp/htdocs/p

./ngrok http -region in 80
