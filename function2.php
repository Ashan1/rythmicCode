
<div class="col-lg-12 textfields" >
    <div class="col-lg-6 text01" id="editor">

    function intro(){
    for(i=0;i<3;i++){
    play("piano","G",400);
    play("piano","C",400);
    play("piano","Eb",200);
    play("piano","F",200);
    }
    for(i=0;i<4;i++){
    play("piano","G",400);
    play("piano","C",400);
    play("piano","E",200);
    play("piano","F",200);
    }
    play("piano","G",1200);
    }
    function chorus1(){
    play("violin","G",1200);
    play("violin","C",1200);
    play("violin","Eb",200);
    play("violin","F",200);
    play("violin","G",800);
    play("violin","C",800);
    play("violin","Eb",200);
    play("violin","F",200);
    }
    function chorus2(){
    play("violin","F",1200);
    play("violin","l-Bb",1200);
    play("violin","Eb",200);
    play("violin","D",200);
    play("violin","F",800);
    play("violin","l-Bb",800);
    play("violin","Eb",200);
    play("violin","D",200);
    }
    function bit1(){
    for(i=0;i<4;i++){
    play("piano","D",400);
    play("piano","l-G",400);
    play("piano","l-Bb",200);
    play("piano","C",200);
    }
    }
    function bit2(){
    for(i=0;i<4;i++){
    play("piano","C",400);
    play("piano","l-F",400);
    play("piano","l-Ab",200);
    play("piano","l-Bb",200);
    }
    play("piano","C",400);
    }
    intro();
    chorus1();
    bit1();
    chorus2();
    bit2();



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


    </div>


</div>

            

      
