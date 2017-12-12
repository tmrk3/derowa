# DEROWA
DEROWA is Rapid Output Web Application Framework. One of class name in this framework is DEPage.

## About DEROWA
DEROWA is composed with DEPage, DERouter and some small miscellaneous supporting modules.
DEPage recieves user requests, processes and makes page. 
DERouter takes user request to DEPage.
The function to make page of DEPage doesn't depend on any other modules. So it can choose the template modules you want to use. Current version of DEPage use include command of PHP. We will support smarty template engine. 

## The features will be added
### DEContext
Now we plan to add DEContext to this framework. The funcion of DEContext is to keep status of page currently you watch. The page now you watch, you should pass through some pages and you finally reached. Those paths and what you choose will be recorded into DEContext. Current page will refer those recorded if you action on this page. The statuses is recorded on server side, so it might be expected to reduce transfer data.