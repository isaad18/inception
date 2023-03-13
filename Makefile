build :	
		docker compose --env-file .env build

run :
		docker compose --env-file=./.env up --build

bgrun :
		docker-compose build && docker-compose up -d

stop :
		docker-compose down

stopv :
		docker-compose down -v