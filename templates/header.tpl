<!DOCTYPE html> <!--[if IE]><![endif]--> <!--[if IE 8 ]>
<html dir="ltr" lang="en" class="ie8"><![endif]--> 
<!--[if IE 9 ]><html dir="ltr" lang="en" class="ie9"><![endif]--> 
<!--[if (gt IE 9)|!(IE)]><!--> 
<html dir="ltr" lang="en"> <!--<![endif]--> 
<head> 

	<meta charset="UTF-8" /> 
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 

    <TITLE>{$Title} | {$Name}</TITLE>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/custom.min.css">

</head>
<BODY>

<header id="header" class="">
    <div class="container main-menu">
        <div class="sticky-wrapper">
            <div class="nav-flex row">
                <div class="logo">
                    <a href="#">
                        <img src="//www.villaaiko.com/resources/aiko/images/xlogo-villa-aiko.png.pagespeed.ic.957pMCvYj-.webp" alt="" />
                    </a>
                </div>
                <nav class="nav">
                    <ul>
                        {foreach $navigation as $nav}
                            <li class="">
                                <a href="{$nav['link']}">{$nav['name']}</a>
                                {if isset($nav['subnav']) }
                                    <ul class="subnav">
                                        {foreach from=$nav.subnav key=k item=i}
                                            <li>
                                                <a href="{$i.slink}">{$i.sname}</a>
                                            </li>
                                        {/foreach}
                                    </ul>
                                {/if}

                            </li>
                        {/foreach}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<div id="content">
