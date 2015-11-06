
       
            <div class="col-lg-12 textfields" >
                <div class="col-lg-6 text01" id="editor">
var instrument="piano";

    
    
    if(instrument=="piano"){
        play("piano","C");
        play("piano","D");
        play("piano","E");
        play("piano","G"); 
    }
    else if(instrument=="flute"){

        play("flute","C");
        play("flute","D");
        play("flute","E");
        play("flute","G"); 

    }
    else if(instrument=="violin"){
        play("violin","C");
        play("violin","D");
        play("violin","E");
        play("violin","G"); 

    }
    else{
        play("piano","G");
        play("violin","E");
        play("flute","D");
        play("piano","C"); 
    }

   
                
                
                </div>
                <script src="src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
                <script>
                    var editor = ace.edit("editor");
                    editor.setTheme("ace/theme/monokai");
                    editor.getSession().setMode("ace/mode/javascript");
                </script>

                <div class="col-lg-6 text02" id="test">
                    Change value of the instrument variable to a value of your choice and play the script. Did you notice any Different?
                    <!--<a href="ifelse3.html"> Next Step >></a>-->


                </div>
                <script>
                    function tryIt(){
                        var value = editor.getValue();
                       // document.getElementById("test").innerHTML = 
                        eval(value);
                    }
                </script>

            </div>

        </div>
    