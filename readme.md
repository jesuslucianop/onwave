<h1>Funcionalidades del api de carros y dueños
Métodos:</h1>


Creardueno: Es un método que recibe un Json de tipo POST con los parámetros para
crear un dueño en la base de datos, si recibe el json y lo crea regresa un json
con el dueño creado.
Ruta para probar con postman:
POST: http://localhost/onwave/public/api/duenos
Formato del json:
{
"Nombre": "Jose",
"Apellido": "Barranco",
"Sexo": "Masculino",
"Edad": 13,
"Cedula": "00105307534",
"Carros":2,
"Direccion":"Calle m ",
"Telefono":8096589878,
"Celular":8090004587
}
Obtenertodosduenos: Es un método que trae todos los dueños alojados en la base
de datos por una petición GET y devuelve un JSON con todos los dueños, sino hay
dueños un mensaje que no existe data.
Ruta para probar con postman:
GET: http://localhost/onwave/public/api/duenos

Obtenerdueno: Es un método que Recibe un JSON con el parámetro id_dueno la cual
devuelve un JSON con toda la información del id del dueño la cual se mando en la
petición, sino lo encuentra devuelve un mensaje que no encontró el dueño.
Ruta para probar con postman:
GET: http://localhost/onwave/public/api/duenos
Formato del json:
{"id_dueno": 21}

Editardueno: Es un método que Recibe un JSON con los parámetros especificados en
el formato del json enviado, la cual contiene el id_dueno la cual busca un dueño y con
los otros parámetros editar la data del dueño buscado, si los edita correctamente
devuelve un json con la nueva data.
Ruta para probar con postman:
PUT: http://localhost/onwave/public/api/duenos
Formato del JSON:
{
Id_dueno:21,
"Nombre": "La bella",
"Apellido": "El apellidoso",
"Sexo": "Masculino",
"Edad": 13,
"Cedula": "00105307534",
"Carros":2,
"Direccion":"Calle m ",
"Telefono":8096589878,
"Celular":8090004587
}
Eliminardueno: Es un método que Recibe un JSON con el id_dueno busca ese id en la
tabla dueños y elimina, si es correcto devuelve un mensaje de confirmación.
Ruta para probar con postman:

DELETE: http://localhost/onwave/public/api/duenos
Formato del JSON:
{
Id_dueno:21
}
Crearcarro: esto es un método la cual recibe un JSON Por el método POST con los
parámetros para crear un carro, cuando lo crea correctamente devuelve un JSON con el
objeto creado.
Ruta para probar con postman:
POST: http://localhost/onwave/public/api/carros
Formato del JSON:
{
“Marca”:”Toyota”,
“Modelo”:”Corolla”,
“Ano”:2010,
“Trim”:”EX”,
Duenos:18,
Valor_estimado:200000000
}
Obtenertodosloscarros: es un método que recibe una petición GET para
obtener todos los datos de todos los carros alojados en la base de datos en formato
JSON, sino encuentra data muestra un mensaje de alerta.
Ruta para probar con postman:
GET: http://localhost/onwave/public/api/carros
Obtenercarro: Este es un método que recibe Un Json con el Id_Carro, y
busca el carro con ese id y devuelve toda la información en Formato JSON,
sino la encuentra devuelve información.

Ruta para probar con postman:
GET: http://localhost/onwave/public/api/carro
{Id_Carro:14}
Editarcarros: Este es un método que recibe Un Json con el Id_Carro, y
busca el carro con ese id y con los otros parámetros del JSON edita el carro
enviado por ID, Si se edita correctamente envía un JSON con el objeto editado.
Ruta para probar con postman:
PUT: http://localhost/onwave/public/api/carros
{
Id_Carro:14,
“Marca”:”Toyota”,
“Modelo”:”Corolla”,
“Ano”:2010,
“Trim”:”EX”,
Duenos:18,
Valor_estimado:200000000}
Eliminarcarro: Este método recibe un JSON ID_Carro En formato DELETE y lo
busca en la base de datos y si existe elimina ese objeto, sino un mensaje de alerta.
Ruta para probar con postman:
DELETE: http://localhost/onwave/public/api/carros
{Id_Carro:14}
Obtenerduenoporidcarros: Este es un método que recibe un JSON de tipo GET
con el Id_Carro para buscar en las dos tablas dueños y carros los dueño que tiene un
carro y devuelve un JSON con los dueños.
Ruta para probar con postman:
GET: http://localhost/onwave/public/api/duenosidcarro

{Id_Carro:14}

Obtenercarroiddueno: Este es un método que recibe un JSON de tipo GET con el
id_dueno para buscar en las dos tablas dueños y carros, los carros que tiene un dueño
y devuelve un JSON con los carros de ese dueño.
Ruta para probar con postman:
GET: http://localhost/onwave/public/api/Obtenercarroiddueno
{Id_Carro:14}
Eliminarduenoycarro: Este es un método que recibe un JSON de tipo GET con el
id_dueno para buscar en las dos tablas dueños y carros, y eliminar el dueño pasado por
el id junto con los carros relacionados a el
Ruta para probar con postman:
GET: http://localhost/onwave/public/api/Eliminarduenoycarro
{Id_Carro:14}