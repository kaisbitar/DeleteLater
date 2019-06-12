# HelloFresh Senior Backend Developer Test

# Installation

After cloning the repository, navigate in your terminal to the root directory of the project and simply run the following commands:

```sh
    docker-compose build
    docker-compose up -d
    bash initiate.sh
```

# Libraries breakdown

* `auth0/auth0-php` An infrastructure to handle authentication via JWT tokens
* `nikic/fast-route` A dispatcher lightweight library, which simply takes care of directing **valid** requests to handlers
* `rdlowrey/auryn` A dependency injector that does **NOT** use Service Locator injection
* `patricklouys/http` Simple wrapper around the superglobals, not used to send requests but rather to receive them
* `monolog/monolog` Logging library (Did not use this library for lack of time)
* `j4mie/idiorm` A very lightweight, simple, and elegant ORM. It can also be easily replaced with a full-fledged ORM if needed

## Dev environment

* `phpunit/phpunit` !!
* `filp/whoops` A well-known debugger (Laravel)
* `guzzlehttp/guzzle` A library for sending HTTP requests, used only in the IntegrationTest

# API Documenation

* The API **should** only send/accept `application/json` type requests/responses

## **Get Recipes**

<_returns all recipes_>

* **URL** <_/recipes_>

* **Method:** `GET`

## **Get Recipe**

<_returns a recipe by id_>

* **URL** <_/recipes/{id}_>

* **Method:** `GET`

## **Search Recipe**

<_searches the recipes by similarity to the name property_>

* **URL** <_/recipes/search_>

- **Method:** `GET`

  | Parameter  | Type      | Required | Description                                       |
  | ---------- | --------- | -------- | ------------------------------------------------- |
  | query      | `Text`    | true     | Search query string, matched against recipe names |
  | vegetarian | `Integer` | false    | Either true or false, don't specify to get both   |
  | prep_time  | `Integer` | false    | A filter on time of preparation (0 - 300)         |
  | difficulty | `Integer` | false    | A filter on difficulty (0 - 3)                    |

## **Create Recipe**

<_creates a recipe_>

* **URL** <_/recipe_>

- **Method:** `POST`

- **Protected** `TRUE`

  | Parameter  | Type      | Required | Description                               |
  | ---------- | --------- | -------- | ----------------------------------------- |
  | name       | `Text`    | true     | The name of the recipe                    |
  | prep_time  | `Integer` | true     | A filter on time of preparation (0 - 300) |
  | difficulty | `Integer` | true     | A filter on difficulty (0 - 3)            |
  | vegetarian | `Boolean` | false    | Either true or false, defaults to false   |

## **Update Recipe**

<_updates a recipe_>

* **URL** <_/recipe/{id}_>

- **Method:** `PUT` | `PATCH`

- **Protected** `TRUE`

| Parameter  | Type      | Required | Description                               |
| ---------- | --------- | -------- | ----------------------------------------- |
| name       | `Text`    | false    | The name of the recipe                    |
| vegetarian | `Boolean` | false    | Either true or false, defaults to false   |
| prep_time  | `Integer` | false    | A filter on time of preparation (0 - 300) |
| difficulty | `Integer` | false    | A filter on difficulty (0 - 3)            |

## **Delete Recipe**

<_deletes a recipe_>

* **URL** <_/recipe/{id}_>

- **Method:** `DELETE`

- **Protected** `TRUE`

## **Rate Recipe**

<_rates a recipe_>

* **URL** <_/recipe/{id}/rating_>

* **Required** `id=[integer]`

* **Method:** `POST`

* **Protected** `TRUE`

| Parameter  | Type      | Required | Description            |
| ---------- | --------- | -------- | ---------------------- |
| rate_value | `Integer` | true     | The rate value (1 - 5) |

## All data returned is of type json

# Docker

I only had to add one insertion in docker-compose inside the postgres container (lines 48,49)

```
volumes:
    - ./tmp/db:/var/lib/postgresql/data
```

which will simply map the postgres data into a temp folder.

I did this so that the data is not lost when the container goes down

# Tests

To run tests run the following command

```sh
docker-compose exec php ./vendor/bin/phpunit  src/Tests/
```

## See more documentation and notes in `/docs`
