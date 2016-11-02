Curso de Laravel 5.1 donde aprenderemos a crear una aplicación web dinámica :D

#Cinema

## Instalación

+ Después de descargar el proyecto entramos a este.

        $ cd nombreRepositorio

+ Ejecutamos el siguiente comando.

        $ composer install
    
+ Modificamos el nombre del archivo __.env.example.__ por __.env__ y agregamos nuestras credenciales.


+ Por ultimo solo debemos generar una key para nuestra app.

         $ php artisan key:generate

+ Listo ya podemos ejecutar el proyecto Cinema.

        $ php artisan serve


# Github
  
+ instalar git

		$ sudo apt-get install git-core

+ crear o ingresar en la carpeta q queremos clonar el repositorio

		$ git clone https://github.com/mhotavo/CinemilLaravel.git

+ instalar git gui

		$ sudo apt-get install gitk giggle git-cola git-gui gitg

+ abrir el gui de git mediante el comando, para eso tenemos q estar en la carpeta donde clonamos el git

		$ git gui

+ poner el nombre del usuario en git

		$ git config --global user.name mhotavo

+ colocar email del usuario

		$ git config --global user.email milton.otavo@gmail.com

+ para asegurarnos de que no exista ningún cambio que nosotros no tengamos

		$ git pull origin master

+ subimos los cambios

		$ git push origin master



#instalar git

		$ sudo apt-get install git-core

+ Crear o ingresar en la carpeta q queremos clonar el repositorio

		$ git clone https://github.com/mhotavo/Asoft.git

+ Instalar git gui

		$ sudo apt-get install gitk giggle git-cola git-gui gitg

+ Abrir el gui de git mediante el comando, para eso tenemos q estar en la carpeta donde clonamos el git

		$ git gui

+ poner el nombre del usuario en git

		$ git config --global user.name mhotavo

+ Colocar email del usuario

		$ git config --global user.email milton.otavo@gmail.com

+ Para asegurarnos de que no exista ningún cambio que nosotros no tengamos

		$ git pull origin master

+ Subimos los cambios

		$ git push origin master








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

