# mc-status 🟩

A simple page to see if your minecraft server is online with some basic stats like the version and amount of players online.

![mc-status screenshot](screenshot.png)

## 🔧 How to Install

### 🐳 Docker (Recommended)

With Docker this is really easy to setup, you can get it running with a single command:

```bash
docker run -d --restart unless-stopped --name mc-status \
    -e SERVER_HOST=play.example.com \
    -p 8080:80 \
    ghcr.io/peprolinbot/mc-status
```
**Important:** Substitute _play.example.com_ with your actual minecraft server

#### Build the image

```bash
git clone https://github.com/peprolinbot/mc-status.git
cd mc-status
docker build -t mc-status .
```

### 💪🏻 Without Docker

You'll need [composer](https://getcomposer.org/) and a webserver with php >= 7.

1. Clone this repository on your webserver.
2. Set the SERVER_HOST environment variable to your minecraft server. `export SERVER_HOST=play.example.com`
3. From within the project directory run `composer install` to download and install the dependencies.
4. Point your webserver to the `public` dir of this project and the mc-status is up and running.

## ❤️ Credits

- Forked from [styxit/MinecraftStatusPage](https://github.com/styxit/MinecraftStatusPage)
