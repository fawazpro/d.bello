		<!-- <h2 class="font-w3ls-style text-white">Testimonials</h2> -->
        </div>
	<!-- main -->

	<!-- Content -->
    <div class="gallery py-5" id="projects">
        <div class="container py-xl-5 py-lg-3">
            <!-- heading title -->
            <div class="mb-lg-5 mb-4 text-center">
                <h3 class="title-wthree mb-2">
                   <?=$blog['category'] ?></h3>
                <p class="sub-tittle-2"></p>
            </div>
            <div class="row">
            <div class="col-md-9">
                <!-- offset-4 -->
                <p class="text-dark" id="content">
                    <?=$blog['content'] ?>
                </p></div>
                <div class="d-none d-md-block col-md-3">
                    <!-- <h5>Previous Articles</h5>
                    <ul class="list-items">
                        <li>Hey There</li>
                        <li>I am here</li>
                        <li>Where were you</li>
                        <li>Okay</li>
                        <li>I love you</li>
                    </ul> -->
                </div>
            </div>
            <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

var disqus_config = function () {
this.page.url = '<?=base_url().'/details?id='.$blog['id'] ?>';  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = '<?= $blog['id'] ?>'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://semiubello-com.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
        </div>
    </div>
    <!--//Content-->
    <script id="dsq-count-scr" src="//semiubello-com.disqus.com/count.js" async></script>
