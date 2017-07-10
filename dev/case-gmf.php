<?php include "header.php" ?>

    <div class="page" id="gmf">
      <div class="container portfolio-gmf">
          <h1>The Challenge</h1>
          <img class='case-img right' src="img/portfolio/oca-small.jpg" alt="GM Financial Online Credit Application"/>
          <p>The GM Financial site redesign offered a unique challenge. I was fresh out of college and
            excited to undertake my first professional project. Within a month of being hired at GM Financial,
            the two team members above me left for other job opportunities, leaving me as the most senior member
            of the team, with only a month's experience.</p>
          <p>As a greenhorn in the industry, with management and the other freshly hired developers looking for
            leadership within the team, I decided to try my hand taking charge, despite my nervousness. Under
            ordinary circumstances, the pressure of just leading the redesign of a site that gets over two million
            visitors a month would be enough, but there was another constraint to the project: time.</p>
          <p>There was a redesign of our MyAccount platform in the pipeline as well, being developed by a third-party
            vendor. Their update was set to go live in two months, and we had have our redesign ready for production
            within the same timeframe. We had two months to redesign and develop five sites, as well as do <thead>
            QA testing for each.</p>
      </div>
        <div class="container portfolio-gmf">
          <h1>The Stack</h1>
          <div class="grid tech">
              <!-- HTML Grid -->
              <div class="grid-1-3" id="0">
                  <div>
                      <img src="img/tech-logos/html.svg">
                      <p>Utilized HTML5 and followed WCAG guidelines to markup sites for accessibility for our Canada properties</p>
                  </div>
              </div>
              <!-- CSS Grid -->
              <div class="grid-1-3" id="1">
                  <div>
                      <img src="img/tech-logos/css.svg">
                      <p>Approximately 10,000 lines of CSS code were written or modified during the course of the project</p>
                  </div>
              </div>
              <!-- Javascript grid -->
              <div class="grid-1-3" id="2">
                  <div>
                      <img src="img/tech-logos/javascript.svg">
                      <p>Javascript provided our front-end solution for logic for various elements</p>
                  </div>
              </div>
              <div class="grid-1-3" id="2">
                  <div>
                      <img src="img/tech-logos/jquery.svg">
                      <p>The JQuery library was used to provide front-end animations and scripting solutions</p>
                  </div>
              </div>
              <div class="grid-1-3" id="2">
                  <div>
                      <img src="img/tech-logos/visual-studio.svg">
                      <p>Utilize TFS in conjuction with Visual Studio to manage the team's collaborative effort</p>
                  </div>
              </div>
          </div>
        </div>
        <div class="container portfolio-gmf">
            <h1>Timeline</h1>
            <div class='timeline'>
              <div class='row'>
                <div><p>Week 1</p></div>
                <div><p>Our first week on the project was mainly devoted to making design and development decisions. We had
                  to decide whether to keep the current, ancient codebase or start fresh. If we had more time, we
                  would have elected to just scrap the current codebase. The CSS was horribly maintained and a huge mess, and the HTML markup wasn't much better,
                  but with just a little over a month to completely redesign five sites, starting fresh wasn't an option.
                  There just wouldn't be enough time. </p>
                <p>We had to make decisions on a number of other issues, such as how deployment would
                  be handled, what styles we would need to adhere to meet WCAG compliance, .</p>
                <p>Basic development began towards the end of the week. </p></div>
              </div>
              <div class='row'>
                <div><p>Week 2</p></div>
                <div><p>The second week was a blur as we buried our heads in our keyboards to try and get a head start on
                  development. Since the third part already had a style guide created for the MyAccount portal, we
                  were able to utilize that for a basic framework for development. </p>
                <p>We decided to focus on our US Consumer site first (gmfinancial.com) and then, time-permitting, port
                  the redesign to the rest of the properties. We were beginning to feel the pressure of the timeline,
                  as we were only about halfway through the US Consumer redesign after two weeks. It was going to be a
                  tight deadline.</p></div>
              </div>
              <div class='row'>
                <div><p>Week 3</p></div>
                <div><p>Week three was much of the same as week two. Things were hectic and we developed at a rapid pace.
                  I continued working on the US Consumer site, while two of my other team members began the process of porting
                  to the other various properties.</p>
                <p>Each property had multiple different components and elements that would need to be customized for use with the
                  new design.</p></div>
              </div>
              <div class='row'>
                <div><p>Week 4-5</p></div>
                <div><p>The last weeks before QA testing began was devoted to porting over styles and components to the other properties.
                This process ended up being more complicated than expected, becaues each sites original code was different from the other.
                The HTML structure was different and class names were different, which ended up breaking a lot of things that were ported over.
                Thankfully, the modularized structure of the CSS we had been developing made it a fairly easy fix. </p></div>
              </div>
              <div class='row'>
                <div><p>Week 6-8</p></div>
                <div><p>The final stretch of time was almost entirely devoted to QA testing. Our QA team got to work
                  checking the site for any errors and inconsistencies, trying to break it in any way possible.</p>
                <p>We must have closed out over a hundred defect tickets in this time, ranging from a minor style
                  inconsistency to an entire login field hidden away in the site breaking. It was a whirlwind
                  of work, but the feeling of satisfaction I had from finally closing the last one out was one
                  I haven't experienced before.</p></div>
              </div>
            </div>
        </div>
        <div class="container portfolio-gmf">
          <h1>Rebuild or Revamp?</h1>
          <div class="grid">
            <div class="grid-1-2">
              <p>The toughest decision we had to make as a team was to either start fresh with a completely clean
              codebase or to build and refine the one we had inherited. A lot of time and consideration went into
              this decision, since it would affect the timeline of the project completion.</p>
            <p>Our inherited codebase was fairly messy and unwieldy. Maintenance was an issue because of conflicting class
              styles and orphaned code. There was no naming convention in use, so classes were kind of haphazardly named. One
              would be abbreviated and short: </p>
              <pre><code class="css">.blk-btn</code></pre>
              <p>and the next was basically a hyphenated sentence: </p>
              <pre><code class="css">.leadership-team-page-container-mod-extended</code></pre>
              <p>There were also a number of odd classes mixed with markup that just simply made no sense, from either an SEO or maintainability standpoint:</p>
              <pre><code class="css">h1.like-h3, h2.like-h1</code></pre>
            </div>
            <div class="grid-1-2">
            <p>With over 10,000 lines of CSS like this, needless to say it would take a fair bit of effort to clean up.</p>
          <p>The argument boiled down to time. We would need to keep the existing
              HTML structure because it tied in to legacy back-end systems, so we'd have to keep class names and IDs for elements currently in use, lest we
              break something without realizing it. Our hands were pretty tied in regards to the tools we had at our disposal. SASS/LESS were off the table,
              since no software that could compile them was approved by NetSec, which severely increased the amount of time a complete rewrite would require.</p>
          <p>Problems with a fresh start piled up, so we decided that we would revamp the current codebase to suit our needs, and clean out the archaic code after
            the redesign went live.</p>
          <p>Even with all the issues a complete rewrite would have imposed, I still would have preferred a fresh start had time allowed. We could have
              engineered the CSS exactly the way we wanted it and have complete knowledge of the entire structure.</p>
            </div>
          </div>
        </div>
        <div class="container portfolio-gmf">
          <h1>CSS Structure</h1>
          <p>We decided to modularize our CSS as much as possible, in order to make it transferable from one site to another as much as possible. Obviously, there were some
            aspects of the design that this couldn't apply to, but we worked with what we had at our disposal.<p>
          <p>For example, a newsroom article might look something like this: </p>
          <pre><code class="html">&lt;div class='newsroom-article'&gt;
  &lt;h2&gt;
    Article Heading
  &lt;/h2&gt;
  &lt;p&gt;
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lacus et ipsum pharetra rhoncus vel sit amet ex. Pellentesque eu lorem pretium, ullamcorper ligula eu, rutrum neque.
  &lt;/p&gt;
