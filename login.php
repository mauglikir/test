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
        <div class="aui-page-panel  aui-page-focused p-20 m-auto-20 aui-page-panel-inner-shadow">
            <header class="aui-page-header">
                <div class="aui-page-header-inner">
                    <div class="aui-page-header-main d-flex d-flex-just header-hr">
                        <h1>Log in to Customer Portal</h1>
                            <button class="aui-button aui-dropdown2-trigger" aria-controls="example-dropdown">
                                English
                            </button>
                            <aui-dropdown-menu id="example-dropdown">
                                <aui-section label="Links">
                                    <aui-item-link href="http://atlassian.com">Atlassian</aui-item-link>
                                    <aui-item-link href="http://news.ycombinator.com">Hacker news</aui-item-link>
                                    <aui-item-link href="http://github.com">Github</aui-item-link>
                                </aui-section>
                                <aui-section label="Browsers">
                                    <aui-item-radio interactive checked>Chrome</aui-item-radio>
                                    <aui-item-radio interactive>Firefox</aui-item-radio>
                                    <aui-item-radio interactive disabled>Safari</aui-item-radio>
                                </aui-section>
                                <aui-section label="Languages">
                                    <aui-item-checkbox interactive checked>Javascript</aui-item-checkbox>
                                    <aui-item-checkbox interactive>Fortran</aui-item-checkbox>
                                    <aui-item-checkbox interactive>Rust</aui-item-checkbox>
                                </aui-section>
                            </aui-dropdown-menu>
                    </div>
                </div>
            </header>
            <div class="aui-page-panel-inner">
                <section class="aui-page-panel-content">
                    <form class="aui top-label">
                        <div class="field-group">
                            <label for="text-input">User<span class="aui-icon icon-required">required</span></label>
                            <input class="text long-field" type="text" id="text-input" name="text-input" title="Text input">
                        </div>
                        <div class="field-group">
                            <label for="text-input">Password<span class="aui-icon icon-required">required</span></label>
                            <input class="text long-field" type="text" id="text-input" name="text-input" title="Text input">
                        </div>
                        <div class="buttons-container buttons-container-new d-flex d-flex-just">
                            
                                <button class="aui-button aui-button-primary">Login</button>
                                <form action="#" method="post" class="aui">
                                    <div class="checkbox" resolved="">
                                        <input class="checkbox" type="checkbox" name="cbOne" id="cbOne" resolved=""><span class="aui-form-glyph"></span>
                                        <label for="cbOne">Keep me logged in</label>
                                    </div>
                                </form>
                            
                        </div>
                        <div class="field-group">
                            <a href="">Sign up</a>
                        </div>
                        <div class="field-group">
                            <a href="">Reset password</a>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
    </div>
    
    </div>
    <?php include ("block/footer.php");?>
    <?php include ("block/mob-nav.php");?>
</body>
</html>