function wait(ms){
   var start = new Date().getTime();
   var end = start;
   while(end < start + ms) {
     end = new Date().getTime();
  }
}

//this is use for testing
var outputstring = "";

function play(instrument,note,ms){

if (ms === undefined) {
          ms = 800;
    } 

			var NOTES={
					"l-C":"48",
					"l-C#":"49",
					"l-D":"50",
					"l-Eb":"51",
					"l-E":"52",
					"l-F":"53",
					"l-F#":"54",
					"l-G":"55",
					"l-Ab":"56",
					"l-A":"57",
					"l-Bb":"58",
					"l-B":"59",
					"C":"60",
					"C#":"61",
					"D":"62",
					"Eb":"63",
					"E":"64",
					"F":"65",
					"F#":"66",
					"G":"67",
					"Ab":"68",
					"A":"69",
					"Bb":"70",
					"B":"71"
			};

			var INSTRUMENT = {
				"piano":0,
				"violin":40,
				"flute":73
			};

			outputstring = outputstring.concat(note," ");

			var delay = 0; // play one note every quarter second
			var notee = parseInt(NOTES[note]); // the MIDI note
			//alert(note);
			var velocity = 127; // how hard the note hits
			// play the note
			MIDI.programChange(0,INSTRUMENT[instrument]);
			MIDI.setVolume(0, 100);
			MIDI.noteOn(0, notee, velocity, delay);
			MIDI.noteOff(0, notee, delay + 0.75);
			wait(ms);
			//window.clearInterval(MyVar);


}





function tryIt(){
	var value = editor.getValue();
	//document.getElementById("test").innerHTML = eval(value);
	eval(value);
}

function testIt(max_count,test_string){
	//var data = editor.getValue().match(/for/g).length;
	var value = editor.getValue();
	var match_string = value.match(/for/g);
	var msg = "";
	if (match_string == null ){
		msg = "You don't have use any for loop";
	}else {
		var data = match_string.length;

		if (data > max_count) {
			// msg = "You have use more than 2 for loops";
			msg = msg.concat("You have use more than ",max_count," for loops");
		}
		else if (data < 0) {
			msg = "You don't have use any for loop";
		} else {
			outputstring = "";
			eval(value);
			if (outputstring == test_string){
				msg = "You have passed the test";
			}else{
				msg = "Your output is wrong";
			}

		}
	}
	document.getElementById("test").innerText = msg;
}

<<<<<<< HEAD







































=======
function sample_test(){
	outputstring = "";
	play("piano","G",400);

	play("piano","C",400);

	play("piano","Eb",200);

	play("piano","F",200);


	play("piano","G",400);
	play("piano","C",400);
	play("piano","Eb",200);
	play("piano","F",200);

	play("piano","G",400);
	play("piano","C",400);
	play("piano","Eb",200);
	play("piano","F",200);

	play("piano","G",400);
	play("piano","C",400);
	play("piano","Eb",200);
	play("piano","F",200);
	document.getElementById("test").innerText = outputstring;


}
>>>>>>> e228fa217238d87ff6f9f45bd9b804913db097f5


function playMusic(){

	 	play("piano","G",400);
		play("piano","C",400);
		play("piano","Eb",200);
		play("piano","F",200);

		play("piano","G",400);
		play("piano","C",400);
		play("piano","Eb",200);
		play("piano","F",200);

		play("piano","G",400);
		play("piano","C",400);
		play("piano","Eb",200);
		play("piano","F",200);

		play("piano","G",400);
		play("piano","C",400);
		play("piano","E",200);
		play("piano","F",200);

		play("piano","G",400);
		play("piano","C",400);
		play("piano","E",200);
		play("piano","F",200);

		play("piano","G",400);
		play("piano","C",400);
		play("piano","E",200);
		play("piano","F",200);

		play("piano","G",400);
		play("piano","C",400);
		play("piano","E",200);
		play("piano","F",200);
		play("piano","G",1200);

		play("violin","G",1200);
		play("violin","C",1200);
		play("violin","Eb",200);
		play("violin","F",200);

		play("violin","G",800);
		play("violin","C",800);



}
