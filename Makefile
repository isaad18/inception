build :	
		docker-compose build

run :
		docker-compose build && docker-compose up

bgrun :
		docker-compose build && docker-compose up -d

stop :
		docker-compose down