# mini-jeux-php
it's a little game when you have to choose a name, category and weapon for fight( it's a two player game).

# utilisation 
    ## For use this game you have to create a VM
        - Here you can find my vagrant file:

        # -*- mode: ruby -*-
        # vi: set ft=ruby :
        Vagrant.configure("2") do |config|
        config.vm.box = "ubuntu/xenial64"
        config.vm.network "private_network", ip: "192.168.33.10"
        config.vm.synced_folder "./data", "/var/www/html"
        config.vm.provider "virtualbox" do |v|
            v.name = "phpP41"
        end
        end

        - After that you have to go on you're VMand do:
            - an update
            - install mysql-server apache2 php7.0
            - service apache2 restart
            - install libapach2-mod-php7.0 
            - you also can install php-xdebug for the php errors but you have to go on : /etc/php/7.0/apache2/php.ini for activate display_errors
            - service apache2 restart
        you're VM is up and ready

The project is in french sorry for that