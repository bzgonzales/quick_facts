
{include file="header.tpl" title=foo}

    <section class="hero">
        <img src="//www.villaaiko.com/resources/aiko/headers/xVilla,P20Aiko,P20-,P20Upstairs,P20open-living.jpg.pagespeed.ic.TtlOYcKXw7.webp" data-src="//www.villaaiko.com/resources/aiko/headers/xVilla,P20Aiko,P20-,P20Upstairs,P20open-living.jpg.pagespeed.ic.TtlOYcKXw7.webp" data-sizes="(min-width: 1281px) 1920px, auto" data-srcset="//www.villaaiko.com/resources/aiko/headers/mobile/Villa%20Aiko%20-%20Upstairs%20open-living.jpg 767w, //www.villaaiko.com/resources/aiko/headers/small/Villa%20Aiko%20-%20Upstairs%20open-living.jpg 1400w, //www.villaaiko.com/resources/aiko/headers/Villa%20Aiko%20-%20Upstairs%20open-living.jpg 1920w" alt="Villa Aiko - Upstairs open-living" class="new-parallax" data-pagespeed-url-hash="2446007092" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" sizes="(min-width: 1281px) 1920px, auto" srcset="//www.villaaiko.com/resources/aiko/headers/mobile/Villa%20Aiko%20-%20Upstairs%20open-living.jpg 767w, //www.villaaiko.com/resources/aiko/headers/small/Villa%20Aiko%20-%20Upstairs%20open-living.jpg 1400w, //www.villaaiko.com/resources/aiko/headers/Villa%20Aiko%20-%20Upstairs%20open-living.jpg 1920w">
    </section>

    <section class="quickfacts">
        <div class="container">
            <h1 class="entry-title"><span>Quick</span> Facts</h1>             
            <div class="main-content">
                {if isset($quickfacts) }                
                    {section name=fact1 loop=$quickfacts}
                        <div class="item icon{$smarty.section.fact1.index}">
                            <img src="{$quickfacts[fact1].icon}">
                            <div class="desc">
                                <h3>{$quickfacts[fact1].title}</h3>
                                <p>{$quickfacts[fact1].description}</p>
                            </div>
                        </div>
                    {/section}
                {/if}
            </div>       
        </div>
    </section>

</div> {* end #content*}


{include file="footer.tpl"}
