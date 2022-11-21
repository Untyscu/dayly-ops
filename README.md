# Docker and Docker-Compose installation

### Install Docker
```bash
# installin wget if his not exist
sudo apt upgrade && sudo apt install wget
# installing docker from https://get.docker.com
cd /usr/local/src && wget -qO- https://get.docker.com/ | sh
sudo gpasswd -a $USER docker
service docker restart
```
##### if you using wsl dont forget add docker to sturtup

```bash
cat /etc/wsl.conf
[boot]
command="service docker start"
```

### Install Docker-Compose

```bash
sudo curl -SL https://github.com/docker/compose/releases/download/v2.12.2/docker-compose-linux-x86_64 -o /usr/local/bin/docker-compose
sudo chmod +x /usr/local/bin/docker-compose
```
> for check actual version visit this github page below:
> https://github.com/docker/compose/releases

Ok, now let`s check how its work

```bash
docker --version 
# Docker version 20.10.21, build baeda1f
docker compose version
# Docker Compose version v2.12.2
```