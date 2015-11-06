<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rhythmic Code</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-frontpage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="inc/shim/Base64.js" type="text/javascript"></script>
    <script src="inc/shim/Base64binary.js" type="text/javascript"></script>
    <script src="inc/shim/WebAudioAPI.js" type="text/javascript"></script>
    <!-- midi.js package -->
    <script src="js/midi/audioDetect.js" type="text/javascript"></script>
    <script src="js/midi/gm.js" type="text/javascript"></script>
    <script src="js/midi/loader.js" type="text/javascript"></script>
    <script src="js/midi/plugin.audiotag.js" type="text/javascript"></script>
    <script src="js/midi/plugin.webaudio.js" type="text/javascript"></script>
    <script src="js/midi/plugin.webmidi.js" type="text/javascript"></script>
    <!-- utils -->
    <script src="js/util/dom_request_xhr.js" type="text/javascript"></script>
    <script src="js/util/dom_request_script.js" type="text/javascript"></script>
    <script src="js/play.js" type="text/javascript"></script>
     <script>
          window.onload = function () {
    MIDI.loadPlugin({
        soundfontUrl: "./soundfont/",
        instrument: ["acoustic_grand_piano","violin","flute"],
        onprogress: function(state, progress) {
            console.log(state, progress);
        }
        

    });
}
       
    </script>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Rhythmic</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Activities</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Image Background Page Header -->
    <!-- Note: The background image is set within the business-casual.css file. -->
   

    <!-- Page Content -->
    <div class="container">
        <hr>
        <h4>Select Your Rhythm...!</h4>
        <hr>
        <div class="col-lg-3">
            <div class="list-group">
                <a href="#" class="list-group-item active">
                    Rhythms
                </a>
                <a href="#" class="list-group-item">If..Else..Elseif</a>
                <a href="#" class="list-group-item">For Loop</a>
                <a href="#" class="list-group-item">While Loop</a>
                <a href="#" class="list-group-item">Switch Case</a>
                <a href="#" class="list-group-item">Function</a>
            </div>
        </div>

        <div class="col-lg-9">
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
<!--                <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Instrument <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
<<<<<<< HEAD
                        <li><a href="#" data-div-id="piano">Piano</a></li>
                        <li><a href="#">Villon</a></li>
=======
                        <li><a href="#">Piano</a></li>
                        <li><a href="#">Violin</a></li>
>>>>>>> eb9490c66d13401cf6f569730e0d335da2803cf0
                        <li><a href="#">Drum</a></li>
                    </ul>
                </div>-->
                <div class="btn btn-success" onclick="tryIt()">Play</div>
            </div>

           <?php include "piano.php" ?>
           <div id="loadaction">
            <div class="col-lg-12 textfields" >
                <div class="col-lg-6 text01" id="editor">
var instrument="piano";

    play(instrument,"G",400);
    play(instrument,"C",400);
    play(instrument,"Eb",200);
    play(instrument,"F",200);

    play(instrument,"G",400);
    play(instrument,"C",400);
    play(instrument,"Eb",200);
    play(instrument,"F",200);

    play(instrument,"G",400);
    play(instrument,"C",400);
    play(instrument,"Eb",200);
    play(instrument,"F",200);

    play(instrument,"G",400);
    play(instrument,"C",400);
    play(instrument,"Eb",200);
    play(instrument,"F",200);


                
                
                </div>
                <script src="src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
                <script>
                    var editor = ace.edit("editor");
                    editor.setTheme("ace/theme/monokai");
                    editor.getSession().setMode("ace/mode/javascript");
                </script>

                <div class="col-lg-6 text02" id="test">
                    Listen to this script of music. Did you recognize a repetition of music notes?
                    <a onclick="f1()"> Next Step >></a>


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
        </div>
        <script>

            function f1(){


                $("#loadaction").load("loops2.php");
            }
        </script
        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Rhythmic Code 2015 || Graphics from <a href="http://www.freepik.com">freepik.com</a></p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
