# Disabling Directory Browsing on your Apache Server

The configuration file for the 'default' site (in /var/www/html) is 
**/etc/apache2/sites-available/000-default.conf**

Note that your Apache web server can actually host more than one website,
and you may have a different configuration file for each one.
For more information, look up Apache **virtual hosts**.

In this activity, we'll make changes to the **000-default.conf** file so that
your Apache server will no longer allow directory browsing, which is a major security
issue for a live server.

First, open a terminal and run this command to cd into the folder that contains the **000-default.conf** file:
```
cd /etc/apache2/sites-available
```

Now make a backup of the default config file:
```
sudo cp 000-default.conf 000-default.conf.backup
```

Now use the nano editor to edit the default config file:
```
sudo nano 000-default.conf
```
Scroll down the the **Directory** element and remove the word **Indexes** from
inside of it. Also note that the Directory element specifies the doc root directory
for the default site on the Apache server.

Now save your changes by pressing **ctrl + X**.

Now restart the Apache server: 
```
sudo systemctl restart apache2 
```
Now open localhost in your browser and notice that if you make a request for a folder in the doc root directory, you will not be allowed to see it's contents.

We actually would like to allow this feature, since this is dev server (not a live server). So go ahead and change the setting back by
adding **Indexes** again. Then restart your Apache server and verify that you can once again 
browse through the files in the doc root directory with your browser. 

For more information:
- [Apache Options](https://cwiki.apache.org/confluence/display/httpd/DirectoryListings)
- [Options All](https://htaccessbook.com/what-is-options-all/)
- [20 ways to secure your Apache server](https://www.petefreitag.com/item/505.cfm)