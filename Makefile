DATA_PATH=/home/bperez/data

all: volumes up

volumes:
	mkdir -p $(DATA_PATH)/database
	mkdir -p $(DATA_PATH)/www

up:
	docker compose --env-file srcs/.env -f srcs/docker-compose.yaml up --build

stop:
	docker ps -aq | xargs --no-run-if-empty docker stop

rmc:
	docker ps -aq | xargs --no-run-if-empty docker rm

rmi:
	docker image ls -aq | xargs --no-run-if-empty docker image rm

rmv:
	rm -rf $(DATA_PATH)
	docker volume ls -q | xargs --no-run-if-empty docker volume rm

rmn:
	docker network ls -q | xargs --no-run-if-empty docker network rm

clean: stop rmc rmi rmv rmn

re : clean all
