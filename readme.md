# Trigger Sample Software

## Requirements

- MySQL Server
- PHP 7 or higher
- node.js (Tested on v10.16.0)

## Installation

- Run this git command
```sh
git clone https://github.com/kaisbitar/trigger-sample-software.git
```
- In the root directory edit the files `.env` and `install.sh` MySQL server credentials with your server's values.
- Navigate in your terminal to the root directory of the project then simply run the following commands:

```sh
./install.sh (Windows using git bash)
```
or
```sh
sh install.sh (Linux or MacOS)
```
- Go in your browser to `localhost:8000` and see the results
## Main functionalities

- Login (Already created user:"drud@trgr.ca" - password: "secret")
- Registration 
- Logout
- Display dynamic data (Randomly generated data)  


## API Documenation

* The `/dummy` endpoint accept/returns `application/json` type requests/responses
* Authentication-based API access

### **Get Dummy**

<_returns dummy data for the test_>

* **URL** <_/dummy_>

* **Method:** `GET`

| Parameter  | Type      | Required | Description                                       |
  | ---------- | --------- | -------- | ------------------------------------------------- |
  | page      | `int`    | false     | returns data and divide it into pages (Pagination) |
