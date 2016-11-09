Curso de Laravel 5.1 donde aprenderemos a crear una aplicación web dinámica :D

#Cinema

## INSTALAR PROYECTO

+ crear o ingresar en la carpeta q queremos clonar el repositorio

		$ git clone https://github.com/mhotavo/CinemilLaravel.git

+ Después de descargar el proyecto entramos a este.

        $ cd nombreRepositorio

+ Ejecutamos el siguiente comando.

        $ composer install
    
+ Modificamos el nombre del archivo __.env.example.__ por __.env__ y agregamos nuestras credenciales.


+ Por ultimo solo debemos generar una key para nuestra app.

         $ php artisan key:generate

+ Listo ya podemos ejecutar el proyecto Cinema.

        $ php artisan serve

       



## RELIZAR BACKUP PROYECTO


+ poner el nombre del usuario en git

		$ git config --global user.name mhotavo

+ colocar email del usuario

		$ git config --global user.email milton.otavo@gmail.com


+ Creamos Commit con todos los cambios

		$ git add -A && git commit -m "Your Message"


+ para asegurarnos de que no exista ningún cambio que nosotros no tengamos

		$ git pull origin master

+ subimos los cambios

		$ git push origin master

+ Exportar BD

		$  mysqldump -h localhost -u root -p cinemil > Cinemil.sql


# .env

	APP_ENV=local
	APP_KEY=base64:a2qH23O5HIBymX9HXjsBSSAFxDXA4qWKimW5W9wsXN0=
	APP_DEBUG=true
	APP_LOG_LEVEL=debug
	APP_URL=http://localhost

	DB_CONNECTION=mysql
	DB_HOST=127.0.0.1
	DB_PORT=3306
	DB_DATABASE=cinemil
	DB_USERNAME=root
	DB_PASSWORD=''

	BROADCAST_DRIVER=log
	CACHE_DRIVER=file
	SESSION_DRIVER=file
	QUEUE_DRIVER=sync

	REDIS_HOST=127.0.0.1
	REDIS_PASSWORD=null
	REDIS_PORT=6379

	MAIL_DRIVER=smtp
	MAIL_HOST=mailtrap.io
	MAIL_PORT=2525
	MAIL_USERNAME=null
	MAIL_PASSWORD=null
	MAIL_ENCRYPTION=null

	PUSHER_APP_ID=
	PUSHER_KEY=
	PUSHER_SECRET=

