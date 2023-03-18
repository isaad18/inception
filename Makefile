
run :
	mkdir -p /Users/isaad/data/wp
	mkdir -p /Users/isaad/data/sql
	docker compose -f ./docker-compose.yml up --build

build :	
		docker compose build
bgrun :
		docker-compose build && docker-compose up -d

stop :
		docker-compose down

stopv :
		docker-compose down -v

clean :
		rm -rf /Users/isaad/data/wp
		rm -rf /Users/isaad/data/sql
		docker system prune -f -a