# Advanced Backend Test

`This is just a high level flow on what i am thinking on the implementation.`

Here we have 2 controller methods , One for getting all the shirt order and another for getting more details about the order from an external source.

For `getAll` method we used a repository for serving from cache if not exist it will get from the db. 

For `getDetails` method, it used for getting more information about the order . For that it will get the basic info from the db/cache . On getting the data we derive the name of the external service it need to call. This architecture helps to include as much as external interfaces by adding a different repository.