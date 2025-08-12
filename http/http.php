<?php 

//Apache: Es un servidor que detecta si esta URL es contenido estático (HTML, JS, CSS...) o dinámico(PHP, otro lenguaje de programación que sea del backend). Si el contenido es dinamico por ejemplo PHP, va a generar a lo mejor algunos ciclos, bucles, ir a la base de datos. Lo que va a hacer es generar al final de cuentas, es un contenido HTML, JSON o XML segun corresponda. Este mensaje es una respuesta de tipo HTTP. En resumen si enviamos una consulta http resibimos una respuesta http.

//Solicitud http: Cuando nosotros hacemos una solicitud HTTP, esta puede ser del tipo GET, POST, PUT, DELETE, etc.

    //GET: Obtener información.
    //POST: Insertar información.
    //PUT: Editar un recurso.
    //DELETE: Eliminar un recurso.

//HTTP nos va a responder con un código de error.Esos códigos pueden ir desde el número 100 en adelante 200 300 400 500.

    //100: Esto es informativo, es decir, solamente es información, algo que tú has solicitado, pero es informativo.
    //200:Es la más importante porque es la que nos va a indicar que todo ha salido correcto.
    //300: Es redirecciones.Redirecciones de URLs o también te va a indicar que necesita algún extra para que tú puedas completar la solicitud.
    //400: Es un error, pero es un error detectable.
    //500: Es cuando es un error, pero del servidor, es decir, cuando la mejor la base de datos está muerta, a la mejor tu servidor está caído. Hay una excepción, etcétera.

//HTTP Request:
    //METODO -> get, post, delete, put...
    //URI (Uniform Resource Identifier): que es una URL, la cual va a indicar a dónde estás dirigiendo tu método -> Ruta
    //Version -> HTTP/1.1 HTTP/2

    //Headers: Estos valores van a servir para darle información adicional a nuestro de nuestra solicitud al servidor, es decir, indicarle quiénes somos, indicarles de qué origen viene la solicitud, indicarles que es el tipo de contenido que viene. -> Host, User - Agent, Content -type, Authorization, etc...

    //Body: Tiene los datos que tú necesitas hacer, por ejemplo, cuando inserta su información en el servidor. Es opcional. El body regularmente va a ir cuando tú estás utilizando un método POST, un método PUT o un método también llamado Patch. -> JSON, ETC...

//HTTP Response:
    //Version -> HTTP/1.1 HTTP/2
    //Codigo Respuesta: le van a indicar al cliente a quien está solicitando si lo que hizo fue perfecto o si lo que hizo está fallando. -> 100 - 500.
    //Headers: Tiene un conjunto de headers, que es un catálogo bastante grande dependiendo de la situación. El servidor te va a contestar también estos headers regularmente ya el servidor en tu framework cuando estás trabajando son agregados. Algunos los puedes especificar. -> Content-type, set-cookie, etc...
    //Body: Podemos mandarle varios tipos de respuestas. -> JSON, HTML, XML, IMG, FILE, etc...


// HTTP Response Status Code

    //1xx(Informativo): son códigos más utilizados en el en el proceso de lo que hace el framework por sí  mismo con las solicitudes. ->  100: Te indica que debes continuar con la solicitud. 101: Va a cambiar de protocolo ya que el cliente se lo ha aceptado.
    //2xx(Exito) -> 200: Todo fue exitoso, 201: Todo fue exitoso, pero aparte agregamos un recurso del servidor, 204: Te indica que todo fue exitoso pero no te va, no te va a responder información, es decir,no te va a regresar contenido JSON, no te va a regresar un contenido HTML, simplemente te estoy indicando que todo fue exitoso.
    //3xx(Redireccion): Todos estos códigos te indican redirección del recurso, es decir, que tu recurso ha sido modificado. Estos códigos de de respuesta son utilizados cuando estás moviendo recursos o cuando estás dando mantenimiento. -> 300: indica que hay mucha solicitud, Hay otras opciones o rutas para el recurso que tú me estás solicitando. 302: Se utiliza  cuando un recurso está temporalmente en otro lado. 304: Indica que se ha movido desde la última vez que tú lo solicitaste.
    //4xx(Errores del Cliente): El cliente es quien hace la solicitud HTTP. Puede enviar un recurso o quiere insertar información y manda la información errónea, no como la que espera el servidor. -> 400: Estás mandando una información errónea, o en un formato erroneo o no estás mandando algo que es obligatorio en tu solicitud. 401: Indica es que no estás autorizado para realizar la acción. 404: Estás solicitando un recurso que bueno que que no existe.
    //5xx(Errores del Servidor): son cuando tenemos, por ejemplo, el famoso try catch sin manejar un error en el servidor. -> 500: Es un error genérico que indica que bueno, pasó algo en el servidor, pasó una situación inesperada, una excepcion. 501: Es porque tu estás haciendo cierta acción que en el servidor no se tiene permiso o el servidor no tiene esa funcionalidad soportada. 503: Es cuando tu servidor está sobrecargado o está en mantenimiento también, pero no hay una redirección. 