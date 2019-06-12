# Trigger Sample Software

## Requirements

- MySQL Server
- PHP 7 or higher
- node.js (Tested on v10.16.0)

## Installation

After cloning the repository, navigate in your terminal to the root directory of the project then edit the  `.env` and `install.sh` MySQL server credentials with your server's values.
After that, simply run the following commands:

```sh
.\install.sh (Windows using git bash)
```
or
```sh
sh install.sh (Linux or MacOS)
```

## Main functionalities

- Login (Already created user:"drud@trgr.ca" - password: "secret")
- Registration 
- Logout
- Display dynamic data (Randomly generated data)  
_Note: If you are running the app from the localhost server make sure that you run `npm run dev` in that location, otherwise the API won't make the call correctly._  

## API Documenation

* The `/dummy` endpoint accept/returns `application/json` type requests/responses
* Authentication-based, user should be logged in to access the API 

### **Get Dummy**

<_returns dummy data for the test_>

* **URL** <_/dummy_>

* **Method:** `GET`

| Parameter  | Type      | Required | Description                                       |
  | ---------- | --------- | -------- | ------------------------------------------------- |
  | page      | `int`    | false     | returns data and divide it into pages (Pagination) |
