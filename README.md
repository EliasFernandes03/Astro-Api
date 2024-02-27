# Astrotech event manager

This is an API for a to do list that i call event manager

## Technologies
To use this API you will need :

`PHP` , `MariaDb`, `Docker` , `Postman`

## Usage

- First clone the project to your machine:
`git clone https://github.com/EliasFernandes03/Astro-Api.git`

- Open the mariaDB terminal and follow the db.md steps

- You need to fill the .env with the informations of your database

- Open the terminal and  enter in the root folder of the application.

- Install dependencies :
  `composer install`

- Run the application: 
`php -S localhost:8000 -t public`

## Docker Usage 

- After follow db.md steps, cloning the project, fill the .env and install dependencies. In the .env step, to run docker you need to change `DB_HOST=host.docker.internal`.Go to your terminal and and run :
`docker-compose up --build`

- After this step it will run the application on port 8000.

## Routes

- baseUrl = `http://localhost:8000/api/`

- Open the postman, you will test the routes there.

### Get Events

- You will create a new GET request and the route will be : 

`baseUrl/events`

### Create Events

- You will create a new POST request and the route will be : 

`baseUrl/events`

- And must Pass the body : 
```
   {
        "name": "test",
        "description": "test"
    }
```

### Update Events

- You will create a new Put request and the route will be : 

`baseUrl/events/id`

- And must Pass the body : 
```
   {
        "name": "test",
        "description": "test"
    }
```

### Delete Events

- You will create a new DELETE request and the route will be : 

`baseUrl/events/id`


## FrontEnd

-After you run the backend, go to the frontend client and run too: 

`https://github.com/EliasFernandes03/Astro-Client.git`
