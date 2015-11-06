
            <div class="col-lg-12 textfields" >
                <div class="col-lg-6 text01" id="editor">

var instrument="piano";
var iterations=4;

while(iterations!==0){
    
    play(instrument,"G",400);
    play(instrument,"C",400);
    play(instrument,"Eb",200);
    play(instrument,"F",200);

    iterations--;

    }


                
                </div>
                <script src="src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
                <script>
                    var editor = ace.edit("editor");
                    editor.setTheme("ace/theme/monokai");
                    editor.getSession().setMode("ace/mode/javascript");
                </script>

                <div class="col-lg-6 text02" id="test">
                    The same previously repeated music pattern is again scripted using
                    a while loop.change the value of the iterations variable to something else and listen to the script again.
                    <a href="test.php"> Exercise - Loops >></a>


                </div>
                <script>
                    function tryIt(){
                        var value = editor.getValue();
                       // document.getElementById("test").innerHTML = 
                        eval(value);
                    }
                </script>

            </div>

            

      
