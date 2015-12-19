<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>sharePage</title>
    <script type="text/javascript" src="/catherine.shareus/Public/media/js/jquery-2.1.4.js"></script>
    <link rel="stylesheet" href="/catherine.shareus/Public/css/animate.min.css">
    <link type="text/css" rel="stylesheet" href="/catherine.shareus/Public/css/common.css">
    <link rel="shortcut icon" href="/catherine.shareus/Public/images/favicon.ico" />
    <link rel="bookmark" href="/catherine.shareus/Public/images/favicon.ico" type="image/x-icon"　/>
</head>
<body>
    <div class="nav-top animated fadeIn" >
        <button>
            <span></span>
            <span></span>
            <span></span>
        </button>
        <span class="nav-top-brand">
          <a href="#!/">
          <img alt="brand" src="/catherine.shareus/Public/images/logo.jpg">
        </a>
        </span>
        <span class="logo"><a href="javascript:;" >login</a></span>
        <ul>
            <li><a href="javascript:;" >moive</a></li>
            <li><a href="javascript:;" >moive</a></li>
            <li><a href="javascript:;" >moive</a></li>
            <li><a href="javascript:;" >moive</a></li>
        </ul>

    </div>
    <div class="search animated bounceIn">
        <span class="window">
            <input type="text"/>
            <input type="button" value="Search" onclick="tips();" />
        </span>

        <!-- <input type="button" value="+" onclick="add();" /> -->
    </div>
    <div class="key-word">
    </div>
    <div class="main-content animated zoomInRight">
        <div class="list">
            <ul>
                <li><a href="http://cl.pocl.ws/htm_data/7/1508/1613634.html" target="_blank">[图说]  熔断机制 （08.25）</a></li>
                <li><a href="###">[日式冷003期]秋刀鱼的滋味，猫和你都想了解 </a></li>
                <li><a href="http://cl.pocl.ws/htm_data/7/1508/1613634.html" target="_blank">[图说]  熔断机制 （08.25）</a></li>
                <li><a href="###">[日式冷003期]秋刀鱼的滋味，猫和你都想了解 </a></li>
                <li><a href="http://cl.pocl.ws/htm_data/7/1508/1613634.html" target="_blank">[图说]  熔断机制 （08.25）</a></li>
                <li><a href="###">[日式冷003期]秋刀鱼的滋味，猫和你都想了解 </a></li>
                <li><a href="http://cl.pocl.ws/htm_data/7/1508/1613634.html" target="_blank">[图说]  熔断机制 （08.25）</a></li>
                <li><a href="###">[日式冷003期]秋刀鱼的滋味，猫和你都想了解 </a></li>
                <li><a href="http://cl.pocl.ws/htm_data/7/1508/1613634.html" target="_blank">[图说]  熔断机制 （08.25）</a></li>
                <li><a href="###">[日式冷003期]秋刀鱼的滋味，猫和你都想了解 </a></li>
            </ul>
            <button>显<br/>示<br/>列<br/>表</button>
        </div>
    </div>
<!--    <div class="sub-content">
        <b>[日式冷003期]秋刀鱼的滋味，猫和你都想了解</b>
        <span>&nbsp;&nbsp;&nbsp;&nbsp;最近，“一条”的创始人徐沪生写了一篇文章，在朋友圈里广为流传，标题叫《独立思考的前提是你读过上百本经典》。这篇文章真切地说出了近一段时间来我内心的焦虑感。

尤其是里面有这样一段话：

“如果说，我们这些媒体人、专栏作者的那点小聪明，是茶杯里的几片茶叶的话，普鲁斯特（《追忆似水年华》的作者）这种人的才华，就是漫山遍野的茶树林。我们茶杯里的这几片茶叶，泡几次，就一点味道也没有了。不过是把茶叶晒干了再泡、泡了再晒，自欺欺人到了疯狂的地步。”

我把这段话mark下来，转发给许多媒体和作家的朋友看——它多么一针见血地说出了我们的时代病。这个时代病，是碎片化阅读、微信式写作年代最需要警惕的症状。

“碎片化阅读”的概念由来已久这里无需赘述，“微信式写作”是我在写这篇专栏时新想到的名词。
</span>
    </div>-->
     <script type="text/javascript">
        var tips = function (){
        };

        keyWord = {
            keyWords : new Array(),
            checkExists : function(newKey) {
                var flag = true;
                $.each(this.keyWords,function(i, key) {
                    if(key == newKey) {
                        flag = false;
                        return false;
                    }
                });
                return flag;
            }
        }

        function add() {
            var mark = $(".window input").val();
            if(keyWord.checkExists(mark)){
                keyWord.keyWords.push(mark);
                var button = '<input type="button" value="'+ mark + '"/>';
                $(button).appendTo($(".key-word"));
            } else {
                alert('已存在');
            }

        }

    </script>
</body>
</html>