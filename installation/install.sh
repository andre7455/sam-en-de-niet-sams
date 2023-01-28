sudo apt-get update; sudo apt-get upgrade;
sudo apt-get install php;
sudo apt-get install apache2;
sudo systemctl enable apache2;
sudo rm -r /var/www/html/*;
git clone https://github.com/andre7455/sam-en-de-niet-sams.git;
sudo -r rm sam-en-de-niet-sams;
sudo mv sam-en-de-niet-sams/* /var/www/html/;
sudo systemctl restart apache2;
sudo systemctl status apache2; 
exit;

