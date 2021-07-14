[![LinkedIn][linkedin-shield]](https://www.linkedin.com/in/artem-nehoda-925487165)



<!-- PROJECT LOGO -->
<br />
<p align="center">

  <h3 align="center">Pa Parser</h3>

  <p align="center">
   Pa parser is a mini web application that allows you to parse strings
  </p>
</p>

<!-- ABOUT THE PROJECT -->
## About The Project

### Built With

This project was builded with
* [Bootstrap](https://getbootstrap.com)
* [Laravel](https://laravel.com)



<!-- GETTING STARTED -->
## Getting Started

some text

### Prerequisites

To start this application, you need to have the following platforms installed on your machine:
* docker
* docker-compose

### Installation

1. Clone this repository
   ```sh
   git clone https://github.com/ArtemNehoda/pa-parser
   ```
2. Add the necessary permissions
   ```sh
   sudo chmod -R 775 pa-parser
   sudo chgrp -R 2000 pa-parser/storage
   sudo chgrp -R 2000 pa-parser/bootstrap/cache
   ```
3. Build and start docker containers
   ```sh
   cd pa-parser
   ./build_server.sh
   ./start_server.sh
   ```
4. Exec database migrations, compile compose packages and frontend assets
   ```sh
   sudo docker-compose run --rm composer install
   sudo docker-compose run --rm artisan migrate
   sudo docker-compose run --rm npm install
   sudo docker-compose run --rm npm run dev
   ```
5. Run tests
   ```sh
   ./run_tests.sh
   ```

<!-- USAGE EXAMPLES -->
## Usage
After starting the containers the application can be reached from <strong>localhost:8080</strong>.
Pa parser has 2 parsers (outer brackets parser and char pairs parser). The first is reachable from <strong>localhost:8080/brackets</strong> and the second from <strong>localhost:8080/pairs-en</strong>. 
Otherwise on the home (reachable from <strong>localhost:8080/</strong>), there are link buttons that allow you to reach all 2 parsers.

## Contact

Artem Nehoda - negoda1995@bk.ru

Project Link: [https://github.com/ArtemNehoda/pa-parser](https://github.com/ArtemNehoda/pa-parser)

[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
