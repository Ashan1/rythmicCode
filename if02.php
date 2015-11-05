<div class="actiontext01" id="actiontext03">
                <div class="col-lg-12">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Language <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Js</a></li>
                            <li><a href="#">Python</a></li>
                            <li><a href="#">pseudo code</a></li>
                        </ul>
                    </div>
                    <div class="btn btn-success" onclick="tryIt()">Play</div>
                </div>
                <div class="col-lg-12 textfields" >
                    <div class="col-lg-6 text01" id="editor">
var x = "All this is div three highlighted";
alert(x);
                    </div>
                    <script src="src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
                    <script>
                        var editor = ace.edit("editor");
                        editor.setTheme("ace/theme/monokai");
                        editor.getSession().setMode("ace/mode/javascript");
                    </script>

                    <div class="col-lg-6 text02" id="test"></div>
                    <script>
                        function tryIt(){
                            var value = editor.getValue();
                            document.getElementById("test").innerHTML = eval(value);
                        }
                    </script>

                </div>
            </div>