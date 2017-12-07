# DEROWA
DEROWA is Rapid Output Web Application Framework. One of class name in this framework is DEPage.

## About DEROWA
DEROWA is composed with DEPage, DERouter and some small miscellaneous supporting modules.
DEPage recieves user requests, processes and makes page. 
DERouter takes user request to DEPage.
The function to make page of DEPage doesn't depend on any other modules. So it can choose the template modules you want to use. Current version of DEPage use include command of PHP. We will support smarty template engine. 