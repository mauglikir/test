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
        <div class="">
            <header class="aui-page-header">
                <div class="aui-page-header-inner">
                    <div class="aui-page-header-image">
                        <span class="aui-avatar aui-avatar-large aui-avatar-project">
                            <span class="aui-avatar-inner">
                                <img alt="My awesome project" src="img/Lifesaver.svg">
                            </span>
                        </span>
                    </div>
                    <div class="aui-page-header-main">
                        <ol class="aui-nav aui-nav-breadcrumbs">
                            <li><a href="">Breadcrumbs</a></li>
                            <li><a href="" class="custom">Sub-page</a></li>
                            <li class="aui-nav-selected"><span class="assistive">Current page:</span> Direct parent page name</li>
                        </ol>
                        <h1>Design a posters</h1>
                    </div>
                    
                </div>
            </header>
            
            <div class="aui-page-panel-inner">
                <section class="aui-page-panel-content">
                    <div class="aui-buttons aui-buttons-desk">
                        <button class="aui-button">Comment</button>
                        <button class="aui-button">Open</button>
                        <button class="aui-button">Dev</button>
                        <button class="aui-button">Resolve</button>
                        <button class="aui-button">to Client</button>
                        <button class="aui-button">Invite</button>
                        <button class="aui-button">Edit</button>
                    </div>
                    <div class="aui-buttons aui-buttons-mob">
                        <button class="aui-button aui-button-split-main">Comment</button>
                        <button class="aui-button aui-button-split-main">Open</button>
                        <button class="aui-button aui-button-split-main">Dev</button>
                        <button class="aui-button aui-dropdown2-trigger aui-button-split-more" aria-controls="split-container-dropdown">Split more</button>
                    </div>
                    <aui-dropdown-menu id="split-container-dropdown">
                        <aui-item-link>Resolve</aui-item-link>
                        <aui-item-link>to Client</aui-item-link>
                        <aui-item-link>Invite</aui-item-link>
                        <aui-item-link>Edit</aui-item-link>
                    </aui-dropdown-menu>
                    <div class="aui-main-page">
                        <div class="aui-group block-group">
                            <div class="base-block">
                                <div class="left-block">
                                    <div class="aui-item aui-item-margin"">
                                        <div class="aui-page-panel">
                                            <div class="aui-page-panel-inner-shadow aui-page-panel-inner">
                                                <table class="aui aui-table-list">
                                
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <h3>Details</h3>
                                                            </td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td headers="author">
                                                                Type:
                                                            </td>
                                                            <td headers="commit">
                                                                <div class="checkbox">
                                                                    <input class="checkbox" type="checkbox" name="checkBoxOne" id="checkBoxOne">
                                                                    <label for="checkBoxOne">Receive email</label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td headers="author">
                                                                Status:
                                                            </td>
                                                            <td headers="commit">
                                                                <span class="aui-lozenge aui-lozenge-success">Success</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td headers="author">
                                                                Components:
                                                            </td>
                                                            <td headers="commit">
                                                                <a href="#">2585eafcbca</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td headers="author">
                                                                Labels:
                                                            </td>
                                                            <td headers="commit">
                                                                <a href="#">2585eafcbca</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td headers="author">
                                                                Priority:
                                                            </td>
                                                            <td headers="commit">
                                                                <span class="aui-avatar aui-avatar-xsmall">
                                                                    <span class="aui-avatar-inner">
                                                                        <img src="images/avatar-person.svg" alt="" role="presentation" />
                                                                    </span>
                                                                </span>
                                                                Medium
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td headers="author">
                                                                Company (reporte):
                                                            </td>
                                                            <td headers="commit">
                                                                No define
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td headers="author">
                                                                HD Similar issues:
                                                            </td>
                                                            <td headers="commit">
                                                                <a href="#">SUP-83</a>
                                                                Prepare design
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td headers="author">
                                                                Resolution Time:
                                                            </td>
                                                            <td headers="commit">
                                                                <aui-progressbar id="with-attributes" value="5" max="100"></aui-progressbar>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td headers="author">
                                                                Resolution Time (team):
                                                            </td>
                                                            <td headers="commit">
                                                                <aui-progressbar id="with-attributes" value="5" max="100"></aui-progressbar>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td headers="author">
                                                                Team:
                                                            </td>
                                                            <td headers="commit">
                                                                Developers
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td headers="author">
                                                                CRM property:
                                                            </td>
                                                            <td headers="commit">
                                                                Legal
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td headers="author">
                                                                Epic Estimate:
                                                            </td>
                                                            <td headers="commit">
                                                                <aui-badge class="aui-badge-primary">19M</aui-badge>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td headers="author">
                                                                Epic Time Spent:
                                                            </td>
                                                            <td headers="commit">
                                                                <aui-badge>0</aui-badge>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td headers="author">
                                                                Epic Time Remaning:
                                                            </td>
                                                            <td headers="commit">
                                                                <aui-badge>0</aui-badge>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td headers="author">
                                                                Epic Ratio:
                                                            </td>
                                                            <td headers="commit">
                                                                <aui-badge>0</aui-badge>
                                                            </td>
                                                        </tr>
                                                        
                                                    </tbody>
                                                    
                                                    
                                                </table>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <div class="right-block">
                                    
                                    <div class="aui-item aui-item-margin">
                                        <div class="aui-page-panel">
                                            <div class="aui-page-panel-inner aui-page-panel-inner-shadow">
                                                <table class="aui aui-table-list">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <h3><span class="aui-icon aui-icon-small aui-iconfont-group">Insert meaningful text here for accessibility</span> People</h3>
                                                            </td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td headers="author">
                                                                Reporter:
                                                            </td>
                                                            <td headers="commit">
                                                                <span class="aui-avatar aui-avatar-xsmall">
                                                                    <span class="aui-avatar-inner">
                                                                        <img src="images/avatar-person.svg" alt="" role="presentation" />
                                                                    </span>
                                                                </span>
                                                                Kelly Dorn
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td headers="author">
                                                                Voters:
                                                            </td>
                                                            <td headers="commit">
                                                                <aui-badge>0</aui-badge>
                                                                <a href="">Voit of this issues</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td headers="author">
                                                                Watcher:
                                                            </td>
                                                            <td headers="commit">
                                                                <aui-badge>2</aui-badge>
                                                                <a href="">Stop watching of this issues</a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    
                                    </div>
                                    <div class="aui-item aui-item-margin">
                                        <div class="aui-page-panel">
                                            <div class="aui-page-panel-inner aui-page-panel-inner-shadow">
                                                <table class="aui aui-table-list">
                                                
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <h3><span class="aui-icon aui-icon-small aui-iconfont-calendar">Insert meaningful text here for accessibility</span> Dates</h3>
                                                            </td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td headers="author">
                                                                Created:
                                                            </td>
                                                            <td headers="commit">
                                                                <time datetime="2013-11-28T11:52+1100">11:52 AEST, November 28 2013</time>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td headers="author">
                                                                Update:
                                                            </td>
                                                            <td headers="commit">
                                                                <time datetime="2013-11-28T11:52+1100">11:52 AEST, November 28 2013</time>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td headers="author">
                                                                Calendar Start:
                                                            </td>
                                                            <td headers="commit">
                                                                <time datetime="2013-11-28T11:52+1100">11:52 AEST, November 28 2013</time>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td headers="author">
                                                                Calendar Finish:
                                                            </td>
                                                            <td headers="commit">
                                                                <time datetime="2013-11-28T11:52+1100">11:52 AEST, November 28 2013</time>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    
                                                </table>
                                            </div>
                                        </div>
                                    
                                    </div>
                                    <div class="aui-item aui-item-margin">
                                        <div class="aui-page-panel">
                                            <div class="aui-page-panel-inner aui-page-panel-inner-shadow">
                                                <table class="aui aui-table-list">
                                                    
                                                    
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <h3><span class="aui-icon aui-icon-small aui-iconfont-graph-line">Insert meaningful text here for accessibility</span> Time tracker</h3>
                                                            </td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td headers="author">
                                                                Remaning:
                                                            </td>
                                                            <td headers="commit">
                                                                <aui-progressbar id="with-attributes" value="0" max="100"></aui-progressbar>
                                                                <span>0 m</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td headers="author">
                                                                Logged:
                                                            </td>
                                                            <td headers="commit">
                                                                <aui-progressbar id="with-attributes" value="50" max="100">40</aui-progressbar>
                                                                <span>5 m</span>
                                                            </td>
                                                        </tr>
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                           


                            <div class="center-block">
                                <div class="aui-item aui-item-margin">
                                        <div class="aui-page-panel">
                                            <div class="aui-page-panel-inner aui-page-panel-inner-shadow">
                                                <table class="aui aui-table-list">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <h3><span class="aui-icon aui-icon-small aui-iconfont-comment">Insert meaningful text here for accessibility</span>Comment</span> People</h3>
                                                            </td>
                                                            <td></td>
                                                        </tr>
                                                        
                                                    
                                                        
                                                    </tbody>
                                                </table>
                                                <div class="block-comment">
                                        
                                                    
                                                    <textarea  class="textarea" name="comment" id="mytextarea" placeholder="Your comment here..."></textarea>
                                                    <div class="aui-buttons">
                                                        <button class="aui-button aui-button-primary">Добавить</button>
                                                        <button class="aui-button">Отменит</button>
                                                    </div>
                                            
                                    </div>

                                </div>
                            </div>
                            <div class="mob-block-slider">
                                <div class="aui-item">
                                    <div class="aui-page-panel">
                                        <div class="aui-page-panel-inner-shadow aui-page-panel-inner">
                                            <table class="aui aui-table-list">
                            
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <h3>Details</h3>
                                                        </td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td headers="author">
                                                            Type:
                                                        </td>
                                                        <td headers="commit">
                                                            <div class="checkbox">
                                                                <input class="checkbox" type="checkbox" name="checkBoxOne" id="checkBoxOne">
                                                                <label for="checkBoxOne">Receive email</label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td headers="author">
                                                            Status:
                                                        </td>
                                                        <td headers="commit">
                                                            <span class="aui-lozenge aui-lozenge-success">Success</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td headers="author">
                                                            Components:
                                                        </td>
                                                        <td headers="commit">
                                                            <a href="#">2585eafcbca</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td headers="author">
                                                            Labels:
                                                        </td>
                                                        <td headers="commit">
                                                            <a href="#">2585eafcbca</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td headers="author">
                                                            Priority:
                                                        </td>
                                                        <td headers="commit">
                                                            <span class="aui-avatar aui-avatar-xsmall">
                                                                <span class="aui-avatar-inner">
                                                                    <img src="images/avatar-person.svg" alt="" role="presentation" />
                                                                </span>
                                                            </span>
                                                            Medium
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td headers="author">
                                                            Company (reporte):
                                                        </td>
                                                        <td headers="commit">
                                                            No define
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td headers="author">
                                                            HD Similar issues:
                                                        </td>
                                                        <td headers="commit">
                                                            <a href="#">SUP-83</a>
                                                            Prepare design
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td headers="author">
                                                            Resolution Time:
                                                        </td>
                                                        <td headers="commit">
                                                            <aui-progressbar id="with-attributes" value="5" max="100"></aui-progressbar>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td headers="author">
                                                            Resolution Time (team):
                                                        </td>
                                                        <td headers="commit">
                                                            <aui-progressbar id="with-attributes" value="5" max="100"></aui-progressbar>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td headers="author">
                                                            Team:
                                                        </td>
                                                        <td headers="commit">
                                                            Developers
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td headers="author">
                                                            CRM property:
                                                        </td>
                                                        <td headers="commit">
                                                            Legal
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td headers="author">
                                                            Epic Estimate:
                                                        </td>
                                                        <td headers="commit">
                                                            <aui-badge class="aui-badge-primary">19M</aui-badge>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td headers="author">
                                                            Epic Time Spent:
                                                        </td>
                                                        <td headers="commit">
                                                            <aui-badge>0</aui-badge>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td headers="author">
                                                            Epic Time Remaning:
                                                        </td>
                                                        <td headers="commit">
                                                            <aui-badge>0</aui-badge>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td headers="author">
                                                            Epic Ratio:
                                                        </td>
                                                        <td headers="commit">
                                                            <aui-badge>0</aui-badge>
                                                        </td>
                                                    </tr>
                                                    
                                                </tbody>
                                                
                                                
                                            </table>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="aui-item ">
                                    <div class="aui-page-panel">
                                        <div class="aui-page-panel-inner aui-page-panel-inner-shadow">
                                            <table class="aui aui-table-list">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <h3><span class="aui-icon aui-icon-small aui-iconfont-group">Insert meaningful text here for accessibility</span> People</h3>
                                                        </td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td headers="author">
                                                            Reporter:
                                                        </td>
                                                        <td headers="commit">
                                                            <span class="aui-avatar aui-avatar-xsmall">
                                                                <span class="aui-avatar-inner">
                                                                    <img src="images/avatar-person.svg" alt="" role="presentation" />
                                                                </span>
                                                            </span>
                                                            Kelly Dorn
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td headers="author">
                                                            Voters:
                                                        </td>
                                                        <td headers="commit">
                                                            <aui-badge>0</aui-badge>
                                                            <a href="">Voit of this issues</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td headers="author">
                                                            Watcher:
                                                        </td>
                                                        <td headers="commit">
                                                            <aui-badge>2</aui-badge>
                                                            <a href="">Stop watching of this issues</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="aui-item ">
                                    <div class="aui-page-panel">
                                        <div class="aui-page-panel-inner aui-page-panel-inner-shadow">
                                            <table class="aui aui-table-list">
                                               
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <h3><span class="aui-icon aui-icon-small aui-iconfont-calendar">Insert meaningful text here for accessibility</span> Dates</h3>
                                                        </td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td headers="author">
                                                            Created:
                                                        </td>
                                                        <td headers="commit">
                                                            <time datetime="2013-11-28T11:52+1100">11:52 AEST, November 28 2013</time>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td headers="author">
                                                            Update:
                                                        </td>
                                                        <td headers="commit">
                                                            <time datetime="2013-11-28T11:52+1100">11:52 AEST, November 28 2013</time>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td headers="author">
                                                            Calendar Start:
                                                        </td>
                                                        <td headers="commit">
                                                            <time datetime="2013-11-28T11:52+1100">11:52 AEST, November 28 2013</time>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td headers="author">
                                                            Calendar Finish:
                                                        </td>
                                                        <td headers="commit">
                                                            <time datetime="2013-11-28T11:52+1100">11:52 AEST, November 28 2013</time>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                
                                            </table>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="aui-item ">
                                    <div class="aui-page-panel">
                                        <div class="aui-page-panel-inner aui-page-panel-inner-shadow">
                                            <table class="aui aui-table-list">
                                                
                                                
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <h3><span class="aui-icon aui-icon-small aui-iconfont-graph-line">Insert meaningful text here for accessibility</span> Time tracker</h3>
                                                        </td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td headers="author">
                                                            Remaning:
                                                        </td>
                                                        <td headers="commit">
                                                            <aui-progressbar id="with-attributes" value="0" max="100"></aui-progressbar>
                                                            <span>0 m</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td headers="author">
                                                            Logged:
                                                        </td>
                                                        <td headers="commit">
                                                            <aui-progressbar id="with-attributes" value="50" max="100">40</aui-progressbar>
                                                            <span>5 m</span>
                                                        </td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    
                                   
                                </div>
                                <div class="aui-item aui-item-margin">
                                    <div class="aui-page-panel">
                                        <div class="aui-page-panel-inner aui-page-panel-inner-shadow">
                                            <table class="aui aui-table-list">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <h3><span class="aui-icon aui-icon-small aui-iconfont-comment">Insert meaningful text here for accessibility</span>Comment</span> People</h3>
                                                        </td>
                                                        <td></td>
                                                    </tr>
                                                    
                                                   
                                                    
                                                </tbody>
                                            </table>
                                            <div class="block-comment">
                                    
                                                
                                                <textarea  class="textarea" name="comment" id="mytextarea" placeholder="Your comment here..."></textarea>
                                            
                                                <div class="aui-buttons">
                                                        <button class="aui-button aui-button-primary">Добавить</button>
                                                        <button class="aui-button">Отменит</button>
                                                    </div>
                                        </div>
                                        </div>
                                    </div>
                                   
                                </div>
                                
                            </div>
                            
                            
                        </div>
                    </div>
                    
                    
                    
                    
                </section>
            </div>
        </div>
    </div>
    
    </div>
    <?php include ("block/footer.php");?>
    <?php include ("block/mob-nav.php");?>
    <script type="text/javascript">
    $('.mob-block-slider').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  centerMode: true,
  arrows: false,
  focusOnSelect: true

});
  </script>
</body>
</html>