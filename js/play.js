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

			outputstring = outputstring.concat(note);

			var delay = 0; // play one note every quarter second
			var notee = parseInt(NOTES[note]); // the MIDI note
			//alert(note);
			var velocity = 127; // how hard the note hits
			// play the note
			MIDI.programChange(0,INSTRUMENT[instrument]);
			MIDI.setVolume(0, 100);
			MIDI.noteOn(0, notee, velocity, delay);
			MIDI.noteOff(0, notee, delay + 0.25);
			wait(ms);
			//window.clearInterval(MyVar);


}



function playMusic(){

		
		play("G",400);
		play("C",400);
		play("Eb",200);
		play("F",200);

		play("G",400);
		play("C",400);
		play("Eb",200);
		play("F",200);

		play("G",400);
		play("C",400);
		play("Eb",200);
		play("F",200);

		play("G",400);
		play("C",400);
		play("Eb",200);
		play("F",200);


}

function tryIt(){
	var value = editor.getValue();
	document.getElementById("test").innerHTML = eval(value);
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
				msg = "You have pass the test";
			}else{
				msg = "Your output is wrong";
			}

		}
	}
	document.getElementById("test").innerText = msg;
}

