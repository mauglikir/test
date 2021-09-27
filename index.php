<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
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
        <?php include ("block/banner.php");?>
    </div>
        <div class="aui-main-page">
            <div class="aui-group">
                <div class="aui-item">
                    <div class="aui-page-panel">
                        <div class="aui-page-panel-inner aui-page-panel-inner-shadow">
                            <!-- The redundant `role` attribute is required for the VoiceOver + Safari combo -->
                            <main id="main" role="main" class="aui-page-panel-content">
                            <div class="aui-block-termit">
                            <h2>Extrernal Support</h2>
        
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Phasellus vitae diam in arcu ultricies gravida sed sed nisl.
                                    Curabitur nibh nulla, semper non pharetra eu, suscipit vitae eros.
                                    Donec eget lectus elit. 
                                    orem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Phasellus vitae diam in arcu ultricies gravida sed sed nisl.
                                    Curabitur nibh nulla, semper non pharetra eu, suscipit vitae eros.
                                    Donec eget lectus elit. 
                                </p>
                            </div>
                                
                            </main>
                        </div>
                    </div>
                </div>
                <div class="aui-item">
                    <div class="aui-page-panel">
                        <div class="aui-page-panel-inner aui-page-panel-inner-shadow">
                            <!-- The redundant `role` attribute is required for the VoiceOver + Safari combo -->
                            <main id="main" role="main" class="aui-page-panel-content">
                            <div class="aui-block-termit">
                            <h2>Internal Requests</h2>
        
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Phasellus vitae diam in arcu ultricies gravida sed sed nisl.
                                    Curabitur nibh nulla, semper non pharetra eu, suscipit vitae eros.
                                    Donec eget lectus elit. 
                                    orem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Phasellus vitae diam in arcu ultricies gravida sed sed nisl.
                                    Curabitur nibh nulla, semper non pharetra eu, suscipit vitae eros.
                                    Donec eget lectus elit. 
                                </p>
                            </div>
                            </main>
                        </div>
                    </div>
                </div>
                <div class="aui-item">
                    <div class="aui-page-panel">
                        <div class="aui-page-panel-inner aui-page-panel-inner-shadow">
                            <!-- The redundant `role` attribute is required for the VoiceOver + Safari combo -->
                            <main id="main" role="main" class="aui-page-panel-content">
                            <div class="aui-block-termit">
                            <h2>HR</h2>
        
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Phasellus vitae diam in arcu ultricies gravida sed sed nisl.
                                    Curabitur nibh nulla, semper non pharetra eu, suscipit vitae eros.
                                    Donec eget lectus elit. 
                                    orem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Phasellus vitae diam in arcu ultricies gravida sed sed nisl.
                                    Curabitur nibh nulla, semper non pharetra eu, suscipit vitae eros.
                                    Donec eget lectus elit. 
                                </p>
                            </div>
                                
                            </main>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

        
    
    </div>
    <?php include ("block/footer.php");?>
    <?php include ("block/mob-nav.php");?>
</body>
</html>