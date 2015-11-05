function wait(ms){
   var start = new Date().getTime();
   var end = start;
   while(end < start + ms) {
     end = new Date().getTime();
  }
}

function play(note,ms){


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

			var delay = 0; // play one note every quarter second
			var notee = parseInt(NOTES[note]); // the MIDI note
			//alert(note);
			var velocity = 127; // how hard the note hits
			// play the note

			MIDI.setVolume(0, 100);
			MIDI.noteOn(0, notee, velocity, delay);
			MIDI.noteOff(0, notee, delay + 0.75);
			wait(ms);
			//window.clearInterval(MyVar);


}



function playMusic(){

		
		play("G",500);
		play("C",500);
		play("Eb",250);
		play("F",250);

		play("G",500);
		play("C",500);
		play("Eb",250);
		play("F",250);

		play("G",500);
		play("C",500);
		play("Eb",250);
		play("F",250);

		play("G",500);
		play("C",500);
		play("Eb",250);
		play("F",250);

		play("G",500);
		play("C",500);
		play("E",250);
		play("F",250);

		play("G",500);
		play("C",500);
		play("E",250);
		play("F",250);
		
		play("G",500);
		play("C",500);
		play("E",250);
		play("F",250);

		play("G",500);
		play("C",500);
		play("E",250);
		play("F",250);

		
		
		
		
		

}