&lt;/div&gt;</code></pre>
          <p>And then the corresponding CSS: </p>
          <pre><code class="css">.newsroom-article h1{
  font-size:1.4em;
  color: #FE68BE;
}

.newsroom-article p{
  line-height:1.2em;
}</code></pre>
          <p>Most of the styles for elements would be inherited from global styles and then any that we needed to change for that component would be overridden in the container div.
            Structuring it this way allowed us to ensure that no component's styles would clash with another. It also guarenteed that we could easily port components over to the other
            properties, which would be a huge time saver once development began on those.<p>
          <p>We opted not to use a naming convention for our classes like BEM, in order to keep the HTML clean and readable, as well as keep the existing class names that were necessary for
            some back-end services. <p>
        </div>

        <div class="container portfolio-gmf">
          <h1>The Result</h1>
          <p>Two months of hard work, overtime, and weekends resulted in a final product that I can say I'm proud to have been a part of. It's not perfect, but then again nothing is.
            The most important part is that clients across the business were very pleased with the result and we got a ton of positive feedback when it launched. Upper management recognized
            the hard work we put in and praised the redesign multiple times in team meetings.</p>
          <p>This project was the toughest and most challenging professional experience I've had to date, but it was also the most rewarding. Take a look at the results.</p>
          <div class="lightbox grid">
            <div class="grid-1-3">
              <a href='img/portfolio/rightnotes-small.jpg' data-rel='lightcase:gmf' title="Right Notes Landing Page. <a href='img/portfolio/rightnotes-full.jpg' target='_blank'>View full image</a>"><img src='img/portfolio/rightnotes-small.jpg' /></a>
            </div>
            <div class="grid-1-3">
              <a href='img/portfolio/gmf-home.jpg' data-rel='lightcase:gmf'  title="GM Financial Home Page. <a href='img/portfolio/gmf-home.jpg' target='_blank'>View full image</a>"><img src='img/portfolio/gmf-home.jpg' /></a>
            </div>
            <div class="grid-1-3">
              <a href='img/portfolio/oca-small.jpg' data-rel='lightcase:gmf'  title="Online Credit Application. <a href='img/portfolio/oca-small.jpg' target='_blank'>View full image</a>"><img src='img/portfolio/oca-small.jpg' /></a>
            </div>
          </div>
        </div>
    </div>

    <!-- <div class="arrow-down">
      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        width="30px" height="20px" viewBox="0 0 500 300" enable-background="new 0 0 500 300" xml:space="preserve">
        <polyline fill="none" stroke="#92808b" stroke-width="40" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
            52.203,57 250,254.975 448.5,57 "/>
      </svg>
      <p>Scroll</p>
    </div> -->

<?php include "footer.php" ?>
