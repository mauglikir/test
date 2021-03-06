<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="slick-1.8.1/slick.min.js"></script>
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
    <link rel="stylesheet" href="slick-1.8.1/slick.css">
    <link rel="stylesheet" href="slick-1.8.1/slick-theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aui/9.4.0/aui/aui-prototyping-browserfocus.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aui/9.4.0/aui/aui-prototyping-darkmode.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aui/9.4.0/aui/aui-prototyping.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aui/9.4.0/aui/aui-prototyping.nodeps.min.css">
</head>
<body>
    <div id="page" class="wrapp">
        <?php include ("block/nav.php");?>
        <div id="content" role="main">
        <div class="  aui-page-size-small  aui-page-focused p-20 m-auto-20">
            <!-- <header class="aui-page-header">
                <div class="aui-page-header-inner">
                    <div class="aui-page-header-main d-flex d-flex-just header-hr">
                        <h1>Log in to Customer Portal</h1>
                    </div>
                </div>
            </header> -->
            <h2>My Requst</h2>
<div class="back_door">

           
<article class="aui-flatpack-example">
    <div class="aui-tabs horizontal-tabs" id="tabs-example1" role="application">
        <ul class="tabs-menu" role="tablist">
            <li class="menu-item active-tab" role="presentation">
                <a href="#tabs-example-first" id="aui-uid-0" role="tab" aria-selected="true">Designers</a>
            </li>
            <li class="menu-item" role="presentation">
                <a href="#tabs-example-second" id="aui-uid-1" role="tab" aria-selected="false">Developers</a>
            </li>
            <li class="menu-item" role="presentation">
                <a href="#tabs-example-third" id="aui-uid-2" role="tab" aria-selected="false">PMs</a>
            </li>
            <button class="aui-button button-tabs-menu-my" ><span class="aui-icon aui-icon-small aui-iconfont-export">Insert meaningful text here for accessibility</span> <span>Export</span> </button>
        </ul>
        <div class="tabs-pane active-pane" id="tabs-example-first" role="tabpanel" aria-labelledby="aui-uid-0">
            <h3>Designers</h3>
            <table class="aui aui-table-new">
                <thead>
                    <tr>
                        <th id="basic-number" class="basic-number">
                            
                                    <h4>
                                        Created
                                    </h4>
                                
                        </th>
                        <th id="basic-fname">
                            <form class="aui">
                                <div class="field-group">
                                    <select class="select" id="select-example" name="select-example">
                                        <option>Choices</option>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                    </select>
                                </div>
                            </form>
                        </th>
                        <th id="basic-lname">
                            <form class="aui">
                                <div class="field-group">
                                    <input class="text" type="text" id="text-input" name="text-input" title="Issue" placeholder="Issue">
                                </div>
                            </form>
                        </th>
                        <th id="basic-username">
                            <form class="aui">
                                <div class="field-group">
                                    <input class="text" type="text" id="text-input" name="text-input" title="Summary" placeholder="Summary">
                                </div>
                            </form>
                        </th>
                        <th id="basic-username">
                            <form class="aui">
                                <div class="field-group">
                                    <select class="select" id="select-example" name="select-example">
                                        <option>Status: All</option>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                    </select>
                                </div>
                            </form>
                        </th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td headers="basic-number"><time datetime="2013-11-28T11:52+1100">11:52 AEST, November 28 2013</time></td>
                        <td headers="basic-fname">
                            <header class="aui-page-header">
                                <div class="aui-page-header-inner">
                                    <div class="aui-page-header-image">
                                        <span class="aui-avatar aui-avatar-project aui-avatar-small">
                                            <span class="aui-avatar-inner">
                                                <img src="img/bug.svg" alt="" role="presentation" />
                                            </span>
                                        </span>
                                    </div>
                                    <div class="aui-page-header-main">
                                        <h4>Bug</h4>
                                        <!-- <p>
                                            The avatar is related to this heading. If I were using a screen reader here,
                                            it would be redundant to hear the name of the project read out twice. So,
                                            we prevent the image from being described.
                                        </p> -->
                                    </div>
                                </div>
                            </header>
                        </td>
                        <td headers="basic-lname">
                            <a href="">ISO-505</a>
                        </td>
                        <td headers="basic-username">Error</td>
                        <td headers="basic-username">
                            <span class="aui-lozenge aui-lozenge-success">Success</span>
                        </td>
                    </tr>
                    <tr>
                        <td headers="basic-number"><time datetime="2013-11-28T11:52+1100">11:52 AEST, November 28 2013</time></td>
                        <td headers="basic-fname">
                            <header class="aui-page-header">
                                <div class="aui-page-header-inner">
                                    <div class="aui-page-header-image">
                                        <span class="aui-avatar aui-avatar-project aui-avatar-small">
                                            <span class="aui-avatar-inner">
                                                <img src="img/bug.svg" alt="" role="presentation" />
                                            </span>
                                        </span>
                                    </div>
                                    <div class="aui-page-header-main">
                                        <h4>Bug</h4>
                                        <!-- <p>
                                            The avatar is related to this heading. If I were using a screen reader here,
                                            it would be redundant to hear the name of the project read out twice. So,
                                            we prevent the image from being described.
                                        </p> -->
                                    </div>
                                </div>
                            </header>
                        </td>
                        <td headers="basic-lname">
                            <a href="">ISO-505</a>
                        </td>
                        <td headers="basic-username">Error</td>
                        <td headers="basic-username">
                            <span class="aui-lozenge aui-lozenge-success">Success</span>
                        </td>
                    </tr>
                    <tr>
                        <td headers="basic-number"><time datetime="2013-11-28T11:52+1100">11:52 AEST, November 28 2013</time></td>
                        <td headers="basic-fname">
                            <header class="aui-page-header">
                                <div class="aui-page-header-inner">
                                    <div class="aui-page-header-image">
                                        <span class="aui-avatar aui-avatar-project aui-avatar-small">
                                            <span class="aui-avatar-inner">
                                                <img src="img/bug.svg" alt="" role="presentation" />
                                            </span>
                                        </span>
                                    </div>
                                    <div class="aui-page-header-main">
                                        <h4>Bug</h4>
                                        <!-- <p>
                                            The avatar is related to this heading. If I were using a screen reader here,
                                            it would be redundant to hear the name of the project read out twice. So,
                                            we prevent the image from being described.
                                        </p> -->
                                    </div>
                                </div>
                            </header>
                        </td>
                        <td headers="basic-lname">
                            <a href="">ISO-505</a>
                        </td>
                        <td headers="basic-username">Error</td>
                        <td headers="basic-username">
                            <span class="aui-lozenge aui-lozenge-success">Success</span>
                        </td>
                    </tr>
                    <tr>
                        <td headers="basic-number"><time datetime="2013-11-28T11:52+1100">11:52 AEST, November 28 2013</time></td>
                        <td headers="basic-fname">
                            <header class="aui-page-header">
                                <div class="aui-page-header-inner">
                                    <div class="aui-page-header-image">
                                        <span class="aui-avatar aui-avatar-project aui-avatar-small">
                                            <span class="aui-avatar-inner">
                                                <img src="img/bug.svg" alt="" role="presentation" />
                                            </span>
                                        </span>
                                    </div>
                                    <div class="aui-page-header-main">
                                        <h4>Bug</h4>
                                        <!-- <p>
                                            The avatar is related to this heading. If I were using a screen reader here,
                                            it would be redundant to hear the name of the project read out twice. So,
                                            we prevent the image from being described.
                                        </p> -->
                                    </div>
                                </div>
                            </header>
                        </td>
                        <td headers="basic-lname">
                            <a href="">ISO-505</a>
                        </td>
                        <td headers="basic-username">Error</td>
                        <td headers="basic-username">
                            <span class="aui-lozenge aui-lozenge-success">Success</span>
                        </td>
                    </tr>
                    <tr>
                        <td headers="basic-number"><time datetime="2013-11-28T11:52+1100">11:52 AEST, November 28 2013</time></td>
                        <td headers="basic-fname">
                            <header class="aui-page-header">
                                <div class="aui-page-header-inner">
                                    <div class="aui-page-header-image">
                                        <span class="aui-avatar aui-avatar-project aui-avatar-small">
                                            <span class="aui-avatar-inner">
                                                <img src="img/bug.svg" alt="" role="presentation" />
                                            </span>
                                        </span>
                                    </div>
                                    <div class="aui-page-header-main">
                                        <h4>Bug</h4>
                                        <!-- <p>
                                            The avatar is related to this heading. If I were using a screen reader here,
                                            it would be redundant to hear the name of the project read out twice. So,
                                            we prevent the image from being described.
                                        </p> -->
                                    </div>
                                </div>
                            </header>
                        </td>
                        <td headers="basic-lname">
                            <a href="">ISO-505</a>
                        </td>
                        <td headers="basic-username">Error</td>
                        <td headers="basic-username">
                            <span class="aui-lozenge aui-lozenge-success">Success</span>
                        </td>
                    </tr>
                    <tr>
                        <td headers="basic-number"><time datetime="2013-11-28T11:52+1100">11:52 AEST, November 28 2013</time></td>
                        <td headers="basic-fname">
                            <header class="aui-page-header">
                                <div class="aui-page-header-inner">
                                    <div class="aui-page-header-image">
                                        <span class="aui-avatar aui-avatar-project aui-avatar-small">
                                            <span class="aui-avatar-inner">
                                                <img src="img/bug.svg" alt="" role="presentation" />
                                            </span>
                                        </span>
                                    </div>
                                    <div class="aui-page-header-main">
                                        <h4>Bug</h4>
                                        <!-- <p>
                                            The avatar is related to this heading. If I were using a screen reader here,
                                            it would be redundant to hear the name of the project read out twice. So,
                                            we prevent the image from being described.
                                        </p> -->
                                    </div>
                                </div>
                            </header>
                        </td>
                        <td headers="basic-lname">
                            <a href="">ISO-505</a>
                        </td>
                        <td headers="basic-username">Error</td>
                        <td headers="basic-username">
                            <span class="aui-lozenge aui-lozenge-success">Success</span>
                        </td>
                    </tr>
                    <tr>
                        <td headers="basic-number"><time datetime="2013-11-28T11:52+1100">11:52 AEST, November 28 2013</time></td>
                        <td headers="basic-fname">
                            <header class="aui-page-header">
                                <div class="aui-page-header-inner">
                                    <div class="aui-page-header-image">
                                        <span class="aui-avatar aui-avatar-project aui-avatar-small">
                                            <span class="aui-avatar-inner">
                                                <img src="img/bug.svg" alt="" role="presentation" />
                                            </span>
                                        </span>
                                    </div>
                                    <div class="aui-page-header-main">
                                        <h4>Bug</h4>
                                        <!-- <p>
                                            The avatar is related to this heading. If I were using a screen reader here,
                                            it would be redundant to hear the name of the project read out twice. So,
                                            we prevent the image from being described.
                                        </p> -->
                                    </div>
                                </div>
                            </header>
                        </td>
                        <td headers="basic-lname">
                            <a href="">ISO-505</a>
                        </td>
                        <td headers="basic-username">Error</td>
                        <td headers="basic-username">
                            <span class="aui-lozenge aui-lozenge-success">Success</span>
                        </td>
                    </tr>
                    <tr>
                        <td headers="basic-number"><time datetime="2013-11-28T11:52+1100">11:52 AEST, November 28 2013</time></td>
                        <td headers="basic-fname">
                            <header class="aui-page-header">
                                <div class="aui-page-header-inner">
                                    <div class="aui-page-header-image">
                                        <span class="aui-avatar aui-avatar-project aui-avatar-small">
                                            <span class="aui-avatar-inner">
                                                <img src="img/bug.svg" alt="" role="presentation" />
                                            </span>
                                        </span>
                                    </div>
                                    <div class="aui-page-header-main">
                                        <h4>Bug</h4>
                                        <!-- <p>
                                            The avatar is related to this heading. If I were using a screen reader here,
                                            it would be redundant to hear the name of the project read out twice. So,
                                            we prevent the image from being described.
                                        </p> -->
                                    </div>
                                </div>
                            </header>
                        </td>
                        <td headers="basic-lname">
                            <a href="">ISO-505</a>
                        </td>
                        <td headers="basic-username">Error</td>
                        <td headers="basic-username">
                            <span class="aui-lozenge aui-lozenge-success">Success</span>
                        </td>
                    </tr>
                    <tr>
                        <td headers="basic-number"><time datetime="2013-11-28T11:52+1100">11:52 AEST, November 28 2013</time></td>
                        <td headers="basic-fname">
                            <header class="aui-page-header">
                                <div class="aui-page-header-inner">
                                    <div class="aui-page-header-image">
                                        <span class="aui-avatar aui-avatar-project aui-avatar-small">
                                            <span class="aui-avatar-inner">
                                                <img src="img/bug.svg" alt="" role="presentation" />
                                            </span>
                                        </span>
                                    </div>
                                    <div class="aui-page-header-main">
                                        <h4>Bug</h4>
                                        <!-- <p>
                                            The avatar is related to this heading. If I were using a screen reader here,
                                            it would be redundant to hear the name of the project read out twice. So,
                                            we prevent the image from being described.
                                        </p> -->
                                    </div>
                                </div>
                            </header>
                        </td>
                        <td headers="basic-lname">
                            <a href="">ISO-505</a>
                        </td>
                        <td headers="basic-username">Error</td>
                        <td headers="basic-username">
                            <span class="aui-lozenge aui-lozenge-success">Success</span>
                        </td>
                    </tr>
                    <tr>
                        <td headers="basic-number"><time datetime="2013-11-28T11:52+1100">11:52 AEST, November 28 2013</time></td>
                        <td headers="basic-fname">
                            <header class="aui-page-header">
                                <div class="aui-page-header-inner">
                                    <div class="aui-page-header-image">
                                        <span class="aui-avatar aui-avatar-project aui-avatar-small">
                                            <span class="aui-avatar-inner">
                                                <img src="img/bug.svg" alt="" role="presentation" />
                                            </span>
                                        </span>
                                    </div>
                                    <div class="aui-page-header-main">
                                        <h4>Bug</h4>
                                        <!-- <p>
                                            The avatar is related to this heading. If I were using a screen reader here,
                                            it would be redundant to hear the name of the project read out twice. So,
                                            we prevent the image from being described.
                                        </p> -->
                                    </div>
                                </div>
                            </header>
                        </td>
                        <td headers="basic-lname">
                            <a href="">ISO-505</a>
                        </td>
                        <td headers="basic-username">Error</td>
                        <td headers="basic-username">
                            <span class="aui-lozenge aui-lozenge-success">Success</span>
                        </td>
                    </tr>
                    <tr>
                        <td headers="basic-number"><time datetime="2013-11-28T11:52+1100">11:52 AEST, November 28 2013</time></td>
                        <td headers="basic-fname">
                            <header class="aui-page-header">
                                <div class="aui-page-header-inner">
                                    <div class="aui-page-header-image">
                                        <span class="aui-avatar aui-avatar-project aui-avatar-small">
                                            <span class="aui-avatar-inner">
                                                <img src="img/bug.svg" alt="" role="presentation" />
                                            </span>
                                        </span>
                                    </div>
                                    <div class="aui-page-header-main">
                                        <h4>Bug</h4>
                                        <!-- <p>
                                            The avatar is related to this heading. If I were using a screen reader here,
                                            it would be redundant to hear the name of the project read out twice. So,
                                            we prevent the image from being described.
                                        </p> -->
                                    </div>
                                </div>
                            </header>
                        </td>
                        <td headers="basic-lname">
                            <a href="">ISO-505</a>
                        </td>
                        <td headers="basic-username">Error</td>
                        <td headers="basic-username">
                            <span class="aui-lozenge aui-lozenge-success">Success</span>
                        </td>
                    </tr>
                    
                    
                </tbody>
            </table>
        </div>
        <div class="tabs-pane" id="tabs-example-second" role="tabpanel" aria-labelledby="aui-uid-1">
            <h3>Developers</h3>
            <table class="aui">
                <thead>
                    <tr>
                        <th id="basic-number">#</th>
                        <th id="basic-fname">First name</th>
                        <th id="basic-lname">Last name</th>
                        <th id="basic-username">Username</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td headers="basic-number">4</td>
                        <td headers="basic-fname">Seb</td>
                        <td headers="basic-lname">Ruiz</td>
                        <td headers="basic-username">sruiz</td>
                    </tr>
                    <tr>
                        <td headers="basic-number">7</td>
                        <td headers="basic-fname">Sean</td>
                        <td headers="basic-lname">Curtis</td>
                        <td headers="basic-username">scurtis</td>
                    </tr>
                    <tr>
                        <td headers="basic-number">8</td>
                        <td headers="basic-fname">Matthew</td>
                        <td headers="basic-lname">Watson</td>
                        <td headers="basic-username">mwatson</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tabs-pane" id="tabs-example-third" role="tabpanel" aria-labelledby="aui-uid-2">
            <h3>Product management</h3>
            <table class="aui">
                <thead>
                    <tr>
                        <th id="basic-number">#</th>
                        <th id="basic-fname">First name</th>
                        <th id="basic-lname">Last name</th>
                        <th id="basic-username">Username</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td headers="basic-number">5</td>
                        <td headers="basic-fname">Jens</td>
                        <td headers="basic-lname">Schumacher</td>
                        <td headers="basic-username">jschumacher</td>
                    </tr>
                    <tr>
                        <td headers="basic-number">6</td>
                        <td headers="basic-fname">Sten</td>
                        <td headers="basic-lname">Pittet</td>
                        <td headers="basic-username">spittet</td>
                    </tr>
                    <tr>
                        <td headers="basic-number">9</td>
                        <td headers="basic-fname">James</td>
                        <td headers="basic-lname">Dumay</td>
                        <td headers="basic-username">jdumay</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- .aui-tabs -->
</article>
<div class="pagination">
    <ol class="aui-nav aui-nav-pagination">
        <li class="aui-nav-first"><a href="#">First</a></li>
        <li class="aui-nav-previous"><a href="#">Prev</a></li>
        <li><a href="https://example.com/">1</a></li>
        <li class="aui-nav-selected"><span class="assistive">Current page:</span> 2</li>
        <li><a href="https://example.com/">3</a></li>
        <li class="aui-nav-truncation"><a href="https://example.com/" id="pagination-truncation">&hellip;</a></li>
        <li><a href="https://example.com/">998</a></li>
        <li><a href="https://example.com/">999</a></li>
        <li class="aui-nav-next"><a href="#">Next</a></li>
        <li class="aui-nav-last"><a href="#">Last</a></li>
    </ol>
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