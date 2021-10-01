<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="https://cdn.tiny.cloud/1/cbibf6gy5l1o388ji4grj616bxfd968rei9f9b3lxhksmn1x/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
          selector: '#mytextarea'
        });
      </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sinon.js/1.15.4/sinon.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.13.4/codemirror.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.13.4/mode/css/css.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.13.4/mode/xml/xml.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.13.4/mode/javascript/javascript.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aui/9.4.0/aui/aui-prototyping.js" integrity="sha512-DkENIkhNP5r+sfHUC5hhFAzApGNR5HTu1fzymBBhXZma4zytOUQh8qhz5xc3nSbSQfdYI6qdI281YwUNmubEMw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aui/9.4.0/aui/aui-css-deprecations.min.js" integrity="sha512-xwtRx75GIraK3z3Ow+gCJmcKp3yZ8T/KalbfL6cO9y9q0xFf0XlSWIEeW/t8L+GlTU3JjJMi71hLg4ttttJcgQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aui/9.4.0/aui/aui-prototyping.min.js" integrity="sha512-iUshpSgJ26ryfeS5STpopGIsONtcP9nlIgLU24C8jwGPjsSTO5vqepMFU/KWc3fTIbNhbSTS/arJAGSnMPqQeA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aui/9.4.0/aui/aui-prototyping.nodeps.min.js" integrity="sha512-MdAIAZrPjOF7Xfo/ukqMouLNfiTuNAIEy0DScIowIHx2wDNAYOAKCCbltIvuV37oZfQCiH/IGPWtPfz2htUn+w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aui/9.4.0/aui/aui-prototyping-browserfocus.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aui/9.4.0/aui/aui-prototyping-darkmode.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aui/9.4.0/aui/aui-prototyping.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aui/9.4.0/aui/aui-prototyping.nodeps.min.css">
</head>
<body>
    <div id="page" class="wrapp">
        <?php include ("block/nav.php");?>
        <div id="content" role="main">
        <div class="aui-page-panel  aui-page-focused p-20 m-auto-20 page-100-input aui-page-panel-inner-shadow">
            <header class="aui-page-header">
                <div class="aui-page-header-inner">
                    <div class="aui-page-header-main d-flex d-flex-just">
                        <div class="aui-page-header-main-h">
                            <div class="aui-page-header-main-h-img">
                                <img src="img/Lifesaver.svg" alt="" srcset="">
                            </div>
                            <div class="aui-page-header-main-h-lable">
                                <span><a href="#">Support</a></span>
                                <h1>Incident</h1>
                            </div>
                        </div>
                        
                            
                    </div>
                </div>
            </header>
            <div class="aui-tabs horizontal-tabs ">
                <ul class="tabs-menu">
                    <li class="menu-item active-tab">
                        <a href="#tabs-example-first">Feild tab</a>
                    </li>
                    <li class="menu-item">
                        <a href="#tabs-example-second">Catalog cascading</a>
                    </li>
                </ul>
                <div class="tabs-pane active-pane" id="tabs-example-first">
                    <div class="aui-page-panel-inner">
                        <section class="aui-page-panel-content">
                            <form class="aui top-label">
                                <div class="field-group">
                                    <label for="text-input">Summary<span class="aui-icon icon-required">required</span></label>
                                    <input class="text long-field" placeholder="Text" type="text" id="text-input" name="text-input" title="Text input">
                                </div>
                                <div class="field-group">
                                    <label for="select-example">Components</label>
                                    <select class="select" id="select-example" name="select-example">
                                        <option></option>
                                        <option>Component 1</option>
                                        <option>Component 2</option>
                                        <option>Component 3</option>
                                        <option>Component 4</option>
                                    </select>
                                    <div class="description">Start typing to get a list of possible matches or press down to select</div>
                                </div>
                                <div class="field-group">
                                    <label for="text-input">Labels</label>
                                    <select class="select" id="select-example" name="select-example">
                                        <option></option>
                                        <option>red</option>
                                        <option>white</option>
                                        <option>go</option>
                                        <option>rabbit</option>
                                    </select>
                                    <div class="description">Start typing to get a list of possible matches or press down to selectt</div>
                                </div>
                                <div class="field-group">
                                    <label for="text-input">Priority</label>
                                    <select class="select" id="select-example" name="select-example">
                                        <option>Select</option>
                                        <option>Low</option>
                                        <option>Middle</option>
                                        <option>High</option>
                                        <option>7 red line</option>
                                    </select>
                                </div>
                                
                                <div class="field-group">
                                    
                                                <label for="textarea-id">Description</label>
                                                <textarea  class="textarea" name="comment" id="mytextarea" placeholder="Your comment here..."></textarea>
                                            
                                        
                                </div>
                                
                                <div class="field-group">
                                    <label for="text-input">Attachment</label>
                                    <div   id="output" 
                                        ondragenter="document.getElementById('output').textContent = ''; event.stopPropagation(); event.preventDefault();"
                                        ondragover="event.stopPropagation(); event.preventDefault();"
                                        ondrop="event.stopPropagation(); event.preventDefault();
                                        dodrop(event);">
                                        <span class="aui-icon aui-icon-small aui-iconfont-upload">Insert meaningful text here for accessibility</span>
                                        &nbsp
                                        Drop file to attach, or &nbsp <a href="#">browser</a> 
                                    </div>
                                </div>
                                
                                
                        
                                
                            </form>
                        </section>
                </div>
                </div>
                <div class="tabs-pane" id="tabs-example-second">
                    <h2>This is tab 2</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            
            </div>
        </div>
        
    
    </div>
    <?php include ("block/footer.php");?>
    <?php include ("block/mob-nav.php");?>
    <script>
        function dodrop(event)
        {
          var dt = event.dataTransfer;
          var files = dt.files;
        
          var count = files.length;
          output("File Count: " + count + "\n");
        
            for (var i = 0; i < files.length; i++) {
              output(" File " + i + ":\n(" + (typeof files[i]) + ") : <" + files[i] + " > " +
                     files[i].name + " " + files[i].size + "\n");
            }
        }
        
        function output(text)
        {
          document.getElementById("output").textContent += text;
          //dump(text);
        }
        
      </script>
</body>
</html>