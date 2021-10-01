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
        <section id="form">
        <div class="forma-main">
            <div class="form-header">
                <div class="form-header-avater">
                    <div class="form-header-backgraund"></div>
                    <div class="form-header-block-avatar">
                        <table>
                            <tr>
                                <td class="form-body-lable" >
                                    <label for="">Avatar:</label>
                                </td>
                                <td >
                                    <img src="img/avatar_40.png" alt="">
                                </td>
                            </tr>
                        </table>
                    </div>
                    
                </div>
                
    
            </div>
            <div class="form-body">
                <div class="button-edit">
                    <span class="aui-icon aui-icon-small aui-iconfont-edit">Insert meaningful text here for accessibility</span>
                </div>
                <table  >
                    <tr>
                        <td class="form-body-lable" >
                            Username:
                        </td>
                        <td >
                            Username
                        </td>
                    </tr>
                    <tr>
                        <td class="form-body-lable" >
                            Full name:
                        </td>
                        <td >
                            Full name
                        </td>
                    </tr>
                    <tr>
                        <td class="form-body-lable" >
                            Email:
                        </td>
                        <td >
                            examle@examle.com
                        </td>
                    </tr>
                    <tr>
                        <td class="form-body-lable" >
                            Lenguage:
                        </td>
                        <td >
                            English (UK)
                        </td>
                    </tr>
                    <tr>
                        <td class="form-body-lable" >
                            Time zone:
                        </td>
                        <td >
                            System default (GMT+03:00) Moscow
                        </td>
                    </tr>
                    <tr>
                        <td class="form-body-lable" >
                            Do not notify me:
                        </td>
                        <td >
                            <input type="checkbox" name="" id="">
                        </td>
                    </tr>
                    <tr>
                        <td class="form-body-lable" >
                            Password:
                        </td>
                        <td >
                            <a href="#" style="color: #0052CC; text-decoration: none;">Chang password</a>
                        </td>
                    </tr>
                </table>
                <div class="buttons-container-user d-flex d-flex-just">
                            
                                <button class="aui-button aui-button-primary">Edit</button>
                                
                            
                        </div>
                
    
            </div>
        </div>
    </section>

    
    </div>
    <?php include ("block/footer.php");?>
    <?php include ("block/mob-nav.php");?>
</body>
</html>