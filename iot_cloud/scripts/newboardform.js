var noSensor = false;

function desactivarSensores() {
	//Una manera
	var sensor1 = document.getElementById('sensor-1');
	var sensor2 = document.getElementById('sensor-2');

	sensor1.disabled = !sensor1.disabled;
	sensor2.disabled = !sensor2.disabled;
}
function createNewBoard() {
	var boardName = document.getElementById('board-name').value;
	//coge el elmento de nombre id = 'board-name'
	var boardDesc = document.getElementById('board-desc').value;
	//coge la descripción

	if (noSensor == false) {
		var sensor1Name = document.getElementById('sensor-1').value;
		var sensor2Name = document.getElementById('sensor-2').value;
	} else {
		var sensor1Name = '';
		var sensor2Name = '';
	}
	//Componer el enlace, el enlace será similar a: /newboard.php?name=Arduino&desc=sdas&sensor1...
	/*Forma antigua
	var saveBoardLinkOld = '/saveboard.php?name' + boardName +'&desc' + boardDesc + 
		'&sensor1=' + sensor1Name + '&sensor2' +  sensor2Name + '&noSensors=' + noSensor;*/

	//Forma nueva
	//PARA HACER SALTO SIN CAMBIAR DE LÍNEA; ALT+Z
	//LOS LINKS SIN ESPACIOS
	var saveBoardLinkNew = `saveboard.php?name=${boardName}&desc=${boardDesc}&sensor1=${sensor1Name}&sensor2=${sensor2Name}&noSensor=${noSensor}`; //más corto ya que solo con poner comillas (accent grave) y las cualidades como muestra el ejemplo

	console.log(saveBoardLinkNew);

	window.location = saveBoardLinkNew; //abre el enlace puesto
}

//Otra manera
//document.getElementById('sensor-1').disabled = !document.getElementById('sensor-1').disabled;
//document.getElementById('sensor-2').disabled = !document.getElementById('sensor-2').disabled;
