# php-website

## How to update - 
1. This is the alias that i use to login to server using ssh - 
    `alias website='ssh -i /Users/vishalgupta/Documents/Office/careware_scheduler.pem ubuntu@34.225.172.219'`
    You should already have it but i will send you the pem file.     
    `/Users/vishalgupta/Documents/Office/careware_scheduler.pem` - this is the location of the pem file in my system. 
2. just ssh into the instance.
3. Go to project directory -  
    `cd /var/www/php-website/`
4. Run this command to pull the changes - 
    `sudo git pull origin master`
5. It will prompt for github id and password, you can use your own github userid and password. 
6. Now restart the server - 
    `sudo systemctl restart nginx.service`
7. Done!
