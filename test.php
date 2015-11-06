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
    <script src="js/jquery.js" type="text/javascript"></script>
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
                <a class="navbar-brand" href="index.php">Rhythmic</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="activities.php">Activities</a>
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

    <!-- Page Content -->
    <div class="container">
        <hr>
        <h4>Lets test your Rhythmic skills...!</h4>
        <hr>
    <div class="col-lg-12">
        <div>
            <?php include 'sidemenutest.php'; ?>
        </div>

        <div class="col-lg-9">
            <div>
                <?php include 'piano.php'; ?>
            </div>
            <div id="loadaction">
               <div class="col-lg-9">
                   <h5>1) Press "Rhythm" button to hear your question</h5>
                   <h5>2) After the Rhythm button is pressed, the relevant notes for the melody will be displayed on the text area to the right</h5>
                   <h5>3) To succeed, you must include at least one for loop</h5>
                   <div class="btn btn-warning" style="float:right" onclick="sample_test()"> Rhythm </div>
               </div>
                <div class="actiontext01" id="actiontext01">
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
                    <div class="btn btn-success" onclick="testIt()">Play</div>
                </div>
                <div class="col-lg-12 textfields" >
                    <div class="col-lg-6 text01" id="editor">
//Enter your code here
                    </div>
                    <script src="src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
                    <script>
                        var editor = ace.edit("editor");
                        editor.setTheme("ace/theme/monokai");
                        editor.getSession().setMode("ace/mode/javascript");
                    </script>

                    <div class="col-lg-6 text02" id="test"></div>


                </div>
            </div>
            </div>
            <script>
                function f01(){
                    $("#loadaction").load('if02.php');
                }
            </script>

        </div>
    </div>
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
