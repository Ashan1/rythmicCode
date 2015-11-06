
            <div class="col-lg-12 textfields" >
                <div class="col-lg-6 text01" id="editor">
var instrument="piano";

    
    
    if(instrument=="piano"){
        play("piano","G");
        play("piano","G");
        play("piano","G");
        play("piano","G"); 
    }
    else{

        play("flute","G");
        play("flute","G");
        play("flute","G");
        play("flute","G"); 

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
                    <a onclick="f2()"> Next Step >></a>


                </div>

            </div>

        </div>
        