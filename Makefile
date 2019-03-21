run-db: 
	docker build -t estoque-db . && docker run -d -p 3306:3306 \
	--name estoque-db estoque-db 

run-migrations:
	php artisan migrate

run: 
	php artisan serve