### Apache Log files
When the apache server is running it will log all requests and all errors it encounters.
The location of the log files is **/var/log/apache2**.

Run this command to look at the files in the /var/log/apache2 folder (there's an access log and an error log):
```md
ls -al /var/log/apache2
```
The **access.log** file is a listing of every HTTP request that is sent to your web server.
And the **error.log** file will display any errors that the server encounters.


Here's a fun litle command that comes in handy when you are trouble shooting...

Use **tail -f** to view the a live version of the access log:
```md
tail -f /var/log/apache2/access.log
```
You'll see a live version the access.log file. The
tail command will display any live updates being made to the file.
To see this in action, go to the browser and make a request for localhost.
If you keep an eye on the terminal window while you do this,
you should see the request being added to the access.log file. 

To stop the tail command from using your terminal, press **Ctrl + c**.

### Dealing with PHP errors
The default installation of PHP will not display error messages in the browser 
(we'll change that later).
This means that if you have an error in your PHP code, 
when you view the page in the browser you'll get a blank screen (no error message).

This makes it very hard to debug your code!

But you can use the tail command to view the error log.

First, let's put an error in our code.
Use nano to update the index.php file that you created earlier
We'll put an error in the code, so that we can see how errors are handled on or server.
Update the index.php file to like so
(it is attempting to echo a variable ($x) that has not been declared, this will cause the error):
```md
<?php
echo($x);
?>
```
Make sure to save your changes.

Then run this command in the terminal:
(it will 'watch' the error log file and display changes to it in real time)
```md
tail -f /var/log/apache2/error.log
```
Now open your homepage in the browser, you won't see an error message in the browser
(instead it should be a blank screen, or maybe a screen that indicates an error has ocurred.
But you should see a new error in the terminal (the error was just written to the error.log file)

In the terminal window, press **Ctrl+c** to stop watching the error log file.

### Changing the PHP configuration file to display errors

The final step in configuring PHP is to make it display errors in the browser so that
we can easily see them in the browser when they occur (looking in error.log can be tedious).

This step is a little hairy. You may skip it and move on to the instructions on Installing MySQL,
but if you do, please ask me about doing this step together in class. It will
 save you a lot of time if you can see errors in the browser, rather than looking through the log file. 

Usually when you install Apache and PHP, error messages are hidden by default because
live web servers should never display them.

But as developers, we need to be able to see error messages.
You can do this by making an update to a php configuration file 
(Linux is famous for it's configuration files).

The main configuration file in PHP is named **php.ini**,
 and it's located in the **/etc/php/8.1** folder.

We are about to update the php.ini file so that error messages are displayed in the browser
(they will also continue to be logged in the error.log file).


NOTE: When you are about to change a configuration file in Linux, it's a
good idea to make a copy beforehand, just in case you make a mistake in editing the file.

First cd into the **/etc/php/8.1/apache2** folder:
```md
cd /etc/php/8.1/apache2
```

Now run this command to make a copy of the php.ini file:
```md
sudo cp php.ini php.ini.backup  
```
This creates a copy of php.ini named php.ini.backup.  

Now that we have a backup, run the nano command an open the php.ini file in the terminal:
```md
sudo nano php.ini
```

The setting that we need to change is called **display_errors**.
The php.ini file is rather large, so we can search for this setting
by pressing **ctrl + w** and then typing 'display_errors' (then press the enter key).

Here's a twist - the first instance of 'display_errors' is commented out
(comments in the php.ini file start with a semi colon, which is something that I find strange).
We need to find the next occurrence, so press **ctrl + w** one more time and 
then press enter (you DON'T need to re-type 'display_errors').
 
Once you find this setting, change it from **Off** to **On**
Press **ctrl + x** to exit nano, and then type **y** to save your changes (then press the enter key).

Now that PHP has been re-configured, we need to restart the Apache server for the changes to take place:
```md
sudo systemctl restart apache2
```
Any time you change a configuration file for a server, you'll have to restart the server for the change
to take affect.

To see if the configuration change worked, reload **localhost**  in the browser and
instead of a blank screen, you should see the error message on display. It will say something
like: **Warning: Undefined variable $x in /var/www/html/index.php on line 2**.
