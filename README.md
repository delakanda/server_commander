SERVER COMMANDER
=========================================

A Simple PHP program to execute a command on multiple server instances. 

Most useful in situations where multiple server backends are managed by a proxy server and a common command is to be run to perform a pull from git on all the backend servers.

The program works by calling the bash.php file from the command line:

./bash.php --command="[command]"

where [command] is the command to run.