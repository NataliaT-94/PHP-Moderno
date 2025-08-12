# Reglas de Negocios
    Todos los Negocios tiene reglas, politicas y restricciones dependiendo situaciones, estas reglas se aseguran que la operación del negocio siga funcionando, son las que define el flujo de la operación de tu negocio.
    Las reglas de negocio vienen siendo funcionalidades de alto nivel.
    Ejemplo: cuando tú estás llenando en un sistema un carrito de compras y el carrito de compras tiene que comprobar que ese producto sigue existiendo en inventario.
    Si no existe en inventario, ya no va a mostrar ese producto o te va a mostrar una alerta.
    Esas son reglas de negocio, pero la regla en sí es ese if que dice Comprobar en inventario si no hay en inventario hacer esta acción.
    El cómo lo hagas es la parte de cómo lo muestres.
    Eso no es regla de negocio, eso ya son los detalles del sistema.
    Puedes mostrarlo en una ventanita o puedes mostrarlo en un alert de JavaScript y eso es independiente de la regla de negocio

# Definicion de responsabilidades

    Primera responsabilidad, tener persistencia: Tener un lado donde vamos a guardar información.Esa información puede estar en una base de datos, puede estar en un archivo.

    Segunda responsabilidad el validador, que valide la informacion que ingrese sea la correcta

    Tercera responsabilidad el manejo de excepciones, Que hacer con los errores inusuales que pueden llegar a ocurrir

    Y por último, el orquestador de todo esto es las reglas de negocio, es decir, dónde vamos a tener la orquestación de cómo van a ir estos pasos.Evaluándose va primero la validación, después el guardado o va primero el guardado, después la validación.
    Todas esas reglas de negocio también es otra responsabilidad.