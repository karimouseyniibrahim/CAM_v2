# CAM 



# Table of contents

for give project more work time

**Modules:**

**Pages:**

- /ar/page/page-slug-ar
- /en/page/page-slug-en
- /fr/page/page-slug-fr

## Requirements

- PHP >= 7.1.3
- MySQL 5.7
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- Memcached or Redis
- XML PHP Extension

## Installation

First install [Composer](https://getcomposer.org)

1. Download the git
 First you need download the project and mount in your public directory
```sh
$ git clone https://github.com/karimouseyniibrahim/CAM_v2.git cam-sa-site
```

2. Enter the newly created folder

   ```
   cd cam-sa-site
  ```
3. Also you have to modify the .env file with the database configuration
```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dbname
DB_USERNAME=dbuser
DB_PASSWORD=dbpassword
```

### Users seeded

|Email|Password|Profile|
|:------------|:------------|:------------|
| admin@cam-souk-ahras.dz | admin | Administrateur |


### Profiles seeded

|Profile Name|Description|Access|
|:------------|:------------|:------------|
|administrateur| Administrator|* (all)|